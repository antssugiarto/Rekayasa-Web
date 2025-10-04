<?php
function curl($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = curl("http://localhost/rekayasaWeb/pertemuan2/project1.php");

$data = json_decode($send, TRUE);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarif Wisata</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px 12px;
            text-align: left;
        }

        th {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1 align="center">Tarif Wisata</h1>
    <table>
        <thead>
            <tr>
                <th>KOTA</th>
                <th>LANDMARK</th>
                <th>TARIF</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row) : ?>
                <tr>
                    <td><?= $row["kota"]; ?></td>
                    <td><?= $row["landmark"]; ?></td>
                    <td><?= $row["tarif"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>