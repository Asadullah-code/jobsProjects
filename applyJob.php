<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Job Cards</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: #fff;">

	<div class="container my-5">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="col-xxl-9 col-lg-9 col-md-12 col-12">
				<form>
					<div class="card applyJobCard">
					  	<div class="cardHead">
					    	<h3 class="card-title detailH4 mb-0 fs-4">Warehouse Manager</h3>
					  	</div>
					  <div class="card-body py-5 px-4">
					  	<div class="row d-flex align-items-center justify-content-between">
					  		<div class="col-xxl-6 col-lg-6 col-md-12 col-12 mb-4">
					    		<input type="text" class="applyJobInput form-control" name="firstName" placeholder="First Name">
					  		</div>
					  		<div class="col-xxl-6 col-lg-6 col-md-12 col-12 mb-4">
					    		<input type="text" class="applyJobInput form-control" name="lastName" placeholder="Last Name">
					  		</div>
					  		<div class="col-xxl-6 col-lg-6 col-md-12 col-12 mb-4">
					    		<input type="text" class="applyJobInput form-control" name="email" placeholder="Email Address">
					  		</div>
					  		<div class="col-xxl-6 col-lg-6 col-md-12 col-12 mb-4">
					    		<input type="text" class="applyJobInput form-control" name="confirmEmail" placeholder="Confirm Email Address">
					  		</div>
					  		<div class="col-12 mb-4 d-flex align-items-center justify-content-start">
					  			<input type="file" class="applyJobInput p-4 w-25 form-control" name="confirmEmail" placeholder="Upload Cv">
					  			<p class="areP w-25 ms-3">Files must be less than <span style="color: #D83F63;">5 MB</span> Allowed file types: <span style="color: #D83F63;">pdf, docx, doc</span></p>
					  		</div>
					  		<div class="col-12 mb-4">
					  			<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
								  <label class="form-check-label ms-3" for="flexCheckDefault">
								    I accept these <span style="color: #D83F63;"> Terms of Service.</span>
								  </label>
					  		</div>
					  		<h6 class="fw-bold mt-3">I UNDERSTAND THAT THESE TERMS OF SERVICE, TOGETHER WITH THE <span style="color: #D83F63;">Privacy Statement</span> GOVERN MY USE OF MORGAN McKINLEY SERVICES.</h6>
					  	</div>
					  	<div class="col-12 d-flex align-items-center justify-content-center mt-3">
					    	<a href="applyJob.php" class="btn btn-lg applyBtn2">Apply Now</a>
					  	</div>
					  </div>
					</div>
				</form>	
			</div>
		</div>
	</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>