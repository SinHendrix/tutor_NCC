<?php 
    session_start();
    if(isset($_SESSION['username'])){
        header('location: index.php');
    }
    require_once('connection.php');
?>

<title>Form Login</title>
<div align='center'>
    <form action="logprocess.php" method="post">
    <h1>Masuk</h1>
    <table>
    <tbody>
    <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
    <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
    <tr><td colspan="2" align="right"><input value="Login" type="submit"> <input value="Batal" type="reset"></td></tr>
    <tr><td colspan="2" align="center">Belum Punya akun ? <a href="register.php"><b>Daftar</b></a></td></tr>
    </tbody>
    </table>
    </form>
</div>