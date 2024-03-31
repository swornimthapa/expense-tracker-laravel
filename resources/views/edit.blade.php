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
            <h1>Edit  Expense</h1>
        </header>
        <section>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{route('expense.update',['id'=>$data['id']])}}">
                      @csrf()
                        <div class="mb-3">
                          <label class="form-label">Expenses Title</label>
                          <input type="text" class="form-control" name="title" value="{{$data['title']}}">
                     
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Amount</label>
                          <input type="text" class="form-control" name="amount" value="{{$data['amount']}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <input type="text" class="form-control" name="category" value="{{$data['category']}}">
                          </div>
              
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                </div>
              </div>
          
        </section>
    </main>
   
</body>
</html>