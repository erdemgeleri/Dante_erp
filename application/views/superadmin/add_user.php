<?php 
    $page_title = 'Kullanıcı Ekle';
    $user_name = 'Super Admin';
    $user_initials = 'SA';
    $user_role = 'Administrator';
    
    $nav_menu = [
        ['label' => 'Dashboard', 'url' => site_url('superadmin/dashboard')],
        ['label' => 'Kullanıcılar', 'url' => site_url('superadmin/users')],
        ['label' => 'İzinler', 'url' => site_url('superadmin/permissions')],
        ['label' => 'Ayarlar', 'url' => site_url('superadmin/settings')]
    ];
?>

<?php $this->load->view('partials/header'); ?>

<style>
    /* Form Container */
    .form-container {
        max-width: 600px;
        background: white;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
    }

    .page-header {
        margin-bottom: 30px;
    }

    .page-header h1 {
        font-size: 24px;
        font-weight: 700;
        color: #1a1a1a;
        margin-bottom: 8px;
    }

    .page-header p {
        color: #666;
        font-size: 13px;
    }

    /* Form Group */
    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        color: #1a1a1a;
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 6px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 13px;
        font-family: inherit;
        color: #1a1a1a;
        transition: border-color 0.2s;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    .form-group input::placeholder {
        color: #999;
    }

    /* Form Row (İki sütun) */
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .form-row .form-group {
        margin-bottom: 0;
    }

    /* Error/Success Messages */
    .alert {
        padding: 12px 16px;
        border-radius: 6px;
        font-size: 13px;
        margin-bottom: 20px;
    }

    .alert-error {
        background: #fee;
        border: 1px solid #fcc;
        color: #c33;
    }

    .alert-success {
        background: #efe;
        border: 1px solid #cfc;
        color: #3c3;
    }

    /* Buttons */
    .form-actions {
        display: flex;
        gap: 12px;
        margin-top: 30px;
    }

    .btn {
        padding: 10px 20px;
        border: none;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .btn-primary {
        background: #2563eb;
        color: white;
        flex: 1;
    }

    .btn-primary:hover {
        background: #1d4ed8;
    }

    .btn-secondary {
        background: #f0f0f0;
        color: #666;
        border: 1px solid #ddd;
    }

    .btn-secondary:hover {
        background: #e8e8e8;
    }

    .btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    /* Helper Text */
    .help-text {
        font-size: 11px;
        color: #999;
        margin-top: 4px;
    }

    /* Password Requirements */
    .password-info {
        background: #f8f9fa;
        border: 1px solid #ddd;
        padding: 12px;
        border-radius: 4px;
        font-size: 12px;
        color: #666;
        margin-top: 8px;
    }

    .password-info ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .password-info li {
        padding: 4px 0;
        padding-left: 20px;
        position: relative;
    }

    .password-info li:before {
        content: "✓";
        color: #16a34a;
        font-weight: bold;
        position: absolute;
        left: 0;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .form-container {
            padding: 30px;
        }

        .form-row {
            grid-template-columns: 1fr;
        }

        .page-header h1 {
            font-size: 20px;
        }
    }

    @media (max-width: 480px) {
        .form-container {
            padding: 20px;
        }

        .form-actions {
            flex-direction: column;
        }

        .btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<!-- Main Content -->
<div style="display: flex; justify-content: center; padding: 20px 0;">
    <div class="form-container">
        <!-- Page Header -->
        <div class="page-header">
            <h1>Yeni Kullanıcı Ekle</h1>
            <p>Sisteme yeni bir kullanıcı hesabı oluşturun</p>
        </div>

        <!-- Error/Success Messages -->
        <?php if($this->session->flashdata('error')): ?>
            <div class="alert alert-error">
                <?= $this->session->flashdata('error') ?>
            </div>
        <?php endif; ?>

        <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success">
                <?= $this->session->flashdata('success') ?>
            </div>
        <?php endif; ?>

        <!-- Form -->
        <form action="<?= site_url('superadmin/add_user_post') ?>" method="post">
            <?php if (validation_errors()): ?>
    <div class="alert alert-error">
        <?= validation_errors(); ?>
    </div>
<?php endif; ?>
            <!-- Ad ve Soyad (İki sütun) -->
            <div class="form-row">
                <div class="form-group">
                    <label for="name">Ad *</label>
                    <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        placeholder="Adı girin"
                        required
                        minlength="2"
                        maxlength="50"
                    >
                </div>
                <div class="form-group">
                    <label for="surname">Soyad *</label>
                    <input 
                        type="text" 
                        name="surname" 
                        id="surname" 
                        placeholder="Soyadı girin"
                        required
                        minlength="2"
                        maxlength="50"
                    >
                </div>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">E-posta *</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    placeholder="ornek@dante.com"
                    required
                >
                <div class="help-text">Doğrulama linki bu e-postaya gönderilecek</div>
            </div>

            <!-- Telefon ve Rol (İki sütun) -->
            <div class="form-row">
                <div class="form-group">
                    <label for="phone">Telefon *</label>
                    <input 
                        type="tel" 
                        name="phone" 
                        id="phone" 
                        placeholder="+90 555 555 5555"
                        required
                    >
                </div>
                <div class="form-group">
                    <label for="role">Rol *</label>
                    <select name="role" id="role" required>
                        <option value="">-- Seçin --</option>
                        <option value="user">Kullanıcı</option>
                        <option value="admin">Yönetici</option>
                        <option value="super_admin">Super Admin</option>
                    </select>
                </div>
            </div>
            <!-- Adres -->
            <div class="form-group">
                <label for="username">Kullanıcı Adı</label>
                <input 
                    name="username" 
                    id="username" 
                    placeholder="Kullanıcı adı girin"
                    required
                    minlength="4"
                    maxlength="50"
                ></input>
            </div>
            <!-- Adres -->
            <div class="form-group">
                <label for="address">Adres</label>
                <textarea 
                    name="address" 
                    required
                    id="address" 
                    placeholder="Tam adres girin"
                    rows="3"
                    maxlength="200"
                ></textarea>
            </div>

            <!-- Şifre -->
            <div class="form-group">
                <label for="password">Şifre *</label>
                <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    placeholder="Güçlü bir şifre oluşturun"
                    required
                    minlength="8"
                >
                <div class="password-info">
                    <strong>Şifre gereksinimleri:</strong>
                    <ul>
                        <li>Minimum 8 karakter</li>
                        <li>Harf ve rakam içermesi</li>
                        <li>Özel karakter içermesi (@, #, $, vb.)</li>
                    </ul>
                </div>
            </div>

            <!-- Şifre Tekrarı -->
            <div class="form-group">
                <label for="password_confirm">Şifre Tekrarı *</label>
                <input 
                    type="password" 
                    name="password_confirm" 
                    id="password_confirm" 
                    placeholder="Şifreyi tekrar girin"
                    required
                    minlength="8"
                >
            </div>

            <!-- Form Actions -->
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-user-plus"></i> Kullanıcı Ekle
                </button>
                <a href="<?= site_url('superadmin/users') ?>" class="btn btn-secondary">
                    <i class="fas fa-times"></i> İptal
                </a>
            </div>
        </form>
    </div>
</div>

<?php $this->load->view('partials/footer'); ?>