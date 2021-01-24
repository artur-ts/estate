@extends('admin.layouts.app')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#"> {{ __('Categories') }}</a>
        </li>
        <li class="breadcrumb-item active">{{ __('Create New Category') }}</li>
    </ol>
@endsection

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-area-chart"></i> {{ __('New Category') }}</div>
        <div class="card-body">
            <form action="{{ route('admin-dashboard.categories.create') }}" method="post" >
                @csrf
                <div class="form-group">
                    <input type="text" name="title[en]" class="form-control @error('title.en') is-invalid @enderror" placeholder="{{ __('Title In English') }}">
                    @error('title.en')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="title[ru]" class="form-control @error('title.ru') is-invalid @enderror" placeholder="{{ __('Title In Russian') }}">
                    @error('title.ru')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="title[am]" class="form-control @error('title.am') is-invalid @enderror" placeholder="{{ __('Title In Armenian') }}">
                    @error('title.am')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-danger" type="button">Cancel</button>
                    <button class="btn btn-success" type="submit">Save</button>
                </div>
            </form>
        </div>
        <div class="card-footer small text-muted"></div>
    </div>
@endsection
