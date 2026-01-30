<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<main class="container-fluid mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex align-items-center">
            <i class="bi bi-plus-square me-2"></i>
            <strong>Form Edit Product</strong>
        </div>

        <div class="card-body">
            <form action="<?= base_url('products/edit/' . $products['id']) ?>" method="post">
    <input type="hidden" name="id" value="<?= $products['id'] ?>">
    <input type="hidden" name="user_id" value="<?= session()->get('user_id') ?>">

    <div class="row mb-3">
        <label class="col-md-3 col-form-label">Product Code</label>
        <div class="col-md-6">
            <input type="text" name="product_code" class="form-control"
                   value="<?= $products['product_code'] ?>" required>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-md-3 col-form-label">Product Name</label>
        <div class="col-md-6">
            <input type="text" name="product_name" class="form-control"
                   value="<?= $products['product_name'] ?>" required>
        </div>
    </div>

    <div class="row mb-4">
        <label class="col-md-3 col-form-label">Unit</label>
        <div class="col-md-6">
            <select name="unit" class="form-select" required>
                <option value="">-- Select Unit --</option>
                <option value="pcs"   <?= ($products['unit'] == 'pcs') ? 'selected' : '' ?>>Pcs</option>
                <option value="kg"    <?= ($products['unit'] == 'kg') ? 'selected' : '' ?>>Kg</option>
                <option value="liter" <?= ($products['unit'] == 'liter') ? 'selected' : '' ?>>Liter</option>
            </select>
        </div>
    </div>

    <div class="row mb-4">
        <label class="col-md-3 col-form-label">Status</label>
        <div class="col-md-6">
            <select name="status" class="form-select" required>
                <option value="">-- Select Status --</option>
                <option value="active"   <?= ($products['status'] == 'active') ? 'selected' : '' ?>>Active</option>
                <option value="inactive" <?= ($products['status'] == 'inactive') ? 'selected' : '' ?>>Inactive</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9 text-end">
            <a href="<?= base_url('products') ?>" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </div>
</form>

        </div>
    </div>
</main>
<?= $this->endSection() ?>