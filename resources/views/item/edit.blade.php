<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <main class="flex h-screen justify-center items-center">


        <div
            class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <form class="space-y-6" action="{{ route('item.update', $item->id) }}" method="post">
                @method('put')
                @csrf
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Name</label>
                    <input type="text" value="{{ $item->name }}" name="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required />
                </div>
                <div>
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Price</label>
                    <input type="number" value="{{ $item->price }}" name="price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required />
                </div>
                <div>
                    <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Stock</label>
                    <input type="number" value="{{ $item->stock }}" name="stock"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required />
                </div>
                <div>

                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Description</label>
                    <textarea name="description" id="description" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Write your thoughts here...">{{ $item->description }}</textarea>


                </div>


                <button type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Update Item</button>

            </form>
        </div>

    </main>
</body>

</html>
