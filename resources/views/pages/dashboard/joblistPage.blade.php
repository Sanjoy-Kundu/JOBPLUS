@extends('layout.backend.app')
@section('content')
    @include('components.dashboard.navbarComponent')
    @include('components.job.viewJobComponent')
    @include('components.job.jobDeleteComponent')
    @include('components.job.JoblistComponent')
    @include('components.dashboard.footer')
@endsection