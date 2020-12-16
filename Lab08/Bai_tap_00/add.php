<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="./assets/css/styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Lab 08</title>
</head>

<body>
	<h1>Lab 08 - AJAX JQUERY</h1>

	<div id="carModal">
		<div class="modal-dialog">
			<form method="post" id="car_form" enctype="multipart/form-data">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="modal_title">Add Car</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 text-right">Car ID <span class="text-danger">*</span></label>
								<div class="col-md-8">
									<input type="number" name="car_id" id="car_id" class="form-control" required/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 text-right">Name <span class="text-danger">*</span></label>
								<div class="col-md-8">
									<input type="text" name="car_name" id="car_name" class="form-control" required minlength="5" maxlength="40"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-4 text-right">Year <span class="text-danger">*</span></label>
								<div class="col-md-8">
									<input type="number" name="car_year" id="car_year" class="form-control" required min="1990" max="2015"/>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<input type="hidden" name="hidden_id" id="hidden_id" />
						<input type="hidden" name="action" id="action" value="Add" />
						<input type="submit" name="submit" id="submit_button" class="btn btn-success" value="Add" />
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</form>
		</div>
	</div>

</body>

</html>