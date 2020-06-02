<?php
//TODO: get the tache informations from db
$nb_taches = 1;
for ($i = 0; $i < $nb_taches; $i++) {
    $tache_title = "TITLE";
    $disc = "Lorem
    ipsum dolor sit amet, consectetur adipiscing elit,
    sed do eiusmod tempor incididunt ut labore et dolore
    magna aliqua.";
    $date = "10:30 AM";
    $deadline = "dd/mm 00:00";
?>
    <li class="list-group-item" data-aos="zoom-in-up">
        <div class="row align-items-center no-gutters">
            <div class="col mr-2">
                <div class="row">
                    <div class="col">
                        <h5 class="mb-0"><strong><?php echo $tache_title ?></strong></h5>
                        <p style="margin-bottom: 0;margin-top: 10px;">
                            <?php echo $disc ?><br>
                        </p>
                        <span class="text-xs"><?php echo $date ?></span>
                        <span class="float-right text-xs" style="margin-right: 1rem;">deadline: <?php echo $deadline ?></span>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto"><a class="btn btn-success btn-icon-split done-btn"  data-target="<?php echo $i ?>" role="button" style="width: 100%;"><span class="text-white-50 icon"><i class="fas fa-check"></i></span><span class="text-white text">Done</span></a></div>
                    <div class="col-auto"><a class="btn btn-danger float-right btn-icon-split cancel-btn" data-target="<?php echo $i ?>" role="button"><span class="text-white-50 icon"><i class="fas fa-trash"></i></span><span class="text-white text">Delete</span></a></div>
                </div>
            </div>
        </div>
    </li>
<?php } ?>