<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        
        <div class="login">
		<footer></footer>
		<div class="center-pane">
			<form method="post" action="checkuser.php">
                                <div class="form-group">
					<h2><span class="label label-default center-block">สต๊อคสินค้า TOL</span></h2> 
				</div>
				<div class="form-group">
					<label class="required-field">Username :</label> 
					<input type="text" name="username" required id="id_username" class="form-control" maxlength="150">
				</div>
				<div class="form-group">
					<label class="required-field">Password :</label> 
					<input type="password" name="password" required class="form-control" id="id_password">
				</div>
				<button type="submit" class="btn btn-default btn-primary btn-block" value="Login">เข้าระบบ</button><br>
			</form>
			<div class="misc text-center">
				Some text
				<br>
				<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> |
				<a href="http://validator.w3.org/check/referer">HTML5</a>
			</div>
		</div>
	</div>
        
        
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
