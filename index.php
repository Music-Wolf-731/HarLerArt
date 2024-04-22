<?php  require 'display.php'; GoHome_set(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php  headWrite()?>
    <style>
    </style>

</head>
<body>
    
    
<?php navBar(); ?>


  <!--這部份是頂部條-->

    <div class="backgroundBox">
        <div></div>
        <div class="video-background">
            <video autoplay loop muted>
                <source src="media/background.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>


    <div style="height:3000px"></div>


  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <button type="button " class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        嘿
      </div>
    </div>
  </div>
</div>

</body>
</html>