<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Ceci est une page HTML de test</title>
    </head>
    <body>
        <h2>Page de test</h2>
        
        <p>
            Cette page contient <strong>uniquement</strong> du code HTML.<br />
            Voici quelques petits tests :
        </p>
        
        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>

        <?php
            echo "Ceci est du texte en \"<strong>PHP</strong>\"";
        ?>

        <p>
            Aujourd'hui nous sommes le 
            <?php
                setlocale(LC_TIME, 'fr');//Modifie les informations de localisation
                date_default_timezone_set("Europe/Paris");
                echo utf8_encode((strftime('%A %d %B %Y, %H:%M:%S.')));//'strftime' formate une date/heure locale avec la configuration locale et 'utf8_encode' convertit en UTF-8

                echo "<br /><br />";

                $age = 17;
                echo '$age ans<br /><br />';

                $nom = "Matéo";
                echo 'je suis '.$nom;

                $true = true;

                $vide = NULL;//NULL ne contient rien
            ?>
        </p>
    </body>
</html>