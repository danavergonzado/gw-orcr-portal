<?php
    
    if(isset($_GET['f']) && isset($_GET['b']) && !empty($_GET['f']))
    {
		$csr_uploads_dir = '/mnt/csruploads/';
        $file_to_transfer = $_GET['f'];
        $brand = $_GET['b'];
        $file_name = $file_to_transfer;
        $src_file = $csr_uploads_dir."/".$brand. "/".$file_name;
        $dst_file = "uploads/".$file_name;
        $transfer = copy($src_file, $dst_file);
        $status = ($transfer) ? 'ok' : 'failed';
        $json_data = array(['filename' =>  $file_name, 'dir' =>  'uploads', 'transfer_status' => $status]);

        echo json_encode($json_data);
    }
    else
    {
        echo "Error: Please contact the site administrator..";
    }

    
?>