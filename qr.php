<?php 

        $phone;
        $amount;
        require 'Promptpay.php';
        $promptpay = \Iamohmx\Promptpay::create("66{$phone}", $amount);
        
        require 'phpqrcode/qrlib.php';

        $path = 'images/qr';
        $qrcode = $path.time().".png";

        $generate = QRcode::png($promptpay->payload(), $qrcode, 'H', 6,6);
        
        // if(!$generate) {
        //         if (file_exists($qrcode)){
        //                 unlink($qrcode);
        //                 echo "Deleted!";
        //         }
        // } else {
                
        // }




?>