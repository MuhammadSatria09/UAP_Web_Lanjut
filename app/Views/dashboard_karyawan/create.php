<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Karyawan</title>
    <!-- Tambahkan link stylesheet Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">
    <div class="w-full">
        <?php require_once('_nav.php'); ?>
        <section class="container mx-auto p-6 font-mono">
            <a href="/dashboard_karyawan" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 inline-block mb-4">
                Dashboard Karyawan
            </a>
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg mt-4 bg-white p-6">
                <h1 class="text-2xl font-bold mb-4">Buat Pekerjaan</h1>
                <?= form_open('/dashboard_karyawan/store', ['class' => 'mb-4']); ?>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="id_order">ID Order:</label>
                    <select class="js-example-basic-single w-full" name="id_order">
                        <?php foreach ($list_order as $order) { ?>
                            <option value="<?= $order['id_order'] ?>"><?= $order['nama_barang'] ?> : Rp. <?= $order['harga'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="status">Status:</label>
                    <select class="js-example-basic-single w-full" name="status">
                        <?php foreach ($statusOptions as $value => $label) { ?>
                            <option value="<?= $value ?>">
                                <?= $label ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Create</button>
                <?= form_close(); ?>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
</body>

</html>