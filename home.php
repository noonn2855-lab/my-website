<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Whale Movies - Home</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?> 🎬🐋</h2>
    <p>This is your Channel Myanmar style home page (Drama recommendations will go here).</p>
    <a href="logout.php">Logout</a>
</body>
</html>
