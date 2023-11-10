<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Home</a>
                <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Dashboard</a>
                <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Transaksi</a>
            </div>
        </div>
    </nav>
<section class="container mx-auto p-6 font-mono">
  <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
    <div class="w-full overflow-x-auto">
      <table class="w-full">
        <thead>
          <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
            <th class="px-4 py-3">ID</th>
            <th class="px-4 py-3">Nama</th>
            <th class="px-4 py-3">Status</th>
            <th class="px-4 py-3">Terakhir transaksi</th>
          </tr>
        </thead>
        <tbody class="bg-white">
          <tr class="text-gray-700">
          <td class="px-4 py-3 border">1</td>
            <td class="px-4 py-3 border">
              <div class="flex items-center text-sm">
                <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                  <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                  <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                </div>
                <div>
                  <p class="font-semibold text-black">Yuna</p>
                  <p class="text-xs text-gray-600">Kepala Bagian Administrasi</p>
                </div>
              </div>
            </td>
            <td class="px-4 py-3 text-xs border">
              <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Aktif </span>
            </td>
            <td class="px-4 py-3 text-sm border">10/11/2023 14:00pm</td>
          </tr>
          <tr class="text-gray-700">
          <td class="px-4 py-3 border">2</td>
            <td class="px-4 py-3 border">
              <div class="flex items-center text-sm">
                <div class="relative w-8 h-8 mr-3 rounded-full">
                  <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                  <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                </div>
                <div>
                  <p class="font-semibold text-black">Talia</p>
                  <p class="text-xs text-gray-600">Kepala bagian Pemasaran</p>
                </div>
              </div>
            </td>
            <td class="px-4 py-3 text-xs border">
              <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-gray-100 rounded-sm"> Aktif 3 menit yang lalu </span>
            </td>
            <td class="px-4 py-3 text-sm border">10/11/2023 09:00 am</td>
          </tr>
          <tr class="text-gray-700">
          <td class="px-4 py-3 border">3</td>
            <td class="px-4 py-3 border">
              <div class="flex items-center text-sm">
                <div class="relative w-8 h-8 mr-3 rounded-full">
                  <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                  <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                </div>
                <div>
                  <p class="font-semibold">Satria</p>
                  <p class="text-xs text-gray-600">Kepala Bagian Pengiriman</p>
                </div>
              </div>
            </td>
            <td class="px-4 py-3 text-xs border">
              <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-sm"> Aktif 5 menit yang lalu </span>
            </td>
            <td class="px-4 py-3 text-sm border">10/11/2023 09:15am</td>
          </tr>
          <tr class="text-gray-700">
          <td class="px-4 py-3 border">4</td>
            <td class="px-4 py-3 border">
              <div class="flex items-center text-sm">
                <div class="relative w-8 h-8 mr-3 rounded-full">
                  <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                  <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                </div>
                <div>
                  <p class="font-semibold">Hanif</p>
                  <p class="text-xs text-gray-600">Kepala Bagian Produksi</p>
                </div>
              </div>
            </td>
            <td class="px-4 py-3 border text-xs">
              <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Aktif </span>
            </td>
            <td class="px-4 py-3 border text-sm">10/11/2023 10:10am</td>
          </tr>
          
        </tbody>
      </table>
    </div>
  </div>
</section>
</body>
</html>
