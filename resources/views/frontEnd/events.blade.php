@extends('frontEnd.app')
@section('content')
<div class="page-headline">
	<div class="container">
		<h3>Events</h3>
	</div><!-- container -->
</div><!-- page-headline -->

<div class="container">
	<div class="row">
		<div class="col-md-3 offset-md-9" style="padding: 20px 0px 0px 0px;padding-right: -10px;">
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Event Search..." aria-label="Search">
				<button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div>
	<div class="row paddingTopBottom">
		<div class="col">
			<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="reunions-tab" data-toggle="tab" href="#reunions" role="tab" aria-controls="reunions" aria-selected="false">Reunions</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="webinars-tab" data-toggle="tab" href="#webinars" role="tab" aria-controls="webinars" aria-selected="false">Webinars</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
					<div class="row" id="allEvents">
							
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 evnt">
							<div class="event bg-light">
								<span class="pull-right event-past">past</span>
								<span class="pull-right event-past">reunions</span>
								<div class="row">
									<div class="col-md-2 col-xs-1 e-calender" style="padding-right: 0px;">
										<a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="100%"></a>
										
									</div>
									<div class="col col-auto event-title">
										<h5><a href="post-event">Rendezvous - Class of 2017</a></h5>
										<p>Symbiosis Institute of Business Management <br>
										Sunday, 17th Dec 2017, 1 pm to 6 pm</p>
									</div>
								</div><!-- row -->
							</div><!-- event -->
						</div><!-- col-lg-6 -->
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 evnt">
							<div class="event bg-light">
								<span class="pull-right event-past">past</span>
								<span class="pull-right event-past">Webinars</span>
								<div class="row">
									<div class="col-md-2 col-xs-1 e-calender" style="padding-right: 0px;">
										<a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="100%"></a>
										
									</div>
									<div class="col col-auto event-title">
										<h5><a href="#">Rendezvous - Class of 2017</a></h5>
										<p>Symbiosis Institute of Business Management <br>
										Sunday, 17th Dec 2017, 1 pm to 6 pm</p>
									</div>
								</div><!-- row -->
							</div><!-- event -->
						</div><!-- col-lg-6 -->
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 evnt">
							<div class="event bg-light">
								<span class="pull-right event-past">past</span>
								<span class="pull-right event-past">reunions</span>
								<div class="row">
									<div class="col-md-2 col-xs-1 e-calender" style="padding-right: 0px;">
										<a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="100%"></a>
										
									</div>
									<div class="col col-auto event-title">
										<h5><a href="#">Rendezvous - Class of 2017</a></h5>
										<p>Symbiosis Institute of Business Management <br>
										Sunday, 17th Dec 2017, 1 pm to 6 pm</p>
									</div>
								</div><!-- row -->
							</div><!-- event -->
						</div><!-- col-lg-6 -->
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 evnt">
							<div class="event bg-light">
								<span class="pull-right event-past">past</span>
								<span class="pull-right event-past">reunions</span>
								<div class="row">
									<div class="col-md-2 col-xs-1 e-calender" style="padding-right: 0px;">
										<a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="100%"></a>
										
									</div>
									<div class="col col-auto event-title">
										<h5><a href="#">Rendezvous - Class of 2017</a></h5>
										<p>Symbiosis Institute of Business Management <br>
										Sunday, 17th Dec 2017, 1 pm to 6 pm</p>
									</div>
								</div><!-- row -->
							</div><!-- event -->
						</div><!-- col-lg-6 -->
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 evnt">
							<div class="event bg-light">
								<span class="pull-right event-past">past</span>
								<span class="pull-right event-past">reunions</span>
								<div class="row">
									<div class="col-md-2 col-xs-1 e-calender" style="padding-right: 0px;">
										<a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="100%"></a>
										
									</div>
									<div class="col col-auto event-title">
										<h5><a href="#">Rendezvous - Class of 2017</a></h5>
										<p>Symbiosis Institute of Business Management <br>
										Sunday, 17th Dec 2017, 1 pm to 6 pm</p>
									</div>
								</div><!-- row -->
							</div><!-- event -->
						</div><!-- col-lg-6 -->
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 evnt">
							<div class="event bg-light">
								<span class="pull-right event-past">past</span>
								<span class="pull-right event-past">reunions</span>
								<div class="row">
									<div class="col-md-2 col-xs-1 e-calender" style="padding-right: 0px;">
										<a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="100%"></a>
										
									</div>
									<div class="col col-auto event-title">
										<h5><a href="#">Rendezvous - Class of 2017</a></h5>
										<p>Symbiosis Institute of Business Management <br>
										Sunday, 17th Dec 2017, 1 pm to 6 pm</p>
									</div>
								</div><!-- row -->
							</div><!-- event -->
						</div><!-- col-lg-6 -->
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 evnt">
							<div class="event bg-light">
								<span class="pull-right event-past">past</span>
								<span class="pull-right event-past">reunions</span>
								<div class="row">
									<div class="col-md-2 col-xs-1 e-calender" style="padding-right: 0px;">
										<a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="100%"></a>
										
									</div>
									<div class="col col-auto event-title">
										<h5><a href="#">Rendezvous - Class of 2017</a></h5>
										<p>Symbiosis Institute of Business Management <br>
										Sunday, 17th Dec 2017, 1 pm to 6 pm</p>
									</div>
								</div><!-- row -->
							</div><!-- event -->
						</div><!-- col-lg-6 -->
					</div><!-- row -->

				</div><!-- all events -->
				<div class="tab-pane fade" id="reunions" role="tabpanel" aria-labelledby="reunions-tab">
					<div class="row" id="reunionsEvents">
						
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 evnt">
							<div class="event bg-light">
								<span class="pull-right event-past">past</span>
								<span class="pull-right event-past">reunions</span>
								<div class="row">
									<div class="col-md-2 col-xs-1 e-calender" style="padding-right: 0px;">
										<a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="100%"></a>
										
									</div>
									<div class="col col-auto event-title">
										<h5><a href="#">Rendezvous - Class of 2017</a></h5>
										<p>Symbiosis Institute of Business Management <br>
										Sunday, 17th Dec 2017, 1 pm to 6 pm</p>
									</div>
								</div><!-- row -->
							</div><!-- event -->
						</div><!-- col-lg-6 -->

					</div><!-- row -->
				</div><!-- reunions -->
				<div class="tab-pane fade" id="webinars" role="tabpanel" aria-labelledby="webinars-tab">
					<div class="row" id="webinarsEvents">
						
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 evnt">
							<div class="event bg-light">
								<span class="pull-right event-past">past</span>
								<span class="pull-right event-past">webinars</span>
								<div class="row">
									<div class="col-md-2 col-xs-1 e-calender" style="padding-right: 0px;">
										<a href="#"><img src="{{asset('frontEnd/images/no-image.png') }}" width="100%"></a>
									</div>
									<div class="col col-auto event-title">
										<h5><a href="#">Rendezvous - Class of 2017</a></h5>
										<p>Symbiosis Institute of Business Management <br>
										Sunday, 17th Dec 2017, 1 pm to 6 pm</p>
									</div>
								</div><!-- row -->
							</div><!-- event -->
						</div><!-- col-lg-6 -->

					</div><!-- row -->
				</div><!-- webinars -->
			</div><!-- tab-content -->


			<div id="eventPagination1">
				<nav aria-label="Page navigation">
			        <ul class="pagination" id="pagination1"></ul>
			    </nav>
		    </div>
			<script type="text/javascript">
			    $(function () {

			    	if ( $("#all-tab").hasClass('active') ) {

						var postLength = $("#allEvents .evnt").length;
				    	var pageNum = Math.ceil(postLength / 6);
				        var obj1 = $('#eventPagination1').twbsPagination({
				            totalPages: pageNum,
				            visiblePages: 5,
				            onPageClick: function (event, page) {
				                console.info(page);
						        $(".first .page-link").text("<<");
						        $(".prev .page-link").text("<");
						        $(".last .page-link").text(">>");
						        $(".next .page-link").text(">");

					        	var currentItems = page * 6;
						        $('#allEvents .evnt').hide();
						        $('#allEvents .evnt:nth-child('+ (currentItems) +')').show();
						        $('#allEvents .evnt:nth-child('+ (currentItems-5) +')').show();
						        $('#allEvents .evnt:nth-child('+ (currentItems-4) +')').show();
						        $('#allEvents .evnt:nth-child('+ (currentItems-3) +')').show();
						        $('#allEvents .evnt:nth-child('+ (currentItems-2) +')').show();
						        $('#allEvents .evnt:nth-child('+ (currentItems-1) +')').show();
				            }
				        });

			    	}else if ( $("#reunions-tab").hasClass('active') ) {

						var postLength = $("#reunionsEvents .evnt").length;
				    	var pageNum = Math.ceil(postLength / 6);
				        var obj1 = $('#eventPagination1').twbsPagination({
				            totalPages: pageNum,
				            visiblePages: 5,
				            onPageClick: function (event, page) {
				                console.info(page);
						        $(".first .page-link").text("<<");
						        $(".prev .page-link").text("<");
						        $(".last .page-link").text(">>");
						        $(".next .page-link").text(">");

					        	var currentItems = page * 6;
						        $('#reunionsEvents .evnt').hide();
						        $('#reunionsEvents .evnt:nth-child('+ (currentItems) +')').show();
						        $('#reunionsEvents .evnt:nth-child('+ (currentItems-5) +')').show();
						        $('#reunionsEvents .evnt:nth-child('+ (currentItems-4) +')').show();
						        $('#reunionsEvents .evnt:nth-child('+ (currentItems-3) +')').show();
						        $('#reunionsEvents .evnt:nth-child('+ (currentItems-2) +')').show();
						        $('#reunionsEvents .evnt:nth-child('+ (currentItems-1) +')').show();
				            }
				        });

			    	}else{

						var postLength = $("#webinarsEvents .evnt").length;
				    	var pageNum = Math.ceil(postLength / 6);
				        var obj1 = $('#eventPagination1').twbsPagination({
				            totalPages: pageNum,
				            visiblePages: 5,
				            onPageClick: function (event, page) {
				                console.info(page);
						        $(".first .page-link").text("<<");
						        $(".prev .page-link").text("<");
						        $(".last .page-link").text(">>");
						        $(".next .page-link").text(">");

					        	var currentItems = page * 6;
						        $('#webinarsEvents .evnt').hide();
						        $('#webinarsEvents .evnt:nth-child('+ (currentItems) +')').show();
						        $('#webinarsEvents .evnt:nth-child('+ (currentItems-5) +')').show();
						        $('#webinarsEvents .evnt:nth-child('+ (currentItems-4) +')').show();
						        $('#webinarsEvents .evnt:nth-child('+ (currentItems-3) +')').show();
						        $('#webinarsEvents .evnt:nth-child('+ (currentItems-2) +')').show();
						        $('#webinarsEvents .evnt:nth-child('+ (currentItems-1) +')').show();
				            }
				        });

			    	}

			    });
			</script>

		</div><!-- col -->
	</div><!-- row -->
</div><!-- container -->

@endsection
@section('css')
@endsection
@section('js')
@endsection