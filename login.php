<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>SIATEMA INFORMASAUN KLINIKA</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <style>
        body{
            height: 100vh;
            background: url('image/xxx.png');
        }
    </style>
</head>
<body>

<div class="container" >
<div class="container colored" >
 <div class="col-md-4"></div>
    <div class="col-md-4">
        <h1>KLINIKA<small><i>SIMTERE</i></small></h1>
    </div>
	<div class="col-md-4"></div>
</div>
<div class="container colored" >
 <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="container" style="margin-top: 30px">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title"><strong>Keta ansi login tiha lai mak asesu</strong></h1>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="cek_login.php">
                            <div class="form-group">
                                <label for="Username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required="required"/>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required"/>
                            </div>
                            <button type="submit" class="btn btn-sm btn-default">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="col-md-4"></div>
</div>
</div>
</body>
</html>