@extends('admin.layouts.app')
@section('breadcrumbs')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#"> {{ __('Dashboard') }}</a>
        </li>
        <li class="breadcrumb-item active">{{ __('My Dashboard') }}</li>
    </ol>
@endsection
