<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>
    
    <main>
        <form action="content.php" method="Get">
            
            <div>
                <textarea name="text" placeholder="Inserisci il testo..."></textarea>
            </div>
            
            <div>
                <input type="text" name="badWord" placeholder="parola da censurare">
            </div>

            <button type="submit">Invia</button>
        </form>
    </main>

</body>
</html>