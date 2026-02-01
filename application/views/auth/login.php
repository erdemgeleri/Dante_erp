<!DOCTYPE html>
<html lang="<?= isset($current_lang) ? $current_lang : 'tr' ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->lang->line('title_login') ?> - <?= $this->lang->line('app_name') ?></title>
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
            max-width: 380px;
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

        .alert {
            padding: 10px 12px;
            border-radius: 6px;
            font-size: 13px;
            margin-bottom: 20px;
            background: #fee;
            border: 1px solid #fcc;
            color: #c33;
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
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo"><?= $this->lang->line('app_name') ?></div>
            <div class="tagline"><?= $this->lang->line('app_tagline') ?></div>
        </div>

        <div class="card">
            <div class="title"><?= $this->lang->line('title_login') ?></div>

            <form action="<?= site_url('auth/login_post') ?>" method="post">
                <?php if($this->session->flashdata('error')): ?>
                    <div class="alert"><?= $this->session->flashdata('error') ?></div>
                <?php endif; ?>
                <?php if(validation_errors()): ?>
                    <div class="alert"><?= validation_errors() ?></div>
                <?php endif; ?>

                <div class="form-group">
                    <label for="email"><?= $this->lang->line('label_email') ?></label>
                    <input type="email" id="email" name="email" placeholder="<?= $this->lang->line('placeholder_email') ?>" autocomplete="email" value="<?= set_value('email') ?>">
                </div>

                <div class="form-group">
                    <label for="password"><?= $this->lang->line('label_password') ?></label>
                    <input type="password" id="password" name="password" placeholder="<?= $this->lang->line('placeholder_password') ?>" required autocomplete="current-password">
                </div>

                <button type="submit" class="submit-btn"><?= $this->lang->line('btn_login') ?></button>
            </form>

            <div class="divider"></div>

            <div class="footer">
                <?= $this->lang->line('text_no_account') ?> <a href="<?= site_url('auth/register') ?>"><?= $this->lang->line('link_register') ?></a>
            </div>
            <?php if (isset($current_lang)): ?>
            <div class="footer" style="margin-top:8px;">
                <a href="<?= site_url('lang/set/tr') ?>"><?= $this->lang->line('lang_tr') ?></a> |
                <a href="<?= site_url('lang/set/en') ?>"><?= $this->lang->line('lang_en') ?></a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>