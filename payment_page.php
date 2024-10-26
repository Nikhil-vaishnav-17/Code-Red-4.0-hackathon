<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Payment-Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/header-footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/payment-page.css">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 25px;
            margin: 0;
            min-width: 100%;
            background: #d6eef1;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <form action="#">
            <div class="row">
                <div class="col">
                    <h3 class="title">Billing Address</h3>

                    <div class="inputBox">
                        <label for="name">Full Name:</label>
                        <div class="form-group input-container">
                            <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
                        </div>
                    </div>

                    <div class="inputBox">
                        <label for="email">Email:</label>
                        <div class="form-group input-container">
                            <input type="email" class="form-control" id="email" placeholder="Enter email address" required>
                        </div>
                    </div>

                    <div class="inputBox">
                        <label for="address">Address:</label>
                        <div class="form-group input-container">
                            <input type="text" class="form-control" id="address" placeholder="Enter address" required>
                        </div>
                    </div>

                    <div class="inputBox">
                        <label for="city">City:</label>
                        <div class="form-group input-container">
                            <input type="text" class="form-control" id="city" placeholder="Enter city" required>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <label for="state">State:</label>
                            <div class="form-group input-container">
                                <input type="text" class="form-control" id="state" placeholder="Enter state" required>
                            </div>
                        </div>
                        <div class="inputBox">
                            <label for="zip">Zip Code:</label>
                            <div class="form-group input-container">
                                <input type="number" class="form-control" id="zip" placeholder="123 456" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <h3 class="title">Payment</h3>

                    <div class="inputBox">
                        <label for="cardAccepted">Card Accepted:</label>
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20240715140014/Online-Payment-Project.webp" alt="credit/debit card image">
                    </div>

                    <div class="inputBox">
                        <label for="cardName">Name On Card:</label>
                        <div class="form-group input-container">
                            <input type="text" class="form-control" id="cardName" placeholder="Enter card name" required>
                        </div>
                    </div>

                    <div class="inputBox">
                        <label for="cardNum">Credit Card Number:</label>
                        <div class="form-group input-container">
                            <input type="text" class="form-control" id="cardNum" placeholder="1111-2222-3333-4444" maxlength="19" required>
                        </div>
                    </div>

                    <div class="inputBox">
                        <label for="expMonth">Exp Month:</label>
                        <div class="form-group input-container">
                            <select id="expMonth" required>
                                <option value="">Choose month</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <label for="expYear">Exp Year:</label>
                            <div class="form-group input-container">
                                <select id="expYear" required>
                                    <option value="">Choose Year</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                </select>
                            </div>
                        </div>
                        <div class="inputBox">
                            <label for="cvv">CVV:</label>
                            <div class="form-group input-container">
                                <input type="number" class="form-control" id="cvv" placeholder="1234" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="Proceed to Checkout" class="submit_btn">
        </form>
    </div>

    <script>
        let cardNumInput = 
        document.querySelector('#cardNum')

        cardNumInput.addEventListener('keyup', () => {
            let cNumber = cardNumInput.value
            cNumber = cNumber.replace(/\s/g, "")

            if (Number(cNumber)) {
                cNumber = cNumber.match(/.{1,4}/g)
                cNumber = cNumber.join(" ")
                cardNumInput.value = cNumber
            }
        })
    </script>
</body>

</html>
