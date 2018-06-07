<html>

<head>
    <title> Subscription page</title>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="../_css/style.css">
    <!--Fonts-->
    <link rel="stylesheet" type="text/css" href="../steph/_css/ss-pika.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="../_css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">
        <h1>Subscribe For Free</h1>
        <div>
            <b class="text-white" style="float:right">Already a member? <a href="../login/index.html" class="text-white" style="text-decoration:underline;">Sign in</b></a>
            <br>
        </div>
        <div id="unique-section" class="row">
            <div class="section">
                <form method="post" action="subscribe.php">
                    <div class="form-group">
                        <label>First Name:</label>
                        <input type="text" name="forename" class="form-control" placeholder="First Name" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="surname" class="form-control" placeholder="Last Name" required/>
                    </div>

                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="womenwhocan.com" required/>
                    </div>
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" required/>
                    </div>

                    <div class="form-group">
                        <label>Description:</label>
                        <textarea placeholder="Please tell us something interesting about yourself" style="height:200px; width:300px;font-size:12pt; align-vertical:" name="profile_description" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" name="password" class="form-control" placeholder="*******" required/>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password:</label>
                        <input type="password" name="cpassword" class="form-control" placeholder="*******" required/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="subscribe" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="form-group">
        By signing up, you agree to our Terms of Use, Privacy Policy, and Anti-spam Policy
        <div>

            <!-- Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
            <script src="ajax.js"></script>
</body>

</html>