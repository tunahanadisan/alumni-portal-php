@extends('frontEnd.app')
@section('content')
<div class="page-headline">
	<div class="container">
		<h3>Profile</h3> &nbsp; <small><a href="edit-profile"><i class="fa fa-edit"></i> Edit Profile</a></small>
	</div><!-- container -->
</div><!-- page-headline -->

<div class="container">
	<div class="row paddingTopBottom">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			
			<div class="media profile-infos">
				<img class="mr-3" src="/alumni/images/no-image.png" alt="Generic placeholder image" width="64">
				<div class="media-body">
					<h5 class="mt-0">Burakhan Bircan</h5>
					<small>burakhanbircan@gmail.com</small>
					<hr>
					<p>Country <br><strong><small>Turkey</small></strong></p>
					<p>Department <br><strong><small>Computer Programming</small></strong></p>
					<p>Birth Date <br><strong><small>01/01/1990</small></strong></p>
					<p>School Start Date <br><strong><small>01/01/2014</small></strong></p>
					<p>Alumni Date<br><strong><small>01/01/2018</small></strong></p>
					<p>Student Number <br><strong><small>20140001</small></strong></p>
					<p>Gender <br><strong><small>Male</small></strong></p>
				</div><!-- profile-infos -->
			</div><!-- media -->
			
		</div><!-- col -->
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="card">
						<div class="card-body text-center">
							<h1>0</h1>
							<p>Total Joined Event</p>
						</div>
					</div><!-- card -->
				</div><!-- col-lg-6 col-md-6 col-sm-6 col-xs-12 -->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="card">
						<div class="card-body text-center">
							<h1>0</h1>
							<p>Total Created Event</p>
						</div>
					</div><!-- card -->
				</div><!-- col-lg-6 col-md-6 col-sm-6 col-xs-12 -->
			</div><!-- row -->
			<br>
			<hr>

			<div class="row">
				<div class="col">
					<h4 style="padding-top: 20px;padding-bottom: 20px;">Send a Message</h4>
					<div class="sam">
						<p>Name</p>
						<input type="text" name="" class="form-control">
						<p>Surname</p>
						<input type="text" name="" class="form-control">
						<p>E-Mail</p>
						<input type="text" name="" class="form-control">
						<p>Message</p>
						<textarea rows="5" class="form-control"></textarea>
						<hr>
						<button type="submit" class="btn btn-danger">Send Message</button>
					</div>
				</div><!-- col -->
			</div><!-- row -->

		</div><!-- col -->
	</div><!-- row -->
</div><!-- container -->
@endsection
@section('css')
@endsection
@section('js')
@endsection