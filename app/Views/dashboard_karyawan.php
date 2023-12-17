<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SewSense | Pekerjaan</title>
</head>
<body>
<script src="https://cdn.tailwindcss.com"></script>
<div class="w-full">
    <nav class="bg-white shadow-lg fixed w-screen">
        <div class="md:flex items-center justify-between py-2 px-8 md:px-12">
            <div class="flex justify-between items-center">
               <div class="text-2xl font-bold text-gray-800 md:text-3xl">
                    <a href="<?= base_url('/')?>">SewSense/Karyawan</a>
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
                <a href="/" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Home</a>
                <a href="/dashboard" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Dashboard</a>
                <a href="<?=base_url('/logout')?>"class="text-gray-800 rounded bg-red-400 hover:bg-red-500 hover:text-red-100 hover:font-medium py-2 px-2 md:mx-2">Keluar</a>

            </div>
        </div>
    </nav>


<!-- component -->
<section class="container mx-auto p-6 font-mono lg:pt-[1/8] h-screen pt-20 pb-10 lg:pb-20">
  <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
    <div class="w-full overflow-x-auto">
      <table class="w-full">
        <thead>
          <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
            <th class="px-4 py-3">ID</th>
            <th class="px-4 py-3">Nama</th>
            <th class="px-4 py-3">Status</th>
          </tr>
        </thead>
        <tbody class="bg-white">
        <?php 
        $authorize = $auth = service('authorization');
        $no = 1;
        foreach ($penugasan as $penugasans){
        ?>
<div id="default-modal<?=$no?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    <?= $penugasans['nama_barang']?>
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
                  <img src="<?= ($penugasans['foto']) ?>"  alt="">
                </p>
                </div>         
        </div>
    </div>
</div>
        
          <tr class="text-gray-700">
            <td class="px-4 py-3 text-ms font-semibold border"><?=$no?></td>
            <td class="px-4 py-3 border">
              <div class="flex items-center text-sm">
                <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                  <button data-modal-target="default-modal<?=$no?>" data-modal-toggle="default-modal<?=$no?>"><img class ="rounded-full"src="<?= $penugasans['foto']?>" alt=""></button>
                  </div>
              <div>
              <form action="<?= base_url('/work') ?>" method="post" enctype= "multipart/form-data">
                  <p class="font-semibold text-black"><?= $penugasans['nama_barang']?></p>
                  <input type="hidden" name ="nama_barang" value ="<?= $penugasans['nama_barang']?>"></input>
                  <input type="hidden" name ="id_order" value ="<?= $penugasans['id_order']?>"></input>
                  <input type="hidden" name ="harga" value ="<?= $penugasans['harga']?>"></input>
                  <input type="hidden" name ="foto" value ="<?= $penugasans['foto']?>"></input>
                </div>
              </div>
            </td>
            <td class="px-4 py-3 text-xs border">
            <div class="relative inline-block text-left">
            <div>
              <button data-target="dropdown<?=$no?>" type="button" class="dropdown-button inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                
              <span class="px-2 py-1 font-semibold leading-tight 
              <?php if($penugasans['status'] == '0'){
                  echo 'text-red-700 bg-red-100';};
                  if($penugasans['status'] == '1'){
                  echo 'text-yellow-700 bg-yellow-100';};
                  if($penugasans['status'] == '2'){
                  echo 'text-green-700 bg-green-100';};
                  ?>
               rounded-sm"> 
                  <?php if($penugasans['status'] == '0'){
                  echo 'Belum Dikerjakan';};
                  if($penugasans['status'] == '1'){
                  echo 'Sedang Dikerjakan';};
                  if($penugasans['status'] == '2'){
                  echo 'Selesai';}; 
                  ?>
                  </span>
                <svg class="-mr-1 ml-2 h-4 w-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>
            </div>
          
            <div id="dropdown<?=$no?>" class="hidden text-gray-900 z-50 dropdown-menu">
              <ul class="px-6 py-3 rounded-md shadow-md bg-white">
                <li>
                  <button type="submit" name ='submit'>
                    <a class="block px-4 py-2 hover:bg-gray-100">
                    <input type = hidden id='status' name='status' value='1'>
                      Dikerjakan
                      
                    </a>
                  </button>
                </li>

                <li>
                  <button type="submit" name ='submit'>
                    <a class="block px-4 py-2 hover:bg-gray-100">
                    <input type = hidden id='status' name='status' value='2'>
                      Selesai
                      
                    </a>
                  </button>
                </li>
                
              </ul>
              </form>
            </div>
          </div>
            </td>
          </tr>
        </form>
        <?php $no++ ?> 
        <?php }; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>
<script>
    document.querySelectorAll('.dropdown-button').forEach(function(button) {
        button.addEventListener('click', function () {
            const targetId = button.getAttribute('data-target');
            const dropdown = document.getElementById(targetId);

            document.querySelectorAll('.dropdown-menu').forEach(function(d) {
                if (d.id !== targetId) {
                    d.classList.add('hidden');
                }
            });

            dropdown.classList.toggle('hidden');


            dropdown.querySelectorAll('button[type="submit"]').forEach(function(submitButton) {
                submitButton.addEventListener('click', function() {
                    const hiddenInput = submitButton.querySelector('input[type="hidden"]');
                    if (hiddenInput) {

                        hiddenInput.name = hiddenInput.name + '_update';
                    }

                });
            });
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>
