<?php

namespace App\Http\Controllers;

use App\Report;
use App\Belanja;
use App\Sop;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;
use App\Helper\Helper;

class KapitaniController extends BaseController
{
    public function getReportList(Request $request)
    {

        $report_List = Report::all();

        return response()->json(['report_List' => $report_List]);
    
    }

    public function getSopList(Request $request)
    {

        $sop_List = Sop::all();

        return response()->json(['sop_List' => $sop_List]);
    
    }

    public function getBelanjaList(Request $request)
    {

        $belanja_List = Belanja::all();

        return response()->json(['belanja_List' => $belanja_List]);
    
    }

    

    public function getReportDetails(Request $request, $id)
    {
        $report = Report::Where('id_report', '=', $id)->first(); 
        if (!$report){
            return response()->json(['error'=> 'Invalid Report ID.'], 400);
        }
        $sop = Sop::Where('id_sop', '=', $report->sop_id)->first();
        $belanja = Belanja::Where('id_belanja', '=', $report->belanja_id)->first();        
        return response()->json(['report'=> $report, 'sop' =>$sop, 'belanja'=>$belanja], 200);

    }

    
}


?>