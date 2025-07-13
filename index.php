<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DelphianLogic in Action</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      background-color: #0e3454;
      color: #fff;
      font-family: 'Segoe UI', sans-serif;
    }
   

.nav-link {
  background: #fff;
  color: #333;
  border-radius: 8px;
  padding: 16px 20px;
  font-weight: 600;
  text-align: left;
  position: relative;
  transition: all 0.3s ease;
  box-shadow: none;
  border: none;
  display: flex;
  align-items: center;
  gap: 10px;
}

.nav-link.active {
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.nav-link.active::after {
  content: '';
  position: absolute;
  top: 50%;
  right: -32px; /* move outside the card */
  transform: translateY(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-right: 10px solid #6ac0d6; /* blue background of Column 2 */
}




    .slider-text {
      background-color: #6cc1d7;
      height: 100%;
      padding: 80px 40px;
      color: #fff;
      text-align: center;
    }
    .slider-text h6 {
      background-color: #659eab;
      display: inline-block;
      padding: 4px 10px;
      border-radius: 3px;
      font-size: 12px;
      text-transform: uppercase;
    }
    .slider-text h3 {
      margin: 20px 0;
      font-size: 24px;
      font-weight: bold;
    }
    .slider-text a {
      color: #fff;
      font-weight: bold;
      text-decoration: none;
    }
 
    .image-box img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      aspect-ratio: 1/1;
    }
    .container-fluid-desk{
        width: 80%;
    }
    #contentSlider{
        background-color: #6cc1d7;
    }

    #tabMenu {
  display: flex;
  flex-direction: column;
  gap: 24px; /* Controls vertical spacing */
}

.col-md-3 {
  display: flex;
  justify-content: center;     /* Vertically center tab list */
  align-items: center;         /* Center horizontally (optional) */
}

  </style>
</head>
<body>

<div class="text-center py-5">
  <h2>DelphianLogic in Action</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo</p>
</div>

<div class="container-fluid container-fluid-desk d-none d-md-flex">
  <div class="row no-gutters">

    <!-- Column 1: Tabs -->
    <div class="col-md-3 p-4 bg-light">
      <ul class="nav flex-column nav-pills" id="tabMenu">
        <li class="nav-item">
          <a class="nav-link active" data-category="Learning"> <img src="images/DL-learning.svg" alt="" class="mr-2"> Learning</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-category="Technology"> <img src="images/DL-technology.svg" alt="" class="mr-2"> Technology</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-category="Communication"> <img src="images/DL-communication.svg" alt="" class="mr-2"> Communication</a>
        </li>
      </ul>
    </div>




    <!-- Column 2: Text Slider -->
    <div class="col-md-5">
      <div id="contentSlider" class="carousel slide h-100" data-ride="carousel" data-interval="false">
        <div class="carousel-inner h-100" id="text-content"></div>
        <ol class="carousel-indicators" id="content-indicators"></ol>
        
      </div>
    </div>

    <!-- Column 3: Image Slider -->
    <div class="col-md-4 image-box">
      <div id="imageSlider" class="carousel slide h-100" data-ride="carousel" data-interval="false">
        <div class="carousel-inner h-100" id="image-content"></div>
      </div>
    </div>
  </div>
 
</div>
 <div style="margin-top:80px; text-align:center;" class="d-none d-md-flex">
  <a href="list.php" style="font-weight:600; color:white; text-decoration:underline;">Manage CRUD Operations</a>
</div>




<!-- Mobile Accordion View (Visible Only on Mobile) -->
<div class="container-fluid container-mob d-md-none d-block mt-4 px-3">
  

  <div id="mobileAccordion">
    <!-- Accordion Item: Learning -->
    <div class="card mb-3">
      <div class="card-header p-0">
        <button class="btn btn-block text-left nav-link" data-toggle="collapse" data-target="#collapseLearning">
          <img src="images/DL-learning.svg" alt="" class="img" style="height:15%"> <span class="cat"> Learning </span>
          <!-- <span class="float-right">−</span> -->
            <img src="images/minus-01.svg" alt="Toggle Icon" class="toggle-icon float-right icon  ml-auto">
        </button>
      </div>
      <div id="collapseLearning" class="collapse show" data-parent="#mobileAccordion">
        <div class="card-body p-0">
          <div id="mobileSliderLearning" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" id="mobile-learning-content"></div>
            <ol class="carousel-indicators" id="mobile-learning-indicators"></ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Accordion Item: Technology -->
    <div class="card mb-3">
      <div class="card-header p-0">
        <button class="btn btn-block text-left nav-link collapsed" data-toggle="collapse" data-target="#collapseTechnology">
          <img src="images/DL-technology.svg" alt=""> <span class="cat">Technology </span>
           <!--<span class="float-right">+</span> -->
          <img src="images/plus-01.svg" alt="Toggle Icon" class="toggle-icon float-right icon  ml-auto">
        </button>
      </div>
      <div id="collapseTechnology" class="collapse" data-parent="#mobileAccordion">
        <div class="card-body p-0">
          <div id="mobileSliderTechnology" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" id="mobile-technology-content"></div>
            <ol class="carousel-indicators" id="mobile-technology-indicators"></ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Accordion Item: Communication -->
    <div class="card mb-3">
      <div class="card-header p-0">
        <button class="btn btn-block text-left nav-link collapsed" data-toggle="collapse" data-target="#collapseCommunication">
          <img src="images/DL-communication.svg" alt=""><span class="cat"> Communication </span>
         <!--  <span class="float-right">+</span> -->
          <img src="images/plus-01.svg" alt="Toggle Icon" class="toggle-icon float-right icon  ml-auto">
        </button>
      </div>
      <div id="collapseCommunication" class="collapse" data-parent="#mobileAccordion">
        <div class="card-body p-0">
          <div id="mobileSliderCommunication" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" id="mobile-communication-content"></div>
            <ol class="carousel-indicators" id="mobile-communication-indicators"></ol>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div style="margin-top:30px; text-align:center;" class="d-md-none d-block mt-4 px-3">
  <a href="list.php" style="font-weight:600; color:white; text-decoration:underline;">Manage CRUD Operations</a>
</div>
</div>






<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
