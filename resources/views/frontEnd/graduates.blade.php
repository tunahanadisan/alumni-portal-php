@extends('frontEnd.app')
@section('content')
<div class="page-headline">
	<div class="container">
		<h3>Graduates</h3>
	</div><!-- container -->
</div><!-- page-headline -->

<div class="container">
	<div class="row">
		<div class="col-md-3 offset-md-9" style="padding: 20px 0px 0px 0px;padding-right: -10px;">
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Graduate Search..." aria-label="Search">
				<button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div>
	<div class="row paddingTopBottom">

		<div class="col">
			<table class="table table-hover table-bordered paginated" id="myTable">
				<thead>
					<tr>
						<th scope="col" onclick="sortTable(0)"><i class="fa fa-angle-down"></i> Name Surname</th>
						<th scope="col" onclick="sortTable(1)"><i class="fa fa-angle-down"></i> E-Mail</th>
						<th scope="col" onclick="sortTable(2)"><i class="fa fa-angle-down"></i> Department</th>
						<th scope="col" onclick="sortTable(3)"><i class="fa fa-angle-down"></i> Alumni Date</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="30"> &nbsp; Burakhan Bircan</a></td>
						<td>student@gmail.com</td>
						<td>Computer Programming</td>
						<td>06/06/2018</td>
					</tr>
					<tr>
						<td><a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="30"> &nbsp; Name Surname</a></td>
						<td>aaaaa@gmail.com</td>
						<td>Computer Engineering</td>
						<td>06/06/2018</td>
					</tr>
					<tr>
						<td><a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="30"> &nbsp; John Wick</a></td>
						<td>abcs@gmail.com</td>
						<td>Civil Engineering</td>
						<td>06/06/2018</td>
					</tr>
					<tr>
						<td><a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="30"> &nbsp; Burakhan Bircan</a></td>
						<td>student@gmail.com</td>
						<td>Computer Programming</td>
						<td>06/06/2018</td>
					</tr>
					<tr>
						<td><a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="30"> &nbsp; Name Surname</a></td>
						<td>aaaaa@gmail.com</td>
						<td>Computer Engineering</td>
						<td>06/06/2018</td>
					</tr>
					<tr>
						<td><a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="30"> &nbsp; John Wick</a></td>
						<td>abcs@gmail.com</td>
						<td>Civil Engineering</td>
						<td>06/06/2018</td>
					</tr>
					<tr>
						<td><a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="30"> &nbsp; Burakhan Bircan</a></td>
						<td>student@gmail.com</td>
						<td>Computer Programming</td>
						<td>06/06/2018</td>
					</tr>
					<tr>
						<td><a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="30"> &nbsp; Name Surname</a></td>
						<td>aaaaa@gmail.com</td>
						<td>Computer Engineering</td>
						<td>06/06/2018</td>
					</tr>
					<tr>
						<td><a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="30"> &nbsp; John Wick</a></td>
						<td>abcs@gmail.com</td>
						<td>Civil Engineering</td>
						<td>06/06/2018</td>
					</tr>
					<tr>
						<td><a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="30"> &nbsp; Burakhan Bircan</a></td>
						<td>student@gmail.com</td>
						<td>Computer Programming</td>
						<td>06/06/2018</td>
					</tr>
					<tr>
						<td><a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="30"> &nbsp; Name Surname</a></td>
						<td>aaaaa@gmail.com</td>
						<td>Computer Engineering</td>
						<td>06/06/2018</td>
					</tr>
					<tr>
						<td><a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="30"> &nbsp; John Wick</a></td>
						<td>abcs@gmail.com</td>
						<td>Civil Engineering</td>
						<td>06/06/2018</td>
					</tr>
					<tr>
						<td><a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="30"> &nbsp; Burakhan Bircan</a></td>
						<td>student@gmail.com</td>
						<td>Computer Programming</td>
						<td>06/06/2018</td>
					</tr>
					<tr>
						<td><a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="30"> &nbsp; Name Surname</a></td>
						<td>aaaaa@gmail.com</td>
						<td>Computer Engineering</td>
						<td>06/06/2018</td>
					</tr>
					<tr>
						<td><a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="30"> &nbsp; John Wick</a></td>
						<td>abcs@gmail.com</td>
						<td>Civil Engineering</td>
						<td>06/06/2018</td>
					</tr>
				</tbody>
			</table>
			<div class="clear"></div>
		</div>
			
	</div><!-- row -->
</div><!-- container -->
@endsection
@section('css')
@endsection
@section('js')
@endsection