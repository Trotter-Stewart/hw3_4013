<?php
$pageTitle = "Home";
include "view-header.php";
?>
    <h1>Dawg Haus LLC</h1>

<video
    id="my-player"
    class="video-js"
    controls
    preload="auto"
    poster="//vjs.zencdn.net/v/oceans.png"
    data-setup='{}'
    width="640"
    height="360">
  <source src="https://videos.pexels.com/video-files/2796084/2796084-uhd_2560_1440_25fps.mp4" type="video/mp4"></source>
  <p class="vjs-no-js">
    To view this video please enable JavaScript, and consider upgrading to a
    web browser tha
    <a href="https://videojs.com/html5-video-support/" target="_blank">
      supports HTML5 video
    </a>
  </p>
</video>

<?php
include "view-footer.php";
?>
