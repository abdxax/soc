@extends('layout._userLayout')
@section('main-section')
<div class="container">
<div class="row justify-content-center">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <div class="text-item">
                   <p>النظام : {{$report->system_name}}</p>
                    <p>الرابط : {{$report->system_url}}</p>
                    <p>الحالة : @if($report->report_status==1)
                                    <span>جديد</span>
                        @elseif($report->report_status==2)
                            <span>محوله</span>
                        @else
                            <span>مغلق</span>
                    @endif</p>
                </div>
            </div>
        </div>

        <div class="السجل ">
            @foreach($report->trancatios as $tr)
                <div class="card">
                    <div class="card-body">
                        <p>{{$tr->note}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</div>
@endsection
