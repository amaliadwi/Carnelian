<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<title>𝘾𝘼𝙍𝙉𝙀𝙇𝙄𝘼𝙉</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>	
	</div>

	<!-- header -->
	
	<header>
		<div class="container">
			<nav class="menu">
			<ul>
				<h1><a href="index.php">𝘾𝘼𝙍𝙉𝙀𝙇𝙄𝘼𝙉</a></h1>
				<li>
					<a href="catalog.php">Catalog</a>
				</li>
				<li>
					<a href="maps.php">Store</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
				<li>
					<a href="about.php">ABOUT</a>
				</li>
			</ul>
		</nav>
		</div>
	</header>
		<!-- label -->
	

	<!-- available -->
	<section class="available">
		<div class="container">
			<h3>PRE-ORDER</h3>
			<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama Produk</td>
				<td><input type="text" name="produk"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="number" name="jumlah"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
		</div>
	</section>
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			</ul>		
		</div>	
	</div>
	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2020 - 𝘼𝙢𝙖𝙡𝙞𝙖 𝘿𝙬𝙞. All Right Reserved.</small>
		</div>
	</footer>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>