@extends('admin.master')
@section('maincontent')
    <div class="col-md-3"></div>
    <div class="col-md-9 my-5">
        @foreach($errors->all() as $error)
            <ul>
                <li class="text-danger">{{$error}}</li>
            </ul>
        @endforeach
        <form role="form" method="post" action="{{route('admin.teachers.store')}}">
            @csrf

                <div class="form-group">
                    <label>ثبت دبیر جدید</label>
                    <input  class="form-control" name="name" placeholder="نام دبیر را وارد کنید">
                </div>

            <div class="form-group">
                <label> سن </label>
                <input  class="form-control" name="age" placeholder="سن دبیر را وارد کنید">
            </div>

            <div class="form-group">
                <label> کد ملی</label>
                <input  class="form-control" name="national_code" placeholder="کد ملی را وارد کنید">
            </div>

            <div class="form-group">
                <label>شماره موبایل </label>
                <input  class="form-control" name="number" placeholder="شماره موبایل را وارد کنید">
            </div>


                <button type="submit" class="btn btn-primary">ثبت مشتری</button>

        </form>
    </div>

@endsection
