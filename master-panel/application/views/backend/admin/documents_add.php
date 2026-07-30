<style>
.documents-rows-table {
    width: 100%;
    margin-bottom: 15px;
    border-collapse: collapse;
}
.documents-rows-table th {
    background: #f3f2f7;
    padding: 10px 12px;
    font-size: 13px;
    white-space: nowrap;
    border: 1px solid #e7e7e7;
}
.documents-rows-table td {
    padding: 10px 8px;
    vertical-align: middle;
    background: #fff;
    border: 1px solid #eee;
}
.documents-rows-table tr.doc-row {
    cursor: move;
}
.documents-rows-table tr.doc-row.ui-sortable-helper {
    box-shadow: 0 2px 10px rgba(0,0,0,0.12);
}
.documents-rows-table .drag-handle {
    color: #999;
    font-size: 16px;
    padding: 0 8px;
    cursor: grab;
}
.documents-rows-table .order-num {
    display: inline-block;
    min-width: 24px;
    text-align: center;
    font-weight: 600;
}
.documents-rows-table .btn-remove-row {
    border: none;
    background: #f4364c;
    color: #fff;
    width: 32px;
    height: 32px;
    border-radius: 4px;
    cursor: pointer;
}
.documents-hint {
    font-size: 13px;
    color: #666;
    margin-bottom: 12px;
}
#add-document-row {
    margin-bottom: 12px;
}
</style>

<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body py-1 my-0">
            <?php echo form_open('admin/documents/add_post', ['class' => 'add-ajax-editor-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);' ]);?>

            <p class="documents-hint">Click <strong>Add</strong> to insert more rows. Drag the <i class="fa fa-bars"></i> handle to change order.</p>

            <button type="button" class="btn btn-primary waves-effect waves-float waves-light" id="add-document-row">
               <i class="fa fa-plus"></i> Add
            </button>

            <div class="table-responsive">
               <table class="documents-rows-table" id="documents-rows-table">
                  <thead>
                     <tr>
                        <th style="width:50px;"></th>
                        <th style="width:70px;">Order</th>
                        <th>Title</th>
                        <th style="width:280px;">PDF File</th>
                        <th style="width:70px;">Remove</th>
                     </tr>
                  </thead>
                  <tbody id="documents-rows-body">
                     <tr class="doc-row">
                        <td class="text-center"><span class="drag-handle"><i class="fa fa-bars"></i></span></td>
                        <td class="text-center"><span class="order-num">1</span></td>
                        <td>
                           <input type="text" class="form-control" name="title[]" placeholder="Enter Document Title" required>
                        </td>
                        <td>
                           <input type="file" class="form-control" name="file[]" accept=".pdf,.PDF" required>
                        </td>
                        <td class="text-center">
                           <button type="button" class="btn-remove-row" title="Remove"><i class="fa fa-trash"></i></button>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>

            <div class="row">
               <div class="col-12">
                  <button type="button" class="btn btn-primary waves-effect waves-float waves-light mt-1 me-1" id="add-document-row-bottom">
                     <i class="fa fa-plus"></i> Add
                  </button>
                  <button type="submit" class="dt-button add-new btn btn-primary waves-effect waves-float waves-light mt-1 me-1 btnf btn_verify" name="btn_verify"><?php echo get_phrase('submit'); ?></button>
               </div>
            </div>
            <?php echo form_close(); ?>
         </div>
      </div>
   </div>
</div>

<script>
(function () {
    function initDocumentsForm() {
        if (typeof jQuery === 'undefined') {
            setTimeout(initDocumentsForm, 50);
            return;
        }
        var $ = jQuery;

        function refreshOrderNumbers() {
            $('#documents-rows-body tr.doc-row').each(function (index) {
                $(this).find('.order-num').text(index + 1);
            });
        }

        function getRowHtml() {
            return '' +
                '<tr class="doc-row">' +
                    '<td class="text-center"><span class="drag-handle"><i class="fa fa-bars"></i></span></td>' +
                    '<td class="text-center"><span class="order-num">1</span></td>' +
                    '<td><input type="text" class="form-control" name="title[]" placeholder="Enter Document Title" required></td>' +
                    '<td><input type="file" class="form-control" name="file[]" accept=".pdf,.PDF" required></td>' +
                    '<td class="text-center"><button type="button" class="btn-remove-row" title="Remove"><i class="fa fa-trash"></i></button></td>' +
                '</tr>';
        }

        function addRow() {
            $('#documents-rows-body').append(getRowHtml());
            refreshOrderNumbers();
        }

        $(document).ready(function () {
            refreshOrderNumbers();

            if ($.fn.sortable) {
                $('#documents-rows-body').sortable({
                    handle: '.drag-handle',
                    placeholder: 'ui-state-highlight',
                    axis: 'y',
                    update: refreshOrderNumbers
                });
            }

            $('#add-document-row, #add-document-row-bottom').on('click', addRow);

            $('#documents-rows-body').on('click', '.btn-remove-row', function () {
                var $rows = $('#documents-rows-body tr.doc-row');
                if ($rows.length <= 1) {
                    alert('At least one row is required.');
                    return;
                }
                $(this).closest('tr.doc-row').remove();
                refreshOrderNumbers();
            });
        });
    }
    initDocumentsForm();
})();
</script>
