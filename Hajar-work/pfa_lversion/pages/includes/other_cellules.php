<?php
//TODO: get the data about other clubs from db
$not_my_cells=$_SESSION['not_my_cells'];
for ($i = 0; $i < count($not_my_cells); $i++) {

?>
    <div class="card" data-aos="zoom-in-up" style="width: 300px;margin-right: auto;margin-left: auto;">
        <div class="card-body">
            <div class="row">
                <div class="col-xl-9 offset-xl-2">
                    <figure class="figure">
                        <figcaption class="figure-caption" style="font-size: 150%;">
                            <?php echo $not_my_cells[$i]['intitule'] ?>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-9 offset-xl-2">
                    <a class="btn btn-primary btn-join" role="button" style="margin-left: 20%;" href="javascript:void(0)" data-type='cellule' data-dist='<?php echo htmlspecialchars($not_my_cells[$i]['intitule']) ?>'>join</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>