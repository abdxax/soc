@extends('layout._userLayout')
@section('main-section')

    <div class="container">
        <div class="text-center">
            <h4>اضافة تقرير الجديد </h4>
            <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">انشاء تقرير جديد</a>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">تقرير جديد</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="post">
                            @csrf
                        <div class="modal-body">

                            <div class="form-group mt-2">
                                 <input type="text" class="form-control" name="sysName" placeholder="اسم النظام">
                            </div>

                            <div class="form-group mt-2">
                                <input type="text" class="form-control" name="sysurl" placeholder="الرابط">
                            </div>

                            <div class="form-group mt-2">
                               <textarea class="form-control" name="note" cols="4" rows="4" placeholder="التفاصيل"></textarea>
                            </div>

                            <div class="form-group mt-2">
                               <select class="form-select" name="depart">
                                   @foreach($departmets as $depart)
                                       <option value="{{$depart->id}}">{{$depart->dep_name}}</option>
                                   @endforeach
                               </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                            <input type="submit" name="sub" class="btn btn-success" value="انشاء التقرير ">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-10">
            <table class="table">
                <thead>
                <tr>
                    <th></th>
                    <th>النظام</th>
                    <th>الرابط</th>
                    <th>الحالة</th>
                    <th>التفاصيل</th>
                </tr>
                </thead>
                <tbody>
                @foreach($erpsrts as $report)
                    <tr>
                        <td></td>
                        <td>{{$report->system_name}}</td>
                        <td>{{$report->system_url}}</td>
                        <td>
                            @if($report->report_status==1)
                                <span>جديد</span>
                            @elseif($report->report_status==2)
                                <span>محولة</span>
                            @else
                                <span>تم الاغلاق</span>
                            @endif
                        </td>
                        <td><a href="{{route('user.showReport',$report->id)}}" class="btn btn-info">التقاصيل</a> </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection

