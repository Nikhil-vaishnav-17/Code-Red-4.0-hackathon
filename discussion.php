<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Community-Driven Sustainability Projects</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <aside class="my-3">
        <input type="text" id="search-input" placeholder="Search for projects..." class="form-control mb-2">
        <button class="buttonsr btn btn-primary" id="search-button">Search</button>
    </aside>

    <article>
        <div id="card-container" class="container">
            <?php
                // Database connection
                $conn = new mysqli('localhost', 'root', '', 'community_sustainability');

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Function to display cards
                function displayCards($projects) {
                    if (count($projects) > 0) {
                        foreach ($projects as $row) {
                            echo '<div class="container crd ">';
                            echo '<div class="card">';
                            echo '<img src="' . htmlspecialchars($row['image']) . '" alt="Project Image" class="card-img">';
                            echo '<a href="http://localhost/vgu/project_view.php?id=' . $row['id'] . '" class="card-button">More info</a>';
                            echo '</div>';
                            echo '<div class="card-details">';
                            echo '<p class="text-title">' . htmlspecialchars($row['title']) . '</p>';
                            echo '<p class="text-body">' . htmlspecialchars($row['description']) . '</p>';
                            echo '</div>';
                            echo '</div>';                            
                        }
                    } else {
                        echo '<p>No results for your search.</p>';
                    }
                }

                // Display all projects initially, limit to 4
                $initialQuery = "SELECT * FROM projects LIMIT 4";
                $initialResult = $conn->query($initialQuery);
                $projects = [];
                while ($row = $initialResult->fetch_assoc()) {
                    $projects[] = $row;
                }
                displayCards($projects);
                $conn->close();
            ?>
        </div>
    </article>

    <?php include 'footer.php'; ?>

    <button class="chatbot-button" onclick="openChatPage()">
        <i class="fas fa-comment-dots"></i>
    </button>

    <script>
        function openChatPage() {
            window.location.href = "chat.php";
        }
    </script>
    <script src="js/discussion.js"></script>
</body>
</html>
