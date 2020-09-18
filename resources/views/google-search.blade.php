@extends('layouts.app')


@section('content')
<div class="container">
    <button type="button" id="print-google-pdf" class="btn btn-sm btn-outline-danger float-right">Save PDF</button>
    <a href="{{route('home')}}"><button type="button" class="btn btn-sm btn-outline-success float-left ml-2">Back to Home</button></a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="card"> -->
            <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

            <!-- Include Custom Google Search -->
            <div class="gcse-search" enableAutoComplete="true"></div>
            <!-- {{ __('You are logged in!') }} -->
        </div>
        <!-- </div> -->
    </div>
</div>
</div>
<script>
    $(document).ready(function() {
        $('#print-google-pdf').click(function() {
            window.print();
        })
    });
</script>
@endsection