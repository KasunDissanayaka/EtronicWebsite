@extends('layouts.app')

@section('content')

<!-- /.offcanvas-info -->
<div class="wrapper light-wrapper page-title-wrapper">
    <div class="container inner text-center">
        <h1 class="page-title">Our Clients & Works</h1>
        <p class="lead">we’ll make sure that we provide supreme quality, cutting-edge and cost-effective eCommerce website solutions for all our clients</p>
    </div>
    <!-- /.container -->
</div>
<!-- /.wrapper -->
<div class="wrapper light-wrapper">
    <div class="container inner">
        <div class="grid grid-view boxed">
            <div class="clearfix"></div>
            <div class="tiles text-center light-gallery-wrapper">
                <div class="row isotope">
                    @foreach ($portfolios as $portfolio)
                    <div class="item grid-sizer col-md-6 col-lg-4 corporate application">
                        <div class="box bg-white shadow p-30">
                            <figure class="main overlay overlay2 rounded mb-30"><a href="#" traget="_blank" class="lightbox"> <img src="{{ asset('storage/' . $portfolio->image) }}" alt="" /></a></figure>
                            <div class="post-content">
                                <h2 class="post-title mb-10"><a href="#">{{ $portfolio->title }}</a></h2>
                                <div class="meta mb-0">{{ $portfolio->short_description }}</div>
                            </div>
                            <!-- /.post-content -->
                        </div>
                        <!-- /.box -->
                    </div>
                    @endforeach
                </div>
                <a href="#" id="mc-embedded-subscribe" target="_blank" class="btn btn-rounded btn-default pull-center">More Clients</a>
                <!-- /.row -->
            </div>
            <!-- /.tiles -->
        </div>
        <!-- /.grid -->
    </div>
    <!-- /.container -->
</div>
<!-- /.offcanvas-info -->
@endsection