<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'My App' ?></title>
</head>

<body>
    <!-- NAVBAR -->
    <?= $this->include('partials/navbar') ?>

    <!-- SIDEBAR -->
    <div id="layoutSidenav">
        <?= $this->include('partials/sidebar') ?>
        <div id="layoutSidenav_content">
            <!-- MAIN -->
            <?= $this->renderSection('content') ?>
        </div>
    </div>
</body>

</html>