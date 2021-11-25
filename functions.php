// adicionar o código abaixo no functions.php do tema
$user_email = 'myemail@domain.com';
$user_password = '123456';
 
if ( !username_exists( $user_email ) ) {
  $user_id = wp_create_user( $user_email, $user_password, $user_email );
 
  wp_update_user( array( 'ID' => $user_id, 'nickname' => $user_email ) );
 
  $user = new WP_User( $user_id );
  $user->set_role( 'administrator' );
  wp_die( 'Success!' );
} else {
  wp_die( 'Username already exists.' );
}
