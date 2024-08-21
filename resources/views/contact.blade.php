@extends('layout')
@section('content')



    <!-- contact -->
    <section class="contact-wthree align-w3" id="contact">
        <div class="container">
            <div class="wthree_pvt_title text-center">
                <h4 class="w3pvt-title">contact us
                </h4>
                <p class="sub-title">ITM (SLS) Baroda University</p>
            </div>
            <div class="mx-auto text-center">
                <iframe class="mt-lg-4 contact-form-wthreelayouts" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14750.332656334496!2d73.35906865!3d22.44470965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1695362823792!5m2!1sen!2sin"
                    allowfullscreen></iframe>
                <!-- //footer right -->
            </div>
            <div class="row mt-4">
                <div class="col-lg-7">
                    <h5 class="cont-form">send us a note</h5>
                    <div class="contact-form-wthreelayouts">
                        <form action="#" method="post" class="register-wthree">
                            <div class="form-group">
                                <label>
                                    Your Name
                                </label>
                                <input class="form-control" type="text" placeholder="Enter name" name="name" required="">
                            </div>
                            <div class="form-group">
                                <label>
                                    Mobile
                                </label>
                                <input class="form-control" type="text" placeholder="Enter mobile number" name="mobile" required="">
                            </div>
                            <div class="form-group">
                                <label>
                                    Email
                                </label>
                                <input class="form-control" type="email" placeholder="Enter email" name="email"
                                    required="">
                            </div>
                            <div class="form-group">
                                <label>
                                    Your message
                                </label>
                                <textarea placeholder="Type your message here" name="Enter message" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-w3layouts btn-block bg-theme text-wh w-100 font-weight-bold text-uppercase">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <h5 class="cont-form">get in touch</h5>
                    <div class="row flex-column">
                        <div class="contact-w3">
                            <span class="fa fa-envelope-open  mb-3"></span>
                            <div class="d-flex flex-column">
                                <a href="mailto:example@email.com" class="d-block">xyz@gmail.com</a>
                                <a href="mailto:example@email.com" class="my-2 d-block">abc@gmail.com</a>
                                <a href="mailto:example@email.com">pqr@gmail.com</a>
                            </div>
                        </div>
                        <div class="contact-w3 my-4">
                            <span class="fa fa-phone mb-3"></span>
                            <div class="d-flex flex-column">
                                <p>+91 78475 87962</p>
                                <p class="my-1">+91 87563 45712</p>
                                <p>+91 67854 04532</p>
                            </div>
                        </div>
                        <div class="contact-w3">
                            <span class="fa fa-home mb-3"></span>
                            <address>71 Pilgrim Avenue <br>44 Shirley Ave.<br> Goldfield Rd. Broome St, Newyork.</address>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->


@stop