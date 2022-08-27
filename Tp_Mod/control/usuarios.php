<?php
include('bd_Usuarios.php');


class Usuario{

    private $datos_Cargados;
    private $user;
    private $pass;
    private $nom;
    private $apell;

    public function __construct(){

        $this->datos_Cargados = new bd_Usuarios();
    }

     /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of pass
     */ 
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */ 
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of apell
     */ 
    public function getApell()
    {
        return $this->apell;
    }

    /**
     * Set the value of apell
     *
     * @return  self
     */ 
    public function setApell($apell)
    {
        $this->apell = $apell;

        return $this;
    }
    
    /**
     * Get the value of datos_Cargados
     */ 
    public function getDatos_Cargados()
    {
        return $this->datos_Cargados;
    }

    /**
     * Set the value of datos_Cargados
     *
     * @return  self
     */ 
    public function setDatos_Cargados($datos_Cargados)
    {
        $this->datos_Cargados = $datos_Cargados;

        return $this;
    }
    
    
    private function Cargar($user,$pass,$nom,$apell){
        $this->setUser($user);
        $this->setPass($pass);
        $this->setNom($nom);
        $this->setApell($apell);
    }

    public function __toString(){
        $str = "Nobre: {$this->getNom()}\nApellido: {$this->getApell()}\n";
        return $str; 
    }


    public function ValidaExistente($usuario)
    {
        $countUser = $this->getDatos_Cargados()->CargarDatos();


        if (count($countUser) > 1) {
            $bool = true;
            $i = 0;
                      
            while ($bool && $i < count($countUser)) {
                $datos = $countUser[$i];
                if ($datos['usuario'] == $usuario['usuario']) {
                    
                    $bool = false;
                }
                $i++;
            }
        }
        if (count($countUser) == 1 && $countUser['usuario'] == $usuario['usuario']){

            $bool = false;

        }
        return $bool;
    }



    public function Buscar($dataUser)
    {
        $countUser = $this->getDatos_Cargados()->CargarDatos();


        if (count($countUser) > 1) {
            $bool = true;
            $i = 0;
           
            while ($bool && $i < count($countUser)) {
                $datos = $countUser[$i];
                if ($datos['usuario'] == $dataUser) {
                    $bool = false;
                    $arrUser = $datos;
                }
                $i++;
            }
        }
        return $arrUser;
    }


  /*   public function Mostrar_Usuarios($bd_datos){
        foreach ($bd_datos as $key => $value) {
            $objUser = new Usuario();
            $objUser->Cargar($value['usuario'],$value['clave'],$value['nombre'],$value['apellido']);
            return $objUser;
        }
    } */

   
}


?>