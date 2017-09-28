<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Snippet Good</title>
		<link rel="icon" href="favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	    <!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" type="text/css" />
		<link rel="stylesheet" href="/Client/css/main.css" type="text/css" />
	</head>
	<body>
		<div class="container-fluid">
	    	<nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-sm">
	    		<div id="nav-content" class="container-fluid"style="max-width:1200px;margin:auto;width:100%;">
		    		<a class="navbar-brand" href="#">
		    			<img id="logo" src="/Client/assets/dabs.png" width="40" height="40" class="d-inline-block align-top" alt=""/>
		    			SnippetGood
		    		</a>
	    		   	<div class="collapse navbar-collapse justify-content-end">
	    		   	    <div class="navbar-nav">
					    	<a class="nav-item nav-link active" href="#">Login</a>
						</div>    		   		
	    		   	</div>	
	    		</div>
    		</nav>	
		</div>
	    <div id="wrapper" class="container-fluid">
    		<div id="page-content" class="container-fluid">
    			<div class="row justify-content-center">
    				<div id="snippet-container" class="col-12 col-md-8 col-xl-6">
    					<pre id="snippet-frame">
<code>/* 
	Welcome to SnippetGood
	Click on a row on the snippet table to see the snippet code.
	Have Fun!
*/</code>
						</pre>	
    				</div>
        		   	<div id="snippet-list-container" class="col-12 col-xl-6">
	        		   	<table id="snippets-table" class="display" cellspacing="0" width="100%">
					        <thead>
								<tr>
									<th>Id</th>
									<th>Creator</th>
									<th>Description</th>
									<th>Language</th>
								</tr>
							</thead>
						<tbody>
						<!-- Table is empty pending snippets ajax response -->
						</tbody>
					    </table>
        		   </div>
    		   </div>
    		</div>
    	</div>
		<!-- jquery -->
		<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<!---->
		<script src="/Client/js/SnippetsModelModule.js"></script>
		<!-- controller js -->
		<script src="/Client/js/SnippetController.js"></script>
		<!---->
	</body>
</html>