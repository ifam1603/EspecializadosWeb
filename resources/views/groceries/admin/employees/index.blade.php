@extends('layout.groceries')

@section("main_content")
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url({{ asset('assets/img/bg-header.jpg') }});">
            <div class="container">
                <h1 class="pt-5">ADMIN EMPLOYEES</h1>
                <p class="lead">EMPLOYEES administration</p>
            </div>
        </div>
    </div>

    <section class="pb-0">
        <div class="contact1 mb-5">
            <div class="container">
                <div class="row mt-3">
                    <button class="btn btn-primary" id="btnLoadProducts">Load Products</button>
    
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <table id="tblProducts">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>SALARY</th>
                                    <th>DEPARTMENT</th>
                                    <th>GENERO</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employees as $emp)
                                    <tr>
                                        <td>{{$emp->no_emp}}</td>
                                        <td>{{$emp->first_name}}</td>
                                        <td>{{$emp->salary}}</td>
                                        <td>{{$emp->gender}}</td>
                                        <td>{{$emp->department}}</td>
                                        
                                    </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
@endsection 