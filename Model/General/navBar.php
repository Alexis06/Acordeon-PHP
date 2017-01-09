<?php

class navBar
{

    public function nav()
    {
        print("
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
                    </div>
                </nav>
                ");
    }
}

 ?>
