<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PNJ CLIP TIVI LCD</title>
    <meta http-equiv="refresh" content="1800">
    <style>
        * {
            cursor: none;
        }

        iframe {
            overflow: hidden;
            overflow-x: hidden;
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0px;
            left: 0px;
            bottom: 0px;
            right: 0px;
            pointer-events: none;
        }
    </style>
</head>

<body>
    <?php
    // 0 - tivi ngang
    // 1 - tivi xoay trai
    // 2 - tivi xoay phải (optional)
    $xoay = isset($_GET["xoay"]) ? $_GET["xoay"] : 0; 

    // thay LIST_ID bằng ID của playlist trên Youtube
    switch ($xoay) {
        case '1':   // xoay trai
            $LIST_ID = "PLxXOutXZNyFofOJMMZauQZ-AMGh7FB7ac";
            break;
        
        case '2':   // xoay phai
            $LIST_ID = "PLxXOutXZNyFpA0umgqL4OAIcNosQni-mU";
            break;

        default:    // case 0 & other values
            $LIST_ID = "PLxXOutXZNyFrKifCtNbdv45e2zwy2u_Ti";
            break;
    }


    $content = '
        <iframe
            frameborder="0" allow="autoplay"
            allowfullscreen src="https://www.youtube.com/embed?listType=playlist&list=' . $LIST_ID . '&autoplay=1&mute=1&controls=0&loop=1">
        </iframe>
        ';

    echo $content;
    ?>

    <script>
        document.addEventListener("contextmenu", function(e) {
            e.preventDefault();
        });
    </script>

</body>

</html>