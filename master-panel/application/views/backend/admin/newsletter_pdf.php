<link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

<div class="row" id="table-bordered">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <div class="row">
               <div class="col-md-12">
                  <h5 class="mb-0"><b>Newsletter PDFs List</b></h5>
               </div>
            </div>
         </div>
         <div class="card-datatable mb-2 p-2">
            <a href="<?php echo site_url('admin/newsletter-pdf/add'); ?>" class="dt-button add-new add-btn btn btn-primary mb-2" tabindex="0"><span><i data-feather='plus'></i> Upload New Newsletter PDF</span></a>
            <table class="table" id="report-datatable">
               <thead>
                  <tr>
                     <th>Sr. No.</th>
                     <th>Title</th>
                     <th>Month</th>
                     <th>Year</th>
                     <th>PDF File</th>
                     <th>Status</th>
                     <th>Action</th>
                  </tr>
               </thead>
            </table>
         </div>
      </div>
   </div>
</div>

<script type="text/javascript">
   $(document).ready(function($) {
       var dataTable = $('#report-datatable').DataTable({
           "ordering": false,
           "pagingType": "simple_numbers",
           "processing": true,
           "scrollX": true,
           "serverSide": true,
           "lengthChange": true,
           "ajax":{
               "url": "<?php echo base_url('admin/get_newsletter_pdf'); ?>",
               "dataType": "json",
               "type": "POST"
           }
       });
   });
</script>
