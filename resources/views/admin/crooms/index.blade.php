@extends('admin.master')
@section('maincontent')
    <div class="col-md-3"></div>
<div class="col-md-9 mt-5">
    <table class="table table-bordered">
        <tr>
            <th style="width: 10px">#</th>
            <th>نام</th>
            <th>نمایش</th>
            <th>حذف</th>
            <th>ویرایش</th>

        </tr>
        @foreach($crooms as $croom)
        <tr>
            <td>{{$croom->id}}</td>
            <td>{{$croom->name}}</td>
            <td><a href="{{route('admin.crooms.show',['croom'=>$croom->id])}}">@</a></td>
            <form method="post" action="{{route('admin.crooms.destroy',['croom'=>$croom->id])}}">
                @csrf
                @method('delete')
            <td> <button type="submit">X</button> </td>
            </form>
            <td><a href="{{route('admin.crooms.edit',['croom'=>$croom->id])}}">#</a></td>

        </tr>
        @endforeach
    </table>
</div>

@endsection
