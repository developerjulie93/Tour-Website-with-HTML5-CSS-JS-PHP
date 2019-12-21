<?php
	$conn = mysqli_connect('localhost','root','111111');
	mysqli_select_db($conn, 'request_info');
	$sql =  "INSERT INTO contact_info (name,email,description) VALUES('".$_POST['name']."', '".$_POST['email']."','".$_POST['description']."')";
	$result = mysqli_query($conn, $sql);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ManagerPage</title>
	<link rel="stylesheet" type="text/css" href="css/manager_styles.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
</head>
<body>
	<div class="Request">
	<div class="title"><h1>Customer Request</h1></div>
		<div class="request" id="request">
			<button class="clear_btn" id="target" value="Clear" onclick="requestClear()">Clear</button>
			<div class="input">
				<?php
						echo '<h2>'.$_POST['name'].'<h2>';
						echo '<p>'.$_POST['email'].'<p>';
						echo $_POST['description'];
				 ?>
			</div>


		</div>
	</div>

	<script type="text/javascript">
		function requestClear(){
			var request = document.getElementById("request");
			var btn = document.getElementById("target");

			if(request.className == "request"){
				request.className = "clear";
				btn.innerHTML = "Cancle";
			}else{
				request.className = "request";
				btn.innerHTML = "Clear";
			}
		}
	</script>
</body>
</html>