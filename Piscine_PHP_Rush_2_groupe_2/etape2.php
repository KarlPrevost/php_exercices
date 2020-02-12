#!/usr/bin/php
<?php
unset($argv[0]);
$archiveNames = $argv; //recupère le nom du tarball
if (empty($archiveNames)) //si rien de renseigné echo
{
echo "Veuillez indiquer au moins le nom d'une archive à décompresser !\n";
exit;
}
foreach ($archiveNames as $archive)
{
if (!file_exists($archive)) //verifie si l'archive existe
{
echo "Erreur : Archive inexistante !\n";
exit;
}
}
if (unarchive($archiveNames)) //si la fonction unarchive s'effectue echo un message
{
echo "Désarchivage terminé !\n";
}
else
{
echo "Une erreur est survenue lors du désarchivage !\n"; //sinon echo une erreur
}
function unarchive($archiveNames) //decompress un tarball
{
$error = false;
foreach ($archiveNames as $archive)
{
$data = file_get_contents($archive); //recupère le contenu des fichiers contenu dans l'archive
$data = gzuncompress($data); //dezip les fichiers
$jsonArray = json_decode($data, true); //decode les fichiers contenu au format json dans un array associatif
foreach ($jsonArray as $file) //lit l'array
{
if (!is_dir($file['path'])) //si le chemin n'existe pas
{
mkdir($file['path'], 0755, true); //alors crée un dossier et gere les droits (enlève l'écriture pour les autres)
}
if (!file_exists($file['path'] . '/' . $file['name'])) //si le fichier n'existe pas
{
if (file_put_contents($file['path'] . '/' . $file['name'], utf8_decode($file['content'])) === false)
{
echo 'Erreur lors de l\'écriture du fichier : ' . $file['name'] . "\n"; //si fail lors de l'ecriture echo une erreur
}
else
{
echo 'Le fichier a été extrait : ' . $file['name'] . "\n"; //sinon echo ok
}
}
else
{
echo 'Le fichier existe déjà : ' . $file['name'] . "\n"; //si le fichier existe deja echo des options
echo "1 - Ecraser\n";
echo "2 - Ne pas écraser et créer nouveau fichier\n";
echo "3 - Ecraser pour tous (Ne plus redemander)\n";
echo "4 - Ne pas écraser pour tous (Ne plus redemander)\n";
echo "5 - Arrêter Quitter\n";

$choix = fgets(STDIN); //Permet d'écrire un choix dans la console et lit le choix en créant une varialbe

if($choix > 0 && $choix < 6)
{
if($choix==1)
{
$data = file_get_contents($archive);
$data = gzuncompress($data);
$jsonArray = json_decode($data, true);
echo "Fichier écrasé\n";


}

elseif($choix==2)
{

$data = file_get_contents($archive);
$data = gzuncompress($data);
$jsonArray = json_decode($data, true);
if ($choix == 2)
echo "Nom du nouveau fichier :\n";

$data = rename($file['name'], $choix = fgets(STDIN));
echo "Fichier non écrasé et nouveau fichier créé\n";
}

elseif($choix==3)
{
echo "Fichiers écrasés pour tous (Ne plus demander)\n";
}

elseif($choix==4)
{
echo "Fichiers non écrasés (Ne plus demander)\n";
}

elseif($choix==5)
{
echo "Arrêter et quitter\n";
exit(0);
}
}
else
{
echo "choix non valide\n";
}
}
}
}
if($error)
{
return false;
}
else
{
return true;
}
}