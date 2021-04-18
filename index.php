<?php
include "konekcija.php";
include "Kategorija.class.php";
include "Vest.class.php";

// Pomoću funkcija vratiVesti i vratiKategorije iz klase Vest, dobijamo sve vesti i 
// kategorije iz baze skladištene u $sve_vesti i $sve_kategorije
$sve_kategorije = Kategorija::vratiKategorije();
$sve_vesti = Vest::vratiVesti();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Benchmark</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<style>
body {
    background-image: url('slika.jpg');
    background-repeat:no-repeat;
    background-attachment: fixed;
    background-size: cover;
    font-family:Verdana; 
    color: white;
  }

</style>
<body>
    <?php include "includes/navbar.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php include "includes/jumbotron.php";
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h5 style="text-align:center">Budite u toku sa svim IT dešavanjima, saznajte poslednje IT vesti - prvi! Testovi najnovijih uređaja, telefona, laptopova, računarskih komponenti, najnovije vesti iz dinamičnog IT sveta </h5>
                    
                    <br>
                </div>
            </div>
        </div>
        <br>
        <div class="row pretraga_vesti">
            <div class="col-lg-3">
                <h5 >Filteri za pretragu</h5>
                
                    <select name="kategorija" id="kategorija" class="form-control">
                        <option value="999">Sve kategorije</option>
                        <?php
                        // Učitava sve kategorije sortirane po id i ispisuje njihov naziv
                        for ($i = 0; $i < count($sve_kategorije); $i++) {
                        ?>
                            <option value=" <?php echo $sve_kategorije[$i]->id; ?>"><?php echo $sve_kategorije[$i]->naziv; ?> </option>

                        <?php
                        }
                        ?>

                    </select>
                    <br>
                    <input type="text" id="pretraga" name="pretraga" class="form-control" placeholder="Unesi naslov...">
                    <br>
                    <button onclick="primeniFilter();" class="btn btn-primary btn clock">Primeni filtere</button>
               
             </div>
            </div>
            <div class="col-lg-9">
                <h2 >Vesti</h2>
                <div id="sve_vesti">
                    <div class="row text-block">
                        <?php for ($i = 0; $i < count($sve_vesti); $i++) { 
            // Učitava sve vesti i prikazuje njihov naslov i tekst po id ?>
                            <div class="col-lg-12">
                                <h4 style="text-align: center"><?php echo $sve_vesti[$i]->naslov; ?> </h4>
                                <p style="text-align: center"><?php echo $sve_vesti[$i]->tekst; ?> </p>
                                <hr>
                            </div>
                        <?php } ?>
                        <div class="col-lg-12">
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <?php include "includes/footer.php"; ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script>
            function primeniFilter() {
                var kategorija = $("#kategorija").val();
                var pretraga = $("#pretraga").val();
          // Preko jquery.post() dobićemo vrednost kategorije i pretrage odnosno preko njihovog id 
         // Upotrebljuje se controller.php kako bi dodelili argumente funkciji pretraga u klasi Vest
                $.post("controller.php?akcija=pretraga", {
                        kategorijaP: kategorija,
                        pretragaP: pretraga
                    })
                    .done(function(data) {
                        $("#sve_vesti").html(data);
                    });
            }
        </script>
</body>
</html>