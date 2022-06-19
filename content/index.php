<?php

require '../database/database.php';

$sql_project = "SELECT * FROM projecten";

$result_project = mysqli_query($conn, $sql_project);

$alle_projecten = mysqli_fetch_all($result_project, MYSQLI_ASSOC);


$results = $conn->query("SELECT * FROM skills");
$skills = $results->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://kit.fontawesome.com/6d5bf39b05.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Projecten</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hallo, mijn naam is</div>
                <div class="text-2">Lisa Hakhoff</div>
                <div class="text-3">En ik ben een <span class="typing"></span> developer</div>
                <a href="index.php#contact">Huur mij in</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Over mij</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="../assets/images/lhakhoff2.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">Ik ben Lisa Hakhoff, en ik ben een <span class="typing-2"></span> developer</div>
                    <p>Op 15 jarige leeftijd kwam ik voor het eerst in contact met programmeren, ik speelde spellen waarin ik dingen zelf wou aanpassen en/of maken, na kleine cursussen en een 'piscine' bij Codam, en inmiddels 27-jarige leeftijd ben ik bij een MBO-4 opleiding software development terecht gekomen.</p>
                    <a href="../assets/downloads/CV_Lisa_Hakhoff.pdf">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Mijn services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fa-solid fa-code"></i>
                        <div class="text">.NET Development</div>
                        <p>Goed functionere programma's met C#.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa-brands fa-php"></i>
                        <div class="text">Back-End Development</div>
                        <p>Functionerende programma's met PHP en SQL. Simpel in gebruik en professioneel design.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa-brands fa-html5"></i>
                        <div class="text">Front-End Development</div>
                        <p>Professioneel ontworpen websites. Een goede uitstraling voor uw bedrijf.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <!-- skills section start -->
    <script src="../assets/scripts/circle-progress.js"></script>
    <section class="skills" id="skills">>
        <div id="names">
            <h2 class="title">Skills</h2>
            <h3 class="bactive" id="hards" style="visibility: hidden;">Software Development</h3>
            <h3 id="softs" style="visibility: hidden;">Algemeen</h3>
            <div id=" algemeen">
            </div>
        </div></br>
        <div id="hbars">
            <?php foreach ($skills as $skill) : ?>
                <div class="bar hbar" data-percent="<?php echo $skill['procent'] ?>">
                    <h3><?php echo $skill['naam'] ?></h3>
                    <canvas class="bar-circle" width="70" height="70"></canvas>
                </div>
            <?php endforeach ?>
        </div>
        <br><br><br><br><br>
        <br><br><br><br><br>
        <script>
            (function() {

                var Progress = function(element) {

                    this.context = element.getContext("2d");
                    this.refElement = element.parentNode;
                    this.loaded = 0;
                    this.start = 4.72;
                    this.width = this.context.canvas.width;
                    this.height = this.context.canvas.height;
                    this.total = parseInt(this.refElement.dataset.percent, 10);
                    this.timer = null;

                    this.diff = 0;

                    this.init();
                };

                Progress.prototype = {
                    init: function() {
                        var self = this;
                        self.timer = setInterval(function() {
                            self.run();
                        }, 25);
                    },
                    run: function() {
                        var self = this;

                        self.diff = ((self.loaded / 100) * Math.PI * 2 * 10).toFixed(2);
                        self.context.clearRect(0, 0, self.width, self.height);
                        self.context.lineWidth = 4;
                        self.context.fillStyle = "#000";
                        self.context.strokeStyle = "rgb(97, 20, 223)";
                        self.context.textAlign = "center";

                        self.context.fillText(self.loaded + "%", self.width * .5, self.height * .5 + 2, self.width);
                        self.context.beginPath();
                        self.context.arc(35, 35, 30, self.start, self.diff / 10 + self.start, false);
                        self.context.stroke();

                        if (self.loaded >= self.total) {
                            clearInterval(self.timer);
                        }

                        self.loaded++;
                    }
                };

                var CircularSkillBar = function(elements) {
                    this.bars = document.querySelectorAll(elements);
                    if (this.bars.length > 0) {
                        this.init();
                    }
                };

                CircularSkillBar.prototype = {
                    init: function() {
                        this.tick = 25;
                        this.progress();

                    },
                    progress: function() {
                        var self = this;
                        var index = 0;
                        var firstCanvas = self.bars[0].querySelector("canvas");
                        var firstProg = new Progress(firstCanvas);



                        var timer = setInterval(function() {
                            index++;

                            var canvas = self.bars[index].querySelector("canvas");
                            var prog = new Progress(canvas);

                            if (index == self.bars.length) {
                                clearInterval(timer);
                            }

                        }, self.tick * 100);

                    }
                };
                var button = document.getElementById("softs");

                button.addEventListener("click", function() {
                    var circularBars = new CircularSkillBar("#algemeens .algemeen");
                }, false);
                document.addEventListener("DOMContentLoaded", function() {
                    var circularBars = new CircularSkillBar("#hbars .hbar");
                });
            })();


            $(document).ready(function() {
                $("#hards").click(function() {
                    $(".algemeen")
                        .filter(function() {
                            return !$(this).is(":hidden");
                        })
                        .fadeOut(200, function() {
                            $('.hbar,.hbars').fadeIn(300);
                        });
                    $('#softs').removeClass("bactive");
                    $('#hards').addClass("bactive");
                });
                $("#softs").click(function() {
                    $(".hbar")
                        .filter(function() {
                            return !$(this).is(":hidden");
                        })
                        .fadeOut(200, function() {
                            $('.algemeen,.algemeens').fadeIn(300);
                        });
                    $('#hards').removeClass("bactive");
                    $('#softs').addClass("bactive");
                });
            });
        </script>
    </section>
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Gemaakte Projecten</h2>
            <div class="carousel owl-carousel">

                <?php foreach ($alle_projecten as $project) { ?>

                    <div class="card">
                        <div class="box">
                            <a href="<?php echo $project['github'] ?>"><img src="../assets/images/<?php echo $project['foto'] ?>" alt="<?php echo $project['naam'] ?>"></a>
                            <div class="text"><?php echo $project['naam'] ?></div>
                            <p><?php echo $project['omschrijving'] ?></p>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </section>

    <!-- contact section start -->

    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Neem contact op met mij</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Heeft u een vraag, tip of feedback? Neem gerust contact op door dit formulier in te vullen. Ik streef ernaar om zo spoedig mogelijk te reageren.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Lisa Hakhoff</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Zandvoort, Nederland</div>
                            </div>
                        </div>


                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">lisahakhoff@ziggo.nl</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Schrijf mij</div>
                    <form action="../database/contact.php" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input name="naam" type="text" placeholder="Naam" required>
                            </div>
                            <div class="field email">
                                <input name="email" type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="fields">
                            <div class="field name">
                                <input name="bedrijfsnaam" type="text" placeholder="Bedrijfsnaam">
                            </div>
                            <div class="field email">
                                <input name="vestiging" type=" text" placeholder="Vestigingsplaats">
                            </div>
                        </div>
                        <div class="fields">
                            <div class="field name">
                                <input name="adres" type="text" placeholder="Adres">
                            </div>
                            <div class="field email">
                                <input name="postcode" type="text" placeholder="Postcode" pattern="[1-9][0-9]{3}\s?[a-zA-Z]{2}" title="Een geldige postcode bevat 4 cijfers en 2 letters">
                            </div>
                        </div>
                        <div class="field">
                            <input name="telefoonnummer" type="text" placeholder="Telefoonnummer" pattern="[0-9]{10}" title="Een telefoonnummer bevat alleen cijfers">
                        </div>
                        <div class="field">
                            <input name="onderwerp" type="text" placeholder="Onderwerp" required>
                        </div>
                        <div class="field textarea">
                            <textarea name="bericht" cols="30" rows="10" placeholder="Bericht.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button name="submit" type="submit">Stuur bericht</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- footer section start -->
    <footer>
        <span>Created By Lisa Hakhoff, using <a href="https://www.codingnepalweb.com">CodingNepal</a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </footer>

    <script src="../assets/scripts/scripts.js"></script>
</body>

</html>