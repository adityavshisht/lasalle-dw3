<?php include 'includes/header.php'; ?>

<?php

  $data = [
    'user' => ''
  ];

  $errors = [];

  if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {

    $data[ 'user' ] = isset( $_POST[ 'user' ] ) ? $_POST[ 'user' ] : '';
    $is_user_valid  = $data[ 'user' ] != '';

    if ( ! $is_user_valid ) {
      $errors[ 'user' ] = 'Name cannot be empty 😡';
    }
  }
?>

<form action="single-field-form.php" method="POST">
  Name: <input
    type  = "text"
    name  = "user"
    value = "<?= htmlspecialchars( $data[ 'user' ] ) ?>"
  />
  <span class="error">
    <?= isset( $errors[ 'user' ] ) ? $errors[ 'user' ] : '' ?>
  </span>
  <br />
  <input type="submit" value="Save" />
</form>

<?php include 'includes/footer.php'; ?>