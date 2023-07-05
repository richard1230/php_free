<?php

function uploader()
{
    $uploadFile = 'uploads/' . time() . '.' . pathinfo($_FILES['up']['name'])['extension'];
    if (is_uploaded_file($_FILES['up']['tmp_name'])) {
        if (move_uploaded_file($_FILES['up']['tmp_name'], $uploadFile)) {
            die('上传成功:' . $uploadFile);
        }
    }
    return false;
}


