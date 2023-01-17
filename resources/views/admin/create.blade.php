<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
<div class="min-h-full">

    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="block">
                        <div class="flex items-baseline space-x-4">
                            <a href="index.blade.php" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Главная</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Редактирование продукта</h1>
        </div>
    </header>

    <form class="space-y-8 max-w-4xl mx-auto p-4"
          action="/store"
          enctype="multipart/form-data"
          method="POST"
    >
        <div class="space-y-8 sm:space-y-5">
            <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                    <label for="username" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Название продукта</label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="w-full flex rounded-md shadow-sm">
                            <input type="text" name="name" id="name" autocomplete="name" class="flex-1 block w-full py-2 focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-md sm:text-sm border-gray-300">
                        </div>
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="about" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Описание</label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <textarea id="about" name="description" rows="3" class="w-full shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md"></textarea>
                        <p class="mt-2 text-sm text-gray-500">Напишите описание продукта</p>
                    </div>
                </div>


                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="cover-photo" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Изображение продукта </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="w-full flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                        <span>Загрузите изображение</span>
                                        <input id="image" name="image" type="file" class="sr-only py-2">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="price" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Цена</label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input type="number" name="price" id="price" class="w-full py-2 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="category" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Категории</label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <select id="category" name="category" autocomplete="category-name" class="w-full block focus:ring-indigo-500 py-2 focus:border-indigo-500 w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                           @foreach($categories as $category)
                                <option>{{$category->name}}</option>
                           @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Отменить
                </button>
                <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Сохранить
                </button>
            </div>
        </div>
    </form>

    @csrf


</div>
</body>
</html>
