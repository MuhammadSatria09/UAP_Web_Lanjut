<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SewSense | Pesanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<nav class="bg-white shadow-lg">
        <div class="md:flex items-center justify-between py-2 px-8 md:px-12">
            <div class="flex justify-between items-center">
               <div class="text-2xl font-bold text-gray-800 md:text-3xl">
                    <a href="<?=base_url('/')?>">SewSense</a>
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
                <a href="<?=base_url('/')?>" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Home</a>
                <a href="<?=base_url('/catalogue')?>" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Katalog</a>
                <a href="<?=base_url('/dashboard')?>" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Pesanan</a>
                <a href="<?=base_url('/logout')?>"class="text-gray-800 rounded bg-red-400 hover:bg-red-500 hover:text-red-100 hover:font-medium py-2 px-2 md:mx-2">Keluar</a>
              </div>
        </div>
    </nav>
<section class="container mx-auto p-6 font-mono">
  <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
    <div class="w-full overflow-x-auto">
      <table class="w-full">
        <thead>
          <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
            <th class="px-4 py-3">No</th>
            <th class="px-4 py-3">Nama Barang</th>
            <th class="px-4 py-3">Status</th>
          </tr>
        </thead>
        <tbody class="bg-white">
          
        <?php $no = 1;
        foreach ($orders as $order){
        ?>
<div id="default-modal<?=$no?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    <?= $order['nama_barang']?>
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal<?=$no?>">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                  <img src="<?= ($order['foto']) ?>"  alt="">
                </p>
                </div>         
        </div>
    </div>
</div>

          <tr class="text-gray-700">
            <td class="px-4 py-3 text-ms font-semibold border"><?= $no ?></td>
            <td class="px-4 py-3 text-sm border">
            <div class="flex items-center text-sm">
                <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                               
                  <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                  <button data-modal-target="default-modal<?=$no?>" data-modal-toggle="default-modal<?=$no?>"><img class ="rounded-full"src="<?= $order['foto']?>" alt=""></button> 
                  </div>
                </div>  
            <?= $order['nama_barang'] ?></td>
            <td class="px-4 py-3 text-xs border">
              <span class="px-2 py-1 font-semibold leading-tight 
              <?php if($order['status'] == '0'){
                  echo 'text-red-700 bg-red-100';};
                  if($order['status'] == '1'){
                  echo 'text-yellow-700 bg-yellow-100';};
                  if($order['status'] == '2'){
                  echo 'text-green-700 bg-green-100';};
                  ?>
               rounded-sm" style="float:left">
               
               
                  <?php if($order['status'] == '0'){
                  echo 'Belum Dikerjakan';};
                  if($order['status'] == '1'){
                  echo 'Sedang Dikerjakan';};
                  if($order['status'] == '2'){
                  echo 'Selesai';}; 
                  ?>
                  </span>
                    <?php if($order['status'] > 0){
                  }else{
                  ?>
                  <form action="<?= base_url('/deleteOrder')?>" method="post">
                  <input type="hidden" name="id_order" value="<?=$order['id_order']?>">
                  <button class="text-red-800 rounded bg-red-100 hover:bg-red-500 hover:text-red-100 hover:font-medium py-2 px-2 md:mx-2" style="float:right">
                    Batalkan
                  </button>
                  </form>
                  <?php }; ?>
                    
                  
            </td>
          </tr>
          <?php $no++ ?>
          <?php }; ?>
        </tbody>
      </table>
    </div>
  </div>
  
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>
</html>