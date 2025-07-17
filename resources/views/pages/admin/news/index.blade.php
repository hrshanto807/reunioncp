@extends('layouts.apps')

@section('content')
<section
  class="py-16 bg-gradient-to-br from-white to-gray-50"
  x-data="blogComponent()"
  x-cloak
  @keydown.escape.window="closeModals()"
>
  <div class="max-w-7xl mx-auto px-6">
    <div class="bg-white rounded-2xl p-6 shadow-lg">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Blog</h2>
        <button
          @click="showAddModal = true; initSummernote('add')"
          class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded"
        >
          Add Blog
        </button>
      </div>

      {{-- Success & Error Messages --}}
      @if(session('success'))
      <div
        x-data="{ show: true }"
        x-show="show"
        x-init="setTimeout(() => show = false, 5000)"
        class="bg-green-100 text-green-800 p-4 rounded mb-4"
      >
        {{ session('success') }}
      </div>
      @endif

      @if(session('error'))
      <div class="bg-red-100 text-red-800 p-4 rounded mb-4">
        {{ session('error') }}
      </div>
      @endif

      {{-- Blog Table --}}
      <div class="w-full overflow-x-auto block">
        <table class="w-full text-sm text-left border border-gray-300">
          <thead class="bg-gray-100 text-gray-700">
            <tr>
              <th class="py-3 px-4 border">Sl</th>
              <th class="py-3 px-4 border">Thumbnail</th>
              <th class="py-3 px-4 border">Title</th>
              <th class="py-3 px-4 border">Category</th>
              <th class="py-3 px-4 border">Created Date</th>
              <th class="py-3 px-4 border">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($blogs as $blog)
            <tr
              class="hover:bg-gray-50 border-b"
            >
              <td class="px-4 py-2 border">{{ banglaNumber($loop->iteration) }}</td>
              <td class="px-4 py-2 border">
                @if($blog->photo && file_exists(public_path($blog->photo)))
                <img
                  src="{{ asset($blog->photo) }}"
                  alt="Blog Photo"
                  class="w-16 h-16 object-cover rounded"
                />
                @else
                <span class="text-gray-400 italic">No Image</span>
                @endif
              </td>
              <td class="px-4 py-2 border">{{ $blog->title }}</td>
              <td class="px-4 py-2 border">{{ $blog->category->name }}</td>
              <td class="px-4 py-2 border">
                {{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}
              </td>
              <td class="px-4 py-2 space-x-2">
                <button
                  @click="openEditModal({{ $blog->id }})"
                  class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded"
                >
                  Edit
                </button>

                <form
                  action="{{ route('blogs.destroy', $blog->id) }}"
                  method="POST"
                  class="inline-block"
                  onsubmit="return confirm('Delete this blog?')"
                >
                  @csrf
                  @method('DELETE')
                  <button
                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded"
                  >
                    Delete
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    {{-- Add Blog Modal --}}
    <div
      x-show="showAddModal"
      x-transition
      class="fixed inset-0 bg-black/50 flex items-center justify-center z-50"
      @click.outside="closeModals()"
      style="display: none;"
    >
      <div
        class="bg-white p-6 rounded-lg w-full max-w-4xl h-[90vh] overflow-y-auto"
        @click.stop
      >
        <div class="flex justify-between items-center mb-4">
          <h3 class="text-lg font-bold">Add Blog</h3>
          <button
            @click="closeModals()"
            class="text-gray-600 hover:text-black text-2xl font-bold"
          >
            &times;
          </button>
        </div>

        <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="grid grid-cols-1 gap-4">
            <div>
              <label class="block mb-1 text-sm font-semibold">
                Title <span class="text-red-600">*</span>
              </label>
              <input
                type="text"
                name="title"
                class="w-full border rounded p-3 bg-gray-100"
                placeholder="Title"
                value="{{ old('title') }}"
              />
              @error('title')
              <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
              @enderror
            </div>

            <div>
              <label class="block mb-1 text-sm font-semibold">
                Thumbnail <span class="text-red-600">*</span>
              </label>
              <input
                type="file"
                name="photo"
                class="w-full border rounded p-3 bg-gray-100"
              />
              @error('photo')
              <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
              @enderror
            </div>

            <div>
              <label class="block mb-1 text-sm font-semibold">
                Short Description <span class="text-red-600">*</span>
              </label>
              <input
                type="text"
                name="short_desc"
                class="w-full border rounded p-3 bg-gray-100"
                placeholder="Short Description"
                value="{{ old('short_desc') }}"
              />
              @error('short_desc')
              <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
              @enderror
            </div>

            <div>
              <label class="block mb-1 text-sm font-semibold">
                Category <span class="text-red-600">*</span>
              </label>
              <select
                name="category_id"
                class="w-full border rounded p-3 bg-gray-100"
              >
                <option value="">Select</option>
                @foreach($categories as $category)
                <option
                  value="{{ $category->id }}"
                  {{ old('category_id') == $category->id ? 'selected' : '' }}
                >
                  {{ $category->name }}
                </option>
                @endforeach
              </select>
              @error('category_id')
              <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
              @enderror
            </div>

            <div>
              <label class="block mb-1 text-sm font-semibold">
                Content <span class="text-red-600">*</span>
              </label>
              <textarea
                id="summernote-add"
                name="content"
                class="w-full bg-gray-100 rounded"
                rows="6"
              >{{ old('content') }}</textarea>
              @error('content')
              <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="text-right mt-4">
            <button
              type="submit"
              class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700"
            >
              Submit
            </button>
          </div>
        </form>
      </div>
    </div>

    {{-- Edit Blog Modal --}}
    <div
      x-show="showEditModal"
      x-transition
      class="fixed inset-0 bg-black/50 flex items-center justify-center z-50"
      @click.outside="closeModals()"
      style="display: none;"
    >
      <div
        class="bg-white p-6 rounded-lg w-full max-w-4xl h-[90vh] overflow-y-auto"
        @click.stop
      >
        <div class="flex justify-between items-center mb-4">
          <h3 class="text-lg font-bold">Edit Blog</h3>
          <button
            @click="closeModals()"
            class="text-gray-600 hover:text-black text-2xl font-bold"
          >
            &times;
          </button>
        </div>

        <form
          method="POST"
          :action="`/blogs/${editBlogId}`"
          enctype="multipart/form-data"
          x-ref="editForm"
        >
          @csrf
          @method('PUT')

          <template x-if="editBlog">
            <div class="grid grid-cols-1 gap-4" x-text="">
              <div>
                <label class="block mb-1 text-sm font-semibold"
                  >Title <span class="text-red-600">*</span></label
                >
                <input
                  type="text"
                  name="title"
                  class="w-full border rounded p-3 bg-gray-100"
                  x-model="editBlog.title"
                  placeholder="Title"
                />
              </div>

              <div>
                <label class="block mb-1 text-sm font-semibold">Thumbnail</label>
                <template x-if="editBlog.photo">
                  <img
                    :src="`{{ asset('') }}${editBlog.photo}`"
                    alt="Blog Photo"
                    class="w-20 h-20 object-cover rounded mb-2"
                  />
                </template>
                <input
                  type="file"
                  name="photo"
                  class="w-full border rounded p-3 bg-gray-100"
                />
              </div>

              <div>
                <label class="block mb-1 text-sm font-semibold"
                  >Short Description <span class="text-red-600">*</span></label
                >
                <input
                  type="text"
                  name="short_desc"
                  class="w-full border rounded p-3 bg-gray-100"
                  x-model="editBlog.short_desc"
                  placeholder="Short Description"
                />
              </div>

              <div>
                <label class="block mb-1 text-sm font-semibold"
                  >Category <span class="text-red-600">*</span></label
                >
                <select
                  name="category_id"
                  class="w-full border rounded p-3 bg-gray-100"
                  x-model="editBlog.category_id"
                >
                  <option value="">Select</option>
                  @foreach($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>

              <div>
                <label class="block mb-1 text-sm font-semibold"
                  >Content <span class="text-red-600">*</span></label
                >
                <textarea
                  id="summernote-edit"
                  name="content"
                  class="w-full bg-gray-100 rounded"
                  rows="6"
                  x-text="editBlog.content"
                  x-init="
                    $nextTick(() => {
                      if ($('#summernote-edit').data('summernote')) {
                        $('#summernote-edit').summernote('destroy');
                      }
                      $('#summernote-edit').summernote({
                        placeholder: 'Add Content',
                        tabsize: 2,
                        height: 400
                      });
                      // Update summernote on input
                      $('#summernote-edit').on('summernote.change', function (we, contents) {
                        editBlog.content = contents;
                      });
                    });
                  "
                ></textarea>
              </div>
            </div>
          </template>

          <div class="text-right mt-4">
            <button
              type="submit"
              class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"
            >
              Update
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  {{-- Alpine.js Component Data --}}
  <script>
    function blogComponent() {
      return {
        showAddModal: false,
        showEditModal: false,
        editBlogId: null,
        editBlog: null,
        blogs: @json($blogs),
        categories: @json($categories),

        closeModals() {
          this.showAddModal = false;
          this.showEditModal = false;
          this.editBlogId = null;
          this.editBlog = null;
          // destroy summernote editors if needed
          if ($('#summernote-add').data('summernote')) {
            $('#summernote-add').summernote('destroy');
          }
          if ($('#summernote-edit').data('summernote')) {
            $('#summernote-edit').summernote('destroy');
          }
        },

        initSummernote(target) {
          this.$nextTick(() => {
            if (target === 'add') {
              if ($('#summernote-add').data('summernote')) {
                $('#summernote-add').summernote('destroy');
              }
              $('#summernote-add').summernote({
                placeholder: 'Add Content',
                tabsize: 2,
                height: 400,
              });
            }
          });
        },

        openEditModal(id) {
          this.editBlogId = id;
          // Find blog from blogs array
          this.editBlog = this.blogs.find((b) => b.id === id);
          this.showEditModal = true;

          this.$nextTick(() => {
            // Destroy if exists
            if ($('#summernote-edit').data('summernote')) {
              $('#summernote-edit').summernote('destroy');
            }
            // Init summernote
            $('#summernote-edit').summernote({
              placeholder: 'Add Content',
              tabsize: 2,
              height: 400,
            });
            // Set summernote content
            $('#summernote-edit').summernote('code', this.editBlog.content);
            // Sync summernote changes back to Alpine data
            $('#summernote-edit').on('summernote.change', (we, contents) => {
              this.editBlog.content = contents;
            });
          });
        },
      };
    }
  </script>
</section>
@endsection
