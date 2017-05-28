<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/validator.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            
                <h1>Login to Eventful Dashboard</h1>


            <ul class="nav nav-tabs">
                <li class="active"><a href="#organiser" data-toggle="tab">Organiser</a></li>
                <li><a href="#administrator" data-toggle="tab">Administrator</a></li>
            </ul>

            <!--            Organiser Tab-->
            <div class="tab-content">
                <div class="tab-pane active" id="organiser">
                    <h3>Organiser Login</h3>

                    <!--                    Organiser Form-->
                    <form class="form-horizontal" role="form" id="organiserForm" data-toggle="validator">

                        <div class="form-group">
                            <label class="control-label col-sm-2 col-xs-12" for="idEmail">Email:</label>
                            <div class="col-sm-10 col-xs-12">
                                <input type="text" class="form-control" id="idEmail" pattern="[a-zA-Z0-9_]+(@){1}[a-z]+[\.]{1}(com)" data-pattern-error="Invalid email"/>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2 col-xs-12" for="idPassword">Password: </label>
                            <div class="col-sm-10 col-xs-12">
                                <input type="password" class="form-control" id="idPassword" required data-error="Password is required."/>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10 col-xs-12">
                                <button type="submit" class="btn btn-primary form-control">Login</button>
                            </div>
                        </div>

                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10 col-xs-12">
                                <a href="SignUp.php" class="btn btn-default form-control">Sign Up</button></a>
                            </div>
                        </div>

                    </form>
                </div>

                <!--                Administrator Tab-->
                <div class="tab-pane" id="administrator">
                    <h3>Administrator Login</h3>

                    <!--                    Administrator Form-->
                    <form class="form-horizontal" role="form" id="adminForm" data-toggle="validator">

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="idEmail">Email:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="idEmail" pattern="[a-zA-Z0-9_]+(@){1}[a-z]+[\.]{1}(com)" data-pattern-error="Invalid email"/>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="idPassword">Password: </label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="idPassword" required data-error="Password is required."/>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary form-control">Login</button>
                            </div>
                        </div>
                        
                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10 col-xs-12">
                                <a href="SignUp.php" class="btn btn-default form-control">Sign Up</button></a>
                            </div>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </body>
</html>
