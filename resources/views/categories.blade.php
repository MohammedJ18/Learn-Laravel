<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <title>Document</title>
</head>

<body class="text-right">
    
    <div class=" px-40 py-8">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label  class="block mb-2 text-sm font-medium text-gray-900 text-right">اسم الفئة</label>
                <input name='name' type='text' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-right" placeholder="الملابس, اكسسوارات, ..." required>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 ">اضافة فئة</button>
        </form>
        
<div class="overflow-x-auto relative">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr class="flex w-full">
                <th  class="basis-3/12 py-3 px-6">
                    #
                </th>
                <th  class="basis-9/12 py-3 px-6">
                    اسم الفئة
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $loop->iteration }}
                </th>
                <td class="py-4 px-6">
                {{ $category->name }}
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
</div>

        
    <h1 class="text-3xl font-bold text-sky-500 text-right"></h1>
    
    </div>


</body>

</html>