<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Sherlock Holmes : Chapter One - Gallery</title>
     <!-- ajout bootstrap css-->
     <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
     <!-- feuille css -->
     <link rel="stylesheet" href="gallery.css">
     <!-- police googlefont -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
 <!-- favicon -->
 <link rel="icon" type="image/png" href="assets/logos/Frogwares_logo_flat_white.png" />
 <!-- FontAwesome -->
 <script src="https://kit.fontawesome.com/c6081b8ccf.js" crossorigin="anonymous"></script>
</head>
<body>
   <header>
      <?php
         include 'nav.php';
      ?>
   </header>    

    <section class="gallery min-vh-100">
        <div class="container-lg">
           <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3" style="margin-top: 80px;">
              <div class="col">
                 <img src="assets/ConceptArt/1-light.jpg" class="gallery-item" alt="gallery">
              </div>
              <div class="col">
                 <img src="assets/ConceptArt/2-light.jpg" class="gallery-item" alt="gallery">
              </div>
              <div class="col">
                 <img src="assets/ConceptArt/3-light.jpg" class="gallery-item" alt="gallery">
              </div>
              <div class="col">
                 <img src="assets/ConceptArt/4-light.jpg" class="gallery-item" alt="gallery">
              </div>
              <div class="col">
                 <img src="assets/ConceptArt/5-light.jpg" class="gallery-item" alt="gallery">
              </div>
              <div class="col">
                 <img src="assets/ConceptArt/6-light.jpg" class="gallery-item" alt="gallery">
              </div>
              <div class="col">
                <img src="assets/Screenshots/1-light.jpg" class="gallery-item" alt="gallery">
             </div>
             <div class="col">
                <img src="assets/Screenshots/2-light.jpg" class="gallery-item" alt="gallery">
             </div>
             <div class="col">
                <img src="assets/Screenshots/3-light.jpg" class="gallery-item" alt="gallery">
             </div>
             <div class="col">
                <img src="assets/Screenshots/4.2-light.jpg" class="gallery-item" alt="gallery">
             </div>
             <div class="col">
                <img src="assets/Screenshots/5.6UI-light.jpg" class="gallery-item" alt="gallery">
             </div>
             <div class="col">
                <img src="assets/Screenshots/Screenshot_10-light.jpg" class="gallery-item" alt="gallery">
             </div>
           </div>
        </div>
     </section>

     <!-- Modal -->
   <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <img src="img/1.jpg" class="modal-img" alt="modal img">
            </div>
         </div>
      </div>
  </div>

   <footer>
      <?php
         include 'footer.php';
      ?>  
   </footer> 
     <script src="bootstrap.js"></script>
     <script src="script.js"></script>
</body>
</html>