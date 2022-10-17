<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.2/examples/checkout/form-validation.css">
    <title>Document</title>
</head>
<body>
<div style="padding: 40px">
    <div class="container" style="width: 270px;margin: auto;">
       <div style="display: flex;"><h5 style="margin-right: 10px;">Category Info</h5> <a href="{{route('category.index')}}" type="button" class="btn btn-primary mb-3">Back</a></div>
        <ul style="list-style: none; display: flex;justify-content: space-around; padding: 7px;border: 1px solid black">
            <li style="color: #0a041a">{{ $category->id }}</li>
            <li style="color: crimson">{{ $category->name }}</li>
        </ul>
    </div>

</div>
<script src="https://getbootstrap.com/docs/5.2/examples/checkout/form-validation.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
