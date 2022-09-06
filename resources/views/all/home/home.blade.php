@extends('all.master')

@section('title')
    Home
@endsection

@section('body')

    @if(Session::has('message'))
        <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
    @endif

    <div class="slider-area">
        <!-- Slider -->
        <div class="block-slider block-slider4">
            <ul class="" id="bxslider-home4">
                <li>
                    <img src="{{ asset('/') }}assets/img/book-png-26.png" style="height: 500px; width:500px; " alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                             <span class="primary">Story <strong>Books</strong></span>
                        </h2>
                        <h4 class="caption subtitle">Interesting stories</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div>
                </li>
                <li><img src="{{ asset('/') }}assets/img/pic-3.png" style="height: 500px; width:500px; " alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                            by one, get one <span class="primary">50% <strong>off</strong></span>
                        </h2>
                        <h4 class="caption subtitle">Defferent type of books</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div>
                </li>
                <li><img src="{{ asset('/') }}assets/img/pic-4.png" style="height: 500px; width:500px; " alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                             <span class="primary">Child <strong>Books</strong></span>
                        </h2>
                        <h4 class="caption subtitle">Select Item</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div>
                </li>
{{--                <li><img src="{{ asset('/') }}assets/img/h4-slide4.png" alt="Slide">--}}
{{--                    <div class="caption-group">--}}
{{--                        <h2 class="caption title">--}}
{{--                            Apple <span class="primary">Store <strong>Ipod</strong></span>--}}
{{--                        </h2>--}}
{{--                        <h4 class="caption subtitle">& Phone</h4>--}}
{{--                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
            </ul>
        </div>
        <!-- ./Slider -->
    </div> <!-- End slider area -->

    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New Books</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Books</h2>
                        <div class="product-carousel">
                            @foreach($books as $book )
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{ asset($book->image) }}" alt="">
                                    <div class="product-hover">
{{--                                        <a href="{{route('details', ['id'=> $book->id])}}" class="add-to-cart-link"><i class="fa fa-book"></i>{{ $book->name }} </a>--}}
                                        <a href="{{route('details', ['id'=> $book->id])}}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2><a href="{{route('details', ['id'=> $book->id])}}" class="fa fa-book">Book Name: {{ $book->name }}</a></h2>
                                <h4><a href="#">Book Author: {{ $book->author }}</a></h4>

                                <div class="product-carousel-price">
                                    <label for="price"><h5>Price: {{ $book->price }}</h5></label>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->





@endsection
