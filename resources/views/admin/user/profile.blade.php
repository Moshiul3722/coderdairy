@extends('layouts.dashboard')
@section('content')
    <!-- Sales Overview -->
    <div class="card">

        <!-- header -->
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6 ml-2">User Profile</h1>

            <div class="flex flex-row justify-center items-center">

            </div>

        </div>
        <!-- end header -->

        <!-- body -->

        <div class="px-6 py-0 bg-white border-b border-gray-200">

            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mt-6 flex">
                    <div class="flex-1 mr-2">
                        <label for="fullName" class="formLabel">Full Name</label>
                        <input type="text" name="fullName" id="fullName" placeholder="Name" class="formInput"
                            value="{{ $userInfo->name }}">
                        @error('name')
                            <p class="text-red-700">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex-1 ml-2">
                        <label for="userName" class="formLabel">User Name</label>
                        <input type="text" name="userName" id="userName" placeholder="User Name" class="formInput"
                            value="{{ $userInfo->userName }}">
                        @error('name')
                            <p class="text-red-700">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-6 flex">
                    <div class="flex-1">
                        <label for="email" class="formLabel">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="info@email.com" class="formInput"
                            value="{{ $userInfo->email }}" disabled>
                        @error('name')
                            <p class="text-red-700">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <div class="mt-6 flex">
                    <div class="mr-2">
                        <label for="password" class="formLabel">Password</label>
                        <input type="password" name="password" autocomplete="current-password" id="id_password"
                            placeholder="Password">
                        <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                        @error('name')
                            <p class="text-red-700">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="ml-2">
                        <label for="confirmPassword" class="formLabel">Confirm Password</label>

                        <input type="password" name="confirmPassword" autocomplete="current-password" id="id_confirm_password" onkeyup="passwordMatch()"
                            placeholder="Confirm Password">
                        <i class="far fa-eye" id="toggleConfirmPassword" style="margin-left: -30px; cursor: pointer;"></i>

                        @error('name')
                            <p class="text-red-700">{{ $message }}</p>
                        @enderror

                        <p id="pcon_msg"></p>
                    </div>

                     <div class="flex-1 ml-2 upload_image_preview">
                        <img class="ml-4 mt-4" style="width: 200px" src="{{ $userInfo->image['url'] }}" alt="" srcset="">
                    </div>
                </div>

                <div class="mt-6 flex">
                    <div class="flex-1 mr-2">
                        <label for="thumbnail" class="formLabel">Thumbnails</label>
                        <input type="file" name="thumbnail" id="thumbnail"
                            class="w-full border-2 border-dashed border-teal-600 py-10 px-10 text-center rounded-md">
                        @error('thumbnail')
                            <p class="text-red-700">{{ $message }}</p>
                        @enderror

                        <div class="mb-6 mt-6">
                            <button type="submit"
                                class="px-10 py-2 bg-teal-600 text-white rounded mt-3 uppercase text-base">Update</button>
                        </div>
                    </div>

                    <div class="flex-1 ml-2">
                    </div>
                </div>

            </form>
        </div>
    </div>
    </div>
    <!-- end body -->

    </div>
    <!-- end Sales Overview -->
@endsection

@section('scripts')
    <script>
        // Toggle password
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#id_password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });

        // Toggle Confirm Password
        const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
        const confirmPassword = document.querySelector('#id_confirm_password');

        toggleConfirmPassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPassword.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });

        // Password match check

        function passwordMatch() {
        const password = document.getElementById('id_password').value;
        const confirmPassword = document.getElementById('id_confirm_password').value;
const pass_match_msg = document.getElementById("pcon_msg");
            // alert(confirmPassword);

            if(password!=confirmPassword){
                pass_match_msg.innerHTML = '<span style="color: red">Passwords do not match.</span>';
            }else{
                pass_match_msg.innerHTML = '<span style="color: green">Passwords match.</span>';
            }

        }
    </script>
@endsection
