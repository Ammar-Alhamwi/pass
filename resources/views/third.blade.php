<!DOCTYPE html>
<html>

<head>
    <title>Educational registration form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
        html,
        body {
            min-height: 100%;
        }

        body,
        div,
        form,
        input,
        select,
        p {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 16px;
            color: #eee;
        }

        body {
            background: url("/uploads/media/default/0001/01/b5edc1bad4dc8c20291c8394527cb2c5b43ee13c.jpeg") no-repeat center;
            background-size: cover;
        }

        h1,
        h2 {
            text-transform: uppercase;
            font-weight: 400;
        }

        h2 {
            margin: 0 0 0 8px;
        }

        .main-block {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            padding: 25px;
            background: rgba(0, 0, 0, 0.5);
        }

        .left-part,
        form {
            padding: 25px;
        }

        .left-part {
            text-align: center;
        }

        .fa-graduation-cap {
            font-size: 72px;
        }

        form {
            background: rgba(0, 0, 0, 0.7);
        }

        .title {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .info {
            display: flex;
            flex-direction: column;
        }

        input,
        select {
            padding: 5px;
            margin-bottom: 30px;
            background: transparent;
            border: none;
            border-bottom: 1px solid #eee;
        }

        input::placeholder {
            color: #eee;
        }

        option:focus {
            border: none;
        }

        option {
            background: black;
            border: none;
        }

        .checkbox input {
            margin: 0 10px 0 0;
            vertical-align: middle;
        }

        .checkbox a {
            color: #26a9e0;
        }

        .checkbox a:hover {
            color: #85d6de;
        }

        .btn-item,
        button {
            padding: 10px 5px;
            margin-top: 20px;
            border-radius: 5px;
            border: none;
            background: #26a9e0;
            text-decoration: none;
            font-size: 15px;
            font-weight: 400;
            color: #fff;
        }

        .btn-item {
            display: inline-block;
            margin: 20px 5px 0;
        }

        button {
            width: 100%;
        }

        button:hover,
        .btn-item:hover {
            background: #85d6de;
        }

        @media (min-width: 568px) {

            html,
            body {
                height: 100%;
            }

            .main-block {
                flex-direction: row;
                height: calc(100% - 50px);
            }

            .left-part,
            form {
                flex: 1;
                height: auto;
            }
        }
    </style>
</head>

<body>
    <div class="main-block">
        <div class="left-part">
            <i class="fas fa-graduation-cap"></i>
            <h1>Register to our courses</h1>
            </p>

        </div>
        <form action="{{ route('saveth') }}"method="POST"enctype="multipart/form-data">
            @csrf
            <div class="title">
                <i class="fas fa-pencil-alt"></i>
                <h3>Please chose your accommodation preference as you are eligible for (5-night)</h3>
            </div>
            <div class="info">

                <input id="datef" name="Check_in_date" type='date' min='1899-01-01' max='2000-13-13'>
                <input id="dateff" name="Check_out_date1 " type='date' min="2023-04-01" max="2023-04-05">
                <select name="Rom_type">
                    <option value="course_type" selected>Rom type</option>
                    <option value="1">king bed </option>
                    <option value="2">twin bed</option>
                </select>
                <h4>Extra night </h4>
                <input id="datefa" name="Check_in_date1" type='date' min='1899-01-01' max='2000-13-13'>
                <input id="dateffaa" name="Check_out_date1" type='date' min='1899-01-01' max='2000-13-13'>
                <select name="Rom_type1">
                    <option value="course_type" selected>Rom type</option>
                    <option value="1">king bed </option>
                    <option value="2">twin bed</option>
                </select>
            <button type="submit" href="/">Submit</button>
        </form>
    </div>
    <script>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }

        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("datef").setAttribute("min", today);
    </script>
    <script>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }

        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("dateff").setAttribute("min", today);
    </script>
    <script>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }

        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("datefa").setAttribute("min", today);
    </script>
    <script>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }

        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("dateffaa").setAttribute("min", today);
    </script>
</body>

</html>
