<!-- Laita tämä heti bodyn alkuun (iheader.php) -->
<!-- Load Facebook SDK for JavaScript -->
<!-- <div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> -->

<!-- Your share button code -->
<div class="fb-share-button" 
    data-href="<?php echo "http://" . $_SERVER ['HTTP_HOST'] . $_SERVER ['REQUEST_URI']; ?>" 
    data-layout="button_count">
</div>

<!-- https://developers.facebook.com/docs/plugins/share-button -->
