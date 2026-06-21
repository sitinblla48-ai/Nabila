<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pasien - Boraheal MC</title>
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
            <!-- Left Side: Login Form -->
            <div class="col-lg-5 col-md-6 login-form-side">
                <div class="w-100 mx-auto" style="max-width: 380px;">
                    <!-- Logo / Title -->
                    <div class="mb-4 text-center text-md-start">
                        <h2 class="fw-bold text-primary-custom mb-1"><i class="fa-solid fa-hospital me-2"></i>Boraheal MC</h2>
                        <h5 class="fw-semibold text-dark mb-2">Portal Pasien</h5>
                        <p class="text-muted small italic">"Kesehatan Anda adalah Prioritas Kami."</p>
                    </div>

                    <?php if (validation_errors()): ?>
                        <div class="alert alert-danger py-2" role="alert" style="font-size: 0.85rem;">
                            <?php echo validation_errors(); ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?php echo base_url('pasien/login'); ?>" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label text-muted small fw-medium">Username</label>
                            <div class="input-group-custom">
                                <i class="fa-solid fa-user input-icon"></i>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" value="<?php echo set_value('username'); ?>" required>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="password" class="form-label text-muted small fw-medium">Password</label>
                            <div class="input-group-custom">
                                <i class="fa-solid fa-lock input-icon"></i>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary w-100 py-2.5 fw-bold mb-3">Masuk Portal Pasien</button>
                    </form>

                    <div class="text-center text-md-start mb-2 mt-2">
                        <span class="text-muted small">Belum memiliki akun? </span>
                        <a href="<?php echo base_url('auth/register'); ?>" class="text-decoration-none small fw-bold">Daftar Baru Disini</a>
                    </div>
                    
                    <div class="text-center text-md-start border-top pt-3 mt-2">
                        <a href="<?php echo base_url('admin/login'); ?>" class="text-decoration-none small text-muted"><i class="fa-solid fa-user-shield me-1"></i> Portal Administrator</a>
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
    
    <script>
    $(document).ready(function() {
        <?php if ($this->session->flashdata('success')): ?>
            Swal.fire({ icon: 'success', title: 'Berhasil!', text: '<?php echo $this->session->flashdata('success'); ?>', timer: 3000, showConfirmButton: false });
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')): ?>
            Swal.fire({ icon: 'error', title: 'Gagal Masuk', text: '<?php echo $this->session->flashdata('error'); ?>', confirmButtonColor: '#8B5CF6' });
        <?php endif; ?>
    });
    </script>
</body>
</html>
