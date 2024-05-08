<?php
extract($_GET);
extract($_POST);
include "koneksi.php";
?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Coffee</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
            <style>
    .result-box {
        border: 2px solid #ccc;
        padding: 20px;
        margin-top: 20px;
        border-radius: 10px;
    }

    .regression-formula h4 {
        color: #333;
    }

    .regression-formula p {
        color: #666;
    }

    .prediction-result p {
        color: #008000; /* Warna hijau */
    }
</style>

		</head>
		<body>

			  <header id="header" id="home">
				<div class="header-top">
		  			<div class="container">
				  		<div class="row justify-content-end">
				  			<div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
				  				<ul>
				  					<li>
				  						Senin - Jumat : 08.00 to 22.00
				  					</li>
				  					<li>
				  						Sabtu - Minggu : 08.00 to 24.00
				  					</li>
				  					<li>
				  						<a href="wa.me/6281327991106">(012) 6985 236 7512</a>
				  					</li>				  					
				  				</ul>
				  			</div>
				  		</div>			  					
		  			</div>
				</div>			  	
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Home</a></li>
				          <li><a href="input.php">Input Data</a></li>
				          <li><a href="data_penjualan.php">Data Penjualan</a></li>
				          <li><a href="peramalan.php">Prediksi Penjualan</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
            <!-- Start blog Area -->
<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Prediksi Penjualan Kafe Triple R</h1>
								<p>Penyajian data.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-6 col-md-6 single-blog">
							<img class="img-fluid" src="img/peramal1.jpg" alt="">
							<br><br>
							<a href="#"><h4>Keterangan Tabel</h4></a>
							<p>Dalam analisis regresi linier, biasanya terdapat dua jenis variabel: variabel independen atau prediktor (x) dan variabel dependen atau yang ingin diprediksi (y). Dalam kasus data penjualan yang Anda miliki, variabel y mewakili jumlah penjualan (variabel dependen), sementara variabel x mewakili nomor minggu. Pada minggu pertama, nilai x dimulai dari 0, yang umumnya dilakukan untuk menyelaraskan dengan pengindeksan yang dimulai dari 0 dalam banyak bahasa pemrograman.</p>
							<p>Sebagai contoh, dalam rumus regresi linier, nilai x akan mewakili nomor minggu, dimulai dari 0 untuk minggu pertama, 1 untuk minggu kedua, dan seterusnya. Rumus regresi linier ini kemudian digunakan untuk menentukan hubungan antara nilai-nilai x dan y yang sesuai (jumlah penjualan). Dengan demikian, analisis regresi linier memungkinkan Anda untuk memprediksi penjualan di masa depan berdasarkan variabel prediktor tertentu, seperti nomor minggu dalam kasus ini.</p>
						</div>
						<div class="col-lg-6 col-md-6 single-blog">
							<img class="img-fluid" src="img/peramal2.jpg" alt="">
							<br><br>
							<a href="#"><h4>Ambang hasil</h4></a>
							<p>Untuk menentukan apakah prediksi penjualan tersebut menghasilkan surplus atau rugi, Anda perlu membandingkan prediksi dengan hasil aktual. Dalam konteks ini, hasil aktualnya tidak disediakan, tetapi Anda dapat menggunakan prediksi yang diberikan (8.3333) untuk membuat perkiraan. Jika hasil aktual penjualan berikutnya lebih besar dari prediksi (8.3333), maka Anda memiliki surplus. Sebaliknya, jika hasil aktualnya lebih kecil dari prediksi, maka Anda mengalami rugi.</p>
							<p>Dengan kata lain, surplus terjadi ketika penjualan aktual lebih tinggi dari prediksi, sedangkan rugi terjadi ketika penjualan aktual lebih rendah dari prediksi. Dalam situasi bisnis, informasi ini dapat membantu Anda mengevaluasi kinerja dan membuat penyesuaian yang diperlukan dalam perencanaan dan strategi penjualan.</p>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End blog Area -->	

            <div class="container">
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr align="center">
                <th scope="col">No</th>
                <th scope="col">Time Series</th>
                <th scope="col">Penjualan</th>
                <th scope="col">X</th>
                <th scope="col">Y</th>
                <th scope="col">XX</th>
                <th scope="col">XY</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 0;
            $total_x = 0;
            $total_y = 0;
            $total_xx = 0;
            $total_xy = 0;
            $x = -1;
            $query = mysqli_query($db, "SELECT * FROM penjualan ORDER BY id_jual ASC") or die("Gagal Query" . mysqli_error());
            while ($hs = mysqli_fetch_array($query)) {
                $no++;
                $x++;
                $minggu = $hs[1];
                $bulan = $hs[2];
                $tahun = $hs[3];
                $jumlah = $hs[4];
                $xx = $x * $x;
                $xy = $x * $jumlah;
                $total_x = $total_x + $x;
                $total_y = $total_y + $jumlah;
                $total_xx = $total_xx + $xx;
                $total_xy = $total_xy + $xy;
                ?>
                <tr align="center">
                    <td><?= $no ?>.</td>
                    <td align="left"><?= "Minggu ke-$minggu Bulan $bulan $tahun" ?></td>
                    <td><?= $jumlah ?></td>
                    <td><?= $x ?></td>
                    <td><?= $jumlah ?></td>
                    <td><?= $xx ?></td>
                    <td><?= $xy ?></td>
                </tr>
            <?php
            }
            ?>
            <tr align="center">
                <td colspan="3">Jumlah</td>
                <td><?= $total_x ?></td>
                <td><?= $total_y ?></td>
                <td><?= $total_xx ?></td>
                <td><?= $total_xy ?></td>
            </tr>
            <tr align="center">
                <td colspan="3">Rata-rata</td>
                <td><?= $total_x / $no ?></td>
                <td><?= $total_y / $no ?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="container">
    <table class="table table-bordered table-striped">
        <!-- Tabel Anda di sini -->
    </table>
    
    <div class="result-box">
        <?php 
        # Perhitungan Regresi Linier
        $b1 = ($total_xy - (($total_x * $total_y)/$no))/($total_xx - (($total_x * $total_x)/$no));
        $b0 = ($total_y/$no) - $b1 * ($total_x/$no);
        ?>
        
        <div class="regression-formula">
            <h4>Rumus Regresi Linier</h4>
            <p>y = <?= $b0 ?> + <?= $b1 ?>x</p>
        </div>
        
        <?php
        error_reporting(0);
        if ($prediksi){
            $x = $x + $list_pilihan;
            $y = $b0 + $b1 * $x;
            ?>
            <div class="prediction-result">
                <p>Prediksi penjualan untuk <?= $list_pilihan ?> minggu berikutnya adalah <?= $y ?></p>
            </div>
        <?php } ?>
    </div>
</div>
    	<!-- start footer Area -->		
        <footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>Kami menghadirkan beragam pilihan kopi berkualitas dari berbagai belahan dunia. Mulai dari biji kopi single origin yang dipanggang dengan hati-hati hingga campuran khas kami yang menggugah selera, setiap tegukan di Triple R adalah sebuah petualangan cita rasa yang memanjakan lidah Anda.</p>
								<p class="footer-text">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Kafe Triple R <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="index.php" target="_blank">Kafe Triple R</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info pt-20"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>
