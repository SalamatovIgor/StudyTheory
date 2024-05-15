<?php

declare(strict_types=1);

/**
 * @var string $view
 */
?>

<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div id="menu">
        <?php require 'main-menu.php'; ?>
    </div>

    <div id="content" class="content">
        <?php require $view.'.php'; ?>
    </div>
</body>

</html>