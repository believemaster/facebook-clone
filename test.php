<?php

// $arr = array("hello", "world");
// echo implode(' ', $arr) . "<br>";


// $arr = array("hello" => "x5", "world" => "x6");
// print_r(array_keys($arr));

// echo "<br>" . password_hash('123456', PASSWORD_BCRYPT);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .top-box {
            background-color: rgba(255, 255, 255, 0.9);
            position: fixed;
            width: 75%;
            height: 75%;
            top: 12.5%;
            left: 12.5%;
            display: block;
            box-shadow: 0 0 5px black;
            border-radius: 2px;
            z-index: 999;
        }

        .align-vertical-middle {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px;
        }

        .profile-pic-upload-action {
            margin-top: 30px;
        }

        .upload-plus-text {
            font-size: 30px;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="top-box align-vertical-middle profile-dialoge-show">
        <div class="profile-pic-upload-action">
            <div class="pro-pic-up">
                <div class="file-upload">
                    <label for="profile-upload" class="file-upload-label">
                        <span class="upload-plus-text align-middle"><span class="upload-plus-sign">+</span>Upload Photo</span>
                    </label>
                    <input type="file" name="file-upload" id="profile-upload" class="file-upload-input">
                </div>
            </div>
            <div class="pro-pic-choose"></div>
        </div>
    </div>
</body>

</html>