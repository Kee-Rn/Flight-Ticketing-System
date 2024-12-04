<!DOCTYPE html>
<html>
<head>
    <title>Payment Form</title>
    <style>
        /* Your CSS styles here */
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            margin: 50px auto;
            max-width: 500px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h1{
            text-align: center;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
        }

        table th, table td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        table th {
            text-align: left;
        }

        input[type="text"],
        input[type="month"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment Portal</h1>
        <form id="paymentForm" action="submit-payment.php" method="post">
            <table>
                <tr>
                    <th><label for="name">Name:</label></th>
                    <td><input type="text" id="name" name="name" required></td>
                </tr>
                <tr>
                    <th><label for="card-number">Card Number:</label></th>
                    <td><input type="text" id="card-number" name="card-number" inputmode="numeric" pattern="[0-9]*" maxlength="16" required></td>
                </tr>
                <tr>
                    <th><label for="expiration-date">Expiration Date:</label></th>
                    <td><input type="month" id="expiration-date" name="expiration-date" required></td>
                </tr>
                <tr>
                    <th><label for="cvv">CVV:</label></th>
                    <td><input type="text" id="cvv" name="cvv" inputmode="numeric" pattern="[0-9]*" maxlength="3" required></td>
                </tr>
                <tr>
                    <th><label for="amount">Amount:</label></th>
                    <td><input type="text" id="amount" name="amount" required></td>
                </tr>
            </table>
            <input type="submit" value="Pay Now">
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('paymentForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the form from submitting normally

                // Process the form data here (e.g., send it to the server)

                // Navigate back to the previous page
                window.history.back();
            });
        });
    </script>
</body>
</html>
