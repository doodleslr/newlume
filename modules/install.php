<?php 
$root = realpath(__DIR__ . '/..');
$databaseSrv = $root . '/data/services.sqlite';

$dsn = 'sqlite:' . $databaseSrv;
$error = '';

//prevents overwriting existing db
if(is_readable($databaseSrv) && filesize($databaseSrv) > 0){
    $error = 'Delete the existing database before installing.';
}

//creates empty file for database
if(!$error){
    $createdSrv = @touch($databaseSrv);

    if(!$createdSrv){
        $error = sprintf('Could not create the services database, please allow the server to create new files in "%s"',
         dirname($databaseSrv)
        );
    }
}

//get contents of sql
if(!$error){
    $sql = file_get_contents($root . '/data/services.sql');

    if($sql === false) {
        $error = 'Cannot find services SQL file';
    }
}

if(!$error){
    $pdo = new PDO($dsn);
    $result = $pdo->exec($sql);
    if($result === false){
        $error = 'Could not run SQL: ' . print_r($pdo->errorInfo(), true);
    }
}
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>NewLume Installer</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style type="text/css">
            .box {
                border: 1px dotted silver;
                border-radius: 5px;
                padding: 4px;
            }
            .error {
                background-color: #ff6666;
            }
            .success {
                background-color: #88ff88;
            }
        </style>
    </head>
    <body>
        <?php if($error){ ?>
            <div class='error box'>
                <?php echo $error ?>
            </div>
        <?php } else { ?>
            <div class='success box'>
                The database was created OK.
            </div>
            <a href="../index.php">Click for homepage</a>
        <?php } ?>
    </body>
</html>