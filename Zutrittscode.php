<?php

class Zutrittscode
{
public string $datum;
public string $passwort;

    function __construct($datum, $passwort){
        $this->datum = $datum;
        $this->passwort = $passwort;
    }

    function getDatum(){
        return $this->datum;
    }

    function getPasswort(){
        return $this->Passwort;
    }

}

