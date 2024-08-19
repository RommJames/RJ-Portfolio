<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading Animation</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: 0;
        }

        body{
            background: #09061c;
        }

        .container{
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items:center;
            /* margin: 15% 45%; */
        }

        .container > div{
            height: 150px;
            width: 20px;
            background-color: #44fffb;
            /* display: inline-block; */
            /* margin-right: 10px; */
            margin: 5px;
            border-radius: 10px;
        }

        .container > div:nth-child(1){
            animation: loading 1s 0.1s infinite ease-in-out;
        }

        .container > div:nth-child(2){
            animation: loading 1s 0.2s infinite ease-in-out;
        }

        .container > div:nth-child(3){
            animation: loading 1s 0.3s infinite ease-in-out;
        }

        .container > div:nth-child(4){
            animation: loading 1s 0.4s infinite ease-in-out;
        }

        @keyframes loading {
            0%{
                transform: scaleY(1);
            }

            50%{
                transform: scaleY(0.5);
            }

            100%{
                transform: scaleY(1);
            }
        }


    </style>
    <?php
        include_once("../icon.php");
    ?>
</head>
<body>
    <div class="container">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
<script>
    setTimeout(() => {
        window.location.href = "../"
    }, 5000);
</script>
</body>
</html>