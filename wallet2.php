<?php
    include_once 'header.php';
?>
<section class="signup-form">
        <h2>Profile Information</h2>
        <div class="signup-form-form">
                <label for="login-uname">Username:</label>
                <?php echo $_SESSION['username'] ?><br />
                <label for="login-uname">Email:</label>
                <?php echo $_SESSION['email'] ?><br />
                <label for="login-uname">Date Joined:</label>
                <?php echo $_SESSION['regdate'] ?>
            </form>
        </div>
    </section>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <style>
        /* Add your custom CSS styles here if needed */
        body {
            font-family: Arial, sans-serif;
        }

        .balance {
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
    <?php
    // Establish database connection (replace with your actual credentials)
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'phplogin';
    







    $conn = new mysqli($servername, $username, $password, $dbname);
    $userId = isset($_SESSION["userid"]) ? $_SESSION["userid"] : 1;
    
    // Check Connection
    
    if ($conn->connect_error) {
        die ("Connection failed: " . $conn->connect_error);
    }
    // Fetch user's balance (replace with your actual table and column names)
    $userId = isset($_SESSION["userid"]) ? $_SESSION["userid"] : 1;// Assuming user ID 1 for demonstration
$sql = "SELECT balance FROM accounts WHERE userid = $userId";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $balance = $row['balance'];
    echo "User's balance: $balance"; // Display the balance
} else {
    echo "Error executing query: " . mysqli_error($conn);
}
  
    ?>

    <h1>User Profile</h1>
    <div class="profile-container">
        <div class="profile-image">
            <!-- Placeholder image or default user image -->
            <img src="avatar-1577909_1280.webp" alt="User Profile Image">
        </div>
        <style>
        

        .profile-container {
            text-align: center;
        }

        .profile-image {
            width: 100px; /* Adjust the size as needed (3/4 smaller) */
            height: 100px; /* Adjust the size as needed (3/4 smaller) */
            border-radius: 50%;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-name {
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
    <p class="balance">Balance: $<?php echo $balance; ?></p>

    <!-- Deposit form -->
    <button onclick="openDepositForm()">Deposit</button>
    <div id="depositForm" style="display: none;">
        <!-- Add your deposit form fields here -->
        <?php
$amount = isset($_POST['amount']) ? $_POST['amount'] : '';
$creditcard_number = isset($_POST['creditcard_number']) ? $_POST['creditcard_number'] : '';
$cvv = isset($_POST['cvv']) ? $_POST['cvv'] : '';

// Insert data into the transactions table
$sql = "INSERT INTO transactions (amount, creditcard_number, cvv) VALUES ('$amount', '$creditcard_number', '$cvv')";

if ($conn->query($sql) === TRUE) {
    echo "Deposit successful!";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>


        <!-- Deposit form -->


    <!-- Bootstrap form -->
    <form action="wallet2.php" method="post" onsubmit="return hideForm('depositForm')">
        <div class="mb-3">
            <label for="amount" class="form-label">Amount:</label>
            <input type="number" class="form-control" name="amount" required>
        </div>

        <div class="mb-3">
            <label for="creditcard_number" class="form-label">Credit Card Number:</label>
            <input type="text" class="form-control" name="creditcard_number" required>
        </div>

        <div class="mb-3">
            <label for="cvv" class="form-label">CVV:</label>
            <input type="text" class="form-control" name="cvv" required>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>

   

    <!-- Withdraw form -->
    <button onclick="openWithdrawForm()">Withdraw</button>
    <div id="withdrawForm" style="display: none;">
        <!-- Add your withdraw form fields here -->
        <?php
// Assuming you have a database connection ($conn)

// Get values from the form
$account_number = isset($_POST['account_number']) ? $_POST['account_number'] : '';
$amount = isset($_POST['amount']) ? $_POST['amount'] : '';

// Check if the account exists
$check_account_sql = "SELECT id, balance,account_number FROM accounts WHERE account_number = '$account_number'";
$result = $conn->query($check_account_sql);

if ($result && $result->num_rows > 0) {
    // Account exists, proceed with withdrawal
    $row = $result->fetch_assoc();
    $account_id = $row['id'];
    $current_balance = $row['balance'];

    if ($current_balance >= $amount) {
        // Sufficient balance for withdrawal
        $new_balance = $current_balance - $amount;

        // Update the balance in the accounts table
        $update_balance_sql = "UPDATE accounts SET balance = '$new_balance' WHERE id = '$account_id'";
        if ($conn->query($update_balance_sql) === TRUE) {
            echo "Withdrawal successful! New balance: $new_balance";
           
            
        } else {
            echo "Error updating balance: " . $conn->error;
        }
    } else {
        echo "Insufficient balance for withdrawal.";
    }
} else {
    echo "Account not found.";
}

?>


    <!-- Bootstrap form -->
    <form action="wallet2.php" method="post" onsubmit="return hideForm('withdrawForm')">
        <div class="mb-3">
            <label for="account_number" class="form-label">Account Number:</label>
            <input type="text" class="form-control" name="account_number" required>
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">Amount:</label>
            <input type="number" class="form-control" name="amount" required>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>

    <!-- Bootstrap JavaScript and dependencies (Popper.js and jQuery) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

   
     <script>
// Function to toggle the visibility of a form
function toggleForm(formId) {
    var form = document.getElementById(formId);
    form.style.display = (form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
}

// Function to open a form and close the other form
function openForm(formId, otherFormId) {
    toggleForm(formId);
    document.getElementById(otherFormId).style.display = 'none';
}

// Function to hide a form and submit it
function hideForm(formId) {
    var form = document.getElementById(formId);
    form.style.display = 'none';
    return true; // Continue with form submission
}


    // Function to open deposit form and close withdraw form
    function openDepositForm() {
        toggleForm('depositForm');
        document.getElementById('withdrawForm').style.display = 'none';
    }

    // Function to open withdraw form and close deposit form
    function openWithdrawForm() {
        toggleForm('withdrawForm');
        document.getElementById('depositForm').style.display = 'none';
    }
</script>
</body>

</html>