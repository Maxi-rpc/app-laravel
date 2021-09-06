<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App Laravel | Home</title>
</head>
<body>
    <h1>Hola Mundo Laravel!</h1>
    <p>Desde el HOME</p>
    <?php foreach($arreglo as $obj){ ?>
        <div class="card">
            <div class="card-body">
                <?php echo $obj->objeto->nombre; ?>
            </div>
        </div>
    <?php } ?>
    <h3>{{$arreglo}}</h3>
</body>
</html>
