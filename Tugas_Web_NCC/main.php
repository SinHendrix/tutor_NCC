<!DOCTYPE html>
    <html>
        <head>
            <title> Bibil - Find Your Hotel </title>
              <link rel="icon" href="icon.png" type="image/png" sizes="10x10"/>
              <meta name = "description" content = "Hotel Booking"  />
              <meta name = "keywords" content = "Hotels, Booking, Vacation"  />
              <meta name = "author" content = "SinHendrix"  />
              <link rel="stylesheet" href="style.css" type="text/css" />

        </head>

        <body>

            <div id ="header" > 
            <div id="logo"><a href="main.php"><img src = "img/4.png" width = "120px" height = "120px"/></a></div>
                <div id= "nav">
                    <ul>
                        <li><a href = "logout.php"> Logout </a></li>
                        <li><a href = "myprofile.php"> Profil </a></li>
                        <!--<li><a href = "register.php"> Register </a></li>
                        <li><a href = "login.php"> Login </a></li> -->
                    </ul>
                </div>
            </div>

            <div id ="wrapper" >

            <?php 
  

		include 'connection.php';
		session_start();
if (!isset($_SESSION['username'])){
	header("Location:./index.php");
	}
	$user=mysqli_query($koneksi,"select * from user where id_user='$_SESSION[id]'");
  $duser = mysqli_fetch_array($user);
  ?>
  <article> <div class="judul">Hai <?php echo $duser['nama']; ?>, selamat datang di Bibil!</div> </article>
  <?php
 $data = mysqli_query($koneksi,"select * from kamar");
		while($d = mysqli_fetch_array($data)){
			?>
			<article style="text-align: justify;">
				<div class="judul"><h1>	<?php echo $d['judul']; ?> </h1></div>
					
				<img src="<?php echo "tampil.php?id=".$d['id_artikel']; ?>" class="gambar" style="float: left">
				<div> <?php echo $d['isi']; ?> </div>
				<?php $data2 = mysqli_query($koneksi,"select nama from user where id_user='$d[user]'"); ?>
				<?php $dat = mysqli_fetch_array($data2) ?>
				<div> <p> <b> dipesan oleh <?php echo $dat['nama']; ?> </b> </p> </div>
				<!-- <button><?php echo "<a href=\"simpan.php?id=$d[id_artikel]\">Download Gambar</a>"; ?></button> -->
				
			</article>
			
			
			<?php 
		}
		?>


</section>

            <table id="table1" cellspacing = "50">
                <tr>
                    <td><h3>Home</h3>"Lalala..." <a href="index.php">more</a></td>
                    <td><h3>About</h3>"Lalala..." <a href="about.php">more</a></td>
                    <td><h3>Register</h3>"Lalala..." <a href="register.php">more</a></td>
                    <td><h3>Login</h3>"Lalala..." <a href="login.php">more</a></td>
                </tr>
            </table>

            <div id ="footer" ><br/> &copy; Project Web Camin NCC </div>

            </div>



        </body>