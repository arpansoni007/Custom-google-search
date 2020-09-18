@extends('layouts.app')


@section('content')
<div class="container">
<button type="button" id="print-custom-results-pdf" class="btn btn-sm btn-outline-danger float-right">Save PDF</button>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3> Search Results</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group">

                        @foreach($domResult->find('a[href^=/url?q=]') as $link)

                        <li class="list-group-item"><?= str_replace('/url?q=', '', $link) ?></li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
      $(document).ready(function(){
        $('#print-custom-results-pdf').click(function() {
            window.print();
        });
    });
</script>

@endsection