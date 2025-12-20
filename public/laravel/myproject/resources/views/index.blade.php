<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
        <nav>
    <a href="/">home</a>
    <a href="/about">about</a>
    <a href="/index">contact</a>
    <h1>hello contact page</h1>
</nav>
    <nav>
    <a href="/">home</a>
    <a href="/about">about</a>
    <a href="/index">contact</a>
    <h1>hello contact page</h1>
</nav>

@if($age >= 18)
    <p>Adult</p>
@elseif($age >= 13)
    <p>Teen</p>
@else
    <p>Child</p>
@endif

</body>
</html>