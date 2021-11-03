<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta</title>
</head>
<body>
    <style>
        body{
            background-color: darkgrey;
        }
        .btn{
            background-color: cadetblue;
            color: white;
            font-family: 'Courier New', Courier, monospace;
            font-size: 1.2em;
            border-radius: 5px;
            position: absolute;
            cursor: pointer;
            border-radius: 5px;
        }
        #btn_no{
            margin: 2em;
            left: 6%;
            top: 8.3%;
        }
        #btn_si{
            margin: 1em;
        }
    </style>
    <h1>¿Quieres ser mi novia?</h1>
    <button class="btn" id="btn_si">SI</button>
    <button class="btn" id="btn_no">NO</button>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script >
    $("#btn_no").hover(function () {
    $("#btn_no").css("top", `${Math.random() * 710}px`);
    $("#btn_no").css("left", `${Math.random() * 1000}px`);
    });
</script>
</html>
