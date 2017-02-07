<?php
//Es una forma de llamar a funciones globalmente

//Llamar una función
function suma(){

    print(10 + 10 ." Suma desde una funcion<br>");
}

call_user_func('suma');

//Llamar un metodo
class a
{
    public function suma(){
        print(10 + 20 ." Suma desde un metodo publico<br>");
    }
}

class b
{
    public function suma(){
        print(10 + 30 ." Suma desde un metodo publico llamado desde un objeto<br>");
    }
}

class c
{
    static function suma(){
        print(10 + 40 ." Suma desde un metodo estatico");
    }
}
//Hacer un calback de un metodo necesita pasar los parametros de la funcion callback como un array
call_user_func(array("a", "suma"));

//Llamar un metodo desde un objeto
$b = new b;

call_user_func(array($b, "suma"));

//Llamar un metodo estatico
call_user_func("c::suma");