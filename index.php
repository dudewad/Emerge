<?php
/**
 * Created by Ghost.
 * Date: 3/15/13
 * Time: 12:47 PM
 */
include_once("includes/config.php");
include_once("includes/class/App.php");
$app = new App($config);
?>
<html>
    <?php echo $app->head(); ?>
    <body>
        <?php
        echo $app->header();
        echo $app->content();
        ?>
    </body>
</html>