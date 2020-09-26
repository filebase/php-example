<?php
  require 'vendor/autoload.php';

  $s3 = new Aws\S3\S3Client([
    'version'           => '2006-03-01',
    'region'            => 'us-east-1',
    'signature_version' => 'v4',
    'endpoint' => 'https://s3.filebase.com'
  ]);

  $buckets = $s3->listBuckets();
  foreach ($buckets['Buckets'] as $bucket) {
    echo $bucket['Name'] . "\n";
  }
?>
