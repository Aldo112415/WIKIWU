<?php
require "config.php" ;

$id = $_GET['id'] ;
    mysqli_query($mysqli,"DELETE FROM wiki WHERE id = $id") ;
    $no = mysqli_affected_rows($mysqli) ;
    if($no > 0){
        echo"

            <script>
                alert('data berhasil dihapus') ;
                document.location.href='komik.php' ;
            </script>
        
        " ;
    }
    else{
        echo"

            <script>
                alert('data tidak berhasil dihapus') ;
                document.location.href='komik.php' ;
            </script>
        
        " ;      
    }

?>


