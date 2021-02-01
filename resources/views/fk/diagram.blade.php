@extends('layouts.app')
@section('scripts')    
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/apexcharts"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-apexcharts@1.6.0/dist/vue-apexcharts.min.js"></script>
    <script src="https://unpkg.com/http-vue-loader"></script>
    <script type="text/javascript" src="{{asset('app.js')}}">
    </script>
@endsection
@section('content')
    <div id="app-title">
        <app-title></app-title>
    </div>
    <div id="app-content"></div>
    <div id="appl"></div>
@endsection
