<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Video and Text Layout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/learn.css">
    <link rel="stylesheet" href="css/header-footer.css">
</head>

<?php include 'header.php'; ?>
<body background="jk.jpg">
    <div class="card-container">
        <div class="card">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Tmz8PPMF6dY?si=UWsRLONl83iwkBhz"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <h2>home farming</h2>
            <p>Inside home farming, also known as indoor gardening or urban agriculture, is the practice of growing
                fruits, vegetables, and herbs within the comfort of your own home. This innovative approach to farming
                not only provides a sustainable source of fresh produce but also offers numerous health benefits and
                aesthetic appeal.</p>

        </div>
        <div class="card">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/I4V0QiyKAYs?si=Ck0n3zSIU5UVOthg"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <h2>Rainwater harvesting</h2>
            <p>Rainwater harvesting is the process of collecting and storing rainwater for future use, reducing the
                demand on groundwater and municipal water supplies. Implementing rainwater harvesting at home is a
                simple, eco-friendly, and cost-effective way to conserve water and mitigate the impact of urbanization
                on the environment.</p>
        </div>
        <div class="card">
            <iframe class="video" width="560" height="315"
                src="https://www.youtube.com/embed/2-aB-GzLaLY?si=-YwWLIy8OpjXcbRK" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <h2>Home farming</h2>
            <p>Inside home farming, also known as indoor gardening or urban agriculture, is the practice of growing
                fruits, vegetables, and herbs within the comfort of your own home. This innovative approach to farming
                not only provides a sustainable source of fresh produce but also offers numerous health benefits and
                aesthetic appeal.</p>
        </div>
    </div>

    <button class="chatbot-button" onclick="openChatPage()">
        <i class="fas fa-comment-dots"></i>
    </button>

    <script>
        function openChatPage() {
            window.location.href = "chat.php";
        }
    </script>
</body>
<?php include 'footer.php'; ?>
</html>