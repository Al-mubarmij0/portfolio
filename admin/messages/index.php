<?php
require_once('../../db.php');
require_once('../session_check.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Messages</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 2rem; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        th, td { padding: 0.75rem; border: 1px solid #ccc; }
        th { background: #f4f4f4; }
    </style>
</head>
<body>
    <h2>📩 Contact Messages</h2>
    <a href="../dashboard.php">← Back to Dashboard</a>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Submitted At</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $messages = $conn->query("SELECT * FROM messages ORDER BY submitted_at DESC");
        foreach ($messages as $msg):
        ?>
            <tr>
                <td><?= $msg['id'] ?></td>
                <td><?= htmlspecialchars($msg['name']) ?></td>
                <td><?= htmlspecialchars($msg['email']) ?></td>
                <td><?= nl2br(htmlspecialchars($msg['message'])) ?></td>
                <td><?= $msg['submitted_at'] ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
