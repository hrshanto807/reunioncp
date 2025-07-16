<!DOCTYPE html>
<html lang="en" x-data="{ showAddModal: false }" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <title>Add Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Summernote CSS & JS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
   

    
    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/summernote-lite.min.js') }}"></script>
    <script src="{{ asset('assets/js/alpine.js') }}" defer></script>
</head>

<body class="bg-gradient-to-br from-white to-gray-50 py-16">

    <div class="max-w-7xl mx-auto px-6" x-data="{ showAddModal: false }">
        <div class="bg-white rounded-2xl p-6 shadow-lg">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Add Blog</h2>
                <button @click="showAddModal = true"
                    class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Add Blog</button>
            </div>

            <!-- Sample Table -->
            <div class="w-full overflow-x-auto block">
                <table class="w-full text-sm text-left border border-gray-300">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="py-3 px-4 border">Sl</th>
                            <th class="py-3 px-4 border">Title</th>
                            <th class="py-3 px-4 border">Photo</th>
                            <th class="py-3 px-4 border">Category</th>
                            <th class="py-3 px-4 border">Created Date</th>
                            <th class="py-3 px-4 border">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50 border-b">
                            <td class="px-4 py-2 border">1</td>
                            <td class="px-4 py-2 border">Sample Blog</td>
                            <td class="px-4 py-2 border"><span class="text-gray-400 italic">No Image</span></td>
                            <td class="px-4 py-2 border">Uncategorized</td>
                            <td class="px-4 py-2 border">16 Jul 2025</td>
                            <td class="px-4 py-2 border space-x-2">
                                <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">Edit</a>
                                <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Add Modal -->
        <div x-show="showAddModal" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50" x-transition
            style="display: none;">
            <div class="bg-white p-6 rounded-lg w-full max-w-4xl h-[90vh] overflow-y-auto"
                @click.outside="showAddModal = false">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold">Add Blog</h3>
                    <button @click="showAddModal = false"
                        class="text-gray-600 hover:text-black text-2xl font-bold">×</button>
                </div>
                <form method="POST" action="#" enctype="multipart/form-data">
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label class="block mb-1 text-sm font-semibold">Name <span
                                    class="text-red-600">*</span></label>
                            <input type="text" name="name" class="w-full border rounded p-3 bg-gray-100" required
                                placeholder="Name">
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-semibold">Short Description</label>
                            <input type="text" name="short_desc" class="w-full border rounded p-3 bg-gray-100"
                                placeholder="Short Description">
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-semibold">Content <span
                                    class="text-red-600">*</span></label>
                            <textarea id="summernote" name="content">Blog Content</textarea>
                        </div>
                    </div>
                    <div class="text-right mt-4">
                        <button type="submit"
                            class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Summernote Init -->
    <script>
        $(document).ready(function () {
            $('#summernote').summernote({
                placeholder: 'Blog Content',
                tabsize: 2,
                height: 250
            });
        });
    </script>
</body>

</html>