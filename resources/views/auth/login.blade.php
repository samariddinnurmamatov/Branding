<x-layouts.auth>
    <div class="col-xl-4 col-md-5">
        <div class="card">
            <div class="card-body p-4">

                <div class="text-center w-75 mx-auto auth-logo mb-4">
                    <a href="#" class="logo-dark">
                        <span><img src="/front/wp-content/uploads/2023/02/logo.png" alt="imkon-plast" data-eio="l" style="width: 70px"></span>
                    </a>

                    <a href="#" class="logo-light">
                        <span><img src="/front/wp-content/uploads/2023/02/logo.png" alt="imkon-plast" data-eio="l" style="width: 70px"></span>
                    </a>
                </div>

                <form action="{{ route('authenticate') }}" method="post">
                    @csrf

                    <div class="form-group mb-3">
                        <label class="form-label" for="emailaddress">Email address</label>
                        <input class="form-control" type="email" id="emailaddress" required name="email" placeholder="Enter your email">
                        @error('email')
                        <label class="text-danger" for="">Ro'yhatdan o'tmagan email bilan kirish taqiqlanadi</label>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <a href="#" class="text-muted float-end"><small></small></a>
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control" type="password" name="password" required id="password" placeholder="Enter your password">
                        @error('password')
                        <label class="text-danger" for="">Parol xato</label>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <div class="">
                            <input class="form-check-input" type="checkbox" id="checkbox-signin" checked>
                            <label class="form-check-label ms-2" for="checkbox-signin">Remember me</label>
                        </div>
                    </div>

                    <div class="form-group mb-0 text-center">
                        <button class="btn btn-primary w-100" type="submit"> Log In </button>
                    </div>

                </form>
            </div> <!-- end card-body -->
        </div>
        <!-- end card -->

        <div class="row mt-3">
            <div class="col-12 text-center">
                <p class="text-white-50"> <a href="#" class="text-white-50 ms-1">Forgot your password?</a></p>
                {{--                <p class="text-white-50">Don't have an account? <a href="pages-register.html" class="text-white font-weight-medium ms-1">Sign Up</a></p>--}}
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div>
</x-layouts.auth>

