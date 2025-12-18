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

.image-cancel-2{
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
            <?php echo form_open('admin/gallery/edit_post/' . $id, ['class' => 'add-ajax-editor-image-form', 'enctype' => 'multipart/form-data', 'onsubmit' => 'return checkForm(this);' ]);?>
            <div class="row">
 
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Select Branch <span class="required">*</span></label>
                  <select class="form-select" name="branch_id" required>
                     <option value="">Select Branch</option>
                     <?php foreach($branches as $branch){?>
                        <option value="<?php echo $branch['id'];?>" <?php echo ($data['branch_id'] == $branch['id']) ? "selected":""; ?> ><?php echo $branch['name'];?></option>
                     <?php }?>
                  </select>
               </div>
               
               <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Status <span class="required">*</span></label>
                  <select class="form-select" name="status" required>
                     <option value="1" <?php echo ($data['branch_id'] == 1) ? "selected":""; ?> >Active</option>
                     <option value="0" <?php echo ($data['branch_id'] == 0) ? "selected":""; ?> >Inactive</option>
                  </select>
               </div>

                <div class="col-12 col-sm-4 mb-1">
                  <label class="form-label">Alt Tag</label>
                  <input type="text" class="form-control" name="alt" value="<?php echo $data['alt'];?>" placeholder="Image Alt Tag">
               </div>

                <div class="row mt-2">
                   <div class="col-md-12">
                      
                      <fieldset class="form-group"> 
                         <label class="form-label">Gallery Photos</label> <br>
                         <a href="javascript:void(0)" onclick="$('#pro-image').click()" class="btn_gallery btn btn-primary mb-1"><i class="fa fa-image"></i> Upload Image</a>
                         <input type="file" id="pro-image" name="campus_photos[]" style="display: none;" class="form-control" multiple>
                         <br/> <span class="hint_lbl"><small>( Resolution: 1000 x 1000 | Accept png, jpg, jpeg Image )</small></span>
                      </fieldset>
                      
                      <div class="preview-images-zone" >
                         <p class="dm-upload-icon text-center"><i class="fa fa-upload"></i></p>
                         <p class="dm-upload-text text-center">Using button <strong>Upload Image</strong> to add more images.</p>
                          <?php foreach ($campus_images as $images) {?>
                             <div class="preview-image preview-show-<?php echo $images['id']; ?>">
                                <div class="image-zone"><img id="pro-img-<?php echo $images['id']; ?>" src="<?php echo main_url() . $images['image_default'];?>"></div>
                                <div class="image-cancel-2 text-danger remove_img" data-id="<?php echo $images['id']; ?>" data-no="<?php echo $images['id']; ?>"><i class="fa fa-trash icon-white"></i></div>
                             </div>
                          <?php } ?>
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

<script type="text/javascript">
    $(".remove_img").click(function(e){
        e.preventDefault();
        var _id=$(this).data("id");
        e.preventDefault(); 
        var href = '<?php echo site_url('admin/delete_campus_gallery_remove/')?>'+_id;
        var btn = this;
          
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
            		type:'GET',
            		url:href,
            		success:function(res){
            		    if($.trim(res)=='success'){
                            $(".preview-image.preview-show-"+_id).remove();  
            			}
            			else{
            			    Swal.fire({
                				title: "Error!",
                				text: 'Something Went Wrong!',
                				icon: "error",
                				customClass: {
                					confirmButton: "btn btn-primary"
                				},
                				buttonsStyling: !1
            			    })
            		    }
            		}
                });
            }
        })
    });
</script>

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