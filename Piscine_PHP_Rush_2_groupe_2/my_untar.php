#!/usr/bin/php
<?php
unset($argv[0]);
$archiveNames = $argv; //recupère le nom du tarball
    if (empty($archiveNames))  //si rien de renseigné echo
    {
        echo "Veuillez indiquer au moins le nom d'une archive à décompresser !\n";
        exit;
    }
    
    foreach ($archiveNames as $archive) 
    {
        if (!file_exists($archive))  //verifie si un archive existe dans le tarball et echo une erreur si non existant
        {
            echo "Erreur : Archive inexistante !\n";
            exit;
        }
    }
    if (unarchive($archiveNames)) //si la fonction unarchive s'effectue echo un message
    {
        echo "Désarchivage terminé !\n";
    }
    else   //sinon echo une erreur 
    {
        echo "Une erreur est survenue lors du désarchivage !\n";
    }
function unarchive($archiveNames)  //decompress un tarball
{
    $error = false;
    foreach ($archiveNames as $archive)
    {
        $data = file_get_contents($archive);  //recupère le contenu des fichiers contenu dans l'archive
        $data = gzuncompress($data);  //dezip les fichiers 
        $jsonArray = json_decode($data, true); //decode les fichiers contenu au format json dans un array associatif
        foreach ($jsonArray as $file)  //lit l'array 
        {
            if (!is_dir($file['path'])) //si le chemin n'existe pas
            {
                mkdir($file['path'], 0755, true);  //alors crée un dossier et gere les droits (enlève l'écriture pour les autres)
            }
            if (!file_exists($file['path'] . '/' . $file['name']))  //si le fichier n'existe pas
            {
                if (file_put_contents($file['path'] . '/' . $file['name'], utf8_decode($file['content'])) === false)  //si fail lors de l'ecriture echo une erreur 
                {
                    echo 'Erreur lors de l\'écriture du fichier : ' . $file['name'] . "\n";
                }
                else
                {
                    echo 'Le fichier a été extrait : ' . $file['name'] . "\n";  //sinon echo ok
                }
            }
            else
            {
                echo 'Le fichier existe déjà : ' . $file['name'] . "\n";  //si le fichier existe deja echo erreur 
                $error = true;
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
?>