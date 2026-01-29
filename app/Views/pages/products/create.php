<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<main class="container-fluid mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white d-flex align-items-center">
            <i class="bi bi-plus-square me-2"></i>
            <strong>Form Create New Product</strong>
        </div>

        <div class="card-body">
            <form action="<?= base_url('products/store') ?>" method="post">
                <input type="text" name="user_id" value="<?= session()->get('user_id') ?>" readonly hidden>
                
                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">Product Code</label>
                    <div class="col-md-6">
                        <input type="text" name="product_code" class="form-control" placeholder="PRD-001" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-md-3 col-form-label">Product Name</label>
                    <div class="col-md-6">
                        <input type="text" name="product_name" class="form-control" placeholder="Product name" required>
                    </div>
                </div>

                <div class="row mb-4">
                    <label class="col-md-3 col-form-label">Unit</label>
                    <div class="col-md-6">
                        <select name="unit" class="form-select" required>
                            <option value="">-- Select Unit --</option>
                            <option value="pcs">Pcs</option>
                            <option value="kg">Kg</option>
                            <option value="liter">Liter</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-4">
                    <label class="col-md-3 col-form-label">Status</label>
                    <div class="col-md-6">
                        <select name="status" class="form-select" required>
                            <option value="">-- Select Status --</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9 text-end">
                        <a href="<?= base_url('products') ?>" class="btn btn-secondary">
                            Back
                        </a>
                        <button type="submit" class="btn btn-success">
                            Save
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</main>
<?= $this->endSection() ?>