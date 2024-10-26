<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/feedback.css">

</head>
<?php include 'header.php'; ?>
<body>
<div class="feedback-form-page-body">
<div class="feedback-form">
        <h2>Anonymous Feedback</h2>
        <form id="feedbackForm" action="submit_feedback.php" method="POST">
            <textarea id="feedback" name="feedback" maxlength="200" placeholder="Write your feedback here..." required></textarea>
            <p id="charCount">200 characters remaining</p>
            <button type="submit">Submit Feedback</button>
        </form>
    </div>
    <button class="chatbot-button" onclick="openChatPage()">
        <i class='fas fa-comment-dots' style='font-size:36px;color: #001b19;'></i>   
    </button>
</div>
    <script>
        // Function to open a new page when the button is clicked
        function openChatPage() {
            window.location.href = "chat.php"; // Replace with your desired page link
        }
    </script>
</body>
<?php include 'footer.php'; ?>
</html>