<?php

/*
Una clase contiene:
Constantes y Variables propias, llamadas PROPIEDADES
y Funciones, llamadas MÉTODOS
*/

/*
La visibilidad de una propiedad o método se puede definir anteponiendo a su declaración una de las palabras reservadas public, protected o private. A los miembros de clase declarados como 'public' se puede acceder desde donde sea; a los miembros declarados como 'protected', solo desde la misma clase o mediante clases heredadas. A los miembros declarados como 'private' únicamentede se puede acceder desde la clase que los definió.
*/

class Grupo{

    public $alumnos;//Esto es una propiedad pública
    public $profesores;//Esto es una propiedad pública
    public $nSillas;//Esto es una constante

    function __construct( ){//El metodo constructor inizializa las propiedades.

        $this->alumnos = 40;
        $this->profesores = 12;
        $this->nSillas = 44;

        print("Se acaba de construir la Clase Grupo, tiene " .$this->alumnos ." alumnos," .$this->profesores ." profesores y " .$this->nSillas ."</br>");
    }

    function __destruct( ){

        $this->alumnos = 0;
        $this->profesores = 12;
        $this->nSillas = 44;

        print("\nSe acaba de construir la Clase Grupo, tiene " .$this->alumnos ." alumnos," .$this->profesores ." profesores y " .$this->nSillas ."<br>O mira alparecer no hay alumnos en tu salón deben de estar en el cóctel");
    }

}

$Clase1IV1 = new Grupo;//Este es un nuevo objeto que ereda la clase Grupo, esto quiere decir que el nuevo objeto hereda las propiedades y funciones de la clase
