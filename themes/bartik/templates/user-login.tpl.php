<?php
 //print the variables if needed to allow for individual field theming or breaking them up.
/*print '<pre>';
print_r($variables);
print '</pre>';*/

?>

<div class="bartik-user-login-form-wrapper">

<div class="login-wrapper">

    <h2><?php print render($intro_text); ?></h2>

    <?php
        print bartik_get_login_form();
/*    	print drupal_render($form['name']);
    	print drupal_render($form['pass']);
    	print drupal_render($form['form_build_id']);
    	print drupal_render($form['form_id']);
    	print drupal_render($form['actions']);*/
    ?>

</div><!--//login-wrapper-->

</div><!--//your-themename-user-login-form-wrapper -->

