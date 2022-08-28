<?php 	
	session_start();
	if(!isset($_SESSION['name'])){
		header("Location: http://localhost/skripsi/");
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Course 1</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" type="text/css" href="../css/courses/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter&family=Roboto+Slab&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
		<div class="offcanvas-header">
			<h5 class="offcanvas-title" id="offcanvasRightLabel"><i class="bi bi-trophy-fill"></i>&nbsp;&nbsp;Top Ranks</h5>
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
			<div class="ranks">
					<table class="table">
						<thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Name</th>
						      <th scope="col">Points</th>
						    </tr>
						</thead>
						<tbody>
						    <tr>
							    <th scope="row">1</th>
							    <td>Ahmad Wahyudin Suryono</td>
							    <td>2000</td>
						    <tr>
							    <th scope="row">2</th>
							    <td>Ahmad Wahyudin Suryono</td>
							    <td>2000</td>
						    </tr>
						    <tr>
							    <th scope="row">3</th>
							    <td>Ahmad Wahyudin Suryono</td>
							    <td>2000</td>
						    </tr>
						    <tr>
						      	<th scope="row">4</th>
						      	<td>Ahmad Wahyudin Suryono</td>
						      	<td>2000</td>
						    </tr>
						    <tr>
						      	<th scope="row">5</th>
						      	<td>Ahmad Wahyudin Suryono</td>
						     	<td>2000</td>
						    </tr>
						    <tr>
						      	<th scope="row">6</th>
						      	<td>Ahmad Wahyudin Suryono</td>
						      	<td>2000</td>
						    </tr>
						    <tr>
						    	<th scope="row">7</th>
						      	<td>Ahmad Wahyudin Suryono</td>
						      	<td>2000</td>
						    </tr>
						    <tr>
						      	<th scope="row">8</th>
						     	<td>Ahmad Wahyudin Suryono</td>
						     	<td>2000</td>
						    </tr>
						    <tr>
						      	<th scope="row">9</th>
						     	<td>Ahmad Wahyudin Suryono</td>
						      	<td>2000</td>
						    </tr>
						    <tr>
						      	<th scope="row">10</th>
						      	<td>Ahmad Wahyudin Suryono</td>
						      	<td>2000</td>
						    </tr>
						</tbody>
					</table>
				<button type="button" class="btn btn-outline-secondary" id="loadRanksMore">Load More</button>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg bg-light sticky-top" style="top: 0; bottom: 0;" id="navbar">
		<div class="container-fluid">
		    <a class="navbar-brand" href="#"> <i class="bi bi-code-square"></i> FunCode</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse " id="navbarNav">
			    <ul class="navbar-nav ms-auto">
			    	<li class="nav-item">
			        	<a class="nav-link active" aria-current="course" href="../user/course.php">Dashboard</a>
			        </li>
			        <div class="btn-group dropdown-center">
						<button type="button" class="btn btn-light dropdown-toggle btn-nav" data-bs-toggle="dropdown" aria-expanded="false">
						    <img src="<?php echo $_SESSION['photo_profile']; ?>" class="photo_profile">
						</button>
						<ul class="dropdown-menu">
						    <li><span class="dropdown-item"><i class="bi bi-diamond-fill"></i>&nbsp;&nbsp; 500 Points</span></li>
						    <li><span class="dropdown-item"><i class="bi bi-star-fill"></i>&nbsp;&nbsp; 1000 XP</span></li>
						    <li><span class="dropdown-item"><i class="bi bi-capslock-fill"></i>&nbsp;&nbsp; Level 3</span></li>
						    <li><hr class="dropdown-divider"></li>
						    <li><a class="dropdown-item" href="../user/home.php"><i class="bi bi-house-fill"></i>&nbsp;&nbsp; Home</a></li>
						    <li><a class="dropdown-item" href="../user/profile.php"><i class="bi bi-person-fill"></i>&nbsp;&nbsp; Profile</a></li>
						    <li><a class="dropdown-item" href="../user/logout.php"><i class="bi bi-box-arrow-right"></i>&nbsp;&nbsp; Logout</a></li>
						</ul>
					</div>
					<button class="btn btn-light btn-nav" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-trophy-fill"></i></button>
			    </ul>
		    </div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="side-nav">
					<div class="side-progress">
						<h5>Progress Kelas</h5>
						<div class="progress" style="height: 30px; margin-top: 10px;">
							<div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-label="Example with label" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
						</div>
						<hr>
						<a href="../user/course.php" class="btn btn-info-class">Kembali ke Dashboard</a>
						<a href="../user/home.php"  class="btn btn-info-class mt-15">Kembali ke Home</a>
					</div>
					<div class="side-modules">
						<h5>Daftar Modul</h5>
						<hr>
						<div class="module-lists bg-light">
							<div class="accordion accordion-flush" id="accordionFlushExample">
								<div class="accordion-item">
								    <h2 class="accordion-header" id="flush-headingOne">
								      	<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
								        	Lorem ipsum dolor sit amet
								      	</button>
								    </h2>
								    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
								      	<div class="accordion-body">
								      		<ul class="list-group list-group-flush">
											  	<li class="list-group-item" id="current-li">
											  		<div style="width: 100%;">
											  			<div class="check-side ">
											  				<span class="check">&#10003;</span>
											  			</div>
											  			<div class="material-name">
											  				<a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
											  			</div>
											  			<div class="user-footprint" id="userFootprint">
											  				<img src="<?php echo $_SESSION['photo_profile']; ?>" class="user-img-footprint">
											  				<span class="user-total">20+</span>
											  			</div>
											  		</div>
												</li>
											  <li class="list-group-item">
											  		<div style="width: 100%;">
											  			<div class="check-side ">
											  				<span class="checklist"></span>
											  			</div>
											  			<div class="material-name">
											  				<a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
											  			</div>
											  		</div>
											  </li>
											  <li class="list-group-item">
											  		<div style="width: 100%;">
											  			<div class="check-side ">
											  				<span class="checklist"></span>
											  			</div>
											  			<div class="material-name">
											  				<a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
											  			</div>
											  		</div>
											  </li>
											  <li class="list-group-item">
											  		<div style="width: 100%;">
											  			<div class="check-side ">
											  				<span class="checklist"></span>
											  			</div>
											  			<div class="material-name">
											  				<a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
											  			</div>
											  		</div>
											  </li>
											  <li class="list-group-item">
											  		<div style="width: 100%;">
											  			<div class="check-side ">
											  				<span class="checklist"></span>
											  			</div>
											  			<div class="material-name">
											  				<a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
											  			</div>
											  		</div>
											  </li>
											</ul>
								      	</div>
								    </div>
								</div>
								<div class="accordion-item">
								    <h2 class="accordion-header" id="flush-headingTwo">
									    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
									        Lorem ipsum dolor sit amet
									    </button>
								    </h2>
									    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
									    	<div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
									    </div>
								</div>
								<div class="accordion-item">
								    <h2 class="accordion-header" id="flush-headingThree">
								      	<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
								       		Lorem ipsum dolor sit amet
								      	</button>
								    </h2>
								    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
								      	<div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
								    </div>
								</div>
								<div class="accordion-item">
								    <h2 class="accordion-header" id="flush-headingFour">
								      	<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
								       		Lorem ipsum dolor sit amet
								      	</button>
								    </h2>
								    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
								      	<div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
								    </div>
								</div>
								<div class="accordion-item">
								    <h2 class="accordion-header" id="flush-headingFive">
								      	<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
								       		Lorem ipsum dolor sit amet
								      	</button>
								    </h2>
								    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
								      	<div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8 side-right">
				<div class="right-content">
					<h1>Lorem Ipsum</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent luctus est leo, sed lobortis lectus ultrices nec. Morbi eleifend varius aliquam. Suspendisse odio eros, scelerisque in eleifend vel, accumsan et lorem. Maecenas velit quam, pellentesque sed ultricies at, consectetur eget lectus. Nunc at ipsum eu orci sagittis convallis. Curabitur ultricies nunc vel laoreet convallis. Nam tempus risus lectus, eget pulvinar lectus dapibus quis. Aenean lectus sem, varius in metus a, pretium congue erat.</p>

					<p>Nullam commodo augue turpis, non pulvinar mi tincidunt vel. Morbi vel egestas est. Nunc enim ligula, tincidunt id mollis tristique, tincidunt ut justo. Ut cursus rutrum eros vitae ultricies. Cras ornare nisi id cursus varius. Nullam sed lacus aliquet purus eleifend auctor ac id ante. Proin dui libero, cursus vitae feugiat non, consectetur sit amet arcu. Aliquam posuere eget ante id posuere. Donec ut nunc erat. Duis vitae est turpis.</p>

					<p>Vestibulum facilisis lectus vitae aliquam commodo. Vestibulum eget condimentum nulla. Duis viverra nisl vel consequat sollicitudin. Etiam iaculis suscipit tempor. Vivamus sodales iaculis orci at ultrices. Ut sollicitudin bibendum elit, at mollis nunc pharetra id. Ut malesuada urna sed sem scelerisque tincidunt. In egestas nulla id mauris molestie, ac porta nisl fringilla. Fusce congue, dui nec aliquet lacinia, est nunc porta metus, in cursus ipsum justo ac metus.</p>

					<p>Sed pretium, ex sed pulvinar molestie, massa lorem dictum augue, nec eleifend lacus eros ut neque. In ullamcorper sit amet mauris a luctus. Cras vestibulum enim id imperdiet dapibus. Aliquam in turpis nisi. Nam et condimentum enim. Aliquam erat volutpat. Etiam ac imperdiet nisl, in mollis sem. Morbi et imperdiet purus. Maecenas rutrum libero tellus, a molestie ligula egestas sit amet. Morbi sit amet leo viverra, cursus ipsum sed, sagittis metus. Vestibulum sed odio imperdiet, varius tellus non, aliquet metus. Cras molestie commodo est quis hendrerit. Morbi pulvinar dictum turpis sed varius.</p>

					<p>Nullam pellentesque elit id condimentum pretium. Morbi et iaculis lectus, vel maximus tellus. Duis est nulla, eleifend non lacus ac, ultrices imperdiet quam. Mauris laoreet magna at viverra facilisis. Proin sed eros purus. Nullam vel lacus porta, tempus metus non, laoreet nibh. Proin ullamcorper iaculis ipsum. Integer eleifend a tortor sit amet pulvinar. Nullam sed libero non odio placerat lobortis eu ut risus. Nunc a tortor non tellus suscipit auctor ac non nulla. Aliquam erat volutpat. Curabitur consectetur tortor vel ex tristique aliquam.</p>

					<h1>Lorem Ipsum</h1>

					<p>Proin lacinia porta felis, sed sodales erat vehicula vitae. Aliquam elementum at neque quis varius. Aliquam id dui nec nisl dapibus interdum quis vel massa. Donec volutpat suscipit imperdiet. Nullam maximus turpis velit, tincidunt fringilla libero ultrices eu. Vivamus lacinia eros ac nisl euismod pharetra. Morbi pulvinar semper auctor. Duis eget sodales justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam elementum erat quis magna venenatis, vel malesuada dolor dignissim. In aliquam scelerisque lectus a fermentum. Sed malesuada mi nibh, eget fringilla diam ullamcorper a. Praesent in orci in leo sagittis rutrum.</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu elit interdum, semper est sed, molestie sem. Vivamus mollis sagittis tincidunt. Fusce tempus purus a eros mattis luctus. Suspendisse ut libero sed augue egestas vestibulum. Cras ultricies ante lectus, eu suscipit ipsum accumsan ac. Donec commodo nisl at dolor scelerisque, et porta massa varius. Quisque eget tortor vel justo venenatis imperdiet vitae vel dui. Aliquam ultrices tincidunt suscipit. Nulla facilisi. Aliquam vitae odio non lacus vulputate iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lectus tellus, tincidunt vitae eros id, dignissim dapibus nisl. Mauris orci augue, pellentesque in bibendum nec, mollis eget nisi. Aliquam in magna ut dui efficitur molestie. Cras vitae pellentesque ex, sit amet bibendum orci.</p>

					<p>Cras eros odio, porttitor id quam ut, auctor finibus ante. Aliquam sed mi vitae nisi porttitor egestas ut sed tellus. Sed quis elit libero. Nam mi elit, tincidunt vel dapibus ac, vulputate ut purus. Cras auctor, justo eu egestas luctus, lacus nibh sollicitudin quam, ut luctus velit felis eget enim. Quisque scelerisque dolor et arcu mattis, vitae gravida magna congue. Fusce ultrices, tortor a tristique laoreet, felis felis imperdiet dui, eget rutrum nisi ipsum vitae mi. Aenean fermentum, nisl quis eleifend vehicula, ipsum dolor aliquam orci, eu dapibus enim odio eget nunc. Nam est ipsum, feugiat sed elit sit amet, egestas dictum ante. Phasellus vestibulum sollicitudin semper. Praesent hendrerit vel tellus eget pretium. Donec varius suscipit lectus, et consequat erat accumsan ac. Fusce pharetra, eros quis rhoncus interdum, mi risus congue leo, in pretium nulla turpis non ex. Donec ullamcorper ipsum non enim venenatis ultricies at nec nunc.</p>

					<p>Integer facilisis dictum sodales. Sed nec est non velit dignissim vestibulum et at orci. Nulla tempus dignissim accumsan. Donec tempus pulvinar molestie. Etiam et sagittis lectus. Donec metus quam, auctor sed nisl et, consectetur feugiat tellus. Nam et tortor dapibus, ultricies lorem in, facilisis nibh. Ut blandit lacus enim, sed tincidunt lectus egestas eu. Suspendisse potenti.</p>
					
					<p>Nam imperdiet semper lacus, eu blandit dolor tincidunt at. Praesent non mauris luctus, congue dolor quis, accumsan urna. Suspendisse potenti. Nulla eu nulla pulvinar justo semper porta. Nunc aliquam in ante id elementum. Pellentesque viverra ut lectus at rhoncus. Curabitur in massa purus. Vivamus a mattis turpis, at maximus sem. Aliquam ultricies vitae felis ut mollis. Phasellus convallis dui justo, nec viverra purus consequat ut.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		    <div class="modal-content">
		      	<div class="modal-header">
		        		<h5 class="modal-title" id="exampleModalLabel">Pengguna yang berada di modul ini</h5>
		        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      	</div>
		      	<div class="modal-body">
			    	<table class="table">
						<tbody>
							<tr>
								<td><img src="<?php echo $_SESSION['photo_profile']; ?>" class="img-user"></td>
								<td><?php echo $_SESSION['name']; ?></td>
							</tr>
							<tr>
								<td><img src="../images/avatar.jpg" class="img-user"></td>
								<td>Ahmad Wahyudin Suryono</td>
							</tr>
							<tr>
								<td><img src="../images/avatar.jpg" class="img-user"></td>
								<td>Ahmad Wahyudin Suryono</td>
							</tr>
							<tr>
								<td><img src="../images/avatar.jpg" class="img-user"></td>
								<td>Ahmad Wahyudin Suryono</td>
							</tr>
							<tr>
								<td><img src="../images/avatar.jpg" class="img-user"></td>
								<td>Ahmad Wahyudin Suryono</td>
							</tr>
							<tr>
								<td><img src="../images/avatar.jpg" class="img-user"></td>
								<td>Ahmad Wahyudin Suryono</td>
							</tr>
							<tr>
								<td><img src="../images/avatar.jpg" class="img-user"></td>
								<td>Ahmad Wahyudin Suryono</td>
							</tr>
							<tr>
								<td><img src="../images/avatar.jpg" class="img-user"></td>
								<td>Ahmad Wahyudin Suryono</td>
							</tr>
							<tr>
								<td><img src="../images/avatar.jpg" class="img-user"></td>
								<td>Ahmad Wahyudin Suryono</td>
							</tr>
						</tbody>
					</table>
		      	</div>
		    </div>
		</div>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src="../js/courses/courses.js"></script>
</html>