@extends('layout')
@section('content')

<section class="portfolio-wthree align-w3 py-5" id="portfolio">
		<div class="container py-xl-5 py-lg-3">
			<div class="wthree_pvt_title text-center">
				<h4 class="w3pvt-title">Assignments
				</h4>
			</div>
			<div>
				<ul class="demo row">
                @foreach($assign_data as $ad)
					<li class="col-lg-4">
						<div class="img-grid">
							<div class="Portfolio-grid1">
								<a href="#gal1">
									<embed src="{{'/assign_file/'.$ad->afile}}" alt=" fr" width=100%;>
								</a>
							</div>
							<div class="port-desc text-center">
								<h6 class="main-title-w3pvt text-center">{{$ad->atitle}}</h6>
                                <h6 class="main-title-w3pvt text-center">Subject: {{$ad->asub}}</h6>
                                <h6 class="main-title-w3pvt text-center">Faculty: {{$ad->afacultyname}}</h6>
								
                                <form method="POST" action="/deletea" enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="assignment_id" value="{{$ad->aid}}" hidden>
								<button style="width:100%;background-color:#dc3545;color:white;height:40px" onclick="return confirm('Are you sure you want to delete the assignment');" type="submit" name="delete" value="Delete">Delete</button>
                                </form>
							</div>
						</div>
					</li>
                    @endforeach
				</ul>
	</section>
	<!-- //portfolio -->


@stop