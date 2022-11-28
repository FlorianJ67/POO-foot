<?php
class Pays {
    private $_name;
    private $_team;
        
    public function __construct($role){
        $this->_name = $role;
        $this->_team = [];
    }
            
    //GET
    public function getName(){
        return $this->_name;
    }

    public function addCasting($newPlayer){
        array_push($this->_team,$newPlayer);
    }

}
?>