<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form id="form">
    <input id="name" type="text" name="name" required>
    <input id="address" type="text" name="address" required>
    <input type="submit" value="Сохранить">
</form>
<div id="result_form"></div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/css/suggestions.min.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/js/jquery.suggestions.min.js"></script>

<script>
    $(document).ready(function () {
        $("#form").submit(
            function () {
                data = $("#form").serialize()
                $.ajax({
                    url: "form.php",
                    type: "POST",
                    dataType: "html",
                    data: data,
                    success: function (response) {
                        $('#result_form').html('Данные сохранены.');
                    },
                    error: function (response) {
                        $('#result_form').html('Ошибка. Данные не сохранены.');
                    }

                });
                return false;
            }
        );
        $("#name").suggestions({
            token: "c98114e4e8bcaac3c65ff1d78e67cdfe80287ba7",
            type: "NAME",
            /* Вызывается, когда пользователь выбирает одну из подсказок */
            onSelect: function (suggestion) {
                console.log(suggestion);
            }
        });
        $("#address").suggestions({
            token: "c98114e4e8bcaac3c65ff1d78e67cdfe80287ba7",
            type: "ADDRESS",
            /* Вызывается, когда пользователь выбирает одну из подсказок */
            onSelect: function (suggestion) {
                console.log(suggestion);
            }
        });
    });


</script>

</html>

