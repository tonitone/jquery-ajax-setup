<h3>Read</h3>
<div class="row-fluid">
    <div class="span12">
        <a href="javascript:;" class="btn btn-primary btn-edit-profile" data-ajax-url="inc/form.php"
           data-ajax-update-element=".form-replace-container">EDIT-MODUS</a>
        <hr/>
        <?php if (isset($_GET['success']) && $_GET['success'] != '') : ?>
            <div class="alert alert-success">das hast du aber schön gemacht</div>
        <?php endif; ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <p>Text input</p>

        <p>Text input</p>
    </div>
</div>