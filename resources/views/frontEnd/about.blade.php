@extends('frontEnd.app')
@section('content')
<div class="page-headline">
	<div class="container">
		<h3>About</h3>
	</div><!-- container -->
</div><!-- page-headline -->

<div class="container">
	<div class="row paddingTopBottom">
		<div class="col">
			<p>The Alumni Team has always had the vision to nurture a community where each and every member feels connected with the alma mater and with each and every member of the CIU family. We, as a team, aims to bring together CIU as a family.</p>

			<p>Our main objectives include</p>
			<ul>
				<li>Ensuring that the alumni community is well connected</li>
				<li>Ensuring that our alumni feel a sense of belonging to their alma mater</li>
				<li>Establishing and sustaining a link between the alumni and <strong>students</strong></li>
			</ul>

			<div class="row">
				<div class="col-lg-7">
					<img src="{{asset('frontEnd/images/alumni.webp') }}" width="100%" alt="CIU Alumni">
				</div>
			</div><!-- row -->
		</div><!-- col -->
	</div><!-- row -->
</div><!-- container -->
@endsection
@section('css')
@endsection
@section('js')
@endsection