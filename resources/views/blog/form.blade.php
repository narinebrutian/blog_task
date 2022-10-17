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
<div style="padding: 50px">
    <div class="container" style="width: 400px;">
        <form method="POST"
              @if(isset($category))
                  action="{{ route('category.update',$category) }}"
              @else
                  action="{{ route('category.store') }}"
            @endif
        >
            @csrf
            @isset($category)
                @method('PUT')
            @endisset
            <div class="col-auto">
                <input type="text"
                       value="{{isset($category) ? $category->name : null}}"
                       name="name" class="form-control" id="inputPassword2" placeholder="Category">
            </div>
            <div class="modal-footer">
                <a href="{{route('category.index')}}" type="button" class="btn btn-secondary">Close</a>
                <button type="submit" class="btn btn-primary">{{isset($category) ? 'Update' : 'Create'}}</button>
            </div>
        </form>
    </div>
</div>
<script src="https://getbootstrap.com/docs/5.2/examples/checkout/form-validation.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>