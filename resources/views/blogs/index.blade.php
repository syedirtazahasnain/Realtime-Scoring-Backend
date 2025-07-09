<x-app-layout>
    @section('title', 'Blog Posts')

    <!-- Header Section -->
    <div class="relative">
        <div class="md:h-[300px] h-[200px] flex flex-col gap-[15px] justify-center relative items-center">
            <img src="{{ asset('storage/matches/bg1.png') }}" alt=""
                class="h-[300px]  absolute left-0 right-0 bottom-0 w-full object-cover overflow-hidden">
            <h2
                class="text-[18px] md:text-[30px] xl:text-[40px] 2xl:text-[50px] font-monti font-bold relative text-white">
                Blog Posts
            </h2>
            <div class="relative z-20">
                <button onclick="openModal('create')"
                    class="block text-center text-white text-[10px] 2xl:text-[14px] xl:text-[12px] font-sans px-[20px] py-[5px] md:py-[10px] text-nowrap bg-[#00aeef] font-medium hover:bg-[#094AB7] transition-colors duration-200">
                    Add New Post
                </button>
            </div>
        </div>
    </div>

    {{-- Blogs Here --}}

    <div class="relative bg-[#fff]">
        <div class="my-[40px] xl:my-[80px]">
            <div class="col-md-10 mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-[10px] lg:gap-[15px] xl:gap-[20px]">
                    @forelse ($blogs as $blog)
                        <div class="flex justify-between items-center relative overflow-hidden bg-[#FFF4ED]">
                            <div class="relative">
                                <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="" class="">
                            </div>
                            <div
                                class="font-monti w-[60%] flex justify-center items-center px-[10px] xl:px-[20px] 2xl:px-[30px]">
                                <div>
                                    <h3
                                        class="text-[14px] 2xl:text-[20px] xl:text-[17px] font-bold text-[#094AB7] my-0 leading-tight">
                                        {{ $blog->title }}
                                    </h3>
                                    <div class="h-[60px] overflow-hidden mb-[10px] mt-[20px]">
                                        <p class="text-xs uppercase font-bold">
                                            Content
                                        </p>
                                        <p class="text-[12px] xl:text-[14px]">
                                            {{ $blog->content }}
                                        </p>
                                    </div>
                                    <div class="">
                                        <p class="text-xs uppercase font-bold">
                                            Slug
                                        </p>
                                        <p class="text-[12px] xl:text-[14px]">
                                            {{ $blog->slug }}
                                        </p>
                                    </div>
                                    <div class="mt-[10px]">
                                        <p class="text-xs uppercase font-bold">
                                            Publish Date
                                        </p>
                                        <p class="text-[12px] xl:text-[14px]">
                                            {{ $blog->published_at ? $blog->published_at->format('M d, Y') : 'Draft' }}
                                        </p>
                                    </div>
                                    <div class="mt-[10px] flex gap-[10px] items-center">
                                        <button onclick="openModal('edit', {{ $blog->id }})"
                                            class="text-[#fff] text-xs px-[10px] bg-[#00aeef] py-[3px] text-center font-medium mt-[1px]">
                                            Edit
                                        </button>
                                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST"
                                            class="">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-[#fff] text-xs px-[10px] bg-red-600 py-[3px] text-center font-medium"
                                                onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500">No blog posts found</td>
                        </tr>
                    @endforelse
                </div>
                <div class="mt-[10px] lg:mt-[20px] xl:mt-[30px]">
                    @if ($blogs->hasPages())
                        <div class="flex items-center justify-between">
                            <div class="text-sm font-medium">
                                Showing {{ $blogs->firstItem() }} to {{ $blogs->lastItem() }} of {{ $blogs->total() }}
                                results
                            </div>
                            <div class="flex items-center space-x-2">
                                @if ($blogs->onFirstPage())
                                    <span
                                        class="w-[30px] h-[30px] bg-[#00aeef] rounded flex items-center justify-center text-white">
                                        <i class="fa-solid fa-angle-left"></i>
                                    </span>
                                @else
                                    <a href="{{ $blogs->previousPageUrl() }}"
                                        class="w-[30px] h-[30px] bg-[#00aeef] rounded flex items-center justify-center text-white">
                                        <i class="fa-solid fa-angle-left"></i>
                                    </a>
                                @endif
                                @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                    @if ($page == $blogs->currentPage())
                                        <span class="px-3 text-[18px] font-semibold">{{ $page }}</span>
                                    @else
                                        <a href="{{ $url }}"
                                            class="px-3 text-[18px] font-semibold">{{ $page }}</a>
                                    @endif
                                @endforeach

                                @if ($blogs->hasMorePages())
                                    <a href="{{ $blogs->nextPageUrl() }}"
                                        class="w-[30px] h-[30px] bg-[#00aeef] rounded flex items-center justify-center text-white">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </a>
                                @else
                                    <span
                                        class="w-[30px] h-[30px] bg-[#00aeef] rounded flex items-center justify-center text-white">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="blogModal"
        class="border-l-[4px] border-[#094AB7] top-0 right-0 fixed z-50 flex items-center justify-center h-full md:w-1/3 bg-[#fff] hidden">
        {{-- Close button --}}
        <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700 absolute top-[10px] right-[10px]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="p-[20px] w-full relative">
            <div class="mb-[20px] xl:mb-[30px]">
                <h3 id="modalTitle" class="text-xl text-center text-[#094AB7] font-bold"></h3>
            </div>

            <form id="blogForm" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="formMethod" name="_method" value="POST">
                <input type="hidden" id="blogId" name="id" value="">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[10px] xl:gap-[15px]">
                    <div>
                        <label for="title" class="text-xs font-medium text-gray-700">Title <span
                                class="text-red-600">*</span></label>
                        <input type="text" id="title" name="title" required
                            class="w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="published_at" class="text-xs font-medium text-gray-700">Publish
                            Date</label>
                        <input type="datetime-local" id="published_at" name="published_at"
                            class="w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <div class="lg:col-span-2 lg:mb-[15px]">
                        <label for="thumbnail" class="text-xs font-medium text-gray-700">Thumbnail</label>
                        <input type="file" id="thumbnail" name="thumbnail"
                            class="w-full border-[1px] p-[5px] rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                        <div id="thumbnailPreview" class="mt-2 hidden">
                            <img id="previewImage" src="" alt="Thumbnail Preview" class="h-32 object-cover">
                        </div>
                    </div>

                    <div class="lg:col-span-2 lg:mb-[15px]">
                        <label for="scripts" class="block text-xs font-medium text-gray-700">
                            Custom Scripts (JS/CSS)
                        </label>
                        <textarea id="scripts" name="scripts" rows="2"
                            class="w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"></textarea>
                    </div>

                    <div class="lg:col-span-2 lg:mb-[15px]">
                        <label for="content" class="text-xs font-medium text-gray-700">Content*</label>
                        <textarea id="content" name="content" rows="6" required
                            class="w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"></textarea>
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <button type="button" onclick="closeModal()"
                        class="text-[#fff] text-xs px-[20px] bg-gray-600 py-[8px] w-[100px] uppercase text-center font-semibold">
                        Cancel
                    </button>
                    <button type="submit"
                        class="text-[#fff] text-xs px-[20px] bg-[#00aeef] py-[8px] w-[100px] uppercase text-center font-semibold">
                        Save
                    </button>
                </div>
            </form>
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
