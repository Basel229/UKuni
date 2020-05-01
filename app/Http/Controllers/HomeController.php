<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\University;
use App\Course;
use App\Query;
use App\Assessment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->status == "pending" && auth()->user()->account_type == "university") {
            return view('adminpanel.pending');
        }
        elseif (auth()->user()->status == "approve" && auth()->user()->account_type == "university") {
                
                $universitydata = University::all();
                $coursedata = Course::all();
                // $universitydata = University::where('user_id',Auth::id())->get();
                // foreach ($universitydata as $key => $value) {
                //     $universityid = $value->id;
                //     break;
                // }
                // $coursecount = Course::where('university_id',$universityid)->count();

                return view('adminpanel.university',['universitydata'=>$universitydata,'coursedata'=>$coursedata]);    
            
        }
        elseif (auth()->user()->status == "pending" && auth()->user()->account_type == "admin") {
            return view('adminpanel.pending');
        }
        elseif (auth()->user()->status == "approve" && auth()->user()->account_type == "admin") {
            
            $getcourse = Course::count();
            $universitycount = University::count();
            $pendingusercount = User::where('status','pending')->count();
            $generalquerycount = Query::count();
            $immigrationquerycount = Assessment::count();
            $generalcomplete = Query::where('status',null)->count();
            $immigrationcomplete = Assessment::where('status',null)->count();
            

            return view('adminpanel.home',['getcourse'=>$getcourse,'universitycount'=>$universitycount,'pendingusercount'=>$pendingusercount,'generalquerycount'=>$generalquerycount,'immigrationquerycount'=>$immigrationquerycount,'generalcomplete'=>$generalcomplete,'immigrationcomplete'=>$immigrationcomplete]);
        }
        
    }

    public function viewuser()
    {
        // $users = University::with(['user'])->Wherehas('user')->orderBy('id','desc')->get();
        $users = User::all();

        // dd($users);
        return view('adminpanel.viewuser',['users'=>$users]);
    }
    public function viewuniversities()
    {
        $universities = University::all();
        return view ('adminpanel.viewuniversities',['universities'=>$universities]);
    }
    public function previewuniversity($lang,$id)
    {
        // dd($id);
        $finduniversity = University::find($id);
        // dd($finduniversity->name);
        return view('adminpanel.previewuniversity',['finduniversity'=>$finduniversity]);
    }
    public function deleteuniversity($lang,$id)
    {
        // dd($id);
        $findid =  University::find($id);
        $findid->delete();
        return redirect()->back();
        

    }
    public function deleteuser($lang,$id)
    {
        $deleteuser =  User::find($id);
        $deleteuser->delete();
        return redirect()->back();

    }
    public function pendinguser($lang,$id)
    {
        // dd($id);

        return view('adminpanel.userrole',['id'=>$id]);

    }
    public function assignrole(Request $request)
    {  
        $users = User::all();
        $userstatus = User::find($request->id);
        $userstatus->account_type = $request->account_type;
        $userstatus->status = "approve";
        $userstatus->update();
        $pendingusers = User::where('status','pending')->get();
        return view('adminpanel.pendingaccounts',['pendingusers'=>$pendingusers]);

    }
    public function adduniversity()
    {
        $universitydata = University::all();
        return view('adminpanel.adduniversity',['universitydata'=>$universitydata]);
    }
    public function universitydata(Request $request)
    {
        $universitydata = University::all();

        $logo = $request->logo;
          // dd($logo->getClientOriginalExtension());
        $new_logo = rand().'.'.$logo->getClientOriginalExtension();

        $logo->move(public_path("logo"), $new_logo );
        University::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
            'logo' => $new_logo,
            'country' => $request->country,
            'city' => $request->city,
            'area' => $request->area,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone
            
        ]);
        return view('adminpanel.confirm',['universitydata'=>$universitydata]);
    }
    public function universitydetail()
    {
        $universitydata = University::all();
        $getdata = University::where('user_id',Auth::id())->get();
        return view('adminpanel.universitydetail',['universitydata'=>$universitydata,'getdata'=>$getdata]);
    }
    public function updateuniversitydata(Request $request)
    {
        $updatedata = University::find($request->id);
        $updatedata->name = $request->name;
        $updatedata->description = $request->description;
        $updatedata->type = $request->type;
        $updatedata->country = $request->country;
        $updatedata->city = $request->city;
        $updatedata->area = $request->area;
        $updatedata->address = $request->address;
        $updatedata->phone = $request->phone;
        $updatedata->email = $request->email;
        if($request->logo == null){
            $updatedata->update();
        }
        else
        {

        $logo = $request->logo;
          // dd($logo->getClientOriginalExtension());
        $new_logo = rand().'.'.$logo->getClientOriginalExtension();

        $logo->move(public_path("logo"), $new_logo );
        $updatedata->logo = $new_logo;
        $updatedata->update();
        }
        return redirect()->back();
    }

    public function addcourse()
    {

       
            $universitydata = University::all();
        return view('adminpanel.addcourse',['universitydata'=>$universitydata]);
        
        
    }
    public function coursedata(Request $request)
    {
        // dd($request);
        $universitydata = University::where('user_id',Auth::id())->get();
        foreach ($universitydata as $key => $value) {
            $universityid = $value->id;
            break;
        }
        // dd($universityid);
        Course::create([
            'university_id' => $universityid,
            'discipline' => $request->discipline,
            'degree_title' => $request->degree_title,
            'level' => $request->level,
            'duration' => $request->duration,
            'type' => $request->type,
            'session' => $request->session,
        ]);
        return redirect()->back()->with('message','Course Added Successfully');
    }

    public function viewcourse()
    {
        $universitydata = University::all();
        $universitydata = University::where('user_id',Auth::id())->get();
        foreach ($universitydata as $key => $value) {
            $universityid = $value->id;
            break;
        }
        $getcourse = Course::where('university_id',$universityid)->get();
        // dd($getcourse);
        return view('adminpanel.viewcourse',['universitydata'=>$universitydata,'getcourse'=>$getcourse]);

    }

    public function deletecourse($lang,$id)
    {
        // dd($id);
        $deletecourse =  Course::find($id);
        $deletecourse->delete();
        return redirect()->back();
    }

    public function pendingaccounts()
    {
        $pendingusers = User::where('status','pending')->get();
        return view('adminpanel.pendingaccounts',['pendingusers'=>$pendingusers]);
    }
    public function adminviewcourses()
    {
        $getcourses = Course::all();
        return view('adminpanel.adminviewcourses',['getcourses'=>$getcourses]);
    }

    public function generalinquiry()
    {
        $getgeneralquery = Query::all();
        return view('adminpanel.generalinquiry',['getgeneralquery'=>$getgeneralquery]);
    }

    public function immigrationinquiry()
    {
        $getimmigrationquery = Assessment::all();
        return view('adminpanel.immigrationinquiry',['getimmigrationquery'=>$getimmigrationquery]);
    }

    public function deletegeneralquery($lang,$id)
    {
        // dd($id);
        $deleteid = Query::find($id);
        $deleteid->delete();
        return redirect()->back();
    }
    public function deleteimmigrationquery($lang,$id)
    {
        // dd($id);
        $deleteid = Assessment::find($id);
        $deleteid->delete();
        return redirect()->back();
    }
    public function viewgeneralquery($lang,$id)
    {
        // dd($id);
        $viewid = Query::find($id);
        // dd($viewid->name);
        return view('adminpanel.viewgeneralquery',['viewid'=>$viewid]);
    }
    public function completegeneralquery($lang,$id)
    {
        // dd($id);
        $viewid = Query::find($id);
        $viewid->status = "complete";
        $viewid->update();
        return redirect()->back();
    }
    public function completeimmigrationquery($lang,$id)
    {
        // dd($id);
        $viewid = Assessment::find($id);
        $viewid->status = "complete";
        $viewid->update();
        return redirect()->back();
    }
    public function viewimmigrationquery($lang,$id)
    {   
        // dd($id);
        $viewid = Assessment::find($id);
        // dd($viewid->name);
        return view('adminpanel.viewimmigrationquery',['viewid'=>$viewid]);
    }
}
