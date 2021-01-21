@extends('admin.layouts.app')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#"> {{ __('Posts') }}</a>
        </li>
        <li class="breadcrumb-item active">{{ __('My Posts') }}</li>
    </ol>
@endsection

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-area-chart"></i> {{ __('Posts List') }}</div>
        <div class="card-body">
            TEST CONTENT
        </div>
        <div class="card-footer small text-muted"></div>
    </div>
@endsection
