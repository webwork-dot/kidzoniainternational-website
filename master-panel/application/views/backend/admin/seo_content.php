<style>
.btlr-0 {
    border-top-left-radius: 0px;
}
</style>

<link rel="stylesheet" type="text/css" href="<?= base_url();?>app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url();?>app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="<?= base_url();?>app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
<script src="<?= base_url();?>app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="<?= base_url();?>app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
<script src="<?= base_url();?>app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="<?= base_url();?>app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>

<div class="row" id="table-bordered">
   <div class="col-12">
      <div class="card btlr-0">
         <div class="card-body">
            <div class="row">
               <div class="col-md-12 mt-10">
                  <h5 class="mb-0"><b>Total SEO Content <span id="total_count"> (0)</span></b></h5>
               </div>
            </div>
         </div>
         <div class="card-datatable mb-2">
            <a href="<?php echo site_url('admin/seo-content/add'); ?>" class="dt-button add-new add-btn btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" ><span><i data-feather='plus'></i> Add SEO Content</span></a>
            <table class="table " id="report-datatable">
               <thead>
                  <tr>
                     <th>Sr. No.</th>
                     <th>Branch</th>
                     <th>Curriculum</th>
                     <th>H1 Title</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                  $all_content = $this->db->select('seo_branch_curriculum_content.*, branches.name as branch_name, seo_curriculums.name as curriculum_name')
                                          ->from('seo_branch_curriculum_content')
                                          ->join('branches', 'branches.id = seo_branch_curriculum_content.branch_id')
                                          ->join('seo_curriculums', 'seo_curriculums.id = seo_branch_curriculum_content.curriculum_id')
                                          ->get()->result_array();
                  $i = 1;
                  foreach($all_content as $row): ?>
                  <tr>
                     <td><?php echo $i++; ?></td>
                     <td><?php echo $row['branch_name']; ?></td>
                     <td><?php echo $row['curriculum_name']; ?></td>
                     <td><?php echo $row['h1_title']; ?></td>
                     <td>
                        <a href="<?php echo site_url('admin/seo-content/edit/'.$row['id']); ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                           <button type="button" class="btn mr-1 mb-1 icon-btn-edit"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                        </a>
                        <a href="javascript:void(0);" onclick="confirm_modal('<?php echo site_url('admin/seo-content/delete/'.$row['id']); ?>');" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                           <button type="button" class="btn mr-1 mb-1 icon-btn-del"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </a>
                     </td>
                  </tr>
                  <?php endforeach; ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>

<script>
$(document).ready(function() {
    $('#report-datatable').DataTable({
        dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l B><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        buttons: ['csv', 'excel', 'pdf', 'print']
    });
    $('#total_count').html('(<?php echo count($all_content); ?>)');
});
</script>
