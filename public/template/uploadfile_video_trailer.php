<?php

    $tager_dir = "img_phim/video_trailer/";

    $tager_file = $tager_dir.basename($_FILES['file']['name']);

    move_uploaded_file($_FILES['file']['tmp_name'],$tager_file);

?>