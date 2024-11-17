@extends('layout._userLayout')
@section('main-section')
<div class="container">
    <div class="text-center mt-2">
        <h5>اضافة مستخدم جديد </h5>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">اضافة مستخدم</button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">اضافة مستخدم جديد</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post">
                        @csrf
                    <div class="modal-body">
                        <div class="form-group mt-1">
                            <input type="text" name="name" class="form-control" placeholder="الاسم">
                        </div>
                        <div class="form-group mt-1">
                            <input type="email" name="email" class="form-control" placeholder="البريد الالكتروني">
                        </div>
                        <div class="form-group mt-1">
                            <input type="password" name="password" class="form-control" placeholder="كلمة المرور ">
                        </div>
                        <div class="form-group mt-1">
                            <select name="depart" class="form-select">
                                @foreach($departments as $dep)
                                    <option value="{{$dep->id}}">{{$dep->dep_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق </button>
                        <input type="submit" name="submit" class="btn btn-success" value="اضافة مستخدم جديد">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-8">
        <table class="table">
            <thead>
            <tr>
                <th></th>
                <th>الاسم</th>
                <th>البريد الكتروني</th>
                <th>القسم</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
               <tr>
                   <td></td>
                   <td>{{$user->information->name}}</td>
                   <td>{{$user->email}}</td>
                   <td>{{$user->information->department->dep_name}}</td>
               </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
