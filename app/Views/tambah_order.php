<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- component -->
    <div class="flex items-center justify-center p-12">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-full max-w-[550px] bg-white">
            <form
                id="myForm"
                class="py-6 px-9"
                action="<?= base_url('/order/store') ?>" 
                method="post" 
                enctype="multipart/form-data"
            >
                <div class="mb-5">
                    <label
                        for="nama_barang"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                        Berikan Nama Barang :
                    </label>
                    <input
                        type="text"
                        name="nama_barang"
                        id="nama_barang"
                        placeholder="Nama Barang"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                    />
                    <p id="nama_barang_error" class="text-red-500 hidden">Nama Barang tidak boleh kosong</p>
                </div>

                <div class="mb-6 pt-4">
                    <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                        Upload Desain
                    </label>

                    <div class="mb-8">
                        <input type="file" name="foto" id="foto" class="sr-only" />
                        <label
                            for="foto"
                            class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center"
                        >
                            <div>
                                <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                    Drop files here
                                </span>
                                <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                    Or
                                </span>
                                <span
                                    class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]"
                                >
                                    Browse
                                </span>
                            </div>
                        </label>
                        <p id="foto_error" class="text-red-500 hidden">File Upload tidak boleh kosong</p>
                    </div>

                </div>

                <div class="flex justify-center items-center space-x-4">
                    <button
                        type="button"
                        onclick="validateForm()"
                        class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
                    >
                        Send File
                    </button>

                    <a href="<?= base_url('/')?>" class="lg:pt-[1/2] hover:shadow-form w-full rounded-md bg-red-400 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function validateForm() {
            var namaBarang = document.getElementById('nama_barang').value;
            var foto = document.getElementById('foto').value;

            if (namaBarang.trim() === '') {
                document.getElementById('nama_barang_error').style.display = 'block';
                return;
            } else {
                document.getElementById('nama_barang_error').style.display = 'none';
            }

            if (foto.trim() === '') {
                document.getElementById('foto_error').style.display = 'block';
                return;
            } else {
                document.getElementById('foto_error').style.display = 'none';
            }

            // If all validations pass, submit the form
            document.getElementById('myForm').submit();
        }
    </script>
</body>
</html>
