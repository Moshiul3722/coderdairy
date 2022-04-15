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

                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mt-6 flex">
                            <div class="flex-1">
                                <label for="name" class="formLabel">Problem Title</label>
                                <input type="text" name="name" id="name" placeholder="Problem Title" class="formInput"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <p class="text-red-700"></p>
                                @enderror
                            </div>

                        </div>

                        <div class="mt-6 flex">
                            <div class="flex-1 mr-2">
                                <label for="country" class="formLabel">Category</label>

                                <select name="country" id="country" class="formInput">
                                    <option value="none">Select Category</option>

                                </select>
                                @error('country')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex-1 ml-1 mr-1">
                                <label for="thumbnail" class="formLabel">Thumbnail</label>
                                <label for="thumbnail"
                                    class="formLabel border-2 border-dashed border-teal-600 py-2 text-center rounded-md">Click
                                    to upload image</label>
                                <input type="file" name="thumbnail" id="thumbnail" class="formInput hidden">
                                @error('thumbnail')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex-1 ml-2">
                                <label for="status" class="formLabel">Visibility</label>
                                <select name="status" id="status" class="formInput">
                                    <option value="none" {{ old('status') == 'none' ? 'selected' : '' }}>Select
                                        Visibility
                                    </option>
                                    <option value="active" {{ old('status') == 'private' ? 'selected' : '' }}>Private
                                    </option>
                                    <option value="inactive {{ old('status') == 'public' ? 'selected' : '' }}">
                                        Public
                                    </option>
                                </select>
                            </div>
                        </div>


                        <div class="mt-6 flex">
                            <div class="flex-1">
                                <label for="country" class="formLabel">Description</label>

                                <textarea name="description" id="description" class="formInput">
                                    </textarea>
                                @error('description')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6 flex">
                            <div class="flex-1">
                                <label for="country" class="formLabel">Tags</label>
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1" class="mr-2"> HTML</label>
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2" class="mr-2"> CSS</label>
                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                <label for="vehicle3" class="mr-2"> Laravel</label>
                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                <label for="vehicle3" class="mr-2"> OOP php</label>

                                @error('country')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-6">
                            <button type="submit"
                                class="px-10 py-2 bg-teal-600 text-white rounded mt-3 uppercase text-base">Create</button>
                        </div>
                    </form>

                </div>
            </div>





        </div>

    </div>
    <!-- End General Report -->
@endsection
