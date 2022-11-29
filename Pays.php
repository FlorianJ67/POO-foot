<?php
class Pays {
    private $_name;
    private $_teams;
        
    public function __construct($role){
        $this->_name = $role;
        $this->_teams = [];
    }
            
    //GET
    public function getName(){
        return $this->_name;
    }

    public function addCasting($newPlayer){
        array_push($this->_teams,$newPlayer);
    }
    public function addToPays($newTeam){
        array_push($this->_teams,$newTeam);
    }

    public function listTeam(){
        echo "Le pays " .$this->getName(). " possède les Équipes suivantes:<br>";
        foreach($this->_teams as $team){
            echo $team->getName()."<br>";
        }
    }
}
?>