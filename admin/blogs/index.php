<?php
require_once('../../db.php');
require_once('../session_check.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Blogs</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 2rem; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        th, td { padding: 0.75rem; border: 1px solid #ccc; }
        th { background: #f4f4f4; }
    </style>
</head>
<body>
    <h2>📝 Manage Blog Posts</h2>
    <a href="../dashboard.php">← Back to Dashboard</a>
    
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $blogs = $conn->query("SELECT * FROM blogs ORDER BY created_at DESC");
        foreach ($blogs as $blog):
        ?>
            <tr>
                <td><?= $blog['id'] ?></td>
                <td><?= htmlspecialchars($blog['title']) ?></td>
                <td><?= $blog['created_at'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $blog['id'] ?>">Edit</a> |
                    <a href="delete.php?id=<?= $blog['id'] ?>" onclick="return confirm('Delete this blog?')">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
