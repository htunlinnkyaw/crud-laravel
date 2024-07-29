<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Table</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="max-w-xl mx-auto   mt-10">
        <a href="{{ route('student.create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create</a>
        <table class=" bg-white mt-5">
            <thead>
                <tr>
                    <th
                        class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-sm leading-4 text-gray-600 tracking-wider">
                        ID</th>
                    <th
                        class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-sm leading-4 text-gray-600 tracking-wider">
                        Name</th>
                    <th
                        class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-sm leading-4 text-gray-600 tracking-wider">
                        Email</th>
                    <th
                        class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-sm leading-4 text-gray-600 tracking-wider">
                        Gender</th>
                    <th
                        class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-sm leading-4 text-gray-600 tracking-wider">
                        Age</th>
                    <th
                        class="py-2 px-4 border-b border-gray-200 bg-gray-100 text-left text-sm leading-4 text-gray-600 tracking-wider">
                        Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $student->id }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $student->student_name }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $student->student_email }}</td>
                        <td class="py-2 px-4 border-b border-gray-200 capitalize">{{ $student->gender }}</td>
                        <td class="py-2 px-4 border-b border-gray-200 ">{{ $student->age }}</td>
                        <td class="py-2 px-4 border-b border-gray-200 flex gap-3">
                            <a href="{{ route('student.edit', $student->id) }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded focus:outline-none focus:shadow-outline">
                                Edit
                            </a>
                            <form action="{{ route('student.destroy', $student->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded focus:outline-none focus:shadow-outline"
                                    type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <!-- Repeat the above <tr> block for more rows -->
            </tbody>
        </table>
    </div>
</body>

</html>
