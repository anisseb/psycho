<?php

if (isset($_POST['password']) && $_POST['password'] == "password")
{
	header('Location: app.html');  
	echo "Success";
}
else
{
	echo "Failed";
}