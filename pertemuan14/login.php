<?php
    session_start();
    include "koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Username :</label>
        <input type="text" name="fusername"><br>
        <label>Password :</label>
        <input type="password" name="fpassword"><br>
        <button type="submit" name="fmasuk">Login</button>
    </form>

    <?php
        if (isset($_POST['fmasuk'])) {
            $username = $_POST['fusername'];
            $password = $_POST['fpassword'];
            $qry = mysqli_query($koneksi,"SELECT * FROM login WHERE username = '$username' AND password = md5('$password')");
            $cek =  mysqli_num_rows($qry);
            if ($cek==1) {
                $_SESSION['userweb'] = $username;
                header ("location:admin.php");
                exit;
            }
            else {
                echo "Maaf username dan password yang anda masukkan salah";
            }
        }
    ?>
</body>
</html>