@extends('layouts.app')
@section('title')
Login Admin
@endsection
@section('content')
 

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="index.html" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                            </span>
                            <span class="app-brand-text demo text-body fw-bolder text-uppercase">T'Bliss CMS</span>
                        </a>
                    </div>
                    <form  class="mb-3" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="username" name="email" placeholder="" autofocus required />
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Password</label>
                                <a href="auth-forgot-password-basic.html">
                                    <small>Forgot Password?</small>
                                </a>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" required />
                                <span class="input-group-text cursor-pointer password-hide"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                       
                        <div class="mb-3">
                            <!-- <button class="btn btn-primary d-grid w-100" type="submit">{{ __('Login') }}</button> -->
                            <button type="submit" class="btn btn-primary d-grid w-100">
                                {{ __('Login') }}
                            </button>

                        </div>
                    </form>
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>
@endsection

@push('javascript-external')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@endpush



@push('javascript-internal')
<script>
  $(document).ready(function() {

    $('.password-hide').on('click', function(){
        alert('tes');
    });
  });
</script>
@endpush
