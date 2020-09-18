@extends('layouts.app')


@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="card"> -->
            <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

            <div class="card-body mt-5 left-30">
                <a href="{{route('google-search')}}"><button type="button" class="btn btn-lg btn-success">Google Search</button></a>
                <a href="{{route('custom-search')}}"><button type="button" class="btn btn-lg btn-primary">Custom Search</button></a>

                <!-- {{ __('You are logged in!') }} -->
            </div>
            <!-- </div> -->
        </div>
    </div>
</div>
@endsection