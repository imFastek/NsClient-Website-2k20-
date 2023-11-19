<?php
/**
 * @author stevimeister on 15/8/2020
 */
?>

<?php
require_once 'classes/database.php';
?>


<?php
$title='NsClient.pl | Serwery';
include 'include/header.php';
?>

<?php
include 'include/navbar.php';
?>

<section class="engine"></section><section class="mbr-section article mbr-after-navbar" id="msg-box8-f" data-rv-view="30" style="background-image: url(assets/images/glowna-1920x800.jpg); padding-top: 200px; padding-bottom: 200px;">
    <div class="mbr-overlay" style="opacity: 0; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">&nbsp;<br><br>&nbsp;<br></h3>
                <div class="lead">&nbsp;</div>

            </div>
        </div>
    </div>
</section>
<section class="mbr-section mbr-section__container article" id="header3-h" data-rv-view="33" style="background-color: rgb(239, 239, 239); padding-top: 0px; padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2">&nbsp;</h3>

            </div>
        </div>
    </div>
</section>
<section class="mbr-section mbr-section__container article" id="header3-k" data-rv-view="35" style="background-color: rgb(255, 255, 255); padding-top: 40px; padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2">SERWERY WSPÓŁPRACUJĄCE</h3>
                <p class="mbr-section-subtitle">&nbsp;</p>
            </div>
        </div>
    </div>
</section>
<section class="mbr-cards mbr-section mbr-section-nopadding" id="features3-i" data-rv-view="37" style="background-color: rgb(255, 255, 255);">
    <div class="mbr-cards-row row">
        <?php
        try {
            $servers = $mysqlDatabase->query('SELECT * FROM `nsclient_servers`;');
        } catch(PDOException $ex) {
            echo "Wystąpił błąd z pobieraniem danych: " . $ex->getMessage();
        }

        foreach ($servers as $server): ?>
        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 40px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img"><img src="<?php echo $server['icon']; ?>", height="128", width="128" class="card-img-top"></div>
                    <div class="card-block">
                        <h4 class="card-title"><?php echo $server['serverName']; ?></h4>
                        <h5 class="card-subtitle"><?php echo $server['description']; ?></h5>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<?php
include('include/footer.php');
?>

<?php
include('include/script.php');
?>

