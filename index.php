<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="container">
        <!--start of upper container-->
        <div id="highCont">
            <img src="img/cqdam.png"alt="Raheem Nadirr" class="raheem"/>
        </div>


    <!--start of lower container-->
        <div id="lowCont">
            <div id="text">
                <h3>Raheem Nadirr</h3>
                <p><?php
                            date_default_timezone_set('UTC');
                            echo date(" h:i:s A", time());
                    ?></p>
            </div>

            <div id="button">
                <button>Get more Shares!</button>
            </div>

        </div>
    </div>
</body>
</html>