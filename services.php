<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>NewLume</title>
        <meta name="description" content="Quality and reliable electrical services">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php include 'modules/menu.php'; ?>

        <div id="splash">
            <div class="splash-container">
                <img src="img/bulb-logo.svg" alt="NewLume light bulb logo"/>
            </div>
            <div class="splash-container">
                <img src="img/NEWLUME-logo.png" alt="NewLume text logo"/>
            </div>            
        </div>

        <main>
            <div class="srv-row">
                <div class="srv-col">
                    <a>
                        <img src="img/item-domestic.svg" alt="Blocked Drain"/>
                        <h3>Lighting</h3>
                        <p>Need brightening up? Call us about our interior and exterior LED or decorative lighting.</p>
                    </a>
                </div>
                <div class="srv-col">
                    <a>
                        <img src="img/item-domestic.svg" alt="Blocked Drain"/>
                        <h3>Lighting</h3>
                        <p>Need brightening up? Call us about our interior and exterior LED or decorative lighting.</p>
                    </a>
                </div>
                <div class="srv-col">
                    <a>
                        <img src="img/item-domestic.svg" alt="Blocked Drain"/>
                        <h3>Lighting</h3>
                        <p>Need brightening up? Call us about our interior and exterior LED or decorative lighting.</p>
                    </a>
                </div>
            </div>

            <?php include 'modules/reviews.php'; ?>

            <div class="home-map">
                <p>We believe that Sydney deserves a local electrician service that beyond reliable, at NewLume, we are committed to offering exactly that.<br>
                    We provide professional, personable tradesmen, exhibiting our trademark courtesy and a friendly and approachable demeanour.<br>
                    As local Sydney electricians for many years, we have tackled almost any job you can find for us! Our services are in demand across this city’s business and private landscapes, from full setups in professional offices, to simple appliance repair work.<br>
                    For a full list of our services, <a>click here.</a></p>
                <iframe src="https://snazzymaps.com/embed/142095" width="100%" max-height="300px" style="border:none;"></iframe>
            </div>

            <div class="home-contact">
                <p>Request an appointment by <a>calling us</a> at <a>0406 603 080</a> or get in touch below.</p>
                <form class="contact-block" action="/submit" method="POST">
                    <div>
                        <input type="text" placeholder="Name">
                        <input type="email" placeholder="Email">
                    </div>
                    <div>
                        <input type="tel" placeholder="Phone">
                        <input class="form-message" type="text" placeholder="Message">
                    </div>
                    <button type="submit" class="submit-button">Submit</button>
                </form>
            </div>
        </main>
        
        <?php include 'modules/footer.php'; ?>

        <script src="/js/main.js" async defer></script>
    </body>
</html>