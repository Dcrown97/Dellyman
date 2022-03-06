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
    <title>Dellyman || Home</title>
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
                                <a class="nav-link" href="/track_package">Track Package</a>
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
                                <a class="nav-link active" aria-current="page" href="/developers">Developers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="contact_us">Contact Us</a>
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


    <!-- SECTION-2 BEGINS -->
        <section id="section-2">
            <div class="top-section">
                <div class="container">
                    <div class="top-1">
                        <div class="header">
                            <h1>Get Estimate</h1>
                        </div>
                        <div class="divider"></div>
                    </div>
                    <div class="top-2" id="top-2">
                        <div class="inputs">
                            <input type="text" placeholder="Pickup Address">
                            <input type="text" placeholder="Delivery Address">
                            <input type="text" placeholder="Weight">
                            <select name="" id="">
                                <option value="">Select Carrier</option>
                                <option value="">Bike</option>
                                <option value="">Tricycle</option>
                                <option value="">Mini Van</option>
                                <option value="">Vans/Buses</option>
                                <option value="">Cars</option>
                            </select>
                            <div class="btn">
                                <a href="/">Get Estimate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- SECTION-2 ENDS -->



    <!-- SECTION-3 BEGINS -->
        <section id="section-3">
            <div class="container">
                <div class="left-part">
                    <div class="header">
                        <h1>Our Company</h1>
                    </div>
                    <div class="divider"></div>
                    <div class="top">
                        <div class="text">
                            <p>
                                We are a travels and transport logistics technology provider, 
                                aggregating logistics companies and their assets into a single 
                                platform where customers and logistics companies can transact 
                                business. Our main purpose is to solve the problems of under-capacity 
                                and non-availability of logistics assets, security, timeliness and 
                                efficiency of last mile deliveries.
                            </p>
                        </div>
                    </div>
                    <div class="lower">
                        <div class="left">
                            <div class="header">
                                <h2>Mission</h2>
                            </div>
                            <div class="text1">
                                <p>
                                    To solve the same day delivery challenges in the courier 
                                    and package delivery industry.
                                </p>
                            </div>
                        </div>
                        <div class="right">
                            <div class="header">
                                <h2>Vision</h2>
                            </div>
                            <div class="text2">
                                <p>
                                    Our vision is to lead the logistics market across Africa in 
                                    the use of technology tools that improve the efficiency of 
                                    operations as well as deliver high financial returns to our 
                                    shareholders.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-part">
                    <div class="image">
                        <img src="{{ ('./home_images/company.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>

     <!-- SECTION-3 ENDS -->



     <!-- SECTION-4 BEGINS -->
        <section id="section-4">
            <div class="background">
                <div class="container">
                    <div class="header-section">
                        <div class="header">
                            <h1>Features</h1>
                        </div>
                        <div class="divider"></div>
                    </div>
                    <div class="row row-1">
                        <div class="col-md-4 col-sm-12 column">
                            <div class="image">
                                <img src="{{ ('./home_images/easybooking.png') }}" alt="">
                            </div>
                            <div class="title">
                                <h3>Easy Booking</h3>
                            </div>
                            <div class="text">
                                <p>
                                    Anyone can book pickup from the comfort of their 
                                    home or office. You don’t need to know or visit the 
                                    logistics company.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 column">
                            <div class="image">
                                <img src="{{ ('./home_images/feature2.png') }}" alt="">
                            </div>
                            <div class="title">
                                <h3>Fast Delivery</h3>
                            </div>
                            <div class="text">
                                <p>
                                    We locate the logistics companies that are closest to 
                                    pickup and dropoff locations to reduce delivery time.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 column">
                            <div class="image">
                                <img src="{{ ('./home_images/feature3.png') }}" alt="">
                            </div>
                            <div class="title">
                                <h3>Rate Comparison</h3>
                            </div>
                            <div class="text">
                                <p>
                                    Customers can make a decision on which logistics company 
                                    to choose based on price, track record and capacity.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row row-2">
                        <div class="col-md-4 col-sm-12 column">
                            <div class="image">
                                <img src="./images/feature4.png" alt="">
                                <img src="{{ ('./home_images/feature4.png') }}" alt="">
                            </div>
                            <div class="title">
                                <h3>Live Tracking</h3>
                            </div>
                            <div class="text">
                                <p>
                                    Real time tracking technology ensures you know where 
                                    your package is at any point in time.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 column">
                            <div class="image">
                                <img src="{{ ('./home_images/feature5.png') }}" alt="">
                            </div>
                            <div class="title">
                                <h3>Security</h3>
                            </div>
                            <div class="text">
                                <p>
                                    Unique security code known to the owner and receiver of the 
                                    package ensures deliveries only to the right recipient.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 column">
                            <div class="image">
                                <img src="{{ ('./home_images/feature6.png') }}" alt="">
                            </div>
                            <div class="title">
                                <h3>Great Support</h3>
                            </div>
                            <div class="text">
                                <p>
                                    Support from well trained customer support team who go 
                                    an extra mile to ensure every delivery is completed to satisfaction.
                                </p>
                            </div>
                        </div>
                        </div>
                    </div>

                    <!-- Our Delivery Partner Row  -->
                    <div class="container">
                        <div class="delivery">
                            <div class="left-part">
                                <div class="text-section">
                                    <div class="header">
                                        <h1>Our Delivery Partners</h1>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="text">
                                        <p>
                                            Dellyman partners with logistics companies who have committed 
                                            to quality assets and well trained riders/drivers. 
                                            Our delivery partners have experience and understand the 
                                            importance of speed, safety and great customer service in 
                                            fulfilling every customer order.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="right-part">
                                <div class="image">
                                    <img src="{{ ('./home_images/dpartnerz.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

     <!-- SECTION-4 ENDS -->


     <!-- SECTION-5 BEGINS -->
        <section id="section-5">
            <div class="container">
                <div class="row">
                    <div class="left-part col-lg-7 col-md-7 col-sm-12">
                        <div class="content">
                            <div class="header">
                                <h1>Book your package delivery in seconds</h1>
                            </div>
                            <div class="divider"></div>
                            <div class="text">
                                <p>
                                    Choose your pickup & dropoff location and select a 
                                    logistics company. We will take care of the rest.
                                </p>
                            </div>
                            <div class="image">
                                <div class="img">
                                    <img src="{{ ('./home_images/googleplay.png') }}" alt="">
                                </div>
                                <div class="img">
                                    <img src="{{ ('./home_images/apple.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-part col-lg-5 col-md-5 col-sm-12">
                        <div class="image">
                            <img src="{{ ('./home_images/delivery.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

     <!-- SECTION-5 ENDS -->


     <!-- SECTION-6 BEGINS -->
        <section id="section-6">
            <div class="container">
                <div>
                    <div class="items">
                        <div class="item">
                            <p class="p1">43,886</p>
                            <p>DELIVERIES</p>
                        </div>
                        <div class="item">
                            <p class="p1">229</p>
                            <p>AFFILIATES</p>
                        </div>
                        <div class="item">
                            <p class="p1">7,132</p>
                            <p>CUSTOMERS</p>
                        </div>
                        <div class="item">
                            <p class="p1">276</p>
                            <p>COMPANIES</p>
                        </div>
                        <div class="item">
                            <p class="p1">366</p>
                            <p>ASSETS</p>
                        </div>
                    </div>
                </div>
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