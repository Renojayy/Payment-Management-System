<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url_for('static', filename='style.css') }}">
    <title>Magic Internet Money Payment System</title>
    <style>
        /* Custom styles for the Luno-inspired design */
        body {
            background-color: #f3f4f6;
        }
        header {
            background-color: #2e3a48;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }
        h2 {
            color: #2e3a48;
        }
        .btn-primary {
            background-color: #0062cc;
            border-color: #005cbf;
        }
        .btn-primary:hover {
            background-color: #005cbf;
        }
    </style>
</head>
<body>
    <header>
        <h1>Money Payment System</h1>
    </header>
    <div class="container">
        <h2 class="mb-3">Payment Type</h2>
        <form method="POST" action="/payment" id="payment-form">
            <div class="form-group">
                <label for="payment_type">Select Payment Type:</label>
                <select id="payment_type" name="payment_type" class="form-control" required>
                    <option value="bitcoin">Bitcoin</option>
                    <option value="lightning">Lightning</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Proceed</button>
        </form>
        <div id="loading-spinner" class="mt-4 text-center">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div id="payment-confirmation" class="mt-4">
            <!-- Payment confirmation content will be updated by JavaScript -->
        </div>
    </div>
    
</body>
</html>