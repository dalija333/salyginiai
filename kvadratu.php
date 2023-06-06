<?php
    $ats ="";
    if(isset($_POST['sk'])) {
        $sk = $_POST['sk'];
        $sk2 = $sk ** 2;
        $ats = "$sk pakelta kvardatu yra $sk2";
    }

?>
<?php include "header.php"; ?>
                <div class="card">
                    <div class="card-header">
                       Kėlimas kvadratu
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <input class="form-control" type="text" name="sk"> <br>
                            <button class="btn btn-success">Kelti kvadratu</button>
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
