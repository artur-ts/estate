@extends('admin.layouts.app')

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#"> {{ __('Categories') }}</a>
        </li>
        <li class="breadcrumb-item active">{{ __('My Categories') }}</li>
    </ol>
@endsection

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-area-chart"></i> {{ __('Categories List') }}</div>
        <div class="card-body">
            <!-- Example DataTables Card-->

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>{{ __('Title') }} AM</th>
                        <th>{{ __('Title') }} RU</th>
                        <th>{{ __('Title') }} EN</th>
                        <th>{{ __('Actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->translate('am')->title }}</td>
                                <td>{{ $category->translate('ru')->title }}</td>
                                <td>{{ $category->translate('en')->title }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <div class="card-footer small text-muted"></div>
    </div>
@endsection
