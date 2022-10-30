<?php
	define('ROOT_PATH', dirname(__FILE__));
    $filesPath = ROOT_PATH.DIRECTORY_SEPARATOR.'files'.DIRECTORY_SEPARATOR;

    $login = htmlspecialchars($_POST['login']);
    $pass = htmlspecialchars($_POST['password']);

    /*$authFilePath = $filesPath.'auth.txt';
	$authFile = fopen($authFilePath, 'r');

    while(!feof($authFile)) {
        $row = explode(' ', fgets($authFile));
        $loginFromRow = ltrim($row[0]);
        $passwordFromRow = rtrim($row[1]);

        if ($login === $loginFromRow && $pass === $passwordFromRow) {
            $newFilePath = $filesPath.$login.'.txt';

            if (file_exists($newFilePath)) {
                file_put_contents($newFilePath, file_get_contents($newFilePath) + 1);
            } else file_put_contents($newFilePath, 1);

            echo "<script type='text/javascript'>alert('$login');</script>";
            break;
        }
    }

    fclose($authFile);*/
    $authFilePath = $filesPath.'auth.json';
    $auth = json_decode(file_get_contents($authFilePath), true);

    foreach($auth as $i => $user) {
        if ($login === $user['login'] && $pass === $user['password']) {
            $auth[$i]['loginCount'] += 1; 
            echo "<script type='text/javascript'>alert('$login');</script>";
            break;
        }
    }
    
    file_put_contents($authFilePath, json_encode($auth));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Forms</title>
</head>
<body>
    <div class="jumbotron d-flex align-items-center min-vh-100">
        <div class="container col-3">
                <form
                    method='post'
                    class="row justify-content-md-center border rounded p-5 border border-dark"
                >
                    <h2 class="text-center ">Sign In</h2>
                    <label class="mb-2 form-label">
                        Login
                        <input class="form-control" type="text" placeholder="Your login" name="login">
                    </label>
                    <label class="mb-4 form-label">
                        Password
                        <input class="form-control" type="password" placeholder="Your password" name="password">
                    </label>
                    <div>
                        <button type="submit" class="btn btn-outline-dark form-control">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>