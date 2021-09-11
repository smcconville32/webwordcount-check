<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
require('functions.inc.php');

// declaring an array for output
$output = array(
	"error" => false,
    "string" => "",
	"answer" => 0
);

// requesting contents of paragraph
$paragraph = $_REQUEST['paragraph'];
// requesting keyword
$word = $_REQUEST['word'];

// using check method from functions.inc.php and passing parameters in
$answer=check($paragraph,$word);

// assigning value to 'string' in the output array
$output['string']=$paragraph."+".$word."=".$answer;
// answer will either be 1 or 0
$output['answer']=$answer;

// encodes array as a json array
echo json_encode($output);
exit();
?>
