<?php
include "konekcija.php";
include "Vest.class.php";

// Pomoću funkcije vratiVesti iz klase Vest, dobijamo sve vesti iz baze
// skladištene u $sve_vesti
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
                    <h1 style="color:red;">Obriši vest</h1>
                </div>
            </div>
        </div>
        <div class="row dodaj_vesti">
            <div class="col-lg-2 col-xs-12">

            </div>
            <div class="col-lg-8 col-xs-12">
                <div class="well">
                    <form action="" method="POST">
                    <select name="vest" id="vest" class="form-control">
                            <option value="">Izaberi vest</option>
                            <?php
                            // Nakon klika za izbor vesti, izlistaće nam se sve vesti sortirane po id,
                            // a prikazivaće nam se naslov vesti
                            for($i =0; $i < count($sve_vesti);$i++) {
                            ?>
                                <option value=" <?php echo $sve_vesti[$i]->id; ?>"><?php echo $sve_vesti[$i]->naslov; ?> </option>

                            <?php
                            }
                            ?>
                        </select>
                        <br>
                        <button type="button" onclick="obrisi();" class="btn btn-danger btn-block">Obrisi </button>
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
    <script>
        function obrisi() {

            // Preko jquery.get() prosledićemo informaciju o  vestima odnosno id vesti
            // Upotrebljuje se controller.php kako bi dodelili id vesti i naziv akcije
            var vest_id = $("#vest").val();
            $.get("controller.php?vest_id="+vest_id+"&akcija=obrisiVest", function(data) {
                alert(data);
            });
            
        }
    </script>
</body>

</html>