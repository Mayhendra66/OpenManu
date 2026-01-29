<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manufacturing Apps</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<script src="<?= base_url('js/scripts.js') ?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

<script src="<?= base_url('assets/demo/chart-area-demo.js') ?>"></script>
<script src="<?= base_url('assets/demo/chart-bar-demo.js') ?>"></script>

<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>

<script src="<?= base_url('js/datatables-simple-demo.js') ?>"></script>
</body>

</html>