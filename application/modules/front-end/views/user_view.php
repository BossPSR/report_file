<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Drag and Drop file upload with Dropzone in CodeIgniter</title>
	<!-- Dropzone CSS & JS -->
    <link href='assets/dropzone.css' type='text/css' rel='stylesheet'>
    <script src='assets/dropzone.js' type='text/javascript'></script>
    
    <!-- Dropzone CDN -->
    <!-- 
    <link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>
    -->
	<style>
	.content{
		width: 50%;
	 	padding: 5px;
	 	margin: 0 auto;
	}
	.content span{
		width: 250px;
	}
	.dz-message{
		text-align: center;
		font-size: 28px;
	}
	</style>
	<script>
		// Add restrictions
		Dropzone.options.fileupload = {
		    acceptedFiles: 'image/*,.pdf',
		    maxFilesize: 1 // MB
		};
	</script>
</head>
<body>

	<div class='content'>
		<!-- Dropzone -->
		<!-- <form action="uploadfile" method="POST" enctype="multipart/form-data">
			<input type="file" name="file" id="">
			<button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
		</form> -->
	   	 <form action="<?= base_url('index.php/front-end/User/fileUpload') ?>" class="dropzone" id='fileupload'> 
	   	</form>  
	</div> 
	
</body>
</html>
