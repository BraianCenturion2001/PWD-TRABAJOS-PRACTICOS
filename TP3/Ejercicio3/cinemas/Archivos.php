<?php

class Archivo{

    private $name;
    private $nameTemp;
    private $tamanio;
    private $type;
    private $error;

    public function __construct(){}

    public function Cargar($data){
        $this->setName($data['name']);
        $this->setNameTemp($data['tmp_name']);
        $this->setTamanio($data['size']);
        $this->setType($data['type']);
        $this->setError($data['error']);       
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of nameTemp
     */ 
    public function getNameTemp()
    {
        return $this->nameTemp;
    }

    /**
     * Set the value of nameTemp
     *
     * @return  self
     */ 
    public function setNameTemp($nameTemp)
    {
        $this->nameTemp = $nameTemp;

        return $this;
    }

    /**
     * Get the value of tamanio
     */ 
    public function getTamanio()
    {
        return $this->tamanio;
    }

    /**
     * Set the value of tamanio
     *
     * @return  self
     */ 
    public function setTamanio($tamanio)
    {
        $this->tamanio = $tamanio;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of error
     */ 
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set the value of error
     *
     * @return  self
     */ 
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }


   public function Guardar($dir){
    
       if ($this->getError() <= 0){

            $bool = false;
            if (copy($this->getNameTemp(),$dir.$this->getName())){
                $bool=true;
            }

       }
       return $bool;
   }

   private function GenerarRuta($dir){

       if ($this->Guardar($dir)){
            $newRuta = $dir.$this->getName();
       }else{
            $newRuta ="Hola";
       }
        return $newRuta;
   }

   public function __toString()
   {
    return $this->GenerarRuta('image/');
   }
}
?>