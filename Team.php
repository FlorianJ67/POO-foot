<?php
class Team {
    private $_name;
    private $_players;
    private $_pays;
        
    public function __construct($name,Pays $pays){
        $this->_name = $name;
        $this->_players = [];

        $this->_pays = $pays;
        $this->_pays->addToPays($this);
    }
            
    //GET
    public function getName(){
        return $this->_name;
    }


    public function addPlayer($newPlayer){
        array_push($this->_players,$newPlayer);
    }

    public function listPlayers(){
        echo "L'équipe " .$this->getName(). " possède les Joueurs suivant:<br>";
        foreach($this->_players as $player){
            $bd = date_create($player->getBirthday());
            $td = date_create();
            $age = date_diff($bd,$td);
            echo $player->getFName()." ".$player->getName()." ".$age->y." ans ".$player->getNationality()->getName()."<br>";
        }
    }

}
?>