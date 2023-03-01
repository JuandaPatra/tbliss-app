import "./bootstrap";

import {DetailPages} from './modules'

// console.log("res");

(function(yourcode) {

    // The global jQuery object is passed as a parameter
    yourcode(jQuery, document);

    }(function($, document) {
        // The $ is now locally scoped
        $(function() {
            const Window = (window )


            // The DOM is ready!
            console.log('The DOM is ready!')

            /**
             * Home Modules
             */

            const detailPages = new DetailPages();
           detailPages.searchButton()
           detailPages.hashtag()
        });
        console.log('The DOM may not be ready!')

        // The rest of your code goes here!

    }
));

$(window).on("scroll", function () {
    if (window.scrollY > 50) {
        $(".header-top").removeClass("fixed");
        $(".header-top").removeClass("top-0");
        $("header.top").addClass("absolute");
        $("header.top").addClass("top-[-30px]");
    } else {
        $("header.top").removeClass("absolute");
        $("header.top").removeClass("top-[-30px]");
        $(".header-top").addClass("fixed");
        $(".header-top").addClass("top-0");
    }
});

$(".hamburger-menu").on("click", function () {
    // $('.sidenav').css("transform","translateX(-100%)");

    $(".sidenav").toggleClass("active");
    // $('body').addClass('overflow-y-hidden')
    $("html, body").addClass("overflow-y-hidden");
});

$(".sidenav__btn").on("click", function () {
    $("html ,body").removeClass("overflow-y-hidden");
    $(".sidenav").removeClass("active");
});

$(".back-dashboard").on("click", function () {
    $(".sidenav__dashboard").removeClass("hidden");
    $(".all").siblings().addClass("hidden");
});

$(".menu-destination").on("click", function () {
    let destinasi = $(this).data("hamburger");
    let findParent = $(` .${destinasi}`);
    findParent.removeClass("hidden");
    findParent.siblings().removeClass("hidden");
    findParent.siblings().addClass("hidden");
});

$(".dropdown-cls").each(function () {
    $(this).on("click", function () {
        $(this).toggleClass("active");
        $(this).siblings().removeClass("active");
        let dataDropdown = $(this).data("drop");
        $(".dropdownMenu").each(function () {
            $(this).toggleClass("hidden");
            // $('.dropdownMenu').removeClass('hidden')
            $(`.${dataDropdown}`).siblings().addClass("hidden");
        });
    });
});


// $('.city-7').on('click', function(){
//     console.log(
//         'coba'
//     )
// })