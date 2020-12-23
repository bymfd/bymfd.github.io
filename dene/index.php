<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js"></script>
</head>
<body>




<script>
    var socket = io('http://194.36.84.177:5000');



    socket.on('posts', function (data) {
        console.log(data);
    });

    // // eğer client tarafından socket'in posts event'ına daha göndermek isteseydik yine emit'i kullanacaktık
    // socket.emit('test', {
    //     'id': 5,
    //     'title': 'Test',
    //     'content': 'bu bir tesstir',
    //     'date': '2019-08-11 12:00:00'
    // });




</script>

</body>
</html>