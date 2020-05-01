 <nav class="navbar navbar-expand-lg navbar-light bg-info" >
  <a class="navbar-brand" href="{{ route('index') }}" style="color: #fff;font-size:17px;">{{ __('text.Home') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav" style="color: #fff;">
      <li class="nav-item " >
        <a class="nav-link" style="color: #fff;font-size: 17px;;" href="{{ route('aboutus') }}"   >
          {{ __('text.About') }}
        </a>
        
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;font-size: 17px;">
          {{ __('text.immigration_and_citizenship') }}
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink" style="width: 250px;padding: 20px;">
         <a class="dropdown-item dropdown_color_change" href="{{ route('immigration') }}"> <img src="{{ asset('images/immigration.png') }}" width="40"><span>{{ __('text.immigration') }}</span></a>
         <a class="dropdown-item dropdown_color_change" href="{{ route('citizenship') }}"> <img src="{{ asset('images/citizenship.png') }}" width="40"><span>{{ __('text.citizenship') }}</span></a>
        
          
        </div>
      </li>

      <li class="nav-item ">
        <a class="nav-link " href="{{ route('newsandevents') }}"   style="color: #fff;font-size: 17px;" >
          {{ __('text.news_and_events') }}
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

 