@extends('layouts.dashboard')
@section('content')
    <x-admin.notification />

    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- Start Problems List -->
        <div class="card col-span-4 xl:col-span-1">
            <div class="card-heade uppercase py-2 px-2 flex items-center justify-between">
                <h2 class="font-semibold ml-2">Solutions</h2>
                <a href="{{ route('solution.create') }}" class="btn-bs-primary">Add Solution</a>
            </div>

            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r border-t text-center">Solution for</th>
                        <th class="px-4 py-2 border-t text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">


                    @forelse ($solutions as $solution)
                        <tr>
                            <td class="border border-l-0 px-4 py-2">
                                <a href="{{ route('problem.show', $solution) }}"
                                    class="hover:text-teal-600 text-black">{{ $solution->problem->name }}</a>
                            </td>

                            <td class="border border-l-0 border-r-0 px-4">
                                <div class="problem-buttons flex space-x-2 text-xs justify-center items-center">


                                    <form action="{{ route('solution.destroy', $solution) }}" method="POST"
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
                                No solutions are found!
                            </td>
                        </tr>
                    @endforelse



                </tbody>
            </table>

        </div>
        <div class="mt-5">
            {{ $solutions->links() }}
        </div>
        <!-- End Problems List -->


    </div>
    <!-- End General Report -->
@endsection
