@extends('layouts.dashboard')
@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- Start Problems List -->
        <div class="card col-span-4 xl:col-span-1">
            <div class="card-heade uppercase pt-6 px-4 flex items-center justify-between">
                <h2 class="font-semibold ml-2">Create Problem</h2>
                <a href="{{ route('problem.create') }}" class="btn-bs-primary">Back</a>
            </div>



            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-0 bg-white border-b border-gray-200">

                    <form action="{{ route('problem.update', $problem) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mt-6 flex">
                            <div class="flex-1">
                                <label for="name" class="formLabel">Problem Title</label>
                                <input type="text" name="name" id="name" class="formInput"
                                    value="{{ $problem->name }}">
                                @error('name')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6 flex">
                            <div class="flex-1 mr-2">
                                <label for="category_id" class="formLabel">Category</label>

                                <select name="category_id" id="category_id" class="formInput">
                                    <option value="none">Select Category</option>

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $problem->category_id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach

                                </select>
                                @error('category_id')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex-1 ml-2">
                                <label for="visibility" class="formLabel">Visibility</label>
                                <select name="visibility" id="visibility" class="formInput">
                                    <option value="none">Select Visibility
                                    </option>
                                    <option value="private" {{ $problem->visibility == 'private' ? 'selected' : '' }}>
                                        Private
                                    </option>
                                    <option value="public" {{ $problem->visibility == 'public' ? 'selected' : '' }}>Public
                                    </option>
                                </select>
                                @error('visibility')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6 flex">
                            <div class="flex-1">
                                <label for="description" class="formLabel">Description</label>

                                <textarea name="description" id="description" class="formInput">{{ $problem->description }}
                                    </textarea>
                                @error('description')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6 flex">
                            <div class="flex-1">
                                <label for="tags" class="formLabel">Tags</label>
                                <div class="flex space-x-2">
                                    @foreach ($tags as $tag)
                                        <input type="checkbox" id="{{ $tag->slug }}" name="tags[]"
                                            value="{{ $tag->id }}"
                                            @foreach ($problem->tags as $ptag) @if ($tag->id == $ptag->id)
                                                    checked @endif
                                            @endforeach>
                                        <label for="{{ $tag->slug }}" class="mr-2">
                                            {{ $tag->name }}</label>
                                    @endforeach
                                </div>


                                @error('tags')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6">
                            <div class="flex-1 ml-1 mr-1">
                                <label for="thumbnails" class="formLabel">Thumbnails</label>
                                <input type="file" name="thumbnails[]" multiple id="thumbnails"
                                    class="w-full border-2 border-dashed border-teal-600 py-20 text-center rounded-md">
                                @error('thumbnails')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="upload_image_preview flex"></div>

                        <div class="mb-6 mt-6">
                            <button type="submit"
                                class="px-10 py-2 bg-orange-500 text-white rounded mt-3 uppercase text-base">Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <!-- End General Report -->
@endsection

@section('scripts')
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection
