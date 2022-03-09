<!doctype html>
<html lang="en">
<head>
	<!-- Pay10 created by Rohit Singh -->
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<title>Pay10 Quick Checkout</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">
	<div class="container">
		<form action="process.php" method="POST" id="proceedto">
			<input type="hidden" name="process_request" value="yes">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<h4 class="mb-3"><img src="images/logo.png" alt=""> Quick Checkout Page</h4>
				<form class="needs-validation" novalidate>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="customerName">Customer Name</label>
							<input type="text" class="form-control" id="customerName" name="CUST_NAME" placeholder="" value="" required>
							<div class="invalid-feedback">Valid first name is required.</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="orderId">Order ID</label>
							<input type="text" class="form-control" id="orderId" name="ORDER_ID" placeholder="" value="<?php echo 'PAY10_'.date('dmyHi').rand(10,1000);?>" required>
							<div class="invalid-feedback">Valid last name is required.</div>
						</div>
					</div>
			   </div>
        <!-- Column -->
			   <div class="col-md-10">
				<form class="needs-validation" novalidate>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="email">Email Address</label>
							<input type="text" class="form-control" id="email" name="CUST_EMAIL" placeholder="" value="" required>
							<div class="invalid-feedback">Valid first name is required.</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="phone">Phone</label>
							<input type="text" class="form-control" id="phone" name="CUST_PHONE" placeholder="" value="" required>
							<div class="invalid-feedback">Valid last name is required.</div>
						</div>
					</div>
			   </div>

		<!-- Column -->

		<!-- Column -->
			   <div class="col-md-10">
				<form class="needs-validation" novalidate>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="address">Address</label>
							<input type="text" class="form-control" id="address" name="CUST_STREET_ADDRESS1" placeholder="" value="" required>
							<div class="invalid-feedback">Valid address is required.</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="amount">Amount</label>
							<input type="text" class="form-control" id="amount" name="AMOUNT" placeholder="" value="" required>
							<div class="invalid-feedback">Amount is required.</div>
						</div>
					</div>
			   </div>

		<!-- Column -->

                
              
		    <!-- Column -->
         
			</div>
			  <div class="row">
			  	 <div class="col-md-3 offset-md-1">
			   	<button class="btn btn-custom-color btn-small btn-block" type="submit" id="proceedtopay">Continue to checkout</button>
			   </div>
			  </div>
		  </form>	  
		</div><!-- Container -->
		<!-- Optional JavaScript; choose one of the two! -->
		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>