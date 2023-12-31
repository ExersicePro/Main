<!DOCTYPE html>
<html>
    
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/register.css">
    <link rel="icon" type="image/x-icon" href="./assets/img/loco.jpg">
    <title>Buat Akun</title>
</head>

    <body style="background-color:#C8E4B2;">
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-fluid mb-5">
                <div class="p-3 rounded shadow bg-white">
                    <h2 class="text-center">Buat Akun</h2>
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Lengkap">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Rumah</label>
                            <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat Rumah">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="text" class="form-control" id="tanggal_lahir" placeholder="Masukan Tanggal Lahir">
                            <span class="date">Format: DD/MM/YYYY</span>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender">
                                <option>Pilih jenis kelamin</option>
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="nomor_telepon" placeholder="Masukan Nomor Telepon">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukan Email Pribadi">
                        </div>
                        <div class="mb-3">
                            <label for="kata_sandi" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="kata_sandi" placeholder="Masukan kata sandi">
                        </div>
                        <div class="mb-3">
                            <label for="konfirmasi_kata_sandi" class="form-label">Ketik Ulang Kata Sandi</label>
                            <input type="password" class="form-control" id="konfirmasi_kata_sandi" placeholder="Masukan ulang kata sandi">
                        </div>
                        <button type="submit" class="btn btn-primary">Buat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/5.3.2/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/5.3.2/css/bootstrap-datepicker3.css"/>

</html>
