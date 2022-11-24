<?php
	require('loginProcess.php');
?>
<?php
	if(isset($_POST['submit'])){
	$user = new LoginUser($_POST['username'], $_POST['password']);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log-In</title>
    <link rel="stylesheet" href="style.css" />
    
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>
</head>

<body>
    <div class="container-fluid">
		<div class="box">
			<div class="card-login m-auto py-5 rounded-4">
				<div class="card-main ">
					<div class="card-header text-center">
						<h1>LOGIN</h1>
					</div>

					<div class="card-body mt-4">
						<form class="form-login d-flex flex-column m-auto" method="POST" enctype="multipart/form-data" autocomplete="off">
							<label class="form-label">Username</label>
							<input type="username" name="username" class="form-input" />
							
							<label class="form-label">Password</label>
							<input type="password" name="password" class="form-input" />
							
							<button type="submit" name="submit" class="btn btn-login">Login</button>

							<p class = "message"><?php echo @$user->error ?></p>
							<p class = "message"><?php echo @$user->success ?></p>
						</form>
					</div>
				</div>
			</div>
		</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>