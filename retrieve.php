<?php
session_start();
if (isset($_SESSION['current_host']) != '1') {
    $pesan = [
        'error' => 'hanya diperbolehkan diakses lewat ajax'
    ];
    echo json_encode($pesan);
    return false;
}
if (isset($_POST['prompt']) == '' or isset($_POST['size']) == '' or isset($_POST['n']) == '') {
    $pesan = [
        'error' => 'silakan masukkan semua data'
    ];
    echo json_encode($pesan);
    return false;
}
$url = "https://api.openai.com/v1/images/generations";
$token = "YOUR_API_KEY_HERE";
$parameter = [
    'prompt' => $_POST['prompt'],
    'n' => (int)$_POST['n'],
    'size' => $_POST['size']
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $token,
    'Content-Length:' . strlen(json_encode($parameter))
]);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($parameter));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);
curl_close($ch);

echo $response;