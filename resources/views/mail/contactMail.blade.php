<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us Mail</title>
</head>
<body>
    <h5>Contact Details</h5>
    <hr>
    <h6>Name : {{ $mailData['name'] }} </h6><br/>
    <h6>Email : {{ $mailData['email'] }} </h6><br/>

    <p>Message:       {{$mailData['message']}}</p>

</body>
</html>
