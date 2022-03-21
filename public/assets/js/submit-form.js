function submitForm(selector, errorsCallback = null) {
    $(selector).on("submit", function(event) {
        event.preventDefault();

        //construct request details
        let data = new FormData(this);
        let url = $(this).attr("action");
        let type = $(this).attr("method");
        $.ajax({
            url: url,
            data: data,
            type: type,
            contentType: false,
            processData: false,
            success: function(result, status, xhr) {
                showMessage(xhr.responseJSON.message);
            },

            error: function(xhr, status, error) {
                $(selector + " " + "[element-name]").addClass("is-valid valid-status");
                $(selector + " " + "[element-name]").removeClass(
                    "is-invalid invalid-status"
                );
                $(selector + " " + ".valid-feedback").show();
                $(selector + " " + ".invalid-feedback").hide();
                let errors = xhr.responseJSON.errors;

                if (errorsCallback) {
                    errorsCallback(errors);
                }

                for (let key in errors) {
                    let error_message = errors[key][0];
                    let input_selector = selector + ' [element-name="' + key + '"]';
                    let parent_element = $(input_selector).parent();

                    $(input_selector).addClass("is-invalid invalid-status");
                    parent_element.find(".valid-feedback").hide();
                    parent_element.find(".invalid-feedback").show();
                    parent_element.find(".invalid-feedback").text(error_message);
                }
            },
            complete: function(xhr, status) {

                if (xhr.status == 302) {


                    window.location.href = xhr.responseJSON.redirectUrl;

                }
            }

        });
    });
}

function showMessage(message) {
    localStorage.setItem("success", message);

    window.location.reload().promise().done(function(arg1) {

        if (localStorage.getItem("success")) {
            Swal.fire({
                icon: "success",
                title: localStorage.getItem("success"),
                showConfirmButton: false,
                timer: 2000,
            });

            localStorage.clear();
        }
    });
}