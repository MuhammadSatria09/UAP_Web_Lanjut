<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- stylesheet -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"
    />
    
     <!-- Font Awesome Link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
      integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
      crossorigin="anonymous"
    />
</head>
<!-- component -->
<!-- Create By Joker Banny -->
<body class="bg-white">
  <!-- Header Navbar -->
  <nav class="bg-white shadow-lg fixed w-screen">
        <div class="md:flex items-center justify-between py-2 px-8 md:px-12">
            <div class="flex justify-between items-center">
               <div class="text-2xl font-bold text-gray-800 md:text-3xl">
                    <a href="<?= base_url('/')?>">SewSense</a>
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
                <a href="<?= base_url('/')?>" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Home</a>
                <a href="<?= base_url('/catalogue')?>" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Katalog</a>
                <a href="<?= base_url('/dashboard')?>" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Pesanan</a>
                <a href="<?= base_url('/logout')?>" class="text-gray-800 rounded bg-red-400 hover:bg-red-500 hover:text-red-100 hover:font-medium py-2 px-2 md:mx-2">Keluar</a>
               </div>
        </div>
    </nav>

  <!-- component -->
<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />

<!-- ====== Cards Section Start -->
<section class="pt-20 lg:pt-[1/8] pb-10 lg:pb-20 bg-[#F3F4F6] object-fit">
   <div class="container">
      <div class="flex flex-wrap -mx-4">
        <?php 
        foreach($katalogs as $katalog){
        ?>
         <div class="w-full md:w-1/2 xl:w-1/4 px-4 h-max">
            <div class="bg-white rounded-lg overflow-hidden mb-10 h-1/8 object-fill" >
            <img
                  src="<?=$katalog['foto']?>"
                  alt="image"
                  class="object-fill h-64 w-screen"
                  />
               <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                  <h3>
                     <a class="font-semibold text-dark text-xl sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px] mb-4 block">
                     <?= $katalog['nama_produk'] ?>
                     </a>
                     <a>Rp.<?= $katalog['harga']?>
                  </a>
                  </h3>
                  <form action="<?= base_url('/order/store') ?>" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name ="nama_barang" value ="<?= $katalog['nama_produk']?>"></input>
                  <input type="hidden" name ="harga" value ="<?= $katalog['harga']?>"></input>
                  <input type="hidden" name ="foto" value ="<?= $katalog['foto']?>"></input>
                  <button
                     class=" inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-primary hover:bg-primary hover:text-white transition">
                  Order This!
                  </button>
                  </form>
               </div>
            </div>
         </div>
         <?php }; ?>
      </div>
   </div>
</section>
<!-- ====== Cards Section End -->
  
</body>
</html>