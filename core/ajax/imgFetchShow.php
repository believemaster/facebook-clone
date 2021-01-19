<?php

include '../load.php';
include '../../connect/login.php';

$userid = login::isLoggedIn();

if (isset($_POST['fetchImgInfo'])) {
    $userid = $_POST['fetchImgInfo'];
    $postid = $_POST['postid'];
    $imgSrc = $_POST['imageSrc'];
?>

    <div class="top-wrap" style="position: fixed; top:0px; bottom: 0px; right:0px; left:0; justify-content: center; display:flex; background-color: #000000c4">
        <div class="post-img-wrap" style="display: flex; background-color: white; width: 70%; justify-content:center; align-items:center; height:100vh;">
            <div class="post-img-action" style="background-color: #0000008c; height: 100%; align-items:center; display:flex;">
                <img src=" <?php echo $imgSrc; ?>" style="width: 500px" alt="">
            </div>
            <div class="post-img-details" style="width: 100%; padding: 20px; align-self:flex-start;">

                <div class="nf-3">
                </div>
                <div class="nf-4">
                    <div class="like-action-wrap">
                        <div class="like-action ra">
                            <div class="like-action-icon">
                                <img src="assets/image/likeAction.jpg" alt="">
                            </div>
                            <div class="like-action-text">
                                <span>Like</span>
                            </div>
                        </div>
                    </div>
                    <div class="comment-action ra">
                        <div class="comment-action-icon">
                            <img src="assets/image/commentAction.jpg" alt="">
                        </div>
                        <div class="comment-action-text">
                            <div class="comment-count-text-wrap">
                                <div class="comment-text">comment</div>
                            </div>
                        </div>
                    </div>
                    <div class="share-action ra" data-postid="<?php echo $post->post_id; ?>" data-userid="<?php echo $user_id; ?>" data-profilePic="<?php echo $post->profilePic; ?>">
                        <div class="share-action-icon">
                            <img src="assets/image/shareAction.jpg" alt="">
                        </div>
                        <div class="share-action-text">share</div>
                    </div>
                </div>
                <div class="nf-5">
                </div>

            </div>
        </div>
    </div>


<?php
}
