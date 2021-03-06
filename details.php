<html>


<head>
<title>TRIP MANAGEMENT</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style type="text/css">
body, html {
  height: 100%;
}

.bg { 
  /* The image used */
  background-image: url("trip.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>

</head>


<body class="bg">
	
	<div style=";padding-top: 50px; text-align: center;">
		<div class="alert alert-info" role="alert" style="height: 60px;font-size: 24px">

			<a href="signin.html">
			<button type="button" style="float: left;" class="btn btn-danger">BACK</button>
			</a>
			TRIP RESERVATION
			<a href="signin.html">
			<img src="home.png" style="float: right; height: 35px">
			</a>

		</div>
	</div>
<div class="row"  style="margin: 20px 10px 20px 10px ">
	<div class="col-md-12" style=" padding-left: 30px;padding-top: 50px;padding-bottom: 50px" >
		<div class="input-group flex-nowrap">
			  <div class="input-group-prepend">
				<button type="button" class="btn btn-dark" style="width: 200px">DESTINATION</button>
			  </div>
			  <input type="text" class="form-control" placeholder="PLEASE ENTER THE DESTINATION" aria-label="DESTINATION" aria-describedby="addon-wrapping">
		</div>
		<br/>

		<div class="input-group flex-nowrap">
			  <div class="input-group-prepend">
				<button type="button" class="btn btn-dark" style="width: 200px">ARRIVAL DATE</button>
			  </div>
			  <input type="date" class="form-control" placeholder="PLEASE ENTER THE ARRIVAL DATE" aria-label="ARRIVAL DATE" aria-describedby="addon-wrapping">
		</div>
		<br/>

		<div class="input-group flex-nowrap">
			  <div class="input-group-prepend">
				<button type="button" class="btn btn-dark" style="width: 200px">DEPARTURE DATE</button>
			  </div>
			  <input type="date" class="form-control" placeholder="PLEASE ENTER THE DEPARTURE DATE" aria-label="DEPARTURE DATE" aria-describedby="addon-wrapping">
		</div>
		<br/>

		


				<button  type="button" class="btn btn-success" style="width: 200px">SUBMIT</button>
				<button  type="button" class="btn btn-info" style="width: 200px">Number of Days: 7</button>

				<br/><br/>



		<div class="input-group flex-nowrap">
			  <div class="input-group-prepend">
				<button type="button" class="btn btn-dark" style="width: 200px">TRANSPORT</button>
			  </div>
			  <div class="dropdown"> &nbsp;
			  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    SELECT MODE OF TRANSPORT
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			    <a class="dropdown-item" href="#">BUS &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="bus.png" height="50px"></a>
			    <a class="dropdown-item" href="#">TRAIN &nbsp;&nbsp; <img src="train.png" height="50px"></a>
			    <a class="dropdown-item" href="#">FLIGHT &nbsp; <img src="flight.png" height="45px"></a>
			  </div>
			</div>
		</div>
		<br/>
		<br/>
		<hr/>
		<br/>


		<div class="input-group flex-nowrap">
			  <div class="input-group-prepend">
			  	<a href="travel.html">
				<button  type="button" class="btn btn-success" style="width: 200px">MAKE RESERVATION</button>
				</a>
			  </div>
		</div>


	</div>

</div>

</body>


</html>