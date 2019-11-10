
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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
  
			<?php 
				include 'connection.php';
  				session_start();
  				if (!isset($_SESSION['username'])){
				header("Location:./index.php");
			}
  			$user=mysqli_query($koneksi,"select * from user where id_user='$_SESSION[id]'");
			  $duser = mysqli_fetch_array($user);
			  $d = mysqli_fetch_array($user);
			  ?>
					
			<article style="text-align: justify;">
				<div ><h2> Username:	<?php echo $d['username'] ?> </h2> </div>
				<div ><h2> Nama:	<?php echo $d['nama'] ?> </h2> </div>
				<div ><h2> Email:	<?php echo $d['email'] ?> </h2> </div>
				<br><br><br>
				<button><?php echo "<a href=\"edituser.php?id=$d[id_user]\">Edit profile</a>"; ?></button>
				<button><?php echo "<a href=\"hapususer.php?id=$d[id_user]\">Hapus akun</a>"; ?></button>
			</article>
			
			
			
		
		


</section>

	
	<div id ="footer" ><br/> &copy; Project Web Camin NCC </div>

		

</body>
</html>