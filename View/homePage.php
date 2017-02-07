<?php
include_once('../Model/General/custom.php');
include_once('../Model/General/navBar.php');
include_once('../Model/HomePage/body.php');
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
        ?>
    </head>
    <body>
        <?php
        $barraNav = new navBar;
        $barraNav->nav();
        $cuerpo = new body;
        $cuerpo->cuerpo();
        //JS
        $custom->jQuery();
        $custom->funtions();        
        $custom->bootstrapJS();
        ?>
    </body>
</html>
