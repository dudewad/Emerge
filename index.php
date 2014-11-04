<?php
/**
 * Created by Ghost.
 * Date: 3/15/13
 * Time: 12:47 PM
 */
define("BASEDIR", __DIR__);
include_once(BASEDIR . "/includes/config.php");
include_once(BASEDIR . "/includes/class/App.php");
$app = new App($config);
?>
<html class="<?php echo $app->getCurrentPageName();?>">
    <?php echo $app->head(); ?>
    <body>
        <?php
        echo $app->header();
        echo $app->content();
        ?>
    Hey dudes
    Some html changes bitches
    </body>
</html>