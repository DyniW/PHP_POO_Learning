<?php

namespace Tutoriel\HTML; 
//use \Grafikart\Date; appelle la fonction Date() du namespace Grafikart pour utilisation dans le contenu

/**
* class Form
* permet de générer un formulaire rapidement et simplement
*/

class Form
{
    /**
    * @var array: données utilisées par le formulaire
    */
    protected $data;
    /**
    * @var string: tag utilisé pour entourer les champs
    */
    public $surround = 'p';

    /**
    * @param array $data
    */
    public function __construct($data = array())
    {
        $this->data = $data;
    }

    /**
    * @param $html string: code HTML à retourner
    * @return string
    */
    protected function surround($html)
    {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    /**
    * @param $index string: index de la valeur à récupérer
    * @return string
    */
    protected function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
    * @param $name string
    * @return string
    */
    public function input($name)
    {
        return $this->surround('<input type="text" name="'.$name.'" value="'.$this->getValue($name).'"/>');
    }

    /**
     * @return string
     */
    public function submit()
    {
        return $this->surround('<button type="submit">Envoyer</button>');
    }

    /*
        public function date()
        {
            return new DateTime(); //fonction existante d'un autre namespace appellé 'Grafikart'
        }
    */
}