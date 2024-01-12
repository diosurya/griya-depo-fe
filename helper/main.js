var baseUrl = 'http://127.0.0.1:8000/api/'
var token = localStorage.getItem('token');
var page = 1;
var pageSize = 5;

function formatDate(dateString) {
    const options = { year: 'numeric', month: 'short', day: 'numeric' };
    const formattedDate = new Date(dateString).toLocaleDateString('en-US', options);
    return formattedDate;
}

function toggleSelect2(selector, placeholder) {
    if ($(selector).is('input')) {
        // Convert to Select2
        var select2Options = {
            placeholder: '-- Select ' + placeholder + ' --',
            allowClear: true
        };
        $(selector).prop('readonly', false).removeClass('form-control-transparent').select2(select2Options);
    } else {
        // Revert to regular input
        $(selector).select2('destroy');
    }
}

function convertToSelect(selector, placeholder) {
    // Create a new <select> element
    var selectElement = $('<select>', {
        class: 'form-control',
        id: $(selector).attr('id')
    });

    // Add the default option
    selectElement.append($('<option>', {
        text: '-- Select ' + placeholder + ' --',
        selected: true
    }));

    // Replace the existing element with the new <select>
    $(selector).replaceWith(selectElement);
    $(selector).select2();
}

function convertToInput(selector) {
    // Create a new <input> element
    var inputElement = $('<input>', {
        type: 'text',
        readonly: true,
        class: 'form-control form-control-transparent',
        id: $(selector).attr('id'),
        value: $(selector).val()
    });

    // Replace the existing element with the new <input>
    $(selector).replaceWith(inputElement);
}

