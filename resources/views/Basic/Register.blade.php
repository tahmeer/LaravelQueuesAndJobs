<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Register Yourself</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('register')}}">
                    @CSRF
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationServer01">First name</label>
                            <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="validationServer01" name="firstname" placeholder="First name" required>
                            <!-- <div class="valid-feedback">
                                Looks good!
                            </div> -->
                        </div>
                        @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="col-md-4 mb-3">
                            <label for="validationServer02">Last name</label>
                            <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" id="validationServer02" placeholder="Last name" required>
                            <!-- <div class="valid-feedback">
                                Looks good!
                            </div> -->
                        </div>
                        @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="col-md-4 mb-3">
                            <label for="validationServerUsername">User Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                </div>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="validationServerUsername" placeholder="User Email" aria-describedby="inputGroupPrepend3" required>
                                <!-- <div class="invalid-feedback">
                                    Please choose a username.
                                </div> -->
                            </div>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="validationServer03">City</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" id="validationServer03" placeholder="City" required>
                            <!-- <div class="invalid-feedback">
                                Please provide a valid city.
                            </div> -->
                        </div>
                        @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="col-md-3 mb-3">
                            <label for="validationServer04">State</label>
                            <input type="text" class="form-control @error('state') is-invalid @enderror" name="state" id="validationServer04" placeholder="State" required>
                            <!-- <div class="invalid-feedback">
                                Please provide a valid state.
                            </div> -->
                        </div>
                        @error('state')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="col-md-3 mb-3">
                            <label for="validationServer05">Zip</label>
                            <input type="text" class="form-control @error('zip') is-invalid @enderror" name="zip" id="validationServer05" placeholder="Zip" required>
                            <!-- <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div> -->
                        </div>
                        @error('zip')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="col-md-3 mb-3">
                            <label for="validationServer06">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="validationServer06" placeholder="Password" required>
                            <!-- <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div> -->
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>