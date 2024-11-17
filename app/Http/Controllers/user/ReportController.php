<?php

namespace App\Http\Controllers\user;

use App\DTO\CreateReportDTO;
use App\Http\Controllers\Controller;
use App\services\ReportService;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    private ReportService $service;


    /**
     * @param ReportService $service
     */
    public function __construct(ReportService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $user=auth()->user();
        if($request->isMethod('post')){
            $valid=$request->validate([
               'sysName' =>'required',
                'sysurl'=>'required',
                'note'=>'required',
                'depart'=>'required'
            ]);
            $repDto=new CreateReportDTO(
                $user->id,
                $valid['sysName'],
                $valid['sysurl'],
                $valid['note'],
                $valid['depart'],
                $user->information->depart_id
            );
            $result=$this->service->createReport($repDto);
            if($result)
                return redirect()->route('user.notice')->with('message','تم ارسال التقرير بنجاح');
            return redirect()->route('user.notice')->with('message-error','الرجاء التاكد من البيانات المدخلة');


        }

        $reports=$this->service->ReportUser($user->id);
        $depart=$this->service->getDepartment();


        $arr=['erpsrts'=>$reports,'departmets'=>$depart];
        return view('user.report',$arr);
    }

    //show Report
    public function showReport($id)
    {
        $user=auth()->user();
        $report=$this->service->showReport($id);
        return view('user.showReport')->with('report',$report);
    }

}
