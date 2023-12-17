<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>
    <div class="w-full">
        <?php require_once('_nav.php'); ?>
        <!-- component -->
        <section class="container mx-auto p-6 font-mono">
            <a href="/dashboard_karyawan/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4">
                Buat Karyawan Baru
            </a>
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg mt-4">
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                <th class="px-4 py-3">E-Mail Pekerja</th>
                                <th class="px-4 py-3">Nama Barang</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <?php foreach ($list_pekerjaan as $pekerjaan) : ?>
                                <tr class="text-gray-700">
                                    <td class="px-4 py-3 text-ms font-semibold border"><?= $pekerjaan['email'] ?></td>
                                    <td class="px-4 py-3 border">
                                        <div class="flex items-center text-sm">
                                            <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-black"><?= $pekerjaan['nama_barang'] ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-xs border">
                                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"><?= $pekerjaan['status'] ?></span>
                                    </td>
                                    <td class="px-4 py-3 text-xs border">
                                        <a class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4" href="/dashboard_karyawan/edit/<?= $pekerjaan['id_pekerjaan']; ?>">Edit</a>
                                        <button data-id="<?= $pekerjaan['id_pekerjaan'] ?>" class="btn-delete bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('.btn-delete').on('click', function() {
                var id = $(this).data('id');

                // Tampilkan konfirmasi SweetAlert
                Swal.fire({
                    title: 'Konfirmasi',
                    text: 'Apakah Anda yakin ingin menghapus data?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Lanjutkan dengan penghapusan setelah pengguna menekan "OK"
                        $.ajax({
                            url: '/dashboard_karyawan/delete/' + id,
                            type: 'DELETE',
                            success: function(response) {
                                // Tanggapan sukses, lakukan sesuatu jika diperlukan
                                console.log(response);

                                // Cek status code 200
                                if (response.status === 200) {
                                    // Tampilkan SweetAlert untuk konfirmasi penghapusan
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Berhasil',
                                        text: 'Data berhasil dihapus',
                                        showConfirmButton: false,
                                        timer: 1500
                                    });

                                    // Reload halaman setelah 1,5 detik
                                    setTimeout(function() {
                                        location.reload();
                                    }, 1500);
                                }
                            },
                            error: function(error) {
                                // Tanggapan kesalahan, lakukan sesuatu jika diperlukan
                                console.error(error);
                            }
                        });
                    }
                });
            });
        });
    </script>

</body>

</html>