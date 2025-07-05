<x-admin::layout>
    <x-slot name="title">{{ __('Update Category') }}</x-slot>
    <x-slot name="breadcrumb">{{ __('Update Category') }}</x-slot>
    <x-slot name="page_slug">category</x-slot>

    <section>
        <div class="glass-card rounded-2xl p-6 mb-6">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-bold text-text-black dark:text-text-white">{{ __('Update Category') }}</h2>
                <x-admin.primary-link href="{{ route('pm.category.index') }}">{{ __('Back') }} <i data-lucide="undo-2"
                        class="w-4 h-4"></i> </x-admin.primary-link>
            </div>
        </div>

        <div
            class="grid grid-cols-1 gap-4 sm:grid-cols-1  {{ isset($documentation) && $documentation ? 'md:grid-cols-7' : '' }}">
            <!-- Form Section -->
            <div class="glass-card rounded-2xl p-6 md:col-span-5">
                <form action="{{ route('pm.category.update', encrypt($category->id)) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                        <!-- Name -->
                        <div class="space-y-2">
                            <p class="label">{{ __('Name') }}
                                <span class="text-red-500">*</span>
                            </p>
                            <label class="input flex items-center gap-2">

                                <input type="text" placeholder="Name" id="name" name="name" value="{{ $category->name }}"
                                    class="flex-1" />
                            </label>
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>
                        {{-- Slug --}}
                        <div class="space-y-2">
                            <p class="label">{{ __('Slug') }}
                                <span class="text-red-500">*</span>
                            </p>
                            <label class="input flex items-center gap-2">
                                <input type="text" placeholder="Slug" id="slug" name="slug" value="{{ $category->slug }}"
                                    class="flex-1">
                            </label>
                            <x-input-error class="mt-2" :messages="$errors->get('slug')" />
                        </div>
                        {{-- Description --}}
                        <div class="space-y-2 sm:col-span-2">
                            <p class="label">{{ __('Description') }}</p>
                            <textarea name="description" id="description" cols="" rows="10" class="textarea">{{ $category->description }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>
                        {{-- image --}}
                         <div class="space-y-2 sm:col-span-2 mt-3">
                        <p class="label">{{ __('Image') }}</p>
                        <input type="file" name="image" class="filepond" id="image"
                            accept="image/jpeg, image/png, image/jpg, image/webp, image/svg">
                        <x-input-error class="mt-2" :messages="$errors->get('image')" />
                    </div>
                    </div>
                    <div class="flex justify-end mt-5">
                        <x-admin.primary-button>{{ __('Update') }}</x-admin.primary-button>
                    </div>
                </form>
            </div>

            {{-- documentation will be loded here and add md:col-span-2 class --}}

        </div>
    </section>
    @push('js')
        <script src="{{ asset('assets/js/ckEditor5.js') }}"></script>
        <script src="{{ asset('assets/js/filepond.js') }}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                file_upload(["#image"], ["image/jpeg", "image/png", "image/jpg, image/webp, image/svg"], {
                    "#image": "{{ $category->modified_image }}",
                });
            });
        </script>
    @endpush
</x-admin::layout>
