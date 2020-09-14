@extends('themes/adminlte')
@section('link','DataTables')
@push('css')
    <style>.m-1{margin: 0px 10px}</style>
@endpush
@push('script')
<script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script>$(function () {$("#example1").DataTable()});</script>
@endpush
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Create</h3>
        <div class="row float-right">
            <a href="{{route("question.create")}}" class="btn btn-success m-1 disabled">Add</a>
            <a href="{{route("question.index")}}" class="btn btn-primary m-1">Back</a>
            <a href="{{route("question.index")}}" class="btn btn-info m-1">Refresh</a>
        </div>
    </div>
    <div class="card-body">
        <x-form action="{{route('question.store')}}" method="POST" labelSubmit="Create">
            <x-select id="profile_id" label="Profile" type="text" placeholder="Pilih Profile" :data="$profile" required='true'/>
            <x-input id="title" label="Title" type="text" placeholder="Masukkan Title" required='true'/>
            <x-input id="content" label="Content" type="text" placeholder="Masukkan Content" required='true'/>
        </x-form>
    </div>
</div>

@endsection
