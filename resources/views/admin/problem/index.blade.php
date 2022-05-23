@extends('layouts.dashboard')
@section('content')
    <x-admin.notification />

    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- Start Problems List -->
        <div class="card col-span-4 xl:col-span-1">
            <div class="card-heade uppercase py-2 px-2 flex items-center justify-between">
                <h2 class="font-semibold ml-2">Problems</h2>
                <a href="{{ route('problem.create') }}" class="btn-bs-primary">Add</a>
            </div>

            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r border-t text-center"></th>
                        <th class="px-4 py-2 border-r border-t text-center">Name</th>
                        <th class="px-4 py-2 border-r border-t text-center">Category</th>
                        <th class="px-4 py-2 border-r border-t text-center">Tags</th>
                        <th class="px-4 py-2 border-r border-t text-center">Solutions</th>
                        <th class="px-4 py-2 border-t text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">


                    @forelse ($problems as $problem)
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center">
                                <i class="fa {{ $problem->visibility == 'public' ? 'fa-eye' : 'fa-eye-slash' }}"></i>
                            </td>

                            <td class="border border-l-0 px-4 py-2">
                                <a href="{{ route('problem.show', $problem) }}"
                                    class="hover:text-teal-600 text-black">{{ $problem->name }}</a>
                            </td>

                            <td class="border border-l-0 border-r px-4 py-2 text-center">{{ $problem->category->name }}
                            </td>
                            <td class="border border-l-0 px-4 py-2 capitalize">

                                @foreach ($problem->tags as $tag)
                                    <span class="text-xs bg-teal-600 px-2 py-1 text-white rounded-sm">
                                        {{ $tag->name }}</span>
                                @endforeach
                            </td>
                            <td class="border border-l-0 px-4 text-center">
                                <span
                                    class="bg-teal-400 px-4 py-2 rounded-md text-white">{{ count($problem->solutions) }}</span>
                            </td>
                            <td class="border border-l-0 border-r-0 px-4">
                                <div class="problem-buttons flex space-x-2 text-xs justify-center items-center">
                                    <a href="{{ route('problem.edit', $problem) }}" class="btn-bs-info"><i
                                            class="fas fa-edit"></i></a>

                                    <form action="{{ route('problem.destroy', $problem) }}" method="POST"
                                        onsubmit="return confirm('Do you want to delete?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-bs-danger"><i
                                                class="fas fa-trash-alt"></i></button>
                                    </form>

                                </div>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-red-500" colspan="6">
                                No problems are found!
                            </td>
                        </tr>
                    @endforelse



                </tbody>
            </table>

        </div>
        <div class="mt-5">
            {{ $problems->links() }}
        </div>
        <!-- End Problems List -->


    </div>
    <!-- End General Report -->
@endsection
