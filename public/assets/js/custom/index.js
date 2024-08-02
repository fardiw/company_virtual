$(document).ready(function () {
    var csrf_token = $("meta[name='csrf-token']").attr("content")

    //first time add dashboard !
    send_ajax_get_page("/get_page", "post", {page_id: 1})

    $(document).on("click", ".dashboard", function (event) {
        event.preventDefault();
        var spinner = `<span class="spinner-grow loading justify-content-center align-content-center" role="status" aria-hidden="false"></span>`
        $('.container-popup').html(spinner);
        $('#page_section').html(spinner);
        send_ajax_get_page("/get_page", "post", {page_id: 1})

    });
    $(document).on("click", ".my_details", function (event) {
        event.preventDefault();
        var spinner = `<span class="spinner-grow loading justify-content-center align-content-center" role="status" aria-hidden="false"></span>`
        $('.container-popup').html(spinner);
        $('#page_section').html(spinner);
        send_ajax_get_page("/get_page", "post", {page_id: 2})

    });
    $(document).on("click", ".search_sidebar", function (event) {
        event.preventDefault();
        var spinner = `<span class="spinner-grow loading justify-content-center align-content-center" role="status" aria-hidden="false"></span>`
        $('.container-popup').html(spinner);
        $('#page_section').html(spinner);
        send_ajax_get_page("/get_page", "post", {page_id: 3})

    });
    $(document).on("click", ".message_sidebar", function (event) {
        event.preventDefault();
        var spinner = `<span class="spinner-grow loading justify-content-center align-content-center" role="status" aria-hidden="false"></span>`
        $('.container-popup').html(spinner);
        $('#page_section').html(spinner);
        send_ajax_get_page("/get_page", "post", {page_id: 4})

    });
    $(document).on("click", ".gifts", function (event) {
        event.preventDefault();
        var spinner = `<span class="spinner-grow loading justify-content-center align-content-center" role="status" aria-hidden="false"></span>`
        $('.container-popup').html(spinner);
        $('#page_section').html(spinner);
        send_ajax_get_page("/get_page", "post", {page_id: 5})

    });

    function set_up_swiper(){
        // swiper
        var messagesswiper = new Swiper(".messagesswiper", {
            autoplay: true,
            slidesPerView: 3,
            spaceBetween: 30,
            breakpoints: {
                576: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 4,
                },
                992: {
                    slidesPerView: 4,
                },
                1200: {
                    slidesPerView: 4,
                }
            },
        });
    }




    function send_ajax_get_page(url, method, data) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": csrf_token
            }
        })

        $.ajax({
            type: method, url: url, data: data,

            success: function (response) {
                view = response['view']
                $('#page_section').html(view)
                set_up_swiper();

            },

            error: function (error) {
                $('#page_section').html(`<div class="bold text text-danger alert alert-warning mt-5">خطایی رخ داده است لطفا صفحه را مجددا بارگیری کنید !</div>`)
            },

        })


    }



})
