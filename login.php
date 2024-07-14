<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login or sighnuo</title>
</head>
<link rel="stylesheet" href="login.css">
<body>
<div class="ill"><img src="login.jpg" class="img"></div>
<div class="wrapper">
 <div class="card-switch">
            <label class="switch">
               <input type="checkbox" class="toggle">
               <span class="slider"></span>
               <span class="card-side"></span>
               <div class="flip-card__inner">
                  <div class="flip-card__front">
                     <div class="title">Log in</div>
                     <form class="flip-card__form" action="loginCheck.php" method="POST">
                        <input class="flip-card__input" name="email" placeholder="Email" type="email">
                        <input class="flip-card__input" name="psswrd" placeholder="Password" type="password">
                        <button class="flip-card__btn" >Let`s go!</button>
                     </form>
                  </div>
                  <div class="flip-card__back">
                     <div class="title">Sign up</div>
                     <form class="flip-card__form" action="signUp.php" method="POST">
                        <input class="flip-card__input" placeholder="Name" type="name" name="name">
                        <input class="flip-card__input"  placeholder="Email" type="email" name="email">
                        <input class="flip-card__input"  placeholder="Password"  name="psswrd">
                        <button class="flip-card__btn">Confirm!</button>
                     </form>
                  </div>
               </div>
            </label>
        </div>   
   </div>
</body>
</html>