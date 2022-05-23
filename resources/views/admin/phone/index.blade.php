@extends('layouts.dashboard')
@section('content')
    <x-admin.notification />

    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        <!-- Start Problems List -->
        <div class="card col-span-4 xl:col-span-1">
            <div class="card-heade uppercase py-2 px-2 flex items-center justify-between">
                <h2 class="font-semibold ml-2">Problems</h2>
                <a href="{{ route('phone.create') }}" class="btn-bs-primary">Add</a>
            </div>

            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r border-t text-center"></th>
                        <th class="px-4 py-2 border-r border-t text-center">Name</th>
                        <th class="px-4 py-2 border-r border-t text-center">Phone Number</th>
                        <th class="px-4 py-2 border-t text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">


                    @forelse ($phones as $phone)
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center">
                            </td>

                            <td class="border border-l-0 px-4 py-2">
                                <a href="#" class="hover:text-teal-600 text-black">{{ $phone->name }}</a>
                            </td>
                            <td class="border border-l-0 px-4 py-2">
                                <a href="#" class="hover:text-teal-600 text-black">{{ $phone->phone }}</a>
                            </td>


                            <td class="border border-l-0 border-r-0 px-4">
                                <div class="problem-buttons flex space-x-2 text-xs justify-center items-center">
                                    <a href="{{ route('phone.edit', $phone) }}" class="btn-bs-info"><i
                                            class="fas fa-edit"></i></a>



                                </div>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border border-l-0 px-4 py-2 text-center text-red-500" colspan="6">
                                No phone numbers are found!
                            </td>
                        </tr>
                    @endforelse



                </tbody>
            </table>

        </div>
        <div class="mt-5">
            {{ $phones->links() }}
        </div>
        <!-- End Problems List -->


    </div>
    <!-- End General Report -->
@endsection
