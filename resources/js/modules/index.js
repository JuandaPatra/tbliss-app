let base_url = window.location.origin;
let allData = []


export class DetailPages {
    selectCountry() {
        $('#countries').on('change',function(){
            let id = $(this).val()
            localStorage.setItem('value',id)
            
        })

    }
    // id:Number;
    searchButton() {
        $("#search-country").on("click", function () {
            let id = localStorage.getItem('value')
            
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
                    // console.log(data.children);
                    let result = data.children;
                    $(`.row-button`).empty();
                    $(`.loading-animation`).addClass("hidden");
                    // if(result = 0){
                    //     console.log('nol datanya')
                    // }
                    result.forEach(function (value) {
                        $(".row-button").append(
                            `
                            <button type="button" onClick="alert('${value.title}')" id="city-${value.id}" class="cityX w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2" data-pickCity="${value.id}">${value.title}</button>
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
                $(this).addClass('border-4 border-redTbliss')
                // console.log(id);
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
                        // console.log(data);
                        // let allData = [...allData, data]
                        // allData.push(data)
                        if(data.length===0){
                            console.log('kosong')
                        }else{
                            data.forEach(function(value){
                                allData.push(value)
                            })
    
                            let unique = allData.filter((obj,index)=>allData.findIndex((item) => item.title === obj.title) === index)
                            console.log(unique);
                            // console.log(allHashtag)
                            // console.log(allData);
                            $('.hashtag-row').empty()
                            unique.forEach(function (value) {
                                $(".hashtag-row").append(
                                    `
                                    <button class="bg-transparent border border-gray-300 rounded-full px-3 py-3 mr-2 my-1 text-gray-900 text-sm font-medium" data-hashtag=${value.id}>${value.title}</button>
                                    `
                                );
                            });                       
                        }
                    },
                });
            });

        });

    }
}
