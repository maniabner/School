@extends('admin.master')
@section('maincontent')
    <div class="col-md-2"></div>
    <div class="col-md-10 my-5">
        @foreach($errors->all() as $error)
            <ul>
                <li class="text-danger">{{$error}}</li>
            </ul>
        @endforeach
        <form role="form" method="post" action="{{route('admin.crooms.update',['croom'=>$croom->id])}}">
            @method('put')
            @csrf
                <div class="form-group">
                    <label> نام کلاس </label>
                    <input  class="form-control" name="name" value="{{$croom->name}}">
                </div>
=

                <button type="submit" class="btn btn-primary">ویرایش مشخصات کلاس </button>
        </form>

    </div>

@endsection
