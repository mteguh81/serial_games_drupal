<?php
 //print the variables if needed to allow for individual field theming or breaking them up.
/*print '<pre>';
print_r($variables);
print '</pre>';*/

?>

<div class="bartik-user-register-form-wrapper">

<div class="register-wrapper">

	<h2><?php print render($intro_text); ?></h2>

    <?php print bartik_get_register_form(); ?>

</div><!--//register-wrapper-->

</div><!--//your-themename-user-register-form-wrapper -->

