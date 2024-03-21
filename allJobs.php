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

	<section class="head py-5">
		<div class="container">
			<div class="row py-5 d-flex align-items-center justify-content-between">
				
				<div class="col-xxl-3 col-lg-3 col-md-3 col-12 mb-3 jobInputDiv">
					<input class="form-label jobInput" type="text" placeholder="keyword(s)" name="keyword">
				</div>
				<div class="col-xxl-2 col-lg-2 col-md-3 col-12 d-flex align-items-center justify-content-center mb-3">	
					<!-- dropdown start -->
					<div class="dropdown">
					  <button class="btn btn-secondary dropdBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
					    Sector  <i class="bi bi-chevron-compact-down ms-3"></i>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a class="dropdown-item" href="#">Accountancy & Finance</a></li>
					    <li><a class="dropdown-item" href="#">Administration & Secretarial</a></li>
					    <li><a class="dropdown-item" href="#">Agriculture, Food Science & Production</a></li>
					    <li><a class="dropdown-item" href="#">Architecture, Construction & Property</a></li>
					    <li><a class="dropdown-item" href="#">Insurance/Banking</a></li>
					    <li><a class="dropdown-item" href="#">Beauty and Hair</a></li>
					    <li><a class="dropdown-item" href="#">Customer Services, Call Centre & Languages</a></li>
					    <li><a class="dropdown-item" href="#">Engineering, Environmental & Safety</a></li>
					    <li><a class="dropdown-item" href="#">Education</a></li>
					    <li><a class="dropdown-item" href="#">Executive Management</a></li>
					    <li><a class="dropdown-item" href="#">Healthcare & Medical</a></li>
					    <li><a class="dropdown-item" href="#">Hospitality & Tourism</a></li>
					    <li><a class="dropdown-item" href="#">Hotel & Catering</a></li>
					    <li><a class="dropdown-item" href="#">Human Resources & Recruitment</a></li>
					    <li><a class="dropdown-item" href="#">Information Technology</a></li>
					    <li><a class="dropdown-item" href="#">Legal</a></li>
					    <li><a class="dropdown-item" href="#">Manufacturing, Production & Materials</a></li>
					    <li><a class="dropdown-item" href="#">Miscellaneous</a></li>
					    <li><a class="dropdown-item" href="#">Pharmaceutical, Life Sciences & Medical device</a></li>
					    <li><a class="dropdown-item" href="#">Professional, Management & Business Services</a></li>
					    <li><a class="dropdown-item" href="#">Retail</a></li>
					    <li><a class="dropdown-item" href="#">Sales</a></li>
					    <li><a class="dropdown-item" href="#">Warehouse, Transport & Logistics</a></li>
					  </ul>
					</div>
					<!-- dropdown end -->
				</div>
				<div class="col-xxl-2 col-lg-2 col-md-3 col-12 d-flex align-items-center justify-content-center mb-3">	
					<!-- dropdown start -->
					<div class="dropdown">
					  <button class="btn btn-secondary dropdBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
					    Contract Type  <i class="bi bi-chevron-compact-down ms-4"></i>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a class="dropdown-item" href="#">Permanent</a></li>
					    <li><a class="dropdown-item" href="#">Temporary</a></li>
					    <li><a class="dropdown-item" href="#">Contract</a></li>
					    <li><a class="dropdown-item" href="#">Part time</a></li>
					  </ul>
					</div>
					<!-- dropdown end -->
				</div>
				<div class="col-xxl-2 col-lg-2 col-md-3 col-12 d-flex align-items-center justify-content-center mb-3">	
					<!-- dropdown start -->
					<div class="dropdown">
					  <button class="btn btn-secondary dropdBtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
					    Location  <i class="bi bi-chevron-compact-down ms-4"></i>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a class="dropdown-item" href="#">Carlow</a></li>
					    <li><a class="dropdown-item" href="#">Cavan</a></li>
					    <li><a class="dropdown-item" href="#">Clare</a></li>
					    <li><a class="dropdown-item" href="#">Cork</a></li>
					    <li><a class="dropdown-item" href="#">Donegal</a></li>
					    <li><a class="dropdown-item" href="#">Dublin</a></li>
					    <li><a class="dropdown-item" href="#">Galway</a></li>
					    <li><a class="dropdown-item" href="#">Kerry</a></li>
					    <li><a class="dropdown-item" href="#">Kildare</a></li>
					    <li><a class="dropdown-item" href="#">Kilkenny</a></li>
					    <li><a class="dropdown-item" href="#">Laois</a></li>
					    <li><a class="dropdown-item" href="#">Leitrim</a></li>
					    <li><a class="dropdown-item" href="#">Limerick</a></li>
					    <li><a class="dropdown-item" href="#">Longford</a></li>
					    <li><a class="dropdown-item" href="#">Louth</a></li>
					    <li><a class="dropdown-item" href="#">Mayo</a></li>
					    <li><a class="dropdown-item" href="#">Meath</a></li>
					    <li><a class="dropdown-item" href="#">Monaghan</a></li>
					    <li><a class="dropdown-item" href="#">Offaly</a></li>
					    <li><a class="dropdown-item" href="#">Roscommon</a></li>
					    <li><a class="dropdown-item" href="#">Sligo</a></li>
					    <li><a class="dropdown-item" href="#">Tipperary</a></li>
					    <li><a class="dropdown-item" href="#">Waterford</a></li>
					    <li><a class="dropdown-item" href="#">Westmeath</a></li>
					    <li><a class="dropdown-item" href="#">Wexford</a></li>
					    <li><a class="dropdown-item" href="#">Wicklow</a></li>
					  </ul>
					</div>
					<!-- dropdown end -->
				</div>
				<div class="col-xxl-2 col-lg-2 col-md-3 col-12 d-flex align-items-center justify-content-center mb-3">	
					<a href="" class="btn btn-lg filBtn">Filter</a>
				</div>


			</div>
		</div>
	</section>

	<div class="container my-5">	
		<div class="row">
			<!-- <div class="col-lg-4 d-lg-block d-none sidebar-left" id="sidebar-left">
				<i id="filter-icon" class="bi bi-funnel-fill d-md-none"></i>

				<div class="accordion accordion-flush" id="accordionFlushExample">
				  <div class="accordion-item">
				    <h2 class="accordion-header">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
				        Jobs by location
				      </button>
				    </h2>
				    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
				      <div class="accordion-body">
				      	<ul class="accordUl">
				      		<li class="categ">
				      			<a class="categAnc" href="#">Carlow</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Cavan</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Clare</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Cork</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Donegal</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Dublin</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Galway</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Kerry</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Kildare</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Kilkenny</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Laois</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Leitrim</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Limerick</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Longford</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Louth</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Mayo</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Meath</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Monaghan</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Offaly</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Roscommon</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Sligo</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Tipperary</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Waterford</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Westmeath</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Wexford</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Wicklow</a>
				      			<span class="categSp">200</span>
				      		</li>
				      	</ul>
				      </div>
				    </div>
				  </div>
				  <div class="accordion-item">
				    <h2 class="accordion-header">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
				        Jobs by Type
				      </button>
				    </h2>
				    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
				      <div class="accordion-body">
				      	<ul class="accordUl">
				      		<li class="categ">
				      			<a class="categAnc" href="#">Permanent Pharmacist</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Locum Pharmacist</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Temporary Pharmacist</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Permanent Technician</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Locum technician</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Temporary Technician</a>
				      			<span class="categSp">200</span>
				      		</li>
				      	</ul>
				      </div>
				    </div>
				  </div>
				  <div class="accordion-item">
				    <h2 class="accordion-header">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
				        Jobs by Category
				      </button>
				    </h2>
				    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
				      <div class="accordion-body">
				      	<ul class="accordUl">
				      		<li class="categ">
				      			<a class="categAnc" href="#">Permanent Pharmacist</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Locum Pharmacist</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Temporary Pharmacist</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Permanent Technician</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Locum technician</a>
				      			<span class="categSp">200</span>
				      		</li>
				      		<li class="categ">
				      			<a class="categAnc" href="#">Temporary Technician</a>
				      			<span class="categSp">200</span>
				      		</li>
				      	</ul>
				      </div>
				    </div>
				  </div>
				</div>

			</div> -->
			<div class="col-xxl-10 col-lg-10 col-md-12 col-12 otherJobS">
				<div class="d-flex align-items-center justify-content-between">
					<h2 class="otherH2">All <span class="otherSp">Jobs</span></h2>
					<span class="otherSp2">Displaying 1 - 10 of 787</span>
				</div>
				<div class="row">
					<!-- card start here -->
					<div class="col-12 mb-4">
						<div class="card areCard2">
						  <div class="card-body">
						    <h5 class="card-title areHead2">Senior Software Manager</h5>
						    <p class="card-text areP">Are you an experienced Senior .Net Developer? Have you got excellent analytical and problem-solving skills? A passion for designing and developing solutions that meet the needs of users?</p>							    
						    <div class="areSpanDiv">
						    	<span class="areSpan2"><i class="bi bi-geo-alt"></i> Cork</span>
						    	<span class="areSpan2"><i class="bi bi-bag"></i> Permanent</span>
						    	<span class="areSpan2"><i class="bi bi-calendar"></i> 3 hours ago</span>
						    	<span class="areSpan2"><i class="bi bi-cash-stack"></i> Competitive</span>
						    </div>
						  </div>
						</div>
					</div>
					<!-- card end here -->
					<!-- card start here -->
					<div class="col-12 mb-4">
						<div class="card areCard2">
						  <div class="card-body">
						    <h5 class="card-title areHead2">Senior Software Manager</h5>
						    <p class="card-text areP">Are you an experienced Senior .Net Developer? Have you got excellent analytical and problem-solving skills? A passion for designing and developing solutions that meet the needs of users?</p>							    
						    <div class="areSpanDiv">
						    	<span class="areSpan2"><i class="bi bi-geo-alt"></i> Cork</span>
						    	<span class="areSpan2"><i class="bi bi-bag"></i> Permanent</span>
						    	<span class="areSpan2"><i class="bi bi-calendar"></i> 3 hours ago</span>
						    	<span class="areSpan2"><i class="bi bi-cash-stack"></i> Competitive</span>
						    </div>
						  </div>
						</div>
					</div>
					<!-- card end here -->
					<!-- card start here -->
					<div class="col-12 mb-4">
						<div class="card areCard2">
						  <div class="card-body">
						    <h5 class="card-title areHead2">Senior Software Manager</h5>
						    <p class="card-text areP">Are you an experienced Senior .Net Developer? Have you got excellent analytical and problem-solving skills? A passion for designing and developing solutions that meet the needs of users?</p>							    
						    <div class="areSpanDiv">
						    	<span class="areSpan2"><i class="bi bi-geo-alt"></i> Cork</span>
						    	<span class="areSpan2"><i class="bi bi-bag"></i> Permanent</span>
						    	<span class="areSpan2"><i class="bi bi-calendar"></i> 3 hours ago</span>
						    	<span class="areSpan2"><i class="bi bi-cash-stack"></i> Competitive</span>
						    </div>
						  </div>
						</div>
					</div>
					<!-- card end here -->
					<!-- card start here -->
					<div class="col-12 mb-4">
						<div class="card areCard2">
						  <div class="card-body">
						    <h5 class="card-title areHead2">Senior Software Manager</h5>
						    <p class="card-text areP">Are you an experienced Senior .Net Developer? Have you got excellent analytical and problem-solving skills? A passion for designing and developing solutions that meet the needs of users?</p>							    
						    <div class="areSpanDiv">
						    	<span class="areSpan2"><i class="bi bi-geo-alt"></i> Cork</span>
						    	<span class="areSpan2"><i class="bi bi-bag"></i> Permanent</span>
						    	<span class="areSpan2"><i class="bi bi-calendar"></i> 3 hours ago</span>
						    	<span class="areSpan2"><i class="bi bi-cash-stack"></i> Competitive</span>
						    </div>
						  </div>
						</div>
					</div>
					<!-- card end here -->
					<!-- card start here -->
					<div class="col-12 mb-4">
						<div class="card areCard2">
						  <div class="card-body">
						    <h5 class="card-title areHead2">Senior Software Manager</h5>
						    <p class="card-text areP">Are you an experienced Senior .Net Developer? Have you got excellent analytical and problem-solving skills? A passion for designing and developing solutions that meet the needs of users?</p>							    
						    <div class="areSpanDiv">
						    	<span class="areSpan2"><i class="bi bi-geo-alt"></i> Cork</span>
						    	<span class="areSpan2"><i class="bi bi-bag"></i> Permanent</span>
						    	<span class="areSpan2"><i class="bi bi-calendar"></i> 3 hours ago</span>
						    	<span class="areSpan2"><i class="bi bi-cash-stack"></i> Competitive</span>
						    </div>
						  </div>
						</div>
					</div>
					<!-- card end here -->
					<!-- card start here -->
					<div class="col-12 mb-4">
						<div class="card areCard2">
						  <div class="card-body">
						    <h5 class="card-title areHead2">Senior Software Manager</h5>
						    <p class="card-text areP">Are you an experienced Senior .Net Developer? Have you got excellent analytical and problem-solving skills? A passion for designing and developing solutions that meet the needs of users?</p>							    
						    <div class="areSpanDiv">
						    	<span class="areSpan2"><i class="bi bi-geo-alt"></i> Cork</span>
						    	<span class="areSpan2"><i class="bi bi-bag"></i> Permanent</span>
						    	<span class="areSpan2"><i class="bi bi-calendar"></i> 3 hours ago</span>
						    	<span class="areSpan2"><i class="bi bi-cash-stack"></i> Competitive</span>
						    </div>
						  </div>
						</div>
					</div>
					<!-- card end here -->
					<div class="col-12 d-flex align-items-center justify-content-center">
						<a class="btn btn-lg loadBtn" href="">Load more jobs</a>
					</div>

				</div>
			</div>
		</div>
	</div>




		
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>