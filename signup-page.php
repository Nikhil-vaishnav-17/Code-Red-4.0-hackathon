<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signup.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="assets/js/script.js"></script>
</head>
<?php include 'header.php'; ?>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card">
            <div class="card-inner" id="card-inner">
                <div class="card-front">
                    <div class="form-container">
                        <h2 class="text-center mb-4">Sign In</h2>
                        <form>
                            <label for="email" class="form-label">Email</label>
                            <div class="form-group input-container">
                                <input type="email" class="form-control-signup" id="email" name="email" placeholder="Enter your email">
                            </div>
                            <label for="password" class="form-label">Password</label>
                            <div class="form-group input-container">
                                <input type="password" class="form-control-signup" id="password" name="password" placeholder="Enter your password">
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <input type="checkbox" id="remember-me">
                                    <label for="remember-me">Remember me</label>
                                </div>
                                <a href="#" class="forgot-password">Forgot password?</a>
                            </div>
                            <button type="submit" class="btn btn-dark btn-block">Login</button>
                            <p class="text-center">Or With</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-secondary w-100 margin-google">Google</button>
                                <button class="btn btn-outline-secondary w-100">Apple</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <div class="card-back">
                    <div class="form-container">
                        <h2 class="text-center mb-4">Sign Up</h2>
                        <form action="signup.php" method="post">
                            <label for="name" class="form-label">Full Name</label>
                            <div class="form-group input-container">
                                <input type="text" class="form-control-signup" id="name" name="name" placeholder="Enter your full name">
                            </div>
                            <label for="email" class="form-label">Email</label>
                            <div class="form-group input-container">
                                <input type="email" class="form-control-signup" id="email" name="email" placeholder="Enter your email">
                            </div>
                            <label for="password" class="form-label">Password</label>
                            <div class="form-group input-container">
                                <input type="password" class="form-control-signup" id="password" name="password" placeholder="Enter your password">
                            </div>
                            <label for="confirm-password" class="form-label">Confirm Password</label>
                            <div class="form-group input-container">
                                <input type="password" class="form-control-signup" id="confirm-password" placeholder="Confirm your password">
                            </div>
                            <label for="community-code" class="form-label">Community Code (optional)</label>
                            <div class="form-group input-container">
                                <input type="text" class="form-control-signup" id="community-code" name="community_code" placeholder="Enter community code">
                            </div>
                            <button type="submit" class="btn btn-dark btn-block">Sign Up</button>
                            <p class="text-center">Or With</p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-secondary w-100 margin-google">Google</button>
                                <button class="btn btn-outline-secondary w-100">Apple</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Switch with label -->
        <div class="switch-container d-flex flex-column align-items-center">
            <label class="switch">
                <input type="checkbox" id="flipSwitch">
                <span class="slider"></span>
            </label>
            <span id="toggleLabel" class="mt-3">Don't have an account? Sign-Up</span>
        </div>
    </div>

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
        const flipSwitch = document.getElementById('flipSwitch');
        const cardInner = document.getElementById('card-inner');
        const toggleLabel = document.getElementById('toggleLabel');

        flipSwitch.addEventListener('change', function () {
            cardInner.style.transform = flipSwitch.checked ? 'rotateX(180deg)' : 'rotateX(0deg)';

            toggleLabel.style.opacity = 0; // Start fading out text

            setTimeout(() => {
                toggleLabel.textContent = flipSwitch.checked ? "Already have an account? Login" : "Don't have an account? Sign-Up";
                toggleLabel.style.opacity = 1; // Fade in text after changing it
            }, 400); // Adjust delay to match the button transition
        });
    </script>
</body>

</html>