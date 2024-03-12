@extends('layout.groceries')

@section("main_content")
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url({{ asset('assets/img/bg-header.jpg') }});">
            <div class="container">
                <h1 class="pt-5">ADMIN PRODUCTS</h1>
                <p class="lead">Products administration</p>
            </div>
        </div>
    </div>

    <section class="pb-0">
        <div class="contact1 mb-5">
            <div class="container">
                <div class="row mt-3">
                    <button class="btn btn-primary" id="btnLoadProducts">Load Products</button>

                    <div>
                        <select id="categoryFilter" class="form-control">
                            <option value="">All Categories</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
    
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <table id="tblProducts">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>CATEGORY</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data will be populated dynamically here -->
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table id="tblProductsdt">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>CATEGORY</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data will be populated dynamically here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection     