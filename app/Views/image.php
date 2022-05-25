<?php
/*
	Author: Mukesh Jakhar
	Description: Rename file while uploading in codeigniter (View)
*/
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User registration form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<?php if(isset($msg)){echo $msg;}?>
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Upload File</label>
				<input class="form-control" type="file" name="image" />
			</div>
			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="Upload File" />
			</div>
		</form>
	</div>
	<div class="col-md-3"></div>
</div>
</body>
</html>