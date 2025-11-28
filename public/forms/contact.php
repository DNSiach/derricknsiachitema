<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

   // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'derricknsiachitema@gmail.com';

  // This site uses Formspree for form handling on static hosts.
  // If you still want to use the PHP library, restore the original code and
  // place the php-email-form library at ../assets/vendor/php-email-form/php-email-form.php
  http_response_code(410);
  echo 'This endpoint is not used. The site is configured to use Formspree. Replace the Formspree action in the form if you need a different handler.';
?>
