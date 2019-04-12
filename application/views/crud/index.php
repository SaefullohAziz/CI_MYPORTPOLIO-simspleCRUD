
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">
          	<div class="col-lg-10">
	          <?php if(validation_errors()) : ?>
          			<div class="alert alert-danger" role="alert">
          				<?= validation_errors(); ?>
          			</div>
          		<?php endif; ?>
	            <?= $this->session->flashdata('message'); ?>

          		<!-- Table -->
		          <div class="card shadow-lg mb-4">
		            <div class="card-header py-3">
		              <h6 class="m-0 font-weight-bold text-primary d-flex justify-content-between">
		              	Student List
          				<button class="btn btn-primary btn-circle btn-sm" data-toggle="modal" data-target="#tambahSiswa">+</i></button>
		              </h6>
		            </div>
		            <div class="card-body p-0">
		              <div class="table-responsive">
		          		<table class="table">
						  <thead>
						    <tr>
						      <th>#</th>
						      <th>Name</th>
						      <th>School</th>
						      <th>Grade</th>
						      <th>Departement</th>
						      <th>Action</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php $no=1; foreach ($siswa as $s): ?>
						    <tr>
						      <th scope="row"><?= $no++; ?></th>
						      <td><?= $s['name']; ?></td>
						      <td><?= $s['school']; ?></td>
						      <td><?= $s['grade']; ?></td>
						      <td><?= $s['departement']; ?></td>
						      <td>
						      	<a href="<?= base_url('Crud/detail/' . $s['id']); ?>" class="badge badge-success">Detail</a>
						      	<button class="btn badge badge-warning change" data-toggle="modal" data-target="#tambahSiswa" data-id="<?= $s['id']; ?>">Change</button>
						      	<a href="<?= base_url('Crud/delete/' . $s['id']); ?>" class="badge badge-danger">Delete</a>
						      </td>
						    </tr>
							<?php endforeach; ?>
						  </tbody>
						</table>
					</div>
				</div>
          	</div>
          </div>

        </div>
        <!-- /.container-fluid -->

		<!-- Modal -->
		<div class="modal fade" id="tambahSiswa" tabindex="-1" role="dialog" aria-labelledby="tambahLevelLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="tambahLabel">Add new student</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
			      <form action="<?= base_url('crud/index'); ?>" method="post">
			      	<input type="hidden" name="id" id="id">
				       <div class="form-group">
					    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
					   </div>
					   <div class="form-group">
					    <input type="text" class="form-control" id="school" name="school" placeholder="School">
					   </div>
					   <div class="form-group">
					    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
					   </div>
					   <div class="form-group">
					    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number">
					   </div>
					   <div class="form-group">
					    <input type="text" class="form-control" id="grade" name="grade" placeholder="Grade">
					   </div>
					   <div class="form-group">
					     <select class="form-control" id="departement" name="departement">
					       <option value="RPL">RPL</option>
					       <option value="MULTIMEDIA">MULTIMEDIA</option>
					       <option value="TKJ">TKJ</option>
					     </select>
					   </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Add</button>
			      </div>
			  </form>
		    </div>
		  </div>
		</div>
	</div>