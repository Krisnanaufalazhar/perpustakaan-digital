<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku - Perpustakaan Digital</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            color: #333;
            margin: 0;
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
            box-shadow: 0 3px 12px rgba(0,0,0,0.08);
        }

        h1 {
            margin-top: 0;
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
    </style>
</head>

<body>

<div class="navbar">
    📚 Perpustakaan Digital
</div>

<div class="container">

    <div class="card">

        <h1>Tambah Buku</h1>
        <p>Masukkan informasi buku baru.</p>

        <form action="<?= base_url('buku/simpan') ?>" method="post">

            <div class="form-group">
                <label for="judul">Judul Buku</label>
                <input type="text" id="judul" name="judul" required>
            </div>

            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" id="penulis" name="penulis" required>
            </div>

            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" id="penerbit" name="penerbit" required>
            </div>

            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input
                    type="number"
                    id="tahun_terbit"
                    name="tahun_terbit"
                    min="1000"
                    max="2100"
                    required
                >
            </div>

            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select id="kategori" name="kategori" required>
                    <option value="">-- Pilih Kategori --</option>
                    <option value="Novel">Novel</option>
                    <option value="Pendidikan">Pendidikan</option>
                    <option value="Teknologi">Teknologi</option>
                    <option value="Sejarah">Sejarah</option>
                    <option value="Komik">Komik</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea
                    id="deskripsi"
                    name="deskripsi"
                    required
                ></textarea>
            </div>

            <div class="buttons">

                <a href="<?= base_url('buku') ?>"
                   class="button button-secondary">
                    Kembali
                </a>

                <button type="submit"
                        class="button button-primary">
                    Simpan Buku
                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>