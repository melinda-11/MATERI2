<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/350ae57961.js" crossorigin="anonymous"></script>

    
    <title>Halaman Beranda</title>
  </head>
  <body>
  	
    <!--navbar-->
 
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">Florist</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="{{ url("beranda") }}">Beranda <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="{{ url("login") }}">Login</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="{{ url("produk") }}">Produk</a>
	      </li>
	      
	    </ul>
	  </div>
	</nav>



<!--navbar search-->
<nav class="navbar  navbar-light bg-light ">
  <a class="navbar-brand"><h3>ONLINE FLORIST</h3></a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Cari barang" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>

<!--coursel-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
    
      <img src="Bunga1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Bungas (2).jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="bunga saya.jpg" class="d-block w-100" alt="...">
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--jumbotron kategory-->
<div class="container jumbotron jumbotron-fluid">
  <div class="container">
  Males untuk keluar untuk pesan bunga papan atau bouquet bunga ke Toko bunga offline? Sekarang pesan bunga tidak perlu ribet dan menghabiskan waktu kamu, tinggal pesan bunga di toko bunga online.Di era digital seperti sekarang ini, semuanya harus serba cepat, mudah dan simple. Begitu juga dengan proses memesan bunga yang harus cepat, mudah sekaligus sederhana sehingga tidak memakan banyak waktu dan juga tenaga.</div>
    <br>

    <h5>Kategori Pilihan</h5> 
    <br>
    <div class="container">
	  <div class="row">
	    <div class="col">
	    	<div class="card" style="width: 25rem;">
			  <img src="tanaman hidup.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5>Bunga Hidup</h5>
			   
			  </div>
		</div>
	    </div>
	    <div class="col">
	    	<div class="card" style="width: 20rem;">
			  <img src="k.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5>Bunga Plastik</h5>
			   
			  </div>
			</div>







	</div>
</div>



<!--jumbotron-->
<div class="container jumbotron jumbotron-fluid">
	<h5>Rekomendasi</h5>
  	<!--grid-->
  	<div class="container">
	  <div class="row">
	    <div class="col">
	    	<div class="card" style="width: 15rem;">
			  <img src="bunga4.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5>Bunga meja</h5>
			   <button type="button" class="btn btn-warning">Detail</button>
			    
			  <button type="button" class="btn btn-info">Rp. 200.000</button>
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="far fa-star"></i>
			    <P>Bintang</P>
			  </div>
		</div>
	    </div>
	    <div class="col">
	    	<div class="card" style="width: 15rem;">
			  <img src="bunga meja.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5>Bunga hias</h5>
			   <button type="button" class="btn btn-warning">Detail</button>
			 
			<button type="button" class="btn btn-info">Rp. 100.000</button>
						  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="far fa-star"></i>
			    <P>Bintang</P>
			  </div>
			</div>
	    </div>
	    <div class="col">
	    	<div class="card" style="width: 15rem;">
			  <img src="bunga meja2.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5>Bunga mati</h5>
			   <button type="button" class="btn btn-warning">Detail</button>
			    
			   <button type="button" class="btn btn-info">Rp. 250.000</button>
			   			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="far fa-star"></i>
			    <P>Bintang</P>
			  </div>
			</div>
	    </div>
	    <div class="col">
	    	<div class="card" style="width: 15rem;">
			  <img src="bunga meja3.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5>Bunga hias</h5>
			   <button type="button" class="btn btn-warning">Detail</button>
		<button type="button" class="btn btn-info">Rp. 150.000</button>
					  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="fas fa-star"></i>
			  <i class="far fa-star"></i>
					    <P>Bintang</P>
			  </div>
			</div>
	    </div>
	  </div>
	</div>
</div>

<nav class="navbar navbar-expand-lg navbar-info bg-info">
	  <a class="navbar-brand" href="#"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	     
<div class="widget ContactForm" id="ContactForm1">
<div class="contact-form-widget">
<div class="form">
<form name="contact-form">
<i class="fa fa-user"></i> Name: <input class="contact-form-name" id="ContactForm1_contact-form-name" name="name" size="30" type="text" value="" />
        <br />
<br />
<i class="fa fa-envelope-o"></i> E-mail:<input class="contact-form-email" id="ContactForm1_contact-form-email" name="email" size="30" type="text" value="" />
        <br />
<br />
<i class="fa fa-pencil-square-o"></i> Message:
<textarea class="contact-form-email-message" cols="25" id="ContactForm1_contact-form-email-message" name="email-message" rows="5"></textarea><br />
<input class="contact-form-button contact-form-button-submit fa-user" id="ContactForm1_contact-form-submit" type="button" value="Submit" />
        <br />
<div class="contact-form-error-message" id="ContactForm1_contact-form-error-message">
</div>
<div class="contact-form-success-message" id="ContactForm1_contact-form-success-message">
</div>
<br /></form>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>