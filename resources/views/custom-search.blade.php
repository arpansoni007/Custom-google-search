@extends('layouts.app')


@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{route('home')}}"><button type="button" class="btn btn-sm btn-outline-success float-left mr-5">Back to Home</button></a>
            <button type="button" id="print-custom-pdf" class="btn btn-sm btn-outline-danger float-right">Save PDF</button>
            
            <form action="{{route('custom-search-request')}}" method="POST">
                <div class="card-body row no-gutters align-items-center">
                    @csrf
                    <div class="col-auto">
                        <i class="fas fa-search h4 text-body"></i>
                    </div>
                    <!--end of col-->

                    <div class="col-10">
                        <input class="form-control form-control-md form-control-borderless mr-2" width="50%" type="search" name="search" placeholder="Search topics or keywords">

                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                        <button class="btn btn-md btn-success ml-1" type="submit">Search</button>
                    </div>


                    <!--end of col-->
                </div>

                <br>
                @if(session()->has('err'))
                <div class="col">
                    <div class="alert alert-danger">{{session()->get('err')}}</div>
                </div>
                @endif
            </form>

        </div>
    </div>
</div>
<script>
      $(document).ready(function(){
        $('#print-custom-pdf').click(function() {
            window.print();
        });
    });
</script>


@endsection