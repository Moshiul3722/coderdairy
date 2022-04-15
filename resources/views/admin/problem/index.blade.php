@extends('layouts.dashboard')
@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- Start Problems List -->
        <div class="card col-span-4 xl:col-span-1">
            <div class="card-heade uppercase py-2 px-2 flex items-center justify-between">
                <h2 class="font-semibold ml-2">Problems</h2>

                <a href="{{route('problem.create')}}" class="btn-bs-primary">Add</a>
            </div>

            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r border-t text-center"></th>
                        <th class="px-4 py-2 border-r border-t text-center">Name</th>
                        <th class="px-4 py-2 border-r border-t text-center">Visibility</th>
                        <th class="px-4 py-2 border-r border-t text-center">Category</th>
                        <th class="px-4 py-2 border-r border-t text-center">Tags</th>
                        <th class="px-4 py-2 border-t text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">


                    @forelse ($problems as $problem)
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-black">
                                {{ $problem->id }}
                            </td>

                            <td class="border border-l-0 px-4 py-2">
                                <a href="{{ route('problem.show', $problem) }}"
                                    class="hover:text-teal-600 text-black">{{ $problem->name }}</a>
                            </td>
                            <td class="border border-l-0 px-4 py-2">{{ $problem->visibility }}</td>
                            <td class="border border-l-0 border-r px-4 py-2 text-center">{{ $problem->category->name }}</td>
                            <td class="border border-l-0 border-r px-4 py-2"></td>
                            <td class="border border-l-0 border-r-0 px-4">
                                <div class="problem-buttons flex space-x-2 text-xs justify-center items-center">
                                    <a href="#" class="btn-bs-primary"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn-bs-info"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn-bs-danger"><i class="fas fa-trash-alt"></i></a>
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
