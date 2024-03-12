@extends("layout.groceries")

@section('main_content')
        <div id="page-content" class="page-content">
            <div class="banner">
                <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url({{ asset('assets/img/bg-header.jpg') }});">
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
                    <!-- Sección de comentarios existentes -->
        <div class="comments-section">
            <h2>Comentarios</h2>
            @foreach($product->comments as $comment)
                <div class="comment">
                    <p><strong>{{ $comment->name }}</strong>: {{ $comment->message }}</p>
                </div>
            @endforeach
        </div>

         <!-- Formulario para agregar nuevo comentario -->
         <div class="add-comment-section">
            <h2>Agregar Comentario</h2>
            <form action="{{ route('comment.store', ['product' => $product->id]) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="message">Comentario:</label>
                    <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                </div>
                
                <button type="submit" class="btn btn-primary">Enviar Comentario</button>
            </form>
        </div>
        </div>
@endsection

