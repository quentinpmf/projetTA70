<div class="container">
    <div class="row header-top align-items-center">
        <div class="col-lg-4 col-sm-4 menu-top-left">
            <span>
                <a href="<?php echo ROOT_DIR ?>/index.php">FITNESS CLUB</a>
            </span>
        </div>
        <div class="col-lg-4 menu-top-middle justify-content-center d-flex">
            <a href="<?php echo ROOT_DIR ?>/index.php">
                <img src="<?php echo ROOT_DIR ?>/img/logo_fit.png">
            </a>
        </div>
        <div class="col-lg-4 col-sm-4 menu-top-right">
            <?php
                if(isset($_SESSION['UserId']))
                {
                    ?>
                    <a style="display:inline-block; color:red" href="<?php echo ROOT_DIR ?>/php/login/logout.php"><div class="banner_utilisateur"><div class="lnr lnr-exit"></div></div></a>
                    <a style="display:inline-block; color:black" href=""><div class="banner_utilisateur"><?php echo utf8_encode($_SESSION['UserPrenom']." ".$_SESSION['UserNom']." (".$_SESSION['UserRole'].") "); ?></div></a>
                    <?php
                }
                else
                {
                    ?>
                    <a href="<?php echo ROOT_DIR ?>/php/login/login.php"><span class="lnr lnr-user"></span></a>
                    <?php
                }
            ?>
        </div>
    </div>
</div>
<hr>