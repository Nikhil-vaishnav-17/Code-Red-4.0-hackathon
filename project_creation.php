<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/header-footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php include 'header.php'; ?>
<body>
    <div class="container my-5">
        <h2>Create a New Project</h2>
        <form action="project_create.php" method="POST">
            <div class="form-group">
                <label for="title">Project Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="image">Project Image URL/Path</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="Enter image URL or path">
            </div>
            <div class="form-group">
                <label for="description">Project Description</label>
                <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Project</button>
        </form>
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
