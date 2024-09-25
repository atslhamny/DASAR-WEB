<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
            font-family: Arial, sans-serif;
            font-size: 16px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: left;
        }

        td {
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>

    <?php
    $Dosen = [
        'Nama' => 'Elok Nur Hamdana',
        'Domisili' => 'Malang',
        'Jenis Kelamin' => 'Perempuan'
    ];
    ?>

    <table>
        <tr>
            <th>Data</th>
            <th>Informasi</th>
        </tr>
        <?php
        foreach ($Dosen as $key => $value) {
            echo "<tr>";
            echo "<td>{$key}</td>";
            echo "<td>{$value}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>


</html>