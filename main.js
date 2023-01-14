var from = null, start = 0, url = 'http://localhost/lab_3/chat.php';

$(document).ready(function () {
    from = prompt("Введите имя");
    load();
    $('form').submit(function (e) {
        $.post(url, {
            message: $('#message').val(),
            from: from
        });
        $('#message').val('');
        return false;
    })
});
console.log("1231231")
function load() {
    console.log("1231231adasdsd")
    $.get(url + '?start=' + start, function (result) {
        if(result.items){

            result.items.forEach(item =>{
                start = item.id;
                $('#messages').append(renderMessage(item));
            })
        };
        load();
    });
}

function renderMessage(item){
    let time = new Date(item.created);
    time = `${time.getHours()}:${time.getMinutes() < 10 ? '0' : ''}${time.getMinutes()}`;
    return `<div class="msg"><p>${item.from}</p>${item.message}<span>${time}</span></div>`;
}