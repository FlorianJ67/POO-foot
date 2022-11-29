<h1>Foot</h1>

<?php
 spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});


$pays1 = New Pays("France");

$team1 = New Team("PSG",$pays1);
$team2 = New Team("OM",$pays1);
$team3 = New Team("RCSA",$pays1);

$pays1->listTeam();

$nationality1 = New Nationality("Brésilien");

$player1 = New Player("Neymar","Jr","Homme","1992-02-05",$nationality1);
$player2 = New Player("Neym0","Senior","Homme","1967-08-12",$nationality1);

$c1 = New Contract($team1,$player1,"2005");
$c1 = New Contract($team2,$player1,"2010");
$c1 = New Contract($team3,$player1,"2019");
$c2 = New Contract($team1,$player2,"2008");

echo "<br>";
$team1->listPlayers();


echo "<br>";
$player1->getContractInfo();

?>