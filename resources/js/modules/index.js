let base_url = window.location.origin;
let host = window.location.host;
// console.log(host)
let allData = [];
let allHashtag = [];

let allCities = [];
let saveAllCities = [];

export class DetailPages {
    selectCountry() {
        $("#countries").on("change", function () {
            let id = $(this).val();
            localStorage.setItem("value", id);
        });
    }
    // id:Number;
    searchButton() {
        $("#search-country").on("click", function () {
            let id = localStorage.getItem("value");

            $.ajax({
                type: "GET",
                url: `${base_url}/cities/${id}`,
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
                    let result = data.children;
                    $(`.row-button`).empty();
                    $(`.loading-animation`).addClass("hidden");
                    result.forEach(function (value) {
                        $(".row-button").append(
                            `
                            <button type="button"  id="city-${value.id}" class="cityX w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2" data-pickCity="${value.id}">${value.title}</button>
                            `
                        );
                    });
                },
            });
        });
    }

    hashtag() {
        $(".row-button ").each(function () {
            $(this).on("click", ".cityX", function (e) {
                let id = $(e.target).attr("data-pickCity");

                $(this).addClass("border-4 border-redTbliss");
                saveAllCities.push(id);
                if (saveAllCities.length > 1) {
                    let uniqueArr = [...new Set(saveAllCities)];

                    saveAllCities = uniqueArr;
                }

                $.ajax({
                    type: "GET",
                    url: `${base_url}/search-hashtag/${id}`,
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
                        console.log(data);
                        // let allData = [...allData, data]
                        // allData.push(data)
                        if (data.length === 0) {
                            console.log("kosong");
                        } else {
                            data.forEach(function (value) {
                                // console.log(value)
                                allData.push(value);
                            });

                            // console.log(`allData = ${allData}`);

                            let unique = allData.filter(
                                (obj, index) =>
                                    allData.findIndex(
                                        (item) => item.title === obj.title
                                    ) === index
                            );
                            // console.log(unique);
                            // console.log(allHashtag)
                            // console.log(allData);
                            $(".hashtag-row").empty();
                            unique.forEach(function (value) {
                                $(".hashtag-row").append(
                                    `
                                    <button class="hashtagX bg-transparent border border-gray-300 rounded-full px-3 py-3 mr-2 my-1 text-gray-900 text-sm font-medium" data-hashtag=${value.id}>${value.title}</button>
                                    `
                                );
                            });
                        }
                    },
                });
            });
        });
    }

    saveHashtag() {
        $(".hashtag-row").each(function () {
            $(this).on("click", ".hashtagX", function (e) {
                let id = $(e.target).attr("data-hashtag");

                // let newHashtag =[]

                // allHashtag =newHashtag

                //    allHashtag.forEach(function(val, index){
                //         if(id === val){
                //             console.log(`tes value= ${val} index = ${index}`);
                //             allHashtag.slice(index,1)
                //         }
                //         else{
                //             allHashtag.push(id)
                //         }
                //     })

                allHashtag.push(id);
                $(this).toggleClass("border-4 border-redTbliss");

                console.log(allHashtag);
            });
        });
    }

    searchItinerary() {
        $("#searchTrip").on("click", function (e) {
            let post = [];
            if(post.length != 0){
                 post = allHashtag;
            }
            let cities = saveAllCities;

            console.log(post)

            $.ajax({
                type: "POST",
                url: `${base_url}/searchtrip`,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                data: {
                    post :post,
                    cities,
                },
                error: function (xhr, error) {
                    if (xhr.status === 500) {
                        console.log(error);

                        $(e.target).html("Gagal Terkirim");

                        // setTimeout(() => {
                        //     location.reload();
                        // }, 2500);
                    }
                },
                success: function (data) {
                    let result = data;
                    console.log(result);
                    $(".trip-search").empty();

                    for (let i = 0; i <= result.length; i++) {
                        let data = [];
                        allCities.push(data);

                        if (i % 2 === 0) {
                            result[i].place_trip_categories_cities.forEach(
                                function (item, index) {
                                    allCities[i].push(
                                        item.place_categories.title
                                    );
                                }
                            );
                            $(".trip-search").append(
                                ` <div class="flex flex-wrap flex-col-reverse md:flex-row">
                                <div class="basis-full lg:basis-1/2 lg:order-first">
                                    <div class="container-lg pl-[10%] lg:pl-[20%] mb-[40px] lg:mb-0">
                                        <h1 class="mb-2 pt-10 text-2xl font-bold tracking-tight text-[#414141] text-[28px]">
                                        ${result[i].title}
                                        </h1>
                                        <div class="flex justify-between  border-b-2 border-gray-200 w-[90%] pb-2">
                                            <div>
                                                <span class="text-[#6A6A6A] font-bold text-[14px] lg:text-[22px] mr-2 lg:mr-5">
                                                    ${result[i].day}H${
                                    result[i].night
                                }M
                                                </span>
                                                <span>
                                                    |
                                                </span>
                                                <span class="ml-1 lg:ml-3 text-[14px] lg:text-[16px]">
                                                ${result[i].date_from} - ${
                                    result[i].date_to 
                                }
                                
                                                </span>
                                            </div>
                                            <span class="ml-5 lg:ml-20 text-end text-[#FF5055] font-bold text-[14px] lg:text-[19px] ">
                                                Rp. ${result[
                                                    i
                                                ].price.toLocaleString()}
                                            </span>
                                        </div>
                                        <div class="text-[18px] pt-3 pb-3">
                                            <h1 class="font-bold uppercase city-${i}">
                                            ${result[i].destinationCities}
                                            </h1>
                                            ${result[i].hg}
                                            
                                        </div>
                                        <div class="flex justify-between w-full lg:w-[90%]">
                                            <a href="/detail-trip" type="button" class="text-white bg-[#FF5055] hover:bg-[#FF5055] focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-2 lg:px-5 py-2.5 text-center mr-2 mb-2 w-[210px]">Pesan Sekarang
                                                <img src="/images/details/arrow.png" alt="" class="h-[10px] w-[10px] inline-block ">
                                            </a>
                                            <div class="flex pt-[11px] lg:pt-[15px]">
                                                <h5 class="text-[#4A5CED] mr-3 text-[12px]">
                                                    ${result[i].seat} seats left
                                                </h5>
                                                <img src="/images/trip/seat.png" alt="" class="inline h-[12px]">
                                            </div>
                                            
                    
                                        </div>
                                    </div>
                                </div>
                                <div class="basis-full lg:basis-1/2 lg:order-last">
                                    <img src="${
                                        result[i].thumbnail
                                    }" alt="" class="h-[450px] w-full object-cover">
                                </div>
                            </div>
                                                `
                            );
                        } else {
                            $(".trip-search").append(
                                `<div class="flex flex-wrap">
                                <!-- batas antar gambar dan tujuan perjalanan -->
                                <div class="basis-full lg:basis-1/2">
                                    <img src="${
                                        result[i].thumbnail
                                    }" alt="" class="h-[450px] w-full object-cover">
                                </div>
                                <div class="basis-full lg:basis-1/2 bg-[#FAF8ED]">
                                    <div class="container-lg pl-[10%]  lg:pl-[20%] mb-[40px] lg:mb-0 ">
                                        <h1 class="mb-2 pt-10 text-2xl font-bold tracking-tight text-[#414141] text-[28px]">${
                                            result[i].title
                                        }</h1>
                                        <div class="flex justify-between  border-b-2 border-gray-200 w-[90%] pb-2">
                                            <div>
                                                <span class="text-[#6A6A6A] font-bold text-[14px] lg:text-[22px] mr-2 lg:mr-5">
                                                    ${result[i].day}H${
                                    result[i].night
                                }M
                                                </span>
                                                <span>
                                                    |
                                                </span>
                                                <span class="ml-1 lg:ml-3 text-[14px] lg:text-[16px]">
                                                    ${result[i].date_from} - ${
                                    result[i].date_to
                                }
                                                </span>
                                            </div>
                                            <span class="ml-5 lg:ml-20 text-end text-[#FF5055] font-bold text-[14px] lg:text-[19px] ">
                                                Rp. ${result[
                                                    i
                                                ].price.toLocaleString()}
                                            </span>
                                        </div>
                                        <div class="text-[18px] pt-3 pb-3">
                                            <h1 class="font-bold uppercase">
                                                
                                                ${result[i].destinationCities}
                                            </h1>
                                            ${result[i].hg}
                                            
                                        </div>
                                        <div class="flex justify-between w-full lg:w-[90%]">
                                            <a type="button" class="text-white bg-[#FF5055] hover:bg-[#FF5055] focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-2 lg:px-5 py-2.5 text-center mr-2 mb-2 w-[210px]">Pesan Sekarang
                                                <img src="/images/details/arrow.png" alt="" class="h-[10px] w-[10px] inline-block ">
                                            </a>
                                            <div class="flex pt-[11px] lg:pt-[15px]">
                                                <h5 class="text-[#4A5CED] mr-3 text-[12px]">
                                                    ${result[i].seat} seats left
                                                </h5>
                                                <img src="/images/trip/seat.png" alt="" class="inline h-[12px]">
                                            </div>
                    
                                        </div>
                                    </div>
                                </div>
                    
                            </div>`
                            );
                        }
                    }
                },
            });
        });
    }
}
