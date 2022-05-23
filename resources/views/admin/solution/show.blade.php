@extends('layouts.dashboard')
@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-1 gap-6 xl:grid-cols-1">

        <!-- Sales Overview -->
        <div class="card">

            <!-- header -->
            <div class="p-5 border-b flex justify-between items-center">
                <h2 class="text-xl">{{ $problem->name }}</h2>
                <div class="">
                    <a href="{{ route('problem.index') }}" class="btn-shadow">Add Solution</a>
                    <a href="{{ route('problem.index') }}" class="btn-shadow">Back</a>
                </div>

            </div>
            <!-- end header -->

            <!-- problem info -->
            <div class="grid grid-cols-4 gap-6 xl:grid-cols-2 p-6 pb-2 pt-0">

                <!-- card -->
                <div class="card mt-6 xl:mt-1">
                    <div class="p-2 flex items-center">

                        <div class="px-3 py-2 rounded bg-gray-200 text-black mr-3">
                            <i class="fad fa-comments"></i>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="font-semibold text-sm mb-1">Published on</h1>
                            <p class="text-xs">{{ $problem->created_at->format('d M, Y') }}</p>
                        </div>


                    </div>
                </div>
                <!-- end card -->

                <!-- card -->
                <div class="card mt-6 xl:mt-1">
                    <div class="p-2  flex items-center">

                        <div class="px-3 py-2 rounded bg-gray-200 text-black mr-3">
                            <i class="fad fa-user"></i>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="font-semibold text-sm mb-1">Published by</h1>
                            <p class="text-xs capitalize">{{ Auth::user()->name }}</p>
                        </div>

                    </div>
                </div>
                <!-- end card -->

                <!-- card -->
                <div class="card mt-6 xl:mt-1">
                    <div class="p-2  flex items-center">

                        <div class="px-3 py-2 rounded bg-gray-200 text-black mr-3">
                            <i class="fad fa-eye"></i>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="font-semibold text-sm mb-1">Visiblity</h1>
                            <p class="text-xs capitalize">{{ $problem->visibility }}</p>
                        </div>

                    </div>
                </div>
                <!-- end card -->


                <!-- card -->
                <div class="card mt-6 xl:mt-1">
                    <div class="p-2  flex items-center">

                        <div class="px-3 py-2 rounded bg-gray-200 text-black mr-3">
                            <i class="fad fa-tag"></i>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="font-semibold text-sm mb-1">Category</h1>
                            <p class="text-xs">{{ $problem->category->name }}</p>
                        </div>


                    </div>
                </div>
                <!-- end card -->

            </div>
            <!-- end problem info -->

            <!-- card -->
            <div class="card mx-5">
                <div class="p-2  flex items-center">

                    <div class="px-3 py-2 rounded bg-gray-200 text-black mr-3">
                        <i class="fad fa-tags"></i>
                    </div>

                    <div class="flex flex-col">
                        <h1 class="font-semibold text-sm mb-1">Tags</h1>

                        <div class="space-x-2">
                            @foreach ($problem->tags as $tag)
                                <a class="text-sm border py-1 px-2 rounded-sm hover:bg-teal-200 duration-200"
                                    href="#">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>
            <!-- end card -->

            <!-- body -->
            <div class="card-body grid grid-cols-3 gap-6 lg:grid-cols-1">

                <div class="col-span-2">

                    <div class="mb-2 flex items-center">
                        {!! $problem->description !!}
                    </div>
                </div>

                <div class="">
                    <div class="coderDairy__problem_media_image">

                        @foreach ($problem->media as $media)
                            <a href="{{ $media->name }}" data-lightbox="mygallery"><img class="rounded-md"
                                    src="{{ $media->name }}"></a>
                        @endforeach
                    </div>
                </div>



            </div>
            <!-- end body -->

        </div>
        <!-- end Sales Overview -->


    </div>
    <!-- End General Report -->

    <!-- General Report -->
    {{-- <div class="grid grid-cols-1 gap-6 xl:grid-cols-1 mt-6"> --}}

    <!-- body -->
    <div class="card-body grid grid-cols-1 lg:grid-cols-1">
        <div class="">
            {{-- tab-1 --}}
            <div class="coderDairy__accrodion">
                <div class="accordion_content">
                    <div class="label rounded bg-teal-600">List One</div>
                    <div class="content grid grid-cols-3 gap-6 lg:grid-cols-1">
                        <p class="col-span-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo at
                            ab officiis fugiat dolores quidem explicabo excepturi est pariatur facere?</p>
                        <div class="">
                            <div class="coderDairy__problem_media_image">
                                <a href="https://picsum.photos/seed/picsum/300/200" data-lightbox="mygallery"
                                    data-title="My caption"><img class="rounded-md"
                                        src="https://picsum.photos/seed/picsum/300/200" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- tab-2 --}}
            <div class="coderDairy__accrodion">
                <div class="accordion_content">
                    <div class="label rounded bg-teal-600">List One</div>
                    <div class="content grid grid-cols-3 gap-6 lg:grid-cols-1">
                        <p class="col-span-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo at
                            ab officiis fugiat dolores quidem explicabo excepturi est pariatur facere?</p>
                        <div class="">
                            <div class="coderDairy__problem_media_image">
                                <a href="https://picsum.photos/seed/picsum/300/200" data-lightbox="mygallery"
                                    data-title="My caption"><img class="rounded-md"
                                        src="https://picsum.photos/seed/picsum/300/200" alt=""></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- tab-3 --}}
            <div class="coderDairy__accrodion">
                <div class="accordion_content">
                    <div class="label rounded bg-teal-600">List One</div>
                    <div class="content grid grid-cols-3 gap-6 lg:grid-cols-1">
                        <p class="col-span-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo at
                            ab officiis fugiat dolores quidem explicabo excepturi est pariatur facere?</p>
                        <div class="">
                            <div class="coderDairy__problem_media_image">
                                <a href="https://picsum.photos/seed/picsum/300/200" data-lightbox="mygallery"
                                    data-title="My caption"><img class="rounded-md"
                                        src="https://picsum.photos/seed/picsum/300/200" alt=""></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- </div> --}}
        <!-- end body -->

    </div>
    <!-- End General Report -->
@endsection
