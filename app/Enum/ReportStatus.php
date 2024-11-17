<?php

namespace App\Enum;

use Illuminate\Validation\Rules\Enum;

class ReportStatus extends Enum
{
 const REPORT_NEW=1;
 const REPORT_TRANS=2;
 const REPORT_CLOSE=3;
}
