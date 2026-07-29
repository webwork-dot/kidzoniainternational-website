<script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

<style>
.preview-images-zone {
    width: 100%;
    border: 1px dashed #ccc;
    min-height: 180px;
    /* display: flex; */
    padding: 5px 5px 0px 5px;
    position: relative;
    overflow: auto;
    margin-top: 15px;
}

.preview-images-zone > .preview-image {
    width: 120px !important;
    height: 120px !important;
    margin: 0 8px 8px 0;
    position: relative;
    margin-right: 5px;
    float: left;
    margin-bottom: 5px;
}

.preview-images-zone > .preview-image > .image-zone {
    width: 100%;
    height: 100%;
}

.preview-images-zone > .preview-image > .image-zone > img {
    width: 100%;
    height: 100%;
    border-radius: 4px;
    object-fit: contain;
    border: 1px solid #e3e4e6;
}
.preview-images-zone > .preview-image > .image-cancel, .preview-images-zone > .preview-image > .md_remove_img {
    text-align: center;
    margin-left: 0px;
    position: absolute;
    right: 8px;
    top: 5px;
    color: #fff;
    background: #f4364c;
    opacity: 1;
    height: 17px;
    width: 17px;
    padding: 0px;
    font-size: 11px !important;
    border: solid 1px #f4364c;
    z-index: 1;
    cursor: pointer;
    border-radius: 4px;
}
.icon-white {
    color: white;
}
</style>

<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body py-1 my-0">
            <?php echo form_open('admin/branch_gallery_image/add_post', ['class' => 'add-ajax-editor-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);' ]);?>
            <div class="row">
 
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Select Branch <span class="required">*</span></label>
                  <select class="form-select" name="branch_id" required>
                     <option value="">Select Branch</option>
                     <?php foreach($branches as $branch){?>
                        <option value="<?php echo $branch['id'];?>"><?php echo $branch['name'];?></option>
                     <?php }?>
                  </select>
               </div>
               
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Title <span class="required">*</span></label>
                  <input type="text" name="title" class="form-control" placeholder="Enter Title">
               </div>

                <div class="row mt-2">
                   <div class="col-md-12">
                      <fieldset class="form-group"> 
                         <label class="form-label">Gallery Image</label> <br>
                         <a href="javascript:void(0)" onclick="$('#pro-image').click()" class="btn_gallery btn btn-primary mb-1"><i class="fa fa-image"></i> Upload Image</a>
                         <input type="file" id="pro-image" name="image_gallery[]" style="display: none;" class="form-control" multiple>
                         <br/> <span class="hint_lbl"><small>( Resolution: 1000 x 1000 | Accept png, jpg, jpeg Image )</small></span>
                      </fieldset>
                      <div class="preview-images-zone" >
                         <p class="dm-upload-icon text-center"><i class="fa fa-upload"></i></p>
                         <p class="dm-upload-text text-center">Using button <strong>Upload Image</strong> to add more images.</p>
                      </div>
                   </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="dt-button add-new btn btn-primary waves-effect waves-float waves-light mt-1 me-1 btnf btn_verify" name="btn_verify"><?php echo get_phrase('submit'); ?></button>
                </div>
            </div>
               
            <?php echo form_close(); ?>
         </div>
      </div>
   </div>
</div>

<script>
    // $(function () {
    //     CKEDITOR.replace('editor1');
    // })
    
    $(document).ready(function() {
        document.getElementById('pro-image').addEventListener('change', readImage, false);
        $( ".preview-images-zone" ).sortable();
        $(document).on('click', '.image-cancel', function() {
            let no = $(this).data('no');
            $(".preview-image.preview-show-"+no).remove();
        });
    });
    
    var num = 4;
    function readImage() {
        if (window.File && window.FileList && window.FileReader) {
            // alert('11');
            
            var files = event.target.files;
            var output = $(".preview-images-zone");
            for (let i = 0; i < files.length; i++) {
               
                var file = files[i];
                console.log('files:',file.type);
                if (!file.type.match('image')) continue;
                var picReader = new FileReader();
                picReader.addEventListener('load', function (event) {
                    var picFile = event.target;
                    var html =  '<div class="preview-image preview-show-' + num + '">' +
                                '<div class="image-cancel text-danger" data-no="' + num + '"><i class="fa fa-trash icon-white"></i></div>' +
                                '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                                '</div>';
                    output.append(html);
                    num = num + 1;
                });
                picReader.readAsDataURL(file);
            }
        } else {
            console.log('Browser not support');
        }
    }
    
</script>