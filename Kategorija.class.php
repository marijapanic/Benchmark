<?php
    class Kategorija{
        private $naziv;

        // Preko operacije SELECT, skladištimo informacije u $sql
        // Zatim vršimo upit nad bazom podataka,a pomoću fetch_object() koji vraća 
        // red(informacija) čija je vrednost setovana kao objekat čiji su atributi predstavnici imena
        // polja kategorije i smešta ih u niz koji je ujedno i
        // povratna vrednost ove funkcije
        public static function vratiKategorije(){
            global $mysqli;
            $sql = "SELECT * FROM kategorija";
            $q = $mysqli->query($sql);
            $niz = [];
            while($red = $q->fetch_object()){
                $niz[] = $red;
            }
            return $niz;
        }
    }
?>