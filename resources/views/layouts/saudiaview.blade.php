 <nav class="navbar navbar-expand-lg navbar-light bg-info" >
  <a class="navbar-brand" href="{{ route('index') }}" style="color: #fff;font-size:17px;">{{ __('text.Home') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav" style="color: #fff;">
      <li class="nav-item " >
        <a class="nav-link" style="color: #fff;font-size: 17px;;" href="{{ route('aboutus') }}"   >
          About
        </a>
        
      </li>
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;font-size: 17px;">
          Study Abroad
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="width: 350px;padding: 20px;">
        <a class="dropdown-item dropdown_color_change" href="{{ route('study_abroad') }}" style="padding: 5PX;font-size: 20px;">Overview</a>
         <a class="dropdown-item dropdown_color_change" href="{{ route('study_in_uk') }}" style="padding: 5PX;"> <img src="{{ asset('images/uk.jpg') }}" width="40"><span>Study in UK</span></a>
         <a class="dropdown-item dropdown_color_change" href="{{ route('study_in_usa') }}" style="padding: 5PX;"> <img src="{{ asset('images/usa.jpg') }}" width="40"><span>Study in USA</span></a>
         <a class="dropdown-item dropdown_color_change" href="{{ route('study_in_australia') }}" style="padding: 5PX;"> <img src="{{ asset('images/australia.jpg') }}" width="40"><span>Study in Australia</span></a>
         <a class="dropdown-item dropdown_color_change" href="{{ route('study_in_newzealand') }}" style="padding: 5PX;"> <img src="{{ asset('images/newzealand.jpg') }}" width="40"><span>Study in New Zealand</span></a>
         <a class="dropdown-item dropdown_color_change" href="{{ route('study_in_canada') }}" style="padding: 5PX;"> <img src="{{ asset('images/canada.jpg') }}" width="40"><span>Study in Canada</span></a>
          
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link " href="{{ route('study_english') }}"    style="color: #fff;font-size: 17px;;">
          Study English
        </a>
        
      </li>
      

              <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;font-size: 17px;">
           Medical Education
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink" style="width: 250px;padding: 10px;">
         <a class="dropdown-item dropdown_color_change" href="{{ route('medical_education') }}"> <span> Overview</span></a>
         <a class="dropdown-item dropdown_color_change" href="{{ route('kaplan_biochemistry_lecture') }}"> <span>Kaplan Biochemistry Lecture 
</span></a>
         
        
          
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link " href="{{ route('newsandevents') }}"   style="color: #fff;font-size: 17px;" >
          News and Events
        </a>
        
      </li>
      <li class="nav-item ">
        <a class="nav-link " href="{{ route('contactus') }}"   style="color: #fff;font-size: 17px;" >
          Contact Us
        </a>
        
      </li>
      

     
      
    </ul>
  </div>
</nav>
</div>
</div>


