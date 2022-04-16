@extends('layouts.dashboard')
@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-1 gap-6 xl:grid-cols-1">

        <!-- Sales Overview -->
        <div class="card">

            <!-- header -->
            <div class="card-header flex flex-row justify-between">
                <h1 class="h6">{{ $problem->name }}</h1>
            </div>
            <!-- end header -->


            <!-- start numbers -->
            <div class="grid grid-cols-1 gap-1 xl:grid-cols-2 px-2">

                <div class="flex">

                    {{-- card --}}

                    <div class="card coderDairy__problem_card_meta mt-2 mb-2 mr-2">
                        <div class="card-body flex items-start">
                            <div class="flex flex-col">
                                {{-- <h1 class="">User</h1> --}}
                                <div class="flex flex-col font-bold">
                                    <a href="#" class="text-sm bg-gray-400 text-gray-900 py-2.5 px-3 rounded-sm"><i
                                            class="fas fa-calendar-alt px-1 text-gray-900"></i>{{ $problem->created_at->format('M d Y') }}</a>

                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- end card --}}

                    <!-- card -->
                    <div class="card coderDairy__problem_card_meta mt-2 mb-2  mr-2">
                        <div class="card-body flex items-start">
                            <div class="flex flex-col">
                                {{-- <h1 class="">User</h1> --}}
                                <div class="flex flex-col font-bold">
                                    <a href="#" class="text-sm bg-gray-400 text-gray-900 py-2.5 px-3 rounded-sm"><i
                                            class="far fa-user px-2 text-gray-900"></i>{{ Auth::user()->name }}</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->


                    <!-- card -->
                    <div class="card coderDairy__problem_card_meta mt-2 mb-2 xl:mt-1  mr-2">
                        <div class="card-body flex items-start">
                            <div class="flex flex-col">
                                {{-- <h1 class="">Visibility</h1> --}}
                                <div class="flex flex-col font-bold">
                                    <p class="text-sm bg-gray-400 text-gray-900 py-2.5 px-3 rounded-sm"><i
                                            class="fas fa-eye-slash px-2 text-gray-900"></i>
                                        {{ $problem->visibility }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->


                    <!-- card -->
                    <div class="card coderDairy__problem_card_meta mt-2 mb-2  mr-2">
                        <div class="card-body flex items-start">


                            <div class="flex flex-col font-bold">
                                {{-- <h1 class="">Category</h1> --}}
                                <p class="text-sm bg-gray-400 text-gray-900 py-2.5 px-3 rounded-sm"><i
                                        class="fad fa-wallet px-2 text-gray-900"></i>Laravel</p>
                            </div>

                        </div>
                    </div>
                    <!-- end card -->
                </div>



                <div class="">
                    <!-- card -->
                    <div class="card coderDairy__problem_card_meta mb-2">
                        <div class="card-body flex items-start">

                            <div class=" text-gray-900 mr-3">
                                <i class="fas fa-tags"></i>
                            </div>

                            <div class="flex flex-col">
                                {{-- <h1 class="">Tags</h1> --}}
                                <div class="tags-title grid grid-cols-8 gap-1">
                                    <a href="#"
                                        class="text-xs bg-gray-400 text-gray-900 py-2.5 px-3 rounded-sm mr-1">PHP</a>
                                    <a href="#"
                                        class="text-xs bg-gray-400 text-gray-900 py-2.5 px-3 rounded-sm mr-1">Controller</a>
                                    <a href="#"
                                        class="text-xs bg-gray-400 text-gray-900 py-2.5 px-3 rounded-sm mr-1">Controller</a>
                                    <a href="#"
                                        class="text-xs bg-gray-400 text-gray-900 py-2.5 px-3 rounded-sm mr-1">Controller</a>
                                    <a href="#"
                                        class="text-xs bg-gray-400 text-gray-900 py-2.5 px-3 rounded-sm mr-1">Controller</a>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- end card -->
                </div>




            </div>
            <!-- end nmbers -->
            <hr>
            <!-- body -->
            <div class="card-body grid grid-cols-3 gap-6 lg:grid-cols-1">

                <div class="col-span-2">

                    <div class="mb-2 flex items-center">
                        <div class="py-1 px-3 rounded bg-green-200 text-green-900 mr-3">
                            <i class="fa fa-caret-up"></i>
                        </div>

                        <p class="text-black text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Blanditiis
                            praesentium at nihil dolorem, quo
                            fugit deserunt reprehenderit eos nisi reiciendis!
                        </p>
                    </div>
                </div>

                <div class="">
                    <div class="coderDairy__problem_media_image">
                        <a href="https://picsum.photos/seed/picsum/300/200" data-lightbox="mygallery"
                            data-title="My caption"><img class="rounded-md"
                                src="https://picsum.photos/seed/picsum/300/200" alt=""></a>

                    </div>
                </div>



            </div>
            <!-- end body -->

        </div>
        <!-- end Sales Overview -->


    </div>
    <!-- End General Report -->

    <!-- General Report -->
    <div class="grid grid-cols-1 gap-6 xl:grid-cols-1 mt-6">

        <!-- Sales Overview -->
        <div class="card">

            <!-- header -->
            <div class="card-header flex flex-row justify-between">
                <h1 class="bg-teal-600 py-2 px-5 rounded-md text-white font-medium uppercase">Answer</h1>
            </div>
            <!-- end header -->

            <!-- body -->
            <div class="card-body grid grid-cols-1 gap-6 lg:grid-cols-1">
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



            </div>
            <!-- end body -->

        </div>
        <!-- end Sales Overview -->


    </div>
    <!-- End General Report -->
@endsection
