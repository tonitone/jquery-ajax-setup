<?php
$display = isset($_REQUEST['display']) ? $_REQUEST['display'] : false;
if ($display == 'complete') {
    header('Location: data2.php?success=' . rand(0, 123) . '&#data2');
}
?>
<h3>edit 2</h3>

<form method="post" class="form-vertical form-edit-profil" action="form2.php" data-ajax-url="inc/form2.php"
      data-ajax-update-element=".form-replace-container2">
    <?php if ($display == false) : ?>
        <input type="hidden" name="display" value="error"/>
    <?php elseif ($display == 'error') : ?>
        <input type="hidden" name="display" value="complete"/>
    <?php endif ?>
    <fieldset>
        <div id="legend" class="">
            <legend class="">FormSubmit</legend>
        </div>
        <?php if ($display == 'error') : ?>
            <div class="alert alert-error">Demo: Formfehler-Anzeige. <br>Schicke das Formular noch einmal ab</div>
        <?php endif; ?>
        <div class="control-group <?php if ($display) {
            echo ' error';
        } ?>">

            <!-- Text input-->
            <label class="control-label" for="input01">Text input</label>

            <div class="controls">
                <input type="text" placeholder="placeholder" class="input-medium">

                <p class="help-block">Supporting help text</p>
            </div>
        </div>

        <div class="control-group <?php if ($display) {
            echo ' error';
        } ?>">

            <!-- Appended checkbox -->
            <label class="control-label">Append checkbox</label>

            <div class="controls">
                <div class="input-append">
                    <input class="span2" placeholder="placeholder" type="text">
            <span class="add-on">
              <label class="checkbox" for="appendedCheckbox">
                  <input type="checkbox" class="">
              </label>
            </span>
                </div>
                <p class="help-block">Supporting help text</p>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Button</label>

            <!-- Button -->
            <div class="controls">
                <button class="btn btn-primary" type="submit" value="yo">Button</button>
            </div>
        </div>

    </fieldset>
</form>
