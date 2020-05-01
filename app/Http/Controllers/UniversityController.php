<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Ukstudy;
use App\Query;
use App\Assessment;
use App\Nzstudy;
use App\Ausstudy;
use App\Canadastudy;
use App\Irelandstudy;
use App\Middleeaststudy;
use App\Usastudy;
use Illuminate\Support\Facades\Input;
use App\Ukuniversityquery;
use App\Nzuniversityquery;
use App\Ausuniversityquery;
use App\Canadauniversityquery;
use App\Irelanduniversityquery;
use App\Middleeastuniversityquery;
use App\Usauniversityquery;



class UniversityController extends Controller
{
    // Country Selected
    public function countryselected(Request $request)
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;

        $defaultvalue = "null";
        if($request->country == "Study in UK"){

            
        
        
        $ukstudy = Ukstudy::all();
        //dd($ukstudy);
        
        foreach ($ukstudy as $key => $value) {
            if($defaultvalue == "null"){
                $defaultvalue = $value->discipline;
                $selecteddata[] = $value->discipline;

            }   
            elseif ($defaultvalue != $value->discipline) {
                $selecteddata[] = $value->discipline;
                $defaultvalue = $value->discipline;
                // dd($defaultvalue);
            }
               
           

        }
        $totalcount = count($selecteddata);

        
        return view('countries.study_in_uk',['location'=>$location,'totalcount'=>$totalcount,'selecteddata'=>$selecteddata,]);
        }
        if($request->country == "Study in USA"){
            return view('countries.study_in_usa',['location'=> $location]);
        }
        if($request->country == "Study in Australia"){
            return view('countries.study_in_australia',['location'=> $location]);
        }
        if($request->country == "Study in New Zealand"){
            return view('countries.study_in_new_zealand',['location'=> $location]);
        }
        if($request->country == "Study in Canada"){
            return view('countries.study_in_canada',['location'=> $location]);
        }
        if($request->country == "Study in Ireland"){
            return view('countries.study_in_ireland',['location'=> $location]);
        }
        if($request->country == "Study in Middle East"){
            return view('countries.study_in_middleeast',['location'=> $location]);
        }
    }

    // Study In UK
    public function ukuniversities(Request $request)
    {
         $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
       
        if($request->level == "" && $request->discipline == "" && $request->university == ""){
            $desired_data = Ukstudy::paginate(6);
            return view('universitysearch.ukuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
         if($request->level != "" && $request->discipline == "" && $request->university == ""){
            $desired_data = Ukstudy::where('level',$request->level)->paginate(6);
              // dd($desired_data);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.ukuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline != "" && $request->university == ""){
            $desired_data = Ukstudy::where('discipline',$request->discipline)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.ukuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline == "" && $request->university != ""){
            $desired_data = Ukstudy::where('university',$request->university)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.ukuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline != "" && $request->university == ""){
            $desired_data = Ukstudy::where('level',$request->level)->where('discipline',$request->discipline)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.ukuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline != "" && $request->university != ""){
            $desired_data = Ukstudy::where('discipline',$request->discipline)->where('university',$request->discipline)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.ukuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline == "" && $request->university != ""){
            $desired_data = Ukstudy::where('level',$request->level)->where('university',$request->university)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.ukuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline != "" && $request->university != ""){
           $desired_data = Ukstudy::where('level',$request->level)->where('discipline',$request->discipline)->where('university',$request->university)->paginate(6);
           if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.ukuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
       
    }
	public function ukselectedcourse($id)
    {   
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        
        $dataselected = Ukstudy::find($id);
          // dd($dataselected);
        
        return view('selectedcourse.ukselectedcourse',['location'=>$location,'dataselected'=>$dataselected]);
    }
    public function getukselecteduniversitydata(Request $request)
    {
        // dd($request);
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        $name = $request->name;
        $university = $request->university;
        Ukuniversityquery::create([

            'name'=> $request->name,
            'email'=> $request->email,
            'phone_number'=> $request->phone_number,
            'gpa'=> $request->gpa,
            'discipline'=> $request->discipline,
            'university'=> $request->university,
            'degree_title'=> $request->degree_title,
            'level'=> $request->level,
            'duration'=> $request->duration,
            'type'=> $request->type,
            'session'=> $request->session,

        ]);
        return view('thankyou',['location'=>$location,'name'=>$name,'university'=>$university]);
    }
        
        
        
        

    // Study In New Zealand
    public function nzuniversities(Request $request)
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        // dd($request->level);
        if($request->level == "" && $request->discipline == "" && $request->university == ""){
            $desired_data = Nzstudy::paginate(6);
            return view('universitysearch.nzuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline == "" && $request->university == ""){
            $desired_data = Nzstudy::where('level',$request->level)->paginate(6);
             // dd($desired_data);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.nzuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline != "" && $request->university == ""){
            $desired_data = Nzstudy::where('discipline',$request->discipline)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.nzuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline == "" && $request->university != ""){
            $desired_data = Nzstudy::where('university',$request->university)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.nzuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline != "" && $request->university == ""){
            $desired_data = Nzstudy::where('level',$request->level)->where('discipline',$request->discipline)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.nzuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline != "" && $request->university != ""){
            $desired_data = Nzstudy::where('discipline',$request->discipline)->where('university',$request->discipline)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.nzuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline == "" && $request->university != ""){
            $desired_data = Nzstudy::where('level',$request->level)->where('university',$request->university)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.nzuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline != "" && $request->university != ""){
           $desired_data = Nzstudy::where('level',$request->level)->where('discipline',$request->discipline)->where('university',$request->university)->paginate(6);
           if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.nzuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
    }

    public function nzselectedcourse($id)
    {   
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        
        $dataselected = Nzstudy::find($id);
          // dd($dataselected);
        
        return view('selectedcourse.nzselectedcourse',['location'=>$location,'dataselected'=>$dataselected]);
    }
    public function getnzselecteduniversitydata(Request $request)
    {
         // dd($request);
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        $name = $request->name;
        $university = $request->university;
        Nzuniversityquery::create([

            'name'=> $request->name,
            'email'=> $request->email,
            'phone_number'=> $request->phone_number,
            'gpa'=> $request->gpa,
            'discipline'=> $request->discipline,
            'degree_title'=> $request->degree_title,
            'university'=> $request->university,
            'time'=> $request->time,

        ]);
        return view('thankyou',['location'=>$location,'name'=>$name,'university'=>$university]);
    }

    // Study In Australia
    public function ausuniversities(Request $request)
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        // dd($request->level);
        if($request->level == "" && $request->discipline == "" && $request->university == ""){
            $desired_data = Ausstudy::paginate(6);
            return view('universitysearch.ausuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline == "" && $request->university == ""){
            $desired_data = Ausstudy::where('level',$request->level)->paginate(6);
             // dd($desired_data);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.ausuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline != "" && $request->university == ""){
            $desired_data = Ausstudy::where('discipline',$request->discipline)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.ausuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline == "" && $request->university != ""){
            $desired_data = Ausstudy::where('university',$request->university)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.ausuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline != "" && $request->university == ""){
            $desired_data = Ausstudy::where('level',$request->level)->where('discipline',$request->discipline)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.ausuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline != "" && $request->university != ""){
            $desired_data = Ausstudy::where('discipline',$request->discipline)->where('university',$request->discipline)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.ausuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline == "" && $request->university != ""){
            $desired_data = Ausstudy::where('level',$request->level)->where('university',$request->university)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.ausuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline != "" && $request->university != ""){
           $desired_data = Ausstudy::where('level',$request->level)->where('discipline',$request->discipline)->where('university',$request->university)->paginate(6);

           if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.ausuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
    }

    public function ausselectedcourse($id)
    {   
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        
        $dataselected = Ausstudy::find($id);
          // dd($dataselected);
        
        return view('selectedcourse.ausselectedcourse',['location'=>$location,'dataselected'=>$dataselected]);
    }
    public function getausselecteduniversitydata(Request $request)
    {
         // dd($request);
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        $name = $request->name;
        $university = $request->university;
        Ausuniversityquery::create([

            'name'=> $request->name,
            'email'=> $request->email,
            'phone_number'=> $request->phone_number,
            'gpa'=> $request->gpa,
            'discipline'=> $request->discipline,
            'degree_title'=> $request->degree_title,
            'university'=> $request->university,
            'time'=> $request->time,

        ]);
        return view('thankyou',['location'=>$location,'name'=>$name,'university'=>$university]);
    }

    // Study In Canada
    public function canadauniversities(Request $request)
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        // dd($request->level);
        if($request->level == "" && $request->discipline == "" && $request->university == ""){
            $desired_data = Canadastudy::paginate(6);
            return view('universitysearch.canadauniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline == "" && $request->university == ""){
            $desired_data = Canadastudy::where('level',$request->level)->paginate(6);
             // dd($desired_data);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.canadauniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline != "" && $request->university == ""){
            $desired_data = Canadastudy::where('discipline',$request->discipline)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.canadauniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline == "" && $request->university != ""){
            // dd($request->university);
            $desired_data = Canadastudy::where('university',$request->university)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.canadauniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline != "" && $request->university == ""){
            $desired_data = Canadastudy::where('level',$request->level)->where('discipline',$request->discipline)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.canadauniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline != "" && $request->university != ""){
            $desired_data = Canadastudy::where('discipline',$request->discipline)->where('university',$request->discipline)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.canadauniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline == "" && $request->university != ""){
            $desired_data = Canadastudy::where('level',$request->level)->where('university',$request->university)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.canadauniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline != "" && $request->university != ""){
           $desired_data = Canadastudy::where('level',$request->level)->where('discipline',$request->discipline)->where('university',$request->university)->paginate(6);

           if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.canadauniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
    }

    public function canadaselectedcourse($id)
    {   
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        
        $dataselected = Canadastudy::find($id);
           // dd($dataselected);
        
        return view('selectedcourse.canadaselectedcourse',['location'=>$location,'dataselected'=>$dataselected]);
    }
    public function getcanadaselecteduniversitydata(Request $request)
    {
         // dd($request);
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        $name = $request->name;
        $university = $request->university;
        Canadauniversityquery::create([

            'name'=> $request->name,
            'email'=> $request->email,
            'phone_number'=> $request->phone_number,
            'gpa'=> $request->gpa,
            'discipline'=> $request->discipline,
            'degree_title'=> $request->degree_title,
            'university'=> $request->university,
            'time'=> $request->time,

        ]);
        return view('thankyou',['location'=>$location,'name'=>$name,'university'=>$university]);
    }


// Study In Ireland
    public function irelanduniversities(Request $request)
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        // dd($request->level);
        if($request->level == "" && $request->discipline == "" && $request->university == ""){
            $desired_data = Irelandstudy::paginate(6);
            return view('universitysearch.irelanduniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline == "" && $request->university == ""){
            $desired_data = Irelandstudy::where('level',$request->level)->paginate(6);
             // dd($desired_data);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.irelanduniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline != "" && $request->university == ""){
            $desired_data = Irelandstudy::where('discipline',$request->discipline)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.irelanduniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline == "" && $request->university != ""){
            $desired_data = Irelandstudy::where('university',$request->university)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.irelanduniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline != "" && $request->university == ""){
            $desired_data = Irelandstudy::where('level',$request->level)->where('discipline',$request->discipline)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.irelanduniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline != "" && $request->university != ""){
            $desired_data = Irelandstudy::where('discipline',$request->discipline)->where('university',$request->discipline)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.irelanduniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline == "" && $request->university != ""){
            $desired_data = Irelandstudy::where('level',$request->level)->where('university',$request->university)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.irelanduniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline != "" && $request->university != ""){
           $desired_data = Irelandstudy::where('level',$request->level)->where('discipline',$request->discipline)->where('university',$request->university)->paginate(6);

           if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.irelanduniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
    }

    public function irelandselectedcourse($id)
    {   
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        
        $dataselected = Irelandstudy::find($id);
           // dd($dataselected);
        
        return view('selectedcourse.irelandselectedcourse',['location'=>$location,'dataselected'=>$dataselected]);
    }
    public function getirelandselecteduniversitydata(Request $request)
    {
         // dd($request);
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        $name = $request->name;
        $university = $request->university;
        Irelanduniversityquery::create([

            'name'=> $request->name,
            'email'=> $request->email,
            'phone_number'=> $request->phone_number,
            'gpa'=> $request->gpa,
            'discipline'=> $request->discipline,
            'degree_title'=> $request->degree_title,
            'university'=> $request->university,
            'time'=> $request->time,

        ]);
        return view('thankyou',['location'=>$location,'name'=>$name,'university'=>$university]);
    }

// Study In Middle East
    public function middleeastuniversities(Request $request)
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        // dd($request->level);
        if($request->level == "" && $request->discipline == "" && $request->university == ""){
            $desired_data = Middleeaststudy::paginate(6);
            return view('universitysearch.middleeastuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline == "" && $request->university == ""){
            $desired_data = Middleeaststudy::where('level',$request->level)->paginate(6);
             // dd($desired_data);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.middleeastuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline != "" && $request->university == ""){
            $desired_data = Middleeaststudy::where('discipline',$request->discipline)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.middleeastuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline == "" && $request->university != ""){
            $desired_data = Middleeaststudy::where('university',$request->university)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.middleeastuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline != "" && $request->university == ""){
            $desired_data = Middleeaststudy::where('level',$request->level)->where('discipline',$request->discipline)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.middleeastuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline != "" && $request->university != ""){
            $desired_data = Middleeaststudy::where('discipline',$request->discipline)->where('university',$request->discipline)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.middleeastuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline == "" && $request->university != ""){
            $desired_data = Middleeaststudy::where('level',$request->level)->where('university',$request->university)->paginate(6);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.middleeastuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline != "" && $request->university != ""){
           $desired_data = Middleeaststudy::where('level',$request->level)->where('discipline',$request->discipline)->where('university',$request->university)->paginate(6);

           if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.middleeastuniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
    }

    public function middleeastselectedcourse($id)
    {   
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        
        $dataselected = Middleeaststudy::find($id);
           // dd($dataselected);
        
        return view('selectedcourse.middleeastselectedcourse',['location'=>$location,'dataselected'=>$dataselected]);
    }
    public function getmiddleeastselecteduniversitydata(Request $request)
    {
         // dd($request);
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        $name = $request->name;
        $university = $request->university;
        Middleeastuniversityquery::create([

            'name'=> $request->name,
            'email'=> $request->email,
            'phone_number'=> $request->phone_number,
            'gpa'=> $request->gpa,
            'discipline'=> $request->discipline,
            'degree_title'=> $request->degree_title,
            'university'=> $request->university,
            'time'=> $request->time,

        ]);
        return view('thankyou',['location'=>$location,'name'=>$name,'university'=>$university]);
    }

// Study In USA
    public function usauniversities(Request $request)
    {
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        // dd($request->level);
        if($request->level == "" && $request->discipline == "" && $request->university == ""){
            $desired_data = Usastudy::paginate(10);
            return view('universitysearch.usauniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline == "" && $request->university == ""){
            $desired_data = Usastudy::where('level',$request->level)->paginate(10);
             // dd($desired_data);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.usauniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline != "" && $request->university == ""){
            $desired_data = Usastudy::where('discipline',$request->discipline)->paginate(10);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.usauniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline == "" && $request->university != ""){
            $desired_data = Usastudy::where('university',$request->university)->paginate(10);
            // dd($request->university);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.usauniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline != "" && $request->university == ""){
            $desired_data = Usastudy::where('level',$request->level)->where('discipline',$request->discipline)->paginate(10);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.usauniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level == "" && $request->discipline != "" && $request->university != ""){
            $desired_data = Usastudy::where('discipline',$request->discipline)->where('university',$request->discipline)->paginate(10);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.usauniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline == "" && $request->university != ""){
            $desired_data = Usastudy::where('level',$request->level)->where('university',$request->university)->paginate(10);
            if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.usauniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
        if($request->level != "" && $request->discipline != "" && $request->university != ""){
           $desired_data = Usastudy::where('level',$request->level)->where('discipline',$request->discipline)->where('university',$request->university)->paginate(10);

           if ($desired_data == "") {
               return redirect()->back()->with('message','Am unable to find any course matching your search criteria, could you please try other options?');
           }
            return view('universitysearch.universitysearch.usauniversities',['location'=>$location,'desired_data'=>$desired_data]);
        }
    }

    public function usaselectedcourse($id)
    {   
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        
        $dataselected = Usastudy::find($id);
           // dd($dataselected);
        
        return view('selectedcourse.usaselectedcourse',['location'=>$location,'dataselected'=>$dataselected]);
    }
    public function getusaselecteduniversitydata(Request $request)
    {
         // dd($request);
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        $name = $request->name;
        $university = $request->university;
        Usauniversityquery::create([

            'name'=> $request->name,
            'email'=> $request->email,
            'phone_number'=> $request->phone_number,
            'gpa'=> $request->gpa,
            'discipline'=> $request->discipline,
            'degree_title'=> $request->degree_title,
            'university'=> $request->university,
            'time'=> $request->time,

        ]);
        return view('thankyou',['location'=>$location,'name'=>$name,'university'=>$university]);
    }

    public function thankyou(){
        $arr_ip = geoip()->getLocation($_SERVER['REMOTE_ADDR']); 
        $location = $arr_ip->country;
        return view('thankyou',['location'=>$location]);
    }
   
    
}
