<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Merge Multiple PDF Files</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
		        </ul>
		    </div>
	    @endif
	    <h3 class="well text-center mb-4">Merge Multiple PDF Files Example</h3>
	    <form method="post" action="{{ route('merge.pdf.post') }}" enctype="multipart/form-data">
	    	{{csrf_field()}}
	    	<input type="file" name="filenames[]" class="myfrm form-control" multiple="">
	    	<div class="d-grid gap-2 d-md-flex justify-content-md-end">
	    	  <button type="submit" class="btn btn-success mt-4 float-right">Submit</button>
	    	</div>
	    </form>
	</div>
</body>
</html>