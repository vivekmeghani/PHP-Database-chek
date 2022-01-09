<html>
    <head>
        <title></title>
	<style>
	.maindiv{
			border:4px solid red;
			
			width :200px;
			
		
	}	
	</style>
    </head>
    <body>
        <form action="connect.php" method="POST">
            <div class="maindiv" align="center">
            <input type= "text" name="host" placeholder="loclalhost">
            
            <div>
            <input type= "text" name="user" placeholder="root">
            </div>
            
            <div>
            <input type= "text" name="pass" placeholder="password">
            </div>
            
            <div>
            <input type= "text" name="db" placeholder="your db name">
            </div>
            
            <div>
            <input type="submit" name="save" value="check">
            </div>
			</div>

        </form>
    </body>
</html>