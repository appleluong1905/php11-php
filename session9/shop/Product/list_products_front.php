<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<?php include '../config/connectdb.php';?>
<?php include '../functions/function_product.php';?>

	<!-- **// Menu //** -->
	<div id="menu">
		<nav class="navbar navbar-default navbar-inverse" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="logo_title">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Ricky Gaming</a>
					</div>
				</div>
				<form class="navbar-form navbar-right">
                    <fieldset>
                            <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text">
                            </div>
                            <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                                    <!-- Change this to a button or input when using this as a form -->
                        <button type="submit" class="btn btn-primary" name="login">Đăng nhập</button>
                    </fieldset>
                </form>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="navbar_menu">
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="#">About</a></li>
							<li class="active"><a href="#">Services</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</div>
		</nav> 
	</div><!-- end-Menu -->
	<!-- **// Content //** -->
	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img src="images/banner.jpg" class="img-responsive">
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="content_title">
				<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h2>Laptop Gaming MSI - Chính Hãng</h2>
				</div>
			</div>
			<?php
			$resultList = ListProduct($conn);
				if($resultList->num_rows > 0){
        			while ($row = $resultList->fetch_assoc()) {
            			$id_Product = $row['id'];
            			$product_picture = 'uploadProduct/'.$row['product_picture'];
			?>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="thumbnail">
					<a href="#"><img src="<?php echo $product_picture?>" alt="" class="img-responsive"></a>
					<div class="caption text-center">
						<h3><?php echo $row['product_name']?></h3>
						<p><?php echo $row['product_info']?></p>
						<p><a href="#" class="btn btn-primary"><?php echo $row['product_price']?></a>
						</p>
					</div>
				</div>
			</div>
			<?php
					}
				}
			?>
		</div>
		<hr>
		<div class="col-xs-12">Copyright © Your Website 2016</div>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>