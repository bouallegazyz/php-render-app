<?php
// index.php

date_default_timezone_set('Africa/Tunis');

$appEnv = getenv('APP_ENV') ?: 'development';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Application PHP sur Render</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            text-align: center;
            padding-top: 60px;
        }
        .card {
            background: #ffffff;
            width: 400px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
        }
        p {
            color: #555;
        }
        .env {
            margin-top: 15px;
            font-weight: bold;
            color: #27ae60;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>✅ Application PHP déployée sur Render</h1>

    <p>
        Date et heure serveur : <br>
        <strong><?php echo date('Y-m-d H:i:s'); ?></strong>
    </p>

    <p class="env">
        Environnement : <?php echo htmlspecialchars($appEnv); ?>
    </p>
</div>

</body>
</html>
