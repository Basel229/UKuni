@extends('layouts.user')
@section('content')
<!-- About Us slider -->

<br><br>
<!-- About Us slider -->
<!-- About Us Text -->

<div class="row">
	
	<div class="col-lg-8">
		<p style="font-size: 45px; color: #1f0949;">Graduate <strong style="font-size: 45px; color: #eb1e25;">Immigration Route</strong></p>
		<p style="color: #1f0949;font-weight: 600;">Date Published : April 16, 2020 | Category : Study In UK</p><br>
		<img src="{{ asset('images/blogs/graduate_immigration_route.jpg') }}" style="width: 70%;"><br><br>
		
		<p style="font-size: 16px;">On 11 September 2019 the UK Government announced the creation of a new immigration route which will enable international students to remain in the UK for two years after they have completed their studies.</p>
		<p style="font-size: 25px;color: #1f0949;">Key Points:</p>
		<ul>
			<li>The Graduate Immigration Route will be available to international students who have completed a degree at undergraduate level or above at a Higher Education Provider with a track record of compliance and who have a valid Tier 4 visa at the time of application.</li>
			<li>Successful applicants on this route will be able to stay and work, or look for work, in the UK at any skill level for a maximum period of two years. Graduates will be able to switch into skilled work once they have found a suitable job.</li>
			<li>The new route will be launched in the summer of 2021, meaning that any eligible student who graduates in the summer of 2021 or after will be able to apply for the route. This includes students who have already started their courses. Universities will also be able attract students starting in the 2020/21 academic year on the basis that they will benefit.</li>
			<li>The launch of the route demonstrates the government’s support for our education sector, and commitment to the International Education Strategy, which sets out our ambition to increase education exports to £35 billion and the number of international higher education students to 600,000 by 2030.</li>
			<li>The graduate immigration route will require a new application.</li>
			<li>It will include the payment of a visa fee and the Immigration Health Surcharge. The exact fee will be set out in due course.</li>
			<li>Those who graduate and whose Tier 4 leave expires before the route is introduced will not be eligible, however, most of these students will have had no expectation of benefitting from such a route when they applied to study in the UK.</li>
		</ul>

		<br>
		

	</div>
	<div class="col-lg-3" >
		@include('layouts.queryForm')
	</div>
	<div class="col-lg-1"></div>
</div><br><br>
<!-- About Us Text -->
@endsection