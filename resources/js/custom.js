"use strict";

window.addEventListener('openModal', event => {
    $('#' + event.detail.modal).modal('show')
});
window.addEventListener('closeModal', event => {
    $('#' + event.detail.modal).modal('hide')
});
window.setTimeout(function () {
    $(".alert").fadeTo(500, 0).slideUp(500, function () {
        $(this).remove();
    });
}, 2000);

window.addEventListener('success-izi', event => {
    iziToast.success({
        title: event.detail.ntitle,
        message: event.detail.nmessage,
        position: 'topRight'
    });
});
window.addEventListener('error-izi', event => {
    iziToast.error({
        title: event.detail.ntitle,
        message: event.detail.nmessage,
        position: 'topRight'
    });
});


window.addEventListener('confirm-delete', event => {

    let swal_config = {
        title: "Are you sure?",
        text: "Data will be moved to trash tab. If you wish, you can restore or permanently delete later!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }
    if (event.detail.for == 'force') {
        swal_config = {
            title: "Are you sure?",
            text: "Data will be deleted from our database. Once deleted, you will not be able to recover this data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        };
    }
    swal(swal_config)
        .then((willDelete) => {
            if (willDelete) {
                if (event.detail.mode === 'multiple') {
                    livewire.emit('deleteSelected')
                    $('select').val('');
                } else {
                    livewire.emit('delete')
                }


            } else {
                swal("You cancel the action, your data is save!");
            }
        });

});


$(".btnAction").on('click', function () {
    let id = $(this).data('id');
    let action = $(this).data('action');
    let mode = $(this).data('mode');
    let force = $(this).data('force');

    if (mode) {
        window.livewire.emit(action, mode, id);
    } else if (force) {
        window.livewire.emit(action, id, false, true);
    } else {
        window.livewire.emit(action, id);
    }
})

$('.nicescroll').niceScroll();
$(document).on('click', '.pull-bs-canvas-right, .pull-bs-canvas-left', function () {
    $('body').prepend('<div class="bs-canvas-overlay bg-dark position-fixed w-100 h-100"></div>');
    if ($(this).hasClass('pull-bs-canvas-right'))
        $('.bs-canvas-right').addClass('mr-0');
    else
        $('.bs-canvas-left').addClass('ml-0');
    return false;
});

$(document).on('click', '.bs-canvas-close, .bs-canvas-overlay', function () {
    var elm = $(this).hasClass('bs-canvas-close') ? $(this).closest('.bs-canvas') : $('.bs-canvas');
    elm.removeClass('mr-0 ml-0');
    $('.bs-canvas-overlay').remove();
    return false;
});
