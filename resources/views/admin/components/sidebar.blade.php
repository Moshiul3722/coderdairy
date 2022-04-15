    <!-- start sidebar -->
    <div id="sideBar"
        class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


        <!-- sidebar content -->
        <div class="flex flex-col">

            <!-- sidebar toggle -->
            <div class="text-right hidden md:block mb-4">
                <button id="sideBarHideBtn">
                    <i class="fad fa-times-circle"></i>
                </button>
            </div>
            <!-- end sidebar toggle -->

            <!-- link -->
            <a href="{{route('dashboard')}}"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500 ">
                <i class="fad fa-chart-pie text-xs mr-2"></i>
                Dashboard
            </a>
            <!-- end link -->

            <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">homes</p>

            <!-- link -->
            <a href="{{ route('problem.index') }}"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500 {{ request()->routeIs('problem.*') ? 'text-teal-600' : '' }}">
                <i class="fad fa-envelope-open-text text-xs mr-2"></i>
                Problems
            </a>
            <!-- end link -->

            <!-- link -->
            <a href="#"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-comments text-xs mr-2"></i>
                Categories
            </a>
            <!-- end link -->

            <!-- link -->
            <a href="#"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-shield-check text-xs mr-2"></i>
                Activity
            </a>
            <!-- end link -->

            <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Problems</p>

            <!-- link -->
            <a href="./email.html"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-envelope-open-text text-xs mr-2"></i>
                Add
            </a>
            <!-- end link -->

            <!-- link -->
            <a href="#"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-comments text-xs mr-2"></i>
                Edit
            </a>
            <!-- end link -->

            <!-- link -->
            <a href="#"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-shield-check text-xs mr-2"></i>
                Delete
            </a>
            <!-- end link -->









        </div>
        <!-- end sidebar content -->

    </div>
    <!-- end sidbar -->