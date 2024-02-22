<?php
    isset( $_GET['id'] ) ? $id = $_GET['id'] : $id = "";
    if( !empty( $id ) ) {
        $conn = mysqli_connect("localhost", "root", "", "education");

        mysqli_query( $conn, "SET NAMES UTF8" );

        $sql = " DELETE FROM colleges WHERE (id = '{$id}' ) ";
        if( mysqli_query( $conn, $sql ) ) {
            echo "ลบข้อมูล รหัส {$id} เรียบร้อย";
        }

        mysqli_close( $conn );
    }
?>