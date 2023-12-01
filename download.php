<?php
// Replace 'Patricia_Anne_CV.pdf' with the actual path to your CV file
$cvFilePath = 'Patricia_Anne_CV.pdf';

// Set headers to force download
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($cvFilePath) . '"');
header('Content-Length: ' . filesize($cvFilePath));

// Output the file content
readfile($cvFilePath);
?>
