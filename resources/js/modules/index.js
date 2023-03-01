let base_url = window.location.origin;

export class DetailPages {
    // id:Number;
    searchButton() {
        $("#search-country").on("click", function () {
            // $id = $("#countries option").filter(":selected").val();
            // id = $('#countries option:selected').val();
            $.ajax({
                type: "GET",
                url: `${base_url}/cities/6`,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                data: {
                    result: this.result,
                },
                error: function (xhr, error) {
                    if (xhr.status === 500) {
                        console.log(error);

                        $(e.target).html("Gagal Terkirim");

                        setTimeout(() => {
                            location.reload();
                        }, 2500);
                    }
                },
                success: function (data) {
                    // console.log(data.children);
                    let result = data.children;
                    $(`.row-button`).empty();
                    $(`.loading-animation`).addClass("hidden");
                    result.forEach(function (value) {
                        $(".row-button").append(
                            `
                            <button type="button" class="city w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2" data-pickCity="${value.id}">${value.title}</button>
                            `
                        );
                    });
                    // $(".row-button").append(
                    //     `
                    //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Seoul</button>
                    //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Busan</button>
                    //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Jeju Island</button>
                    //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Gyeongju</button>
                    //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Gangneung</button>
                    //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Jeonju</button>
                    //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Incheon</button>
                    //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Suwon</button>
                    //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Chuncheon</button>
                    //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Paju</button>
                    //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Inje</button>
                    //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Other</button>`
                    // );

                    // $(e.target).html("Terkirim");
                    // $(".quiz-wrapper").remove();
                    // $(".act-wrapper").remove();
                    // $(".modal-quiz").append(
                    //     `
                    //         <h3 class="quiz-reward">Anda mendapatkan ${
                    //             40 * data.totalTrue
                    //         } poin</h3>
                    //         <h3 class="total-trueQuiz">${
                    //             data.totalTrue
                    //         }/10 pertanyaan dijawab benar!</h3>
                    //     `
                    // );

                    // setTimeout(() => {
                    //     location.reload();
                    // }, 2500);
                },
            });
            // alert("tes search button");
            // $(`.row-button`).empty();
            // $(`.loading-animation`).addClass("hidden");
            // $(".row-button").append(
            //     `
            //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Seoul</button>
            //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Busan</button>
            //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Jeju Island</button>
            //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Gyeongju</button>
            //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Gangneung</button>
            //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Jeonju</button>
            //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Incheon</button>
            //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Suwon</button>
            //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Chuncheon</button>
            //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Paju</button>
            //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Inje</button>
            //         <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Other</button>`
            // );
        });
    }

    hashtag() {
        $(".city").each(function () {
            $(this).on("click", function (e) {
                let id = $(e.target).attr("pickCity");
                // $(this).addClass('bg-red')
                console.log(id);
            });
        });

        //     $('.city-8[type="button"]').on('click',function(){
        //         alert($(this).text());
        //    });
        // $(".city").on("click", function () {
        //     console.log("tes");
        // });
    }
}
