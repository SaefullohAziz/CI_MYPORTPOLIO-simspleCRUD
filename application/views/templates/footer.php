</div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>&copy; 2019 | Saefulloh Aziz</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->


  </div>
  <!-- End of Page Wrapper -->

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/js/'); ?>jquery-3.3.1.min.js"></script>
  <script src="<?= base_url('assets/js/'); ?>bootstrap.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/js/'); ?>sb-admin-2.js"></script>

  <!-- myScript -->
  <script type="text/javascript">
    $(function() {

          $('.add').on('click', function() {
              $('#tambahLabel').html('Add new student');
              $('#id').val();
              $('#name').val();
              $('#school').val();
              $('#email').val();
              $('#phone').val();
              $('#grade').val();
              $('#departement').val();
          });

          $('.change').on('click', function() {
              const id = $(this).data('id');

              $('#tambahLabel').html('Change student data');
              $('.modal-body form').attr('action', '<?= base_url("crud/change") ?>');
              
              $.ajax({
                  url: '<?= base_url('crud/getChange') ?>',
                  method: 'post',
                  data: {id : id},
                  dataType: 'json',
                  success: function(data) {
                      $('#id').val(data.id);
                      $('#name').val(data.name);
                      $('#school').val(data.school);
                      $('#email').val(data.email);
                      $('#phone').val(data.phone_number);
                      $('#grade').val(data.grade);
                      $('#departement').val(data.departement);
                  }
              });

          });

      });
    
  </script>

</body>

</html>
