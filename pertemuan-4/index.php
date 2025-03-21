<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Form Submission</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fc;
            padding-top: 30px;
        }
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            font-size: 32px;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            color: #555;
            margin-bottom: 30px;
        }
        .form-group label {
            font-weight: 500;
            color: #555;
        }
        .form-control {
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
        }
        .form-control:focus {
            border-color: #5cb85c;
            box-shadow: 0 0 5px rgba(92, 184, 92, 0.5);
        }
        .btn-primary {
            background-color: #4CAF50;
            border-color: #4CAF50;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #45a049;
            border-color: #45a049;
        }
        .btn {
            cursor: pointer;
        }
        .form-group .col-8 {
            padding-left: 0;
            padding-right: 0;
        }
        .form-group .offset-4 {
            margin-left: 33.33%;
        }
        .fa {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><i class="fa fa-book"></i> Selamat Datang Di Perpustakaan STT-NF</h2>
        <p>Silahkan isi Buku Tamu di Bawah Ini</p>
        <form method="post" action="kunjungan.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                    <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                    <input id="email" name="email" placeholder="Masukkan alamat email" type="email" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="keperluan" class="col-4 col-form-label">Keperluan</label> 
                <div class="col-8">
                    <textarea id="keperluan" name="keperluan" cols="40" rows="5" class="form-control" required="required" placeholder="Jelaskan keperluan Anda..."></textarea>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
