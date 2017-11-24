<?php
namespace PunktDe\Eel\Transliterator;

/*
 *  (c) 2017 punkt.de GmbH - Karlsruhe, Germany - http://punkt.de
 *  All rights reserved.
 */

use Behat\Transliterator\Transliterator;
use Neos\Eel\ProtectedContextAwareInterface;

class TransliteratorHelper implements ProtectedContextAwareInterface
{
    /**
     * Generates a slug of the given string
     *
     * @param $string
     * @return string
     */
    public function urlize(string $string)
    {
        return Transliterator::urlize($string);
    }

    /**
     * @param string $methodName
     * @return bool
     */
    public function allowsCallOfMethod($methodName)
    {
        return true;
    }
}
