<?php
class Player {
    protected $_name;
    protected $_fName;
    protected $_sexe;
    protected $_birthday;
    protected $_nationality;
    protected $_contract;
        
    public function __construct(string $fName,string $name,string $sexe,$birthday,Nationality $nationality){
        $this->_name = $name;
        $this->_fName = $fName;
        $this->_sexe = $sexe;
        $this->_birthday = $birthday;
        $this->_nationality = $nationality;
        $this->_nationality->addNationality($this);
        $this->_contract = [];

    }
            
    //GET
    public function getName(){
        return $this->_name;
    }
    public function getFName(){
        return $this->_fName;
    }
    public function getsexe(){
        return $this->_sexe;
    }
    public function getBirthday(){
        return $this->_birthday;
    }

    public function displayFullName(){
        $this->getFName();
        return " ";
        $this->getName();
    }
        
    //SET
    public function setName($name){
        $this->_name = $name;
    }
    public function setFName($fName){
        $this->_fName = $fName;
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
}
?>