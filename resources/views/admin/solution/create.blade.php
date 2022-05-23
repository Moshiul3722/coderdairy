@extends('layouts.dashboard')
@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- Start Problems List -->
        <div class="card col-span-4 xl:col-span-1">
            <div class="card-heade uppercase pt-6 px-4 flex items-center justify-between">
                <h2 class="font-semibold ml-2">Create Solution</h2>
                <a href="{{ URL::previous() }}" class="btn-bs-primary bg-teal-400">Back</a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-0 bg-white border-b border-gray-200">

                    <form action="{{ route('solution.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mt-6 flex">
                            <div class="flex-1 mr-2">
                                <label for="problem_id" class="formLabel">Solution for</label>

                                <select name="problem_id" id="problem_id" class="formInput">
                                    <option value="none">Select Problem</option>

                                    @foreach ($problems as $problem)
                                        <option value="{{ $problem->id }}"
                                            {{ request('problem_id') == $problem->id ? 'selected' : '' }}>
                                            {{ $problem->name }}
                                        </option>
                                    @endforeach

                                </select>
                                @error('problem_id')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6 flex">
                            <div class="flex-1">
                                <label for="solution" class="formLabel">Solution</label>
                                <textarea name="solution" id="solution" class="formInput">
                                    </textarea>
                                @error('solution')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6">
                            <div class="flex-1 ml-1 mr-1">
                                <label for="thumbnail" class="formLabel">Thumbnails</label>
                                <input type="file" name="thumbnails[]" multiple id="thumbnail"
                                    class="w-full border-2 border-dashed border-teal-600 py-20 text-center rounded-md">
                                @error('thumbnail')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="upload_image_preview flex"></div>

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
