@extends('_layouts.master')
@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
    <style>
        body {
            background: url("/images/hero.jpg") no-repeat center center;
            background-size: cover;
            min-height: 500px;
            padding-top: 120px;
            color:white;
        }
        h1 {
            margin-top: 30px;
        }

        a {
            color:white
        }
    </style>
@endsection
@section('body')

    <div class="row expanded">
        <div class="small-12 columns text-center">
            <a href="/">
                <img src="/images/logo.png" alt=""/>
            </a>
            <h1>Website coming soon!</h1>

            <h3>Contact Us</h3>
            <ul class="no-bullet">
                <li>
                    <i class="fa fa-phone" aria-hidden="true"></i> - <strong>07747152994</strong>
                </li>
                <li>
                    <i class="fa fa-envelope-o" aria-hidden="true"></i> - <a href="mailto:sue@flowerpotty.uk">sue@flowerpotty.uk</a>
                </li>
            </ul>
        </div>
    </div>

@endsection