@extends('admin.master')
@section('maincontent')
    <div class="col-md-2"></div>
    <div class="col-md-10 my-5">
        @foreach($errors->all() as $error)
            <ul>
                <li class="text-danger">{{$error}}</li>
            </ul>
        @endforeach
        <form role="form" method="post" action="{{route('admin.teachers.update',['teacher'=>$teacher->id])}}">
            @method('put')
            @csrf
                <div class="form-group">
                    <label> نام دبیر </label>
                    <input  class="form-control" name="name" value="{{$teacher->name}}">
                </div>

            <div class="form-group">
                <label>سن دبیر </label>
                <input  class="form-control" name="age" value="{{$teacher->age}}">
            </div>


            <div class="form-group">
                <label>کد ملی</label>
                <input  class="form-control" name="national_code" value="{{$teacher->national_code}}">
            </div>


            <div class="form-group">
                <label>شماره موبایل</label>
                <input  class="form-control" name="number" value="{{$teacher->number}}">
            </div>


                <button type="submit" class="btn btn-primary">ویرایش مشخصات دبیر </button>
        </form>

    </div>

@endsection
