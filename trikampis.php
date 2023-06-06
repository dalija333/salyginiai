<?php
$ats ="";
if(isset($_POST['a']) &  isset($_POST['b']) & isset($_POST['c'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    if($a+$b>$c &$c+$b>$a & $a+$c>$b) {
        if($a == $b & $b==$c) {
            $trk = "lygiakraštis";}
        elseif ($a == $b || $a==$c || $b==$c){
            $trk = "lygiašonis";
        }
        else {$trk = "įvairiakraštis";}
    }
    else {$trk = "negalimas"; }

    $ats = "Trikampis yra $trk";
}

?>
<?php include "header.php"; ?>

<div class="card">
    <div class="card-header">
        Trikampio tipas
    </div>
    <div class="card-body">
        <form method="post">
            <div class="form-inline">
            <label class="my-1 mr-2" >AB:</label>
            <input class="form-control" type="number" name="a" placeholder="AB">
            <label class="my-1 mr-2" >BC:</label>
            <input class="form-control" type="number" name="b" placeholder="BC">
            <label class="my-1 mr-2" >AC:</label>
            <input class="form-control" type="number" name="c" placeholder="AC">
            </div>
                <button class="btn btn-success">Nustatyti trikampio tipą</button>
        </form>

        <?php if($ats!="") { ?>
            <div>
                <hr>
                <?=$ats?>
            </div>
        <?php } else { ?>
            <div>
                <hr>
                Įveskite trikampio ABC kraštinių ilgius ir spauskite mygtuką

            </div>
        <?php } ?>
    </div>
</div>
<?php include "footer.php"; ?>


