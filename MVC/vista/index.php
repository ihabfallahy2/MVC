<?php
include "../controlador/Controlador.inc";
//lo que el cliente vera

// var_dump(Controlador::select());

foreach (Controlador::select() as $element) {
    //aqui selecciono cod por seleccionar algo , en el array bienen mas datos.
    echo "cod -> $element->cod <br>";
}