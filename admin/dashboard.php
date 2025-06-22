<?php
require_once(__DIR__ . '/session_check.php');
require_once(__DIR__ . '/../db.php'); 


?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f0f2f5; margin: 0; }
        header { background: #0b1f3a; color: white; padding: 1rem; display: flex; justify-content: space-between; align-items: center; }
        nav a { color: white; margin-left: 1rem; text-decoration: none; }
        .container { padding: 2rem; }
        .card-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-top: 2rem; }
        .card { background: white; padding: 1.5rem; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.05); }
        .card h3 { margin: 0 0 0.5rem; }
    </style>
</head>
<body>

<header>
    <div><strong>Welcome, <?= htmlspecialchars($_SESSION['admin_username']) ?></strong></div>
    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>

<div class="container">
    <h2>Admin Dashboard</h2>

    <div class="card-grid">
        <div class="card">
            <h3>📝 Projects</h3>
            <p><a href="projects/index.php">Manage Projects</a></p>
        </div>
        <div class="card">
            <h3>✍️ Blogs</h3>
            <p><a href="blogs/index.php">Manage Blogs</a></p>
        </div>
        <div class="card">
            <h3>📩 Messages</h3>
            <p><a href="messages/index.php">View Messages</a></p>
        </div>
        <div class="card">
            <h3>💬 Testimonials</h3>
            <p><a href="testimonial/index.php">Manage Testimonials</a></p>
        </div>
    </div>
</div>

</body>
</html>
