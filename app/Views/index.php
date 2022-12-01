 <?= $this->extend('templates/app') ?>

 <?= $this->section('content') ?>
 <div class="row py-3">
     <div class="col">
         <a class="btn btn-primary" href="<?= base_url('borrow') ?>" role="button" style="width: 500px;">Borrow</a>
     </div>
     <div class="col">
         <a class="btn btn-warning" href="<?= base_url('returnn') ?>" role="button" style="width: 500px;">Returned</a>
     </div>
 </div>


 <div class="row pt-3">
     <div class="col">
         <h2>List User Borrowing</h2>
     </div>
 </div>
 <!-- <div class="row py-3">
     <div class="col">
         <a class="btn btn-secondary" href="<?= base_url() ?>">Back</a>
         <a class="btn btn-primary" href="<?= base_url('borrow/borrowlist') ?>">Add</a>
     </div>
 </div> -->
 <div class="row">
     <div class="col">
         <table class="table table-striped table-hover">

             <thead>
                 <tr>
                     <th scope="col">#</th>
                     <th scope="col">First</th>
                     <th scope="col">Last</th>
                     <th scope="col">Handle</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <th scope="row">1</th>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                 </tr>
                 <tr>
                     <th scope="row">2</th>
                     <td>Jacob</td>
                     <td>Thornton</td>
                     <td>@fat</td>
                 </tr>
                 <tr>
                     <th scope="row">3</th>
                     <td colspan="2">Larry the Bird</td>
                     <td>@twitter</td>
                 </tr>
             </tbody>

         </table>
     </div>
 </div>
 <?= $this->endSection() ?>