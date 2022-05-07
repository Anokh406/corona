<?php
include 'config.php';

$site_query="SELECT * FROM general_settings";
$put_query=$conn->query($site_query);


// site identity
$get_site_data=$put_query->fetch_assoc();
    $site_title=$get_site_data['site_title'];
    $site_name=$get_site_data['site_name'];
    $site_fav=$get_site_data['site_favicon'];
    $site_logo_text=$get_site_data['site_logo_text'];
    $site_logo_image=$get_site_data['site_logo_image'];
    $site_logo=$get_site_data['site_logo'];
    $site_keywords=$get_site_data['site_keywords'];
    $site_url=$get_site_data['site_url'];
    $site_email=$get_site_data['site_email_address'];
    $site_copyright=$get_site_data['site_copyright'];

