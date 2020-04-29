<?php
$con = mysqli_connect( '127.0.0.1', 'root', '', 'fee_tech' );
//emptyPassword

$var1 = $_POST['userName'];
$var2 = $_POST['userEmail'];
$var3 = $_POST['userMobile'];
$var4 = $_POST['userPassword'];

if ( $con )
 {

    if ( isset( $_POST['submit'] ) ) {

        $sql = "INSERT INTO `users`( `user_name`, `user_email`, `user_mobile`, `password` )
        VALUES ( '$var1', '$var2', $var3, '$var4' )";

        $check = mysqli_query( $con, $sql );

        if ( $check )
        echo 'Data Inserted';

    }

} else {
    echo '<h1 style="text-align: center; color: Red"> Not Connected</h1>';

}

?>