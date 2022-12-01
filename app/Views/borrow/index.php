<?= $this->extend('templates/app') ?>
<?= $this->section('content') ?>

<div class="row">
    <div class="col">
        <h2>List User Borrowing</h2>
    </div>
</div>
<div class="row py-3">
    <div class="col">
        <a class="btn btn-secondary" href="<?= base_url() ?>">Back</a>
        <!-- <a class="btn btn-primary" href="<?= base_url('borrow/borrowlist') ?>">Add</a> -->
    </div>
</div>
<div class="row py-3">
    <div class="col">
        <table class="table">
            <tr align="center">
                <td>
                    <!-- <center> -->
                    <div class="card" style="width: 18rem;">
                        <a href="<?= base_url('borrow/borrowfd') ?>">
                            <img src="<?= base_url('assets/img/fd.png') ?>" class="card-img-top" width="500px" height="300px">
                            <a href="<?= base_url('borrow/borrowfd') ?>" class="btn btn-primary">Borrow Flashdisk</a>
                        </a>
                    </div>
                    <!-- </center> -->
                </td>

                <td>
                    <!-- <center> -->
                    <div class="card" style="width: 18rem;">
                        <a href="<?= base_url('borrow/borrowlaptop') ?>">
                            <img src="<?= base_url('assets/img/laptop.png') ?>" class="card-img-top" width="500px" height="300px">
                            <a href="<?= base_url('borrow/borrowlaptop') ?>" class="btn btn-primary">Borrow Flashdisk</a>
                        </a>
                    </div>
                    <!-- </center> -->
                </td>
                <td>
                    <!-- <center> -->
                    <div class="card" style="width: 18rem;">
                        <a href="<?= base_url('borrow/borrowpointer') ?>">
                            <img src="<?= base_url('assets/img/pointer.png') ?>" class="card-img-top" width="500px" height="300px">
                            <a href="<?= base_url('borrow/borrowpointer') ?>" class="btn btn-primary">Borrow Flashdisk</a>
                        </a>
                    </div>
                    <!-- </center> -->
                </td>
            </tr>


        </table>
    </div>
</div>
<?= $this->endSection() ?>