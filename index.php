<!-- Developed by laéx -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <meta name="keywords" content="laéx landing page">
    <meta name="description" content="laéx Landing Page">
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- FONT GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- TABLET -->
    <link rel="stylesheet" media="(max-width: 768px)" href="assets/css/tablet.css">
    <link rel="stylesheet" media="(max-width: 500px)" href="assets/css/mobile.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <header class="bg-dark-blue">
        <div class="container">
            <nav id="navbar">
                <h1 class="heading-small">laéx Landing Page</h1>

                <ul>
                    <li class="nav-item"><a class="" href="#home">Home</a></li>
                    <li class="nav-item"><a href="#projects">Projects</a></li>
                    <li class="nav-item"><a href="#mypersoneldevelopment">My Personal Development</a></li>
                    <li class="nav-item"><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="home">
        <img src="assets/images/profil.jpg" alt="laéx">

        <div class="name text-center">
            <h2 class="heading-big">laéx</h2>
            <p>Student of Vocational Technology Hight School | Editor | Web Developer</p>
        </div>
        <a href="#projects" class="btn btn-primary">View to My Projects</a>
    </section>
    <section id="projects" class="bg-dark-blue">
        <h3 class="text-center heading-medium">My Projects</h3>
        <div class="items">
            <article class="item">
                <i class="fa-solid fa-comment"></i>
                <h3>MellowTalk2</h3>
                <p>I am both the founder and web developer of the <a class="url"
                        href="https://play.google.com/store/apps/details?id=com.mellow.talkk">MellowTalk2</a> mobile
                    app.</p>
            </article>
            <article class="item">
                <i class="fa-solid fa-bug"></i>
                <h3>Incsects</h3>
                <p>I am the founder of the Incsects team and my team is a partner in projects such as Yapariz.net</p>
            </article>
            <article class="item">
                <i class="fa-solid fa-wifi"></i>
                <h3>Yapariz.net</h3>
                <p>I am the CEO of Yapariz.net project. I am a web developer and content writer.</p>
            </article>
        </div>
    </section>
    <section id="mypersoneldevelopment">
        <h3 class="text-center heading-medium">My Personel Development</h3>

        <div class="container">
            <div class="personeldevelopment">
                <div class="development">
                    <div class="development-image">
                        <img src="assets/images/html.png" alt="HTML" />
                    </div>

                    <div class="development-info">
                        <div class="primary-title">
                            HTML Development
                        </div>
                        <br>
                        <div class="primary-description">
                            HTML is a foundation and necessary for Web Development. I'm trying to improve myself on the
                            HTML side.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="personeldevelopment">
                <div class="development">
                    <div class="development-image">
                        <img src="assets/images/php.png" alt="PHP" />
                    </div>

                    <div class="development-info">
                        <div class="primary-title">
                            PHP Development
                        </div>
                        <br>
                        <div class="primary-description">
                            I develop myself in PHP and its software. I think I'm good at this job. </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="personeldevelopment">
                <div class="development">
                    <div class="development-image-github">
                        <img src="assets/images/Github/GitHub-Mark-120px-plus.png" alt="GITHUB" />
                    </div>
                    <br />
                    <div class="development-info">
                        <div class="primary-title">
                            Github
                        </div>
                        <br>
                        <div class="primary-description">
                        <a class="url" href="https://github.com/thislaex"><p>Click to go to my Github page.</p></a></div>
                    </div>
                </div>
            </div>
        </div>        
        </div>
        </div>
        </div>
    </section>
    <footer id="contact" class="bg-dark-blue">
        <div class="contact-form">
            <?php if(isset($_GET['success'])    ): ?>
            <div class="alert alert-success">Your message has been successfully delivered.</div>
            <?php endif ?>
            <form method="POST" action="contact-post.php">
                <h4 class="text-center heading-medium">Contact Me</h4>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="names" class="form-control" id="names" placeholder="Name" />
                </div>
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="E-Mail" />
                </div>
                <div class="form-group">
                    <label for="messages">Message</label>
                    <textarea name="messages" id="messages" class="form-control" rows="5" placeholder="Your Messages..."></textarea>
                </div>

                <button type="submit" class="btn btn-block">Send</button>
            </form>

            <ul>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>

        </div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="assets/js/js.js"></script>
</body>

</html>