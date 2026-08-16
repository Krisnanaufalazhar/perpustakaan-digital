<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($title) ?></title>

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
            font-size: 22px;
            font-weight: bold;
        }

        .container {
            width: 94%;
            max-width: 1400px;
            margin: 35px auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 25px;
        }

        .header h1 {
            margin: 0 0 8px;
        }

        .header p {
            margin: 0;
            color: #64748b;
        }

        .button {
            display: inline-block;
            padding: 11px 17px;
            border-radius: 7px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .button-primary {
            background: #2563eb;
            color: white;
        }

        .button-edit {
            background: #f59e0b;
            color: white;
        }

        .button-delete {
            background: #dc2626;
            color: white;
        }

        .button:hover {
            opacity: 0.9;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.06);
        }

        .search-box {
            display: flex;
            gap: 10px;
            margin-bottom: 25px;
        }

        .search-box input {
            flex: 1;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 7px;
            font-size: 15px;
        }

        .search-box input:focus {
            outline: none;
            border-color: #2563eb;
        }

        .button-search {
            background: #2563eb;
            color: white;
        }

        .button-reset {
            background: #64748b;
            color: white;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 950px;
        }

        th,
        td {
            padding: 13px;
            border-bottom: 1px solid #e2e8f0;
            text-align: left;
            vertical-align: top;
        }

        th {
            background: #f8fafc;
            font-weight: bold;
        }

        tr:hover {
            background: #f8fafc;
        }

        .badge {
            display: inline-block;
            background: #dbeafe;
            color: #1d4ed8;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 13px;
        }

        .actions {
            display: flex;
            gap: 6px;
            white-space: nowrap;
        }

        .empty {
            text-align: center;
            padding: 35px;
            color: #64748b;
        }

        .pagination {
            margin-top: 25px;
            display: flex;
            justify-content: center;
        }

        .pagination ul {
            list-style: none;
            display: flex;
            gap: 6px;
            padding: 0;
            margin: 0;
        }

        .pagination li a,
        .pagination li span {
            display: block;
            padding: 9px 13px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            text-decoration: none;
            color: #334155;
            background: white;
        }

        .pagination li.active span {
            background: #2563eb;
            color: white;
            border-color: #2563eb;
        }

        .pagination li.disabled span {
            color: #94a3b8;
            background: #f8fafc;
        }

        .back-dashboard {
            display: inline-block;
            margin-top: 20px;
            color: #2563eb;
            text-decoration: none;
        }

        @media (max-width: 700px) {

            .navbar {
                padding: 16px 20px;
            }

            .container {
                width: 94%;
            }

            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            .search-box {
                flex-direction: column;
            }

        }

    </style>

</head>

<body>

<div class="navbar">
    📚 Perpustakaan Digital
</div>


<div class="container">


    <div class="header">

        <div>

            <h1>
                Daftar Buku
            </h1>

            <p>
                Kelola koleksi buku perpustakaan digital.
            </p>

        </div>


        <a
            href="<?= base_url('buku/tambah') ?>"
            class="button button-primary"
        >
            ➕ Tambah Buku
        </a>

    </div>


    <div class="card">


        <!-- SEARCH -->

        <form
            action="<?= base_url('buku') ?>"
            method="get"
            class="search-box"
        >

            <input
                type="text"
                name="keyword"
                value="<?= esc($keyword ?? '') ?>"
                placeholder="Cari judul, penulis, penerbit, atau kategori..."
            >

            <button
                type="submit"
                class="button button-search"
            >
                🔍 Cari
            </button>


            <?php if (!empty($keyword)): ?>

                <a
                    href="<?= base_url('buku') ?>"
                    class="button button-reset"
                >
                    Reset
                </a>

            <?php endif; ?>

        </form>


        <?php if (!empty($keyword)): ?>

            <p>
                Hasil pencarian untuk:
                <strong><?= esc($keyword) ?></strong>
            </p>

        <?php endif; ?>


        <!-- TABLE -->

        <?php if (empty($buku)): ?>

            <div class="empty">

                <h3>
                    📚 Buku tidak ditemukan
                </h3>

                <?php if (!empty($keyword)): ?>

                    <p>
                        Tidak ada buku yang sesuai dengan kata pencarian.
                    </p>

                <?php else: ?>

                    <p>
                        Belum ada data buku.
                    </p>

                <?php endif; ?>

            </div>

        <?php else: ?>


            <div class="table-wrapper">

                <table>

                    <thead>

                        <tr>

                            <th>No</th>

                            <th>Judul</th>

                            <th>Penulis</th>

                            <th>Penerbit</th>

                            <th>Tahun</th>

                            <th>Kategori</th>

                            <th>Deskripsi</th>

                            <th>Aksi</th>

                        </tr>

                    </thead>


                    <tbody>

                        <?php

                        $no = 1 + (($pager->getCurrentPage() - 1) * 5);

                        ?>


                        <?php foreach ($buku as $item): ?>

                            <tr>

                                <td>
                                    <?= $no++ ?>
                                </td>


                                <td>

                                    <strong>
                                        <?= esc($item['judul']) ?>
                                    </strong>

                                </td>


                                <td>
                                    <?= esc($item['penulis']) ?>
                                </td>


                                <td>
                                    <?= esc($item['penerbit']) ?>
                                </td>


                                <td>
                                    <?= esc($item['tahun_terbit']) ?>
                                </td>


                                <td>

                                    <span class="badge">
                                        <?= esc($item['kategori']) ?>
                                    </span>

                                </td>


                                <td>
                                    <?= esc($item['deskripsi']) ?>
                                </td>


                                <td>

                                    <div class="actions">

                                        <a
                                            href="<?= base_url('buku/edit/' . $item['id']) ?>"
                                            class="button button-edit"
                                        >
                                            Edit
                                        </a>


                                        <a
                                            href="<?= base_url('buku/hapus/' . $item['id']) ?>"
                                            class="button button-delete"
                                            onclick="return confirm('Yakin ingin menghapus buku ini?')"
                                        >
                                            Hapus
                                        </a>

                                    </div>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>


            <!-- PAGINATION -->

            <div class="pagination">

                <?= $pager->links() ?>

            </div>


        <?php endif; ?>


    </div>


    <a
        href="<?= base_url('dashboard') ?>"
        class="back-dashboard"
    >
        ← Kembali ke Dashboard
    </a>


</div>

</body>

</html>