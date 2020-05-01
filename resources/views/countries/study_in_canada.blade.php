@extends('layouts.user')
@section('content')
<!-- About Us slider -->
<div class="row">
            <div id="demo" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/ukuni_slider/study_in_canada.jpg') }}" alt="Los Angeles" width="1100" height="300">
      <div class="carousel-caption" >
        <h1 style="font-size: 50px;">STUDY IN CANADA</h1>
        <hr width="10%" style="border-top-width: 3px;
    border-top-style: solid;
    border-top-color: #fff;" align="left">
        
<br><br><br><br>
      </div>   
    </div>
   
    
     
      </div>

      
    </div>
        </div>

<!-- About Us slider -->
<!-- About Us Text -->
<!-- Search Filter -->
<!-- <div class="row" style="background-color: #eb1e25;">
    
    <div class="col-lg-2"></div>
    <div class="col-lg-8" ><br>
        <p style="font-size: 35px; text-align: center;color: #fff;">Search <strong style="font-size: 35px; color: #fff;">In Canada. . . </strong></p>
       @if(session()->has('message'))
                <div class="alert alert-danger">
                    {{ session()->get('message') }}
                </div>
            @endif  
   
   <form method="get" action="{{ route('canadauniversities',app()->getLocale()) }}" class="form-inline">
        
        {{ csrf_field() }}
        <select name="level" class="form-control form_field_size" style="height: 45px;
            width: 30%;">
            <option value="">Select Level of Studies</option>
            <option value="Combined Graduate / Doctoral Degree">Combined Graduate / Doctoral Degree</option>
            <option value="Double Major Degree">Double Major Degree</option>
            <option value="English Language">English Language</option>
            <option value="Foundation for Postgraduate">Foundation for Postgraduate</option>
            <option value="Foundation for Undergraduate">Foundation for Undergraduate</option>
            <option value="Graduate">Graduate</option>
            <option value="Graduate Certificate">Graduate Certificate</option>
            <option value="Graduate Diploma">Graduate Diploma</option>
            <option value="Ph.D.">Ph.D.</option>
            <option value="Postgraduate">Postgraduate</option>
            <option value="Secondary School">Secondary School</option>
            
        </select>&nbsp;

        <select name="discipline" class="form-control form_field_size" style="height: 45px;
            width: 30%;">
            <option value="">Select Discipline</option>
                        <option value="Accounting">Accounting</option>
                        <option value="Agriculture and Related Sciences">Agriculture and Related Sciences</option>
                        <option value="Archaeology">Archaeology</option>
                        <option value="Architecture, building, and planing">Architecture, building, and planing</option>
                        <option value="Art and Design">Art and Design</option>
                        <option value="Business, Management, and Administrative Studies">Business, Management, and Administrative Studies</option>
                        <option value="Chemical Engineering">Chemical Engineering</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Civil Engineering">Civil Engineering</option>
                        <option value="Classical Studies">Classical Studies</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="Creative Arts">Creative Arts</option>
                        <option value="Economics">Economics</option>
                        <option value="Education">Education</option>
                        <option value="Electrical and Electronic Engineering">Electrical and Electronic Engineering</option>
                        <option value="Engineering and Technology">Engineering and Technology</option>
                        <option value="English">English</option>
                        <option value="Film, Cinematics, and Photography">Film, Cinematics, and Photography</option>
                        <option value="Finance">Finance</option>
                        <option value="Game Design">Game Design</option>
                        <option value="Geograpghy">Geograpghy</option>
                        <option value="Geology">Geology</option>
                        <option value="Historical and Philosophical Studies">Historical and Philosophical Studies</option>
                        <option value="Hospitality, Leisure, and Tourism">Hospitality, Leisure, and Tourism</option>
                        <option value="Journalism">Journalism</option>
                        <option value="Languages">Languages</option>
                        <option value="Law">Law</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Mathematical Sciences">Mathematical Sciences</option>
                        <option value="Mechnical Engineering">Mechnical Engineering</option>
                        <option value="Media Studies">Media Studies</option>
                        <option value="Medical Technology">Medical Technology</option>
                        <option value="Medicine and Allied Subjects">Medicine and Allied Subjects</option>
                        <option value="Midwifery">Midwifery</option>
                        <option value="Molecular Biology, Biophysics, and Biochemistry">Molecular Biology, Biophysics, and Biochemistry</option>
                        <option value="Music">Music</option>
                        <option value="Nursing">Nursing</option>
                        <option value="Optometry">Optometry</option>
                        <option value="Paramedic Science">Paramedic Science</option>
                        <option value="Pharmacology, Toxicology, and Pharmacy">Pharmacology, Toxicology, and Pharmacy</option>
                        <option value="Philosophy">Philosophy</option>
                        <option value="Psychology">Psychology</option>
                        <option value="Publishing, Media, and Information Management">Publishing, Media, and Information Management</option>
                        <option value="Social Studies">Social Studies</option>
                        <option value="Social Work">Social Work</option>
                        <option value="Software Engineer">Software Engineer</option>
                        <option value="Sports">Sports</option>
                        <option value="Veterinary Science">Veterinary Science</option>
                        <option value="Zoology">Zoology</option>
        </select>&nbsp;
        <select name="university" class="form-control form_field_size" style="height: 45px;
            width: 25%;">
            <option value="">Select University</option>
            <option value="Algonquin College">Algonquin College</option>
            <option value="Capilano University">Capilano University</option>
            <option value="Centre for Arts and Technology">Centre for Arts and Technology</option>
            <option value="Columbia College">Columbia College</option>
            <option value="Coquitlam College">Coquitlam College</option>
            <option value="Fraser International College (FIC)">Fraser International College (FIC)</option>
            <option value="Holland College">Holland College</option>
            <option value="International College of Manitoba (Navitas) at University of Manitoba">International College of Manitoba (Navitas) at University of Manitoba</option>
            <option value="Lakehead University">Lakehead University</option>
            <option value="LaSalle College">LaSalle College</option>
            <option value="Laurentian University">Laurentian University</option>
            <option value="Royal Roads University">Royal Roads University</option>
            <option value="Sheridan College Institute of Technology and Advanced Learning">Sheridan College Institute of Technology and Advanced Learning</option>
            <option value="Stenberg College">Stenberg College</option>
            <option value="Thompson Rivers University">Thompson Rivers University</option>
            <option value="Toronto Film School">Toronto Film School</option>
            <option value="University Canada West">University Canada West</option>
            <option value="University of Alabama Birmingham - INTO USA">University of Alabama Birmingham - INTO USA</option>
            <option value="University of Regina">University of Regina</option>
            <option value="Vancouver Film School">Vancouver Film School</option>


            
            
            
            
        </select>&nbsp;
        
        
        
        <input type="submit" name="submit" value="Search" class="btn btn-info" style="height: 45px;width: 100px;">
    </form>     
    
    <br><br><br>
    </div>
    <div class="col-lg-2"></div>
</div> -->

<br><br>
<!-- Search Filter -->
<div class="row">
    
    <div class="col-lg-8">
        <p style="font-size: 50px; text-align: left;color: #1f0949;">Why <strong style="font-size: 50px; color: #eb1e25;">Choose Canada</strong></p>
        <hr width="10%" style="border-top-width: 3px;
    border-top-style: solid;
    border-top-color: #1f0949;" align="left">
    
    <p style="font-size: 17px;">Canada is the second largest country in the world and has one of the more advanced education systems. The country attracts thousands of international students that aim to complete their degrees and many choose to settle and work in Canada.</p>
    <p style="font-size: 17px;">
        Canada welcomes international students that graduate from its higher education institutions to apply for settlement and has well established system for accommodating qualified professionals.</p>
    <p style="font-size: 17px;"><p style="font-size: 17px;">Out of all the many choices available to students, Canada comes out on top. In fact, the number of international students has risen dramatically over the last few years. Why the sudden infatuation with Canada and its maple leaf? Here are 7 good reasons to choose Canada for your studies.</p>
    <br>
    <p style="font-size: 25px; text-align: left;color: #eb1e25;">1. Bilingual environment</p>
    <p style="font-size: 17px;"><p style="font-size: 17px;">Canada is a bilingual country, which makes studying here an excellent opportunity to develop your language skills and boost your prospects for an interesting career. Coursework in French and English is an integral part of Canada’s educational system, which enriches its cultural and community life.</p>
    <p style="font-size: 25px; text-align: left;color: #eb1e25;">2. Benefit from a world-class education</p>
    <p style="font-size: 17px;">Canadian college and university diplomas are recognized around the world. The Canadian educational system encourages cross-disciplinary studies and the development of transferable skills (e.g., critical thinking, teamwork and communications) and uses cutting-edge technology and digital media.</p>
    <p style="font-size: 17px;">Five Canadian universities ranked in the 2018 top 100 for the best universities in the world according to the Times Higher Education World University Ratings.</p>

    <p style="font-size: 25px; text-align: left;color: #eb1e25;">3. Gain work experience in Canada after you graduate</p>
    <p style="font-size: 17px;">The Canadian government offers a work program to students who have obtained a diploma from a post-secondary school in Canada and are looking to gain work experience. This is an excellent way to continue to live in Canada while diversifying and developing your professional skills.</p>

    <p style="font-size: 25px; text-align: left;color: #eb1e25;">4. Ride Canada’s tech wave</p>
    <p style="font-size: 17px;">The telecommunications, digital media, video game, biotech and aeronautical engineering industries are particularly strong in Canada. In addition, Canada was the first country to link its schools and libraries to the Internet through its innovative SchoolNet program. It is therefore not surprising that nearly 90% of Canadian households are connected to the Internet.</p>
    <p style="font-size: 25px; text-align: left;color: #eb1e25;">5. Enjoy an excellent quality of life</p>
    <p style="font-size: 17px;">According to QS World University Rankings, three Canadian cities, Toronto, Montreal and Vancouver, made the list of the top 50 student cities. The ranking was based on several criteria, including affordability, the diversity of the student population, and employers’ perception of graduates on the job market.</p>
    <p style="font-size: 25px; text-align: left;color: #eb1e25;">6. Have an enriching cultural experience</p>
    <p style="font-size: 17px;">Canada has a highly diverse population, resulting in a rich and vibrant cultural scene. To begin exploring what Canada has to offer, visit each province's tourism website. Below are a few recommended experiences that should not be missed.</p>
    <p style="font-size: 25px; text-align: left;color: #eb1e25;">7. Discover the country’s natural beauty</p>
    <p style="font-size: 17px;">Canada is an extremely vast country: Its surface area is 14 times larger than that of France. It offers a multitude of magnificent landscapes that can be explored throughout the country’s four distinct seasons. Many Canadians complain about the country’s harsh winters, but the cold season provides an opportunity for dedicated skiers and ice skaters to practice their sport in majestic surroundings. Here are just some of the most scenic places to visit: the pristine beaches of Prince Edward Island, the impressive fjords of the Saguenay and the Percé Rock of the Gaspé in Quebec, the fascinating Rockies and Lake Louise in Alberta, Niagara Falls in Ontario, Jasper National Park also in Alberta and Whistler Mountain in British Columbia. From the sea to its mountains, prairies and forests, Canada is an endless source of natural beauty!</p><br><br>
    <div class="row">
       
       <div class="col-lg-8">
           <!-- Blogs section -->
                <div class="row">
                <div class="col-lg-6" >
                    <div class="row">
                        
                        <div class="col-lg-11 " >
                        <img src="{{ asset('images/blogs/canadian_way_of_life.jpg') }}" width="100%">
                        <a href="{{ route('canadian_way_of_life',app()->getLocale()) }}"><h5 style="margin-top: 10px;">Canadian Way of Life</h5></a>
                        <p style="font-size: 13px;font-weight: 700;color: #eb1e25">Article</p>
                        <hr>
                        <p style="font-size: 16px;">
                             
                            Canada consistently ranks among the best place to live in numerous studies. In both 2018 and 2019


                        </p>
                        <span style="font-size: 15px;font-weight: 300">January 22, 2020 | Study In Canada</span><br><br>
                        <a href="{{ route('canadian_way_of_life',app()->getLocale()) }}"  id="changecolor" class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Read More</span> 
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        <br><br><hr>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
                <div class="col-lg-6" >
                    <div class="row">
                        
                        <div class="col-lg-11" >
                        <img src="{{ asset('images/blogs/pakistani_student_canada.jpg') }}" width="100%">
                        <h5 style="margin-top: 10px;">Pakistani Student Canada</h5>
                        <p style="font-size: 13px;font-weight: 700;color: #eb1e25">Article</p>
                        <hr>
                        <p style="font-size: 16px;">
                             
                            20-Day Canada Study Permit Processing Via Student Direct Stream


                        </p>
                        <span style="font-size: 15px;font-weight: 300">January 22, 2020 | Study In Canada</span><br>
                        
                        <br>
                        <a href="{{ route('pakistani_student_canada',app()->getLocale()) }}"  id="changecolor" class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Read More</span> 
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        <br><br><hr>
                    </div>
                    <div class="col-lg-1"></div>
                    </div>  
                </div>

            </div>
       </div>
       <div class="col-lg-1"></div>
    </div>
                <br><br>



    </div>
    <div class="col-lg-3 university-logo" >
        @include('layouts.queryForm')
    </div>
    <div class="col-lg-1"></div>
</div><br><br>
<!-- About Us Text -->
@endsection