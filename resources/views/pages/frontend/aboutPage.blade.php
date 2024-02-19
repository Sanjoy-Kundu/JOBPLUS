@extends('layout.frontend.app')
@section("content")
    @include("components.frontend.home.headerComponent") 
    @include("components.frontend.about.about")
    @include("components.frontend.home.contactComponent") <!--main end-->
    @include("components.frontend.home.footerComponent")
@endsection