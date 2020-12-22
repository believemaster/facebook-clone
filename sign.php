<?php

require 'core/load.php';

if (isset($_POST['first-name']) && !empty($_POST['first-name'])) {
    $upFirst = $_POST['first-name'];
    $upLast = $_POST['last-name'];
    $upEmailMobile = $_POST['email-mobile'];
    $password = $_POST['up-password'];
    $birthDay = $_POST['birth-day'];
    $birthMonth = $_POST['birth-month'];
    $birthYear = $_POST['birth-year'];
    if (!empty($_POST['gen'])) {
        $upGen = $_POST['gen'];
    }
    $birth = '' . $birthYear . '-' . $birthMonth . '-' . $birthDay . '';

    if (empty($upFirst) or empty($upLast) or empty($upEmailMobile) or empty($upGen)) {
        $error = 'All Fields Are Required';
    } else {
        $first_name = $loadFromUser->checkInput($first_name);
        $last_name = $loadFromUser->checkInput($last_name);
        $email_mobile = $loadFromUser->checkInput($email_mobile);
        $password = $loadFromUser->checkInput($password);
        $screenName = '' . $first_name . '_' . $last_name . '';
        if (DB::query(
            "SELECT screenName FROM users WHERE screenName = :screenName",
            array(":screenName" => $screenName);
        )) {
            $screenRand = rand();
            $userLink = ''.$screenName.''.$screenRand.'';
        } else {
            $screenLink =  $screenName;
        }
    }
} else {
    echo "No User Found";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Clone</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="header"></div>
    <div class="main">
        <div class="left-side">
            <img src="assets/image/facebook%20Signin%20image.png" alt="">
        </div>
        <div class="right-side">
            <div class="error">
                <?php if (!empty($error)) {
                    echo $error;
                } ?>
            </div>

            <h1 style="color: #212121;">Create An Account</h1>
            <div style="color: #212121; font-size: 20px;">It is free and always will be</div>
            <form action="sign.php" method="post" name="user-sign-up">
                <div class="sign-up-form">
                    <div class="sing-up-name">
                        <input type="text" name="first-name" id="first-name" class="text-field" placeholder="First Name">
                        <input type="text" name="last-name" id="last-name" class="text-field" placeholder="Last Name">
                    </div>
                    <div class="sign-wrap-mobile">
                        <input type="text" name="email-mobile" id="up-email" placeholder="Mobile number or email id" class="text-input">
                    </div>
                    <div class="sign-up-password">
                        <input type="password" name="up-password" id="up-password" class="text-input">
                    </div>
                    <div class="sign-up-birthday">
                        <div class="bday">Birthday</div>
                        <div class="form-birthday">
                            <select name="birth-day" id="days" class="select-body"></select>
                            <select name="birth-month" id="months" class="select-body"></select>
                            <select name="birth-year" id="years" class="select-body"></select>
                        </div>
                        <div class="gender-wrap">
                            <input type="radio" name="gen" id="fem" value="female" class="m0">
                            <label for="fem" class="gender">Female</label>
                            <input type="radio" name="gen" id="male" value="male" class="m0">
                            <label for="male" class="gender">Male</label>
                        </div>

                        <div class="term">
                            By clicking Sign Up, you agree to our terms, Data policy and Cookie policy. You may receive email notifications from us and can opt out from it anytime.
                        </div>
                        <input type="submit" value="Sign Up" class="sign-up">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script>
        for (i = new Date().getFullYear(); i > 1900; i--) {
            // 2020, 2019, 2018, 2017, ..... 1901
            $('#years').append($('<option/>').val(i).html(i));
        }

        for (i = 1; i < 13; i++) {
            $('#months').append($('<option/>').val(i).html(i));
        }

        updateNumberOfDays();

        function updateNumberOfDays() {
            $('#days').html('');
            month = $('#months').val();
            year = $('#years').val();
            days = daysInMonth(month, year);

            for (i = 1; i < days + 1; i++) {
                $('#days').append($('<option/>').val(i).html(i));
            }
        }

        $('#years , #months').on('change', function() {
            updateNumberOfDays();
        });

        function daysInMonth(month, year) {
            return new Date(year, month, 0).getDate();
        }
    </script>

</body>

</html>