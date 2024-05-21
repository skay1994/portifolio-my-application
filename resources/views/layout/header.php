<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Welcome to My Application' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/assets/js/script.js"></script>
    <script>
        tailwind.config = { darkMode: 'selector' }
    </script>
</head>
<body class="bg-gradient-to-r from-gray-600 to-gray-900 dark:bg-zinc-900">
<div id="lightbox" class="fixed top-0 left-0 w-full h-full flex justify-center items-center bg-black bg-opacity-75 z-50 hidden opacity-0 transition-opacity duration-500">
<!--    <button id="prevBtn" class="absolute left-10 top-1/2 hover:transition-colors bg-gray-800 hover:bg-gray-700 text-white px-4 py-2 rounded-md z-10">Prev</button>-->
<!---->
<!--    <button id="nextBtn" class="absolute right-10 top-1/2 bg-gray-800 text-white px-4 py-2 rounded-md z-10">Prev</button>-->

    <div id="lightbox-content" class="relative">
        <img id="lightbox-image" src="" alt="Image" class="max-w-full max-h-full">
        <button id="close-btn" class="absolute top-0 right-0 m-4 text-white">&times;</button>
    </div>
</div>

