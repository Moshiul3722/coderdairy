@extends('layouts.dashboard')
@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- Start Problems List -->
        <div class="card col-span-4 xl:col-span-1">
            <div class="card-heade uppercase pt-6 px-4 flex items-center justify-between">
                <h2 class="font-semibold ml-2">Create Tag</h2>
                <a href="{{ route('category.index') }}" class="btn-bs-primary">Back</a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-0 bg-white border-b border-gray-200">

                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mt-6 flex">
                            <div class="flex-1 mr-2">
                                <label for="name" class="formLabel">Name</label>
                                <input type="text" name="name" id="name" placeholder="Category Name" class="formInput"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex-1 ml-2">
                                <label for="status" class="formLabel">Status</label>
                                <select name="status" id="status" class="formInput">
                                    <option value="none" {{ old('status') == 'none' ? 'selected' : '' }}>Select Status

                                    </option>
                                    <option value="active" {{ old('status') == 'private' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="inactive {{ old('status') == 'public' ? 'selected' : '' }}">
                                        Inactive
                                    </option>
                                </select>
                            </div>
                        </div>





                        <div class="mb-6 mt-6">
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