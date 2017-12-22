<?php
    /*
    == est égal
    != est différent
    && et
    || ou
    */
    
    setlocale(LC_TIME, 'fr');//Modifie les informations de localisation
    date_default_timezone_set("Europe/Paris");
    echo strftime('%H:%M:%S');

    $heure = strftime('%H');

    if(!($heure < 18))//! négation
    {
        echo "<br />Bonsoir !";
    }
    else
    {
        echo "<br />Bonjour !";
    }
?>

<br /><br />

<?php
    $note = 20;

    switch($note)
    {
        case 0: 
            echo "Tu es vraiment un gros nul !!!";
        break;//'break' permet d'arrêter la lecture

        case 5: 
            echo "Tu es très mauvais";
        break;

        case 7: 
            echo "Tu es mauvais";
        break;

        case 10: 
            echo "Tu as pile poil la moyenne, c'est un peu juste…";
        break;

        case 12: 
            echo "Tu es assez bon";
        break;

        case 16: 
            echo "Tu te débrouilles très bien !";
        break;

        case 20: 
            echo "Excellent travail, c'est parfait !";
        break;

        default: 
            echo "Désolé, je n'ai pas de message à afficher pour cette note";
        break;
    }
?>

<br /><br />

<?php
    //Les ternaires

    $age = 24;

    $majeur = ($age >= 18) ? true : false; 
    //si $age >= 18 alors $majeur = true sinon $majeur = false
?>
    