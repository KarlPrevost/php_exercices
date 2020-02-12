<?php
/*
ETAPE 2
_ _ _ _ _ _ _ _ _ _ _
Rendu : Piscine_PHP_Rush_2/step_2/
Écrire un programme exécutable my_untar.php qui prenden ligne de commande,un ou plusieurs arguments,
qui sont des tarball dont il faut extraire les données.Le programme génère en sortie un ou plusieurs fichiers
ou dossiers. En cas de conflit, lorsqu’un fichier ou dossier existe déjà, un prompt doit proposer plusieurs
choix :
1. Écraser
2. Ne pas écraser
3. Écaser pour tous (ne plus redemander)
4. Ne pas écraser pour tous (ne plus redemander)
5. Arrêter et quitter
∇ Terminal - + x
∼/W-WEB-024> ls
my_untar.php output.mytar
∼/W-WEB-024> php my_untar.php output.mytar
∼/W-WEB-024> ls
file1 fil2 folder1 my_tar.php output.mytar
∼/W-WEB-024>
*/
$files = array_slice($argv, 1);
$filesNotFound = array_filter($files, function($value) { // put the non existing files in an array
    return file_exists($value) === false;
});
$filesNotFound = array_values($filesNotFound); // reindex
if(count($filesNotFound) >= 1) { // could not find one of the specified files
    echo("\033[34mCould not find \"$filesNotFound[0]\"\033[0m");
    exit();
}
