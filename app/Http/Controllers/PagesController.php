<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PendingReport;
use App\ReportType;
use App\Report;
use App\Agency;
use App\Client;
use App\User;

class PagesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function addAgency() {
        return view('pages.addAgency');
    }
    public function addPersonal(Request $request) {
        $type = $request->type;
        $agencies = Agency::all();
        return view('pages.addPersonal')->with(['type'=>$type, 'agencies'=>$agencies, '']);
    }
    public function addReport(Request $request) {
        $pendingReport = PendingReport::find($request->pending_id);
        $report = ReportType::find($pendingReport->report_type_id);
        
        return view('pages.addReport')->with(['pendingReport'=>$pendingReport, 'type'=>$report->type]);
    }
    public function allAgencies() {
        $agencies = Agency::all();
        return view('pages.allAgencies')->with(['agencies'=>$agencies]);
    }
    public function allReports(Request $request) {
        $type = $request->type;
        if($type == 'all') {
            $reports = Report::all();
        } else {
            $type_id = ReportType::where('type',$type)->get()[0]->id;
            $reports = Report::where('report_type_id', $type_id)->get();
        }

        // Getting values for the search section
        $users = User::all();
        $agencies = Agency::all();
        $reportTypes = ReportType::all();
        
        return view('pages.allReports')->with(['type'=> $type, 'reports'=>$reports, 'users'=>$users, 'agencies'=>$agencies, 'reportTypes'=>$reportTypes]);
    }
    public function dashboard() {
        return view('pages.dashboard');
    }
    public function editAgency(Request $request) {
        return view('pages.editAgency');
    }
    public function editReport() {
        return view('pages.editReport');
    }
    public function getpendingtemp($id) {
        $pendingReport = PendingReport::find($id);
        
        return view('pages.temppersonal ')->with('pendingReport', $pendingReport);
    }
    public function login() {
        return view('pages.login');
    }
    public function notFound() {
        return view('pages.notfound');
    }
    public function pendingReports() {
        $pendingReports = PendingReport::all();

        // Getting the values for the search
        $users = User::all();
        $agencies = Agency::all();
        $reportTypes = ReportType::all();

        return view('pages.pendingreports')->with(['pendingReports'=>$pendingReports, 'users'=>$users, 'agencies'=>$agencies, 'reportTypes'=>$reportTypes]);
    }
    public function preview($id) {
        return view('pages.preview');
    }
    public function showOutput() {
        return view('pages.showOutput');
    }
    public function showPending($id) {
        $pendingReport = PendingReport::find($id);
        $agency = Agency::find($pendingReport->agency_id);
        return view('pages.showpending')->with(['pendingReport'=>$pendingReport, 'agency'=>$agency]);
    }
    public function viewAgency($id) {
        $agency = Agency::find($id);
        $user = User::find($agency->user_id)->name;
        return view('pages.viewAgency')->with(['agency'=>$agency, 'user'=>$user]);
    }
    public function viewReport($id) {
        $report = Report::find($id);
        $pendingReport = Client::find($report->client_id);
        $agency = Agency::find($pendingReport->agency_id)->name;
        $type = ReportType::find($report->report_type_id)->type;
        return view('pages.printprev')->with(['report'=>$report, 'pendingReport'=>$pendingReport, 'type'=>$type, 'agency'=>$agency]);
    }
}
