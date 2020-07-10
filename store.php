<link rel="stylesheet" href="search-store.css">
<link rel="stylesheet" href="grid_product.css">
<style>
	/* Set the size of the div element that contains the map */
	#map {
		height: 400px;  /* The height is 400 pixels */
		width: 100%;  /* The width is the width of the web page */
  }
  .carousel-inner > .item > a > img, .carousel-inner > .item > img, .img-responsive, .thumbnail a > img, .thumbnail > img {
    display: block;
    max-width: 100%;
    height: auto;
}
img {
    vertical-align: middle;
}
img {
    border: 0;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
</style>

<link rel="stylesheet" href="review_card.css">
<link rel="stylesheet" href="timeline.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700" rel="stylesheet">
<script src="https://animejs.com/lib/anime.min.js"></script>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		</div>    
	</div>
	<div class="row pt-5">
		<div class="col-lg-4">
			<div class="iphone">
				<div class="header pb-0 pt-3">
					<div class="order-summary">
						<div class="order-status">Review PetShop</div>
						<div class="order-date">
							nama petshop
						</div>
						<div class="order-day">
							Jl. monjali km 2.5 
						</div>
					</div>
					<div class="action-btn">
						<div class="back-btn"><i class="fas fa-arrow-circle-left"></i></div>
					</div>
				</div>
				<div class="hero-img-container">
					<div class="triangle1"></div>
					<div class="arc"></div>
					<div class="pattern"></div>
					<img src="img/usaha.svg" class="hero-img">
				</div>
				<div class="order-status-container">
					<div class="status-item first">
						<div class="status-circle"></div>
						<div class="status-text">
							today
						</div>
					</div>
					<div class="status-item second">
						<div class="status-circle"></div>
						<div class="status-text">
							Shipped
						</div>
					</div>
					<div class="status-item">
						<div class="status-circle"></div>
						<div class="status-text green">
							<span>Out</span><span>for delivery</span>
						</div>
					</div>
					<div class="status-item">
						<div class="status-circle"></div>
						<div class="status-text green">
							<span>Ariving</span>
							<span>03&nbsp;-&nbsp;05</span>
						</div>
					</div>
				</div>
				<div class="order-details-container">
					<div class="odc-header">
						<div class="cta-text">See your product details</div>
						<div class="cta-button-container">
							<button class="cta-button">View</button>
						</div>
					</div>
					<div class="odc-wrapper">
						<div class="odc-header-line">
							Your order details
						</div>
						<div class="odc-header-details">
							Produk Unggulan Kami
						</div>
						<div class="product-container">
							<div class="product">
								<div class="product-photo">
									<img src="https://s3.eu-central-1.amazonaws.com/sneakerjagers.com/products/396x396/92074.jpg" class="img-photo">
								</div>
								<div class="product-desc">
									<span>Pets Spa</span>
									<span>$84</span>
								</div>
							</div><div class="product">
								<div class="product-photo">
									<img src="https://s3.eu-central-1.amazonaws.com/sneakerjagers.com/products/396x396/77674.jpg" class="img-photo">
								</div>
								<div class="product-desc">
									<span>Pets Hair Cut</span>
									<span>$78</span>
								</div>
							</div>
						</div>
						<div class="cancellation">
							Request Cancellation
						</div>

						<div class="shipping-desc">Your Shipping Address</div>

						<div class="shipping-address">
							4619 Ranchview Dr<br>
							Rogaland<br>
							M5GK274<br>
							ON, CANADA
						</div>
					</div>
				</div>
			</div>
		</div>    
		<div class="col-lg-8">
			<div class="search-container">
				<form role="form" class="search-form search-form-new js-search-form" action="/search/" method="GET">

					<div class="pet-type-select">
						<div class="heading">
							service petshop kami
						</div>
						<div class="js-pet-type-selection-view">
							<ul class="list-inline">
								<li class="checkbox margin-top-x0 margin-bottom-x0">
									<label class="margin-right-x2">
										<input type="checkbox" id="pet-type-checkbox-dog-search-form" class="js-pet-type-checkbox" value="dog" checked="">Dog
									</label>
									<label>
										<input type="checkbox" id="pet-type-checkbox-cat-search-form" class="js-pet-type-checkbox" value="cat">Cat
									</label>
								</li>
							</ul>
						</div>
					</div>


					<div class="row row-lopad-lg row-lopad-md row-lopad-sm stay-type-buttons margin-top-x2">

						<div class="away-wrapper col-sm-7 col-lopad-lg col-lopad-md col-lopad-sm">
							<label>Untuk kamu yang sedang berpergian</label>
							<div class="row service-select-buttons">



								<div class="col-xs-12 col-sm-4 col-lopad-sm col-lopad-md col-lopad-lg rover-button-wrapper">
									<div class="rover-button text-center js-stay-type-btn js-stickit-data-value padding-x1 active" data-value="overnight-boarding" data-name="Boarding" data-supports_day_of_week_search="0" data-suggested_pet_type="any" data-supports_repeat_bookings="0">
										<a>
											<div class="hidden-xs">
												<i class="rover-icon rover-icon-sitter-home rover-icon-lg"></i>
											</div>
											<div>
												<div>Boarding
												</div>
											</div>
										</a>
									</div>
								</div>




								<div class="col-xs-12 col-sm-4 col-lopad-sm col-lopad-md col-lopad-lg rover-button-wrapper">
									<div class="rover-button text-center js-stay-type-btn js-stickit-data-value padding-x1" data-value="overnight-traveling" data-name="House Sitting" data-supports_day_of_week_search="0" data-suggested_pet_type="any" data-supports_repeat_bookings="0">
										<a>
											<div class="hidden-xs">
												<i class="rover-icon rover-icon-sitter-traveling rover-icon-lg"></i>
											</div>
											<div>
												<div>House
													Sitting
												</div>
											</div>
										</a>
									</div>
								</div>




								<div class="col-xs-12 col-sm-4 col-lopad-sm col-lopad-md col-lopad-lg rover-button-wrapper">
									<div class="rover-button text-center js-stay-type-btn js-stickit-data-value padding-x1" data-value="drop-in" data-name="Drop-In Visits" data-supports_day_of_week_search="0" data-suggested_pet_type="any" data-supports_repeat_bookings="1">
										<a>
											<div class="hidden-xs">
												<i class="rover-icon rover-icon-homevists rover-icon-lg"></i>
											</div>
											<div>
												<div>Drop-In
													Visits
												</div>
											</div>
										</a>
									</div>
								</div>






							</div>
						</div>
						<div class="at-work-wrapper col-sm-5 col-lopad-lg col-lopad-md col-lopad-sm">
							<label>Untuk kamu yang sedang bekerja</label>
							<div class="row service-select-buttons">









								<div class="col-xs-12 col-sm-6 col-lopad-sm col-lopad-md col-lopad-lg rover-button-wrapper">
									<div class="rover-button text-center js-stay-type-btn js-stickit-data-value padding-x1" data-value="doggy-day-care" data-name="Doggy Day Care" data-supports_day_of_week_search="1" data-suggested_pet_type="dog" data-supports_repeat_bookings="1">
										<a>
											<div class="hidden-xs">
												<i class="rover-icon rover-icon-daycare rover-icon-lg"></i>
											</div>
											<div>
												<div>Doggy
													Day
													Care
												</div>
											</div>
										</a>
									</div>
								</div>




								<div class="col-xs-12 col-sm-6 col-lopad-sm col-lopad-md col-lopad-lg rover-button-wrapper">
									<div class="rover-button text-center js-stay-type-btn js-stickit-data-value padding-x1" data-value="dog-walking" data-name="Dog Walking" data-supports_day_of_week_search="1" data-suggested_pet_type="dog" data-supports_repeat_bookings="1">
										<a>
											<div class="hidden-xs">
												<i class="rover-icon rover-icon-walking rover-icon-lg"></i>
											</div>
											<div>
												<div>Dog Walking
												</div>
											</div>
										</a>
									</div>
								</div>


							</div>
						</div>



					</div>
				</form>
				<ul class="nav nav-tabs pt-5">
					<li class="nav-item">
						<a class="nav-link active" href="#tab1" data-toggle="tab">home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#tab2" data-toggle="tab">Alamat</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#tab3" data-toggle="tab">testimoni</a>
					</li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane active" id="tab1">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-4 p-2">
									<p>deskripsi</p>
									<p class="lnr-text-align-justify">Pet shop kami Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur a magnam repellat animi iure dicta, explicabo sed adipisci aut! Molestiae adipisci excepturi iste vero laudantium ex omnis quas quam ad.</p>
								</div>
								<div class="col-md-8 pt-3">
									<form>
										<div class="input-group-sm mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="inputGroup-sizing-default">Masukkan</span>
											</div>
											<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
										</div>

										<div class="input-group-sm mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="inputGroup-sizing-default">Konsultasi Dokter</span>
											</div>
											<textarea class="form-control" aria-label="With textarea" style="height:150px"></textarea>
										</div>
										<button type="submit" class="btn btn-success btn-md float-right">
											Kirim
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab2">
						<div id="map"></div>
						<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
  	document.getElementById('map'), {zoom: 4, center: uluru});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});
}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAULEB33F4t4JxVXnjqJgvBkSMF1c-4604&callback=initMap">
</script>
</div>
<div class="tab-pane" id="tab3">
	
	<div class="container py-5">
		
		
		<h4>Testimoni Pelanggan</h4>
		
		
		<div class="row">
			<div class="col-lg-7">
				<!-- Timeline -->
				<ul class="timeline">
					<li class="timeline-item bg-white rounded ml-3 p-4 shadow">
						<div class="timeline-arrow"></div>
						<h2 class="h5 mb-0">Title of section 1</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>21
						March, 2019</span>
						<p class="text-small mt-2 font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
							scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis
						sagittis ligula in sodales vehicula....</p>
					</li>
					<li class="timeline-item bg-white rounded ml-3 p-4 shadow">
						<div class="timeline-arrow"></div>
						<h2 class="h5 mb-0">Title of section 2</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>5
						April, 2019</span>
						<p class="text-small mt-2 font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
						scelerisque diam non nisi semper.</p>
						<p class="text-small mt-2 font-weight-light">Libero expedita explicabo eius fugiat quia aspernatur autem
							laudantium error architecto recusandae natus sapiente sit nam eaque, consectetur porro molestiae ipsam!
						Deleniti.</p>
					</li>
					<li class="timeline-item bg-white rounded ml-3 p-4 shadow">
						<div class="timeline-arrow"></div>
						<h2 class="h5 mb-0">Title of section 3</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>18
						August, 2019</span>
						<p class="text-small mt-2 font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
							scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis
						sagittis ligula in sodales vehicula....</p>
					</li>
					<li class="timeline-item bg-white rounded ml-3 p-4 shadow">
						<div class="timeline-arrow"></div>
						<h2 class="h5 mb-0">Title of section 4</h2><span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>10
						October, 2019</span>
						<p class="text-small mt-2 font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
							scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis
						sagittis ligula in sodales vehicula....</p>
						<p class="text-small mt-2 font-weight-light">Voluptatibus temporibus esse illum eum aspernatur, fugiat
							suscipit natus! Eum corporis illum nihil officiis tempore. Excepturi illo natus libero sit doloremque,
						laborum molestias rerum pariatur quam ipsam necessitatibus incidunt, explicabo.</p>
					</li>
				</ul><!-- End -->
				
			</div>
		</div>
	</div>
</div>
</div>

</div>
</div>    
</div>

</div>

<div class="row">
	<div class="col-md-12">
		
		<div class="site">
			<div class="wrapper">
				<div class="sidebar filters">
					<div class="block">
						<h3 class="title">TYPE</h3>
						<ul>
							<li><a href="#" class="checked">Lorem del Ces</a></li>
							<li><a href="#">Ispum ce Peupil</a></li>
							<li><a href="#">Lorem del Ces</a></li>
							<li><a href="#">Ispum ce Peupil</a></li>
						</ul>
					</div>
					<div class="block">
						<h3 class="title">Color</h3>
						<ul>
							<li><a href="#">Blue</a></li>
							<li><a href="#" class="checked">Charcoal</a></li>
							<li><a href="#">Green</a></li>
							<li><a href="#">Red</a></li>
						</ul>
					</div>
					<div class="block">
						<h3 class="title">Size</h3>
						<ul>
							<li><a href="#">Petite</a></li>
							<li><a href="#" class="checked">Medium</a></li>
							<li><a href="#">Large</a></li>
						</ul>
					</div>
				</div>
				<!--  end .sidebar.filters  -->
				<div class="product-grid">
					<div class="hero">
						<!--<h1>CATEGORY</h1> -->
					</div>
					<div class="item-render">
						<div class="item item-template">
							<a href="#">
								<div class="product-image">
									<img src="//placehold.it/300x300/eeeeee/eeeeee/&text=+" class="img-responsive" />
								</div>
								<div class="hidden actions">
									<a href="#" class="quick-view" title="View Quick Details"><i class="fa fa-search"></i></a>
								</div>
								<div class="details">
									<p class="name">Product Name</p>
									<p class="price">$19.99</p>
								</div>
							</a>
						</div>
					</div>
					<!-- end .item -->
					<div class="render"></div>
				</div>
				<!-- end .product-grid -->
			</div>
		</div>
	</div>  
</div>  

<script>
	let drawer_open = false;
	
	document.querySelector(".cta-button").addEventListener("mouseup",function(){
		cta_button_hide.play();
	})
	
	document.querySelector(".back-btn").addEventListener("mouseup",function(){
		if(drawer_open) {
			slidedown.play();
			cta_button_show.play();
		}
	})
	
	let cta_button_show = anime({
		targets: ['.cta-button','.cta-text'],
		translateY: ['-15','0'],
		opacity: ['0','1'],
		easing: 'easeInOutSine',
		delay: anime.stagger(200),
		autoplay: false,
    // loop: false
    duration: 500,
    complete: function(){
    }
});
	
	let cta_button_hide = anime({
		targets: ['.cta-button','.cta-text'],
		translateY: ['0','-15'],
		opacity: ['1','0'],
		easing: 'easeInOutSine',
		delay: anime.stagger(200),
		autoplay: false,
    // loop: false
    duration: 500,
    complete: function(){
    	slideup.play();
    	drawer_open = true;
    }
});
	
	
	let slidedown = anime({
		targets: '.order-details-container',
		translateY: ['-560','-40px'],
		duartion: 1000,
		autoplay: false,
		begin: function(){
			show_hideCTA("block");
			drawer_open = false;
		}
	})
	
	let slideup = anime({
		targets: '.order-details-container',
		translateY: ['-40px','-560px'],
		autoplay: false,
		begin: function(){
			show_hideCTA("none");
		}
	})
	
	
	
	function show_hideCTA(param){
		document.querySelector(".cta-button").style.display=param;
		document.querySelector(".cta-text").style.display=param;
	}
</script>

