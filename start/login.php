<?php

if (isset($_POST['password']) && $_POST['password'] == "password")
{
	echo "Success";
}
else
{
	echo "Failed";
}