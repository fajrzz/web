<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $response = $_POST['response'];

    // Simpan jawaban ke file
    $file = fopen($response . ".html", "w");
    fwrite($file, "<html><body>Jawaban: " . htmlspecialchars($response) . "</body></html>");
    fclose($file);

    // Kirim jawaban ke email
    $to = 'email_pemilik@example.com';
    $subject = 'Jawaban dari Pengunjung';
    $message = 'Jawaban: ' . htmlspecialchars($response);
    $headers = 'From: no-reply@example.com' . "\r\n" .
               'Reply-To: no-reply@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    
    mail($to, $subject, $message, $headers);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6ffe6;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #4CAF50;
        }
        p {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Terima Kasih</h1>
    <p>
        Terima kasih setiap jawabanmu akan kuterima.
    </p>
</body>
</html>
