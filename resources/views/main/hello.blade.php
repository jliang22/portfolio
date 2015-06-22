<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
</head>
<body>
<script>
    var $body = $('body'), $popup = $('.mypopup');

    $('#fadePopup').click(function() {
        $body.addClass('popup-active');
        $popup.fadeIn();
    });

    $('.mypopup-close').add('.mypopup-overlay').click(function() {
        $body.removeClass('popup-active');
        $popup.fadeOut();
    });

    $body.addClass('popup-active'); // for demonstration
</script>

</body>
</html>