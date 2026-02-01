<?php 
    $page_title = 'Kullanıcı Düzenle';
?>

<?php $this->load->view('partials/header'); ?>

<style>
    /* Edit User Wrapper */
    .edit-user-wrapper {
        display: flex;
        justify-content: center;
        padding: 20px;
        min-height: calc(100vh - 200px);
    }

    /* Page Header */
    .page-header {
        margin-bottom: 30px;
    }

    .page-header h1 {
        font-size: 28px;
        font-weight: 700;
        color: #1a1a1a;
        margin: 0 0 8px 0;
    }

    .page-header p {
        color: #666;
        font-size: 14px;
        margin: 0;
    }

    /* Form Container */
    .form-container {
        width: 100%;
        max-width: 700px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
        padding: 30px;
    }

    /* Form Group */
    .form-group {
        margin-bottom: 24px;
    }

    .form-group:last-child {
        margin-bottom: 0;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-size: 14px;
        font-weight: 600;
        color: #1a1a1a;
    }

    .form-group label .required {
        color: #dc2626;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 14px;
        font-family: inherit;
        color: #1a1a1a;
        transition: border-color 0.2s, box-shadow 0.2s;
        box-sizing: border-box;
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

    .form-group textarea {
        resize: vertical;
        min-height: 100px;
    }

    /* Form Row (for multiple columns) */
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 24px;
    }

    .form-row .form-group {
        margin-bottom: 0;
    }

    /* Helper Text */
    .form-text {
        font-size: 12px;
        color: #999;
        margin-top: 6px;
    }

    /* Error Message */
    .error-message {
        color: #dc2626;
        font-size: 12px;
        margin-top: 6px;
    }

    .form-group.has-error input,
    .form-group.has-error select,
    .form-group.has-error textarea {
        border-color: #dc2626;
    }

    /* Form Actions */
    .form-actions {
        display: flex;
        gap: 12px;
        margin-top: 32px;
        padding-top: 24px;
        border-top: 1px solid #f0f0f0;
    }

    /* Buttons */
    .btn {
        padding: 11px 20px;
        border: none;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        white-space: nowrap;
    }

    .btn-primary {
        background: #2563eb;
        color: white;
    }

    .btn-primary:hover {
        background: #1d4ed8;
    }

    .btn-primary:active {
        background: #1e40af;
    }

    .btn-secondary {
        background: #f0f0f0;
        color: #666;
        border: 1px solid #ddd;
    }

    .btn-secondary:hover {
        background: #e8e8e8;
    }

    .btn-secondary:active {
        background: #e0e0e0;
    }

    .btn-danger {
        background: #fee;
        color: #c33;
        border: 1px solid #fcc;
    }

    .btn-danger:hover {
        background: #fdd;
    }

    /* Loading State */
    .btn:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }

    .btn .spinner {
        display: inline-block;
        width: 14px;
        height: 14px;
        border: 2px solid rgba(255,255,255,0.3);
        border-top: 2px solid white;
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }

    /* Validation Icons */
    .form-group.success input,
    .form-group.success select {
        border-color: #22c55e;
    }

    /* Section Title */
    .section-title {
        font-size: 16px;
        font-weight: 600;
        color: #1a1a1a;
        margin-top: 32px;
        margin-bottom: 16px;
        padding-bottom: 12px;
        border-bottom: 2px solid #f0f0f0;
    }

    .section-title:first-child {
        margin-top: 0;
    }

    /* Info Alert */
    .info-box {
        background: #eff6ff;
        border-left: 4px solid #2563eb;
        padding: 12px 16px;
        border-radius: 4px;
        margin-bottom: 24px;
        font-size: 13px;
        color: #1e40af;
    }

    .info-box i {
        margin-right: 8px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .edit-user-wrapper {
            padding: 16px;
        }

        .form-container {
            padding: 24px;
        }

        .form-row {
            grid-template-columns: 1fr;
            gap: 0;
        }

        .form-row .form-group {
            margin-bottom: 24px;
        }

        .form-actions {
            flex-direction: column;
        }

        .form-actions .btn {
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .edit-user-wrapper {
            padding: 12px;
        }

        .page-header h1 {
            font-size: 24px;
        }

        .page-header p {
            font-size: 12px;
        }

        .form-container {
            padding: 16px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            font-size: 16px;
            padding: 12px;
        }

        .section-title {
            font-size: 14px;
        }
    }
</style>

<!-- Edit User Wrapper -->
<div class="edit-user-wrapper">
    <!-- Page Header -->
    <div class="form-container">
        <div class="page-header">
            <h1>Kullanıcı Düzenle</h1>
            <p>Kullanıcı bilgilerini güncelleyin</p>
        </div>

        <!-- Form Container -->
        <form id="editUserForm" method="POST" action="<?= site_url('superadmin/edit_user_post') ?>">
        
        <div class="info-box">
            <i class="fas fa-info-circle"></i>
            Yıldız (<span class="required">*</span>) ile işaretlenen alanlar zorunludur.
        </div>

        <!-- Personal Information Section -->
        <div class="section-title">Kişisel Bilgiler</div>

        <div class="form-group">
            <label for="full_name">
                Tam Ad <span class="required">*</span>
            </label>
            <input 
                type="text" 
                id="full_name" 
                name="full_name" 
                placeholder="Tam adı giriniz"
                required
                value="<?= isset($user->full_name) ? htmlspecialchars($user->full_name) : '' ?>"
            >
            <div class="form-text">Kullanıcının tam adı</div>
        </div>

        <div class="form-group">
            <label for="phone">
                Telefon Numarası <span class="required">*</span>
            </label>
            <input 
                type="tel" 
                id="phone" 
                name="phone" 
                placeholder="+90 (XXX) XXX XX XX"
                required
                value="<?= isset($user->phone) ? htmlspecialchars($user->phone) : '' ?>"
            >
            <div class="form-text">Geçerli bir telefon numarası giriniz</div>
        </div>

        <div class="form-group">
            <label for="address">
                Adres <span class="required">*</span>
            </label>
            <textarea 
                id="address" 
                name="address" 
                placeholder="Tam adres giriniz"
                required
            ><?= isset($user->address) ? htmlspecialchars($user->address) : '' ?></textarea>
            <div class="form-text">Ev veya iş adresi</div>
        </div>

        <!-- Account Information Section -->
        <div class="section-title">Hesap Bilgileri</div>

        <div class="form-group">
            <label for="username">
                Kullanıcı Adı <span class="required">*</span>
            </label>
            <input 
                type="text" 
                id="username" 
                name="username" 
                placeholder="Kullanıcı adı giriniz"
                required
                value="<?= isset($user->username) ? htmlspecialchars($user->username) : '' ?>"
            >
            <div class="form-text">Oturum açma için kullanılan adı</div>
        </div>

        <div class="form-group">
            <label for="email">
                E-posta <span class="required">*</span>
            </label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                placeholder="ornek@example.com"
                required
                value="<?= isset($user->email) ? htmlspecialchars($user->email) : '' ?>"
            >
            <div class="form-text">Geçerli bir e-posta adresi giriniz</div>
        </div>

        <!-- Role Section -->
        <div class="section-title">Rol ve İzinler</div>

        <div class="form-group">
            <label for="role">
                Kullanıcı Rolü <span class="required">*</span>
            </label>
            <select id="role" name="role" required>
                <option value="">Rol seçiniz</option>
                <option value="user" <?= (isset($user) && $user->role === 'user') ? 'selected' : '' ?>>
                    Kullanıcı
                </option>
                <option value="admin" <?= (isset($user) && $user->role === 'admin') ? 'selected' : '' ?>>
                    Yönetici
                </option>
                <option value="super_admin" <?= (isset($user) && $user->role === 'super_admin') ? 'selected' : '' ?>>
                    Super Admin
                </option>
            </select>
            <div class="form-text">
                Kullanıcının sistem içinde sahip olacağı rol ve yetkileri belirler
            </div>
        </div>

        <!-- Password Section -->
        <div class="section-title">Şifre Değiştir</div>

        <div class="form-group">
            <label for="password">
                Yeni Şifre
            </label>
            <input 
                type="password" 
                id="password" 
                name="password" 
                placeholder="Şifreyi değiştirmek istemiyorsanız boş bırakın"
            >
            <div class="form-text">
                Şifreyi değiştirmek istemiyorsanız bu alanı boş bırakın. 
                Değiştirmek istiyorsanız en az 6 karakter olmalıdır.
            </div>
        </div>

        <!-- Form Actions -->
        <div class="form-actions">
            <a href="<?= site_url('superadmin/users') ?>" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Geri Dön
            </a>
            <button type="submit" class="btn btn-primary" id="submitBtn">
                <i class="fas fa-save"></i> Değişiklikleri Kaydet
            </button>
        </div>
        </form>
    </div>
</div>

<script>
    const form = document.getElementById('editUserForm');
    const submitBtn = document.getElementById('submitBtn');

    // Form Submit
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // Validate form
        if (!form.checkValidity()) {
            alert('Lütfen tüm zorunlu alanları doldurunuz.');
            return;
        }

        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner"></span> Kaydediliyor...';

        setTimeout(() => {
            form.submit();
        }, 300);
    });

    document.getElementById('email').addEventListener('blur', function() {
        const email = this.value;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        
        if (email && !emailRegex.test(email)) {
            this.parentElement.classList.add('has-error');
            if (!this.parentElement.querySelector('.error-message')) {
                const errorMsg = document.createElement('div');
                errorMsg.className = 'error-message';
                errorMsg.textContent = 'Geçerli bir e-posta adresi giriniz';
                this.parentElement.appendChild(errorMsg);
            }
        } else {
            this.parentElement.classList.remove('has-error');
            const errorMsg = this.parentElement.querySelector('.error-message');
            if (errorMsg) errorMsg.remove();
            this.parentElement.classList.add('success');
        }
    });

    form.querySelectorAll('input, select, textarea').forEach(field => {
        field.addEventListener('input', function() {
            this.parentElement.classList.remove('success');
        });
    });

    document.getElementById('password').addEventListener('input', function() {
        const password = this.value;
        const form = this.closest('form');
        
        if (password && password.length < 6) {
            this.parentElement.classList.add('has-error');
            if (!this.parentElement.querySelector('.error-message')) {
                const errorMsg = document.createElement('div');
                errorMsg.className = 'error-message';
                errorMsg.textContent = 'Şifre en az 6 karakter olmalıdır';
                this.parentElement.appendChild(errorMsg);
            }
        } else {
            this.parentElement.classList.remove('has-error');
            const errorMsg = this.parentElement.querySelector('.error-message');
            if (errorMsg) errorMsg.remove();
        }
    });
</script>

<?php $this->load->view('partials/footer'); ?>