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
    // split the username and password from the submit button so we can put in links above
    print drupal_render($form['name']);
    print drupal_render($form['pass']);

    ?>

    <div class="user-links">
        <span class="passlink"><a href="user/password">Forget your password?</a></span> | <span class="reglink"><a href="user/register">Create an account</a></span>
    </div>

    <?php
    print drupal_render($form['form_build_id']);
    print drupal_render($form['form_id']);
    print drupal_render($form['actions']);
    ?>

</div><!--//login-wrapper-->

</div><!--//your-themename-user-login-form-wrapper -->

