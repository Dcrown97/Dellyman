<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="{{ ('/home_images/favicon.png') }}"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/faq.css">
    <title>Dellyman || FAQ</title>
</head>
<body>
    <div id="section-1">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div class="nav-icon">
                    <a href="#">
                        <img src="{{ ('/home_images/logo-white.png') }}" class="logo" alt="">
                    </a>
                </div>
                <div id="tep-menu">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="track_package">Track Package</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/how_it_works">How it works</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/faq">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/developer">Developers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/contact_us">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/register">Sign In/Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="left-part">
                <div class="text">
                    <h1>Same Day</h1>
                    <h2>Delivery</h2>
                    <h1>Guaranteed</h1>
                </div>
                <div class="btn">
                    <a href="#">Get Started</a>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION-1 ENDS -->

        <div class="content">
            <div class="faq">
                <h1>Frequently asked questions (FAQ)</h1>
            </div>
            <div class="divider">
            </div>
            <!-- <div class="reg">
                <b>REGISTRATIONS</b>
            </div> -->

            @foreach ($allfaqs as $faq)
            <div class="q">
                <b>Q. {{ $faq->question }} </b>
                <p>A. {{ $faq->answer }} </p>
            </div>
            @endforeach




            <!-- <div class="q">
                <b>Q. I did not get the confirmation email, what do I do? </b>
                Please check your spam or junk folder for the email and whitelist info@dellyman.com so that our emails don't
                go into your spam or junk folder. If the mail is not there, please contact support@dellyman.com or call
                0700-DELLYMAN and an email confirmation link will be re-sent to you</p>
            </div>
            <div class="q">
                <b>Q. Can I change my email address: </b>
                Yes. After a change, you will be required to validate the new email address by activating a confirmation
                link that will be sent to the new email address. If you do not receive the confirmation email, please follow
                the steps above</p>
            </div>
            <div class="q">
                <b>Q. Why do I need to validate my phone number? </b>
                We send SMS of the status of delivery orders to registered logistics companies. To ensure this works all the
                time, the phone number used for registration needs to be validated. At registration, an OTP is generated and
                sent to the registered phone number and once the user enters the OTP, the validation of the phone number is
                completed and the user can now login to the system
                </p>
            </div>
            <div class="q">
                <b>Q. I did not get the OTP? </b>
                This happens sometimes especially due to issues with DND (Do Not Disturb) with network providers. Please
                contact support@dellyman.com or call 0700-DELLYMAN for assistance</p>
            </div>
            <div class="q">
                <b>Q. Can I change my telephone number? </b>
                Yes. After a change, you will be required to validate the new number using an OTP that will be generated and
                sent to you on the new number. If you do not receive the OTP, please follow the step above</p>
            </div>
           
            <div class="q">
                <b>Q. What is an Open Order? </b>
                These are orders placed by <b>special customers</b> but which are yet to be accepted by a child logistics
                company
                under the dedicated logistics company selected by the special customer. A special customer places an order,
                selects a dedicated logistics company and pays. The order status will show as Open Order until accepted by a
                child logistics company set up under the selected dedicated logistics company</p>
            </div>
            <div class="q">
                <b>Q. What is a Pending Order? </b>
                A pending order is an order placed by a <b>special customer</b> and which has now been accepted by the child
                logistics company under the dedicated logistics company selected by the special customer or an order placed
                by a <B>general customer.</B>
                </p>
            </div>
            <div class="q">
                <b>Q. What is an In-transit Order? </b>
                An In-transit order is an order which has been accepted by a rider of a logistics company. All orders
                (whether placed by special or general customers) will have an In-transit status once a rider of the
                logistics company has accepted the order</p>
            </div>
            <div class="q">
                <b>Q. What is a Delivered Order? </b>
                A delivered order is an order which has been delivered using the delivery code internally generated by the
                system. The sender of the package gets a delivery code when the rider picks the item and the delivery code
                is sent to the receiver of the package. Once the rider arrives and ready to deliver, the receiver of the
                package provides the delivery code, the rider enters the code in the rider app and if the code is accepted,
                the order is marked as delivered</p>
            </div>
            
            <div class="q">
                <b>Q. What is a Settled Transaction? </b>
                A settled transaction is a delivered order and for which payment has been triggered by Dellyman and
                settlement has been completed by the payment provider to the logistics company
                </p>
            </div>
            <div class="q">
                <b>Q. What is an Unpaid Transaction? </b>
                An unpaid transaction is a delivered order and for which payment has been triggered by Dellyman but
                settlement to the logistics company is yet to be completed by the payment provider
                </p>
            </div> -->
        </div>


 <!-- SECTION-6 BEGINS -->
        <section id="section-6">
            <div class="container">
                
            </div>
            <div class="lower-section">
                <div class="container lower">
                    <div class="left">
                        <h2>Still have questions about our Intracity Services?</h2>
                    </div>
                    <div class="right">
                        <div class="btn">
                            <a href="/contact_us">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

     <!-- SECTION-6 ENDS -->



     <!-- FOOTER STARTS -->
        <footer id="footer">
            <div class="container">
                <div class="row row1">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="img">
                            <a href="">
                                <img src="{{ ('./home_images/logo-white.png') }}" alt="">
                            </a>
                        </div>
                        <div>
                            <p>
                                We know the problem with same day delivery and we just want to solve it.
                            </p>
                        </div>
                        <div class="icons-section">
                            <div class="icon icon1"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                            <div class="icon icon2"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                            <div class="icon icon3"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="header">
                            <a href="#"><h5>Our company</h5></a>
                        </div>
                        <div>
                            <a href="#"><p>About Us</p></a>
                            <a href="#"><p>Blog</p></a>
                            <a href="#"><p>API</p></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="header">
                            <a href="#"><h5>Support</h5></a>
                        </div>
                        <div>
                            <a href="#"><p>Help Centre</p></a>
                            <a href="#"><p>Privacy Policy</p></a>
                            <a href="#"><p>Terms & Condition</p></a>
                            <a href="#"><p>FAQ's</p></a>
                            <div>
                                <a href="#" class="mail">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p>support@dellyman.com</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="header">
                            <a href="#"><h5>Contact Us</h5></a>
                        </div>
                        <div>
                            <a href="#"><p>Dellyman Center </p></a>
                            <a href="#"><p>78B CMD Road,</p></a>
                            <a href="#"><p>By GPS School,</p></a>
                            <a href="#"><p> Close To Magodo Brooks Estate,</p></a>
                            <a href="#"><p>Lagos, Nigeria</p></a>
                        </div>
                        <div id="lower">
                            <a href="#"><p><i class="fa fa-whatsapp" aria-hidden="true"></i> +234 806 191 0209 (SMS ONLY)</p></a>
                            <a href="#"><p><i class="fa fa-phone" aria-hidden="true"></i> 0700 33559626 (Calls Only)</p></a>
                            <a href="#"><p><i class="fa fa-envelope" aria-hidden="true"></i> info@dellyman.com (Enquiries Only)</p></a>
                            <a href="#"><p><i class="fa fa-envelope" aria-hidden="true"></i> support@dellyman.com (Support Only)</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

     <!-- FOOTER ENDS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>