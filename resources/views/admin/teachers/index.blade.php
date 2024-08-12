@extends('admin.master')
@section('maincontent')
    <div class="col-md-3"></div>
<div class="col-md-9 mt-5">
    <table class="table table-bordered">
        <tr>
            <th style="width: 10px">#</th>
            <th>نام</th>
            <th>سن</th>
            <th>کد ملی</th>
            <th>موبایل</th>
            <th>نمایش</th>
            <th>حذف</th>
            <th>ویرایش</th>

        </tr>
        @foreach($teachers as $teacher)
        <tr>
            <td>{{$teacher->id}}</td>
            <td>{{$teacher->name}}</td>
            <td>{{$teacher->age}}</td>
            <td>{{$teacher->national_code}}</td>
            <td>{{$teacher->number}}</td>
            <td><a href="{{route('admin.teachers.show',['teacher'=>$teacher->id])}}">@</a></td>
            <form method="post" action="{{route('admin.teachers.destroy',['teacher'=>$teacher->id])}}">
                @csrf
                @method('delete')
            <td> <button type="submit">X</button> </td>
            </form>
            <td><a href="{{route('admin.teachers.edit',['teacher'=>$teacher->id])}}">#</a></td>

        </tr>
        @endforeach
    </table>
</div>

@endsection
