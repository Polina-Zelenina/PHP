<?php 
	require_once('config.php');
	include_once(SRC_PATH.'getUsersData.php');
	include_once(SRC_PATH.'filterUsers.php');
	include_once(SRC_PATH.'getUser.php');

	$users = filterUsers(getUsersData());
	print_r($users);

	$usersArr = getUsersFromFile('users.txt');
	$user = getUser('polly', '123456789', $usersArr);
	$notExistingUser = getUser('polly', '12345678', $usersArr);

	echo "<br/><br/><br/>";
	print_r($user);
	echo "<br/>";
	print_r($notExistingUser);
?>