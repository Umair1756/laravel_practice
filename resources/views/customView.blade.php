<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customView</title>
</head>

<body>
    <!-- this below will return as expected html or scripts logics-->
    <!-- <h1>This is loaded from url Request <b>//{!! $param1 !!}</b></h1> -->
    <!-- this below will return texts from url params if it is html or scripts  -->
    <!-- <h1>This is loaded from url Request <b>//{{ $param1 }}</b></h1> -->
    <h1>This is loaded from url Request <b>{{ $wc }}</b></h1>
    <h1>Custom View has been loaded</h1>
</body>

</html>