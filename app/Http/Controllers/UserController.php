<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Ukstudy;
use App\Query;
use App\Assessment;
use App\Nzstudy;
use Illuminate\Support\Facades\Input;
use App\Ukuniversityquery;
use App\Subscriber;





class UserController extends Controller
{
    // About Us
    public function index()
    {
        
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        
            
        
        

        
        
        //if($location =="Saudia Arabia")
        //{
        //    \App::setlocale('ar');
        //}
        // if($location =="Turkey")
        //{
        //    \App::setlocale('tr');
        //}
        
        return view('index',['location'=>$location]);
    }
    public function turkey()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('turkey',['location'=>$location]);
    }
    public function aboutus()
    {

        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
    	return view('main.aboutus',['location'=>$location]);
    }
    public function study_abroad()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        //dd($location);
    	return view('main.study_abroad',['location'=>$location]);
    }
    public function study_english()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        //dd($location);
    	return view('main.study_english',['location'=>$location]);
    }
    public function immigration()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        //dd($location);
    	return view('main.immigration',['location'=>$location]);
    }
    public function citizenship()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        //dd($location);
    	return view('main.citizenship',['location'=>$location]);
    }
    public function medical_education()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        //dd($location);
    	return view('main.medical_education',['location'=>$location]);
    }
    public function newsandevents()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        //dd($location);
    	return view('main.newsandevents',['location'=>$location]);
    }
    public function study_in_uk()
    {
        
        $defaultvalue = "null";
        
        
        $ukstudy = Ukstudy::all();
        //dd($ukstudy);
        
        foreach ($ukstudy as $key => $value) {
            if($defaultvalue == "null"){
                $defaultvalue = $value->discipline;
                $selecteddata[] = $value->discipline;
            }   
            if ($defaultvalue != $value->discipline) {
                $selecteddata[] = $value->discipline;
                $defaultvalue = $value->discipline;
            }
               
           

        }
        $totalcount = count($selecteddata);
        

        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        //dd($location);
        return view('countries.study_in_uk',['location'=>$location,'totalcount'=>$totalcount,'selecteddata'=>$selecteddata]);
    }
    public function study_in_usa()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        //dd($location);
        return view('countries.study_in_usa',['location'=>$location]);
    }
    public function study_in_australia()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        //dd($location);
        return view('countries.study_in_australia',['location'=>$location]);
    }
    public function study_in_newzealand()
    {
        
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        //dd($location);

        return view('countries.study_in_newzealand',['location'=>$location]);
    }
    public function study_in_canada()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        //dd($location);
        return view('countries.study_in_canada',['location'=>$location]);
    }
    public function study_in_ireland()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        //dd($location);
        return view('countries.study_in_ireland',['location'=>$location]);
    }
    public function study_in_middleeast()
    {
         $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        //dd($location);
        return view('countries.study_in_middleeast',['location'=>$location]);
    }
 public function formsubmit(){
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('formsubmit',['location'=>$location]);
    }

    public function getquerydata(Request $request)
    {
    //   dd($request->country);
         $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        Query::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'gpa' => $request->gpa,
            'subject' => $request->subject,
            'degree_level' => $request->degree_level,
            'preferred_destination'=>$request->preferred_destination,
            'city' => $request->city,
            'country' => $request->country,
            
        ]);

        return view('formsubmit',['location'=>$location]);
    }

    public function getassessmentdata(Request $request)
    {
        // dd($request);
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        $resume = $request->resume;
        
              if($resume == "")
       {
           $new_resume = "No Image";
       }
       else{
        $new_resume = rand().'.'.$resume->getClientOriginalExtension();
        if($resume->getClientOriginalExtension() == "png" || $resume->getClientOriginalExtension() == "jpg" || $resume->getClientOriginalExtension() == "jpeg" || $resume->getClientOriginalExtension() == "PNG" || $resume->getClientOriginalExtension() == "JPG" || $resume->getClientOriginalExtension() == "JPEG")
        {
            return redirect()->back()->withErrors(['image_message' => 'Please Upload doc or Pdf in the resume section']);
        }
        $resume->move(public_path("resumes"), $new_resume );
           
       }

        Assessment::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'age' => $request->age,
            'marital_status' => $request->marital_status,
            'children' => $request->children,
            'english' => $request->english,
            'french' => $request->french,
            'level_of_studies' => $request->level_of_studies,
            'have_you_ever' => $request->have_you_ever,
            'visa_status' => $request->visa_status,
            'relatives_canada' => $request->relatives_canada,
            'net_worth' => $request->net_worth,
            'information' => $request->information,
            'resume' => $new_resume
        ]);

         return view('formsubmit',['location'=>$location]);

    }
    public function contactus()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('main.contactus',['location'=>$location]);
    }
    public function subscribe_newsletter(Request $request)
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        Subscriber::create([
            'email' => $request->email
            ]);
        return view('formsubmit',['location'=>$location]);
        
    }
    
    public function kaplan_march_sale()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('landingpage.kaplan_march_sale',['location'=>$location]);
    }

    public function kaplan_biochemistry_lecture()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('landingpage.kaplan_biochemistry_lecture',['location'=>$location]);
    }
    public function immigration_to_canada()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('landingpage.immigration-to-canada',['location'=>$location]);
    }
    public function immigration_entries()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        $getassessment = Assessment::orderBy('id','DESC')->paginate(10);
        $totalentries = Assessment :: count();
        return view('immigration_entries',['getassessment'=>$getassessment,'totalentries'=>$totalentries,'location'=>$location]);
        
    }
    
    public function general_entries()
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        $getassessment = Query::orderBy('id','DESC')->paginate(10);
        $totalentries = Query :: count();
        return view('general_entries',['getassessment'=>$getassessment,'totalentries'=>$totalentries,'location'=>$location]);
        
    }

}
