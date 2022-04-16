@extends('layouts.dashboard')
@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- Start Problems List -->
        <div class="card col-span-4 xl:col-span-1">
            <div class="card-heade uppercase py-2 px-2 flex items-center justify-between">
                <h2 class="font-semibold ml-2">Tags</h2>

                <a href="{{ route('tag.create') }}" class="btn-bs-primary">Add</a>
            </div>

            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r border-t text-center"></th>
                        <th class="px-4 py-2 border-r border-t text-center">Name</th>
                        <th class="px-4 py-2 border-r border-t text-center">Slug</th>
                        <th class="px-4 py-2 border-t text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">


                    @forelse ($tags as $tag)
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-black">
                                {{ $tag->id }}
                            </td>

                            <td class="border border-l-0 px-4 py-2">
                                <a href="{{ route('problem.show', $tag) }}"
                                    class="hover:text-teal-600 text-black">{{ $tag->name }}</a>
                            </td>
                            <td class="border border-l-0 px-4 py-2 lowercase">{{ $tag->slug }}</td>

                            <td class="border border-l-0 border-r-0 px-4">

                                <div class="problem-buttons flex space-x-2 text-xs justify-center items-center">
                                    <a href="{{ route('tag.edit', $tag->id) }}" class="btn-bs-info"><i
                                            class="fas fa-edit"></i></a>


                                    <form action="{{ route('tag.destroy', $tag->id) }}" method="POST"
                                        onsubmit="return confirm('Do you really want to delete!');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-700 text-white px-4 py-2 rounded"><i
                                                class="fas fa-trash-alt"></i></button>
                                    </form>

                                </div>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-red-500" colspan="6">
                                No Tags are found!
                            </td>
                        </tr>
                    @endforelse



                </tbody>
            </table>

        </div>
        <div class="mt-5">
            {{ $tags->links() }}
        </div>
        <!-- End Problems List -->


    </div>
    <!-- End General Report -->
@endsection
