<?php

class navBar
{

    public function nav()
    {
        print("
            <div class='menu-despegable' id='menuDespegable'>
                <span href='javascript:void(0);' onclick='closeMenu()'></span>
                    <a href='referenciaLenguaje.php'>Referencia del Lengiaje</a>
                    <a href='caracteristicas.php'>Caracteristicas</a>
                    <a href='capasAbstractas.php'>Capas Abstractas</a>
                    <a href='practicas.php'>Practicas</a>
            </div>
            <nav class='navbar'>
                <div class='container'>
                    <div class='navbar-header'>
                        <a href='homePage.php'>Learn PHP</a>
                    </div>
                        <ul class='nav navbar-nav navbar-right'>
                            <li>
                                <a href='referenciaLenguaje.php'>Referencia del Lengiaje</a>
                            </li>
                            <li>
                                <a href='caracteristicas.php'>Caracteristicas</a>
                            </li>
                            <li>
                                <a href='capasAbstractas.php'>Capas Abstractas</a>
                            </li>
                            <li>
                                <a href='practicas.php'>Practicas</a>
                            </li>
                        </ul>
                        <span class='icon-bars'>
                            <a href='javascript:void(0);' onclick='openMenu()'></a>
                        </span>
                    </div>
                </nav>
                ");
    }
}

 ?>
