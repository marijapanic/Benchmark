<?php
include "konekcija.php";
include "Kategorija.class.php";
include "Vest.class.php";

// Obriši vest
// Proveravamo dobijenu informaciju od globalne "GET" koja je akcija u pitanju
// Ukoliko je akcija obrisiVest, proverava povratnu vrednost funkcije obrisiVest u klasi Vest
// Na kraju ispisuje poruku o izvršenju akcije
if (isset($_GET['akcija']) && $_GET['akcija'] == "obrisiVest") {
    if (Vest::obrisiVest($_GET['vest_id']) == true) {
        echo "Vest je uspesno obrisana!";
    } else {
        echo "Doslo je do greske";
    }
}

// Pretraga
// Proveravamo dobijenu informaciju od globalne "GET" koja je akcija u pitanju
// Nakon dobijenih vrednosti za kategorijuP i pretrageP iz , njihove vrednosti će se 
// proslediti funkciji pretraga iz klase Vest,a pošto povratna vrednost $niz će biti
//smeštena u $pretraga
if (isset($_GET['akcija']) && $_GET['akcija'] == "pretraga") {
    $pretraga = Vest::pretraga(trim($_POST['kategorijaP']), trim($_POST['pretragaP']));
?>
    <div class="row">
        <?php

        // Nakon izvršene pretrage, ispisaćemo sve što odgovara kriterijumima pretrage
        // ,kao što su u ovom slučaju, naslov i tekst vesti nakon pretrage
        
        for ($i = 0; $i < count($pretraga); $i++) { ?>
            <div class="col-lg-12">
                <h3><?php echo $pretraga[$i]->naslov; ?> </h3>
                <p><?php echo $pretraga[$i]->tekst; ?> </p>
                <hr>
            </div>
        <?php }  ?>
    </div>
<?php
}

?>