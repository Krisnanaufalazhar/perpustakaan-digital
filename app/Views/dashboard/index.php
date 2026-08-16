<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($title) ?> - Perpustakaan Digital</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        .navbar {
            background: #2563eb;
            color: white;
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            font-size: 22px;
            font-weight: bold;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logout {
            color: white;
            text-decoration: none;
            background: #dc2626;
            padding: 8px 14px;
            border-radius: 6px;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 35px auto;
        }

        .welcome {
            margin-bottom: 25px;
        }

        .welcome h1 {
            margin: 0 0 8px;
        }

        .welcome p {
            margin: 0;
            color: #64748b;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.06);
        }

        .stat-icon {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .stat-title {
            color: #64748b;
            margin-bottom: 5px;
        }

        .stat-number {
            font-size: 30px;
            font-weight: bold;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.06);
            margin-bottom: 25px;
        }

        .card h2 {
            margin-top: 0;
        }

        .actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .button {
            display: inline-block;
            padding: 11px 18px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }

        .button-primary {
            background: #2563eb;
            color: white;
        }

        .button-secondary {
            background: #e2e8f0;
            color: #334155;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #e2e8f0;
            text-align: left;
        }

        th {
            background: #f8fafc;
        }

        .badge {
            background: #dbeafe;
            color: #1d4ed8;
            padding: 5px 9px;
            border-radius: 15px;
            font-size: 13px;
        }

        @media (max-width: 700px) {

            .navbar {
                padding: 15px 20px;
            }

            .container {
                width: 94%;
            }

            .user-info span {
                display: none;
            }

            table {
                font-size: 13px;
            }

        }

    </style>

</head>

<body>

    <div class="navbar">

        <div class="brand">
            📚 Perpustakaan Digital
        </div>

        <div class="user-info">

            <span>
                👤 <?= esc($nama) ?>
            </span>

            <a
                href="<?= base_url('logout') ?>"
                class="logout"
            >
                Logout
            </a>

        </div>

    </div>


    <div class="container">


        <div class="welcome">

            <h1>
                Selamat Datang, <?= esc($nama) ?>! 👋
            </h1>

            <p>
                Kelola koleksi buku perpustakaan digital melalui dashboard.
            </p>

        </div>


        <div class="stats">

            <div class="stat-card">

                <div class="stat-icon">
                    📚
                </div>

                <div class="stat-title">
                    Total Buku
                </div>

                <div class="stat-number">
                    <?= esc($totalBuku) ?>
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon">
                    👤
                </div>

                <div class="stat-title">
                    Pengguna Login
                </div>

                <div class="stat-number">
                    1
                </div>

            </div>

        </div>


        <div class="card">

            <h2>
                Menu Perpustakaan
            </h2>

            <div class="actions">

                <a
                    href="<?= base_url('buku') ?>"
                    class="button button-primary"
                >
                    📖 Daftar Buku
                </a>

                <a
                    href="<?= base_url('buku/tambah') ?>"
                    class="button button-secondary"
                >
                    ➕ Tambah Buku
                </a>

            </div>

        </div>


        <div class="card">

            <h2>
                Buku Terbaru
            </h2>


            <?php if (empty($bukuTerbaru)): ?>

                <p>
                    Belum ada data buku.
                </p>

            <?php else: ?>

                <table>

                    <thead>

                        <tr>

                            <th>No</th>

                            <th>Judul</th>

                            <th>Penulis</th>

                            <th>Kategori</th>

                            <th>Tahun</th>

                        </tr>

                    </thead>


                    <tbody>

                        <?php $no = 1; ?>

                        <?php foreach ($bukuTerbaru as $buku): ?>

                            <tr>

                                <td>
                                    <?= $no++ ?>
                                </td>

                                <td>
                                    <strong>
                                        <?= esc($buku['judul']) ?>
                                    </strong>
                                </td>

                                <td>
                                    <?= esc($buku['penulis']) ?>
                                </td>

                                <td>

                                    <span class="badge">
                                        <?= esc($buku['kategori']) ?>
                                    </span>

                                </td>

                                <td>
                                    <?= esc($buku['tahun_terbit']) ?>
                                </td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            <?php endif; ?>

        </div>


    </div>

</body>

</html>