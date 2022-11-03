<?php 
	function getUsersData(): array {
	    $usersFilePath = SRC_PATH.'users.txt';
	    $usersFile = fopen($usersFilePath, 'r');

        $usersArr = [];

        while(!feof($usersFile)) {
            $row = explode(' ', fgets($usersFile));
            $name = ltrim($row[0]);
            $login = $row[1];
            $password = $row[2];
            $email = $row[3];
            $lang = rtrim($row[4]);
            
            $usersArr[] = [
                'name' => $name,
                'login' => $login,
                'password' => $password,
                'email' => $email,
                'lang' => $lang
            ];
        }

        fclose($usersFile);
        return $usersArr;
	}
?>