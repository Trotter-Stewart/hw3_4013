<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $pageTitle?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="//vjs.zencdn.net/8.19.1/video-js.min.css" rel="stylesheet">
    <script src="//vjs.zencdn.net/8.19.1/video.min.js"></script>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="breeds.php">Breeds</a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="colors.php">Colors</a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="size.php">Sizes</a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="dogs.php">Dogs</a>
        </li>

            <li class="nav-item">
          <a class="nav-link" href="dogs-with-breeds.php">Dogs with breed</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
      <h1>The Dawg House</h1>
<video
    id="my-player"
    class="video-js"
    controls
    preload="auto"
    poster="//vjs.zencdn.net/v/oceans.png"
    data-setup='{}'>
  <source src="https://www.pexels.com/video/west-highland-white-terrier-walking-on-lawn-grass-1182756/" type="video/mp4"></source>
  <source src="https://www.pexels.com/video/west-highland-white-terrier-walking-on-lawn-grass-1182756/" type="video/webm"></source>
  <source src="https://www.pexels.com/video/west-highland-white-terrier-walking-on-lawn-grass-1182756/" type="video/ogg"></source>
  <p class="vjs-no-js">
    To view this video please enable JavaScript, and consider upgrading to a
    web browser that
    <a href="https://videojs.com/html5-video-support/" target="_blank">
      supports HTML5 video
    </a>
  </p>
</video>
