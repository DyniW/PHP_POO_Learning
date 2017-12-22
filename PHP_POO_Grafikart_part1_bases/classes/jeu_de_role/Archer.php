<?php

namespace Tutoriel\jeu_de_role;

class Archer extends Personnage
{
    public $fleches = 3;//ajout d'un attribut different de ceux présents dans la classe personnage 
    protected $vie = 40;//la vie d'un archer, différente d'un personnage

    public function __construct($nom)//$vie) error, on ne peut ajouter de param non present dans la classe parent
    {
        $this->vie = $this->vie / 2;//change la vie par défaut d'un Personnage Archer
        parent::__construct($nom);
    }

    public function attaque($cible)
    {
        $cible->vie -= 2 * $this->atk;
        $cible->propriete_vie();

        parent::attaque($cible);//appelle la propriete d'attaque du parent

        echo '<pre>';
            var_dump($cible);//affiche la nouvelle valeur du personage cible
        echo '</pre>';
    }

    /*  
        //retourne une erreur parce qu'ajout de parametre pour une fonction qui n'en avait pas dans la classe parent
        public function mort($test)
        {
            return $this->vie <= 0;
        }
    */
}