<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>LOGIN</title>
    
    <!-- Styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
        
       #container{
        width:400px;
        position:absolute;
        top:300px;
        left:100px;
        border: 1px solid #fff;
    
    }

     .display-3{
        font-size:3.5rem;
     }
      
        .form-control{
            width:300px;
          
        }
        </style>
</head>

<body>
<div class="jumbotron">
		<div class="container">
			<h5 class="display-3">로그인</h1>
		</div>
	</div>

<div class="container">
    <form action="loginCheck.php" method="post" enctype="multipart/form-data">
        <div class="contatiner" id="container">

            <div class="form-group row">
                <label class="col-sm-2">아이디</label>
                <div class="col-sm-3">
                    <input type="email" class="form-control" placeholder="ID" name="id" required  >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2">비밀번호</label>
                <div class="col-sm-3">
                    <input type="password" class="form-control" placeholder="Password" name='pw' required >
                </div>
            </div>
        
            <button type="submit">로그인</button> 
            <button type="button" onclick="location.href='member_create.html'">회원가입</button>

        </div>
	</form>
</div>
                     
</body>
</html>