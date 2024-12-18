<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $position = htmlspecialchars($_POST['position']);
    $experience = htmlspecialchars($_POST['experience']);
    $DOB = nl2br(htmlspecialchars($_POST['DOB']));
} else {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Submitted</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Application Successfully Submitted!</h1>
        <h2>Submitted Details:</h2>
        <p><strong>Full Name:</strong> <?php echo $name; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Phone Number:</strong> <?php echo $phone; ?></p>
        <p><strong>Position Applied For:</strong> <?php echo $position; ?></p>
        <p><strong>Years of Experience:</strong> <?php echo $experience; ?> years</p>
        <p><strong>DOB:</strong></p>
        <p><?php echo $DOB; ?></p>
        <a href="index.html"><button>Go Back</button></a>
    </div>
</body>
</html>
