@extends('layouts.app')
@section('title', __($trans . '.plural'))
@section('breadcrumbs')
    <h1 class="d-flex align-items-center text-gray-900 fw-bold my-1 fs-3">{{ __($trans . '.plural') }}</h1>
    <span class="h-20px border-gray-200 border-start mx-3"></span>
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-1">
        <li class="breadcrumb-item text-muted"><a href="{{ route('home') }}"
                class="text-muted text-hover-primary">{{ __('site.home') }}</a></li>
        <li class="breadcrumb-item"><span class="bullet bg-gray-200 w-5px h-2px"></span></li>
        <li class="breadcrumb-item text-dark">{{ __($trans . '.plural') }}</li>
    </ul>
@stop
@section('style')
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
@stop
@section('content')
    <div class="container-xxl" id="kt_content_container">
        <div class="card">

            <div class="card-body pt-0">
                <table class="table align-middle table-row-bordered fs-6 gy-5" id="buildingtypes">
                    <thead>
                        <tr class="text-start fw-bold fs-7 text-uppercase gs-0">
                             
                            {{ $buildings->submissions }}
                                @foreach ($buildings->submissions->field as $field)
                                    <th>{{ $field }}</th>
                                @endforeach
                            
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">
                        <tr>
                            <td>dasdsad</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop
@section('scripts')
@stop
{{-- @foreach ($buildings as $building)
            @foreach ($building->type->form->fields as $field)
            <p>{{ $field->label }}</p>
            @foreach ($building->submissions as $submission)
            <p>{{ $submission->fill_answer_text }}</p>
            @endforeach
            @endforeach
        @endforeach --}}
