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
                            <a href="index.html" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Главная</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-7 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Главная</h1>
        </div>

        <div class="sm:ml-6 ml-4 flex">
            <div class="flex space-x-4">
                <a href="create" class="text-gray-300 bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Создать</a>
            </div>
        </div>

    </header>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <!--                                заголовки таблицы-->
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Delete</span>
                                    </th>
                                    <!--                                -->
                                </tr>
                                </thead>
                              @foreach($products as $product)
                                <tbody class="bg-white divide-y divide-gray-200">
                                <!--                                данные таблицы-->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <a href="show.html" class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full"
                                                src="{{$product->image}}"
                                                alt="{{$product->name}}"
                                                >
                                            </a>
                                            <a href="show.html" class="ml-4">
                                                <div class="text-sm font-medium hover:text-indigo-400 text-gray-900">
                                                    {{$product->name}}
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    jane.cooper@example.com
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                            {{$product->description}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            Optimization
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> Active </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="create.html" class="text-indigo-600 hover:text-indigo-900">
                                            Edit
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-red-600 hover:text-red-900">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <!-- More item... -->
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>