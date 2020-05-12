<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Selu Tech</title>

        <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}" />
    </head>
    <body>
        <div class="container">
            <header>
                <nav>
                    <h1>Selu <span>technologies</span></h1>
                    

                    <ul>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>

                </nav>
            </header>

            <section id="splash">
                <div id="ctaWrapper">
                    <div id="ctaLeftDiv">
                        <h1>Big websites</h1>
                        <h2>for small business</h2>
                    </div>
                    <div id="ctaRightDiv">
                        <form action="#">
                            <label for="name">Name:</label>
                            <input name="name" type="text">
                            <label for="email">Email:</label>
                            <input name="email" type="email">
                            <label for="phone">Phone:</label>
                            <input name="phone" type="tel">
                            <button type="submit">Let's Talk ></button>
                        </form>
                    </div>
                </div>
            </section> 
        </div>
        
        <img id="splashSvgStart" src="{{URL::asset('/images/splashSvgStart.svg')}}" alt="">

        <section id="serviceSection">
            <div class="container">
                <div id="serviceWrapper">
                    <div id="serviceBtnGroup">
                        <div class="serviceCard">
                            <h1>Design</h1>
                        </div>     
                        <div class="serviceCard">
                            <h1>Develop</h1>
                        </div>
                        <div class="serviceCard">
                            <h1>Deploy</h1>
                        </div>
                    </div>
                    <div id="serviceDescription">
                        <h2>Let us handle all of the setup</h2>
                        <ul>
                            <li>Domain registration and setup</li>
                            <li>Server configuration and optimization</li>
                            <li>Deployment and maintenance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>
