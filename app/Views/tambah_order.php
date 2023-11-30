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
      class="py-6 px-9"
      action="<?= base_url('/order/store') ?>" method="post" enctype= "multipart/form-data"
      method="POST"
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
        </div>

      </div>

      <div>
        <button
        type ="submit"
          class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
        >
          Send File
        </button>
      </div>
    </form>
  </div>
</div>
</body>
</html>