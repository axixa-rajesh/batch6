
function confirmit(url, msg = '') {
    if (!msg) {
        msg = "Do you really want to perform this action ? ";
    }
    if (confirm(msg)) {
        location.href = ROOT + url;
    }
}