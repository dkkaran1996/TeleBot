<!-- This is created by Kirubhakaran Durairaj.

This File will help you to fetch the answer based on the Inputgiven by the User.

case - Input commands

Run this file in Crontab for every minute.
 -->
<?php
//header("Content-Type: application/JSON");
//PHP Erros display
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Including api.php - to send message to user
//Includeing functons - If any functions to be added
include 'api.php';
include 'functions.php';

//Get input from users
$inputs=json_decode(file_get_contents("PATH/getdata.php"),true);


if($inputs['success']){
foreach($inputs as $input){
	switch($input['text']){
		case "/start":
			$op="Hi ".$input['Name']."\n".userCommands($id);
			$output=urlencode($op);
			teleBotCall($input['chatid'],$output);
			break;


		case "Hi":
			$op="Hi ".$input['Name']."\n".findUser($input['chatid']);
			$output=urlencode($op);
                        teleBotCall($input['chatid'],$output);
			break;


		case "/chatid":
			$op="Hi ".$input['Name']."!. Welcome to our VACCRMBot.\nYour Chat ID is ".$input['chatid'].". Please share this ID to concern Team to get Updates. Thank you. \nAvailable Comments:\n1. /start\n2. /chatid";
                        $output=urlencode($op);
                        teleBotCall($input['chatid'],$output);
			break;

		default:
			$op="Sorry! Try Only commands!!";
                        $output=urlencode($op);
                        teleBotCall($input['chatid'],$output);
			break;
	}
}
echo "Yes";
}
else
echo "No";

?>
