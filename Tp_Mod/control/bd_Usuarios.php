<?php

class bd_Usuarios{

    private $users;
    public function __construct()
    {
        
    }

    /**
     * Get the value of users
     */ 
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set the value of users
     *
     * @return  self
     */ 
    public function setUsers($users)
    {
        $this->users = $users;

        return $this;
    }


    public function CargarDatos(){

        $bd = [
            [
                'usuario'=>'Daniel_Escobar',
                'clave' => 'myPhone',
                'nombre'=>'Daniel',
                'apellido'=>'Escobar'
            ],
            [
                'usuario'=>'PabloRuiz$',
                'clave'=>'meGustaLaIpa',
                'nombre'=>'Pablo',
                'apellido'=>'Ruiz'
            ],
            [
                'usuario'=>'LunaLaureano',
                'clave'=>'HarryPotterDeveloper',
                'nombre'=>'Laureano',
                'apellido'=>'Luna'
            ]
            
        
            ];
        $this->setUsers($bd);

        return $this->getUsers();
    }
}

?>