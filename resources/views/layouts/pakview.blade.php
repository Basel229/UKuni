 <nav class="navbar navbar-expand-lg navbar-light bg-info" >
  <a class="navbar-brand" href="{{ route('index',app()->getLocale()) }}" style="color: #fff;font-size:17px;">{{ __('menu.home') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav" style="color: #fff;">
      <li class="nav-item " >
        <a class="nav-link" style="color: #fff;font-size: 17px;;" href="{{ route('aboutus',app()->getLocale()) }}"   >
          {{ __('menu.about_us') }}
        </a>
        
      </li>
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;font-size: 17px;">
          {{ __('menu.study_abroad') }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="width: 250px;padding: 20px;">
        <a class="dropdown-item dropdown_color_change" href="{{ route('study_abroad',app()->getLocale()) }}" style="padding: 5PX;font-size: 20px;">Overview</a>
         <a class="dropdown-item dropdown_color_change" href="{{ route('study_in_uk',app()->getLocale()) }}" style="padding: 5PX;"> <img src="{{ asset('images/uk.jpg') }}" width="40"><span>    UK</span></a>
         <a class="dropdown-item dropdown_color_change" href="{{ route('study_in_usa',app()->getLocale()) }}" style="padding: 5PX;"> <img src="{{ asset('images/usa.jpg') }}" width="40"><span>    USA</span></a>
         <a class="dropdown-item dropdown_color_change" href="{{ route('study_in_australia',app()->getLocale()) }}" style="padding: 5PX;"> <img src="{{ asset('images/australia.jpg') }}" width="40"><span>    Australia</span></a>
         <a class="dropdown-item dropdown_color_change" href="{{ route('study_in_newzealand',app()->getLocale()) }}" style="padding: 5PX;"> <img src="{{ asset('images/newzealand.jpg') }}" width="40"><span>    New Zealand</span></a>
         <a class="dropdown-item dropdown_color_change" href="{{ route('study_in_canada',app()->getLocale()) }}" style="padding: 5PX;"> <img src="{{ asset('images/canada.jpg') }}" width="40"><span>    Canada</span></a>
         
         
          
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link " href="{{ route('study_english',app()->getLocale()) }}"    style="color: #fff;font-size: 17px;;">
          {{ __('menu.study_english') }}
        </a>
        
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;font-size: 17px;">
          {{ __('menu.immigraton_and_citizenship') }}
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink" style="width: 250px;padding: 20px;">
         <a class="dropdown-item dropdown_color_change" href="{{ route('immigration',app()->getLocale()) }}"> <img src="{{ asset('images/immigration.png') }}" width="40"><span> Immigration</span></a>
         <a class="dropdown-item dropdown_color_change" href="{{ route('citizenship',app()->getLocale()) }}"> <img src="{{ asset('images/citizenship.png') }}" width="40"><span> Citizenship</span></a>
        
          
        </div>
      </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;font-size: 17px;">
          {{ __('menu.medical_education') }}
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink" style="width: 250px;padding: 4px;">
         <a class="dropdown-item dropdown_color_change" href="{{ route('medical_education',app()->getLocale()) }}"> <span> Overview</span></a>
         <a class="dropdown-item dropdown_color_change" href="{{ route('kaplan_biochemistry_lecture',app()->getLocale()) }}"> <span>Kaplan Biochemistry Lecture 
</span></a>
         
         
        
          
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link " href="{{ route('newsandevents',app()->getLocale()) }}"   style="color: #fff;font-size: 17px;" >
          {{ __('menu.news') }}
        </a>
        
      </li>
      <li class="nav-item ">
        <a class="nav-link " href="{{ route('contactus',app()->getLocale()) }}"   style="color: #fff;font-size: 17px;" >
          {{ __('menu.contact_us') }}
        </a>
        
      </li>


      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;font-size: 17px;">
          <i class="fa fa-language" aria-hidden="true"  size="3x"></i>
 Language ({{ app()->getLocale() }})
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink" style="width: 200px;padding: 20px;">
         <a class="dropdown-item dropdown_color_change" href="{{ route(Route::currentRouteName(),'en') }}"> <span> English</span></a>
         <a class="dropdown-item dropdown_color_change" href="{{ route(Route::currentRouteName(),'ar') }}"> <span> Arabic</span></a>
        
          
        </div>
      </li>



      
      
      
     
      
    </ul>

                                 
                                   

                                   
                                
</nav>

</div>
</div>


