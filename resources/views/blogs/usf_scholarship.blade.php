@extends('layouts.user')
@section('content')
<!-- About Us slider -->

<br><br>
<!-- About Us slider -->
<!-- About Us Text -->

<div class="row">
	
	<div class="col-lg-8">
		<p style="font-size: 45px; text-align: left;color: #1f0949;">The University of  <strong style="font-size: 45px; color: #eb1e25;">South Florida</strong></p>
		<p style="color: #1f0949;font-weight: 600;">Date Published : January 22, 2020 | Category : News</p><br>
		<img src="images/blogs/usf_scholarship.jpg" style="width: 70%;"><br><br>



		<p style="font-size: 17px;">The University of South Florida (USF) is offering some generous scholarships for top students who are either freshmen or transfer! To be considered for merit-based scholarships from the Office of Admissions, students must submit a completed admissions application by the priority deadline.</p>
		
		<center><span style="color: red">Application Submission Deadline: February 15</span></center>
		<center><span style="color: red">Application Completion Deadline: May 1</span></center>

		<p style="font-size: 17px;">Below are the documents that are needed to be sent to the University by the scholarship completion deadline of May 1st:</p>
		<ul>
			<li>Official SAT/ACT scores.</li>
			<li>Official Post-Secondary transcripts</li>
			<li>For Upper Level Transfer students (determined by USF during evaluation), they will need to provide official TOEFL or IELTS.</li>
		</ul>

		<h3>SCHOLARSHIPS ARE ONLY AVAILABLE FOR STUDENTS STARTING IN THE FALL SEMESTER</h3>
		<b><u>FRESHMAN SCHOLARSHIPS:</u></b>
		<p style="font-size: 17px;">These awards are not-stackable. Students will receive the highest award for which they qualify within the awarding timeline. All Green & Gold awards are credited in the form of a partial out-of-state tuition waiver; exact award amounts vary based on the number of credits in which a student enrolls each term.</p>
		<p style="font-size: 17px;">Of course, passports are not going away. You will continue to need one to travel. This is why you’re better having more than one.</p>
		
		<table class="table table-border">
			<tr>
				<th>Scholarship</th>
				<th>Award/Benefit</th>
				<th>Academic Requirements</th>
			</tr>

			<tr>
				<td>USF Green & Gold Presidential Award	</td>
				<td>$48,000 (Up to $12,000 per year)</td>
				<td>4.00+ GPA and 1340+ SAT (Evidence-Based Reading and Writing & Math only) or 29+ ACT	</td>
			</tr>

			<tr>
				<td>USF Green & Gold Directors Award</td>
				<td>$36,000 (Up to $9,000 per year)</td>
				<td>3.80+ GPA and 1280+ SAT (Evidence-Based Reading and Writing & Math only) or 27+ ACT</td>
			</tr>

			<tr>
				<td>USF Green & Gold Scholars Award</td>
				<td>$24,000 (Up to $6,000 per year)</td>
				<td>3.60+ GPA and 1210+ SAT (Evidence-Based Reading and Writing & Math only) or 25+ ACT</td>
			</tr>

			<tr>
				<td>USF International Student Scholarship</td>
				<td>$4,000 (Up to $1,000 per year)</td>
				<td>3.5+ GPA and 1180+ SAT (Evidence-Based Reading and Writing & Math only) or 24+ ACT</td>
			</tr>

		</table>







		<p style="font-size: 20px;">TRANSFER SCHOLARSHIPS</p>
		<p style="font-size: 17px;">These scholarships are competitive awards. Meeting the criteria to be considered for a scholarship does not guarantee that a student will receive that award.</p>


		<table class="table table-border">
			<tr>
				<th>Scholarship</th>
				<th>Award/Benefit</th>
				<th>Academic Requirements</th>
			</tr>

			<tr>
				<td>Frank H. Spain and Betty E. Gillies Community College Transfer Scholarship	</td>
				<td>$5,000 ($1,250 per semester)</td>
				<td>Cumulative Transfer GPA of 3.75 or higher Awarded to the top transfer applicant from each college within the Florida College System. Must be transferring with an AA or approved AS degree.</td>
			</tr>

			<tr>
				<td>USF International Transfer Student Scholarship</td>
				<td>$2,000 ($500 per semester)</td>
				<td>Cumulative postsecondary GPA of 3.60 or higher with a minimum of 60 transferable credit hours.  Complete Application by May 1, 2020.</td>
			</tr>

		</table>
		
		
	</div>
	<div class="col-lg-3" >
		@include('layouts.queryForm')
	</div>
	<div class="col-lg-1"></div>
</div><br><br>
<!-- About Us Text -->
@endsection