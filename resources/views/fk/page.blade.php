@extends('layouts.app')
@section('content')
    <form action="" enctype="multipart/form-data" method="POST">
        @csrf
        <input type="file" name="forwardkey">
        <input type="submit" value="upload">
    </form>
    <ul>
        @foreach($files as $f)
            <li><a href="fk/diagram">{{$f}}</a></li>
        @endforeach
    </ul>
@endsection
