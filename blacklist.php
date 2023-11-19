<?php
/**
 * @author stevimeister on 15/8/2020
 */
?>

<?php
require_once 'classes/database.php';
?>


<?php
$title='NsClient.pl | Blacklisty';
include 'include/header.php';
?>

<?php
include 'include/navbar.php';
?>

<section class="engine"></section><section class="mbr-section article mbr-after-navbar" id="msg-box8-1r" data-rv-view="42" style="background-image: url(assets/images/glowna-1920x800.jpg); padding-top: 200px; padding-bottom: 200px;">
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
<section class="mbr-section mbr-section__container article" id="header3-p" data-rv-view="47" style="background-color: rgb(239, 239, 239); padding-top: 0px; padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2">&nbsp;</h3>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section" id="msg-box6-1j" data-rv-view="49" style="background-color: rgb(255, 255, 255); padding-top: 0px; padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">
                <div class="mbr-table-cell mbr-right-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 28%;">
                    <div class="mbr-figure"><img src="assets/images/fastek-600x338.png"></div>
                </div>
                <div class="mbr-table-cell col-md-5 text-xs-center text-md-left content-size">
                    <h3 class="mbr-section-title display-2"><br>BLACKLISTA</h3>
                    <div class="lead">
                        <p>Osoby na tej liście nie mogą używać paczki NsClient.pl</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section mbr-section__container article" id="header3-w" data-rv-view="52" style="background-color: rgb(255, 255, 255); padding-top: 0px; padding-bottom: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2"></h3>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section article mbr-section__container" id="content1-v" data-rv-view="54" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="container pb-5 table-responsive">
                <section class="my-5">
                    <div style="margin-top: 20px;" class="col-lg-12 animated fadeInLeft delay-01s animated">
                        <div>
                            <table class="table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Uzytkownik</th>
                                    <th>Powod</th>
                                    <th>Stworzony przez</th>
                                    <th>Wygasa</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                try {
                                    $users = $mysqlDatabase->query('SELECT * FROM `nsclient_users`;');
                                } catch(PDOException $ex) {
                                    echo "Wystąpił błąd z pobieraniem danych: " . $ex->getMessage();
                                }

                                foreach ($users as $user): ?>
                                    <tr>
                                        <td style="vertical-align: middle;">
                                            <img alt="<?php echo $user['nickName'];?>" src="https://minotar.net/cube/<?php echo $user['nickName']; ?>/200.png" width="60" height="60"><br><?php echo $user['nickName']; ?>
                                        </td>
                                        <td style="vertical-align: middle;"><?php echo $user['reason']; ?></td>
                                        <td style="vertical-align: middle;"><?php echo $user['admin']; ?></td>
                                        <td style="vertical-align: middle;"><?php echo $user['time']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<br>

<?php
include('include/footer.php');
?>

<?php
include('include/script.php');
?>


