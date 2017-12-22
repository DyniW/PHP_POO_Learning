<?php

namespace Tutoriel\HTML;

/**
* 
*/
class BootstrapForm extends Form
{
    /*
    function __construct(argument)
    {
        # code...
    }
    */

    /**
    * @param $html string: code HTML à retourner
    * @return string
    */
    protected function surround($html)
    {
        return "<div class='form-group'>{$html}</div>";
    }


    /**
    * @param $name string
    * @return string
    */
    public function input($name)
    {
        return $this->surround(
            '<label>'.$name.'</label><input type="text" name="'.$name.'" value="'.$this->getValue($name).'" class="form-control"/>'
        );
    }

    /**
     * @return string
     */
    public function submit()
    {
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }
}