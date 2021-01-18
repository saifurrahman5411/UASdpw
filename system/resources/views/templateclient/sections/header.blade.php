

<!--navbar-->
	<nav class="navbar navbar-expand-lg navbar-light bg-warning">
	  <a class="navbar-brand" href="#">TOKO JUAL BELI SUPERMOTO BEKAS</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="{{ url("beranda") }}">BERANDA<span class="sr-only">(current)</span></a>
	      </li>
	     
	     <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
	     
	      <li class="nav-item">
	        <a class="nav-link" href="{{ url("produk") }}">PRODUK</a>
	      </li>
	      
	       <li class="nav-item">
	        <a class="nav-link" href="{{ url("login") }}">LOGIN</a>
	      </li>

	    </ul>
	  </div>
	</nav>



<!--navbar search-->
<nav class="navbar  navbar-light bg-light ">
  <a class="navbar-brand">SELAMAT DATANG DI TOKO ONLINE KAMI</a>
  <form class="form-inline ml-auto">
    <input class="form-control mr-sm-2" type="search" placeholder="Cari barang" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">PENCARIAN</button>
  </form>
  <i class="fas fa-cart-plus ml-2"></i>
</nav>

<!--coursel-->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{url('public/images/motor1.jpg')}}" class="d-block w-100 " alt="..." height="500px">
    </div>
    <div class="carousel-item">
      <img src="{{url('public/images/motor5.jpg')}}" class="d-block w-100" alt="..." height="500px">
    </div>
    <div class="carousel-item">
      <img src="{{url('public/images/motor3.jpg')}}" class="d-block w-100" alt="..." height="500px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
<br>
