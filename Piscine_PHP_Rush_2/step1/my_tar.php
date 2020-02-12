<?php
/*
ETAPE 1
_ _ _ _ _ _ _ _ _ _ _
Rendu : Piscine_PHP_Rush_2/step_1/
Écrire un programme exécutable my_tar.php qui prend en ligne de commande, un ou plusieurs arguments,
qui sont des noms de fichiers ou dossiers à archiver. Le programme génère en sortie une tarball nommée
output.mytar (et l’écrase si elle existe déjà).
∇ Terminal - + x
∼/W-WEB-024> ls
file1 file2 file3 folder1 my_tar.php
∼/W-WEB-024> php my_tar.php file1 file2 folder1
∼/W-WEB-024> ls
file1 file2 folder1 my_tar.php output.mytar
∼/W-WEB-024>
Il faudra bien entendu gérer le maximum de formats de fichiers (txt, avi, png, mp3, etc.).
Vous devez gérer la récursivité.Il n’est pas impossible qu’un dossier contienne lui-même
d’autres dossiers et ainsi de suite. La commande tree peut rapidement vous apporter un
aperçu.
Il est strictement interdit de reprendre une fonction qui génère une archive.Tout l’intérêt
de ce sujet étant de recréer soit même les fonctionnalités. Si vous avez un doute sur
l’autorisation ou l’interdiction des fonctions que vous utilisez, demandez aux assistants.
*/
$argsFile = array_slice($argv, 1); // ["test", "test2", "test3"] -> ["test2", "test3"]
if(count($argv) === 1) { // no arguments specified we exit here
    echo("\033[31mNo arguments or files were specified  \"$filesNotFound[0]\"\033[0m\n");
    exit();
}
// organize data
$filesNotFound = array_filter($argsFile, function($value) { // put the non existing files in an array
    return file_exists($value) === false;
});
$filesNotFound = array_values($filesNotFound); // reindex
if(count($filesNotFound) >= 1) { // could not find one of the specified files
    echo("\033[31mCould not find \"$filesNotFound[0]\"\033[0m\n");
    exit();
}
$files = array_filter($argsFile, function($value) { // $files variable will only contain arguments that are files
    return is_file($value);
});
$folders = array_filter($argsFile, function($value) { // $folders variable will only contain arguments that are folders
    return is_file($value) === false;
});

/**
 * Organize the files and folders of a directory in an array
 *
 * @param [type] $dir
 * @return void
 */
function getTree($dir) {
    $tree = ["folder" => [], "files" => []];
    if(file_exists($dir) === false) {
        return false;
    }
    $files = scandir($dir); // liste dossier et fichier
    $tree["folder"] = array_filter($files, function($value) use($dir) {
        return is_file("$dir/$value") === false && $value !== "." && $value !== ".."; // ignore current and parent directory link
    }); 
    $tree["folder"] = array_values($tree["folder"]); // reindex
    $folders = [];
    foreach ($tree["folder"] as $key => $value) {
        $folders[$value] = ["folder" => [], "files" => []];
    }
    $tree["folder"] = $folders;
    $tree["files"] = array_filter($files, function($value) use($dir) {
        return is_file("$dir/$value");
    });
    $tree["files"] = array_values($tree["files"]); // reindex
    foreach ($tree["folder"] as $key => $value) {
        $tree["folder"][$key] = getTree("$dir/$key");
    }
    return $tree;
}

$tree = getTree("samples");
foreach ($tree as $key => $value) {
    # code...
}

$phar = new \PharData("samples.zip");

$a->addFile('data.xls');
$a->addFile('index.php');

// COMPRESS archive.tar FILE. COMPRESSED FILE WILL BE archive.tar.gz
$a->compress(Phar::GZ);