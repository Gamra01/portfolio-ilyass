<?php require_once 'assets/db.php'; ?>
<?php

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id_about, titre_about, photo_about, content_about FROM about WHERE id_about = '1'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $about_titre = $row["titre_about"];
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
           <div class="cc-profile-image"><a href="#"><img src="images/zirax.jpeg" alt="Image"/></a></div>
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
             <a class="btn btn-default btn-round btn-lg btn-icon" style="border-radius:50%" href="#" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
            <div class="section">
               <div class="container">
                  <div class="max-w-md w-full lg:flex my-0 mx-auto">
                     <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('<?= $about_img ?>')" title="owner picture">
                     </div>
                     <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                           <div class="text-black font-bold text-xl mb-2"><?= $about_titre ?></div>
                           <p class="text-grey-darker text-base leading-loose mb-6"><?= $about_content ?></p>
                             <button style="padding:.6rem 0;width:44%;" class=" bg-blue2 hover:bg-blue text-white font-bold rounded my-0 mx-auto">
                               <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                  <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/>
                               </svg>
                              <a style="text-decoration:none;" class="text-white text-base leading-tight" href="./CV/CV.docx">Download CV</a>
                            </button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="section">
              <div class="container mb-8">
                <h1 class="text-center font-bold text-xxl mb-2">Skills</h1>
                <hr class="hr">


                <div class="flex justify-center">
                  <div class="w-1/3 bg-grey-lighter shadow-md pr mr-4">
                    <h4 class="titra">html</h4>
                    <div class="skills html"></div>
                  </div>
                  <div class="w-1/3 bg-grey-lighter shadow-md pr mr-4">
                    <h4 class="titra">css</h4>
                    <div class="skills css"></div>
                  </div>
                  <div class="w-1/3 bg-grey-lighter shadow-md pr">
                    <h4 class="titra">javascript</h4>
                    <div class="skills js"></div>
                  </div>
                </div>
                <div class="flex justify-center  mt-6">
                  <div class="w-1/3 bg-grey-lighter shadow-md pr mr-4">
                    <h4 class="titra">Bootstrap</h4>
                    <div class="skills bs"></div>
                  </div>
                  <div class="w-1/3 bg-grey-lighter shadow-md pr mr-4">
                    <h4 class="titra">sass</h4>
                    <div class="skills sass"></div>
                  </div>
                  <div class="w-1/3 bg-grey-lighter shadow-md pr">
                    <h4 class="titra">wordpress</h4>
                    <div class="skills wp"></div>
                  </div>
                </div>


                <!-- <div class="px-2">
                  <div class="flex -mx-2">
                    <div class="w-1/3 px-2">
                      <div class="bg-gray-400 h-12"></div>
                    </div>
                    <div class="w-1/3 px-2">
                      <div class="bg-gray-500 h-12"></div>
                    </div>
                    <div class="w-1/3 px-2">
                      <div class="bg-gray-400 h-12"></div>
                    </div>
                  </div>
                </div> -->


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
