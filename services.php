<?php
require_once 'modules/config.php';

$sql = 'SELECT
            icon, title, content
        FROM
            services';

$stmt = $pdo->query(
    'SELECT
        icon, title, content, alt
    FROM
        services'
);

$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(!$stmt){
    echo "There was a problem querying services.";
}

?>

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
                <?php foreach($arr as $item){ ?>
                    <div class="srv-col">
                        <a href="contact.php">
                            <img src="<?php echo $item['icon']?>" alt="<?php echo $item['alt']?>"/>
                            <h3><?php echo $item['title']?></h3>
                            <p><?php echo $item['content']?></p>
                        </a>
                    </div>
                <?php } ?>

            </div>

            <?php include 'modules/reviews.php'; ?>
            
        </main>
        
        <?php include 'modules/footer.php'; ?>

        <script src="/js/main.js" async defer></script>
    </body>
</html>