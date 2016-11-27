<?php
/*
Una clase contiene:
Constantes y Variables propias, llamadas PROPIEDADES
y Funciones, llamadas MÉTODOS


La visibilidad de una propiedad o método se puede definir anteponiendo a su declaración una de las palabras reservadas public, protected o private. A los miembros de clase declarados como 'public' se puede acceder desde donde sea; a los miembros declarados como 'protected', solo desde la misma clase o mediante clases heredadas. A los miembros declarados como 'private' únicamentede se puede acceder desde la clase que los definió.

 Cuando se extiende una clase, la subclase hereda todos los métodos públicos y protegidos de la clase padre. A menos que una clase sobrescriba esos métodos, mantendrán su funcionalidad original.

" :: " Es la forma de acceder a elementos estaticos y constantes
*/

class Grupo1ro{

    public $alumnos;//Esto es una propiedad pública
    public $profesores;
    public $nSillas;

    function leerDatos(){

        public $alumnos 

    }

    function __construct( ){//El metodo constructor inizializa las propiedades.

        print("<div  class='salida'> Se acaba de construir la Clase Grupo, tiene " .$this->alumnos ." alumnos," .$this->profesores ." profesores y " .$this->nSillas ." sillas" ."</div></br>");
    }

    function conteoSillas($nsillas, $alumnos){//Este es un metodo normal, es uno que nosotros creamos

        if ($nsillas >$alumnos){

            return print("<div class='salida'>Tienes sillas de más<br></div>");
        }elseif ($nsillas < $alumnos){

             return print("Te faltan sillas ve a pedir a otros salones<br>");
        }elseif($nsillas == $alumnos){

            return print("Apenitas alcanzarón<br>");
        }else{

            return print("No se que pedo con tu caso<br>");
        }
    }

    function __destruct( ){//Este es el metodo destructor, este finaliza de alguna manera la clase en la que fue definida

        $this->alumnos = 0;
        $this->profesores = 0;

        print("\nSe acaba de Destruir la Clase Grupo, tiene " .$this->alumnos ." alumnos," .$this->profesores ." profesores y " .$this->nSillas ." sillas" ."<br>O mira alparecer no hay alumnos en tu salón deben de estar en el cóctel");
    }

}

class Grupo5to extends Grupo1ro {//Estamos heredando todas las propiedades y metodos de la Clase "Grupo1ro"

const texto = "Este es la Clase que hereda";

}
