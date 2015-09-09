$.validator.methods.smartCaptcha = function (value, element, param) {
    return value == param;
};
$(".form-validacion").validate({
    errorClass: "state-error",
    validClass: "state-success",
    errorElement: "em",
    
    highlight: function (element, errorClass, validClass) {
        $(element).closest('.field').addClass(errorClass).removeClass(validClass);
    },
    unhighlight: function (element, errorClass, validClass) {
        $(element).closest('.field').removeClass(errorClass).addClass(validClass);
    },
    errorPlacement: function (error, element) {
        if (element.is(":radio") || element.is(":checkbox")) {
            element.closest('.option-group').after(error);
        } else {
            error.insertAfter(element.parent());
        }
    }
});
// Cache several DOM elements
