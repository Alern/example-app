<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create product page in laravel<h1><p>

    <form method='post' action="{{route('product.store')}}">
        @csrf
        @method('post')
    <p>
          <label>Name : <input type="text" name="name"/></label>
    </p>
    <p>
          <label>Qty : <input type="text" name="qty"/></label>
    </p>
    <p>
          <label>Price : <input type="text" name="price"/></label>
    </p>
    <p>
          <label>Description : <input type="text" name="description"/></label>
    </p>
     
    <p>
      <input type = "submit" name = "submit" value = "save a new product" />
    </p>
    </form>

</body>
</html>