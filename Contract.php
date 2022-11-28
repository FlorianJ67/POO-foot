<?php
class Contract {
    private $_team;
    private $_player;

    private $_date;
        
    public function __construct(Team $team,Player $player,$date){
        $this->_team = $team;
        $this->_team->addToContract($this);

        $this->_player = $player;
        $this->_player->addToContract($this);

        $this->_date = $date;
    }
            
    //GET
    public function getTeam(){
        return $this->_team;
    }
    public function getPlayer(){
        return $this->_player;
    }
    public function getPays(){
        return $this->_pays;
    }
    public function getDate(){
        return $this->_date;
    }
}