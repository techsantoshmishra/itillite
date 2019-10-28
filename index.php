<html>
<head>
<title>  santosh</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style type="text/css">
	
.hide{ display:none; }

.fields {margin:10px;}
.btn {margin:10px;}
.errormsg {color:red;}
.succmsg {color:green;}
</style>
</head>
<body>
<header>
<div class="container">
<div class="col-md-9"> 
<div class ="succmsg alert-success"> </div>
<h1> Movie Event Registration </h1>
<form   name ="registerfrm" id = "registerfrm" method ="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username/Email</label>
    <input type="email" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  name ="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mobile NO</label>
    <input type="text" class="form-control"  name ="mobileno" id="mobileno" placeholder="Mobile No">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Booking Type</label>
    <select class="form-control bookingtype " name ="bookingtype" id="bookingtype">
      <option value="M">Movie</option>
      <option value="E">Event</option>
    </select>
  </div>
  <div class="movie">
  		
	  <div class="form-group">
	    <label for="exampleInputPassword1">Screename</label>
	    <input type="text" class="form-control"  name ="scnname"  placeholder="Screename">
	  </div>
	  
	 <div class="form-group">
		    <label for="exampleFormControlSelect1">Seat Class</label>
		    <select class="form-control" name="seatclass">
		      <option value="s">Silver</option>
		      <option value="g">Gold</option>
		      <option value="p">Platinum</option>
		      <option value="e">Executive</option>
		    </select>
  		</div>
  		<div class="form-group">
	    <label for="exampleInputPassword1">Seat No</label>
	    <input type="text" class="form-control"  name ="seatno"  placeholder="Seat Class">
		</div>
  		<div class="form-group">
	    <label for="exampleInputPassword1">Theater name</label>
	    <input type="text" class="form-control"  name ="theatername"  placeholder="Theater Name">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Moive name</label>
	    <input type="text" class="form-control"  name ="moviename"  placeholder="Movie Name">
	  </div>

  </div>

  <div class="event hide">
  	<div class="form-group">
	    <label for="exampleInputPassword1">Event Name</label>
	    <input type="text" class="form-control"  name ="evtname"  placeholder="Event Name">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Event Place</label>
	    <input type="text" class="form-control"  name ="eventplace"  placeholder="Event Place">
	  </div>	
  </div>
  <div class="form-group">
	    <label for="exampleInputPassword1">Date</label>
	    <input type="date" class="form-control"  name ="showdate"  placeholder="Show Date">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Time</label>
	    <input type="time" class="form-control"  name ="showtime"  placeholder="Show Time">
	  </div>
	   <div class="form-group">
	    <label for="exampleInputPassword1">Total</label>
	    <input type="text" class="form-control"  name ="total"  placeholder="Total">
	  </div>
	   <div class="form-group">
	    <label for="exampleInputPassword1">Service fees</label>
	    <input type="text" class="form-control"  name ="servicefee"  placeholder="servicefees">
	  </div>
	   <div class="form-group">
	    <label for="exampleInputPassword1">Cost per ticket</label>
	    <input type="text" class="form-control"  name ="cpt"  placeholder="Total">
	  </div>
	

  <button type="button"  id ="regbtn" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</header>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="jQuery_v3.4.1.js"> </script>
<!-- <script type="text/javascript" src="jquery.validate.min.js"> </script> -->
<script type="text/javascript" src="main.js"> </script>

</html>