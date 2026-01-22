<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-white">

    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-5 col-lg-4">
                

                <div class="card">
                    
                    <div class="card-body p-4">
                        <!-- ALERT JUST ERROR -->
                        <?php if (session()->getFlashdata('error')) : ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?= session()->getFlashdata('error') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
<?php endif ?>
<!-- ALERT JUST ERROR -->
                        <h2 class="card-title text-center mb-4">Forgot Password Form</h2>
                        <?php if (session()->getFlashdata('error')) : ?>
                            <div class="alert alert-danger py-2">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif ?>

                        <form method="post" action="/forgetProcess">
                            <?= csrf_field() ?>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your Email" required>
                            </div>

                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                            <div class="text-center">
                                <span class="text-muted">Don't have an account?</span>
                                <a href="register" class="text-decoration-none">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>