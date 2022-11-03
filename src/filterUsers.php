<?php
	function filteringCallback(array $userData) {
		return strlen($userData['password']) < 8;
	}

	function filterUsers(array $usersArr): array {
		return array_filter($usersArr, 'filteringCallback');
	}
?>