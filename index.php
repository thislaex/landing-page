<?php
require 'assets/languages/function.php'; // Languages function file
?>
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
    <!-- RESPONSIVE -->
    <link rel="stylesheet" media="(max-width: 768px)" href="assets/css/tablet.css">
    <link rel="stylesheet" media="(max-width: 500px)" href="assets/css/mobile.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <header class="bg-dark-blue">
        <div class="container">
            <nav id="navbar">
                <h1 class="heading-small">laéx Landing Page</h1>

                <ul>
                    <li class="nav-item"><a class="" href="#home">
                            <?php echo $lang['home']; ?>
                        </a></li>
                    <li class="nav-item"><a href="#projects">
                            <?php echo $lang['projects']; ?>
                        </a></li>
                    <li class="nav-item"><a href="#mypersoneldevelopment">
                            <?php echo $lang['development']; ?>
                        </a></li>
                    <li class="nav-item"><a href="#contact">
                            <?php echo $lang['contact']; ?>
                        </a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="home">
        <img src="assets/images/profil.jpg" alt="laéx">

        <div class="name text-center">
            <h2 class="heading-big">laéx</h2>
            <p>
                <?php echo $lang['paragraph']; ?>
            </p>
        </div>
        <a href="#projects" class="btn btn-primary">
            <?php echo $lang['viewProjects']; ?>
        </a>
    </section>
    <section id="projects" class="bg-dark-blue">
        <h3 class="text-center heading-medium">
            <?php echo $lang['myProjects']; ?>
        </h3>
        <div class="items">
            <article class="item">
                <i class="fa-solid fa-comment"></i>
                <h3>MellowTalk2</h3>
                <p>
                    <?php echo $lang['pMellowTalk']; ?> <a class="url"
                        href="https://play.google.com/store/apps/details?id=com.mellow.talkk">MellowTalk2</a>
                    <?php echo $lang['pMellowTalk2']; ?>
                </p>
            </article>
            <article class="item">
                <i class="fa-solid fa-bug"></i>
                <h3>Incsects</h3>
                <p>
                    <?php echo $lang['pIncsects']; ?>
                </p>
            </article>
            <article class="item">
                <i class="fa-solid fa-wifi"></i>
                <h3>Yapariz.net</h3>
                <p>
                    <?php echo $lang['pYapariz']; ?>
                </p>
            </article>
        </div>
    </section>
    <section id="mypersoneldevelopment">
        <h3 class="text-center heading-medium">
            <?php echo $lang['development']; ?>
        </h3>

        <div class="container">
            <div class="personeldevelopment">
                <div class="development">
                    <div class="development-image">
                        <img src="assets/images/html.png" alt="HTML" />
                    </div>

                    <div class="development-info">
                        <div class="primary-title">
                            <?php echo $lang['html']; ?>
                        </div>
                        <br>
                        <div class="primary-description">
                            <?php echo $lang['primaryHtml']; ?>
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
                            <?php echo $lang['php']; ?>
                        </div>
                        <br>
                        <div class="primary-description">
                            <?php echo $lang['primaryPhp']; ?>
                        </div>
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
                            <a class="url" href="https://github.com/thislaex">
                                <p>
                                    <?php echo $lang['primaryGithub']; ?>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <footer id="contact" class="bg-dark-blue">
        <div class="selectLanguages">
            <div class="container">
                <h1 style="text-align: center;">
                    <?php echo $lang['selectLanguages']; ?>
                </h1>
                <form>
                    <div class="mb-3" style="display: grid; justify-content: center;">
                        <select class="form-select" id="languageSelect" name="language" onchange="changeLanguage()">
                            <option value="tr">Türkçe</option>
                            <option value="en">English</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
        <div class="contact-form">
            <?php if (isset($_GET['success'])): ?>
                <div class="alert alert-success">
                    <?php echo $lang['alert-succes']; ?>
                </div>
            <?php endif ?>
            <form method="POST" action="contact-post.php">
                <h1 style="text-align: center;">
                    <?php echo $lang['contactMe']; ?>
                </h1>
                <div class="form-group">
                    <label for="name">
                        <?php echo $lang['name']; ?>
                    </label>
                    <input type="text" name="names" class="form-control" id="names"
                        placeholder="<?php echo $lang['name']; ?>" />
                </div>
                <div class="form-group">
                    <label for="email">
                        <?php echo $lang['email']; ?>
                    </label>
                    <input type="text" name="email" class="form-control" id="email"
                        placeholder="<?php echo $lang['email']; ?>" />
                </div>
                <div class="form-group">
                    <label for="messages">
                        <?php echo $lang['message']; ?>
                    </label>
                    <textarea name="messages" id="messages" class="form-control" rows="5"
                        placeholder="<?php echo $lang['yourMessages']; ?>"></textarea>
                </div>

                <button type="submit" class="btn btn-block">
                    <?php echo $lang['send']; ?>
                </button>
            </form>

            <ul>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>

        </div>

    </footer>
    <script>
        function changeLanguage() {
            var languageSelect = document.getElementById('languageSelect');
            var selectedLanguage = languageSelect.value;

            if (selectedLanguage === 'tr') {
                window.location.href = '?languages=tr';
            } else if (selectedLanguage === 'en') {
                window.location.href = '?languages=en';
            }
        }
        var urlParams = new URLSearchParams(window.location.search);
        var selectedLanguage = urlParams.get('languages');
        if (selectedLanguage === 'en') {
            document.getElementById('languageSelect').value = 'en';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <script src="assets/js/js.js"></script>
</body>

</html>