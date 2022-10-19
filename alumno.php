<?php
    class Alumno {
        private $nombre;
        private $apellidos;
        private $dni;
        private $direccion;
        private $email;

        function __construct($nombre, $apellidos, $dni, $direccion) {
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->dni = $dni;
            $this->direccion = $direccion;
        }

        function get_nombre() {
            return $this->nombre;
        }

        function set_nombre($nombre) {
            $this->nombre = $nombre;
        }

        function get_apellidos() {
            return $this->apellidos;
        }

        function set_apellidos($apellidos) {
            $this->apellidos = $apellidos;
        }

        function get_dni() {
            return $this->dni;
        }

        function set_dni($dni) {
            $this->dni = $dni;
        }

        function get_direccion() {
            return $this->direccion;
        }

        function set_direccion($direccion) {
            $this->direccion = $direccion;
        }
    }
?>