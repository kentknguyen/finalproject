<?php
$r = (int)$_POST['rank'];
$t = $_POST['team'];
$pOne = $_POST['playerOne'];
$pTwo = $_POST['playerTwo'];
$pThree = $_POST['playerThree'];
$pFour = $_POST['playerFour'];
$pFive = $_POST['playerFive'];
$c = $_POST['comment'];

$tL = $_FILES['teamLogo']['tmp_name'];
$tLogo = "assets/teamimg/$t.jpg";
move_uploaded_file( $tL, $tLogo);

$pOneFlag = $_FILES['playerOneFlag']['tmp_name'];
$tOne = "assets/teamimg/$pOne.jpg";
move_uploaded_file( $pOneFlag, $tOne);

$pTwoFlag = $_FILES['playerTwoFlag']['tmp_name'];
$tTwo = "assets/teamimg/$pTwo.jpg";
move_uploaded_file( $pTwoFlag, $tTwo);

$pThreeFlag = $_FILES['playerThreeFlag']['tmp_name'];
$tThree = "assets/teamimg/$pThree.jpg";
move_uploaded_file( $pThreeFlag, $tThree);

$pFourFlag = $_FILES['playerFourFlag']['tmp_name'];
$tFour = "assets/teamimg/$pFour.jpg";
move_uploaded_file( $pFourFlag, $tFour);

$pFiveFlag = $_FILES['playerFiveFlag']['tmp_name'];
$tFive = "assets/teamimg/$pFive.jpg";
move_uploaded_file( $pFiveFlag, $tFive);

$d = file_get_contents('teams.json');
$d = json_decode($d, true);

$team = array (
    "rank"=>$r,
    "teamLogo"=>$tLogo,
    "team"=>$t,
    "playerOne"=>$pOne,
    "playerOneFlag"=>$tOne,
    "playerTwo"=>$pTwo,
    "playerTwoFlag"=>$tTwo,
    "playerThree"=>$pThree,
    "playerThreeFlag"=>$tThree,
    "playerFour"=>$pFour,
    "playerFourFlag"=>$tFour,
    "playerFive"=>$pFive,
    "playerFiveFlag"=>$tFive,
    "comment"=>$c
);
$y = array();

$z= array();

array_push($d, $team);
//Loops through all data stored in JSON and sorts based on rank integer.

foreach ($d as $key => $value){
    array_push($y, $value['rank']);

};
sort($y);

//Loops through sorted JSON and then checks rank positioning. Arranges lower integer ahead of higher.
foreach ($y as $a => $b){
    foreach($d as $i => $o){
        if ($o['rank'] == $b){
            $z[$a] = $o;
        };
    };
};
$d = $z;

$d = json_encode($d);

file_put_contents('teams.json', $d);

header('location:index.php');
?>
