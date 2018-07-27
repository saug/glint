<?php require_once 'header.php'; ?>
<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Github</li>
		</ol>
	</nav>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="https://dummyimage.com/800x400/777/555.png&text=Dummy+Image" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="https://dummyimage.com/800x400/777/555.png&text=Dummy+Image" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="https://dummyimage.com/800x400/777/555.png&text=Dummy+Image" alt="Third slide">
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

	<div class="jumbotron" style="margin-top:30px;">
		<h1 class="display-4">Hello, world!</h1>
		<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
		<hr class="my-4">
		<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
		<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
	</div>		

	<div class="contact-form" style="padding-top: 20px; margin-top: 20px;">
		<h1>Contact Form</h1>
		<form>
			<div class="row"">
				<div class="form-group col-6">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="col-6">
					<label for="exampleInputPassword1">Phone</label>
					<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-group col-12">
					<label for="exampleFormControlTextarea1">Example textarea</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
				<div class="form-group form-check col-12" style="margin-left: 20px;">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Check me out</label>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

</div><!-- container -->
<?php require_once 'footer.php'; ?>