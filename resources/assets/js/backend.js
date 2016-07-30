jQuery(document).ready(function($) {
    if (typeof flash_message !== 'undefined' && flash_message) {
        var e = JSON.parse(flash_message);
        toastr.options = {
            "closeButton": true,
            "debug": true,
            "progressBar": false,
            "preventDuplicates": true,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "400",
            "hideDuration": "600",
            "timeOut": "2000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        e.code == 0 ? toastr.success(e.message) : toastr.error(e.message);
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.slim-scroll').slimscroll({
        height: 300
    });
    $('.update-notify').on('click',function(e) { 
        e.preventDefault();
        var $this = $(this);
        $.post(laroute.route('backend.notification.read',{notification:$this.data('id') ,_method: 'PATCH'}), function () {
            window.location.replace($this.attr('href'));
        });
    });
});

function alertDestroy(route) {
    swal({
        title: "Bạn chắc chắn chứ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Chắc chắn!",
        cancelButtonText: "Hủy",
        closeOnConfirm: false
    }, function() {
        $.post(route, {_method: 'DELETE'}, function (data) {
            window.location.reload();
        });
    });
};

function select2Init(route, method, selector) {
    var route = route || null;
    var selector = selector || $('[name="tags[]"]');
    var method = method || 'GET';
    var options = $.extend(true, {
        tags: true,
        escapeMarkup: function (markup) { return markup; },
        minimumInputLength: 1,
        templateResult: function formatResult (obj) {
        if (obj.loading) return obj.text;
            return '<div><strong>'+(obj.name || obj.text)+'</strong></div>';
        },
        templateSelection: function formatSelection (obj) {
            return obj.name || obj.text;
        },
        ajax: {
            url: route,
            dataType: 'json',
            delay: 250,
            method: method,
            data: function (params) {
                return {
                    q: params.term,
                    page: params.page
                }
        },
        processResults: function (data, params) {
            params.page = data.current_page || 1;
            return {
                results: data.data,
                pagination: {
                    more: data.to < data.total
                }
            };
        }
      }
    }, options);
    selector.select2(options);
}

function treeInit(items, options, drag, selector) {
    var items = items || [];
    var options = options || {};
    var drag = drag || false;
    var selector = selector || '#list';
    var defaultOptions = {
        closedIcon: $('<i class="fa fa-plus"></i>'),
        openedIcon: $('<i class="fa fa-minus"></i>'),
        data: items,
        dragAndDrop:drag,
        autoOpen: false,
        selectable: false,
    };
    options = $.extend(defaultOptions, options);
    $(selector).tree(options);

}

function renderTable(route, columns, options, callback, selector) {
    var route = route || null;
    var columns = columns || [];
    var options = options || {};
    var selector = selector || "#table-index";
    var defaultOptions = {
        processing: true,
        serverSide: true,
        ajax: route,
        sorting: [0,'desc'],
        columns: columns,
        language: {
            search:"_INPUT_",
            lengthMenu: "_MENU_",
        }
    };
    options = $.extend(defaultOptions, options);
    if (typeof callback === 'function') setTimeout(callback, 500);
    if (route) {
        $(selector).DataTable(options);
        $('.dataTables_filter input').attr('placeholder','Search...');
        $('.dataTables_length').parent().addClass("col-xs-6");
        $('.dataTables_filter').parent().addClass("col-xs-6");
    } else {
        return;
    }
}

function sendImage(file, url, $element, callback) {
    var callback = callback || null;
    var  data = new FormData();
    data.append("image", file);
    $.ajax({
        data: data,
        type: "POST",
        url: url,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {
            $element.summernote("insertImage", data.url);
        },
        error: function(xhr, textStatus, error) {
            alert('Đã có lỗi xảy ra..! Kiểm tra lại file ảnh của bạn.');
        }
    });
    if (callback) {
        callback.apply(this);
    }
}