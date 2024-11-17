<?php

namespace App\services;

use App\DTO\CreateReportDTO;
use App\Models\Department;
use App\Models\Report;
use App\Models\ReportTranscation;
use Illuminate\Support\Facades\DB;

class ReportService
{
  public function ReportUser($user)
  {
      $reports=Report::where('user_id',$user)->get();
      return $reports;
  }
    public function getDepartment()
    {
        return Department::all();
    }

    public function createReport(CreateReportDTO $createReportDTO):bool
    {
        DB::beginTransaction();
        try {
            //Create Report
           $report=new Report();
           $report->system_name=$createReportDTO->getSysName();
           $report->system_url=$createReportDTO->getSysUrl();
           $report->user_id=$createReportDTO->getUserId();
           $report->save();

           //Create Tranc
            $rep_tran=new ReportTranscation();
            $rep_tran->report_id=$report->id;
            $rep_tran->depart_from_id=$createReportDTO->getFromDepart();
            $rep_tran->depart_to_id=$createReportDTO->getDepart();
            $rep_tran->note=$createReportDTO->getNote();
            $rep_tran->save();
            DB::commit();
            return true;

        }
        catch (\Exception $ex){
            DB::rollback();
            return false;
        }
        return false;

    }

    public function showReport($id)
    {
        return Report::find($id);
    }

}
