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
    data-setup='{}'>
  <source src="https://www.pexels.com/video/woman-running-with-her-dog-2796084/" type="video/mp4"></source>
  <source src="https://www.pexels.com/video/woman-running-with-her-dog-2796084/" type="video/webm"></source>
  <source src="https://www.pexels.com/video/woman-running-with-her-dog-2796084/" type="video/ogg"></source>
  <p class="vjs-no-js">
    To view this video please enable JavaScript, and consider upgrading to a
    web browser that
    <a href="https://videojs.com/html5-video-support/" target="_blank">
      supports HTML5 video
    </a>
  </p>
</video>

<?php
include "view-footer.php";
?>
