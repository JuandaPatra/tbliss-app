@extends('web.layouts.app')

@section('container')
@include('web.components.presentational.header')
<div class="flex items-center px-4 bg-white justify-center">
  <h1 class=" font-bely text-footer text-[45px]">Register</h1>
</div>
<div class="flex items-center h-[680px] px-4 py-2 bg-white lg:justify-center">
  <div class="flex flex-col overflow-hidden bg-white  max md:flex-row md:flex-1 lg:max-w-screen-md">
    <div class="p-5 bg-white md:flex-1">
      @if ($errors->any())
      <div class="alert alert-danger">
        <p>Error ! Pleasse check your form again</p>
      </div>
      @endif
      <form action="{{route('signup.store')}}" method="post" class="flex flex-col space-y-5">
        @csrf
        <div class="relative mb-6">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user tw-stroke-2">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <input type="text" id="input-group-1" class="bg-gray-50 border  text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name')  errorForm @enderror" placeholder="Name" name="name" value="{{ old('name') }}">
          @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="relative mb-6">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
              <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
          </div>
          <input type="email" id="input-group-2" class="bg-gray-50 border  text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('email')  errorForm @enderror" placeholder="Email" name="email" value="{{ old('email') }}">
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>Email Already Exist</strong>
          </span>
          @enderror
        </div>
        <div class="relative mb-6">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
            </svg>
          </div>
          <input type="password" id="input-group-3" class="bg-gray-50 border  text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('password')  errorForm @enderror" placeholder="Password" name="password"
          value="{{ old('password') }}">
          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>Please check your password</strong>
          </span>
          @enderror
        </div>
        <div class="relative mb-6">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
            </svg>
          </div>
          <input type="password" id="input-group-4" class="bg-gray-50 border  text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('password')  errorForm @enderror" placeholder="Confirm password" name="confirmPassword" value="{{ old('confirmPassword') }}">
          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>Please check your password</strong>
          </span>
          @enderror
        </div>
        <div class="flex justify-between">
          <div class="flex items-center space-x-2">
            <input type="checkbox" id="remember" class="w-4 h-4 transition duration-300 focus:ring-2 focus:ring-offset-0 focus:outline-none focus:ring-authbutton text-authbutton" checked="checked" />
            <label class="form-check-label" for="user_receive_newletters">I would like to receive amazing travel inspirations, tips and latest deals via email.</label>
          </div>

        </div>
        <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
        <div>
          <button type="submit" class="w-full px-4 py-2 text-lg font-semibold text-white transition-colors duration-300 bg-authbutton rounded-md shadow hover:bg-authbutton focus:outline-none focus:ring-blue-200 focus:ring-4">
            Sign Up
          </button>
        </div>
        <div class="flex flex-col space-y-4">
          <div class="pt-3 tw-border-t tw-border-grey-lighter tw-border-solid text-center">
            Already part of our community?
            <a href="{{route('signin.index')}}" class=" text-authbutton">Login</a>
            here
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

@include('web.components.presentational.footer')
@endsection

@push('javascript-internal')
<script>
  $(document).ready(function() {

    let base_url = window.location.origin;

    $('#countries').on('change', function() {
      // alert($(this).val())
      let id = $(this).val()
      $.ajax({
        type: 'POST',
        url: `${base_url}/selectcities/${id}`,
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        error: function(xhr, error) {
          if (xhr.status === 500) {
            console.log(
              'tes gagal'
            )
          }
        },
        success: (response) => {
          $('#cities').empty();
          $('#cities').append(`<option selected>Pilih Kota/Kabupaten</option>`)
          $.each(response, function(index, item) {
            $('#cities').append(`<option value="${item.id}">${item.name}</option>`)
          })
        }
      })
    })

    $('#password, #repassword').on('keyup', function() {
      if ($('#password').val() == $('#repassword').val()) {
        $('#message').html('Password Match').css('color', 'green');
      } else
        $('#message').html('Password not Match').css('color', 'red');
    });



  });
</script>
@endpush