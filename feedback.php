<?php
	//open a new file to write 
	$data_file = fopen("textfile.txt", "a");

	$name = $_POST["name"];
	$age = $_POST["age"];
	$email = $_POST["email"];
	$mobile = $_POST["mobile"];
	$gender = $_POST["gender"];
	$text = $_POST["text"];
	
	
	/*
	$text_to_write = $name.''.$age.' '.$email.' '.$mobile.' '.$gender;
	
	*/


	//write to server side file
	//fwrite($data_file, $text_to_write."\n");
	fwrite($data_file, $name."\n");
	fwrite($data_file, $age."\n");
	fwrite($data_file, $email."\n");
	fwrite($data_file, $mobile."\n");
	fwrite($data_file, $gender."\n");
	fwrite($data_file, $text."\n");
	
			
	
	fclose($data_file);
	
	
	echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $mobile;
echo "<br>";
echo $gender;
echo "<br>";
echo $text;


echo "<br>";


?>

<div id="center_button"><button onclick="location.href='feedback.html'">Back</button></div>
<div id="center_button"><button onclick="location.href='kfldksfj'">view others feedback</button></div>


