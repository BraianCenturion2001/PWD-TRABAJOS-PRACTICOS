<?php


class Pelicula{
    private $produccion;
    private $guion;
    private $genero;
    private $anio;
    private $director;
    private $restriccion;
    private $duracion;
    private $titulo;
    private $nacionalidad;
    private $actores;
    private $sinopsis;
    private $objArchivo;

    

    public function __construct(){ }

    public function setProduccion ($produccion){
        $this->produccion = $produccion;
    }
    public function getProduccion (){
        return $this->produccion;
    }

    public function setGuion($guion){
        $this->guion = $guion;
    }
    public function getGuion(){
        return $this->guion;
    }

    public function setGenero ($genero){
        $this->genero = $genero;
    }
    public function getGenero (){
        return $this->genero;
    }

    public function setAnio ($anio){
        $this->anio = $anio;
    }
    public function getAnio (){
        return $this->anio;
    }

    public function setDirector ($director){
        $this->director = $director;
    }
    public function getDirector (){
        return $this->director;
    }

    public function setRestriccion ($restriccion){
        $this->restriccion = $restriccion;
    }
    public function getRestriccion (){
        return $this->restriccion;
    }

    public function setDuracion ($duracion){
        $this->duracion = $duracion;
    }
    public function getDuracion (){
        return $this->duracion;
    }

    public function setTitulo ($titulo){
        $this->titulo = $titulo;
    }
    public function getTitulo (){
        return $this->titulo;
    }

    public function setNacionalidad ($nacionalidad){
        $this->nacionalidad = $nacionalidad;
    }
    public function getNacionalidad (){
        return $this->nacionalidad;
    }

    public function setActores ($actores){
        $this->actores = $actores;
    }
    public function getActores (){
        return $this->actores;
    }

    public function setSinopsis ($sinopsis){
        $this->sinopsis = $sinopsis;
    }
    public function getSinopsis (){
        return $this->sinopsis;
    }
      
    public function getObjArchivo()
    {
        return $this->objArchivo;
    }

    public function setObjArchivo($objArchivo)
    {
        $this->objArchivo = $objArchivo;

        return $this;
    }
    
    public function Cargar($data){
        $this->setProduccion($data['produccion']);
        $this->setGuion($data['guion']);
        $this->setGenero($data['genero']);
        $this->setAnio($data['anio']);
        $this->setDirector($data['director']);
        $this->setRestriccion($data['edad']);
        $this->setDuracion($data['duracion']);
        $this->setTitulo($data['titulo']);
        $this->setNacionalidad($data['nacionalidad']);
        $this->setActores($data['actor']);
        $this->setSinopsis($data['sinopsis']);       
    }

    private function strSinapsis(){
       
        if ($this->getSinopsis() == " "){
            $this->setSinopsis('No se ingreso dato');            
        }   
        return $this->getSinopsis();     
    }

    private function restricciones(){
        $rest = $this->getRestriccion();
        switch ($rest) {
            case '0':
                $this->setRestriccion('Para Todo Publico');
                break;
            case '7':
                $this->setRestriccion('Para Mayores de 7 años');
                break;
            case '18':
                $this->setRestriccion('Para Mayores de 18 años');
                break;
            default:
                $this->setRestriccion('no se ingresaron restricciones');
                break;
        }

        return $this->getRestriccion();
    }

    private function ValidarFile(){
        $objArc = $this->getObjArchivo();
        
    }

    public function __toString()
    {
        $str = 
        "
            <div class='card'>
                <div class='row g-0'>
                   
                    <div class='col-7 col-sm-8'>
                        <div class='card-body'>
                            <h3 class='card-title text-center'>{$this->getTitulo()}</h3>
                            <hr>
                                <div class=' col-detalles' id='card-pelis'>
                                        <ul class='card-text'>
                                            <li>Actores: {$this->getActores()}</li>
                                            <hr>
                                            <li>Director: {$this->getDirector()}</li>
                                            <hr>
                                            <li>Guion: {$this->getGuion()}</li>
                                            <hr>
                                            <li>Produccion: {$this->getProduccion()}</li>
                                            <hr>
                                            <li>Año: {$this->getAnio()}</li>
                                            <hr>
                                            <li>Nacionalidad: {$this->getNacionalidad()}</li>
                                            <hr>
                                            <li>Genero: {$this->getGenero()}</li>
                                            <hr>
                                            <li>Duracion: {$this->getDuracion()}</li>
                                            <hr>
                                            <li>Restriccion: {$this->restricciones()}</li>
                                            <hr>
                                        </ul>
                                    <hr>
                                    <h6>Sinapsis:</h6>
                                    <p>{$this->strSinapsis()}</p>
                                    <hr>
                                </div>
                        </div>
                </div>
                <div class='col-5 col-sm-4'>
                    <img style='width: 250px; height: 200px;' src='{$this->getObjArchivo()}' alt='{$this->getObjArchivo()->getName()}'>
                </div>
            </div>
        ";

        return $str;
    }
   



   
}

?>