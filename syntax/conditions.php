<?php
$age = 67;
$legalAgeToDrink = 18;
$hasMoney = true;

// >= bigger than 
// <= less than  
// == equals to                 - ( only compares the value)
// === strictly equals to       - ( compares the value and the type )
// != different than            - ( only compares the value)
// !== strictly different from  - ( compares the value and the type )
// && and
// || or
// ! not 
// ?: if a value is truthy, return that value, if its falsy, return the value after the ?:
// ?? if the variable isset, return that value, if !isset, return the value after the ??
// ??=  shorthand to $var = $var ?? 'value';
// if();
// if(){}
// if(){} else{}
// if(){} elseif(){} else{}
// ()?true:false;
// truthy?:falsy;
// isset_true??isset_false;
// isset_true??=isset_false;
// switch($var){case 'value': action(); break; default: default_action();}

//simple if
if ( $age >= $legalAgeToDrink && $hasMoney) echo "You can drink <br>";
//if and else
if ( $age === 0 ) {
  echo "Not even born yet <br>";
} else {
  echo "You were born <br>";
}
//if elseif
if ($age < 13) {
  echo "<br>KID<br>";
} 
elseif ($age < 18) {
  echo "<br>TEEN<br>";
}
elseif($age >= 18 && $age < 65) {
  echo "<br>ADULT<br>";
}
elseif($age > 65) {
  echo "<br>YOU'RE GETTING OLD<br>";
}
else {
  echo "<br>WHAT?<br>";
}

//ternary if
echo $age >= 100 ? "CENTENARY" : "NOT OLD ENOUGH, PLS HAVE A LONG AND HAPPY LIFE AND THEN COME BACK<br>";

//short ternary if  (check if a value already exist, if true it uses the already signed value, else put the value after ?:)
$racoon = ''; //falsy value
echo $racoon ?: "YOU NEED A RACOON<br>"; //Theres no racoon here. You need one. 
$racoon = $racoon ?: "SIDNEY<br>"; //Theres no racoon here. Sidney, the magnific racoon, will go with you. 
echo $racoon ?: "YOU NEED A RACOON<br>";  //Now you have a racoon. S I D N E Y 

//NULL COALESCING ASSIGNMENT OPERATOR ??=
$myAge = $age ?? 18;
echo "$myAge<br>";

//switch
$pet = 'dog';
switch($pet){
  case 'cat':
    echo 'meow<br>';
    break;
  case 'hamster':
    echo 'inc inc inc<br>';
    break;
  case 'dog':
    echo 'au au<br>';
    break;
  default:
    echo 'no pet';
}

?>