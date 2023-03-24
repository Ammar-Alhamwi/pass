<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <title>Table #8</title>
</head>
<body>
    <div class="content">
        <div class="container">
            <div class="table-responsive custom-table-responsive">
                <h2>Review all guest date data and confirm:</h2>
                <table class="table custom-table">
                    <tbody>
                        <tr scope="row">
                            <td><a href="#">{{$user1->first_name}}</a></td>
                            <td><a href="#">{{$user1->last_name}}</a></td>
                            <td><a href="#">{{$user1->brith}}</a></td>
                            <td><a href="#">{{$user1->Gender}}</a></td>
                            <td><a href="#">{{$user1->place_of_brith}}</a></td>
                            <td><a href="#">{{$user1->country_of_Residency}}</a></td>
                            <td><a href="#">{{$user1->Passport}}</a></td>
                            <td><a href="#">{{$user1->Issue_date}}</a></td>
                            <td><a href="#">{{$user1->Expiry_date}}</a></td>
                            <td><a href="#">{{$user1->place_of_issue}}</a></td>
                            <td><a href="#">{{$user1->Arrival_date}}</a></td>
                            <td><a href="#">{{$user1->Profession}}</a></td>
                            <td><a href="#">{{$user1->Organization}}</a></td>

                    </tbody>
                </table>
                <a
                href="{{ url('conf') }}">Confirm and Submit</a>
            </div>
        </div>

    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
