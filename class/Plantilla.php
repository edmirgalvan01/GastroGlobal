<?php

interface Plantilla {
    public function crear($objeto);
    public function modificar($objeto);
    public function eliminar($id);
    public function leerTodo();
    public function leer($id);
}
