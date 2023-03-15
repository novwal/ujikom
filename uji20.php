<?php
session_start();
$conn = mysqli_connect("localhost","root", "","latihan_xpplg");
if (isset($_SESSION["name"])) {
    echo "<script>window.location.href = 'uji20.php'</script>";
}

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $pass = md5($_POST['password']);

    $sql = "SELECT * FROM barang WHERE = ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['name'] = $name;
        echo "<script>window.location.href = 'uji18.php';</script>";
    } else {
        echo "<script> alert('Username atau Password salah')
         window.location.href = 'uji20.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>

    <div class="form-container">
        <form action="" method="post">
            <h3> Login</h3>
            <input type="text" name="nama" required placeholder="nama">
            <input type="password" name="nis" required placeholder="nis">
            <input type="password" name="rayon" required placeholder="rayon">
            <input type="submit" name="submit" value="Login " class="form-btn">
        </form>
    </div>

</body>

</html>