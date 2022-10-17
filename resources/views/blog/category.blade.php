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
  <div class="container">
      <div class="wrapper">
         <h1>Category</h1>
      </div>
      <div>
          <table class="table" style="width: 400px; margin: auto;" >
              <thead>
              <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col"></th>
                  <th scope="col">
{{--                      <a href="#" type="button" class="btn btn-success">Create</a>--}}
                      <!-- Button trigger modal -->
                      <a href="{{ route('category.create') }}" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                       Create
                      </a>

                      <!-- Modal1 -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content" style="padding: 20px">
                                  <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: red; font-size: 20px">Category</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
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
                                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                           <button type="submit" class="btn btn-primary">{{isset($category) ? 'Update' : 'Create'}}</button>
                                       </div>
                                   </form>
                              </div>
                          </div>
                      </div>
                  </th>
              </tr>
              </thead>
              <tbody>
              @foreach($categories as $category)
                           <tr>
                               <td><a href="#">{{ $category->id }}</a></td>
                               <td>
                                   <a href="{{route('category.show',$category)}}">{{ $category->name }}</a>
                               </td>
                               <td  style="display: flex">
                                   <a href="{{ route('category.edit',$category) }}" type="button" class="btn btn-primary">Edit</a>
                                   <form style="margin-left: 10px;" method="POST" action="{{ route('category.destroy',$category) }}">
                                       @csrf
                                       @method('DELETE')
                                       <button  type="submit" class="btn btn-danger">Del</button>
                                   </form>
                               </td>
                           </tr>
                       @endforeach
              </tbody>
          </table>
      </div>
  </div>
<script src="https://getbootstrap.com/docs/5.2/examples/checkout/form-validation.js"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
