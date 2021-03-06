<?php

/**
* class Form
* permet de générer un formulaire rapidement et simplement
*/

class Form
{
    /**
    * @var array: données utilisées par le formulaire
    */
    private $data;
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
    private function surround($html)
    {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    /**
    * @param $index string: index de la valeur à récupérer
    * @return string
    */
    private function getValue($index)
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
}