<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SewSense | Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="w-full min-h-screen bg-gray-50 flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style='background-size:cover;background-image:url(https://images.unsplash.com/photo-1517840545241-b491010a8af4?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);'>
  <div class="w-full sm:max-w-md p-5 mx-auto">
    <h2 class="mb-12 text-center text-5xl font-extrabold text-gray-800">SewSense</h2>
    <?= view('Myth\Auth\Views\_message_block') ?>
    <form action="<?= url_to('login') ?>" method="post">
      <?= csrf_field() ?>

      <div class="mb-4">
        <label class="block mb-1" for="email">Email-Address</label>
        <input id="email" type="email" name="login" class="py-2 px-3 border border-gray-300 focus:border-indigo-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" />
        <div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
      </div>
      
      <div class="mb-4">
        <label class="block mb-1" for="password">Password</label>
        <input id="password" type="password" name="password" class="py-2 px-3 border border-gray-300 focus:border-indigo-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" />
        <div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
      </div>
      
      <div class="mt-6 flex items-center justify-between">
      </div>
      <div class="mt-6">
        <button type="submit" class="w-full inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold capitalize text-white hover:bg-indigo-700 active:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 disabled:opacity-25 transition">Sign In</button>
      </div>
      <div class="mt-6 text-center">
        <a href="<?= url_to('register')?>" class="underline">Sign up for an account</a>
      </div>
    </form>
  </div>
</div>
</body>
</html>