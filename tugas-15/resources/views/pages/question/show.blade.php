@extends('themes/adminlte')
@section('link','DataTables')
@push('css')
    <style>
        .m-1{
            margin: 0px 10px;
        }
    </style>
@endpush
@push('script')
<script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script>$(function () {$("#example1").DataTable()});</script>
@endpush
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabel</h3>
        <div class="row float-right">
            <a href="{{route("question.create")}}" class="btn btn-success m-1">Add</a>
            <a href="{{route("question.index")}}" class="btn btn-primary m-1">Back</a>
            <a href="{{route("question.show",$question->id)}}" class="btn btn-info m-1">Refresh</a>
        </div>
    </div>
    <div class="card-body">
       <p><b>Title</b></p>
       <p>{{$question->title}}</p>
       <br>
       <p><b>Content</b></p>
       <p>{{$question->content}}</p>
       <br>
       <p><b>Create By</b></p>
       <p>{{$question->profile->fullname}}</p>
       <br>
       <a href="{{route('question.edit',$question->id)}}" class="btn btn-success">Edit</a>
       
    </div>
</div>

@endsection
