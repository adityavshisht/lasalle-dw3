<?php
  $terms   = '';
  $message = '';

  if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
    $is_checked = ( isset( $_POST[ 'terms' ] ) and $_POST[ 'terms' ] == true );
    $message    = $is_checked
      ? 'Thank you'
      : 'You must agree to the terms and conditions'
    ;
  }
?>

<?php include 'includes/header.php'; ?>

<?= $message ?>

<form action="validate-checkbox.php" method="POST">
  I agree to the terms and conditions: <input
    type  ="checkbox"
    name  ="terms"
    value ="true"
    <?= $terms ? 'checked' : '' ?>
  >
  <input type="submit" value="Save">
</form>

<?php include 'includes/footer.php'; ?>