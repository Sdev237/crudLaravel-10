<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="col-12">
            <h2 class="col-9">UPDATE STUDENT - LARAVEL 10</h2>
            <hr>

            <ul>
              @foreach($errors->all() as $error)
                <li class="alert alert-danger">{{$error}}</li>
              @endforeach
            </ul>
            <form action="/update/loading" method="POST" class="form-group">
              @csrf

              <input type="text" style="display:none" name="id" value="{{$students->id}}">
              <div class="form-group">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" value="{{$students->firstName}}">
              </div>
              <div class="form-group">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" value="{{$students->lastName}}">
              </div>
              <div class="form-group">
                <label for="class" class="form-label">Class</label>
                <input type="text" class="form-control" id="class" name="class" value="{{$students->class}}">
              </div>
              <br/>
              <button type="submit" class="btn btn-primary">Update</button>
              <br><br>
              <a href="/student" class>Back to student list</a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>