<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
    <!-- Custom styles for this template-->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

</head>
<body>

    
    <div class="container">
        <div class="jumbotron text-center">
            <h1>
                Add Student
            </h1>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <form action="/student" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Firstname</label>
                        <input type="text" name="firstname" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Lastname</label>
                        <input type="text" name="lastname" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">City</label>
                        <input type="text" name="city" class="form-control" id="">
                    </div>

                    <input type="submit" value="Add Student" class="btn btn-primary">

                </form>

            </div>
        </div>
    </div>

</body>
</html>