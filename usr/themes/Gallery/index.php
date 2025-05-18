<?php
 /**
  * "ENPHO Gallery" <br/> "aaa"
  * @package Gallery
  * @author "Aurorum, chris62283, Hatsune's Husband"
  * @link https://enpho.aurorum.co/projects/gallery
  * @version 0.0.1.alpha
  */
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php $this->archiveTitle(array('category' => '分类 %s 下的文章', 'search' => '包含关键字 %s 的文章', 'tag' => '标签 %s 下的文章', 'author' => '%s 发布的文章'), '', ' - '); ?><?php $this->options->title(); ?></title>
  <!-- <title>ENPHO Gallery</title>
  <script src="usr\themes\Gallery\assets\photoswipe-lightbox.esm.js"></script>
  <script src="usr\themes\Gallery\assets\photoswipe-lightbox.esm.js.map"></script>
  <script src="usr\themes\Gallery\assets\photoswipe-lightbox.esm.min.js"></script>
  <script src="usr\themes\Gallery\assets\photoswipe.esm.js"></script>
  <script src="usr/themes/Gallery/assets/photoswipe.esm.min.js"></script>
  <link href="usr\themes\Gallery\assets\photoswipe.css" rel = "stylesheet"/> -->
<link rel="stylesheet" href="https://unpkg.com/photoswipe@5/dist/photoswipe.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="usr\themes\Gallery\assets\css\header.css">
<link rel="stylesheet" type="text/css" href="usr\themes\Gallery\assets\css\gallery.css">
<link rel="stylesheet" type="text/css" href="usr\themes\Gallery\assets\css\slides.css">

</head>

<body>
  <div class="header">
        <nav class="navbar navbar-default">
            <div class="container">
                <h1 class="navbar-brand">Hello</h1>
                <!--<a class="navbar-brand" href="index.html"><img style="width:150px" src="https://showcase.aurorum.co/tools/tracker/track.php/icon.jpg"/></a>-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a target="_blank" href="index.html">HOME</a></li>
                        <li><a target="_blank" href="biology.html">Biology</a></li>
                        <li><a target="_blank" href="curiosity.html">Curiosity</a></li>
                        <li class="dropdown">
                            <a target="_blank" class="dropdown-toggle" data-toggle="dropdown" href="#">Common Natures<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a target="_blank" href="dforh.html">Desire for a "Home"</a></li>
                                <li><a target="_blank" href="sociality.html">Sociality</a></li>
                                <li><a target="_blank" href="dofc.html">Desire of Control</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a target="_blank" class="dropdown-toggle" data-toggle="dropdown" href="#">Pages<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><i class="fa-solid fa-scroll"></i> <a target="_blank" class="text-white" href="essay.html">MP1 essay</a></li>
                                <li><i class="fa-solid fa-circle-info"></i> <a target="_blank" class="text-white" href="credits.html">References/Credits</a></li>
                                <li><i class="fa-solid fa-circle-info"></i> <a target="_blank" class="text-white" href="sitemap.html">Sitemap</a></li>
                                <li><a target="_blank" class="text-white" href="poster.html">The Whole Poster</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php include 'usr/themes/Gallery/parts/slides.php'; ?>
    </div>

  <div class="gallery" id="gallery">
  <a href="https://source.unsplash.com/random/800x600" 
     data-pswp-width="800" 
     data-pswp-height="600" 
     target="_blank">
    <img src="usr\themes\Gallery\dev\Snow_Fox.jpg" alt="Image 1" />
  </a>
  <a href="https://source.unsplash.com/random/800x500" 
     data-pswp-width="800" 
     data-pswp-height="500" 
     target="_blank">
    <img src="usr\themes\Gallery\dev\Snow_Fox2.jpg" alt="Image 2" />
  </a>
  <a href="https://source.unsplash.com/random/800x700" 
     data-pswp-width="800" 
     data-pswp-height="700" 
     target="_blank">
    <img src="usr\themes\Gallery\dev\Snow_Fox3.jpg" alt="Image 3" />
  </a>
  <!-- Add more images similarly -->
<!--    Line 94: That's not smart -->
<!--   <?php
     $file_names = ["Snow_Fox1", "Snow_Fox2", "Snow_Fox3"];
     $count = 0
     foreach ($file_names as $item) : ?>
           <a href="https://source.unsplash.com/random/800x500" 
           data-pswp-width="800" 
           data-pswp-height="500" 
           target="_blank">
           <?php $path = "usr\themes\Gallery\dev\" 
                 $path.=$item 
                 $count = $count + 1?>
           <img src= "<?php echo _getThumbnails($item); ?>" alt="<?php echo $count?>" />
           </a>
  <?php endforeach; ?> -->
</div>

<!-- PhotoSwipe Root -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true"></div>

<!-- PhotoSwipe Script -->
<script type="module">
  import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe@5/dist/photoswipe-lightbox.esm.min.js';

  const lightbox = new PhotoSwipeLightbox({
    gallery: '#gallery',
    children: 'a',
    pswpModule: () => import('https://unpkg.com/photoswipe@5/dist/photoswipe.esm.min.js')
  });

  lightbox.init();
</script>

    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

<footer>
    <iframe style="width: 100%;height:60vh;" src="usr/themes/Gallery/parts/footer.php"></iframe>
</footer>
</html> 


