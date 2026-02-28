/*
 * Some helper functions to work with our UI and keep our code cleaner
 */
var txt_processing = 'Processing...';

// Adds an entry to our debug area
function ui_add_log(message, color) {
    var d = new Date();

    var dateString = (('0' + d.getHours())).slice(-2) + ':' +
        (('0' + d.getMinutes())).slice(-2) + ':' +
        (('0' + d.getSeconds())).slice(-2);

    color = (typeof color === 'undefined' ? 'muted' : color);

    var template = $('#debug-template').text();
    template = template.replace('%%date%%', dateString);
    template = template.replace('%%message%%', message);
    template = template.replace('%%color%%', color);

    $('#debug').find('li.empty').fadeOut(); // remove the 'no messages yet'
    $('#debug').prepend(template);
}

// Creates a new file and add it to our list
function ui_multi_add_file(id, file, file_type) {

    var template = $('#files-template-' + file_type).text();
    template = template.replace('%%filename%%', file.name);

    template = $(template);
    template.prop('id', 'uploaderFile' + id);
    template.data('file-id', id);
  

    $('#files-' + file_type).find('li.empty').fadeOut(); // remove the 'no files yet'
    $('#files-' + file_type).prepend(template);
}


// Changes the status messages on our list
function ui_multi_update_file_status(id, status, message) {
    $('#uploaderFile' + id).find('span').html(message).prop('class', 'status text-' + status);
}

// Updates a file progress, depending on the parameters it may animate it or change the color.
function ui_multi_update_file_progress(id, percent, color, active) {
    color = (typeof color === 'undefined' ? false : color);
    active = (typeof active === 'undefined' ? true : active);

    var bar = $('#uploaderFile' + id).find('div.progress-bar');

    bar.width(percent + '%').attr('aria-valuenow', percent);
    bar.toggleClass('bg-success', active);

    if (percent === 0) {
        bar.html('');
    } else if (percent == 100) {
        bar.html(txt_processing);
    } else {
        bar.html(percent + '%');
    }

    if (color !== false) {
        bar.removeClass('bg-success bg-info bg-warning bg-danger');
        bar.addClass('bg-' + color);
    }
}







/*gallery*/
function ui_multi_add_file2(id, file, file_type) {

    var template = $('#files-template2-' + file_type).text();
    template = template.replace('%%filename%%', file.name);

    template = $(template);
    template.prop('id', 'uploaderFile2' + id);
    template.data('file-id', id);
  

    $('#files2-' + file_type).find('li.empty').fadeOut(); // remove the 'no files yet'
    $('#files2-' + file_type).prepend(template);
}

// Changes the status messages on our list
function ui_multi_update_file_status2(id, status, message) {
    $('#uploaderFile2' + id).find('span').html(message).prop('class', 'status text-' + status);
}

// Updates a file progress, depending on the parameters it may animate it or change the color.
function ui_multi_update_file_progress2(id, percent, color, active) {
    color = (typeof color === 'undefined' ? false : color);
    active = (typeof active === 'undefined' ? true : active);

    var bar = $('#uploaderFile2' + id).find('div.progress-bar');

    bar.width(percent + '%').attr('aria-valuenow', percent);
    bar.toggleClass('bg-success', active);

    if (percent === 0) {
        bar.html('');
    } else if (percent == 100) {
        bar.html(txt_processing);
    } else {
        bar.html(percent + '%');
    }

    if (color !== false) {
        bar.removeClass('bg-success bg-info bg-warning bg-danger');
        bar.addClass('bg-' + color);
    }
}


/*Floor Plan*/
function ui_multi_add_file3(id, file, file_type) {

    var template = $('#files-template3-' + file_type).text();
    template = template.replace('%%filename%%', file.name);

    template = $(template);
    template.prop('id', 'uploaderFile3' + id);
    template.data('file-id', id);
  

    $('#files3-' + file_type).find('li.empty').fadeOut(); // remove the 'no files yet'
    $('#files3-' + file_type).prepend(template);
}

// Changes the status messages on our list
function ui_multi_update_file_status3(id, status, message) {
    $('#uploaderFile3' + id).find('span').html(message).prop('class', 'status text-' + status);
}

// Updates a file progress, depending on the parameters it may animate it or change the color.
function ui_multi_update_file_progress3(id, percent, color, active) {
    color = (typeof color === 'undefined' ? false : color);
    active = (typeof active === 'undefined' ? true : active);

    var bar = $('#uploaderFile3' + id).find('div.progress-bar');

    bar.width(percent + '%').attr('aria-valuenow', percent);
    bar.toggleClass('bg-success', active);

    if (percent === 0) {
        bar.html('');
    } else if (percent == 100) {
        bar.html(txt_processing);
    } else {
        bar.html(percent + '%');
    }

    if (color !== false) {
        bar.removeClass('bg-success bg-info bg-warning bg-danger');
        bar.addClass('bg-' + color);
    }
}