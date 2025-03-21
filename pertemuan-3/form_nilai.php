<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
            max-width: 500px;
        }
        .card {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: none;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        .card h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }
        .form-control, .custom-select {
            background: rgba(255, 255, 255, 0.3);
            border: none;
            color: white;
        }
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        .form-control:focus, .custom-select:focus {
            background: rgba(255, 255, 255, 0.5);
            box-shadow: none;
            color: white;
        }
        .btn-primary {
            background: #ff9f43;
            border: none;
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background: #ff6f43;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">   
                <h2>Form Nilai Mahasiswa</h2>
                <form method="post" action="hasil_nilai.php">
                    <div class="form-group">
                        <label for="name">Nama Mahasiswa</label>
                        <input id="name" name="name" placeholder="Masukkan Nama Lengkap" type="text" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="rombel">Rombel</label>
                        <input id="rombel" name="rombel" placeholder="Masukkan Rombel" type="text" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="matkul">Mata Kuliah</label>
                        <select id="matkul" name="matkul" class="custom-select" required>
                            <option value="pemweb">Pemrograman Web</option>
                            <option value="basis data">Basis Data</option>
                            <option value="statistika">Statistika</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tugas">Nilai Tugas</label>
                        <input id="tugas" name="tugas" placeholder="Masukkan Nilai Tugas" type="number" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="uts">Nilai UTS</label>
                        <input id="uts" name="uts" placeholder="Masukkan Nilai UTS" type="number" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="uas">Nilai UAS</label>
                        <input id="uas" name="uas" placeholder="Masukkan Nilai UAS" type="number" required class="form-control">
                    </div> 
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>