<?php

class Acronimo {
    public function generar($frase) {
        $frase = preg_replace("/[^a-zA-Z\s-]/", "", $frase);
        $frase = str_replace("-", " ", $frase);
        $palabras = explode(" ", $frase);

        $acronimo = "";
        foreach ($palabras as $p) {
            if ($p != "") {
                $acronimo .= strtoupper($p[0]);
            }
        }
        return $acronimo;
    }
}

?>