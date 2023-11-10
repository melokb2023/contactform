<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet"
		href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
	<link rel="stylesheet"
		href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet"
		href=
"style.css" />
</head>

<body>
	<section id="last">
		<!-- heading -->
		<div class="full">
			<h3>CONTACT FORM</h3>

			<div class="lt">

				<!-- form starting -->
				<form class="form-horizontal" method="post"
				      action="save.php">
					<div class="form-group">
						<div class="col-sm-12">
							<!-- name -->
							<input type="text" class="form-control"
								id="name" placeholder="FIRST NAME"
								name="firstname" value="" />
						</div>
					</div>

                    <div class="form-group">
						<div class="col-sm-12">
							<!-- name -->
							<input type="text" class="form-control"
								id="name" placeholder="LAST NAME"
								name="lastname" value="" />
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<!-- email -->
							<input type="email" class="form-control"
								id="email" placeholder="EMAIL"
								name="email"
								value="" />
						</div>
					</div>

                    <div class="form-group">
						<div class="col-sm-12">
							<!-- category -->
                            <label for="cars">CATEGORY:</label>
                            <select name="category" id="category" >
                                <option value="Product Info">Product Info</option>
                                <option value="Complain">Complain</option>
                              </select>
						</div>
					</div>

					<!-- message -->
                    <label for="cars">MESSAGE:</label>
					<textarea class="form-control" rows="10"
							placeholder="MESSAGE" name="message">
			</textarea>

					<button class="btn btn-primary send-button"
							id="submit" type="submit" value="SEND">
							<i class="fa fa-paper-plane"></i>
						<span class="send-text">SUBMIT</span>
					</button>
				</form>
				<!-- end of form -->
			</div>

			<!-- Contact information -->
			<div class="rt">
				<ul class="contact-list">
					<li class="list-item">
						<i class="fa fa-map-marker fa-1x">
							<span class="contact-text place">
								your address
							</span>
						</i>
					</li>

					<li class="list-item">
						<i class="fa fa-envelope fa-1x">
							<span class="contact-text gmail">
								<a href="mailto:yourmail@gmail.com"
								title="Send me an email">
									email@gmail.com</a>
							</span>
						</i>
					</li>

					<li class="list-item">
						<i class="fa fa-phone fa-1x">
							<span class="contact-text phone">
								(033) 12345678
							</span>
						</i>
					</li>
				</ul>
			</div>
		</div>
	</section>
</body>
</html>
