<?php
class Nationality {
    protected $_name;
    protected $_players;
        
    public function __construct(string $name){
        $this->_name = $name;
        $this->_players = [];
    }
            
    //GET
    public function getName(){
        return $this->_name;
    }

        
    //SET
    public function setName($name){
        $this->_name = $name;
    }
    public function setNationality($nationality){
        $this->_nationality = $nationality;
    } 

    public function addPlayer($player){
        array_push($this->_players,$player);
    }
}
?>