@extends('layouts.dashboard')
@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- Start Problems List -->
        <div class="card col-span-4 xl:col-span-1">
            <div class="card-heade uppercase py-2 px-2 flex items-center justify-between">
                <h2 class="font-semibold ml-2">Categories</h2>

                <a href="{{ route('activity.create') }}" class="btn-bs-primary">Add</a>
            </div>

            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r border-t text-center">Message</th>
                        <th class="px-4 py-2 border-r border-t text-center">Model</th>
                        <th class="px-4 py-2 border-r border-t text-center">Timestamp</th>
                        <th class="px-4 py-2 border-t text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">


                    @forelse ($activities as $activity)
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-black">
                                {{ $activity->message }}
                            </td>
                            <td class="border border-l-0 px-4 py-2 text-center text-black">
                                {{ $activity->model }}
                            </td>
                            <td class="border border-l-0 px-4 py-2 text-center text-black">
                                {{ $activity->created_at->diffForHumans() }}
                            </td>
                            {{-- <td class="border border-l-0 px-4 py-2 text-center text-black">
                                <a href="#" class="btn-bs-primary">Edit</a>
                                <a href="#" class="btn-bs-danger">Delete</a>
                            </td> --}}

                            <td class="border border-l-0 border-r-0 px-4">
                                <div class="problem-buttons flex space-x-2 text-xs justify-center items-center">
                                    <a href="" class="btn-bs-info"><i class="fas fa-edit"></i></a>

                                    <form action="" method="POST" onsubmit="return confirm('Do you want to delete?')">
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
                                No activities are found!
                            </td>
                        </tr>
                    @endforelse



                </tbody>
            </table>

        </div>
        <div class="mt-5">
            {{ $activities->links() }}
        </div>
        <!-- End Problems List -->


    </div>
    <!-- End General Report -->
@endsection
