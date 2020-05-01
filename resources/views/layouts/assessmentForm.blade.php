		
		<p style="font-size: 25px; text-align: left;color: #fff;background-color: #1f0949;;padding: 25px;">Apply for Immigration or Citizenship <br><span style="font-size: 16px;">Send us your details. We can get back to you soon.</span></p>


		<form method="POST" action="{{ route('getassessmentdata') }}" style="background-color: #f8f8f8;padding: 15px;" enctype="multipart/form-data" >

			{{ csrf_field() }}
			@if(session()->has('image_message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
			     @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
			<input type="text" name="fname" class="form-control" placeholder="Enter First Name" required><br>
			<input type="text" name="lname" class="form-control" placeholder="Enter Last Name" required><br>
			<input type="email" name="email" class="form-control" placeholder="Enter Email Address" required><br>
			<input type="number" name="phone_number" class="form-control" placeholder="Enter Phone Number" required><br>
			<input type="number" name="age" class="form-control" placeholder="Enter Age"><br>
			<select name="marital_status" class="form-control" required>
				<option value="">Select Marital Status</option>
				<option value="Single">Single</option>
				<option value="Married">Married</option>
				<option value="Divorced & Widow">Divorced & Widow</option>
				
				
			</select><br>
			<select name="children" class="form-control" required>
				<option value="">Do You Have Dependent Children?</option>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
				
			</select><br>
			<select name="english" class="form-control" required>
				<option value="">Language Skills - English</option>
				<option value="Excellent/Fluent">Excellent/Fluent</option>
				<option value="Good">Good</option>
				<option value="Average">Average</option>
				<option value="Little">Little</option>
				<option value="None">None</option>
			</select><br>
			<select name="french" class="form-control" required>
				<option value="">Language Skills - French</option>
				<option value="Excellent/Fluent">Excellent/Fluent</option>
				<option value="Good">Good</option>
				<option value="Average">Average</option>
				<option value="Little">Little</option>
				<option value="None">None</option>
			</select><br>
			<select name="level_of_studies" class="form-control" required>
				<option value="">Highest Level of Education</option>
				<option value="PhD (Doctoral Level)">PhD (Doctoral Level)</option>
				<option value="Master's Level or Professional Degree">Master's Level or Professional Degree</option>
				<option value="Bachelor Degree">Bachelor Degree</option>
				<option value="College or University Diploma/Degree">College or University Diploma/Degree</option>
				<option value="Secondary/High School Completion">Secondary/High School Completion</option>
				<option value="No Secondary/High School">No Secondary/High School</option>
			</select><br>
			<select name="have_you_ever" class="form-control" required>
				<option value="">Have You Ever</option>
				<option value="Owned a Business">Owned a Business</option>
				<option value="Worked in Management">Worked in Management</option>
				<option value="None of the Above">None of the Above</option>

			</select><br>
			<select name="visa_status" class="form-control" required>
				<option value="">Have You Ever Been Refused a Visa to Enter Canada Before?</option>
				<option value="Yes">Yes</option>
				<option value="No">No</option>

			</select><br>
			<select name="relatives_canada" class="form-control" required>
				<option value="">Do You Have Any Relatives Currently in Canada?</option>
				<option value="Yes">Yes</option>
				<option value="No">No</option>

			</select><br>
			<label >Total Money and Assets in Canadian Dollars</label>
			<input type="text" name="net_worth" class="form-control" placeholder="Enter Ammount in Digits" required><br>
			<select name="information" class="form-control" required>
				<option value="">What Type of Information Are You Looking For?</option>
				<option value="Express Entry">Express Entry</option>
				<option value="Business Investor">Business Investor</option>
				<option value="Family Sponsorship">Family Sponsorship</option>
				<option value="Student Visas">Student Visas</option>
				<option value="Skilled Worker/Skilled Trades">Skilled Worker/Skilled Trades</option>
				<option value="Dual Citizenship">Dual Citizenship</option>
				<option value="Other">Other</option>

			</select><br>
			<label>Upload Resume/CV (Optional): </label>
			
			  <input  name="resume" class="form-control" type="file" id="imageInput">
			  <span style="font-size:13px;color:red;">(Hint: Word or PDF document only)</span>
			  <br><br>

			
			<input type="submit" name="submit" value="Submit" class="btn btn-success">
		</form>
		
            