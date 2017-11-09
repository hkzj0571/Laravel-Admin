var Laradmin = {
    init: function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'Authorization': $('meta[name="api_token"]').attr('content')
            }
        })

        $('#sidebar .sub-menu > a').on('click', function () {
            var last = $('.sub-menu.open', $('#sidebar'))
            last.removeClass("open")
            $('.arrow', last).removeClass("open")
            $('.sub', last).slideUp(200)
            var sub = $(this).next()
            if (sub.is(":visible")) {
                $('.arrow', $(this)).removeClass("open")
                $(this).parent().removeClass("open")
                sub.slideUp(200)
            } else {
                $('.arrow', $(this)).addClass("open")
                $(this).parent().addClass("open")
                sub.slideDown(200)
            }
        })

        $(function () {
            function responsiveView() {
                var wSize = $(window).width()
                if (wSize <= 768) {
                    $('#container').addClass('sidebar-close')
                    $('#sidebar > ul').hide()
                }

                if (wSize > 768) {
                    $('#container').removeClass('sidebar-close')
                    $('#sidebar > ul').show()
                }
            }

            $(window).on('load', responsiveView)
            $(window).on('resize', responsiveView)
        })

        $('.reorder').click(function () {
            if ($('#sidebar > ul').is(":visible") === true) {
                $('#main-content').css({
                    'margin-left': '0px'
                })
                $('#sidebar').css({
                    'margin-left': '-180px'
                })
                $('#sidebar > ul').hide()
                $("#container").addClass("sidebar-closed")
            } else {
                $('#main-content').css({
                    'margin-left': '180px'
                })
                $('#sidebar > ul').show()
                $('#sidebar').css({
                    'margin-left': '0'
                })
                $("#container").removeClass("sidebar-closed")
            }
        })

        $('.widget .tools .icon-chevron-down').click(function () {
            var el = $(this).parents(".widget").children(".widget-body")
            if ($(this).hasClass("icon-chevron-down")) {
                $(this).removeClass("icon-chevron-down").addClass("icon-chevron-up")
                el.slideUp(200)
            } else {
                $(this).removeClass("icon-chevron-up").addClass("icon-chevron-down")
                el.slideDown(200)
            }
        })

        $('.widget .tools .icon-remove').click(function () {
            $(this).parents(".widget").parent().remove()
        })

        $('.del_form').on('submit', function () {
            event.preventDefault()
            var form = $(this)
            var action = form.attr('action')
            if (action) {
                iziToast.question({
                    timeout: 10000,
                    close: false,
                    overlay: true,
                    backgroundColor: '#FF4040',
                    theme: 'dark',
                    progressBarColor: '#fff',
                    toastOnce: true,
                    id: 'Notice_Delete',
                    zindex: 999,
                    title: 'Notice',
                    message: 'Are you sure you want to delete?',
                    position: 'center',
                    buttons: [
                        ['<button><b>YES</b></button>', function (instance, toast) {
                            instance.hide(toast, {transitionOut: 'fadeOut'}, 'button')

                            $.ajax({
                                type: 'POST',
                                url: action,
                                data: form.serialize(),
                                success: respond => {
                                    if (!respond.status) return errored(respond.message)
                                    succeed('Deleted successful！',
                                        event => {
                                            to(window.location.href)
                                        })
                                }
                            })
                        }, true],
                        ['<button>NO</button>', function (instance, toast) {
                            instance.hide(toast, {transitionOut: 'fadeOut'}, 'button')
                        }]
                    ]
                })
            }
        })

        $('.tooltips').tooltip()

        $('.popovers').popover()


        window.errored = (message, callback = null) => iziToast.error({
            theme: 'dark',
            progressBarColor: '#fff',
            backgroundColor: '#FF4040',
            transitionIn: 'fadeInDown',
            message: message,
            zindex: 9999999999999,
            onClosed: callback
        })

        window.succeed = (message, callback = null) => iziToast.success({
            theme: 'dark',
            progressBarColor: '#fff',
            transitionIn: 'fadeInDown',
            message: message,
            backgroundColor: 'rgb(0, 175, 102)',
            zindex: 9999999999999,
            onClosed: callback
        })

        window.to = url => {
            $('#Anchor').attr('href', url).click()
        }

        $('#sidebar > ul > li > a').each(function () {
            if ($(this).attr('href') == window.location.href) {
                $(this).parent().addClass('active').parent().parent().addClass('active')
            }
        })

        $('#sidebar > ul > li > ul > li > a').each(function () {
            if ($(this).attr('href') == window.location.href) {
                $(this).parent().addClass('active').parent().parent().addClass('active')
            }
        })
    }
}

$(document).ready(function () {
    console.log('Welcome to use Laradmin！ ^ ^')
    Laradmin.init()
    $(document).pjax('a:not(a[target="_blank"])', '#app', {timeout: 1600, maxCacheLength: 500})
    $(document).on('pjax:start', function () {
        NProgress.start()
    })
    $(document).on('pjax:end', function () {
        NProgress.done()
        Laradmin.init()
    })
})