@extends('admin.master')
@section('maincontent')
    <div class="col-md-3"></div>
    <div class="col-md-9 my-5">


        <div class="form-group">
            <label>نام کلاس</label>
            <input  class="form-control" name="name" value="{{$croom->name}}" readonly>
        </div>

        <a href="{{route('admin.crooms.index')}}"><button class="btn btn-dark">بازگشت</button></a>

    </div>
@endsection
