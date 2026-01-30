<?= $this->extend('layouts/main') ?>

                <?= $this->section('content') ?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Welcome <?= session()->get('username') ?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Product</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h3 class="text-white"><?= $countAllProduct ?></h3>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Product Inactive</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h3 class="text-white"><?= $countInactiveProduct ?></h3>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Product Active</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h3 class="text-white"><?= $countActiveProduct ?></h3>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Unknown</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h3 class="text-white">0</h3>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Mayhendra66 2026</div>
                            <div>
                                <a href="https://github.com/Mayhendra66">Privacy Policy</a>
                                &middot;
                                <a href="https://github.com/Mayhendra66">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
           

        


    </body>
</html>
<?= $this->endSection() ?>
