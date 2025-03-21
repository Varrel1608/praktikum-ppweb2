<?php
if (!isset($_POST['name'])){
    echo '<script>alert("Anda Harus Mengisi Form Terlebih Dahulu")</script>
<meta http-equiv="refresh" content="0;url=form_nilai.php">';
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasiswa</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: white;
        }
        .container {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            max-width: 500px;
            text-align: center;
        }
        h2 {
            margin-bottom: 15px;
            font-size: 24px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            overflow: hidden;
            color: white;
        }
        td {
            padding: 12px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.4);
            text-align: left;
        }
        td:first-child {
            font-weight: bold;
            color: #f1f1f1;
        }
        .result {
            font-size: 22px;
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
        .grade-A { color: #2ecc71; }
        .grade-B { color: #3498db; }
        .grade-C { color: #f1c40f; }
        .grade-D { color: #e67e22; }
        .grade-E { color: #e74c3c; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hasil Nilai Mahasiswa</h2>
        <?php
        if (!isset($_POST['name'])) {
            echo '<script>alert("Anda Harus Mengisi Form Terlebih Dahulu")</script>';
            echo '<meta http-equiv="refresh" content="0;url=form_nilai.php">';
            exit;
        }
        ?>
        <table>
            <tr><td>Nama</td><td>:</td><td><?= htmlspecialchars($_POST['name']) ?></td></tr>
            <tr><td>NIM</td><td>:</td><td><?= htmlspecialchars($_POST['nim']) ?></td></tr>
            <tr><td>Rombel</td><td>:</td><td><?= htmlspecialchars($_POST['rombel']) ?></td></tr>
            <tr><td>Mata Kuliah</td><td>:</td><td><?= htmlspecialchars($_POST['matkul']) ?></td></tr>
            <tr><td>Nilai Tugas</td><td>:</td><td><?= htmlspecialchars($_POST['tugas']) ?></td></tr>
            <tr><td>Nilai UTS</td><td>:</td><td><?= htmlspecialchars($_POST['uts']) ?></td></tr>
            <tr><td>Nilai UAS</td><td>:</td><td><?= htmlspecialchars($_POST['uas']) ?></td></tr>
            <tr><td>Predikat</td><td>:</td><td class="result <?php 
                $tugas = $_POST['tugas'] * 0.35;
                $uts = $_POST['uts'] * 0.30;
                $uas = $_POST['uas'] * 0.35;
                $total = $tugas + $uts + $uas;
                
                if ($total <= 35) {
                    $pred = "E";
                    echo 'grade-E';
                } elseif ($total <= 55) {
                    $pred = "D";
                    echo 'grade-D';
                } elseif ($total <= 69) {
                    $pred = "C";
                    echo 'grade-C';
                } elseif ($total <= 84) {
                    $pred = "B";
                    echo 'grade-B';
                } else {
                    $pred = "A";
                    echo 'grade-A';
                }
                ?>"><?php echo $pred; ?></td></tr>
            <tr><td>Keterangan</td><td>:</td><td class="result">
                <?php
                switch ($pred) {
                    case 'A': echo "Sangat Baik"; break;
                    case 'B': echo "Baik"; break;
                    case 'C': echo "Cukup"; break;
                    case 'D': echo "Kurang"; break;
                    case 'E': echo "Sangat Kurang"; break;
                    default: echo "Tidak Valid"; break;
                }
                ?>
            </td></tr>
        </table>
    </div>
</body>
</html>


