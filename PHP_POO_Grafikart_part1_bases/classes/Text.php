<?php

namespace Tutoriel;
/**
 * Class Text
 * Permet de manipuler du texte
 */

class Text
{
    private static $suffix = " €";
    const SUFFIX = " £";

    /**
     * Methode publique pour appeler la méthode privée
     * @param int $chiffre 
     * @return string
     */
    public static function publicWithZero($chiffre)
    {
        return self::withZero($chiffre);
    }

    /**
     * @param int $chiffre: le chiffre à préfixer par des 0 si < 10
     * @return string
     */
    private static function withZero($chiffre)
    {
        if($chiffre < 10)
        {
            return '0'.$chiffre.self::SUFFIX;
        }
        else
        {
            return $chiffre.self::SUFFIX;
        }
    }
}