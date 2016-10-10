@extends('_layouts.master')

@section('head')
    <title>
        Professional Gardening Services in Liverpool - Flowerpotty Garden Services
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
@endsection

@section('body')

    @include('_sections.hero')

    @include('_elements.nav')

    @include('_sections.home')

    @include('_sections.meet-the-team')

    @include('_sections.services')

    {{--@include('_sections.quote')--}}

    @include('_sections.contact')

@endsection