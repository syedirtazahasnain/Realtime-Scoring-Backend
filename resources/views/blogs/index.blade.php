<x-app-layout>
    <x-slot name="title">Blog Posts</x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Blog Posts</h2>
            <button onclick="openModal('create')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
                Add New Post
            </button>
        </div>

        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slug</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Published At</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($blogs as $blog)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">{{ $blog->title }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $blog->slug }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $blog->published_at ? $blog->published_at->format('M d, Y') : 'Draft' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button onclick="openModal('edit', {{ $blog->id }})"
                                    class="text-blue-500 hover:text-blue-700 mr-3">Edit</button>
                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700"
                                        onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500">No blog posts found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div>
                @if ($blogs->hasPages())
                    <div class="px-4 py-3 flex items-center justify-between border-t border-gray-200">
                        <div class="text-sm text-gray-700">
                            Showing {{ $blogs->firstItem() }} to {{ $blogs->lastItem() }} of {{ $blogs->total() }}
                            results
                        </div>
                        <div class="flex space-x-2">
                            @if ($blogs->onFirstPage())
                                <span class="px-3 py-1 rounded border text-gray-400 cursor-not-allowed">Previous</span>
                            @else
                                <a href="{{ $blogs->previousPageUrl() }}"
                                    class="px-3 py-1 rounded border text-gray-700 hover:bg-gray-100">Previous</a>
                            @endif
                            @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                @if ($page == $blogs->currentPage())
                                    <span
                                        class="px-3 py-1 rounded border bg-blue-500 text-white">{{ $page }}</span>
                                @else
                                    <a href="{{ $url }}"
                                        class="px-3 py-1 rounded border text-gray-700 hover:bg-gray-100">{{ $page }}</a>
                                @endif
                            @endforeach

                            @if ($blogs->hasMorePages())
                                <a href="{{ $blogs->nextPageUrl() }}"
                                    class="px-3 py-1 rounded border text-gray-700 hover:bg-gray-100">Next</a>
                            @else
                                <span class="px-3 py-1 rounded border text-gray-400 cursor-not-allowed">Next</span>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="blogModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-4xl">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 id="modalTitle" class="text-xl font-bold"></h3>
                    <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <form id="blogForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="formMethod" name="_method" value="POST">
                    <input type="hidden" id="blogId" name="id" value="">

                    <div class="space-y-4">
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Title*</label>
                            <input type="text" id="title" name="title" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label for="thumbnail" class="block text-sm font-medium text-gray-700">Thumbnail</label>
                            <input type="file" id="thumbnail" name="thumbnail"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <div id="thumbnailPreview" class="mt-2 hidden">
                                <img id="previewImage" src="" alt="Thumbnail Preview" class="h-32 object-cover">
                            </div>
                        </div>

                        <div>
                            <label for="published_at" class="block text-sm font-medium text-gray-700">Publish Date</label>
                            <input type="datetime-local" id="published_at" name="published_at"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label for="scripts" class="block text-sm font-medium text-gray-700">Custom Scripts (JS/CSS)</label>
                            <textarea id="scripts" name="scripts" rows="3"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                        </div>

                        <div>
                            <label for="content" class="block text-sm font-medium text-gray-700">Content*</label>
                            <textarea id="content" name="content" rows="10" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end space-x-3">
                        <button type="button" onclick="closeModal()"
                            class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openModal(action, blogId = null) {
            const modal = document.getElementById('blogModal');
            const form = document.getElementById('blogForm');
            const modalTitle = document.getElementById('modalTitle');
            const thumbnailPreview = document.getElementById('thumbnailPreview');
            const previewImage = document.getElementById('previewImage');

            if (action === 'create') {
                modalTitle.textContent = 'Add New Blog Post';
                form.action = "{{ route('blogs.store') }}";
                form.method = "POST";
                document.getElementById('formMethod').value = "POST";
                form.reset();
                thumbnailPreview.classList.add('hidden');
            } else if (action === 'edit' && blogId) {
                modalTitle.textContent = 'Edit Blog Post';

                fetch(`/blogs/${blogId}/edit`)
                    .then(response => response.json())
                    .then(blog => {
                        document.getElementById('blogId').value = blog.id;
                        document.getElementById('title').value = blog.title;
                        document.getElementById('content').value = blog.content;
                        document.getElementById('scripts').value = blog.scripts || '';

                        if (blog.published_at) {
                            const publishedAt = new Date(blog.published_at);
                            const formattedDate = publishedAt.toISOString().slice(0, 16);
                            document.getElementById('published_at').value = formattedDate;
                        } else {
                            document.getElementById('published_at').value = '';
                        }

                        if (blog.thumbnail) {
                            previewImage.src = `/storage/${blog.thumbnail}`;
                            thumbnailPreview.classList.remove('hidden');
                        } else {
                            thumbnailPreview.classList.add('hidden');
                        }

                        form.action = `/blogs/${blog.id}`;
                        document.getElementById('formMethod').value = "PUT";
                    });
            }

            modal.classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('blogModal').classList.add('hidden');
        }

        // Preview thumbnail image before upload
        document.getElementById('thumbnail').addEventListener('change', function(e) {
            const preview = document.getElementById('previewImage');
            const thumbnailPreview = document.getElementById('thumbnailPreview');

            if (this.files && this.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    thumbnailPreview.classList.remove('hidden');
                }

                reader.readAsDataURL(this.files[0]);
            } else {
                thumbnailPreview.classList.add('hidden');
            }
        });
    </script>
</x-app-layout>
