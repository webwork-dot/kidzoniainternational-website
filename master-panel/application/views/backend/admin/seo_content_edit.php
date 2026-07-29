<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body py-1 my-0">
        <?php echo form_open('admin/seo-content/edit_post/'.$id, ['class' => 'add-ajax-editor-image-form', 'onsubmit' => 'return checkForm(this);']); ?>
        <div class="row">
          
          <div class="col-12 col-md-6 mb-1">
            <label class="form-label">Branch<span class="required">*</span></label>
            <select name="branch_id" class="form-control" required>
                <option value="">Select Branch</option>
                <?php foreach($branches as $branch): ?>
                <option value="<?php echo $branch['id']; ?>" <?php if($data['branch_id'] == $branch['id']) echo 'selected'; ?>><?php echo $branch['name']; ?></option>
                <?php endforeach; ?>
            </select>
          </div>

          <div class="col-12 col-md-6 mb-1">
            <label class="form-label">Curriculum<span class="required">*</span></label>
            <select name="curriculum_id" class="form-control" required>
                <option value="">Select Curriculum</option>
                <?php foreach($curriculums as $curriculum): ?>
                <option value="<?php echo $curriculum['id']; ?>" <?php if($data['curriculum_id'] == $curriculum['id']) echo 'selected'; ?>><?php echo $curriculum['name']; ?></option>
                <?php endforeach; ?>
            </select>
          </div>

          <div class="col-12 mb-1">
            <label class="form-label">Meta Title</label>
            <input type="text" class="form-control" name="meta_title" value="<?php echo $data['meta_title']; ?>" placeholder="Best Preschool in...">
          </div>

          <div class="col-12 mb-1">
            <label class="form-label">Meta Description</label>
            <textarea class="form-control" name="meta_description" rows="3"><?php echo $data['meta_description']; ?></textarea>
          </div>

          <div class="col-12 mb-1">
            <label class="form-label">Meta Keywords</label>
            <textarea class="form-control" name="meta_keywords" rows="2" placeholder="school, preschool, best preschool..."><?php echo html_escape($data['meta_keywords'] ?? ''); ?></textarea>
          </div>

          <div class="col-12 mb-1">
            <label class="form-label">H1 Title</label>
            <input type="text" class="form-control" name="h1_title" value="<?php echo $data['h1_title']; ?>" placeholder="Best Preschool in...">
          </div>

          <div class="col-12 mb-1">
            <label class="form-label">Why Choose Us Content</label>
            <textarea class="form-control editor" name="why_choose_us" rows="5"><?php echo $data['why_choose_us']; ?></textarea>
          </div>

          <div class="col-12 mb-1">
            <label class="form-label"><b>FAQs</b></label>
            <div id="faq_container">
                <?php 
                $faqs = json_decode($data['faqs'], true);
                if (!empty($faqs)):
                    foreach ($faqs as $faq):
                ?>
                <div class="faq-item row mb-1">
                    <div class="col-md-5">
                        <input type="text" name="question[]" class="form-control" value="<?php echo $faq['question']; ?>" placeholder="Question">
                    </div>
                    <div class="col-md-6">
                        <textarea name="answer[]" class="form-control" placeholder="Answer" rows="2"><?php echo $faq['answer']; ?></textarea>
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-danger btn-sm remove-faq"><i data-feather="trash"></i></button>
                    </div>
                </div>
                <?php 
                    endforeach;
                else: 
                ?>
                <div class="faq-item row mb-1">
                    <div class="col-md-5">
                        <input type="text" name="question[]" class="form-control" placeholder="Question">
                    </div>
                    <div class="col-md-6">
                        <textarea name="answer[]" class="form-control" placeholder="Answer" rows="2"></textarea>
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-danger btn-sm remove-faq"><i data-feather="trash"></i></button>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <button type="button" id="add_faq" class="btn btn-outline-primary btn-sm"><i data-feather="plus"></i> Add FAQ</button>
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
$(document).ready(function() {
    $('#add_faq').click(function() {
        var html = `
            <div class="faq-item row mb-1">
                <div class="col-md-5">
                    <input type="text" name="question[]" class="form-control" placeholder="Question">
                </div>
                <div class="col-md-6">
                    <textarea name="answer[]" class="form-control" placeholder="Answer" rows="2"></textarea>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-danger btn-sm remove-faq"><i data-feather="trash"></i></button>
                </div>
            </div>
        `;
        $('#faq_container').append(html);
        feather.replace();
    });

    $(document).on('click', '.remove-faq', function() {
        $(this).closest('.faq-item').remove();
    });
});
</script>
