@extends('web.layouts.app')

@section('container')
@include('web.components.presentational.header')
<div class="flex items-center px-4 mb-4 bg-white justify-center">
    <h1 class=" font-bely text-footer text-[45px]">FAQ</h1>
</div>

<section>
    <div class="container-lg pb-[50px] lg:pb-[164px]">
        <div id="accordion-color" class="px-2 lg:px-[200px] " data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-800 text-footer dark:text-white">
            <h2 id="accordion-color-heading-1">
                <button type="button" class="flex items-center justify-between w-full py-3 px-2 font-medium text-left text-[18px]  text-gray-500 border-y-2  border-gray-200   dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
                    <span>Pertanyaan seputar tour </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus tw-text-cyan">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                <div class="py-3 px-2 text-[16px] font-light">
                    <ul class="list-decimal px-4">
                        <li>Jumlah peserta dalam 1 grup berapa orang kak ? Per grupnya minimal 25 orang kak</li>
                        <li>Nanti dari Jkt ada yg nemenin gak kak ? Iya dong ada. Untuk grup tour nanti dr Jkt per grup bakal di temenin 1 orang tour leader yaa</li>
                        <li>Kalo di sana tour guidenya pake bahasa apa kak ? Bahasa Indo dong, jadi nanti di sana per grup tour selain di temani tour leader dr Jkt, akan di temani juga sama 1 orang tour guide yg ramah2 dan cakep2 yg jago bahasa Indo lohh, akan berasa lebih akrab dehh selama trip</li>
                        <li>Nginepnya dimana ya kak ? Tour kami nginepnya pasti di hotel dan termasuk sarapan pagi yaa kak, bukan di apartemen atau guesthouse, supaya lebih nyaman, dan standard hotel nya minimal bintang 3 kak bisa juga bintang 4 kak</li>
                        <li>Selama di sana kita naik apa kak ? Naik bus full AC sesuai itinerary ya kak</li>
                        <li>Makannya gimana kak ? Makannya di restaurant lokal yg udah dipilih sesuai sama orang Indo ya kak, yg rasanya otentik dan enak. Dan kalo tour halal kita pasti ke restaurant yg halal no pork ya kak</li>
                    </ul>
                </div>
            </div>
            <h2 id="accordion-color-heading-2">
                <button type="button" class="flex items-center justify-between w-full py-3 px-2 font-medium text-left text-[18px]  text-gray-500 border-b-2  border-gray-200   dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
                    <span>Pertanyaan seputar keberangkatan
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus tw-text-cyan">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                <div class="py-3 px-2 font-light text-[16px]">
                    <ul class="list-decimal  px-4">
                        <li>Pas berangkat dr airport Jkt ada yg nemenin gak kak ? Ada dong, tim kami pasti bakal bantu proses cek in dan bagasi ya, ketemu tim kami di airport Jkt ya kak</li>
                        <li>Sebelum berangkat biasanya gimana kak ? Jangan khawatir sebelum berangkat kami akan buatkan wag ya, buat sarana komunikasi dan info persiapan keberangkatan dan selama trip kak, semua info tentang cuaca, things to brings, semua akan di share di wag kak</li>
                    </ul>
                </div>
            </div>
            <h2 id="accordion-color-heading-3">
                <button type="button" class="flex items-center justify-between w-full py-3 px-2 font-medium text-left text-[18px]  text-gray-500 border-b-2 border-gray-200   dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
                    <span>
                        Pertanyaan seputar visa Korea
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus tw-text-cyan">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                <div class="py-3 px-2 font-light text-[16px]">
                    <ul class="list-decimal px-4">
                        <li>Proses visa Korea tuh berapa lama sih kak ? Proses visa Korea itu biasanya paling cepat 9 hari kerja dr data diserahkan ke kedutaan kak, tapi semuanya tergantung kedutaan ya kak.
                        </li>
                        <li>Berapa sih kak minimal saldo yg harus ada di rekening ? Gak ada minimal saldo yg di syaratkan sama kedutaan sih kak, tapi berdasarkan pengalaman sih, sebaiknya ada saldo sejumlah dana yg cukup untuk biaya selama kakak stay di Korea aja kak, dan yg paling penting adalah rekening yg mutasinya aktif kak</li>
                        <li>Dokumen visa Korea itu apa aja ya kak ? Untuk detail dokumen yg dibutuhkan, bisa di klik di info dokumen visa ya kak. Dan yg paling penting adalah semua dokumen yg diminta oleh kedutaan lengkap ya kak</li>
                        <li>
                            Proses pengajuan visa ini seperti apa ya kak ? Proses pengajuan visa pasti kami bantu ya kak, dari reminder pengumpulan dokumen, konsultasi persiapan dokumen, dan pengecekan dokumen kakak semua kami bantu kak, dan hasilnya tergantung kedutaan ya kak
                        </li>
                    </ul>
                </div>
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