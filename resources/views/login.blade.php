<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>login</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <div class="misc-wrapper">
        <div class="misc-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="misc-header text-center">
                            <!--<img alt="" src="assets/img/icon.png" class="logo-icon margin-r-10">-->
                            <img alt="" class="toggle-none hidden-xs" style="width:100px;">
                        </div>
                        <div class="misc-box">
                            <form method="POST" action="{{ Route('authenticate') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="username"><strong>Username</strong></label>
                                    <div class="group-icon">
                                        <input id="username" type="text" name="username" placeholder="Username"
                                            class="form-control" required="">
                                        <span class="icon-user text-muted icon-input"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password"><strong>Password</strong></label>
                                    <div class="group-icon">
                                        <input id="password" type="password" name="password" placeholder="Password"
                                            class="form-control">
                                        <span class="icon-lock text-muted icon-input"></span>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="float-left">
                                        <div class="checkbox checkbox-primary margin-r-5">
                                            <input id="checkbox2" type="checkbox" checked="">
                                            <label for="checkbox2"> Remember Me </label>
                                        </div>

                                    </div>
                                    <div class="float-right">
                                        <input type="submit" class="btn btn-block btn-primary btn-rounded box-shadow"
                                            value="Se connecter">

                                    </div>


                            </form>
                        </div>
                        <div class="text-center misc-footer">
                            <hr>
                            <p>Copyright &copy; 2022 bibliotheque</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

</body>

</html>
