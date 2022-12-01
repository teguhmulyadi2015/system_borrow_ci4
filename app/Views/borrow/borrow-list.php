<?= $this->extend('templates/app') ?>

<?= $this->section('content') ?>
<div class="row py-3">
    <div class="col">
        <a class="btn btn-secondary" href="<?= base_url('borrow') ?>">Back</a>
    </div>
</div>

<?= $this->endSection() ?>