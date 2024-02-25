<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container border my-5">
      <div class="row">
        <div class="col-lg-12">
          <div class="panel-heading mb-2">
            <div class="row">
              <div class="m-2" >
                <h2 class="panel-title">CRUD IN LARAVEL 10</h2>
              </div>
              <div class="" align="right">
                <a href="/add" class="btn btn-primary col-2">Add Student +</a>
              </div>
            </div>
          </div>
          <hr>
      
          @if (session('status'))
            <div class="alert alert-success">
              {{session('status')}}
            </div>
          @endif
          <table class="table text-center" border="1" cellpadding="5" cellspacing="0">
            <thead class="table-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Class</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @php
                $ide = 1
              @endphp
              @foreach($students as $student)
                <tr>
                  <th scope="row">{{$ide}}</th>
                  <td >{{$student->firstName}}</td>
                  <td>{{$student->lastName}}</td>
                  <td>{{$student->class}}</td>
                  <td>
                    <a href="/update-student/{{$student->id}}" class="btn btn-secondary">update</a>
                    <a href="/delete-student/{{$student->id}}" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                
                @php
                  $ide += 1
                @endphp
              @endforeach
            </tbody>
          </table>
          {{$students->links()}}
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>