<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: gray;
        }
        .form-container {
            max-width: 500px;
            width: 100%;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .section {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e0e0e0;
        }
        .section:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="form-container mt-5">
        <h1 class="text-center">Checkout Sertifikasi</h1>
        <form method="POST" action="/checkout">
            @csrf

            <!-- Bagian 1: Informasi Produk dan Voucher -->
            <div class="section">
                <h5>Sertifikasi Metodologi KKNI Level 3</h5>
                <p>Harga: <strong>Rp 2,000,000</strong></p>

                <div class="mb-3">
                    <label for="voucher" class="form-label">Masukkan Voucher Diskon</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="voucher" name="voucher" placeholder="Kode voucher">
                        <button class="btn btn-success" type="button">Pakai</button>
                    </div>
                    <div class="mb-3">
                    <label for="name" class="form-label">Pilih Pelatihan</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" required>
                </div>
                </div>
            </div>

            <!-- Bagian 2: Informasi Pengguna -->
            <div class="section">
                <h4>Informasi Pengguna</h4>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Buat Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <label for="whatsapp" class="form-label">Nomor WhatsApp</label>
                    <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Nomor WhatsApp" required>
                </div>
            </div>

            <!-- Bagian 3: Metode dan Ringkasan Pembayaran -->
            <div class="section">
                <h4>Metode Pembayaran</h4>
                <div class="mb-3">
                    <select class="form-select" id="payment_method" name="payment_method" required>
                        <option selected disabled>Pilih Metode Pembayaran</option>
                        <option value="bank_transfer">Transfer Bank</option>
                        <option value="credit_card">Kartu Kredit</option>
                        <option value="ewallet">E-Wallet</option>
                    </select>
                </div>

                <h4>Ringkasan Pembayaran</h4>
                <div class="mb-3">
                    <p>Total Harga: <strong>Rp 2,000,000</strong></p>
                    <button type="submit" class="btn btn-primary w-100">Buat Pesanan</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
