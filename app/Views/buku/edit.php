<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Buku - Perpustakaan Digital</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            color: #333;
        }

        .navbar {
            background: #2563eb;
            color: white;
            padding: 18px 40px;
            font-size: 22px;
            font-weight: bold;
        }

        .container {
            width: 90%;
            max-width: 800px;
            margin: 40px auto;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin-top: 0;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #666;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 11px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 15px;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #2563eb;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .buttons {
            margin-top: 25px;
            display: flex;
            gap: 10px;
        }

        .button {
            display: inline-block;
            padding: 11px 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            font-size: 15px;
        }

        .button-primary {
            background: #2563eb;
            color: white;
        }

        .button-secondary {
            background: #6b7280;
            color: white;
        }

        .button:hover {
            opacity: 0.9;
        }
    </style>
</head>

<body>

<div class="navbar">
    📚 Perpustakaan Digital
</div>

<div class="container">

    <div class="card">

        <h1>Edit Buku</h1>

        <p class="subtitle">
            Perbarui informasi buku yang dipilih.
        </p>

        <form action="<?= base_url('buku/update/' . $buku['id']) ?>" method="post">

            <div class="form-group">
                <label for="judul">Judul Buku</label>

                <input
                    type="text"
                    id="judul"
                    name="judul"
                    value="<?= esc($buku['judul']) ?>"
                    required
                >
            </div>

            <div class="form-group">
                <label for="penulis">Penulis</label>

                <input
                    type="text"
                    id="penulis"
                    name="penulis"
                    value="<?= esc($buku['penulis']) ?>"
                    required
                >
            </div>

            <div class="form-group">
                <label for="penerbit">Penerbit</label>

                <input
                    type="text"
                    id="penerbit"
                    name="penerbit"
                    value="<?= esc($buku['penerbit']) ?>"
                    required
                >
            </div>

            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>

                <input
                    type="number"
                    id="tahun_terbit"
                    name="tahun_terbit"
                    value="<?= esc($buku['tahun_terbit']) ?>"
                    min="1000"
                    max="2100"
                    required
                >
            </div>

            <div class="form-group">
                <label for="kategori">Kategori</label>

                <select
                    id="kategori"
                    name="kategori"
                    required
                >

                    <option value="">-- Pilih Kategori --</option>

                    <option value="Novel"
                        <?= $buku['kategori'] === 'Novel' ? 'selected' : '' ?>>
                        Novel
                    </option>

                    <option value="Pendidikan"
                        <?= $buku['kategori'] === 'Pendidikan' ? 'selected' : '' ?>>
                        Pendidikan
                    </option>

                    <option value="Teknologi"
                        <?= $buku['kategori'] === 'Teknologi' ? 'selected' : '' ?>>
                        Teknologi
                    </option>

                    <option value="Sejarah"
                        <?= $buku['kategori'] === 'Sejarah' ? 'selected' : '' ?>>
                        Sejarah
                    </option>

                    <option value="Komik"
                        <?= $buku['kategori'] === 'Komik' ? 'selected' : '' ?>>
                        Komik
                    </option>

                    <option value="Lainnya"
                        <?= $buku['kategori'] === 'Lainnya' ? 'selected' : '' ?>>
                        Lainnya
                    </option>

                </select>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>

                <textarea
                    id="deskripsi"
                    name="deskripsi"
                    required
                ><?= esc($buku['deskripsi']) ?></textarea>
            </div>

            <div class="buttons">

                <a
                    href="<?= base_url('buku') ?>"
                    class="button button-secondary"
                >
                    Kembali
                </a>

                <button
                    type="submit"
                    class="button button-primary"
                >
                    Update Buku
                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>