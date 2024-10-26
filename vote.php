<?php
include 'database/db_config.php';

if (isset($_POST['vote_type']) && isset($_POST['project_id'])) {
    $vote_type = $_POST['vote_type'];
    $project_id = intval($_POST['project_id']);

    if ($vote_type === 'upvote') {
        $update_vote_query = "UPDATE projects SET upvotes = upvotes + 1 WHERE id = $project_id";
    } elseif ($vote_type === 'downvote') {
        $update_vote_query = "UPDATE projects SET downvotes = downvotes + 1 WHERE id = $project_id";
    }

    $conn->query($update_vote_query);

    // Fetch updated vote counts
    $fetch_votes_query = "SELECT upvotes, downvotes FROM projects WHERE id = $project_id";
    $vote_result = $conn->query($fetch_votes_query);
    $votes = $vote_result->fetch_assoc();

    // Return the updated counts as JSON
    echo json_encode(['upvotes' => $votes['upvotes'], 'downvotes' => $votes['downvotes']]);
}

$conn->close();
?>
