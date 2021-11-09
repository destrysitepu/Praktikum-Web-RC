<?php 
        function susun(&$Nama){
            sort($Nama);
        }

        $Nama = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
        echo "Nama Acak : <br> <br>";
        $i = 0;
        foreach($Nama as $nama){
            if($i < count($Nama)-1){
                echo $nama." | ";
            }else{
                echo $nama;
            }
            $i++;
        }

        echo "<br><br><br>";

        echo "Urutan Nama :"; 
        echo "<br> <br>";
        susun($Nama);

        $i = 0;
        foreach($Nama as $nama){
            if($i < count($Nama)-1){
                echo $nama." | ";
            }else{
                echo $nama;
            }
            $i++;
        }
    ?>
