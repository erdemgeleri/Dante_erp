<!DOCTYPE html>
<html lang="<?= isset($current_lang) ? $current_lang : 'tr' ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->lang->line('title_register') ?> - <?= $this->lang->line('app_name') ?></title>
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
            <div class="logo"><?= $this->lang->line('app_name') ?></div>
            <div class="tagline"><?= $this->lang->line('app_tagline') ?></div>
        </div>

        <div class="card">
            <div class="title"><?= $this->lang->line('title_register') ?></div>

            <form action="<?= site_url('auth/register_post') ?>" method="post">
                <?php if($this->session->flashdata('error')): ?>
                    <div class="alert alert-error"><?= $this->session->flashdata('error') ?></div>
                <?php endif; ?>

                <?php if($this->session->flashdata('success')): ?>
                    <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
                <?php endif; ?>

                <?php if(validation_errors()): ?>
                    <div class="alert alert-error"><?= validation_errors() ?></div>
                <?php endif; ?>

                <div class="form-row">
                    <div class="form-group">
                        <label for="first_name"><?= $this->lang->line('label_first_name') ?></label>
                        <input type="text" id="first_name" name="first_name" placeholder="<?= $this->lang->line('placeholder_first_name') ?>" required minlength="2" maxlength="30" value="<?= set_value('first_name') ?>">
                    </div>
                    <div class="form-group">
                        <label for="last_name"><?= $this->lang->line('label_last_name') ?></label>
                        <input type="text" id="last_name" name="last_name" placeholder="<?= $this->lang->line('placeholder_last_name') ?>" required minlength="2" maxlength="30" value="<?= set_value('last_name') ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="username"><?= $this->lang->line('label_username') ?></label>
                    <input type="text" id="username" name="username" placeholder="<?= $this->lang->line('placeholder_username_short') ?>" required minlength="3" maxlength="20" value="<?= set_value('username') ?>">
                    <div class="hint"><?= $this->lang->line('hint_username_3_20') ?></div>
                </div>

                <div class="form-group">
                    <label for="email"><?= $this->lang->line('label_email') ?></label>
                    <input type="email" id="email" name="email" placeholder="<?= $this->lang->line('placeholder_email_reg') ?>" required value="<?= set_value('email') ?>">
                </div>

                <div class="form-group">
                    <label for="phone"><?= $this->lang->line('label_phone') ?></label>
                    <input type="tel" id="phone" name="phone" placeholder="<?= $this->lang->line('placeholder_phone_reg') ?>" required value="<?= set_value('phone') ?>">
                </div>

                <div class="form-group">
                    <label for="address"><?= $this->lang->line('label_address') ?></label>
                    <input type="text" id="address" name="address" placeholder="<?= $this->lang->line('placeholder_address_reg') ?>" required value="<?= set_value('address') ?>">
                </div>

                <div class="form-group">
                    <label for="password"><?= $this->lang->line('label_password') ?></label>
                    <input type="password" id="password" name="password" placeholder="<?= $this->lang->line('placeholder_password_min') ?>" required minlength="6">
                </div>

                <button type="submit" class="submit-btn"><?= $this->lang->line('btn_register') ?></button>
            </form>

            <div class="divider"></div>

            <div class="footer">
                <?= $this->lang->line('text_has_account') ?> <a href="<?= site_url('auth/login') ?>"><?= $this->lang->line('link_login') ?></a>
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