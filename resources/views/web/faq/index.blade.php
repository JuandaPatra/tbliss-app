@extends('web.layouts.app')

@section('container')
@include('web.components.presentational.header')
<div class="flex items-center px-4 mb-4 bg-white lg:justify-center">
    <h1 class=" font-bely text-footer text-[30px]">FAQ</h1>
</div>

<section>
    <div class="container-lg pb-[50px] lg:pb-[164px]">
        <div id="accordion-color" class="px-[200px]" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-800 text-authbutton dark:text-white">
            <h2 id="accordion-color-heading-1">
                <button type="button" class="flex items-center justify-between w-full py-3 px-2 font-medium text-left text-[18px]  text-gray-500 border-y-2  border-gray-200   dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
                    <span>Payment & Security</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus tw-text-cyan">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                <div class="py-3 px-2 text-[16px] font-light">
                    <div class=" font-bold mb-2">When will my card be charged?</div>
                    <p>Some listings are "Request to Book" vs "Instant Book". For "Requests to Book" listings, your card will be charged when your request is confirmed (usually within 24 hours of your request being made). For "Instant Book" listings, your card will be charged at the time your booking is made.</p>
                    <div class="font-bold mb-2">Can I trust you with my card details?</div>
                    <p>We take security very seriously and protect your security in two ways. First, all pages on tbliss.com run on HTTPS which provides a secure, encrypted connection between your internet browser and tbliss.com. HTTPS is the global standard used to protect highly confidential online transactions such as online banking services. Second, we use Stripe, a global leading payment processing platform, for our payment services at tbliss.com. Stripe is certified to PCI Service Provider Level 1, which is the most stringent certification available in the payments industry worldwide. </p>
                </div>
            </div>
            <h2 id="accordion-color-heading-2">
                <button type="button" class="flex items-center justify-between w-full py-3 px-2 font-medium text-left text-[18px]  text-gray-500 border-b-2  border-gray-200   dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
                    <span>Changes and Cancellations</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus tw-text-cyan">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                <div class="py-3 px-2 font-light text-[16px]">
                    <div class=" font-bold mb-2">Covid Cancellation Policy</div>
                    <p>As travellers ourselves, we understand how stressful this pandemic has been when it comes to making plans. That is why we want to be fair to all in the event of sudden changes — to the local businesses, to the community, and to YOU.</p>
                    <div class="font-bold mb-2">Usual Cancellations and Changes</div>
                    <p>
                        Our local partners set their own cancellation and rescheduling policies. Please do look at the Option page to see what the specific policy is. Often, our local partners need to make payment for the logistics of your experience (e.g. payment for staff, for materials) upon confirmation of the experience, so they would be out of pocket in the event of any rescheduling or cancellation.
                    </p>
                </div>
            </div>
            <h2 id="accordion-color-heading-3">
                <button type="button" class="flex items-center justify-between w-full py-3 px-2 font-medium text-left text-[18px]  text-gray-500 border-b-2 border-gray-200   dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
                    <span>
                        Safety and Insurance
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus tw-text-cyan">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                <div class="py-3 px-2 font-light text-[16px]">
                    <div class=" font-bold mb-2">I'm travelling alone, will I be safe?</div>
                    <p>We don't list any places that we haven't been to ourselves or that we think might be unsafe. We also get to know each and every one of the local operators that we list on a personal basis so that we know that you're in good hands. As frequent solo travellers, we are super vigilant about our own safety when we travel, and we take that approach when crafting tbliss.com as well. If you have any specific concerns, please do contact us and we're happy to offer travel safety tips or answer any questions so that you can be prepared for your trip. </p>
                    <div class="font-bold mb-2">Do I need to get travel insurance?</div>
                    <p>We're big fans of travel insurance because it has given us peace of mind on many of our trips. Some of our local operators do have insurance recommendations for their specific activity so if you need any recommendations, please contact us and we can see if they have any recommendations for you. </p>
                </div>
            </div>
            <h2 id="accordion-color-heading-4">
                <button type="button" class="flex items-center justify-between w-full py-3 px-2 font-medium text-left text-[18px]  text-gray-500 border-b-2 border-gray-200   dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-4" aria-expanded="false" aria-controls="accordion-color-body-4">
                    <span>
                        Jobs and Internships
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus tw-text-cyan">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-4">
                <div class="py-3 px-2 font-light text-[16px]">
                    <div class=" font-bold mb-2">I love your mission, are you looking to hire?</div>
                    <p>Yes, we're always looking for great people to join our team, whether as an intern, a freelancer or a full-time member of the team. We know that there are so many people out there - like you! - who would love to combine their love of travel with their skills, whatever they may be. If you're a traveller who believes that travel can change the world, we would love to hear from you!</p>
                    <div class="font-bold mb-2">How do I apply?</div>
                    <p>It's really simple. Just write to us at <a style="font-size: 17px; color: #2ec4dd;" href="#">join@tbliss.com</a> and let us know what skills you would like to contribute to Tbliss, what you're hoping to learn and why you love difficult journeys. We can't wait to hear from you! </p>
                </div>
            </div>
            <h2 id="accordion-color-heading-5">
                <button type="button" class="flex items-center justify-between w-full py-3 px-2 font-medium text-left text-[18px]  text-gray-500 border-b-2 border-gray-200   dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-5" aria-expanded="false" aria-controls="accordion-color-body-5">
                    <span>
                    Press Inquiries
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus tw-text-cyan">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-5" class="hidden" aria-labelledby="accordion-color-heading-5">
                <div class="py-3 px-2 font-light text-[16px]">
                <p>Sure! For press inquiries, please contact <a style="font-size: 16px; color: #26527F;" href="#">press@tbliss.com</a>. We would love to speak to you and answer any questions you may have.</p>
                </div>
            </div>
        </div>


    </div>
</section>


@include('web.components.presentational.login')
@include('web.components.presentational.register')
@include('web.components.presentational.whatsapp')
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