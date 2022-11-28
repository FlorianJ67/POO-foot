<?php
class Equip {
    private $_name;
    private $_players;
        
    public function __construct($role){
        $this->_name = $role;
        $this->_players = [];
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