		
		<p style="font-size: 25px; text-align: left;color: #fff;background-color: #1f0949;;padding: 25px;">If you have any query, Send us a message</p>
		<form method="post" action="{{ route('getquerydata') }}" style="background-color: #f8f8f8;padding: 15px;" >

			{{ csrf_field() }}
			<input type="text" name="name" class="form-control" placeholder="Enter Full Name"><br>
			<input type="email" name="email" class="form-control" placeholder="Enter Email Address"><br>
			<input type="number" name="phone_number" class="form-control" placeholder="Enter Phone Number"><br>
			<input type="number" name="gpa" class="form-control" placeholder="Enter GPA"><br>
			<select name="degree_level" class="form-control">
				<option value="">Select Your Degree Level</option>
				<option value="Undergraduate">Undergraduate</option>
				<option value="Graduate">Graduate</option>
				<option value="Post Graduate">Post Graduate</option>
				<option value="PHD/Doctoral">PHD/Doctoral</option>
				
			</select><br>
			<select name="country" class="form-control">
				<option value="">Select Your Country</option>
				<option value="UK">UK</option>
				<option value="USA">USA</option>
				<option value="Australia">Australia</option>
				<option value="New Zealand">New Zealand</option>
				<option value="Canada">Canada</option>
			</select><br>
			<select name="city" class="form-control">
				<option value="">Select Your Country</option>
				<option value="UK">UK</option>
				<option value="USA">USA</option>
				<option value="Australia">Australia</option>
				<option value="New Zealand">New Zealand</option>
				<option value="Canada">Canada</option>
			</select><br>
			
			<input type="submit" name="submit" value="Submit" class="btn btn-success">
		</form>
		@if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif