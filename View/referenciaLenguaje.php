<?php
include_once('../Model/General/custom.php');
include_once('../Model/General/navBar.php');
include_once('../Model/HomePage/body.php');
include_once('../Model/ReferenciaLenguaje/guideNav.php');
include_once('../Model/ReferenciaLenguaje/Tipos/guideLocal.php');
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
        $custom->funtions();
        ?>
    </head>
    <body>
        <?php
        $barraNav = new navBar;
        $barraNav->nav();
        $guide = new guide;
        $guide->guideNav();
        /*Tipos*/
        $Tipos = new Tipos;
        $Tipos->guideTipos();
        ?>
    </body>
</html>
