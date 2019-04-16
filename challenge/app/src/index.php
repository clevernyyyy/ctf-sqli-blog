<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="./style.css">

    <title>Jurasssic Blog</title>
  </head>
  <body style="overflow: hidden;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">The Park</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
        <form class="navbar-form navbar-right" role="search" style="display: flex;" action="index.php" method="post">
          <div style="margin-right: 20px">
              <input type="text" class="form-control" name="username" placeholder="Username">
          </div>
          <div style="margin-right: 20px">
              <input type="text" class="form-control" name="password" type="password" placeholder="Password">
          </div>
          <button type="submit" name="submit" class="btn btn-default signin">Sign In</button>
        </form>
      </div>
    </nav>

    <?php
      $conn = new mysqli("mysql", "root", ".sweetpwd.", "my_db");
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }



      if (isset($_POST['submit']))
      {     
          $username= mysqli_real_escape_string($conn, $_POST['username']);
          $password= $_POST['password'];

	  $user = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
          if(mysqli_num_rows($user) == 1){
              $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' and password='$password'");
              if(!$query){
                  echo("Error description: " . mysqli_error($conn));
              } else if(mysqli_num_rows($query) > 1){
                  echo '<div style="text-align: center;">csg{4f63ea59e2cb9f0015300491152ca724}</div>';
              } else {
                  echo '<div style="text-align: center;">invalid user name or password</div>';
              }
          } else {
              echo '<div style="text-align: center;">invalid user name or password</div>';
          }
      }

    ?>



<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title">The Park</h1>
            <h2 class="brand-tagline">The best content from the world's foremost dinosaur experts and park employees.</h2>
        </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
            <!-- A wrapper for all the blog posts -->
            <div class="posts">
                <h1 class="content-subhead">Introducing Your New Ruler</h1>

                <!-- A single blog post -->
                <section class="post">
                    <header class="post-header">
                        <img width="48" height="48" alt="Tilo Mitra&#x27;s avatar" class="post-avatar" src="https://i.imgur.com/jFd5xMg.png">

                        <h2 class="post-title">Introducing The End</h2>

                        <p class="post-meta">
                            By <a href="#" class="post-author">Nedry</a> under <a class="post-category post-category-design" href="?user=nedry">Pwning</a> <a class="post-category post-category-pure" href="#">Hacking</a>
                        </p>
                    </header>

                    <div class="post-description">
                        <p>
                           Yesterday, everything seemed so normal, but today is different.  Today I've taken over the blog system through an obvious flaw and plan to exploit it for my own nefarious purposes.  Interested in discussing alternative plans?  You won't see them on here!  Enjoy those dinosaurs today.
                        </p>
                    </div>
                </section>
            </div>

            <div class="posts">
                <h1 class="content-subhead">Recent Posts</h1>

                <section class="post">
                    <header class="post-header">
                        <img width="48" height="48" alt="Eric Ferraiuolo&#x27;s avatar" class="post-avatar" src="https://i.imgur.com/jFd5xMg.png">

                        <h2 class="post-title">Everything You Need to Know About Dr. Wu</h2>

                        <p class="post-meta">
                            By <a class="post-author" href="?user=wu">Dr. Wu</a> under <a class="post-category post-category-js" href="#">Biopic</a>
                        </p>
                    </header>

                    <div class="post-description">
                        <p>
                           Hello, I am Dr. Wu - world renowned geneticist, DNA sequencer and racquetball player. That's right, there's more to me than meets the eye. I started working at Jurassic Park in 1990 after getting a 'spared no expense' pitch from Mr. Hammond. In this blog post, I'll walk you through our first theory to our first dinosaur ...
                        </p>
                    </div>
                </section>

                <section class="post">
                    <header class="post-header">
                        <img width="48" height="48" alt="Reid Burke&#x27;s avatar" class="post-avatar" src="https://i.imgur.com/jFd5xMg.png">

                        <h2 class="post-title">I hate this hacker crap</h2>

                        <p class="post-meta">
                            By <a class="post-author" href="?user=arnold">Arnold</a> under <a class="post-category" href="#">Uncategorized</a>
                        </p>
                    </header>

                    <div class="post-description">
                        <p>
                          Hello, is anyone else sick of the fun the IT team seems to be having? I run our operations and I'm so sick of the amount of hoops I have to jump through to get anything to work...
                        </p>
                    </div>
                </section>

                <section class="post">
                    <header class="post-header">
                        <img width="48" height="48" alt="Andrew Wooldridge&#x27;s avatar" class="post-avatar" src="https://i.imgur.com/jFd5xMg.png">

                        <h2 class="post-title">Clever Girl...</h2>

                        <p class="post-meta">
                            By <a class="post-author" href="?user=muldoon">Muldoon</a> under <a class="post-category post-category-yui" href="#">Game Warden</a>
                        </p>
                    </header>

                    <div class="post-description">
                        <p>
                          My daughter just graduated college! She is such a clever girl. I am just so happy, I had to annouce it!
                        </p>
                    </div>
                </section>
            </div>

        </div>
    </div>
</div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
