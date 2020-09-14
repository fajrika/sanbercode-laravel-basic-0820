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
        <h3 class="card-title">List</h3>
        <div class="row float-right">
            <a href="{{route("question.create")}}" class="btn btn-success m-1">Add</a>
            <a href="{{route("question.index")}}" class="btn btn-primary m-1 disabled">Back</a>
            <a href="{{route("question.index")}}" class="btn btn-info m-1">Refresh</a>
        </div>
    </div>
    <div class="card-body">
        <div class="col-md-12" style="min-height: 40px">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <td>Title</td>
                    <td>Created By</td>
                    <td>Created At</td>
                    <td>Show</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($questions as $question)
                    <tr>
                        <td>{{$question->title}}</td>
                        <td>{{$question->profile->fullname}}</td>
                        <td>{{$question->created_at}}</td>
                        <td><a href="{{route("question.show",$question->id)}}" class="btn btn-success">Show</a></td>
                        <td><a href="{{route("question.edit",$question->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form action="{{route('question.destroy',$question->id)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td>Title</td>
                    <td>Created By</td>
                    <td>Created At</td>
                    <td>Show</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection
