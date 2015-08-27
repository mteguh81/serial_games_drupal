<?php
 //print the variables if needed to allow for individual field theming or breaking them up.
/*print '<pre>';
print_r($variables);
print '</pre>';*/

?>

<div class="bartik-user-password-form-wrapper">

<div class="password-wrapper">

    <h2><?php print render($intro_text); ?></h2>

    <?php print bartik_get_forgot_password_form(); ?>

</div><!--//password-wrapper-->

</div><!--//your-themename-user-password-form-wrapper -->

