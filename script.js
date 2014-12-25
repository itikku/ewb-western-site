$(document).ready(function () {
    if (window.location.pathname.split("/")[1] == "events.php") {
        console.log('events!');
        $('.events').css({'background-color': 'white', 'color' : '#eba05f'});
    }
    else if (window.location.pathname.split("/")[1] == "presentations.php") {
        console.log('presentations!');
        $('.presentations').css({'background-color': 'white', 'color' : '#eba05f'});
    };
});

$('a').click(function () {
    $('a').css({ 'color': 'white' });
})
