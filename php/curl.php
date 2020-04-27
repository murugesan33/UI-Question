<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://development-ilinkintegrate.completemr.com/ilink/ilinkintegrate-4.0/ProjectSummary/loadAdhocConfig/2147484781");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
print $result;
?>