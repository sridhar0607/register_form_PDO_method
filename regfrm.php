<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script type="javascript" href="bootstrap.min.js" ></script>
	<script type="javascript" href="jquery.min.js" ></script>
	<title>Reg Form</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-2"></div>
    		<div class="col">
    			<h1>REGISTRATION FORM</h1>
    		<form method="post" action="pdoreg.php">
    			<label class="form-lable">Reg.No</label>
    			<input type="text" name="regno" class="form-control"><br>

    			<label class="form-lable">Name</label>
    			<input type="text" name="sname" class="form-control"><br>

    			<label class="form-lable">Gender :</label>		
    			<input type="radio" name="gen" class="form-control-check" value="male">male
    			<input type="radio" name="gen" class="form-control-check" value="female">female<br>


    			<label class="form-lable">Email</label>
    			<input type="email" name="email" class="form-control"><br>

    			<label class="form-lable">Password</label>
    			<input type="password" name="pass" class="form-control"><br>

    			<label>Phone.No</label>
    			<input type="text" name="phone" class="form-control"><br>

    			<label class="form-lable">Department</label>
    			<input type="text" name="dept" class="form-control"><br>

    			<labele class="form-lable">Address</labele><br>
    			<textarea name="addr" placeholder="Enter the addr..."></textarea><br>


    			<input type="submit" align="btn-centre" name="submit" class="btn btn-success" >
    			<input type="reset" align="btn-centre" name="reset" class="btn btn-danger">
    			<input type="view data" align="btn-centre" name="view data" class="btn btn-info" value="view data">

   
    		</form>

    		</div>
    		<div class="col-2"></div>
		</div>
	</div>

</body>
</html>