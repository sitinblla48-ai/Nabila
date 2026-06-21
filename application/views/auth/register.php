<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pasien Baru - Boraheal MC</title>
    <!-- Google Fonts - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>
<body class="login-bg">
    <div class="container-fluid p-0 login-fullscreen">
        <div class="row g-0">
            <!-- Left Side: Register Form -->
            <div class="col-lg-5 col-md-6 login-form-side">
                <div class="w-100 mx-auto" style="max-width: 380px;">
                    <!-- Logo / Title -->
                    <div class="mb-4 text-center text-md-start">
                        <h2 class="fw-bold text-primary-custom mb-1"><i class="fa-solid fa-hospital me-2"></i>Boraheal MC</h2>
                        <h5 class="fw-semibold text-dark mb-2">Registrasi Akun Baru</h5>
                        <p class="text-muted small italic">"Kesehatan Anda adalah Prioritas Kami."</p>
                    </div>

                    <?php if (validation_errors()): ?>
                        <div class="alert alert-danger py-2" role="alert" style="font-size: 0.85rem;">
                            <?php echo validation_errors(); ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?php echo base_url('auth/register'); ?>" method="POST">
                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label text-muted small fw-medium">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama lengkap Anda" value="<?php echo set_value('nama_lengkap'); ?>" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label text-muted small fw-medium">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo set_value('tanggal_lahir'); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="no_telepon" class="form-label text-muted small fw-medium">Nomor Telepon</label>
                            <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="Angka saja" value="<?php echo set_value('no_telepon'); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label text-muted small fw-medium">Alamat Lengkap</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="2" placeholder="Alamat rumah lengkap" required><?php echo set_value('alamat'); ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label text-muted small fw-medium">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Pilih username unik" value="<?php echo set_value('username'); ?>" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="password" class="form-label text-muted small fw-medium">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Minimal 5 karakter" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary w-100 py-2.5 fw-bold mb-3">Daftar Akun Baru</button>
                    </form>

                    <div class="text-center text-md-start border-top pt-3 mt-2">
                        <span class="text-muted small">Sudah memiliki akun? </span>
                        <a href="<?php echo base_url('pasien/login'); ?>" class="text-decoration-none small fw-bold">Masuk Disini</a>
                    </div>
                </div>
            </div>

            <!-- Right Side: Clean Medical Illustration -->
            <div class="col-lg-7 col-md-6 d-none d-md-flex login-image-side">
                <div class="login-image-container text-center">
                    <img src="<?php echo base_url('assets/img/hospital_illustration.png'); ?>" alt="Hospital Illustration" class="login-img mb-4">
                    <h4 class="fw-bold text-primary-custom mb-2">Boraheal Medical Center</h4>
                    <p class="text-muted px-4" style="max-width: 500px; font-size: 0.95rem;">Sistem pendaftaran pasien berbasis web yang aman, mudah, dan efisien untuk kebutuhan pelayanan medis Anda.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- JQuery, Bootstrap 5, SweetAlert2 -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>