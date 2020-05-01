<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Ukstudy;
use App\Query;
use App\Assessment;
use Illuminate\Support\Facades\Input;
use App\Ukuniversityquery;



class BlogController extends Controller
{
        public function canadian_way_of_life()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('blogs.canadian_way_of_life',['location'=>$location]);
    }
    public function pakistani_student_canada()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('blogs.pakistani_student_canada',['location'=>$location]);
    }
    public function february_roadshow()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('blogs.february_roadshow',['location'=>$location]);
    }
    public function phd_roadshow()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('blogs.phd_roadshow',['location'=>$location]);
    }
    public function facts_about_studying_in_australia()
    {
        
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('blogs.facts_about_studying_in_australia',['location'=>$location]);
    }
    public function after_graduation()
    {
        
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('blogs.after_graduation',['location'=>$location]);
    }
    public function second_passport()
    {
        
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('blogs.second_passport',['location'=>$location]);
    }
    public function why_we_immigrate_to_canada()
    {
        
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('blogs.why_we_immigrate_to_canada',['location'=>$location]);
    }
    public function usf_scholarship()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('blogs.usf_scholarship',['location'=>$location]);
    }
         public function why_study_in_the_uk()
     {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('blogs.why_study_in_the_uk',['location'=> $location]);
     }
     public function uk_education_system()
     {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('blogs.uk_education_system',['location'=> $location]);
     }
     public function overcoming_challenges_for_international_students()
     {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('blogs.overcoming_challenges_for_international_students',['location'=> $location]);
     }
     public function things_to_know_before_studying_abroad_in_new_zealand()
     {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('blogs.things_to_know_before_studying_abroad_in_new_zealand',['location'=> $location]);
     }
     public function women_only(){
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('blogs.women_only',['location'=> $location]);
     }
     public function kaplan_event_calender(){
         $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('blogs.kaplan_event_calender',['location'=> $location]);
     }
      public function scholarship_in_uk(){
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('blogs.scholarship_in_uk',['location'=> $location]);
     }
     public function dual_citizenship(){
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('blogs.dual_citizenship',['location'=> $location]);
     }
     public function why_canada_needs_immigration(){
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('blogs.why_canada_needs_immigration',['location'=> $location]);
     }

     public function graduate_immigration_route()
     {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('blogs.graduate_immigration_route',['location'=> $location]);
     }
}
