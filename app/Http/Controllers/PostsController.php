<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

use App\User;
use App\PendingReport;
use App\Client;
use App\ReportType;
use App\Report;
use App\Agency;
use Auth;
use DB;

class PostsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function pendingOrReport(Request $request) {
        
        // Adding the client's personal details
        $client = new Client();
        $client->name = $request->full_name;
        $client->address = $request->address;
        $client->destination = $request->departure;
        $client->position_applied = $request->position;
        $client->agency_id = $request->agency;
        $client->passport_no = $request->passport_no;
        $client->nationality = $request->nationality;
        $client->age = $request->age;
        $client->sex = $request->sex;
        $client->marital = $request->marital;
        $client->height = $request->height;
        $client->weight = $request->weight;
        $client->llno = $request->llno;
        $client->place_of_issue = $request->place_of_issue;
        $client->save();

        // Adding the Pending reports details
        $reportId = ReportType::where('type', $request->type)->get()[0]->id;
        
        $pendingReport = new PendingReport();
        $pendingReport->user_id = Auth()->user()->id;
        $pendingReport->client_id = $client->id;
        $pendingReport->report_type_id = $reportId;
        $pendingReport->name = $request->full_name;
        $pendingReport->address = $request->address;
        $pendingReport->destination = $request->departure;
        $pendingReport->position_applied = $request->position;
        $pendingReport->agency_id = $request->agency;
        $pendingReport->passport_no = $request->passport_no;
        $pendingReport->nationality = $request->nationality;
        $pendingReport->age = $request->age;
        $pendingReport->sex = $request->sex;
        $pendingReport->marital = $request->marital;
        $pendingReport->height = $request->height;
        $pendingReport->weight = $request->weight;
        $pendingReport->llno = $request->llno;
        $pendingReport->place_of_issue = $request->place_of_issue;
        
        // Handle File Upload
        if($request->file('prof_img')) {
            $filenameWithExt = $request->file('prof_img')->getClientOriginalName();
            $fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $ext = $request->file('prof_img')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$ext;
            $request->file('prof_img')->storeAs('public/prof_image', $fileNameToStore);
            $pendingReport->image_url = $fileNameToStore;
        } else {
            $pendingReport->image_url = 'photos/noimage.jpg';
        }

        $pendingReport->save();

        if($request->submit == 'CREATE REPORT') {
            return redirect("getpendingtemp/$pendingReport->id");
        }
        if($request->submit == 'ADD TO PENDING') {
            return redirect('pendingreports');
        }
        return redirect('/');
    }
    public function saveReport(Request $request) {
        $report = new Report();

        $report->user_id = $request->user_id;
        $report->client_id = $request->client_id;
        $report->report_type_id = $request->report_type_id;
        $report->agency_id = $request->agency_id;
        $report->general_deformities = $request->general_deformities;
        $report->general_anaemia = $request->general_anaemia;
        $report->general_jaundice = $request->general_jaundice;
        $report->general_varicose_vein = $request->general_varicose_vein;
        $report->general_goitre = $request->general_goiter;
        $report->general_skin = $request->general_skin;
        $report->vision_left = $request->vission_left;
        $report->vision_right = $request->vission_right;
        $report->hearing_left = $request->hearing_left;
        $report->hearing_right = $request->hearing_right;
        $report->cardio_pulse = $request->general_pulse;
        $report->cardio_blood_presure = $request->general_blood_pressure;
        $report->cardio_heart_sound = $request->general_heart_sound;
        $report->respiratory_lungs = $request->general_lungs_output.'-'.$request->general_lungs_desc;
        $report->respiratory_chest_x_ray = $request->general_chest_x_ray;
        $report->gastrointestinal_abdomen = $request->general_abdomen;
        $report->gastrointestinal_hernia = $request->general_hernia;
        $report->genitourinary_hydrocele = $request->general_hydrocele;
        $report->genitourinary_orchitis = $request->general_orchitis;
        $report->locomotor_gait = $request->general_gait;
        $report->locomotor_joints = $request->general_joints;
        $report->locomotor_extremities = $request->general_extremitites;
        $report->other_remarks = $request->general_other_locomotion;
        $report->urine_sugar = $request->urine_sugar;
        $report->urine_albumin = $request->urine_albumin;
        $report->urine_hcg = '';
        $report->stool_helminths = $request->stool_helminths;
        $report->stool_bilharziasis = $request->stool_bilhaziasis;
        $report->stool_salmonella_shigella = $request->stool_salmonella_shigella;
        $report->stool_others = $request->stool_other;
        $report->blood_group = $request->blood_group;
        $report->blood_haemoglobin = $request->blood_haemoglobin;
        $report->blood_esr = $request->blood_esr;
        $report->blood_malaria_film = $request->blood_malaria;
        $report->blood_micro_filaris = $request->blood_micro_filariasis;
        $report->serology_vdrl = $request->serelogy_vdrl;
        $report->serology_tpha = $request->serelogy_thpa;
        $report->serology_hiv = $request->serelogy_hiv;
        $report->serology_hb = $request->serelogy_hb;
        $report->serology_hep = $request->serelogy_hep;
        $report->serology_hcv = $request->serelogy_hcv;
        $report->serology_pregnancy = $request->serelogy_pregnancy;
        $report->serology_fbs = $request->serelogy_fbs;
        $report->serology_creatinine = $request->serelogy_criatinine;
        $report->serology_sgot = $request->serelogy_sgot;
        $report->serology_sgpt = $request->serelogy_sgpt;
        $report->serology_cholesterol = $request->serelogy_total_cholesterol;
        $report->serology_phosphatase = $request->serelogy_alk_phosphate;
        $report->serology_uria = $request->serelogy_blood_uria;
        $report->serology_bilirunin = $request->serology_bilirubin;
        $report->special_notes = $request->special_note;
        $report->urine_hcg = $request->w;
        $report->save();

        $pendingReport = DB::delete("delete from pending_reports where id=$request->pending_id");
        // $pendingReport = PendingReport::find($request->pending_id);
        // $pendingReport->delete();  

        return redirect("/viewreport/$report->id");
    }
    public function printPrev($id) {
        $report = Report::find($id);
        $pendingReport = PendingReport::find($report->id);
        $type = ReportType::find($report->report_type_id)->type;
        return view('pages.printprev')->with(['report'=>$report, 'pendingReport'=>$pendingReport, 'type'=>$type]);
    }
    public function addAgency(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'contact' => 'required',
            'address' => 'required'
        ]);
        $agency = new Agency();
        $agency->name = $request->name;
        $agency->address = $request->address;
        $agency->contact = $request->contact;
        $agency->user_id = auth()->user()->id;
        $agency->save();

        return redirect('allagencies')->with('success', 'Agency is successfully added.');
    }

    // Sarch results
    public function reportSearch() {
        // Getting the user name
        $userName = Input::get('user_name');
        if($userName != "") {
            $user_id = User::where('name', $userName)->get();

            if(count($user_id) > 0) {
                $user_id = $user_id[0]->id;
            } else {
                $user_id = 'no';
            }
        } else {
            $user_id = '%%';
        }
        // Getting the agency
        $agencyId = Input::get('agency');
        if($agencyId == "")
            $agencyId = "%%";
        // Getting the client
        $clientName = Input::get('client_name');
        if($clientName != "") {
            $clientId = Client::where('name', $clientName)->get();
            if(count($clientId) > 0) {
                $clientId = $clientId[0]->id;
            } else {
                $clientId = 'no';
            }
        } else {
            $clientId = "%%";
        }
        // Getting report type
        $reportId = Input::get('report_type');
        if($reportId == "") 
            $reportId = "%%";
        // Getting date from
        $dateFrom = Input::get('date_from');
        if($dateFrom != "") 
            $dateFrom = date('Y-m-d', strtotime($dateFrom));
        else 
            $dateFrom = date('Y-m-d', strtotime('1902-01-01'));
        // Getting date to
        $dateTo = Input::get('date_to');
        if($dateTo != "")
            $dateTo = date('Y-m-d', strtotime($dateTo));
        else
            $dateTo = date('Y-m-d', strtotime('2030-12-31'));            
        $report = Report::where('user_id', 'LIKE', $user_id)
                        ->where('agency_id', 'LIKE', $agencyId)
                        ->where('client_id', 'LIKE', $clientId)
                        ->whereDate('created_at', '>=', $dateFrom)
                        ->whereDate('created_at', '<=', $dateTo)
                        ->where('report_type_id', 'LIKE', $reportId)->get();

        // Getting the values for the search
        $users = User::all();
        $agencies = Agency::all();
        $reportTypes = ReportType::all();

        if(count($report) > 0) {
            return view('pages.search-results')->with(['search-type'=>'report', 'data'=>$report, 'users'=>$users, 'agencies'=>$agencies, 'reportTypes'=>$reportTypes]);
        }else {
            return view('pages.search-results')->with(['error'=>'No User Found', 'users'=>$users, 'agencies'=>$agencies, 'reportTypes'=>$reportTypes]);
        }

        return "No Data found";
    }

    // Search pending resulsts
    public function pendingSearch() {
        // Getting the user name
        $userName = Input::get('user_name');
        if($userName != "") {
            $user_id = User::where('name', $userName)->get();

            if(count($user_id) > 0) {
                $user_id = $user_id[0]->id;
            } else {
                $user_id = 'no';
            }
        } else {
            $user_id = '%%';
        }
        // Getting the agency
        $agencyId = Input::get('agency');
        if($agencyId == "")
            $agencyId = "%%";
        // Getting the client
        $clientName = Input::get('client_name');
        if($clientName != "") {
            $clientId = Client::where('name', $clientName)->get();
            if(count($clientId) > 0) {
                $clientId = $clientId[0]->id;
            } else {
                $clientId = 'no';
            }
        } else {
            $clientId = "%%";
        }
        // Getting report type
        $reportId = Input::get('report_type');
        if($reportId == "") 
            $reportId = "%%";
        // Getting date from
        $dateFrom = Input::get('date_from');
        if($dateFrom != "") 
            $dateFrom = date('Y-m-d', strtotime($dateFrom));
        else 
            $dateFrom = date('Y-m-d', strtotime('1902-01-01'));
        // Getting date to
        $dateTo = Input::get('date_to');
        if($dateTo != "")
            $dateTo = date('Y-m-d', strtotime($dateTo));
        else
            $dateTo = date('Y-m-d', strtotime('2030-12-31'));            
        $report = PendingReport::where('user_id', 'LIKE', $user_id)
                        ->where('agency_id', 'LIKE', $agencyId)
                        ->where('client_id', 'LIKE', $clientId)
                        ->whereDate('created_at', '>=', $dateFrom)
                        ->whereDate('created_at', '<=', $dateTo)
                        ->where('report_type_id', 'LIKE', $reportId)->get();

        // Getting the values for the search
        $users = User::all();
        $agencies = Agency::all();
        $reportTypes = ReportType::all();

        if(count($report) > 0) {
            return view('pages.pending-search')->with(['search-type'=>'report', 'data'=>$report, 'users'=>$users, 'agencies'=>$agencies, 'pendingReports'=>$report, 'reportTypes'=>$reportTypes]);
        }else {
            return view('pages.pending-search')->with(['error'=>'No User Found', 'users'=>$users, 'agencies'=>$agencies, 'reportTypes'=>$reportTypes]);
        }

        return "No Data found";
    }
    
}
