
<h1>Fill the form </h1>
<form method = "post" action = <?= $_SERVER['PHP_SELF'];?>>
First name <input type ="text" name = "fname" ><br>
Last name <input type ="text" name = "lname" ><br>
<input type="submit" value = "Send">
</form>
<?php

$fileName = 'file_9.txt';
if ($_POST && $_POST['fname'] && $_POST['lname']){
	$fullName = trim($_POST['fname']). " ".trim($_POST['lname'])."\r\n";
	$file = fopen($fileName, a);
	fwrite ($file, $fullName);
	fclose($file);
	echo "Data saved";
	
}else{
	if ($_POST && !$_POST['fname']){
		$error = 'First name is a required. ';
	}	
	if($_POST && !$_POST['lname']){
		$error .= 'Last name is a required';
	}
	if($error){
		echo $error;
	}
}