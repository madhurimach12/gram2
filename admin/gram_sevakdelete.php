<?php
include 'commonincludefiles.php';
require '../config/constant.php';

if (isset($_REQUEST['catid']) && $_REQUEST['catid'] != '') {
    
    $update_query = "DELETE FROM gram_sevak WHERE gram_sevak_id = " . $_REQUEST['catid'];        
    $update_res = mysqli_query($conn, $update_query);
                            
    if ($update_res) {
        $success = "1";
    } else {
        $success = "0";
    }    
	echo "<script>window.location='gram_sevak_list.php'</script>";
    echo json_encode($success);
}else{
	
     echo "<script>window.location='index.php'</script>";
}
?>
