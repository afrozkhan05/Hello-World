<?php
// Initialize variables for messages
$message = '';
$name = '';
$email = '';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = "Registration Successful! 🎉<br>Name: <strong>$name</strong><br>Email: <strong>$email</strong>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:#f4f6f9;">

<div class="container mt-5">
    <div class="card shadow p-4" style="max-width:400px; margin:auto; border-radius:10px;">
        <h3 class="text-center mb-3">User Registration</h3>

        <!-- Display message if set -->
        <?php if ($message): ?>
            <div class="alert alert-success"><?php echo $message; ?></div>
        <?php endif; ?>

        <!-- Registration Form -->
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required value="<?php echo $name; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required value="<?php echo $email; ?>">
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
    </div>
</div>

</body>
</html>
