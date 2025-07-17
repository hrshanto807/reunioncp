@extends('layouts.apps')

@section('content')
<section class="py-16 bg-gradient-to-br from-white to-gray-50" x-data="{ showAddModal: false, images: [] }">
  <div class="max-w-7xl mx-auto px-6">
    <div class="bg-white rounded-2xl p-6 shadow-lg">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Sponsor List</h2>
        <button @click="showAddModal = true" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded flex items-center gap-2">
          Add Sponsors
        </button>
      </div>

      @if(session('success'))
      <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" class="bg-green-100 text-green-800 p-4 rounded mb-4">
        {{ session('success') }}
      </div>
      @endif

      <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300">
          <thead class="bg-gray-100">
            <tr>
              <th class="py-3 px-4 border">SL</th>
              <th class="py-3 px-4 border">Image</th>
              <th class="py-3 px-4 border">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($sponsors as $index => $sponsor)
            <tr class="hover:bg-gray-50">
              <td class="py-3 px-4 border text-center">{{ $index + 1 }}</td>
              <td class="py-3 px-4 border text-center">
                <img src="{{ asset('storage/' . $sponsor->image) }}" class="h-16 mx-auto rounded-lg object-cover">
              </td>
              <td class="py-3 px-4 border text-center space-x-2">
                <!-- Edit -->
                <button @click="document.getElementById('editModal-{{ $sponsor->id }}').classList.remove('hidden')" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">
                  Edit
                </button>

                <!-- Delete -->
                <form action="{{ route('sponsors.destroy', $sponsor->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?')">
                  @csrf
                  @method('DELETE')
                  <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Add Modal -->
  <div
    x-show="showAddModal"
    x-transition
    class="fixed inset-0 bg-black/50 flex items-center justify-center z-50"
    style="display: none;"
    @keydown.escape.window="showAddModal = false"
  >
    <div class="bg-white p-6 rounded-lg w-full max-w-md" @click.outside="showAddModal = false">
      <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-bold">Add Sponsors</h3>
        <button @click="showAddModal = false" class="text-gray-600 hover:text-black text-2xl font-bold">&times;</button>
      </div>

      <form method="POST" action="{{ route('sponsors.store') }}" enctype="multipart/form-data" @submit="images = []">
        @csrf

        <label class="block mb-2 text-sm font-medium">Select Multiple Images <span class="text-red-500">*</span></label>
        <input
          type="file"
          name="images[]"
          multiple
          required
          class="w-full border rounded p-2 mb-4"
          @change="
            images = [];
            Array.from($event.target.files).forEach(file => {
              const reader = new FileReader();
              reader.onload = e => images.push(e.target.result);
              reader.readAsDataURL(file);
            });
          "
        >

        @error('images.*')
          <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror

        <!-- Image preview grid -->
        <template x-if="images.length > 0">
       <div class="flex gap-4 mb-4 overflow-x-auto max-w-full">
  <template x-for="(img, index) in images" :key="index">
    <div class="flex-shrink-0 border rounded overflow-hidden shadow-sm" style="width: 50px; height: 50px;">
      <img :src="img" alt="Preview Image" class="w-full h-full object-cover">
    </div>
  </template>
</div>

        </template>

        <div class="text-right">
          <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Submit</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Edit Modals -->
  @foreach($sponsors as $sponsor)
  <div id="editModal-{{ $sponsor->id }}" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-md p-6 relative">
      <button onclick="document.getElementById('editModal-{{ $sponsor->id }}').classList.add('hidden')" class="absolute top-3 right-3 text-gray-500 hover:text-black text-xl font-bold">&times;</button>
      <h3 class="text-lg font-bold mb-4">Edit Sponsor</h3>

      <form action="{{ route('sponsors.update', $sponsor->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label class="block mb-2 text-sm font-medium">Replace Image <span class="text-gray-500 text-xs">(optional)</span></label>
        <input type="file" name="image" class="w-full border rounded p-2 mb-4">

        @error('image')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror

        <div class="text-center mb-4">
          <img src="{{ asset('storage/' . $sponsor->image) }}" class="h-20 rounded-lg inline-block object-cover">
        </div>

        <div class="text-right">
          <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
        </div>
      </form>
    </div>
  </div>
  @endforeach
</section>
@endsection
