<?php
$data = json_decode(file_get_contents("php://input"), true);
$google_url = "https://script.google.com/macros/s/AKfycbxZ1S_9azKZNexx8-bgnoCfqRAXjuQCdw-abr9ARo9mNDjb5VyHQHLla2mbBFJHUgxt/exec";
$ch = curl_init($google_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
$response = curl_exec($ch);
curl_close($ch);
echo "Reenviado a Google: " . $response;
?>
