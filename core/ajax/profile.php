<?php
include '../load.php';
include '../../connect/login.php';


$userid = login::isLoggedIn();

if (isset($_POST['imgName'])) {
    $imgName = $loadFromUser->checkInput($_POST['imgName']);
    $userid = $loadFromUser->checkInput($_POST['userid']);

    $loadFromUser->update('profile', $userid, array('coverPic' => $imgName));

    echo "Cover Photo Found";
} else {
    echo 'Cover Photo Not Found';
}
