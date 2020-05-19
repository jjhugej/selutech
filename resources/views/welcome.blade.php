<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LillyPad Web Development</title>

        <script src="https://kit.fontawesome.com/888059e617.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}" />
        <head>
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('/images/icon.ico')}}" />
</head>
        
    </head>
    <body>

        <nav id="nav">
            <div id="navWrapper">
                <div id="logoWrapper">
                    <a href="#heroSection">
                        <div id="logo"></div>
                    </a>
                    
                </div>
                    <div id="hamburger">
                        <input id="menuToggle" type="checkbox">
                        <span></span>
                        <span></span>
                        <span></span>
                        <div id="navLinkWrapper">
                            <div id="navLinks">
                                <a class="navLink" href="#services">Services</a>
                                <a class="navLink" href="#contact">Contact</a>
                            </div>
                    </div>
                </div>
            </div>
        </nav>
        <section id="heroSection">
            <div id="hero">
                <div id="brand">
                    <h1>Lilly Pad</h1>
                    <h2>Web Development</h2>
                </div>
                <div id="dynamicTextWrapper">
                    <p id="js_target_one"></p>
                </div>
            </div>
        </section>
        
        <div id="svgWrapTop">
            <img id="splashSvgStart" src="{{URL::asset('/images/splashSvgStart.svg')}}" alt="bluewave">
        </div>
        
        <section id="dddSection">
            <div class="container">
                <div id="dddBtnGroup">
                    <button id="designBtn" class="dddBtn">Design</button>
                    <button id="developBtn" class="dddBtn">Develop</button>
                    <button id="deployBtn" class="dddBtn">Deploy</button>
                </div>
                <div id="dddDescriptionContainer">
                    <div id="designDesc" class="dddDescription">
                        <h1>Designed with the user in mind</h1>
                        <ul>
                            <li>Responsive web sites that fit any device</li>
                            <li>Sleek and intuitive user interfaces</li>
                            <li>Completely custom designs with your brand in mind</li>  
                        </ul>
                    </div>
                     {{--
                    <div id="developDesc" class="dddDescription d-none">
                        <h1>Custom built code</h1>
                        <ul>
                            <li>Fast as lightning</li>
                            <li>Minimize bloat and dependencies with custom code</li>
                            <li>Automated web tools for your business</li>
                        </ul>
                    </div>
                    <div id="deployDesc" class="dddDescription d-none">
                        <h1>Let us handle all of the setup</h1>
                        <ul>
                            <li>Domain registration</li>
                            <li>Server configuration and optimization</li>
                            <li>Deployment and maintenance</li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </section>

        <div id="svgWrapBottom">
            <img id="splashSvgEnd" src="{{URL::asset('/images/splashSvgStart.svg')}}" alt="bluewave">
        </div>


        <section id="serviceSection">
            <div id="services" class="serviceContainer">
                <h1>Services</h1>
                <h2>We offer a robust array of services to suit your needs</h2>
                <div id="servicesGroupWrapper">
                    <div class="serviceGroup">
                        <i class="fas fa-draw-polygon"></i>
                        <div class="serviceText">
                            <h3>Web Design</h3>
                            <p>Does your website need some touch ups? Or do you need an entirely new design? We've got you covered.</p>
                        </div>
                    </div>
                    <div class="serviceGroup">
                        <div class="serviceText">
                            <h3>Web App Development</h3>
                            <p>Need more than a static website? Our specialty is creating custom web applications.</p>
                        </div>
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="serviceGroup">
                        <i class="fas fa-chart-line"></i>
                        <div class="serviceText">
                            <h3>S.E.O.</h3>
                            <p>Ads are great, top search results are better. We can help you organically move up the ranks for all major search engines.</p>
                        </div>
                    </div>
                    <div class="serviceGroup">
                        <div class="serviceText">
                            <h3>General Web Consulting</h3>
                            <p>We can answer all of your web related questions.</p>
                        </div>
                        <i class="far fa-lightbulb"></i>
                    </div>
                </div>
            </div>
        </section>
        <div id="contact" class="container">
            <a name="contact" href="#"></a>
            <section id="splash">
                <div id="ctaWrapper">
                    <div id="ctaLeft">
                        <h2>Big websites</h2>
                        <p>for small business</p>
                    </div>
                   
                    <div id="ctaRight">

                    

                        
                    <form id="ctaForm" action="http://selutech.test/contact" method="POST">
                        @csrf
                            <label for="name">Name:</label>
                            <div id="formName" class="errors"></div>
                            <input name="name" type="text">
                            <label for="email">Email:</label>
                            <div id="formEmail" class="errors"></div>
                            <input name="email" type="email">
                            <label for="phone_number">Phone:</label>
                            <div id="form_phone_number" class="errors"></div>
                            <input name="phone_number" type="tel">
                            
                            <div id="success"></div>
                            <input id="submitBtn" type="submit" value="Let's Talk >">
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <footer>
            <div id="footerWrapper">
                <div id="footerLeft">
                    <div id="footerBrand">
                        <h4>LillyPad Web Development</h4>
                    </div>
                    <br>
                    <p>(828)788-5961 </p>
                    <br>
                    <p> support@lillypadwebdev.com </p>               
                </div>
                <div id="footerRight">
                       <h4>68 Toot Hollow Circle</h4>
                    <br>
                    <p>Bryson City, NC 28713</p>
                </div>
            </div>
        </footer>


    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
        <script type="module" src="{{ asset('/js/type/src/type.js') }}"></script>
        <script src="{{ asset('/js/ddd.js') }}"></script>
        <script src="{{ asset('/js/cta.js') }}"></script>
        <script src="{{ asset('/js/navbar.js') }}"></script>        
    
    </body>
</html>
