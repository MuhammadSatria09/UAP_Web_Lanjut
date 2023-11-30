<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Konveksi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<nav class="bg-white shadow-lg">
    <div class="md:flex items-center justify-between py-2 px-8 md:px-12">
        <div class="flex justify-between items-center">
            <div class="text-2xl font-bold text-gray-800 md:text-3xl">
                <a href="#">SweSense/Admin</a>
            </div>
            <div class="md:hidden">
                <button type="button" class="block text-gray-800 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path class="hidden" d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z"/>
                        <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="flex flex-col md:flex-row hidden md:block -mx-2">
                <a href="/admin" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Home</a>
                <a href="/dashboard_admin" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Dashboard</a>
                <a href="/transaksi" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Transaksi</a>
        </div>
    </div>
</nav>

<section class="container mx-auto p-6 font-mono">
    <div class="text-2xl font-bold text-gray-800 mb-4">List Transaksi</div>
    <!-- <button class="bg-green-500 text-white px-4 py-2 rounded">Tambah Data</button> -->
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="px-4 py-3">No.</th>
                        <th class="px-4 py-3">Nama Pelanggan</th>
                        <th class="px-4 py-3">Karyawan</th>
                        <th class="px-4 py-3">Barang Pesanan</th>
                        <th class="px-4 py-3">Jumlah</th>
                        <th class="px-4 py-3">Total Harga</th>
                        <th class="px-4 py-3">Tanggal Transaksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    
                    <?php 
                    $no = 1;
                    foreach($transaksi as $transaksi){

                    ?>
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 border"><?= $no++?></td>
                        <td class="px-4 py-3 border"><?= $transaksi['nama_pelanggan']?></td>
                        <td class="px-4 py-3 border"><?= $transaksi['nama_karyawan']?></td>
                        <td class="px-4 py-3 border"><?= $transaksi['nama_produk']?></td>
                        <td class="px-4 py-3 border"><?= $transaksi['jumlah']?></td>
                        <td class="px-4 py-3 border">Rp <?= $transaksi['total_harga']?></td>
                        <td class="px-4 py-3 border"><?= $transaksi['created_at']?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

</body>
</html>
