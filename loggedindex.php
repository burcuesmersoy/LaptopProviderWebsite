<?php
session_start();
ob_start();
$conn = new mysqli("localhost", "root", "", "sigma");
if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sigma Inc</title>
	<link rel="stylesheet" href="stylee.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<style>
		body {

			font-family: 'Raleway', sans-serif;
			background-color: #121211;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
		<div class="container">
			<a class="navbar-brand" href="">
				<img src="https://cdn-icons-png.flaticon.com/512/1001/1001266.png" style="width: 40px;" alt="">Sigma Inc</a>
			

			<br>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ms-auto">
					<a class="nav-link" aria-current="page" href="loggedindex.php">Home</a>
					<a class="nav-link" href="shop.php">Shop</a>
					<a class="nav-link" href="#AboutUs">About Us</a>
					
					<a href="admin.php" class="btn">
						<svg xmlns="http://www.w3.org/2000/svg" color="#646771" width="16" height="16" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
							<path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
							<path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z" />
						</svg>
					</a>
                    <a href="endSession.php" class="btn">
						<svg xmlns="http://www.w3.org/2000/svg" color="#646771" width="16" height="16" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                            <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                            <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
                          </svg>
					</a>
				</div>
			</div>
		</div>
	</nav>
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assets/carousel_img/1.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="assets/carousel_img/2.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="assets/carousel_img/3.jpg" class="d-block w-100" alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<h4 class="d-flex justify-content-center" style="color:white;">Our newest model X Æ A-Xii</h4>
	<div class="container-fluid d-flex justify-content-center">
		<div class="card31 ">
			<div class="circle"></div>
			<img src="https://www.gamegaraj.com/wp-content/uploads/Slayer-5XL-3050Ti-3.png">
			<div class="content">
				<h2 style="color:white;">Sigma X Æ A-Xii</h2>
				<p style="color:white;font-weight: bold;">
					17.3″ FHD IPS Ekran 144Hz
					Intel Core i7-11800H 2.3GHz – 4.6GHz 24MB
					Nvidia GeForce RTX3050Ti 4GB
					16GB (2×8) 3200MHz DDR4
					500GB NVMe M.2 SSD
				</p>
				<button type="button" class="btn btn-light">Go Buy!</button>
			</div>
		</div>
	</div>
	<div id="laptopCarousel2" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#laptopCarousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#laptopCarousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#laptopCarousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<?php
			$firstActive = "active";
			$ece = 1;
			$sql = "SELECT * FROM laptop";
			$result = mysqli_query($conn, $sql);

			foreach ($result as $laptop) {
				if ($ece == 1) echo "<div class=\"row $firstActive carousel-item\">";
			?>
				<div class="col col-4" style="float:left">
					<img src="assets/laptop_images/<?= $laptop["laptop_img1"] ?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title" style="color:white;"><?= $laptop["name"] ?></h5>

					</div>
				</div>
			<?php
				if ($ece == 3) {
					$firstActive = "";
					echo "</div>";
					$ece = 0;
				}

				$ece++;
			}
			?>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#laptopCarousel2" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#laptopCarousel2" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<section class="text-left p-5" id="AboutUs">
        <div class="container d-md-flex align-items-center">
          <div>
              <h3 style="color:#957bda;">About Us</h1>
            <p class="my-3" style="color:#646771;">
                Oynadığınız oyunlarla bütünleşmek istiyorsanız ve kullandığınız yazılımlarla yaratıcılığınızın doruklarına çıkmayı hedefliyorsanız, Monster Notebook size beklentilerinizin de ötesinde bir dünya sunuyor.

                En yüksek performanslı notebook modellerini, en erişilebilir fiyatlarla kullanıcılarla buluşturan Monster, yılların verdiği sektör tecrübesiyle ürün gamını şekillendirerek tüm ihtiyaçlarınıza uygun notebook modelleri hazırlıyor
                
                İsimlerini Türk mitolojisinden alan notebook serilerini; Gaming, Business ve Workstation kategorileri altında bir araya getiren Monster, üst seviye donanım bileşenleriyle güçlendirilen taşınabilir bilgisayarları sayesinde masaüstü çalışma konforunu mobil platformda yaşamanızı sağlıyor.
                
                Avantajlı fiyatlara konumlanan Abra serisi, Full HD çözünürlükte oyun oynayabilmenizi mümkün kılıyor. .
                
                Oyunların yanı sıra diğer tüm uygulamalarda daha fazla performans elde etmenize, 2K ve üzerindeki çözünürlüklerde oyun oynamanıza ortam hazırlayan Tulpar serisi, sizin için ideal seçenek haline geliyor.
                
                Sahip olduğu donanım sayesinde Gaming ailesinin en güçlü notebook serisi Semruk ise sizi, herkesin şahit olamayacağı bir oyun atmosferine davet ediyor. .
                
                Güçlü ve işlevsel bir dizüstü bilgisayara gereksiniminiz varsa Huma serisi, 3D tasarım ve render gibi yüksek işlem gücü gerektiren uygulamalarla çalışıyorsanız Markut serisi içerisinde boy gösteren notebook modelleri, projelerinizi kısa sürede tamamlamanıza yardım ediyor.
                
                Monster, almayı planladığınız dizüstü bilgisayarı modelleri için satış öncesinde konfigürasyon özelleştirme seçenekleri sunarak bilgisayarınızı belirli ölçülerde kişiselleştirebilmenize olanak veriyor. Bu noktada ekleyeceğiniz donanıma bağlı olarak notebook fiyatları değişiklik gösteriyor.
                
                Ayrıca Monster, satış sonrasında da memnuniyetinizi daimi kılmayı garanti ediyor. Notebooklarınız için ömür boyu ücretsiz bakım hizmeti, satın aldıktan sonra ilk 15 gün içinde çalıştıramadığınız yazılım ve oynayamadığınız oyunla karşılaşırsanız anında iade olanağı, ilk 30 gün içinde ekranda meydana gelebilecek tek bir ölü piksel neticesinde bile panel değişimi gibi birçok imkan ve güvence, Monster’ın kullanıcılarına verdiği değeri gösteriyor. Yaşayabileceğiniz sorunlara karşı daima yanınızda olan ve bu sorunlara kısa sürede müdahale eden Monster teknik servisi oyun keyfinizi ve çalışmalarınızı dilediğiniz gibi sürdürebilmenize yardımcı oluyor.
                
                Yeni ve güçlü bir dizüstü bilgisayar almayı amaçlıyorsanız, Monster’ın kullanıcı dostu ve güvenli web sitesi üzerinden dilediğiniz modeli inceleyip hemen sepetinize ekleyebilirsiniz.
                
                Aynı zamanda; İstanbul, Ankara, İzmir ve Lefkoşa’daki Monster mağazalarını da ziyaret edebilir, hem Monster’ın kendine özgü dünyasını keşfedebilir hem de gereksinimlerinize uygun bir notebook edinebilirsiniz.</p>
          </div>
          <img class="col-6 offset-md-1 d-none d-sm-inline-block " style="min-width: 300px; min-height: 300px; max-width: 400px" src="https://cdn-icons-png.flaticon.com/512/1001/1001266.png" alt="">
        </div>
      </section>


	<!---FOOTER-->
	<div class="card mx-5">
		<div class="row mb-4 ">
			<div class="col-md-4 col-sm-11 col-xs-11">
				<div class="footer-text pull-left">
					<div class="d-flex">
						<h1 class="font-weight-bold mr-2 px-3" style="color:#16151a; background-color:#957bda"> Sigma </h1>
						<h1 style="color: #957bda">Inc</h1>
					</div>
					<p class="card-text">Σ Sigma Inc. is a laptop company. There are laptops that have different components to appeal to different audiences. Also, laptops are customizable by the customer with a price change.</p>
					<div class="social mt-2 mb-3"> <i class="fa fa-facebook-official fa-lg"></i> <i class="fa fa-instagram fa-lg"></i> <i class="fa fa-twitter fa-lg"></i> <i class="fa fa-linkedin-square fa-lg"></i> <i class="fa fa-facebook"></i> </div>
				</div>
			</div>
			<div class="col-md-2 col-sm-1 col-xs-1 mb-2"></div>
			<div class="col-md-2 col-sm-4 col-xs-4">
				<h5 class="heading">Services</h5>
				<ul>
					<li>IT Consulting</li>
					<li>Development</li>
					<li>Cloud</li>
					<li>DevOps & Support</li>
				</ul>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-4">
				<h5 class="heading">Industries</h5>
				<ul class="card-text">
					<li>Finance</li>
					<li>Public Sector</li>
					<li>Smart Office</li>
					<li>Retail</li>
				</ul>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-4">
				<h5 class="heading">Company</h5>
				<ul class="card-text">
					<li>About Us</li>
					<li>Blog</li>
					<li>Contact</li>
					<li>Join Us</li>
				</ul>
			</div>
		</div>
		<div class="divider mb-4"> </div>
		<div class="row" style="font-size:10px;">
			<div class="col-md-6 col-sm-6 col-xs-6">
				<div class="pull-left">
					<p><i class="fa fa-copyright"></i> 2022 @copyright by sigma inc</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6">
				<div class="pull-right mr-4 d-flex policy">
					<div>Terms of Use</div>
					<div>Privacy Policy</div>
					<div>Cookie Policy</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>