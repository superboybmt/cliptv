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
    $type = $_GET["type"] ? $_GET["type"] : 0; // 0 - tivi ngang; 1 - tivi xoay trai; 2 - tivi xoay phải (optional)

    // thay LIST_ID bằng ID của playlist trên Youtube
    switch ($type) {
        case '1':
            $LIST_ID = "PL9gJ-ihe1XyA9of_NnG3R0pQ64lXDbEmE";
            break;

        default:
            $LIST_ID = "PL9gJ-ihe1XyDgSHlYJWCxvwRjvkdvLQmX";
            break;
    }


    $content = '
        <iframe
            frameborder="0" allow="autoplay"
            allowfullscreen src="https://www.youtube.com/embed?listType=playlist&list=' . $LIST_ID . '&autoplay=1&mute=1&controls=0&loop=1">
        </iframe>
        ';

    echo $content
    ?>

    <script>
        document.addEventListener("contextmenu", function(e) {
            e.preventDefault();
        });
    </script>

</body>

</html>