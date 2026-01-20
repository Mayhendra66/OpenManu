<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-7">

                <div class="card shadow-sm">
                    <div class="card-body">

                        <h4 class="text-center mb-4">Register</h4>

                        <?php if (session()->getFlashdata('error')) : ?>
                            <div class="alert alert-danger py-2">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif ?>

                        <form method="post" action="/registerProcess">
                            <?= csrf_field() ?>

                            <!-- Email & Username -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input type="email" name="users_email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="users_username" class="form-control" placeholder="Username" required>
                                </div>
                            </div>

                            <!-- Number (Full Width) -->
                            <div class="mb-3">
                                <input type="number" name="users_number" class="form-control" placeholder="Phone Number" required>
                            </div>

                            <!-- Password & Confirm Password -->
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <input type="password" name="users_password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="password" name="users_password_confirm" class="form-control" placeholder="Confirm Password" required>
                                </div>
                            </div>

                            <hr class="my-3">

                            <!-- Company -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input type="text" name="company_name" class="form-control" placeholder="Company Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="company_email" class="form-control" placeholder="Company Email" required>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <input type="number" name="company_number" class="form-control" placeholder="Company Phone" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="company_address" class="form-control" placeholder="Company Address" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">
                                Register
                            </button>
                        </form>

                        <div class="text-center mt-3">
                            <span class="text-muted">Already have an account?</span>
                            <a href="/" class="text-decoration-none">Login</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
