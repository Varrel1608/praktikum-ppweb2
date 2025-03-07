<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">   
                <form method="post" action="hasil_nilai.php">
                <div class="form-group row">
                    <label for="name" class="col-4 col-form-label">Nama Mahasiswa</label> 
                    <div class="col-8">
                    <input id="name" name="name" placeholder="Masukkan Nama Lengkap" type="text" required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nim" class="col-4 col-form-label">NIM</label> 
                    <div class="col-8">
                    <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="rombel" class="col-4 col-form-label">Rombel</label> 
                    <div class="col-8">
                    <input id="rombel" name="rombel" placeholder="Masukkan Rombel" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select" required="required">
                        <option value="pemweb">Pemweb</option>
                        <option value="basis data">Basis data</option>
                        <option value="statistika">Statistika</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                    <div class="col-8">
                    <input id="tugas" name="tugas" placeholder="Masukkan Nilai Tugas" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <input id="uts" name="uts" placeholder="Masukkan Nilai UTS" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                    <input id="uas" name="uas" placeholder="Masukkan Nilai UAS" type="text" class="form-control" required="required">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>
</body>
</html>