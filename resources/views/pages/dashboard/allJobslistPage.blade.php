@extends('layout.backend.app')
@section('content')
    @include('components.dashboard.navbarComponent')
    {{-- 
    @include('components.job.jobUpdateComponent')
    @include('components.job.jobDeleteComponent') --}}
    @include('components.job.adminAccessComponet')
    @include('components.job.alljoblistComponent')
    @include('components.dashboard.footer')
@endsection