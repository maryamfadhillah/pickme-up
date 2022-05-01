@extends('layout')
@section('content')
<section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center py-14 py-md-16 bg-map"
    data-image-src="{{ asset('/img/map.png') }}">
    <div class="container py-0 py-md-18">
        <div class="row">
            <div class="col-lg-6 col-xl-5 mx-auto">
                <h2 class="display-4 mb-3 text-center">Let's get started</h2>
                <p class="lead mb-5 px-md-16 px-lg-3">We are trusted by over 5000+ clients. Join them by using our
                    services and grow your business.</p>
                <a href="/mobile" class="btn btn-primary rounded-pill">Try it on!</a>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
@endsection