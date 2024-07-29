<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="max-w-md mx-auto mt-10">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post"
            action="{{ route('student.update', $student->id) }}">
            @csrf
            @method('put')
            <h2 class="text-2xl font-bold mb-4">Edit Student</h2>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="student_name">
                    Student Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="student_name" value="{{ $student->student_name }}" name="name" type="text"
                    placeholder="Student Name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="student_email">
                    Student Email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="student_email" name="email" type="email" placeholder="Student Email"
                    value="{{ $student->student_email }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">
                    Gender
                </label>
                <div class="relative">
                    <select name="gender"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="gender">
                        <option value="male" {{ old('gender', $student->gender) == 'male' ? 'selected' : '' }}>Male
                        </option>

                        <option value="Female" {{ old('gender', $student->gender) == 'female' ? 'selected' : '' }}>
                            Female
                        </option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M14.348 6.348a1 1 0 10-1.4 1.424L10 10.828 7.052 7.776a1 1 0 00-1.4 1.424l4 4a1 1 0 001.4 0l4-4a1 1 0 000-1.424z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="age">
                    Age
                </label>
                <input name="age"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="age" type="number" placeholder="Age" value="{{ $student->age }}">
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</body>

</html>
