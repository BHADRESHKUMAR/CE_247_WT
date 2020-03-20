<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <title>Registration form</title>
      <link rel="stylesheet" href="form.css">
      <link rel="stylesheet" href="home.css">
  </head>
  <body>
    <header>
      <div class="head1">
        <h1>National Workshop on Web Technology</h1>
      </div>
    </header><br><br><br><br><br><br>
    <div class="img1">
    <img src="web-3963945_1920.jpg" alt="Web" align="left" width="50%">
    </div>
    <div class="main">
      <div class="btn">
        <br><br><br><br>
    <?php
      include "db.php";

      $flag=0;
      if(isset($_POST["submit"]))
      {
        $result=mysqli_query($con,"insert into users(name,email) value ('$_POST[name]','$_POST[email]')");
        if($result)
        {
          $flag=1;
        }
      }
      ?>
      <?php if($flag){ ?>
        <h2>successfully added</h2>
      <?php } ?>
    <form action="form.php" method="post">
    	<table>
    		<tr>
    			<td><b>Name : </b></td>
    			<td colspan ="2"><input type="text" name="name" id="name" onblur="capital()"><br></td>
    		</tr>
        <tr>
          <td><b>Email : </b></td>
          <td colspan="2"><input type="email" name="email" id="email"></td>
        </tr>
        <tr>
          <td></td>
          <td style="text-align:center;"><input type="submit" name="submit" value="submit" required></td>
          <td style="text-align:center;"><input type="reset" name="reset" value="reset"></td>
        </tr>

    	</table>
    </form>
  </div>
    </div>
    <br><br><br><br><br>
    <footer>
      <img src="download.jpg" alt="logo" width="20%" align="left">
      <p>workshop are about gathering information and knowledge but are also opportunities to meet and learn from other like-minded folks in the web design community. Plus, you’ll be exposed to a large amount of new information, which will help you to advance in your career.</p>
    </footer>
    <script>
      function capital() {
        var x = document.getElementById("name");
        x.value = x.value.toUpperCase();
      }
    </script>
  </body>
</html>
