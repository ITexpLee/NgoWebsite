<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <!--Bootstrap4 CDN-->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!--Css file-->
    <link rel="stylesheet" href="styling.css" media="all">
</head>

<body>
    <!-- Video Section -->
    <div class="section">
        <a class="btn glow-on-hover" href="homepage.php" id="saveme">Save Me :)</a>
        <div class="icon-container">
            <div class="icon icon-collapse" id="play" title="Play Music!"><i class="fas fa-play"></i></div>
            <div class="icon icon-enter" id="pause" title="Pause Music!"><i class="fas fa-pause"></i></div>
        </div>
        <!-- Video Container for Overlay -->
        <div class="video-container">
            <div class="color-overlay"></div>
            <video id="videobg" poster="images/SavetheChildren.jpg" playsinline muted autoplay loop>
                <source src="images/Save the Children.mp4" type="video/mp4">
                <source src="images/Save the Children.webm" type="video/webm">
            </video>
        </div>
    </div>
    <!--Script files-->
    <!--Bootstrap files-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <!--Jquery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Developer script-->
    <script src="script.js"></script>
</body>

</html>