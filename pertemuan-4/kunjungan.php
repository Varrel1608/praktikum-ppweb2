<?php
require_once('BukuTamu.php');
session_start();

// Inisialisasi session jika belum ada
if (!isset($_SESSION['bukutamu'])) {
    $_SESSION['bukutamu'] = [];
}

// Proses input form
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    if (!empty($_POST['nama']) && !empty($_POST['email']) && !empty($_POST['keperluan'])) {
        $bukutamu = new BukuTamu();
        $bukutamu->timestamp = date('Y-m-d H:i:s');
        $bukutamu->nama = htmlspecialchars($_POST['nama']);
        $bukutamu->email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? $_POST['email'] : "Email tidak valid";
        $bukutamu->keperluan = htmlspecialchars($_POST['keperluan']);

        array_push($_SESSION['bukutamu'], $bukutamu);
        $success_message = "Data berhasil ditambahkan!";
    } else {
        $error_message = "Semua field wajib diisi!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            color: #333;
        }
        h4 {
            font-weight: bold;
            text-align: center;
        }
        .table th {
            background: #6a11cb;
            color: white;
            text-align: center;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table tbody tr:hover {
            background-color: #e0e0e0;
        }
        .btn-submit {
            background-color: #6a11cb;
            border: none;
            color: white;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
        }
        .btn-submit:hover {
            background-color: #5a0fb3;
        }
        .form-control {
            border-radius: 5px;
            box-shadow: inset 0px 1px 3px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<div class="container">
    <h4><i class="fas fa-book"></i> Daftar Kunjungan Perpustakaan</h4>

    <?php if (isset($success_message)): ?>
        <div class="alert alert-success"><?= $success_message; ?></div>
    <?php endif; ?>

    <?php if (isset($error_message)): ?>
        <div class="alert alert-danger"><?= $error_message; ?></div>
    <?php endif; ?>

    <!-- Daftar Kunjungan -->
    <h4 class="mt-4"><i class="fas fa-list"></i> Daftar Kunjungan</h4>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Waktu</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Keperluan</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($_SESSION['bukutamu'])): ?>
                    <?php foreach ($_SESSION['bukutamu'] as $entry): ?>
                        <tr>
                            <td><?= $entry->timestamp; ?></td>
                            <td><?= $entry->nama; ?></td>
                            <td><?= $entry->email; ?></td>
                            <td><?= nl2br($entry->keperluan); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">Belum ada data.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
