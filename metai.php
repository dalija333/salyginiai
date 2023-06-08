<?php
$ats ="";
if(isset($_POST['yy'])) {
    $yy = $_POST['yy'];
    $sk = ($yy-4) % 60+1;
    $skc = ($sk+10)%10;
    switch ($skc) {
        case 1:
        case 2:
            $spalva = "žali";
            break;
        case 3:
        case 4:
             $spalva = "raudoni";
             break;
        case 5:
        case 6:
            $spalva = "geltoni";
            break;
        case 7:
        case 8:
            $spalva = "balti";
            break;
        case 0:
        case 9:
            $spalva = "juodi";
            break;
        default:
            $spalva = "nežinoma";;
    }


    $ats = "$yy-ieji metai pagal japonų kalendorių yra $spalva, jų eilės numeris 60-ies metų cikle yra $sk.";
}

?>
<?php include "header.php"; ?>
<div class="card">
    <div class="card-header">
        Metų spalva
    </div>
    <div class="card-body">
        <form method="post">
            <input class="form-control" type="text" name="yy"> <br>
            <button class="btn btn-success">Nustatyti spalvą</button>
        </form>

        <?php if($ats!="") { ?>
            <div>
                <hr>
                <?=$ats?>
            </div>
        <?php } else { ?>
            <div>
                <hr>
                Įveskite skaičių ir paspauskite mygtuką

            </div>
        <?php } ?>
    </div>
</div>
<?php include "footer.php"; ?>

