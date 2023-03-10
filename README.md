# AJAX
Изучение технологии AJAX

## Цель работы
Разработать и реализовать анонимный чат с возможностью создания каналов. В интерфейсе отображается список каналов, пользователь может либо подключиться к существующему каналу, либо создать новый. Сообщения доставляются пользователю без обновления страницы.

## Ход работы

AJAX — это аббревиатура, которая означает Asynchronous Javascript and XML. На самом деле, AJAX не является новой технологией, так как и Javascript, и XML существуют уже довольно продолжительное время, а AJAX — это синтез обозначенных технологий. AJAX чаще всего ассоцириуется с термином Web 2.0 и преподносится как новейшее Web-приложение.

При использовании AJAX нет необходимости обновлять каждый раз всю страницу, так как обновляется только ее конкретная часть. Это намного удобнее, так как не приходится долго ждать, и экономичнее, так как не все обладают безлимитным интернетом. Правда в этом случае, разработчику необходимо следить, чтобы пользователь был в курсе того, что происходит на странице. Это можно реализовать с использованием индикаторов загрузки, текстовых сообщений о том, что идёт обмен данными с сервером. Необходимо также понимать, что не все браузеры поддерживают AJAX (старые версии браузеров и текстовые браузеры). Плюс Javascript может быть отключен пользователем. Поэтому, не следует злоупотреблять использованием технологии и прибегать к альтернативным методам представления информации на Web-сайте.

---

При входе на сайт пользователь попадет на страницу выбора канала, в который он может как присоедениться, так и создать новый.
При входе в канал пользователю необходимо ввести никнейм для общения.
AJAX `JavaScript`:
```javascript
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
```
Вывод сообщений на страницу 
```javascript
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
```

### Вывод
Разработал и реализовал анонимный чат с возможностью создания каналов. В интерфейсе отображается список каналов, пользователь может либо подключиться к существующему каналу, либо создать новый. Сообщения доставляются пользователю без обновления страницы.
