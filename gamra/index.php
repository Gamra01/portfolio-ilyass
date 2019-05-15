<?php require_once 'assets/db.php'; ?>
<?php

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id_about, titre_about, photo_about, content_about FROM about WHERE id_about = '3'";
$result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $about_content = $row["content_about"];
        $about_img = $row["photo_about"];
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

<?php include "assets/header.php"; ?>
   <body id="top">
     <header>
       <div class="profile-page sidebar-collapse">
         <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
           <div class="container">
             <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">Gamra Ilyass</a>
               <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
             </div>
             <div class="collapse navbar-collapse justify-content-end" id="navigation">
               <ul class="navbar-nav">
                 <li class="nav-item"><a class="nav-link smooth-scroll" href="./index.html">Home</a></li>
                 <li class="nav-item"><a class="nav-link smooth-scroll" href="./About.html">About</a></li>
                 <li class="nav-item"><a class="nav-link smooth-scroll" href="./Portfolio.html">Portfolio</a></li>
                 <li class="nav-item"><a class="nav-link smooth-scroll" href="./contact.html">Contact</a></li>
               </ul>
             </div>
           </div>
         </nav>
       </div>
     </header>
     <div class="page-content">
 <div class="profile-page">
   <div class="wrapper">
     <div class="page-header page-header-small" filter-color="blue">
       <div class="page-header-image" data-parallax="true" style="background-image: url('images/1.jpg');"></div>
       <div class="container">
         <div class="content-center">
           <div class="cc-profile-image"><a href="#"><img src="<?= $about_img; ?>" alt="Image"/></a></div>
           <div class="h2 title font-semibold mb-2">Ilyass Gamra</div>
           <p class="category text-white font-semibold mb-2">Passionate UI/UX Designer, Cyber Security, Student...</p>
           <a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Contact Me</a>
           <a class="btn btn-primary" href="CV.docx" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>
         </div>
       </div>
       <div class="section">
         <div class="container">
           <div class="button-container">
             <a class="btn btn-default btn-round btn-lg btn-icon"style="border-radius:50%" href="https://www.facebook.com/Zirax.SP" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a>
             <a class="btn btn-default btn-round btn-lg btn-icon" style="border-radius:50%" href="#" rel="tooltip" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a>
             <a class="btn btn-default btn-round btn-lg btn-icon"style="border-radius:50%;"  href="#" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
<div class="section" id="about">
  <div class="container">
    <div class="card shadow-lg" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title font-semibold">About Us</div>
            <p class="leading-loose"><?= $about_content ?></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title font-semibold">Basic Information</div>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
              <div class="col-sm-8">19</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8">ilyass.gamra@ynov.com</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
              <div class="col-sm-8">+33 6591 259 86</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
              <div class="col-sm-8">8 Allee Duguay Trouin, 44000 - <br>Nantes, France</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>
              <div class="col-sm-8">English, Arabic, French</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <script src="js/plugins/jquery.3.2.1.min.js"></script>
    <script src="js/plugins/popper.min.js"></script>
    <script src="js/plugins/bootstrap.min.js"></script>
    <script src="js/plugins/now-ui-kit.js?v=1.1.0"></script>
    <script src="js/plugins/aos.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
