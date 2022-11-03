<?php 
	function getUsersFromFile(string $fileName): array {
		$file = fopen(SRC_PATH.$fileName, 'r');

        $arr = [];

        while(!feof($file)) {
            $row = explode(' ', fgets($file));
            $name = ltrim($row[0]);
            $login = $row[1];
            $password = $row[2];
            $email = $row[3];
            $lang = rtrim($row[4]);
            
            $arr[] = [
                'name' => $name,
                'login' => $login,
                'password' => $password,
                'email' => $email,
                'lang' => $lang
            ];
        }

        fclose($file);
        return $arr;
	}

    function getUser(string $login, string $password, array $arr) {
        $userData;

        foreach($arr as $user) {
            if ($user['login'] === $login && $user['password'] === $password) $userData = $user;
        }

        if ($userData) return $userData;
        return "User wasn't found";
    }
?>