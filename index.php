<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/header-footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<?php include 'header.php'; ?>
<body background="assets/images/jk.jpg">
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
      
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/aa.jpg" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="assets/images/bb.jpg" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src= "assets/images/cc.jpg"class="d-block w-100">
          </div>
        </div>
      
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
      <h3 class="title">About Us</h3>
		<div class="description">
			Welcome to SupportSphere: The Bigger Home! We are a community-driven platform dedicated to empowering individuals to collaborate on sustainable projects like solar panel installations, tree planting, and rooftop farming. Our mission is to create a supportive space where communities can discuss, vote on, and fund meaningful initiatives that promote a greener planet.

In addition to facilitating project planning and funding, we connect our users with reputable vendors and resources, including those through the Amazon Associate program. This allows you to easily access quality products needed for your sustainability projects while supporting our platform. We also provide educational resources to enhance your knowledge about sustainable practices and project implementation.

By fostering community engagement and providing essential tools, SupportSphere aims to inspire local action that leads to global impact.
		</div>
        <div class="card-container">
            <div class="card">
                <img src="assets/images/ca.jpeg" alt="Card Image">
                <h3>Community parks</h3>
                <p>"Our Community Park is a welcoming space for all, featuring lush greenery, walking trails, playgrounds, and picnic areas. It's designed for recreation and relaxation, encouraging families and friends to connect and enjoy outdoor activities</p>
                <button class="btn btn1" onclick="window.open('https://dpgs.delhi.gov.in/dpgs/schemes', '_blank');">Scheme</button>
            </div>
            <div class="card">
                <img src="assets/images/so.jpeg" alt="Card Image">
                <h3>solar panels</h3>
                <p>Solar panels harness sunlight to generate electricity, offering a clean energy source. They lower energy costs, reduce carbon emissions, and promote sustainability, making them ideal for homes and businesses."</p>
                <button class="btn btn2" onclick="window.open('https://www.pmsuryaghar.gov.in/', '_blank');">Scheme</button>
            </div>
            <div class="card">
                <img src="assets/images/fa.jpeg" alt="Card Image">
                <h3>Rooftop farming</h3>
                <p>"Rooftop farming transforms urban rooftops into green spaces for growing food. This sustainable practice enhances local food production, improves air quality, and promotes community engagement while contributing to eco-friendly urban environments."</p>
                  <button class="btn btn3" onclick="window.open('https://gap.eforest.delhi.gov.in/msby.html#:~:text=Under%20Shahri%20Bagwani%20(Urban%20Farming,there%20is%20enough%20sunlight%20available.', '_blank');">Scheme</button>
            </div>
            <div class="card">
                <img src="assets/images/ra.jpeg" alt="Card Image">
                <h3>Rain water harvesting</h3>
                <p>"Rainwater harvesting captures and stores rainwater for future use, reducing groundwater reliance. This sustainable practice enhances water availability and promotes effective water management in urban communities."</p>
                  <button class="btn btn4" onclick="window.open('https://home.rajasthan.gov.in/content/homeportal/en/rphandccltd/innovation/rainwaterharvesting.html#:~:text=RPH%26CCL%20has%20taken%20a%20decision,the%20existing%20wells%2C%20aquifers%20etc.', '_blank');">Scheme</button>
            </div>
        </div>
       <!-- Chatbot button that opens a new page when clicked -->
       <button class="chatbot-button" onclick="openChatPage()">
        <i class='fas fa-comment-dots' style='font-size:36px;color: #001b19;'></i>
        
    </button>

    <script>
        // Function to open a new page when the button is clicked
        function openChatPage() {
            window.location.href = "chat.php"; // Replace with your desired page link
        }
    </script>
</body>
<?php include 'footer.php'; ?>
</html>