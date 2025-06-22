<?php
require_once('../../db.php');
require_once('../session_check.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Testimonials</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 2rem; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        th, td { padding: 0.75rem; border: 1px solid #ccc; }
        th { background: #f4f4f4; }
    </style>
</head>
<body>
    <h2>💬 Manage Testimonials</h2>
    <a href="../dashboard.php">← Back to Dashboard</a>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Quote</th>
                <th>Author</th>
                <th>Role</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $testimonials = $conn->query("SELECT * FROM testimonials ORDER BY created_at DESC");
        foreach ($testimonials as $row):
        ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['quote']) ?></td>
                <td><?= htmlspecialchars($row['author']) ?></td>
                <td><?= htmlspecialchars($row['role']) ?></td>
                <td><?= $row['created_at'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                    <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this testimonial?')">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
