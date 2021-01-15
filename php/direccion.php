<?php
    class Direccion {

        // Atributos privados (encapsulamiento)
        private $calle;
        private $numero;
        private $poblacion;
        private $pais;

        // Constructores

        public function __construct($calle, $numero, $poblacion, $pais) {
            $this->calle = $calle;
            $this->numero = $numero;
            $this->poblacion = $poblacion;
            $this->pais = $pais;
        }

        // Métodos Get.

        public function getCalle() {
            return $this->calle;
        }

        public function getNumero() {
            return $this->numero;
        }

        public function getPoblacion() {
            return $this->poblacion;
        }

        public function getPais() {
            return $this->pais;
        }
               
        // Métodos Set.

        public function setCalle($calle) {
            $this->calle = $calle;
        }

        public function setNumero($numero) {
            $this->numero = $numero;
        }

        public function setPoblacion($poblacion) {
            $this->poblacion = $poblacion;
        }

        public function setPais($pais) {
            $this->pais = $pais;
        }

        // Otras funciones.        

    };
?>