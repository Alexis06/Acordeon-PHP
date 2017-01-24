<?php

class guide
{
    public function guideNav()
    {
        print(' <div class="contenido-fijo"> 
                        <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="container-fluid">
                                                <div class="list-nav">
                                                <h1>Referencia del Lenguaje</h1>
                                                    <ul>
                                                        <li>
                                                            <a href="#tipos">Tipos</a>
                                                                <ol>
                                                                    <li><a href="#arrays">Arrays</a></li>
                                                                    <li><a href="#callbacks">Callbacks</a></li>
                                                                    <li><a href="#seudotipos">Seudotipos</a></li>
                                                                </ol>
                                                        </li>
                                                        <li>
                                                            <a href="#operadores">Operadores</a>
                                                                <ol>
                                                                    <li><a href="#operadoresBit">Operadores Bit a Bit</a></li>
                                                                    <li><a href="#operadoresComparacion">Operadores de Comparacion</a></li>
                                                                    <li><a href="#operadoresControlErrores">Operadore de Control de Errores</a></li>
                                                                    <li><a href="#operadoresEjecucion">Operadores de Ejecución</a></li>
                                                                    <li><a href="#operadoresStrings">Operadores para Strings</a></li>
                                                                    <li><a href="#operadoresArray">Operadores para Arrays</a></li>
                                                                    <li><a href="#operadoresTipo">Operadores de Tipo</a></li>
                                                                </ol>
                                                        </li>
                                                        <li>
                                                            <a href="#estructurasControl">Estructuras de Control</a>
                                                                <ol>
                                                                <li><a href="#break">Break</a></li>
                                                                <li><a href="#continue">Continue</a></li>
                                                                <li><a href="#declare">Declare</a></li>
                                                                <li><a href="#doWhile">Do While</a></li>
                                                                <li><a href="#for">For</a></li>
                                                                <li><a href="#forEach">For Each</a></li>
                                                                <li><a href="#got">Goto</a></li>
                                                                <li><a href="#if">If</a></li>
                                                                <li><a href="#return">Return</a></li>
                                                                <li><a href="#sAlternativa">Sintaxis Aleternativa</a></li>
                                                                <li><a href="#switch">Switch</a></li>
                                                                <li><a href="#while">While</a></li>                                              
                                                            </ol>
                                                        </li>
                                                        <li>
                                                        <a href="#funciones">Funciones</a>
                                                            <ol>
                                                                <li><a href="#argumentosF">Argumentos de Funciones</a></li>
                                                                <li><a href="#funcionesA">Funciones Anonimas</a></li>
                                                                <li><a href="#funcionesP">Funciones del Programador</a></li>
                                                                <li><a href="#funcionesV">Funciones Variables</a></li>                                                
                                                            </ol>
                                                        </li>
                                                        <li>
                                                        <a href="#clasesObjetos">Clases y Objetos</a>
                                                            <ol>
                                                                <li><a href="#abstraccionesC">Abstracciones de Clases</a></li>
                                                                <li><a href="#autocargaC">Autocarga de Clases</a></li>
                                                                <li><a href="#clasesA">Clases Anonimas</a></li>
                                                                <li><a href="#clonacionO">Clonacion de Objetos</a></li>
                                                                <li><a href="#comparacionO">Comparación de Objetos</a></li>
                                                                <li><a href="#constantesC">Constantes de Clases</a></li>
                                                                <li><a href="#constructoresC">Constructores y Destructores</a></li>
                                                                <li><a href="#determinaciónT">Determinación de Tipos</a></li>
                                                                <li><a href="#enlaceE">Enlace Estatico</a></li>
                                                                <li><a href="#herenciaO">Herencia de Objetos</a></li>
                                                                <li><a href="#interfacesO">Interfaces de Objetos</a></li>
                                                                <li><a href="#iteracionO">Iteración de Objetos</a></li>
                                                                <li><a href="#metodosM">Metodos Magicos</a></li>
                                                                <li><a href="#objetosR">Objetos y Referencias</a></li>
                                                                <li><a href="#operadorRA">Operador de Resolución de Ambito</a></li>
                                                                <li><a href="#palabraF">Palabra Final</a></li>
                                                                <li><a href="#propiedades">Propiedades</a></li>
                                                                <li><a href="#serializacion">Serialización de Objetos</a></li>
                                                                <li><a href="#sobrecarga">Sobrecarga</a></li>
                                                                <li><a href="#static">Static</a></li>
                                                                <li><a href="#tratis">Tratis</a></li>
                                                                <li><a href="#visibilidad">Visibilidad</a></li>                                                
                                                            </ol>
                                                        </li>
                                                        <li>
                                                        <a href="#nameSpace">Name Sapace</a>
                                                            <ol>
                                                                <li><a href="#alternativa">Aleternativa</a></li>
                                                                <li><a href="#caracteristicas"></a></li>
                                                                <li><a href="#definir">Definir</a></li>
                                                                <li><a href="#definirVE">Definir Varios Espacios</a></li>
                                                                <li><a href="#espacioG">Espacio Global</a></li>
                                                                <li><a href="#necesarioS">Necesario Saber</a></li>
                                                                <li><a href="#palabraR">Palabra Reservada</a></li>
                                                                <li><a href="#reglas">Reglas</a></li>
                                                                <li><a href="#subespacios">Subespacios</a></li>
                                                                <li><a href="#uso">Uso</a></li>
                                                                <li><a href="#usoA">Uso Avanzado</a></li>                                                                
                                                            </ol>
                                                        </li>
                                                        <li>
                                                        <a href="#generadores">Generadores</a>
                                                            <ol>
                                                                <li><a href="#syntax">Syntax</a></li>
                                                            </ol>
                                                        </li>
                                                        <li>
                                                        <a href="InterfacesC">Interfaces y Clases Predefinidas</a>
                                                            <ol>
                                                                <li><a href="#arrayA">Array Access</a></li>
                                                                <li><a href="#closure">Closure</a></li>
                                                                <li><a href="#generator">Generator</a></li>
                                                                <li><a href="#iterator">Iterator</a></li>
                                                                <li><a href="#iteratorA">Iterator Aggregate</a></li>
                                                                <li><a href="#serializable">Serializable</a></li>
                                                                <li><a href="#throwable">Throwable</a></li>
                                                                <li><a href="#traversable">Traversable</a></li>                                                                
                                                            </ol>
                                                        </li>
                                                        <li>
                                                        <a href="#protocolosPE">Protocolos y Envolturas</a>
                                                            <ol>
                                                                <li><a href="#data">Data</a></li>
                                                                <li><a href="#expect">Expect</a></li>
                                                                <li><a href="#file">File</a></li>
                                                                <li><a href="#ftp">Ftp</a></li>
                                                                <li><a href="#glob">Glob</a></li>
                                                                <li><a href="#http">Http</a></li>
                                                                <li><a href="#ogg">Ogg</a></li>
                                                                <li><a href="#phar">Phar</a></li>
                                                                <li><a href="#php">Php</a></li>
                                                                <li><a href="#rar">Rar</a></li>
                                                                <li><a href="#ssh">Ssh2</a></li>
                                                                <li><a href="#zlib">Zlib</a></li>                                                                
                                                            </ol>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>');
    }
}

?>
