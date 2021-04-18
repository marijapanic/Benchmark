<?php
include "konekcija.php";
include "Kategorija.class.php";
include "Vest.class.php";

// Pomoću funkcije vratiKategorije iz klase Vest, dobijamo sve kategorije iz baze
// skladištene u $sve_kategorije
$sve_kategorije = Kategorija::vratiKategorije();

// Ukoliko je "setovan" submit, korisnik bira kategoriju i upisuje naslov i tekst
// zatim preko konstruktora definisanog u klasi Vest, dodelićemo mu ove nove vrednosti
// Na osnovu povratne vrednosti iz funkcije dodajVest(), dobićemo informaciju da li je 
// uspešno dodata vest
if (isset($_POST['submit'])) {
    $kategorije_id = $_POST['kategorija'];
    $naslov = $_POST['naslov'];
    $tekst = $_POST['tekst'];
    $nova_vest = new Vest($naslov,$tekst,$kategorije_id);
   
    if ($nova_vest->dodajVest()== true) {
        $msg = "Uspesno zavrseno";
    } else {
        $msg = "greska";
    }

}
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
}
</style>
<body>
    <?php include "includes/navbar.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                include "includes/jumbotron.php";
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h1 style="color:white;">Dodaj vest</h1>
                </div>
            </div>
        </div>
        <div class="row dodaj_vesti">
            <div class="col-lg-2 col-xs-12">

            </div>
            <div class="col-lg-8 col-xs-12">
                <div class="well">
                    <?php if (isset($msg)) { ?>
                        <div class="alert alert-info text-center">
                            <?php echo $msg; 
                            // Ukoliko je pokušano dodavanje, dobiće se poruka
                            ?>
                        </div>
                    <?php } ?>

                    <form action="" method="POST">
                        <select name="kategorija" id="kategorija" class="form-control">
                            <option value="">Izaberi kategoriju</option>
                            <?php
                            // Očitavamo sve kategorije i prikazujemo njihov naziv sortiran prema njihovom id
                            for($i =0; $i < count($sve_kategorije);$i++) {
                            ?>
                                <option value=" <?php echo $sve_kategorije[$i]->id; ?>"><?php echo $sve_kategorije[$i]->naziv; ?> </option>

                            <?php
                            }
                            ?>

                        </select>
                        <input type="text" id="naslov" name="naslov" class="form-control" placeholder="Naslov">
                        <textarea name="tekst" id="tekst" cols="30" rows="10" class="form-control" placeholder="Unesite tekst vesti"></textarea>
                        <br>
                        <input type="submit" id="submit" name="submit" class="btn btn-success btn-block" value="Posalji">
                        <br>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-xs-12"> </div>
        </div>
    </div>
    <?php include "includes/footer.php"; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>