<?php

    class Main{

            private $objPelicula;
            private $objArchivo;
            private $objUsuario;
            
        // Creamo el obj main con 
            public function __construct()
            {
                $this->objPelicula = new Pelicula();
                $this->objUsuario = new Usuario(); 
                $this->objArchivo = new Archivo();       
            }

            /**
             * Get the value of objPelicula
             */ 
            public function getObjPelicula()
            {
                return $this->objPelicula;
            }

            /**
             * Set the value of objPelicula
             *
             * @return  self
             */ 
            public function setObjPelicula($objPelicula)
            {
                $this->objPelicula = $objPelicula;

                return $this;
            }

            /**
             * Get the value of objUsuario
             */ 
            public function getObjUsuario()
            {
                return $this->objUsuario;
            }

            /**
             * Set the value of objUsuario
             *
             * @return  self
             */ 
            public function setObjUsuario($objUsuario)
            {
                $this->objUsuario = $objUsuario;

                return $this;
            }

              /**
             * Get the value of objArchivo
             */
            public function getObjArchivo()
            {
                return $this->objArchivo;
            }

            /**
             * Set the value of objArchivo
             *
             * @return  self
             */
            public function setObjArchivo($objArchivo)
            {
                $this->objArchivo = $objArchivo;

                return $this;
            }

            public function __toString()
            {
                
            }


            public function dataPeliculas($dataForm, $dataArc)
            {
                $this->getObjPelicula()->Cargar($dataForm, $dataArc);
                return $this->getObjPelicula();
            }


            public function dataArchivo($dataTxt)
            {
                $this->getObjArchivo()->Cargar($dataTxt);
                $ruta = $this->getObjArchivo()->GenerarRuta();
                $contenido = $this->getObjArchivo()->leerFicheroCompleto($ruta);

                return $contenido;
            }

            

          
    }
