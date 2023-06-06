<?php
$ats ="";
if(isset($_POST['sk'])) {
    $sk = $_POST['sk'];
    $sk3 = $sk ** 3;
    $ats = "$sk pakelta kubu yra $sk3";
}

?>
<?php include "header.php"; ?>

            <div class="card">
                <div class="card-header">
                    Kėlimas kubu
                </div>
                <div class="card-body">
                    <form method="post">
                        <input class="form-control" type="text" name="sk"> <br>
                        <button class="btn btn-success">Kelti kubu</button>
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

