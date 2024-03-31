<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Expense Tracker Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main class="container-md">
        <header>
            <h1>Expense Tracker</h1>
        </header>
        <div>
          <a href="{{route('expense.create')}}"><button type="button" class="btn btn-success">Create expense</button></a>
        </div>
        <section>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Category</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                      $counter = 0;
                  @endphp
                  @foreach ($expenses as $value)
                  <tr>
                  <th scope="row">{{ ++$counter;}}</th>
                  <td>{{ $value['title'];}}</td>
                  <td>{{ $value['amount'];}}</td>
                  <td>{{ $value['category'];}}</td>
                  <td><a href="{{route('expense.edit',['id' => $value['id']])}}"><button type="button" class="btn btn-success">Edit</button></a></td>
                  <td><a href="{{route('delete.edit',['id' => $value['id']])}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                </tr> 
                  
                  @endforeach
          
                </tbody>
              </table>
        </section>
    </main>
   
</body>
</html>