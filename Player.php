<?php
class Player {
    protected $_fName;
    protected $_name;
    protected $_sexe;
    protected $_birthday;
    protected $_nationality;
    protected $_contract;
        
    public function __construct(string $fName,string $name,string $sexe,$birthday,Nationality $nationality){
        $this->_fName = $fName;
        $this->_name = $name;
        $this->_sexe = $sexe;
        $this->_birthday = $birthday;
        $this->_nationality = $nationality;
        $this->_nationality->addPlayer($this);
        $this->_contract = [];
    }
            
    //GET
    public function getFName(){
        return $this->_fName;
    }
    public function getName(){
        return $this->_name;
    }
    public function getsexe(){
        return $this->_sexe;
    }
    public function getBirthday(){
        return $this->_birthday;
    }
    public function getNationality(){
        return $this->_nationality;
    }

    public function displayFullName(){
        $this->getFName();
        return " ";
        $this->getName();
    }
        
    //SET
    public function setFName($fName){
        $this->_fName = $fName;
    }
    public function setName($name){
        $this->_name = $name;
    }
    public function setSexe($sexe){
        $this->_sexe = $sexe;
    }
    public function setBirthday($birthday){
        $this->_birthday = $birthday;
    } 
    public function setNationality($nationality){
        $this->_nationality = $nationality;
    } 

    public function addToContract($newPlayer){
        array_push($this->_contract,$newPlayer);
    }
    public function getContractInfo(){
        echo $this->getFName()." ".$this->getName()." :<br>";
        foreach($this->_contract as $contract){
            echo "A rejoint l'équipe du ".$contract->getTeam()->getName()." en ".$contract->getDate()."<br>";
        } 
    }
}
?>