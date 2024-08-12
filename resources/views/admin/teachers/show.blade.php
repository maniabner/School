@extends('admin.master')
@section('maincontent')
    <div class="col-md-3"></div>
    <div class="col-md-9 my-5">


        <div class="form-group">
            <label>نام دبیر</label>
            <input  class="form-control" name="name" value="{{$teacher->name}}" readonly>
        </div>

        <div class="form-group">
            <label>سن دبیر</label>
            <input  class="form-control" name="type" value="{{$teacher->age}}" readonly>
        </div>

        <div class="form-group">
            <label>کد ملی</label>
            <input  class="form-control" name="national_code" value="{{$teacher->national_code}}" readonly>
        </div>

        <div class="form-group">
            <label>شماره موبایل</label>
            <input  class="form-control" name="mobile" value="{{$teacher->number}}" readonly>
        </div>


        <a href="{{route('admin.teachers.index')}}"><button class="btn btn-dark">بازگشت</button></a>

    </div>

@endsection
