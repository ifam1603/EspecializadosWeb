@extends('layout.groceries')

@section('main_content')
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url({{ asset('assets/img/bg-header.jpg') }});">
            <div class="container">
                <h1 class="pt-5">
                    Shopping Page
                </h1>
                <p class="lead">
                    Save time and leave the groceries to us.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shop-categories owl-carousel mt-5">
                    @foreach($categories as $c)
                    <div class="item">
                        <a href="#vegetables_{{$c->id}}">{{-- Esta linea es para asginarle el id de la seccion a a qie va ir si de click --}}
                            <div class="media d-flex align-items-center justify-content-center">
                                <span class="d-flex mr-2"><i class="sb-bistro-carrot"></i></span>
                                <div class="media-body">
                                    <h5>{{$c->name}}</h5>
                                    <p>Freshly Harvested Veggies From Local Growers</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endForeach
                </div>
            </div>
        </div>
    </div>

    <section id="most-wanted">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Most Wanted</h2>
                    <div class="product-carousel owl-carousel">
                        @foreach($products as $p)
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until 2018
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="{{asset('assets/img/')}}/{{$p->image}}" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="{{route('detail', ['id' =>$p->id])}}">{{$p->name}}</a>
                                        </h4>
                                        <div class="card-price">
                                            <span class="discount">{{$p->purchase_price}}</span>
                                            <span class="reguler">{{$p->sale_price}}</span>
                                        </div>
                                        <a href="{{route('detail',['id' => $p->id])}}" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                                
                            </div>
                        @endForeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @foreach($categories as $cat)
        <section id="vegetables_{{$cat->id}}" class="gray-bg">{{-- En esta linea hara que se agreguen id a la seccion de cada categoria --}}
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">{{$cat->name}}</h2>
                        <div class="product-carousel owl-carousel">
                            @foreach($cat->products as $product)
                                <div class="item">
                                    <div class="card card-product">
                                        <div class="card-ribbon">
                                            <div class="card-ribbon-container right">
                                                <span class="ribbon ribbon-primary">SPECIAL</span>
                                            </div>
                                        </div>
                                        <div class="card-badge">
                                            <div class="card-badge-container left">
                                                <span class="badge badge-default">
                                                    Until 2018
                                                </span>
                                                <span class="badge badge-primary">
                                                    20% OFF
                                                </span>
                                            </div>
                                            <img src="{{asset('assets/img/')}}/{{$product->image}}" alt="Card image 2" class="card-img-top">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="detail-product.html">{{$product->name}}</a>
                                            </h4>
                                            <div class="card-price">
                                                <span class="discount">{{$product->purchase_price}}</span>
                                                <span class="reguler">{{$product->sale_price}}</span>
                                            </div>
                                            <a href="detail-product.html" class="btn btn-block btn-primary">
                                                Add to Cart
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            @endForeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endForeach
@endsection	