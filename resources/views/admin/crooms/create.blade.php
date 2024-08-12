@extends('admin.master')
@section('maincontent')
    <div class="col-md-3"></div>
    <div class="col-md-9 my-5">
        @foreach($errors->all() as $error)
            <ul>
                <li class="text-danger">{{$error}}</li>
            </ul>
        @endforeach
        <form role="form" method="post" action="{{route('admin.crooms.store')}}">
            @csrf

                <div class="form-group">
                    <label>ثبت کلاس جدید</label>
                    <input  class="form-control" name="name" placeholder="نام کلاس را وارد کنید">
                </div>


                <button type="submit" class="btn btn-primary">ثبت کلاس</button>

        </form>
    </div>

@endsection
