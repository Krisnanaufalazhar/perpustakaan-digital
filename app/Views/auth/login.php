<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Perpustakaan Digital</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }

        .login-card {
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .logo {
            text-align: center;
            font-size: 45px;
            margin-bottom: 10px;
        }

        h1 {
            text-align: center;
            margin: 0;
            color: #1e293b;
        }

        .subtitle {
            text-align: center;
            color: #64748b;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
            color: #334155;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 7px;
            font-size: 15px;
        }

        input:focus {
            outline: none;
            border-color: #2563eb;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 7px;
            background: #2563eb;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.9;
        }

        .alert {
            padding: 12px;
            border-radius: 7px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .alert-error {
            background: #fee2e2;
            color: #991b1b;
        }

        .alert-success {
            background: #dcfce7;
            color: #166534;
        }

        .errors {
            margin: 0;
            padding-left: 20px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #94a3b8;
            font-size: 13px;
        }
    </style>
</head>

<body>

<div class="login-container">

    <div class="login-card">

        <div class="logo">
            📚
        </div>

        <h1>Perpustakaan Digital</h1>

        <p class="subtitle">
            Silakan login untuk melanjutkan
        </p>

        <?php if (session()->getFlashdata('error')): ?>

            <div class="alert alert-error">
                <?= esc(session()->getFlashdata('error')) ?>
            </div>

        <?php endif; ?>


        <?php if (session()->getFlashdata('success')): ?>

            <div class="alert alert-success">
                <?= esc(session()->getFlashdata('success')) ?>
            </div>

        <?php endif; ?>


        <?php if (session()->getFlashdata('errors')): ?>

            <div class="alert alert-error">

                <ul class="errors">

                    <?php foreach (session()->getFlashdata('errors') as $error): ?>

                        <li><?= esc($error) ?></li>

                    <?php endforeach; ?>

                </ul>

            </div>

        <?php endif; ?>


        <form action="<?= base_url('login/process') ?>" method="post">

            <?= csrf_field() ?>

            <div class="form-group">

                <label for="username">
                    Username
                </label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    value="<?= old('username') ?>"
                    placeholder="Masukkan username"
                    required
                >

            </div>


            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >

            </div>


            <button type="submit">
                Login
            </button>

        </form>


        <div class="footer">
            Perpustakaan Digital &copy; 2026
        </div>

    </div>

</div>

</body>
</html>