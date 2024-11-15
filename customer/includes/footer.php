		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<h4>Pages</h4>
						<ul>
							<li><a href="../cart.php">Shopping Cart</a></li>
							<li><a href="../contact.php">Contact Us</a></li>
							<li><a href="../shop.php">Shop</a></li>
							<li><a href="my_account.php">My Account</a></li>
						</ul>
						<hr>
						<h4>User Section</h4>
						<ul>
							<?php if (!isset($_SESSION['customer_email'])): ?>
								<li><a href="../checkout.php">Login</a></li>
							<?php else: ?>
								<li><a href="../logout.php">Logout</a></li>
							<?php endif ?>
							<li><a href="../customer_register.php">Register</a></li>
							<li><a href="terms.php" class="text-light">Terms &amp; Conditions</a></li>
						</ul>
						<hr class="hidden-md-down hidden-lg-down hidden-sm-down">
					</div>

					<div class="col-sm-6 col-md-3">
						<h4>Top Products Categories</h4>
						<ul>
							<li><a href="#">Jackets</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Shoes</a></li>
							<li><a href="#">Coats</a></li>
							<li><a href="#">T-Shirts</a></li>
						</ul>
						<hr class="hidden-md-down hidden-lg-down">
					</div>

					<div class="col-sm-6 col-md-3">
						<h4>Where we Are?</h4>
						<address>
							<strong>Riad</strong><br>
							B-18, Subhanbag<br>
							Savar, Dhaka <br><br>
							<i class="fas fa-phone-square"></i><span class="sr-only">Telephone:</span> <a href="tel:+966666666666">+966666666666</a><br>
							<i class="fas fa-envelope"></i><span class="sr-only">Mail:</span> <a href="mailto:info@bdlabit.com">info@Raneem.com</a>
						</address>
						<a href="contact.php">Go to Contact Us Page</a>
						<hr class="hidden-md-down hidden-lg-down">
					</div>

					<div class="col-sm-6 col-md-3">
						<h4>Get the News</h4>
						<form method="post" action="#">
							<div class="input-group mb-2 mr-sm-2">
								<input type="email" class="form-control" id="email" placeholder="Email">
								<div class="input-group-prepend">
									<input type="submit" name="submit" class="input-group-text btn btn-success" value="Subscribe">
								</div>
							</div>
						</form>
						<hr class="hidden-md-down hidden-lg-down">
						<h4>Get in Touch</h4>
						<p class="social">
							<a href="#"><i class="fab fa-facebook-square"></i></a>
							<a href="#"><i class="fab fa-twitter-square"></i></a>
							<a href="#"><i class="fab fa-instagram"></i></a>
							<a href="#"><i class="fab fa-google-plus-square"></i></a>
							<a href="#"><i class="fas fa-envelope"></i></a>
						</p>
					</div>

				</div>
			</div>
		</div>


		<div id="copyright">
			<div class="container text-center">
				<div class="row">
					<div class="col-md-6">
						<p class="text-lg-left">&copy; Taibah University
						</p>
					</div>
				</div>
			</div>
		</div>


		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="assets/js/sweetalert.min.js"></script>
		<script src="assets/js/main.js"></script>
		</body>

		</html>