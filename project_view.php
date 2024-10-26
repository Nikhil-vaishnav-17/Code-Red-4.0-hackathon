<?php
include 'database/db_config.php';

// Verify if `id` is set in GET parameters
if (isset($_GET['id'])) {
    $project_id = intval($_GET['id']);

    // Query to get project details
    $project_query = "SELECT * FROM projects WHERE id = $project_id";
    $project_result = $conn->query($project_query);

    // Check if project data was fetched successfully
    if ($project_result && $project_result->num_rows > 0) {
        $project = $project_result->fetch_assoc();
    } else {
        echo "<p>Project not found or error in query.</p>";
        exit;
    }

    // Query to get discussion comments for the project
    $discussion_query = "SELECT * FROM discussions WHERE project_id = $project_id ORDER BY created_at DESC";
    $discussion_result = $conn->query($discussion_query);

    if (!$discussion_result) {
        echo "<p>Error fetching discussion comments.</p>";
        exit;
    }
} else {
    echo "<p>No project ID specified.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($project['title']); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <style>
        /* Main Container */
        .container-main {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            background-color: #f3f3f3;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Project Image */
        .project-image {
            max-height: 250px;
            max-width: 250px;
            width: 100%;
            border: 2px solid #2E8B57;
            border-radius: 10px;
            object-fit: cover;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Project Details */
        .project-details {
            flex-grow: 1;
        }

        /* Voting Buttons */
        .voting-buttons {
            display: flex;
            gap: 10px;
            margin: 10px 0;
        }

        .voting-buttons button {
            padding: 8px 16px;
            border-radius: 5px;
            font-weight: bold;
            color: white;
        }
        .btn-upvote {
            background-color: #388E3C;
            border: 1px solid #2E7D32;
        }
        .btn-upvote:hover {
            background-color: #2E7D32;
        }
        .btn-downvote {
            background-color: #D32F2F;
            border: 1px solid #C62828;
        }
        .btn-downvote:hover {
            background-color: #C62828;
        }
        .btn-contribute {
            background-color: #0288D1;
            border: 1px solid #0277BD;
        }
        .btn-contribute:hover {
            background-color: #0277BD;
        }

        /* Discussion Section */
.discussion-section {
    background-color: #ffffff;
    padding: 15px;
    border-radius: 8px;
    max-height: 250px;
    overflow-y: auto;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 20px; /* Adjust as needed for spacing */
}


        .comment {
            border-bottom: 1px solid #E0E0E0;
            padding: 10px 0;
        }

        /* Add Comment Section */
        .add-comment-box {
            display: flex;
            flex-direction: column;
            gap: 10px;
            background-color: #f1f1f1;
            padding: 15px;
            border-radius: 8px;
            max-width: 500px;
            margin-top: 20px;
        }

        .add-comment-box textarea {
            height: 150px;
            resize: none;
            border: 1px solid #cfcfcf;
            padding: 10px;
            border-radius: 5px;
            font-family: 'Roboto', sans-serif;
        }

        .submit-comment-btn {
            align-self: flex-end;
            padding: 8px 16px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 5px;
        }

        .submit-comment-btn:hover {
            background-color: #388E3C;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container my-5">
        <div class="container-main">
            <!-- Display Project Image -->
            <?php if (!empty($project['image'])): ?>
                <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="Project Image" class="project-image">
            <?php else: ?>
                <img src="assets/no_results.jpeg" alt="No Image Available" class="project-image">
            <?php endif; ?>

            <!-- Display Project Details -->
            <div class="project-details">
                <h1><?php echo htmlspecialchars($project['title']); ?></h1>
                <p><?php echo htmlspecialchars($project['description']); ?></p>

                <!-- Voting Section -->
                <div class="voting-buttons">
                    <button class="btn-upvote" onclick="vote('upvote', <?php echo $project_id; ?>)">Upvote</button>
                    <button class="btn-downvote" onclick="vote('downvote', <?php echo $project_id; ?>)">Downvote</button>
                    <button class="btn-contribute" onclick="openPaymentPage()">Contribute</button>
                </div>
                <p>Upvotes: <span id="upvote-count"><?php echo $project['upvotes'] ?? 0; ?></span> | Downvotes: <span id="downvote-count"><?php echo $project['downvotes'] ?? 0; ?></span></p>
            </div>
        </div>

        <!-- Add Comment Section -->
<div class="add-comment-box">
    <h3>Add a Comment</h3>
    <form action="add_comment.php" method="POST">
        <input type="hidden" name="project_id" value="<?php echo $project_id; ?>">
        <textarea class="form-control" name="comment" placeholder="Write your comment here..." required></textarea>
        <button type="submit" class="submit-comment-btn">Submit Comment</button>
    </form>
</div>

<!-- Discussion Section -->
<h3>Discussion</h3>
<div class="discussion-section">
    <?php if ($discussion_result->num_rows > 0): ?>
        <?php $counter = 0; ?>
        <?php while($comment = $discussion_result->fetch_assoc()): ?>
            <?php if ($counter >= 5) break; // Show only 5 comments initially ?>
            <div class="comment">
                <strong><?php echo htmlspecialchars($comment['user']); ?></strong>
                <p><?php echo htmlspecialchars($comment['comment']); ?></p>
                <small>Posted on <?php echo $comment['created_at']; ?></small>
            </div>
            <?php $counter++; ?>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No comments found for this project.</p>
    <?php endif; ?>
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
    <script>
        // JavaScript to handle voting with AJAX
        function vote(voteType, projectId) {
            $.ajax({
                url: 'vote.php',
                method: 'POST',
                data: { vote_type: voteType, project_id: projectId },
                success: function(response) {
                    const voteData = JSON.parse(response);
                    $('#upvote-count').text(voteData.upvotes);
                    $('#downvote-count').text(voteData.downvotes);
                },
                error: function(xhr, status, error) {
                    console.log("Error: " + xhr.responseText);
                    alert("An error occurred with voting.");
                }
            });
        }

        function openPaymentPage() {
            window.location.href = "payment_page.php";
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
<?php include 'footer.php'; ?>
</html>

<?php
$conn->close();
?>
