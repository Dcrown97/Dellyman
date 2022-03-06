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
    <link rel="stylesheet" href = "css/howitworks.css">
    <title>Dellyman || How It Works</title>
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
                    <a href="/">Get Started</a>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION-1 ENDS -->


    <!-- CONTENTS HERE -->
    <div id = "content">
        <div id="hiw">
            <h3>How It Works</h3>
            <p>We built Dellyman to deliver an efficient and responsive delivery solution that aggregates 3rd Party Logistics Companies and their assets in a single market. Delivery services can be accessed on an on-demand basis, whether you are a customer, retailer, restaurant or e-commerce provider. Dellyman comes with a web portal as well as an App. The web portal provides a dashboard to logistics companies to manage their teams as well as track operations while customers can also place and track their orders online. Our rider and customer Apps allow for a richer delivery experience. Navigate below to see how it works.</p>
        </div>
        <div id = "cpr">
            <div id="cprflex">
                <h4 id = "c1">Customer</h4>
                <h4 id = "c2">Provider</h4>
                <h4 id = "c3">Rider</h4>
            </div>
        </div>
        <div class="tabcol">
            <div id ="row">
                <div class = "smimg">
                    <span><img src="{{ ('/images2/signup.png') }}"></span>
                </div>
                <div id ="colflx">
                    <div class = "rowimg">
                        <img src="{{ ('/images2/log.png') }}">
                    </div>
                    <div class = "rowtxt">
                        <h4>
                            Sign-up
                        </h4>
                        <p>
                            Customer signs up on the web at https://dellyman.com/sign-in or from the Dellyman Customer App on Playstore. Confirmation email will be sent to the email used for registration
                        </p>
                    </div>
                </div>
            </div>
            <div id = "row">
                <div class = "smimg">
                    <div><img src="{{ ('/images2/mail1.png') }}"></div>
                </div>
                <div id ="colflx">
                    <div class = "rowimg">
                        <img src="{{ ('/images2/mailcon.jpg') }}">
                    </div>
                    <div class = "rowtxt">
                        <h4>
                            Email Confirmation
                        </h4>
                        <p>
                            Customer confirms email using the link in the confirmation email
                        </p>
                    </div>
                </div>
            </div>
            <div id = "row">
                <div class = "smimg">
                    <div><img src="{{ ('/images2/pickup3.png') }}"></div>
                </div>
                <div id ="colflx">
                    <div class = "rowimg">
                        <img src="{{ ('/images2/pick.png') }}">
                    </div>
                    <div class = "rowtxt">
                        <h4>
                            Pickup Request
                        </h4>
                        <p>
                            Customer places a pickup request using the App or Web portal
                        </p>
                    </div>
                </div>
            </div>
            <div id = "row">
                <div class = "smimg">
                    <div><img src="{{ ('/images2/location3.png') }}"></div>
                </div>
                <div id ="colflx">
                    <div class = "rowimg">
                        <img src="{{ ('/images2/geofence.jpg') }}">
                    </div>
                    <div class = "rowtxt">
                        <h4>
                            Geofencing   </h4>
                        <p>
                            Dellyman finds logistics companies geofenced around customer pickup location and presents these to the Customer.
                        </p>
                    </div>
                </div>
            </div>
            <div id = "row">
                <div class = "smimg">
                    <div><img src="{{ ('/images2/signup.png') }}"></div>
                </div>
                <div id ="colflx">
                    <div class = "rowimg">
                        <img src="{{ ('/images2/step.png') }}">
                    </div>
                    <div class = "rowtxt">
                        <h4>
                            Selection
                        </h4>
                        <p>
                            Customer selects from the list of presented companies based on price, past customer ratings, no of orders as well as customer reviews.
                        </p>
                    </div>
                </div>
            </div>
            <div id = "row">
                <div class = "smimg">
                    <div><img src="{{ ('/images2/payment3.png') }}"></div>
                </div>
                <div id ="colflx">
                    <div class = "rowimg">
                        <img src="{{ ('/images2/pay.png') }}">
                    </div>
                    <div class = "rowtxt">
                        <h4>
                            Payment
                        </h4>
                        <p>
                            Customer makes payment and payment is escrowed by Dellyman until order is delivered
                        </p>
                    </div>
                </div>
            </div>
            <div id = "row">
                <div class = "smimg">
                    <div><img src="{{ ('/images2/lock3.png') }}"></div>
                </div>
                <div id ="colflx">
                    <div class = "rowimg">
                        <img src="{{ ('/images2/securitycode.png') }}">
                    </div>
                    <div class = "rowtxt">
                        <h4>
                            Get Delivery Code
                        </h4>
                        <p>
                            Customer gets a secured delivery code once order is picked up by rider
                        </p>
                    </div>
                </div>
            </div>
            <div id = "row">
                <div class = "smimg">
                    <div><img src="{{ ('/images2/lock3.png') }}"></div>
                </div>
                <div id ="colflx">
                    <div class = "rowimg">
                        <img src="{{ ('/images2/code.png') }}">
                    </div>
                    <div class = "rowtxt">
                        <h4>
                            Share Delivery Code
                        </h4>
                        <p>
                            Customer shares secured delivery code with the receiver of the item
                        </p>
                    </div>
                </div>
            </div>
            <div id = "row">
                <div class = "smimg">
                    <div><img src="{{ ('/images2/feedback3.png') }}"></div>
                </div>
                <div id ="colflx">
                    <div class = "rowimg">
                        <img src="{{ ('/images2/feedback.png') }}">
                    </div>
                    <div class = "rowtxt">
                        <h4>
                            Feedback   </h4>
                        <p>
                            Order is delivered and Customer rates the service
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENTS ENDS HERE -->




     <!-- SECTION-6 BEGINS -->
        <section id="section-6">
            <div class="lower-section">
                <div class="container lower">
                    <div class="left">
                        <h2>Still have questions about our Intracity Services?</h2>
                    </div>
                    <div class="right">
                        <div class="btn">
                            <a href="#">Contact Us</a>
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
                                <img src="{{ ('/home_images/logo-white.png') }}" alt="">
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