<?php
    class Vest{
        private $naslov;
        private $tekst;
        private $kategorije_id;

        // Kreiranje (dodeljivanje vrednosti poljima) vesti
        public function __construct($naslov,$tekst,$kategorije_id)
        {
            $this->naslov = $naslov;
            $this->tekst = $tekst;
            $this->kategorije_id = $kategorije_id;
        }

        // Vrši se operacija INSERT, koja ima za cilj da setuje nove vrednost 
        // i da izveštava da li je ova operacija uspešno završena
        public function dodajVest(){
            global $mysqli;
            $sql = "INSERT INTO vesti (naslov,tekst,kategorije_id) VALUES ('".$this->naslov."','".$this->tekst."','".$this->kategorije_id."')";
            if($q = $mysqli->query($sql)){
                return true;
            } else {
                return false;
            }
        }
        // Vrši se operacija UPDATE, koja ima za cilj da promeni kategoriju vesti i
        //  da vrati true/false o uspešnosti ove operacije
        public function izmeniVest($id){
            global $mysqli;
            $sql = "UPDATE vesti SET kategorije_id='$this->kategorije_id' WHERE id='$id'";
            if($q=$mysqli->query($sql)){
                return true;
            } else {
                return false;
            }
        }
        // Vrši se operacija DELETE, koja ima za cilj da izbriše vest 
        // i da vrati uspešnost ove funkcije kroz true/false
        public static function obrisiVest($id){
            global  $mysqli;
            $sql = "DELETE FROM vesti WHERE id='$id'";
            if($q = $mysqli->query($sql)){
                return true;
            } else {
                return false;
            }
        }
        // Preko operacije SELECT, skladištimo informacije u $sql
        // Zatim vršimo upit nad bazom podataka,a pomoću fetch_object() koji vraća 
        // red(informacija) čija je vrednost setovana kao objekat čiji su atributi predstavnici imena
        // polja vesti i smešta ih u niz koji je ujedno i
        // povratna vrednost ove funkcije
        public static function vratiVesti(){
            global $mysqli;
            $sql = "SELECT * FROM vesti";
            $q = $mysqli->query($sql);
            $niz= [];
            while($red = $q->fetch_object()){
                $niz[] = $red;
            }
            return $niz;
        }
        // Ovde se vrši pretraga kao i upravljanje greškama
        // Ispitivanje svih slučaja i šta se dešava u svakom od njih
        public static function pretraga($kategorija,$pretraga){
            global $mysqli;
        if($kategorija == 999 && empty($pretraga)){
            $sql = "SELECT * FROM vesti ORDER BY id DESC";
        } else if($kategorija != 999 && empty($pretraga)){
            $sql = "SELECT * FROM vesti WHERE kategorije_id ='$kategorija' ORDER BY id DESC";
        }else if($kategorija == 999 && !empty($pretraga)){
            $sql = "SELECT * FROM vesti WHERE naslov LIKE '%$pretraga%' ORDER BY id DESC";
        }else {
            $sql = "SELECT * FROM vesti WHERE kategorije_id='$kategorija' AND naslov LIKE '%$pretraga%' ORDER BY id DESC";
        }

        $q = $mysqli->query($sql);
        $niz=[];
        while($red=$q->fetch_object()){
            $niz[] = $red;
        }
        return $niz;
    }
}
