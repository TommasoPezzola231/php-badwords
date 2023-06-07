<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura il testo</title>
</head>
<body>

    <?php 
        $testo = $_GET["text"];
        $censura = $_GET["badWord"];
        $testoCensurato = str_replace($censura, "***", $testo);
    ?>


    <p> 
        <?php echo $testo ?> 
    </p>
    <small> 
        Lunghezza del paragrafo: <?php echo strlen($testo) ?> caratteri
    </small>


    <h3>Paragrafo censurato</h3>
    <p>
        <?php echo $testoCensurato ?>
    </p>
    <small> 
        Lunghezza del paragrafo censurato: <?php echo strlen($testoCensurato) ?> caratteri
    </small>

</body>
</html>