console.log("Hola Guapo!");
//Añadiendo evento a el boton de menu para hacer un menu despegable
function openMenu(){
    document.getElementById('menuDespegable').style.width = '100%';
    console.log('El menu esta abierto');
}
function closeMenu(){
    document.getElementById('menuDespegable').style.width = '0';
    console.log('El menu esta cerrado');
}