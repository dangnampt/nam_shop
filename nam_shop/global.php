<?php
    $ROOT_URL="/NAM_SHOP";
    $CONTENT_URL="$ROOT_URL/content";
    $ADMIN_URL="$ROOT_URL/admin";
    $SITE_URL="$ROOT_URL/site";
    function exist_param($fieldname){
        return array_key_exists($fieldname, $_REQUEST);
    }
?>