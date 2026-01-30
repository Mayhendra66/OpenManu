<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Table Product
    </div>
    <a href="<?= base_url('action/create') ?>" class="btn btn-success">Create New</a>
    <div class="card-body">

        <table id="datatablesSimple">

            <thead>
                <tr>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Unit</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Unit</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th>Action</th>

                </tr>
            </tfoot>
            <tbody>
                <?php foreach ($products as $row): ?>
                    <tr>
                        <td><?= esc($row['product_code']) ?></td>
                        <td><?= esc($row['product_name']) ?></td>
                        <td><?= esc($row['unit']) ?></td>
                        <td>
                            <?php if ($row['status'] == 'active'): ?>
                                <span class="badge bg-success">Active</span>
                            <?php else: ?>
                                <span class="badge bg-danger">Inactive</span>
                            <?php endif; ?>
                        </td>
                        <td><?= esc($row['created_at']) ?></td>
                        <td>
                            <a href="<?= base_url('products/editview/' . $row['id']) ?>"
                                class="btn btn-primary btn-sm">Edit</a>

                            <a href="<?= base_url('products/destroy/' . $row['id']) ?>"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin hapus?')">
                                Destroy
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>
<?php if (session()->getFlashdata('success')): ?>
<script>
    alert("<?= session()->getFlashdata('success') ?>");
</script>
<?php endif; ?>
<?= $this->endSection() ?>