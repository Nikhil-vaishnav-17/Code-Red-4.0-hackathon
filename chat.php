<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
    <link rel="stylesheet" href="css/chat.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="chat-container-div">
    <div class="chat-container">
        <div class="chat-header">Crowdfunding Chatbot</div>
        <div class="chat-body" id="chat-body">
            <!-- Chat messages will appear here -->
        </div>
        <div class="chat-footer">
            <select id="question-select">
                <option value="crowdfunding">How do I set up a crowdfunding campaign?</option>
                <option value="fundingGoals">How do I set a realistic funding goal?</option>
                <option value="campaignMessage">How do I draft a compelling campaign message?</option>
                <option value="engagingDonors">How do I engage potential donors?</option>
                <option value="grants">Can you help me with applying for grants?</option>
            </select>
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>
</div>
    <?php include 'footer.php'; ?>
    <script src="js/chat.js"></script>
</body>
</html>