<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">

  <title>Sign Up</title>

      <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!DOCTYPE html>>
<html>
<head>
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" http-equiv = "content-type" content = "text/html; charset=utf-8">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
</head>
<style>
@use cssnext;

   /* config.css */

   :root {
     --baseColor: #606468;
   }

   /* helpers/align.css */

   .align {
     align-items: center;
     display: flex;
     flex-direction: column;
     justify-content: center;
   }
   /* helpers/grid.css */

   :root {
     --gridMaxWidth: 20rem;
     --gridWidth: 90%;
   }

   .grid {
     margin-left: auto;
     margin-right: auto;
     max-width: var(--gridMaxWidth);
     width: var(--gridWidth);
   }

   /* helpers/hidden.css */

   .hidden {
     border: 0;
     clip: rect(0 0 0 0);
     height: 1px;
     margin: -1px;
     overflow: hidden;
     padding: 0;
     position: absolute;
     width: 1px;
   }

  /* layout/base.css */

   :root {
     --htmlFontSize: 100%;

     --bodyBackgroundColor: #2c3338;
     --bodyColor: var(--baseColor);
     --bodyFontFamily: 'Open Sans';
     --bodyFontFamilyFallback: sans-serif;
     --bodyFontSize: 0.875rem;
     --bodyFontWeight: 400;
     --bodyLineHeight: 1.5;
   }

   .icons {
     display: none;
   }

   .icon {
     display: inline-block;
     fill: var(--iconFill);
     font-size: 1rem;
     height: 1em;
     vertical-align: middle;
     width: 1em;
   }

  * {
     box-sizing: inherit;
   }

  html {
     box-sizing: border-box;
     font-size: var(--htmlFontSize);
     height: 100%;
   }

   body {
     background-color: var(--bodyBackgroundColor);
     color: var(--bodyColor);
     font-family: var(--bodyFontFamily), var(--bodyFontFamilyFallback);
     font-size: var(--bodyFontSize);
     font-weight: var(--bodyFontWeight);
     height: 100%;
     line-height: var(--bodyLineHeight);
     margin: 0;
     min-height: 100%;
   }

   /* modules/anchor.css */

   :root {
     --anchorColor: #eee;
   }

   a {
     color: var(--anchorColor);
     outline: 0;
     text-decoration: none;
   }

   a:focus,
   a:hover {
     text-decoration: underline;
   }

   /* modules/form.css */

   :root {
     --formFieldMargin: 0.875rem;
   }

   input {
     background-image: none;
     border: 0;
     color: inherit;
     font: inherit;
     margin: 0;
     outline: 0;
     padding: 0;
     transition: background-color 0.3s;
   }

   input[type='submit'] {
     cursor: pointer;
   }

   .form {
     margin: calc(var(--formFieldMargin) * -1);
   }

   .form input[type='password'],
   .form input[type='text'],
   .form input[type='submit'] {
     width: 100%;
   }

   .form__field {
     display: flex;
     margin: var(--formFieldMargin);
   }

   .form__input {
     flex: 1;
   }

  /* modules/login.css */

   :root {
     --loginBorderRadus: 0.25rem;
     --loginColor: #eee;

     --loginInputBackgroundColor: #3b4148;
     --loginInputHoverBackgroundColor: #434a52;

     --loginLabelBackgroundColor: #363b41;

     --loginSubmitBackgroundColor: #28d;
     --loginSubmitColor: #eee;
     --loginSubmitHoverBackgroundColor: #d44179;
   }

   .login {
     color: var(--loginColor);
   }

   .login label,
   .login input[type='text'],
   .login input[type='password'],
   .login input[type='submit'] {
   border-radius: var(--loginBorderRadus);
   padding: 1rem;
   }

   .login label {
     background-color: var(--loginLabelBackgroundColor);
     border-bottom-right-radius: 0;
     border-top-right-radius: 0;
     padding-left: 1.25rem;
     padding-right: 1.25rem;
   }

   .login input[type='password'],
   .login input[type='text'] {
     background-color: var(--loginInputBackgroundColor);
     border-bottom-left-radius: 0;
     border-top-left-radius: 0;
   }

   .login input[type='password']:focus,
   .login input[type='password']:hover,
   .login input[type='text']:focus,
   .login input[type='text']:hover {
     background-color: var(--loginInputHoverBackgroundColor);
   }

  .login input[type='submit'] {
     background-color: var(--loginSubmitBackgroundColor);
     color: var(--loginSubmitColor);
     font-weight: 700;
     text-transform: uppercase;
   }

   .login input[type='submit']:focus,
   .login input[type='submit']:hover {
     background-color: var(--loginSubmitHoverBackgroundColor);
   }

   /* modules/text.css */

   :root {
     --paragraphMarginBottom: 1.5rem;
     --paragraphMarginTop: 1.5rem;
   }

   p {
     margin-bottom: var(--paragraphMarginBottom);
     margin-top: var(--paragraphMarginTop);
   }

   .text--center {
     text-align: center;
   }
</style>
<body class="align">
<center>
<h1> New Member!</h1>
    <div class="grid">
     <form action="insert_result.php" method="POST" class="form signin">

        <div class="form__field">
 	 <label for="login__username"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="hidden">Username</span></label>
          ID :  <input id="login__username" type="text" name="ID" class="form__input" placeholder="Username" required>
        </div>

        <div class="form__field">
 	 <label for="login__password"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use></svg><span class="hidden">Password</span></label>
          PW :  <input id="login__password" type="password" name="PW" class="form__input" placeholder="Password" required>
        </div>

        <div class="form__field">
          <input type="submit" value="Complete!">
        </div>
	</form>
    </div>
  </body>
</html>

</body>
</html>