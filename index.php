<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <form id="signForm" class="signUpForm col-md-6 col-md-offset-3">
            <h1>Total Information</h1>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm password" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" class="form-control" id="age" name="age" placeholder="Age">
            </div>
            <div class="form-group">
                <label for="link">URL</label>
                <input type="url" class="form-control" id="link" name="link" placeholder="URL" required>
            </div>
            <button type="submit" class="submitBtn btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg">Submit</button>
        </form>

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <h2 class="modal-title text-center bg-success">Sign up was successful!</h2>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/jquery-validation/dist/jquery.validate.js"></script>
<script src="js/validate.js"></script>
<script src="js/ajax.js"></script>

</body>
</html>