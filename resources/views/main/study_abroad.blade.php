@extends('layouts.user')
@section('content')
<div class="row">
			<div id="demo" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/ukuni_slider/ielts.jpg') }}" alt="Los Angeles" width="1100" height="300">
      <div class="carousel-caption" >
        <h1 style="font-size: 50px;">{{ __('study_abroad.STUDY')}} {{ __('study_abroad.ABROAD')}}</h1>
        <hr width="10%" style="border-top-width: 3px;
    border-top-style: solid;
    border-top-color: #fff;" align="left">

        
<br>
<br>


<br><br>
      </div>   
    </div>
   
    
	 
	  </div>

	  
	</div>
		</div>

<!-- About Us slider -->
<!-- Search Filter -->
<div class="row" style="background-color: #eb1e25;">
	
	<div class="col-lg-2"></div>
	<div class="col-lg-8" ><br>
		<p style="font-size: 35px; text-align: center;color: #fff;">Search University</strong></p>
		    
    <form method="POST" action="{{ route('countryselected',app()->getLocale())}}" class="form-inline">
    	{{ csrf_field() }}
    	<select name="country" class="form-control form_field_size" style="height: 45px;
			width: 80%;">
    		<option value="#">Select Country First</option>
    		<option value="Study in UK">Study in UK</option>
    		<option value="Study in USA">Study in USA</option>
            <option value="Study in Australia">Study in Australia</option>
            <option value="Study in New Zealand">Study in New Zealand</option>
            <option value="Study in Canada">Study in Canada</option>
            <!--<option value="Study in Ireland">Study in Ireland</option>-->
            <!--<option value="Study in Middle East">Study in Middle East</option>-->
    	</select>&nbsp;
    	

    	
    	<input type="submit" name="submit" class="btn btn-info" style="height: 45px;width: 150px">
    </form>
	<br><br><br>
	</div>
	<div class="col-lg-2"></div>
</div>
<!-- Search Filter -->
<!-- About Us Text --><br><br>
<div class="row">
	
	<div class="col-lg-8">
		<p style="font-size: 50px; color: #1f0949;">{{ __('study_abroad.about')}} <strong style="font-size: 50px; color: #eb1e25;">{{ __('study_abroad.study')}} {{ __('study_abroad.abroad')}} </strong></p>
		@if(app()->getLocale() == "en")
        <hr width="10%" style="border-top-width: 3px;
    border-top-style: solid;
    border-top-color: #1f0949;" align="left">
        @endif
    <p style="font-size: 20px;">{{ __('study_abroad.para1')}}</p><br>

    <div class="panel-group" id="accordion">
    <div class="panel panel-default" >
      <div class="panel-heading">
        <h4 class="panel-title" style="background-color: #eb1e25;padding:10px;color: #fff;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="color: #fff;">+ UK Universities</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
            <table>
                <tr>
                    <td><img src="images/uk_university/Anglia Ruskin University.png" width="75%"></td>
                    <td><img src="images/uk_university/Aston University.png" width="75%"></td>
                    <td><img src="images/uk_university/Bangor University.png" width="75%"></td>
                    <td><img src="images/uk_university/BPP University.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/uk_university/Brunel University.png" width="75%"></td>
                    <td><img src="images/uk_university/Cardiff University.png" width="75%"></td>
                    <td><img src="images/uk_university/Coventry University.png" width="75%"></td>
                    <td><img src="images/uk_university/Glasgow Caledonian University.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/uk_university/Kings College London.png" width="75%"></td>
                    <td><img src="images/uk_university/Liverpool John Moores University.png" width="75%"></td>
                    <td><img src="images/uk_university/London South Bank University.png" width="75%"></td>
                    <td><img src="images/uk_university/Manchester Metropolitan University.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/uk_university/Middlesex University.png" width="75%"></td>
                    <td><img src="images/uk_university/Northumbria University.png" width="75%"></td>
                    <td><img src="images/uk_university/Oxford Brookes University.png" width="75%"></td>
                    <td><img src="images/uk_university/Queen Mary University of London.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/uk_university/Queens University Belfast.png" width="75%"></td>
                    <td><img src="images/uk_university/Royal Holloway, University of London.png" width="75%"></td>
                    <td><img src="images/uk_university/Swansea University.png" width="75%"></td>
                    <td><img src="images/uk_university/Teesside University.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/uk_university/Ulster University.png" width="75%"></td>
                    <td><img src="images/uk_university/University of Aberdeen.png" width="75%"></td>
                    <td><img src="images/uk_university/University of Bradford.png" width="75%"></td>
                    <td><img src="images/uk_university/University of Brighton.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/uk_university/University of Central Lancashire.png" width="75%"></td>
                    <td><img src="images/uk_university/University of Dundee.png" width="75%"></td>
                    <td><img src="images/uk_university/University of East Anglia.png" width="75%"></td>
                    <td><img src="images/uk_university/University of Essex.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/uk_university/University of Exeter.png" width="75%"></td>
                    <td><img src="images/uk_university/University of Kent.png" width="75%"></td>
                    <td><img src="images/uk_university/University of Leeds.png" width="75%"></td>
                    <td><img src="images/uk_university/University of Lincoln.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/uk_university/University of Liverpool.png" width="75%"></td>
                    <td><img src="images/uk_university/University of Manchester.png" width="75%"></td>
                    <td><img src="images/uk_university/University of Plymouth.png" width="75%"></td>
                    <td><img src="images/uk_university/University of Reading.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/uk_university/University of Roehampton.png" width="75%"></td>
                    <td><img src="images/uk_university/University of Salford.png" width="75%"></td>
                    <td><img src="images/uk_university/University of Sheffield.png" width="75%"></td>
                    <td><img src="images/uk_university/University of Stirling.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/uk_university/University of Surrey.png" width="75%"></td>
                    <td><img src="images/uk_university/University of Sussex.png" width="75%"></td>
                    <td><img src="images/uk_university/University of York.png" width="75%"></td>
                    <td><img src="images/uk_university/University of Greenwich.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/uk_university/University of Southampton.png" width="75%"></td>
                    <td><img src="images/uk_university/University of the West of England.png" width="75%"></td>
                    <td><img src="images/uk_university/University of Strathclyde.png" width="75%"></td>
                    <td><img src="images/uk_university/City University London.png" width="75%"></td>
                    
                </tr>
                <tr>
                    <td><img src="images/uk_university/Cranfield University.png" width="75%"></td>
                    
                    
                </tr>
                

            </table>
<br><br>

        </div>
      </div>
    </div>
    <div class="panel panel-default" >
      <div class="panel-heading">
        <h4 class="panel-title" style="background-color: #eb1e25;padding:10px;color: #fff;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="color: #fff;">+ USA Universities</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse in">
        <div class="panel-body">
           <table>
                <tr>
                    <td><img src="images/usa_university/Adelphi University.png" width="75%"></td>
                    <td><img src="images/usa_university/American University.png" width="75%"></td>
                    <td><img src="images/usa_university/Arizona State University.png" width="75%"></td>
                    <td><img src="images/usa_university/Auburn University at Montgomery.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/usa_university/Auburn University.png" width="75%"></td>
                    <td><img src="images/usa_university/Baylor University.png" width="75%"></td>
                    <td><img src="images/usa_university/Colorado State University.png" width="75%"></td>
                    <td><img src="images/usa_university/CUNY Queens College.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/usa_university/DePaul University.png" width="75%"></td>
                    <td><img src="images/usa_university/Drew University.png" width="75%"></td>
                    <td><img src="images/usa_university/Florida Atlantic University.png" width="75%"></td>
                    <td><img src="images/usa_university/Florida International University.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/usa_university/George Mason University.png" width="75%"></td>
                    <td><img src="images/usa_university/Hofstra University.png" width="75%"></td>
                    <td><img src="images/usa_university/Humboldt State University.png" width="75%"></td>
                    <td><img src="images/usa_university/Illinois Institute Of Technology - CEG.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/usa_university/Illinois State University.png" width="75%"></td>
                    <td><img src="images/usa_university/James Madison University.png" width="75%"></td>
                    <td><img src="images/usa_university/Long Island University.png" width="75%"></td>
                    <td><img src="images/usa_university/Louisiana State University.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/usa_university/Lynn University.png" width="75%"></td>
                    <td><img src="images/usa_university/Marshall University.png" width="75%"></td>
                    <td><img src="images/usa_university/Mercer University.png" width="75%"></td>
                    <td><img src="images/usa_university/Northeastern University.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/usa_university/Oglethorpe University.png" width="75%"></td>
                    <td><img src="images/usa_university/ONCAMPUS Boston - CEG.png" width="75%"></td>
                    <td><img src="images/usa_university/Oregon State University.png" width="75%"></td>
                    <td><img src="images/usa_university/Pace University.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/usa_university/Richard Bland College of William  Mary.png" width="75%"></td>
                    <td><img src="images/usa_university/Saint Louis University.png" width="75%"></td>
                    <td><img src="images/usa_university/Suffolk University - INTO USA.png" width="75%"></td>
                    <td><img src="images/usa_university/Suffolk University.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/usa_university/Texas A&M University.png" width="75%"></td>
                    <td><img src="images/usa_university/The University of Illinois at Chicago.png" width="75%"></td>
                    <td><img src="images/usa_university/University of Alabama Birmingham.png" width="75%"></td>
                    <td><img src="images/usa_university/University of Central Florida.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/usa_university/University of Dayton.png" width="75%"></td>
                    <td><img src="images/usa_university/University of Hartford.png" width="75%"></td>
                    <td><img src="images/usa_university/University of Idaho.png" width="75%"></td>
                    <td><img src="images/usa_university/University of Kansas.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/usa_university/University of Massachusetts Boston.png" width="75%"></td>
                    <td><img src="images/usa_university/University of Massachusetts Dartmouth.png" width="75%"></td>
                    <td><img src="images/usa_university/University of Massachusetts Lowell.png" width="75%"></td>
                    <td><img src="images/usa_university/University of New Hampshire.png" width="75%"></td>
                    
                </tr>
                <tr>
                    <td><img src="images/usa_university/University of South Carolina.png" width="75%"></td>
                    <td><img src="images/usa_university/University of Texas - San Antonio.png" width="75%"></td>
                    <td><img src="images/usa_university/University of the Pacific.png" width="75%"></td>
                    <td><img src="images/usa_university/University of Utah.png" width="75%"></td>
                    
                </tr>
                <tr>
                    <td><img src="images/usa_university/University of Vermont.png" width="75%"></td>
                    <td><img src="images/usa_university/Virginia Commonwealth University.png" width="75%"></td>
                    <td><img src="images/usa_university/Washington State University.png" width="75%"></td>
                    <td><img src="images/usa_university/Western Washington University.png" width="75%"></td>
                    
                </tr>
           </table>
        </div>
      </div>
    </div>
    <div class="panel panel-default" >
      <div class="panel-heading">
        <h4 class="panel-title" style="background-color: #eb1e25;padding:10px;color: #fff;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="color: #fff;">+ Australia Universities</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse in">
        <div class="panel-body">
            <table>
                <tr>
                    <td><img src="images/aus_university/Curtin College.png" width="75%"></td>
                    <td><img src="images/aus_university/Edith Cowan College.png" width="75%"></td>
                    <td><img src="images/aus_university/Eynesbury College.png" width="75%"></td>
                    <td><img src="images/aus_university/James Cook University.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/aus_university/La Trobe College.png" width="75%"></td>
                    <td><img src="images/aus_university/La Trobe University.png" width="75%"></td>
                    <td><img src="images/aus_university/Murdoch University.png" width="75%"></td>
                    <td><img src="images/aus_university/Newcastle International College (NIC).png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/aus_university/South Australian Institute of Business and Technology (SAIBT).png" width="75%"></td>
                    <td><img src="images/aus_university/The University of Adelaide.png" width="75%"></td>
                    <td><img src="images/aus_university/University of Canberra College.png" width="75%"></td>
                    
                </tr>
            </table>
        </div>
      </div>
    </div>
    <div class="panel panel-default" >
      <div class="panel-heading">
        <h4 class="panel-title" style="background-color: #eb1e25;padding:10px;color: #fff;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" style="color: #fff;">+ New Zealand Universities</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse in">
        <div class="panel-body">
            <table>
                <tr>
                    <td><img src="images/nz_university/Massey University.png" width="75%"></td>
                    <td><img src="images/nz_university/Taylors College Auckland.png" width="75%"></td>
                    <td><img src="images/nz_university/the university of auckland english language academy.png" width="75%"></td>
                    <td><img src="images/nz_university/The University of Waikato.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/nz_university/University of Canterbury.png" width="75%"></td>
                </tr>
            </table>
        </div>
      </div>
    </div>
    <div class="panel panel-default" >
      <div class="panel-heading">
        <h4 class="panel-title" style="background-color: #eb1e25;padding:10px;color: #fff;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" style="color: #fff;">+ Canada Universities</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse in">
        <div class="panel-body">
            <table>
                <tr>
                    <td><img src="images/canada_university/Algonquin College.png" width="75%"></td>
                    <td><img src="images/canada_university/Capilano University.png" width="75%"></td>
                    <td><img src="images/canada_university/Centre for Arts and Technology.png" width="75%"></td>
                    <td><img src="images/canada_university/Columbia College.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/canada_university/Coquitlam College.png" width="75%"></td>
                    <td><img src="images/canada_university/Fraser International College (FIC).png" width="75%"></td>
                    <td><img src="images/canada_university/Holland College.png" width="75%"></td>
                    <td><img src="images/canada_university/International College of Manitoba (Navitas) at University of Manitoba.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/canada_university/Lakehead University.png" width="75%"></td>
                    <td><img src="images/canada_university/LaSalle College.png" width="75%"></td>
                    <td><img src="images/canada_university/Laurentian University.png" width="75%"></td>
                    <td><img src="images/canada_university/Royal Roads University.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/canada_university/Sheridan College Institute of Technology and Advanced Learning.png" width="75%"></td>
                    <td><img src="images/canada_university/Stenberg College.png" width="75%"></td>
                    <td><img src="images/canada_university/Thompson Rivers University.png" width="75%"></td>
                    <td><img src="images/canada_university/Toronto Film School.png" width="75%"></td>
                </tr>
                <tr>
                    <td><img src="images/canada_university/University Canada West.png" width="75%"></td>
                    <td><img src="images/canada_university/University of Alabama Birmingham - INTO USA.png" width="75%"></td>
                    <td><img src="images/canada_university/University of Regina.png" width="75%"></td>
                    <td><img src="images/canada_university/Vancouver Film School.png" width="75%"></td>
                </tr>
            </table>
        </div>
      </div>
    </div>
    <div class="panel panel-default" >
     <!-- <div class="panel-heading">
        <h4 class="panel-title" style="background-color: #eb1e25;padding:10px;color: #fff;">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" style="color: #fff;">+ Ireland Universities</a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse in">
        <div class="panel-body">
             <table>
                <tr>
                    <td><img src="images/ireland_university/Royal College of Surgeons in Ireland.png" width="80%"></td>
                    <td><img src="images/ireland_university/University College Dublin.png" width="80%"></td>
                
                </tr>
            </table>
        </div>
      </div> -->
    </div>

  </div> 
   

	</div>
	<div class="col-lg-3 " >
		@include('layouts.queryForm')
	</div>
	<div class="col-lg-1"></div>
</div><br><br>
@endsection