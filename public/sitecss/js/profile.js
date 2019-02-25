function getFormattedDate() {
    var date = new Date();
    var str = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate() + " " +  date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();

    return str;
}
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('90b736361c3daba8be62', {
        cluster: 'eu',
        forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');

    channel.bind('form-submitted', function(data) {
    var notify = JSON.stringify(data["text"]);
    var i = $("#notificationCount").html();
    var today =  getFormattedDate();
    document.getElementById("dateTime").innerHTML = today;
    document.getElementById("notificationCount").innerHTML = parseInt(i)+1;           
    document.getElementById("demo").innerHTML = notify;
});
    channel.bind('user-sent', function(data) {
    var senderName = JSON.stringify(data["sender"]["name"]);
    var senderimg = JSON.stringify(data["sender"]["img"]);
    var imagetest = "http://127.0.0.1:8000/storage/users/"+senderimg;
    var newimage = imagetest.replace('users/"','users/');
    var finalimage = newimage.substring(0, newimage.length - 1);
    $("#usersender").attr('src', finalimage);
});   