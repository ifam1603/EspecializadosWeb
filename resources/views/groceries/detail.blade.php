@extends('layout.groceries')

@section('main_content')
        <div id="page-content" class="page-content">
            <div class="banner">
                <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
                    <div class="container">
                        <h1 class="pt-5">
                            {{$product->name}}
                        </h1>
                        <p class="lead">
                            Save time and leave the groceries to us.
                        </p>
                    </div>
                </div>
            </div>
            <div class="product-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="slider-zoom">
                                <a href="assets/img/meats.jpg" class="cloud-zoom" rel="transparentImage: 'data:image/gif;base64,R0lGODlhAQABAID/AMDAwAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==', useWrapper: false, showTitle: false, zoomWidth:'500', zoomHeight:'500', adjustY:0, adjustX:10" id="cloudZoom">
                                    <img alt="Detail Zoom thumbs image" src="{{asset('assets/img/')}}/{{$product->image}}"  style="width: 100%;">
                                </a>
                            </div>

                            <div class="slider-thumbnail">
                                <ul class="d-flex flex-wrap p-0 list-unstyled">
                                    <li>
                                        <a href="assets/img/meats.jpg" rel="gallerySwitchOnMouseOver: true, popupWin:'assets/img/meats.jpg', useZoom: 'cloudZoom', smallImage: 'assets/img/meats.jpg'" class="cloud-zoom-gallery">
                                            <img itemprop="image" src="assets/img/meats.jpg" style="width:135px;">
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <p>
                                <strong>Descripcion</strong><br>
                                {{$product->descripcion}}
                            </p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p>
                                        <strong>Price</strong> (/Pack)<br>
                                        <span class="price">{{$product->purchase_price}}</span>
                                        <span class="old-price">{{$product->sale_price}}</span>
                                    </p>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <p>
                                        <span class="stock available">In Stock: {{$product->quantity}}</span>
                                    </p>
                                </div>
                            </div>
                            <p class="mb-1">
                                <strong>Quantity</strong>
                            </p>
                            <div class="row">
                                <div class="col-sm-5">
                                    <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary" value="" name="vertical-spin">
                                </div>
                                <div class="col-sm-6"><span class="pt-1 d-inline-block">Pack (250 gram)</span></div>
                            </div>

                            <button class="mt-3 btn btn-primary btn-lg">
                                <i class="fa fa-shopping-basket"></i> Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <section id="related-product">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="title">Related Products</h2>
                            <div class="product-carousel owl-carousel">
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
                                            <img src="assets/img/meats.jpg" alt="Card image 2" class="card-img-top">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="detail-product.html">Product Title</a>
                                            </h4>
                                            <div class="card-price">
                                                <span class="discount">Rp. 300.000</span>
                                                <span class="reguler">Rp. 200.000</span>
                                            </div>
                                            <a href="detail-product.html" class="btn btn-block btn-primary">
                                                Add to Cart
                                            </a>

                                        </div>
                                    </div>
                                </div>
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
                                            <img src="assets/img/fish.jpg" alt="Card image 2" class="card-img-top">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="detail-product.html">Product Title</a>
                                            </h4>
                                            <div class="card-price">
                                                <span class="discount">Rp. 300.000</span>
                                                <span class="reguler">Rp. 200.000</span>
                                            </div>
                                            <a href="detail-product.html" class="btn btn-block btn-primary">
                                                Add to Cart
                                            </a>

                                        </div>
                                    </div>
                                </div>
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
                                            <img src="assets/img/vegetables.jpg" alt="Card image 2" class="card-img-top">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="detail-product.html">Product Title</a>
                                            </h4>
                                            <div class="card-price">
                                                <span class="discount">Rp. 300.000</span>
                                                <span class="reguler">Rp. 200.000</span>
                                            </div>
                                            <a href="detail-product.html" class="btn btn-block btn-primary">
                                                Add to Cart
                                            </a>

                                        </div>
                                    </div>
                                </div>
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
                                            <img src="assets/img/frozen.jpg" alt="Card image 2" class="card-img-top">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="detail-product.html">Product Title</a>
                                            </h4>
                                            <div class="card-price">
                                                <span class="discount">Rp. 300.000</span>
                                                <span class="reguler">Rp. 200.000</span>
                                            </div>
                                            <a href="detail-product.html" class="btn btn-block btn-primary">
                                                Add to Cart
                                            </a>

                                        </div>
                                    </div>
                                </div>
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
                                            <img src="assets/img/fruits.jpg" alt="Card image 2" class="card-img-top">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="detail-product.html">Product Title</a>
                                            </h4>
                                            <div class="card-price">
                                                <span class="discount">Rp. 300.000</span>
                                                <span class="reguler">Rp. 200.000</span>
                                            </div>
                                            <a href="detail-product.html" class="btn btn-block btn-primary">
                                                Add to Cart
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection
