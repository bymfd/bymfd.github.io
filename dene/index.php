<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/3.0.4/socket.io.min.js" integrity="sha512-Jq1JnVXlkYQOYQpz31qIV/0l67d97J9I6sbILtfiSYX00Isr2zK7XDRmHW8d2iBTwNZfL7sHkHGT0EzLs90jdw==" crossorigin="anonymous"></script>
</head>
<body>




<script>
    var socket = io('https://194.36.84.177:458');



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
