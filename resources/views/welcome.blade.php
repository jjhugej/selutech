<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LillyPad | Web Development</title>

        <script src="https://kit.fontawesome.com/888059e617.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}" />
    </head>
    <body>

        <nav id="nav">
            <div id="navWrapper">
                <div id="logo">
                    <p>LillyPad</p>
                </div>
                    <div id="hamburger">
                        <input id="menuToggle" type="checkbox">
                        <span></span>
                        <span></span>
                        <span></span>
                        <div id="navLinkWrapper">
                            <div id="navLinks">
                                <a href="#">Services</a>
                                <a href="#">Pricing</a>
                                <a href="#">Contact</a>
                            </div>
                    </div>
                </div>
            </div>
        </nav>
        
        <div id="svgWrapTop">
            <img id="splashSvgStart" src="{{URL::asset('/images/splashSvgStart.svg')}}" alt="">
        </div>
        
        <section id="dddSection">
            <div class="container">
                <div id="dddBtnGroup">
                    <h1 class="dddBtn">Design</h1>
                    <h1 class="dddBtn">Develop</h1>
                    <h1 class="dddBtn">Deploy</h1>
                </div>
                <div id="dddDescriptionContainer">
                    <div class="dddDescription">
                        <h1>Let us handle all of the setup</h1>
                        <ul>
                            <li>Domain registration</li>
                            <li>Server configuration and optimization</li>
                            <li>Deployment and maintenance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div id="svgWrapBottom">
            <img id="splashSvgEnd" src="{{URL::asset('/images/splashSvgStart.svg')}}" alt="">
        </div>

        <section id="serviceSection">
            <div class="serviceContainer">
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
                            <p>Need more than a static website? Our specialty is creating custom web applications for small businesses.</p>
                        </div>
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="serviceGroup">
                        <i class="fas fa-chart-line"></i>
                        <div class="serviceText">
                            <h3>S.E.O.</h3>
                            <p>Ads are great, top search results are better. Organically move up the ranks for all major search engines.</p>
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
        <div class="container">
            <section id="splash">
                <div id="ctaWrapper">
                    <div id="ctaLeft">
                        <h2>Big websites</h2>
                        <p>for small business</p>
                    </div>
                    <div id="ctaRight">
                        <form action="#">
                                <label for="name">Name:</label>
                                <input name="name" type="text">
                                <label for="email">Email:</label>
                                <input name="email" type="email">
                                <label for="phone">Phone:</label>
                                <input name="phone" type="tel">
                                <input id="submitBtn" type="submit" value="Let's Talk >">
                            </form>
                    </div>
                </div>
            </section>
        </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('/js/testing.js') }}"></script>
    </body>
</html>
