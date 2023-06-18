<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign Up</title>
</head>
<style>
    .form-container {
        -webkit-box-shadow: 1px 1px 6px -1px rgba(128, 125, 128, 1);
        -moz-box-shadow: 1px 1px 6px -1px rgba(128, 125, 128, 1);
        box-shadow: 1px 1px 6px -1px rgba(128, 125, 128, 1);
        border-top: 9px solid #ffc107;

    }

    .error {
        color: red;
    }
</style>

<body>
    <div class="container mt-5">
        <div class="row">

            <div class="col-lg-3 col-md-2 col-12"></div>
            <div class="col-lg-6 col-md-8 col-12 form-container">
                <h2 class="text-center mt-4 mb-4">Sign Up Here</h2>
                <form class="form" action="{{ url('signup') }}" method="POST">
                    @csrf
                    <div class="col-auto m-0 p-0 mb-3">
                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                            </div>
                            <input type="text" class="form-control" name="email" id="inlineFormInputGroup"
                                placeholder="Email">
                        </div>
                        <p class="error">{{ $errors->first('email') }}
                    </div>
                    <div class="col-auto m-0 p-0 mb-3">
                        <label class="sr-only" for="inlineFormInputGroup">Password</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-lock"></i></div>
                            </div>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password">
                        </div>
                        <p class="error">{{ $errors->first('password') }}
                    </div>
                    <div class="col-auto m-0 p-0 mb-3">
                        <label class="sr-only" for="inlineFormInputGroup">Re-Password</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-lock"></i></div>
                            </div>
                            <input type="password" class="form-control" name="cpassword" id="cpassword"
                                placeholder="Re-Password">
                        </div>
                        <p class="error">{{ $errors->first('cpassword') }}
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="col-auto m-0 p-0">

                                <div class="input-group mb-2 ">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user"></i></div>
                                    </div>
                                    <input type="text" class="form-control" name="fname" id="fname"
                                        placeholder="First Name">
                                </div>
                                <p class="error">{{ $errors->first('fname') }}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="col-auto m-0 p-0">

                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user"></i></div>
                                    </div>
                                    <input type="text" class="form-control" name="lname" id="lname"
                                        placeholder="Last Name">
                                </div>
                                <p class="error">{{ $errors->first('lname') }}
                            </div>
                        </div>
                    </div>
                    <div class="form-check mb-3" style="display: inline-block">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Mail"
                            checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Mail
                        </label>
                    </div>
                    <div class="form-check mb-3" style="display: inline-block">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2"
                            value="Femail">

                        <label class="form-check-label" for="exampleRadios2">
                            Femaile
                        </label>
                    </div>
                    <p class="error">{{ $errors->first('gender') }}
                    <div class="col-auto m-0 p-0 mb-3">
                        <div class="input-group mb-2">
                            <select class="form-control" name="country">
                                <option value="">Select Country</option>
                                <option>India</option>
                                <option>US</option>
                            </select>
                        </div>
                        <p class="error">{{ $errors->first('country') }}
                    </div>
                    <div class="form-group mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="terms" value="Checked"
                                id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                            <label class="form-check-label" for="invalidCheck3">
                                Agree to terms and conditions
                            </label>
                        </div>
                    </div>
                    <div class="col-auto m-0 p-0 mb-5 mt-4">
                        <div class="input-group mb-2">
                            <button type="submit" class="btn btn-warning btn-block">Register</button>
                        </div>
                    </div>

            </div>


            </form>
        </div>
        <div class="col-lg-3 col-md-2 col-12"></div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>


</body>

</html>
