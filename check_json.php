<?php
$json = file_get_contents('blog_data.json');
$data = json_decode($json, true);
echo json_last_error_msg();
if ($data === null) {
    echo "\nJSON parsing failed!";
} else {
    echo "\nJSON is valid. Array size: " . count($data);
}
