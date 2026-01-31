<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol - Dante ERP</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f8f9fa;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 400px;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 8px;
        }

        .tagline {
            color: #666;
            font-size: 13px;
        }

        .card {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .title {
            font-size: 20px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 24px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .form-group label {
            display: block;
            color: #1a1a1a;
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 6px;
        }

        .form-group input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            color: #1a1a1a;
            transition: border-color 0.2s;
            font-family: inherit;
        }

        .form-group input:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.1);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .hint {
            font-size: 12px;
            color: #999;
            margin-top: 4px;
        }

        .alert {
            padding: 10px 12px;
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

        .submit-btn {
            width: 100%;
            padding: 10px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 8px;
        }

        .submit-btn:hover {
            background: #1d4ed8;
        }

        .divider {
            height: 1px;
            background: #eee;
            margin: 24px 0;
        }

        .footer {
            text-align: center;
            color: #666;
            font-size: 13px;
        }

        .footer a {
            color: #2563eb;
            text-decoration: none;
            font-weight: 500;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .card {
                padding: 30px;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">DANTE ERP</div>
            <div class="tagline">İşletme Yönetim Sistemi</div>
        </div>

        <div class="card">
            <div class="title">Kayıt Ol</div>

            <form action="<?= site_url('auth/register_post') ?>" method="post">
                <?php if($this->session->flashdata('error')): ?>
                    <div class="alert alert-error"><?= $this->session->flashdata('error') ?></div>
                <?php endif; ?>

                <?php if($this->session->flashdata('success')): ?>
                    <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
                <?php endif; ?>

                <div class="form-row">
                    <div class="form-group">
                        <label for="first_name">Ad</label>
                        <input type="text" id="first_name" name="first_name" placeholder="Ad" required minlength="2" maxlength="30">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Soyad</label>
                        <input type="text" id="last_name" name="last_name" placeholder="Soyad" required minlength="2" maxlength="30">
                    </div>
                </div>

                <div class="form-group">
                    <label for="username">Kullanıcı Adı</label>
                    <input type="text" id="username" name="username" placeholder="Kullanıcı adı" required minlength="3" maxlength="20">
                    <div class="hint">3-20 karakter</div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="ornek@ogrenci.edu.tr" required>
                </div>

                <div class="form-group">
                    <label for="phone">Telefon</label>
                    <input type="tel" id="phone" name="phone" placeholder="+90 555 555 5555" required>
                </div>

                <div class="form-group">
                    <label for="address">Adres</label>
                    <input type="text" id="address" name="address" placeholder="Adresiniz" required>
                </div>

                <div class="form-group">
                    <label for="password">Şifre</label>
                    <input type="password" id="password" name="password" placeholder="Şifre (min. 6 karakter)" required minlength="6">
                </div>

                <button type="submit" class="submit-btn">Kayıt Ol</button>
            </form>

            <div class="divider"></div>

            <div class="footer">
                Hesabınız var mı? <a href="<?= site_url('auth/login') ?>">Giriş yapın</a>
            </div>
        </div>
    </div>
</body>
</html>