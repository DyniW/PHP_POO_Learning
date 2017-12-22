<?php
    // La fonction array permet de créer un array
    $prenoms = array('François', 'Michel', 'Nicole');

    //Crée un prénom à la position 0
    $prenoms[0] = 'Mike';

    //Crée un prénom à la position suivante
    $prenoms[] = 'Ben';

    //affiche le prénom à la position demandée
    echo $prenoms[3];

?>

<br /><br />

<?php
    //Creation d'un tableau associatif
    $coordonnees = array(
                            'prenom'  => 'François',
                            'nom'     => 'Dupont',
                            'adresse' => '3 Rue du Paradis',
                            'ville'   => 'Marseille'
                        );
    /*
        ou

        $coordonnees['prenom'] = 'François';
        $coordonnees['nom'] = 'Dupont';
        $coordonnees['adresse'] = '3 Rue du Paradis';
        $coordonnees['ville'] = 'Marseille';
    */


    //affichage
    echo $coordonnees['ville']; 
?>

<br /><br />

<?php
    //Parcours de tableau

    //Avec 'for'
    for ($i = 0; $i < 4; $i++) 
    { 
        echo $prenoms[$i].'<br />';
    }
    /*
        foreach($prenoms as $element)
        {
            echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
        }
    */

    echo '<br />';

    //Avec 'foreach'
    foreach($coordonnees as $element)
    {
        echo $element . '<br />';
    }

    echo '<br />';

    foreach ($coordonnees as $key => $element)
    {
        echo '['.$key.'] vaut '.$element.'<br />';
    }

    //Avec 'print_r' pour debogage
    //La balise 'pre' représente le texte préformaté (pour un meilleur affichage) 
    echo '<pre>';
    print_r($coordonnees);
    echo '</pre>';


    //Verifier l'existence d'une clé avec 'array_key_exists('key', $array)'
    if(array_key_exists('adresse', $coordonnees))
    {
        echo "La clé demandée existe";
    }

    echo '<br />';

    //Verifier si une valeur existe avec in_array('element', $array)
    if(in_array('Dupont', $coordonnees))
    {
        echo "La valeur demandée existe";
    }
