@extends('admin.index')

@section('wrapper')
    <section class="error-wrapper">
        <i class="icon-500"></i>
        <h3>Unauthorized access！</h3>
        <p class="page-500">
            <a href="javascript:history.go(-1);" class="btn btn-success"><i class="fa fa-reply"></i> Back</a>
            <a href="{{ route('admin.index') }}" class="btn btn-primary"><i class="fa fa-home"></i> Home</a>
        </p>
    </section>
@stop