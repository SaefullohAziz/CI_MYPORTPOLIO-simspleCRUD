
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">
          	<div class="col">

          		<!-- Table -->
		          <div class="card shadow-lg mb-4">
		            <div class="card-header py-3">
		              <h6 class="m-0 font-weight-bold text-primary d-flex justify-content-between">
		              	Student id : <?= $siswa['id']; ?> detail.
		              </h6>
		            </div>
		            <div class="card-body p-0">
		              <div class="table-responsive">
		          		<table class="table">
						  <thead>
						    <tr>
						      <th>Name</th>
						      <th>School</th>
						      <th>Grade</th>
						      <th>Email</th>
						      <th>Phone number</th>
						      <th>Departement</th>
						      <th>Action</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td><?= $siswa['name']; ?></td>
						      <td><?= $siswa['school']; ?></td>
						      <td><?= $siswa['grade']; ?></td>
						      <td><?= $siswa['email']; ?></td>
						      <td><?= $siswa['phone_number']; ?></td>
						      <td><?= $siswa['departement']; ?></td>
						      <td>
						      	<a href="<?= base_url('Crud/index'); ?>" class="badge badge-danger">Back</a>
						      </td>
						    </tr>
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