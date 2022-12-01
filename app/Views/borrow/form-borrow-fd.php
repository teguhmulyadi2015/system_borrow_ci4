<?= $this->extend('templates/app') ?>

<?= $this->section('content') ?>
<div class="row">
  <div class="col">
    <h1>Form Borrowing Flashdisk</h1>
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="card " style="width: 55rem;">
      <div class="card-body">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Employee id (NIK)</label>
            <input type="text" class="form-control" id="nik" autofocus required="required">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Employee Name</label>
            <input type="text" class="form-control" id="name" disabled>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Flashdisk</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection() ?>