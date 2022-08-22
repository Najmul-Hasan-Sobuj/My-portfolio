/* ------------------------------------------------------------------------------
 *
 *  # Custom JS code
 *
 *  Place here all your custom js. Make sure it's loaded after app.js
 *
 * ---------------------------------------------------------------------------- */

//  ### image preview before upload
function previewFile(input) {
    var file = $("input[type=file]").get(0).files[0];

    if (file) {
        var reader = new FileReader();

        reader.onload = function () {
            $("#previewImg").attr("src", reader.result);
        };

        reader.readAsDataURL(file);
    }
}
// ----------------------------------------------------------------------------------- end

//  ### globaly delete data with sweet alert message
$(document).on("click", ".data-list .delete", function (e) {
    e.preventDefault();
    var deleteLinkUrl = $(this).attr("delete-link");
    var dataType = $(this).attr("data-type") ?
        $(this).attr("data-type") :
        "html";
    var csrf = $(this).find("input[name='_token']").val();

    swalInit.fire({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",

        preConfirm: function () {
            $.ajax({
                url: deleteLinkUrl,
                type: "POST",
                data: {
                    _token: csrf,
                    _method: "DELETE"
                },
                dataType: dataType,
                success: function (data) {
                    var dataError =
                        dataType == "html" ? data.trim() : data.error;
                    if (typeof dataError !== typeof undefined && dataError) {
                        swalInit.fire({
                            title: "Oops...",
                            text: dataError,
                            icon: "error",
                            allowEscapeKey: false,
                            allowEnterKey: false,
                        });
                    } else {
                        swalInit.fire({
                            title: "Deleted!",
                            text: "This data has been deleted!",
                            confirmButtonColor: "#66BB6A",
                            type: "success",
                            preConfirm: function () {
                                location.reload();
                            },
                        });
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    swalInit.fire({
                        title: "Oops...",
                        text: dataError,
                        icon: "error",
                        allowEscapeKey: false,
                        allowEnterKey: false,
                    });
                },
            });
        },
    });
});
// Defaults sweet alert js
var swalInit = swal.mixin({
    buttonsStyling: false,
    customClass: {
        confirmButton: "btn btn-primary",
        cancelButton: "btn btn-light",
        denyButton: "btn btn-light",
        input: "form-control",
    },
});
// ----------------------------------------------------------------------------------- end

// submit button disable when i click cancel
(function () {
    $('.from-prevent-multiple-submits').on('submit', function () {
        $('.from-prevent-multiple-submits').attr('disabled', 'true');
    })
})();
// ----------------------------------------------------------------------------------- end
