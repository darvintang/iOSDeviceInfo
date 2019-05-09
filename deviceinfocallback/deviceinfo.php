<?php
  $data = file_get_contents('php://input');
  $output = rawurlencode($data);
  header("Location: /deviceinfocallback/result?params={$output}", true, 301);
?>
