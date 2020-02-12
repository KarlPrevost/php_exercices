#!/usr/bin/php
<?php
$tree = array(); //crée un array vide
$archiveName = "output.mytar"; //Nom de tarball de sorti
$jsonArray = array(); //crée un array vide
$filesArray = $argv; //contient dans un array la ligne de commande rentré dans le terminal
array_splice($filesArray, 0, 1); //trie l'appel de script
if (empty($filesArray)) // si aucnun fichier echo +exit
{
echo "Veuillez entrer le nom des fichiers à archiver.\n";
exit;
}

$tree = list_files_folders($filesArray); //met dans $tree la liste des fichiers appelé
$jsonArray = tree_to_json($tree, $jsonArray); //$jsonArray contient le nom, le chemin et le contenu du fichier
$archiveName = addFilesToArchive($archiveName, $jsonArray); //ajout le/les fichier à l'archive nommé $archiveName
compress($archiveName); //compresse l'archive


function list_files_folders($filesArray) //liste les fichiers dans un array $tree
{
global $tree;
foreach ($filesArray as $file)
{
if (is_dir($file))
{
$tree = scan_folder('/' . $file); //si c'est un dossier appel la fonction scan_folder
}
elseif (file_exists($file))
{
array_push($tree, "./" . $file); //si c'est un fichier le push dans $tree
}
else
{
echo "Erreur : $file n'existe pas !\n"; //sinon echo une erreur
exit;
}
}
return $tree;
}


function scan_folder($directory) //cherche des fichiers dans les sous dossiers
{
global $tree;
$relative = '.'.$directory;
if($dh = opendir($relative))
{
while(false !== ($file = readdir($dh))) //boucle la recherche de fichier dans les dossiers en essayant de lire les entrées de fichier
{
if(($file !== '.') && ($file !== '..')) //si ce n'est pas un fichier continu
{
if(!is_dir($relative . $file)) //verifie si ce n'est pas égal à un dossier
{
array_push($tree, "." . $directory . $file); //si oui push dans l'array $tree à la fin du tableau
}
else
{
scan_folder($directory.$file.'/'); //sinon continu la recherche via la recursivité de scan_folder
}
}
}
}
return $tree;
}


function createArchive($name) //crée l'archive avec fopen nommée $name = $archiveName
{
fopen($name, 'a');
echo "Création de l'archive : " . $name . "\n";
return true;
}


function tree_to_json($tree, $jsonArray) //reorganise dans l'array $jsonArray les infos sous le format 'name' => $filename, 'path' => $path, 'content' => $fileContent contenu dans l'array $tree
{
foreach ($tree as $file)
{
$tmp = explode('/', $file);
$filename = end($tmp);
$fileContent = file_get_contents($file);
$path = array_slice($tmp, 0, -1);
$path = implode("/", $path);
$jsonArray[] = array('name' => $filename, 'path' => $path, 'content' => $fileContent);
}
return $jsonArray;
}


function addFilesToArchive($archiveName, $jsonArray) //rajoute les fichiers dans l'archive
{
createArchive($archiveName); //appel la fonction de creation d'archive
foreach ($jsonArray as $file)
{
echo "Ajout du fichier : " . $file['name'] . "\n";
file_put_contents($archiveName, utf8_encode(json_encode($jsonArray))); //put dans $archiveName le nom, le chemin et le contenu sous format Json
}
echo "Archivage terminé !\n";
return $archiveName;
}


function compress($archiveName) //compress l'archive
{
$tmp = file_get_contents($archiveName); //recupere le contenu de $archiveName
$tmp = gzcompress($tmp); //et le compress
if(file_put_contents($archiveName, $tmp)) //si compression reussi echo reussi
{
echo "Compression terminée ! \n";
return true;
}
else
{
echo "Une erreur s'est produite... dommage !\n"; //sinon echo une erreur
return false;
}
}
?>