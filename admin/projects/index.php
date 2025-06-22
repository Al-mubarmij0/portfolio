<?php
require_once('../../db.php');
require_once('../session_check.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Projects</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 2rem; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        th, td { padding: 0.75rem; border: 1px solid #ccc; }
        th { background: #f4f4f4; }
        img { max-width: 80px; height: auto; }
    </style>
</head>
<body>
    <h2>🛠 Manage Projects</h2>
    <a href="../dashboard.php">← Back to Dashboard</a>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Thumbnail</th>
                <th>Title</th>
                <th>Tech Stack</th>
                <th>Links</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $projects = $conn->query("SELECT * FROM projects ORDER BY created_at DESC");
        foreach ($projects as $proj):
        ?>
            <tr>
                <td><?= $proj['id'] ?></td>
                <td><img src="../../<?= $proj['image'] ?>" alt=""></td>
                <td><?= htmlspecialchars($proj['title']) ?></td>
                <td><?= htmlspecialchars($proj['tech_stack']) ?></td>
                <td>
                    <a href="<?= $proj['github_url'] ?>" target="_blank">GitHub</a> |
                    <a href="<?= $proj['live_demo_url'] ?>" target="_blank">Demo</a>
                </td>
                <td>
                    <a href="edit.php?id=<?= $proj['id'] ?>">Edit</a> |
                    <a href="delete.php?id=<?= $proj['id'] ?>" onclick="return confirm('Delete this project?')">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
