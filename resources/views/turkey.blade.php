@extends('layouts.user')
@section('content')
<!-- Turkey View for Turkish Users -->


 	
 		
 		  <div class="row">
      <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    
  </ul>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="images/mainslider2.jpg" alt="Immigration" width="100%" height="300">
      <div class="carousel-caption">
       <h1 style="font-size: 40px;">IMMIGRATION</h1>
        <h4>Immigration and citizenship in Canada; Get to the land of opportunities<h4><br>
        <a href="{{route('immigration')}}"  id="changecolor" class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;width: 200px;"><span >Find Out More</span> 
                <i class="fas fa-chevron-right"></i>
              </a><br><br><br><br>
      </div>   
    </div>

   <div class="carousel-item">
      <img src="images/mainslider4.jpg" alt="New York" width="1100" height="300">
      <div class="carousel-caption">
        <h1 style="font-size: 40px;">EVENTS</h1>
        <h4> Join us and meet with representatives from leading universities; register to attend and get invitations for our events<h4><br>
          <a href="{{route('newsandevents')}}"  id="changecolor" class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;width: 200px;"><span >Find Out More</span> 
                <i class="fas fa-chevron-right"></i>
              </a><br><br><br><br>
        </div>   
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
    
  </div>
    </div>
<br><br>
  <!-- 3 Box Grid -->
<p style="font-size: 50px; text-align: center;color: #1f0949;">What we <strong style="font-size: 50px; color: #eb1e25;">Offer</strong></p>  <br>
  <div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-5 university-logo"><br>
      <img src="images/immigration.png"  class="center"  ><br>
              <h5 align="center">Immgration</h5><br>
              <p style="font-size: 18px">If you come to Canada as a skilled immigrant, you and your family will benefit from world-class education and high quality of life.Canada is a diverse and multicultural country with plenty of support to help you and your family achieve success when you arrive in Canada.Freedom is the foundation of Canadian life. We are a peaceful nation with low crime rates. We promote equal opportunity for all, in all areas of life. </p>
              <a href="{{route('immigration')}}" id="changecolor"  class="btn btn-default centerbutton" style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Learn More</span> 
                <i class="fas fa-chevron-right"></i>
              </a><br><br><br>
    </div>
    
    <div class="col-lg-5 university-logo"><br>
      <img src="images/study_abroad.png"  class="center"  ><br>
              <h5 align="center">Citizenship</h5><br>
              <p style="font-size: 18px">Obtaining a second passport is a fundamental step toward freeing yourself from absolute dependence on any one country. Once you have that freedom, it’s much harder for any government to control your destiny. No matter where you live, you can benefit from the political diversification that comes with a second passport.
 </p>
              <a href="{{route('citizenship')}}" id="changecolor"  class="btn btn-default centerbutton" style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Learn More</span> 
                <i class="fas fa-chevron-right"></i>
              </a><br><br><br>
    </div>
    <div class="col-lg-1"></div>
    
  </div>
  <!-- 3 Box Grid -->
  <br><br>
  <!-- Services -->

   

  <div class="row" style="background-image: url('images/service_background.jpg');background-size: cover;background-repeat: no-repeat;color: #fff;">
    <div class="col-lg-1">
      
    </div>
    <div class="col-lg-10" style="margin-top: 50px;margin-bottom: 50px;">
      <div class="row">
        <div class="col-lg-12">
          <p style="font-size: 50px; text-align: center;color: #fff;">Our <strong style="font-size: 50px; color: #fff;">Services</strong></p>
          <p style="font-size: 25px;text-align: center;">Students nowadays have a lot of opportunities to choose the best university education all over the world. We would like to give you a few of the best options for you </p><br><br>

        </div>
        
      </div>
      <div class="row">
        <div class="col-lg-4 university-logo1" >
          <img src="images/1.png"  class="center" width="100px" ><br>
              <h3 align="center" style="color: #fff;">Conselling</h3><br>
              <br>
        </div>
        <div class="col-lg-4 university-logo1">
          <img src="images/2.png"  class="center" width="100px" ><br>
              <h3 align="center" style="color: #fff;">University Selection</h3><br>
              <br>
        </div>
        <div class="col-lg-4 university-logo1">
          <img src="images/3.png"  class="center" width="100px" ><br>
              <h3 align="center" style="color: #fff;">Admission Processing</h3><br>
              <br>
        </div>
      </div><br><br><br>
      <div class="row">
        <div class="col-lg-4 university-logo1">
          <img src="images/4.png"  class="center" width="70px" ><br>
              <h3 align="center" style="color: #fff;">Accommodation</h3><br>
              <br>
        </div>
        <div class="col-lg-4 university-logo1">
          <img src="images/5.png"  class="center" width="70px" ><br>
              <h3 align="center" style="color: #fff;">Student Visa Counselling</h3><br>
              <br>
        </div>
        <div class="col-lg-4 university-logo1">
          <img src="images/6.png"  class="center" width="70px" ><br>
              <h3 align="center" style="color: #fff;">Pre-Departure Briefings</h3><br>
              <br>
        </div>
      </div>
    </div>
    <div class="col-lg-1">
      
    </div>
  </div>
  <!-- Services -->
  
  <br><br>
  <br><br>

  
  <!-- Have you considered -->
  <div class="row">
    
    <div class="col-lg-12">
      <p style="font-size: 50px; text-align: center;color: #1f0949;">We Do That  <strong style="font-size: 50px; color: #eb1e25;">Through</strong></p>  
    </div>

  </div><br>
  <div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
      <div class="row">
        <div class="col-lg-4" >
          <div class="row">
            
            <div class="col-lg-11 " style="background-color: #f2f3f7">
            <img src="images/visit_school.jpg" width="100%">
            <br><br>
            <p style="font-size: 20px;margin-bottom: 40px;">
               
              Visiting schools, institutions and companies and doing counselling sessions and presentations
            </p>
            <a href="#"  id="changecolor" class="btn btn-default centerbutton" style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Learn More</span> 
                <i class="fas fa-chevron-right"></i>
              </a>
            <br><br>
            </div>
            <div class="col-lg-1"></div>
          </div>
        </div>
        <div class="col-lg-4" >
          <div class="row">
            
            <div class="col-lg-11" style="background-color: #f2f3f7">
            <img src="images/meeting_student.jpg" width="100%">
            <br><br>
            <p style="font-size: 20px;margin-bottom: 40px;">
               
              Meeting students, parents and employers and advising them about available options
            </p>
            <a href="#"  id="changecolor" class="btn btn-default centerbutton" style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Learn More</span> 
                <i class="fas fa-chevron-right"></i>
              </a>
            <br><br>
          </div>
          <div class="col-lg-1"></div>
          </div>  
        </div>
        <div class="col-lg-4" >
          <div class="row">
            
            <div class="col-lg-11" style="background-color: #f2f3f7">
            <img src="images/corporate_event.jpg" width="100%">
            <br><br>
            <p style="font-size: 20px;margin-bottom: 40px;">
               
              Arranging visits, events and exhibitions for UK institutions to meet students.
            </p>
            <a href="#"  id="changecolor" class="btn btn-default centerbutton" style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Learn More</span> 
                <i class="fas fa-chevron-right"></i>
              </a>
            <br><br>
          </div>
          <div class="col-lg-1"></div>
          </div>  
        </div>
      </div>
    </div>
    <div class="col-lg-1"></div>
    
  </div><br><br>
  <div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
      <div class="row">
        <div class="col-lg-4" >
          <div class="row">
            
            <div class="col-lg-11 " style="background-color: #f2f3f7">
            <img src="images/presentation_student.jpg" width="100%">
            <br><br>
            <p style="font-size: 20px;margin-bottom: 40px;">
               
              Arranging briefing and presentations to students, parents and employers about different aspects of UK education
            </p>
            <a href="#"  id="changecolor" class="btn btn-default centerbutton" style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Learn More</span> 
                <i class="fas fa-chevron-right"></i>
              </a>
            <br><br>
            </div>
            <div class="col-lg-1"></div>
          </div>
        </div>
        <div class="col-lg-4" >
          <div class="row ">
            
            <div class="col-lg-11" style="background-color: #f2f3f7">
            <img src="images/conselling_student.jpg" width="100%">
            <br><br>
            <p style="font-size: 20px;margin-bottom: 40px;">
               
              Working with teachers and counsellors to pass knowledge about UK education
            </p>
            <a href="#"  id="changecolor" class="btn btn-default centerbutton" style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Learn More</span> 
                <i class="fas fa-chevron-right"></i>
              </a>
            <br><br>
          </div>
          <div class="col-lg-1"></div>
          </div>  
        </div>
        <div class="col-lg-4" >

        </div>
      </div>
    </div>
    <div class="col-lg-1"></div>
    
  </div>

  <br><br><br>
  <!-- Have you considered -->
  <!-- Call to Action -->
  <div class="row" style="background-image: url('images/background1.jpg');">
    <div class="col-lg-6"><br><br>
      <h2 style="color: #fff;text-align: center;">Interested in Immigration & Citizenship</h2>
      <h5 style="color: #fff;text-align: center;">Enter your details below and we'll call you back when it suits you.</h5><br>
      
      <br>
     </div>
     <div class="col-lg-2"></div>
     <div class="col-lg-4"><br><br>
      <a href="{{ route('contactus')}}" type="submit"  id="changecolor" class="btn btn-default mobile_margin" style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;margin-top: 20px;width: 200px;"><span >Contact Us</span> 
                <i class="fas fa-chevron-right"></i>
              </a>
     </div><br><br>
  </div>

  <br>
  <div class="row">
    
    <div class="col-lg-12">
      <p style="font-size: 50px; text-align: center;color: #1f0949;">News</p>
    </div>

  </div><br>
    <div class="row">
    <br><br>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <div class="alert alert-info" >
  There is no upcoming event at the moment
</div>
    </div>
        <div class="col-lg-2"></div>
    
  </div>
  <br><br>

  <br><br>
  
  



  <!-- Blog section -->
  <!-- Testimonials -->
  

  
 <div class="row" style="background:url('images/background2.jpg');">
    <div class="col-lg-1"></div>
    <div class="col-lg-10" style="margin-top: 50px;">
      <p style="font-size: 50px; text-align: center;color: #fff;">Our <strong style="font-size: 50px; color: #fff;">Testimonials</strong></p><br><br>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Carousel indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>   
  <!-- Wrapper for carousel items -->
  <div class="carousel-inner">    
    <div class="item carousel-item active">
      <div class="img-box"></div>
      <p class="testimonial">بالنسبة لخدماتكم كمكتب انتو جدا ممتازين وتعاملكم جدا محترم والرد سريع جدا جدا الواحد يعتمد عليكم ويطمن انه راح يوصل للشي الي يباه وطبعا انا اقول الكلام دا والشهاده في حقكم مجروحه</p>
      <p class="overview"><b>Ohud Ahmed AlHazmi</b> University of Sussex </p>
      <p class="overview"><b>MSc Digital Media</b> -Intake: 2015/2016 </p>
      <div class="star-rating">
        <ul class="list-inline">
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
          <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
        </ul>
      </div><br><br>
    </div>
    <div class="item carousel-item">
      <div class="img-box"></div>
      <p class="testimonial">Honestly I don’t think I would’ve made it without UKUNI, they made the application process ten times easier and they made sure i got the acceptances in the shortest time possible.</p>
      <p class="overview"><b>Erum Abdullah Alkhaled</b> King’s  College London </p>
      <p class="overview"><b>International Foundation Programme (Biology and Chemistry)</b> Sept 2020 </p>
      <div class="star-rating">
        <ul class="list-inline">
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
          <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
        </ul>
      </div><br><br>
    </div>
    <div class="item carousel-item">
      <div class="img-box"></div>
      <p class="testimonial">Thank you, UKuni,  for all the help you have given me over the past two years. Thank you for helping me change universities and everything. My mother and I are both very grateful for your help.</p>
      <p class="overview"><b>Shwe Sin Htun</b> Foundation in LLB Law</p>
      <p class="overview"><b>Into University of Exeter</b>Jan 2020</p>
      <div class="star-rating">
        <ul class="list-inline">
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
          <li class="list-inline-item"><i class="fa fa-star"></i></li>
          <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
        </ul>
      </div><br><br>
    </div>    
  </div>
  <!-- Carousel controls -->
  <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
    <i class="fa fa-angle-left"></i>
  </a>
  <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
    <i class="fa fa-angle-right"></i>
  </a>
</div>
    </div>
    <div class="col-lg-1"></div>
    
  </div>
  <br><br><br>
  <!-- Testimonials -->
  

  



  <!-- Blog section -->

    <!-- Call to Action -->
  <div class="row" style="background-image: url('images/background1.jpg');">
    <div class="col-lg-2"></div>
    <div class="col-lg-8"><br><br>
      <h1 style="color: #fff;text-align: center;">Subscribe To Our Newsletter</h1><br><br>
      <form action="{{ route('subscribe_newsletter')}}" method="post" class="form-inline">
                    {{ csrf_field() }}
                    <input type="text" name="email" class="form-control" placeholder="Enter Email Address" style="width: 600px;height: 44px;"><br>
                    &nbsp;&nbsp;<input   id="changecolor" type="submit" name="submit" class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;width: 200px;">
              </input>
                  </form>
      <br>
      
      <br>
     </div>
     <div class="col-lg-2"></div>
    
  </div>
  <!-- Call to Action -->


  


 	


@endsection