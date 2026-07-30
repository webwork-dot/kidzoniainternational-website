<style>
.custom-pdf {
    padding: 4px 8px;
    font-size: 12px;
    border-radius: 5px;
    color: red;
    border: 1px dashed red;
    display: inline-block;
    margin-top: 6px;
}
.custom-pdf:hover { color: red; }

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
            <?php echo form_open('admin/documents/edit_post', ['class' => 'add-ajax-editor-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);' ]);?>
            <input type="hidden" name="deleted_ids" id="deleted_ids" value="">

            <p class="documents-hint">Drag rows to reorder. Click <strong>Add</strong> for new documents. Removed rows are deleted on submit.</p>

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
                     <?php if (!empty($documents)): ?>
                        <?php $i = 1; foreach ($documents as $doc): ?>
                        <tr class="doc-row" data-id="<?php echo (int) $doc['id']; ?>">
                           <td class="text-center"><span class="drag-handle"><i class="fa fa-bars"></i></span></td>
                           <td class="text-center"><span class="order-num"><?php echo $i++; ?></span></td>
                           <td>
                              <input type="hidden" name="id[]" value="<?php echo (int) $doc['id']; ?>">
                              <input type="text" class="form-control" name="title[]" value="<?php echo html_escape($doc['title']); ?>" placeholder="Enter Document Title" required>
                           </td>
                           <td>
                              <input type="file" class="form-control" name="file[]" accept=".pdf,.PDF">
                              <?php if (!empty($doc['file'])): ?>
                                 <a class="custom-pdf" href="<?php echo main_url() . $doc['file']; ?>" target="_blank">View Document</a>
                              <?php endif; ?>
                           </td>
                           <td class="text-center">
                              <button type="button" class="btn-remove-row" title="Remove"><i class="fa fa-trash"></i></button>
                           </td>
                        </tr>
                        <?php endforeach; ?>
                     <?php else: ?>
                        <tr class="doc-row" data-id="0">
                           <td class="text-center"><span class="drag-handle"><i class="fa fa-bars"></i></span></td>
                           <td class="text-center"><span class="order-num">1</span></td>
                           <td>
                              <input type="hidden" name="id[]" value="0">
                              <input type="text" class="form-control" name="title[]" placeholder="Enter Document Title" required>
                           </td>
                           <td>
                              <input type="file" class="form-control" name="file[]" accept=".pdf,.PDF" required>
                           </td>
                           <td class="text-center">
                              <button type="button" class="btn-remove-row" title="Remove"><i class="fa fa-trash"></i></button>
                           </td>
                        </tr>
                     <?php endif; ?>
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
        var deletedIds = [];

        function refreshOrderNumbers() {
            $('#documents-rows-body tr.doc-row').each(function (index) {
                $(this).find('.order-num').text(index + 1);
            });
        }

        function getRowHtml() {
            return '' +
                '<tr class="doc-row" data-id="0">' +
                    '<td class="text-center"><span class="drag-handle"><i class="fa fa-bars"></i></span></td>' +
                    '<td class="text-center"><span class="order-num">1</span></td>' +
                    '<td>' +
                        '<input type="hidden" name="id[]" value="0">' +
                        '<input type="text" class="form-control" name="title[]" placeholder="Enter Document Title" required>' +
                    '</td>' +
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
                var $row = $(this).closest('tr.doc-row');
                var id = parseInt($row.attr('data-id'), 10) || 0;
                if (id > 0) {
                    deletedIds.push(id);
                    $('#deleted_ids').val(deletedIds.join(','));
                }
                $row.remove();
                refreshOrderNumbers();
            });
        });
    }
    initDocumentsForm();
})();
</script>
