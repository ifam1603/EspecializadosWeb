@extends("layout.groceries")

@section("main_content")
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
            <div class="container">
                <h1 class="pt-5">
                    Register Page
                </h1>
                <p class="lead">
                    Save time and leave the groceries to us.
                </p>

                <div class="card card-login mb-5">
                    <div class="card-body">
                        <form class="form-horizontal" action="index.html">
                            <div class="form-group row mt-3">
                                <div class="col-md-12">
                                    <input class="form-control" type="text" required="" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <div class="col-md-12">
                                    <input class="form-control" type="email" required="" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <div class="col-md-12">
                                    <input class="form-control" type="phone" required="" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <div class="col-md-12">
                                    <input class="form-control" type="text" required="" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input class="form-control" type="password" required="" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input class="form-control" type="password" required="" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox" name="terms">
                                        <label for="checkbox0" class="mb-0">I Agree with <a href="terms.html" class="text-light">Terms & Conditions</a> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row text-center mt-4">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block text-uppercase">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5>About</h5>
                <p>Nisi esse dolor irure dolor eiusmod ex deserunt proident cillum eu qui enim occaecat sunt aliqua anim eiusmod qui ut voluptate.</p>
            </div>
            <div class="col-md-3">
                <h5>Links</h5>
                <ul>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                    <li>
                        <a href="faq.html">FAQ</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">How it Works</a>
                    </li>
                    <li>
                        <a href="terms.html">Terms</a>
                    </li>
                    <li>
                        <a href="privacy.html">Privacy Policy</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                 <h5>Contact</h5>
                 <ul>
                     <li>
                        <a href="tel:+620892738334"><i class="fa fa-phone"></i> 08272367238</a>
                    </li>
                    <li>
                        <a href="mailto:hello@domain.com"><i class="fa fa-envelope"></i> hello@domain.com</a>
                     </li>
                 </ul>

                 <h5>Follow Us</h5>
                 <ul class="social">
                     <li>
                        <a href="javascript:void(0)" target="_blank"><i class="fab fa-facebook-f"></i></a>
                     </li>
                     <li>
                        <a href="javascript:void(0)" target="_blank"><i class="fab fa-instagram"></i></a>
                     </li>
                     <li>
                        <a href="javascript:void(0)" target="_blank"><i class="fab fa-youtube"></i></a>
                     </li>
                 </ul>
            </div>
            <div class="col-md-3">
                 <h5>Get Our App</h5>
                 <ul class="mb-0">
                     <li class="download-app">
                         <a href="#"><img src="assets/img/playstore.png"></a>
                     </li>
                     <li style="height: 200px">
                         <div class="mockup">
                             <img src="assets/img/mockup.png">
                         </div>
                     </li>
                 </ul>
            </div>
        </div>
    </div>
    <p class="copyright">&copy; 2018 Freshcery | Groceries Organic Store. All rights reserved.</p>
</footer>
@endsection