@extends('web.layouts.app')

@section('container')
@include('web.components.presentational.header')
<section>
    <div class="relative">
        <div class="banner-slider">
            <div class="relative ">
                <div class="absolute top-1/2 lg:top-[170px] left-0 right-0 text-white">
                    <div class="flex justify-center ">
                        <h1 class="text-center text-[30px] lg:text-[60px] w-[710px] xl:w-[700px]  font-bely">
                            Salam Kenal Kak !
                        </h1>
                    </div>
                </div>
                <picture>
                    <source media="(min-width:1000px)" srcset="{{ asset('images/title/cerita-kami.jpg') }}">
                    <source media="(min-width:320px)" srcset="{{ asset('images/title/banner-mobile-2.jpg') }}">
                    <img src="{{ asset('images/title/cerita-kami.jpg') }}" alt="Flowers" class="w-full lg:h-[424px] object-cover">
                </picture>
            </div>

        </div>


    </div>
</section>

<section class="bg-yellowTbliss">
    <div class="container-lg max-w-3xl pb-[50px] lg:pb-[164px] py-5 px-4 lg:px-0">
        <h2 class="mb-5 pt-3 text-center text-[25px] lg:text-[28px] font-bely">
            t'Bliss terbentuk dari semangat berwisata, jiwa yang ingin selalu tertarik untuk mengenal budaya baru dan selalu menghargai pengalaman menyenangkan
        </h2>
        <p class="mb-5 text-[16px] lg:text-[18px] font-interRegular">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed enim mi. Nam posuere vel massa ac ultricies. Nullam sodales diam vitae libero pharetra, in mattis neque iaculis. Vestibulum vitae scelerisque est. Etiam consequat auctor sagittis. Nam eu mi ac justo suscipit interdum at maximus metus. Pellentesque pretium mi ipsum, eu congue diam vestibulum ac. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed enim mi. Nam posuere vel massa ac ultricies. Nullam sodales diam vitae libero pharetra, in mattis neque iaculis. Vestibulum vitae scelerisque est. Etiam consequat auctor sagittis. Nam eu mi ac justo suscipit interdum at maximus metus. Pellentesque pretium mi ipsum, eu congue diam vestibulum ac.

        </p>
        <p class="mb-5 text-[16px] lg:text-[18px] font-interRegular">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed enim mi. Nam posuere vel massa ac ultricies. Nullam sodales diam vitae libero pharetra, in mattis neque iaculis. Vestibulum vitae scelerisque est. Etiam consequat auctor sagittis. Nam eu mi ac justo suscipit interdum at maximus metus. Pellentesque pretium mi ipsum, eu congue diam vestibulum ac.
        </p>

    </div>
</section>
<section>
    <div class="container max-w-3xl pt-5 px-4 lg:px-0">
        <h2 class="mb-5 mb-md-6 pt-3 text-center text-[25px] lg:text-[28px] font-interRegular font-semibold">We found out that over-80% of small local tourism businesses are still offline</h2>
        <div class="mb-3 pt-3 text-[16px] lg:text-[18px] font-interRegular ">
            Most of these local businesses are small mom-and-pop shops that don’t have the time or resources to set up their own website or online payment system. They prefer to be out kayaking, trekking and creating amazing experiences.
        </div>
        <div class="mb-3 pt-3 text-[16px] lg:text-[18px] font-interRegular ">So we decided to go to them instead! We go from place to place, find experiences and local businesses we love,
            <a class="tw-underline tw-text-black hover:tw-text-black" href="https://www.seeksophie.com/tried-and-tested">try them for ourselves</a> and then list them on Seek Sophie for other adventurers to find.
        </div>
    </div>
    <div class="container-lg my-8 px-5">
        <div class="row align-items-center">
            <div class="hidden lg:block col-md-7">
                <img class=" h-[400px] w-full object-cover" src="https://images.unsplash.com/photo-1530789253388-582c481c54b0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80">
            </div>

            <div class="col-md-5 px-0 px-md-15">
                <div class="relative pb-[75%] h-0">
                    <img class=" absolute t-0 l-0 w-full h-full" src="https://images.unsplash.com/photo-1552733407-5d5c46c3bb3b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=480&q=80">
                </div>

                <div class=" mt-3">
                    <img class="h-[300px] w-full object-cover" src="https://images.unsplash.com/photo-1517154421773-0529f29ea451?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80">
                </div>
            </div>
        </div>
    </div>
    <div class="container max-w-3xl pt-5 px-4 lg:px-0">
        <div class="mb-3 pt-3 text-[16px]  lg:text-[18px] font-interRegular ">
            Since 2018, your trips have supported thousands of <a class="tw-underline tw-text-black hover:tw-text-black" href="/our-quality">impact-driven</a>, small local businesses. These local businesses are often the bedrock of their local communities - they provide jobs, lead conservation efforts and create a thriving, creative ecosystem. By supporting them, you are also supporting their local communities.
        </div>
        <div class="mb-3 pt-3 text-[16px]  lg:text-[18px] font-interRegular ">
            When Covid happened, it decimated the tourism industry and the small local businesses we worked with have been among the hardest hit. But your support goes a long way in helping them recover.
        </div>
        <div class="mb-3 pt-3 text-[16px]  lg:text-[18px] font-interRegular ">
            We’ve been encouraged by so many who chose to take credits instead of refunds, and by so many who are choosing to explore locally to support these incredible local businesses. Thank you from the bottom of our hearts.
        </div>
    </div>

    <div class="container-lg px-5 mb-[80px]">
        <div class="row align-items-center">
            <div class="col-6 col-md-5 pl-0 pl-md-15">
                <div class=" relative h-0 pb-[100%]">
                    <img class="absolute top-0 left-0 w-full h-full" src="https://images.unsplash.com/photo-1570191913384-7b4ff11716e7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80">
                </div>
            </div>

            <div class="col-6 col-md-7 pr-0 pr-md-15">
                <div>
                    <img class="h-[445px] w-full object-cover" src="https://images.unsplash.com/photo-1557018250-c58928b114a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1331&q=80">
                </div>
            </div>
        </div>
    </div>

    <div class="container max-w-3xl pt-5 px-4 lg:px-0">
        <h2 class="mb-5 mb-md-6 pt-3 text-center text-[26px] lg:text-[28px] font-interRegular font-semibold">As travellers, we want to leave places better than we found them</h2>
        <div class="mb-3 pt-3 text-[16px]  lg:text-[18px] font-interRegular ">
            For us that starts with supporting local businesses and communities, but it doesn’t end there.
            From day one we have also made you a promise to offset the carbon emission of all experiences booked on Seek Sophie, so all your trips will be carbon neutral.
        </div>
        <div class="mb-3 pt-3 text-[16px] lg:text-[18px] font-interRegular ">
            Since 2018, you have helped to offset over a million tonnes of carbon - that’s amazing! Whether you have booked a yacht trip in Singapore,
            island hopping in Komodo or a leopard safari in Sri Lanka, your trip has left a positive footprint on both the local communities and the environment. Thank you for supporting Positive Footprint travel.
        </div>
        <h2 class="mb-5 mb-md-6 pt-3 text-center text-[25px] lg:text-[28px] font-interRegular font-semibold">Together, we can create<br>#TravelThatMakesLifeBetter </h2>
    </div>
</section>



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