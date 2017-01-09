<?php
include_once('../Model/General/custom.php');
include_once('../Model/General/navBar.php');
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <?php
        /*Meta*/
        $custom = new custom;
        $custom->charset();
        $custom->http();
        $custom->viewport();
        /*CSS*/
        $custom->icons();
        $custom->fonts();
        $custom->bootstrapCSS();
        $custom->layoutCSS();
        /*JS*/
        $custom->jQuery();
        $custom->bootstrapJS();
        $custom->layoutJS();
        ?>
    </head>
    <body>
        <?php
        $barraNav = new navBar;
        $barraNav->nav();
        ?>
    </body>
</html>
