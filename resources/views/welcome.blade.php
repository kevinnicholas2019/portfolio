<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kevin Nicholas, BSc - Portfolio</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        @font-face {
            font-family: DancingScript;
            src: url('{{ asset('fonts/DancingScript/DancingScript-VariableFont_wght.ttf') }}');
        }

        @font-face {
            font-family: PTSansRegular;
            src: url('{{ asset('fonts/PT_Sans/PTSans-Regular.ttf') }}');
        }

        .dancingScript {
            font-family: DancingScript;
        }

        .white-color {
            color: #d8e3e7;
        }

        .white-bg {
            background-color: #d8e3e7;
        }

        .lblue-color {
            color: #51c4d3;
        }

        .lblue-bg {
            background-color: #51c4d3;
        }

        .blue-color {
            color: #126e82;
        }

        .blue-bg {
            background-color: #126e82;
        }

        .black-color {
            color: #132c33;
        }

        .black-bg {
            background-color: #132c33;
        }


        html,
        body {
            background: #d8e3e7;
            overflow-x: hidden;
        }

        body {
            margin-bottom: 78px;
        }

        @keyframes fotoAnimasi {
            0% {
                transform: rotate(0);
                left: 0;
                top: 0;
            }

            25% {
                transform: rotate(2.5deg);
                left: -15px;
                top: 9px;
            }

            50% {
                transform: rotate(0);
                left: 0;
                top: 0;
            }

            75% {
                transform: rotate(-2.5deg);
                left: 15px;
                top: -9px;
            }

            100% {
                transform: rotate(0);
                left: 0;
                top: 0;
            }
        }

        @keyframes fotoAnimasiFlip {
            0% {
                transform: rotate(0);
                left: 0;
                top: 0;
            }

            25% {
                transform: rotate(2.5deg);
                left: -15px;
                top: -9px;
            }

            50% {
                transform: rotate(0);
                left: 0;
                top: 0;
            }

            75% {
                transform: rotate(-2.5deg);
                left: 15px;
                top: 9px;
            }

            100% {
                transform: rotate(0);
                left: 0;
                top: 0;
            }
        }

        .foto_wisuda,
        .foto_ijazah {
            border: 20px solid #51c4d3;
            box-shadow: 1px 1px 10px #333;
            width: 100%;
            position: relative;
        }

        .foto_wisuda {
            animation: fotoAnimasi 6.67s 999999999 linear;
        }

        .foto_ijazah {
            animation: fotoAnimasiFlip 6.67s 999999999 linear;
            object-fit: cover;
            object-position: center;
            /* height: 550px; */
        }

        header {
            padding: 20px;
            margin-bottom: 20px;
        }

        header>h1 {
            letter-spacing: 10px;
            line-height: 60px;
            font-weight: bolder;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        a,
        hr {
            color: #132c33;
            font-family: PTSansRegular;
        }

        .btn-custom {
            border: 5px double #d8e3e7;
            font-weight: bolder;
        }

        .btn-custom:hover,
        .btn-custom:active {
            border: 5px double #126e82;
            background-color: #d8e3e7 !important;
            color: #132c33 !important;
        }

        nav a:hover {
            color: #d8e3e7;
        }

        nav {
            box-shadow: 0px 0px 10px #126e82;
            background: rgb(19,44,51);
            background: linear-gradient(360deg, rgba(19,44,51,1) 0%, rgba(18,110,130,1) 50%, rgba(70,166,179,1) 100%);
        }

        footer {}

        .nail {
            width: 80px;
            position: absolute;
            left: 0;
        }

        .nail-2 {
            width: 80px;
            position: absolute;
            right: 15px;
        }

        p {
            font-size: 20px;
        }

        .contacts {
            
        }

        .contacts .contact {
            margin: 0 10px;
            background: white;
            border-radius: 50px;
            padding: 60px;
            display: block;
        }

        .contact a {
            text-decoration: none;
            color: #132c33;
            font-size: 20px;
            position: relative;
        }

        .fa-custom-contact {
            position: relative;
            z-index: 1;
            font-size: 120px;
            margin-bottom: 40px;
        }

        .fa-custom-contact::after {
            content: '';
            position: absolute;
            left: -50px;
            top: -40px;
            z-index: -1;
            background-color: white;
            /* width: 200px; */
            /* height: 200px; */
            border-radius: 100%;
        }

        .fa-whatsapp {
            color: #25D366;
        }

        .fa-facebook {
            color: #4267B2;
        }

        .fa-facebook::before {
            position: relative;
            /* left: 10px; */
        }

        .fa-linkedin {
            color: #0077b5;
        }

        @media only screen and (max-width: 576px) {
            header {
                margin-bottom: 0;
            }
            body {
                margin-bottom: calc(78px * 2 + 23px);
            }
        }

        @media only screen and (max-width: 768px) {
            .contacts .contact {
                width: 250px;
                height: 250px;
                margin: auto;
                margin-bottom: 50px;
            }

            .contacts {
                margin-top: 50px;
            }
        }
        

        @media only screen and (max-width: 992px) {
            .mt-custom {
                margin-top: 50px;
            }
        }

        .flex-center-vertically {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .progress-bar {
            background: rgb(19,44,51);
            background: linear-gradient(360deg, rgba(19,44,51,1) 0%, rgba(18,110,130,1) 50%, rgba(70,166,179,1) 100%);
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
        }

    </style>
</head>

<body>
    <header class="container" id="home">
        <h1 class="text-center dancingScript">
            Welcome to my Portfolio
        </h1>
        <hr />
    </header>

    <main>
        <article class="container">
            <div class="auto-height row">
                <div class="col-lg-6 col-md-6">
                    <img class="foto_wisuda" src="{{ asset('storage/my_foto_wisuda.png') }}" alt="ME">
                    <img class="nail" src="{{ asset('storage/pushpin-147918_640.png') }}" alt="NAIL">
                </div>
                <section class="mt-5 col-lg-6 col-md-6 text-right">
                    <h3 class="mb-5">
                        Programmer ({{ $codingFrom }} - {{ date('Y') }})
                    </h3>
                    <h1>
                        Kevin Nicholas, BSc
                    </h1>
                    <hr />
                    <h3 class="dancingScript">
                        "Love to learn a new things, never give up and Coffee"
                    </h3>
                    <a href="#about-me" id="aboutMeBtn" class="mt-3 btn btn-primary blue-bg btn-custom">
                        About me
                    </a>
                </section>
            </div>
            <div class="auto-height pt-4 row" id="about-me">
                <section class="col-lg-6 col-md-6">
                    <h1>About me</h1>
                    <hr />
                    <p>
                        My name is Kevin Nicholas, I am {{ date('Y') - 1997 }} years old this year and
                        I'm still single. I have deep ambition
                        programming, after i graduated from my high school. I really like learning new things related to
                        programming.
                    </p>
                    <div class="d-sm-block d-md-none mt-5 mb-5">
                        <img class="foto_ijazah" src="{{ asset('storage/IMG_8965.JPG') }}" alt="foto ijazah" />
                        <img class="nail-2" src="{{ asset('storage/pushpin-147918_640.png') }}" alt="NAIL">
                    </div>
                    <p>
                        I have experienced as
                        programmer for 2 more years. During
                        that, I have learned several languages
                        programming and also some theory
                        software engineering used by
                        expert IT practitioner. The programming language that I use often is
                        C / C ++, Java, C #, Swift,
                        PHP, HTML, CSS, Javascript / JQuery, Ruby,
                        Python and SQL. I also use
                        framework that is used in general
                        namely Laravel, Ruby on Rails, ASP, Android
                        studio, XCode and Unity (game engine).
                    </p>
                    <p>
                        The software engineering science I studied at
                        lectures are design pattern, code reengineering
                        and pattern software design. I really like
                        with neat coding so i am
                        avoid bad smell code.
                    </p>
                    <p>
                        My hobby is listening to music,
                        technology, gaming and coding.
                        I have an independent personality,
                        hard work, easy going and sympathetic. Dream
                        I am, want to pursue a career in IT
                        as IT Manager.
                    </p>
                </section>
                <div class="col-lg-6 col-md-6 d-none d-sm-none d-md-block">
                    <img class="foto_ijazah" src="{{ asset('storage/IMG_8965.JPG') }}" alt="foto ijazah" />
                    <img class="nail-2" src="{{ asset('storage/pushpin-147918_640.png') }}" alt="NAIL">
                </div>
            </div>
            <section class="auto-height pt-4 text-right" id="contact-me">
                <h1>Contact me</h1>
                <hr />
                <div class="contacts flex-center-vertically">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 text-center">
                            <a class="contact" href="https://wa.me/send?text=Hello,&nbsp;I've&nbsp;been&nbsp;seen&nbsp;your&nbsp;portfolio&phone=6285695163031" target="_blank">
                                <i class="fa fa-whatsapp fa-custom-contact"></i>
                                <br/>
                                <b>0856-9516-3031</b>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 text-center">
                            <a class="contact" href="https://www.facebook.com/profile.php?id=100013311457292" target="_blank">
                                <i class="fa fa-facebook fa-custom-contact"></i>
                                <br/>
                                <b>My Facebook</b>
                            </a>
                        </div>
                        <div class="d-lg-none col-md-3"></div>
                        <div class="col-lg-4 col-md-6 text-center mt-custom">
                            <a class="contact" href="https://www.linkedin.com/in/kevin-nicholas-a463041b2/" target="_blank">
                                <i class="fa fa-linkedin fa-custom-contact"></i>
                                <br/>
                                <b>My Linkedin</b>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="auto-height pt-4" id="my-skill">
                <h1>My Skill</h1>
                <hr />
                <div class="skills mt-5">
                    @foreach($skills as $skillName => $skillVal)
                        <div class="skill mb-5">
                            <h2 class="mb-3">{{ $skillName }}</h2>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skillVal }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </article>
    </main>

    <nav class="container-fluid position-fixed fixed-bottom">
        <div class="row">
            @foreach ($navs as $key => $val)
                <a class="{{$key == "Chat me" ? '' : 'nav-child-click' }} py-3 col-{{ (12 / count($navs)) * 2 }} col-sm-{{ 12 / count($navs) }} col-md-{{ 12 / count($navs) }} col-lg-{{ 12 / count($navs) }} text-center white-color"
                    href="{{ $key == "Chat me" ? "https://wa.me/send?text=Hello,&nbsp;I've&nbsp;been&nbsp;seen&nbsp;your&nbsp;portfolio&phone=6285695163031" : '#'.str_replace(' ', '-', strtolower($key)) }}" {{ $key == "Chat me" ? "target=\"_blank\"" : "" }}>
                    <i class="fa {{ $val['fa'] }}"></i>
                    <br />
                    {{ $key }}
                </a>
            @endforeach
        </div>
    </nav>

    <footer class="text-center mt-5 black-bg white-color p-5">
        Copyright &copy; {{ date('Y') == '2021' ? '2021' : '2021 - ' . date('Y') }} Kevin Nicholas, BSc.
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".auto-height").css('min-height', $(window).height());
            $(".flex-center-vertically").css('min-height', $(window).height() - 300);
            $(".progress-bar").each(function() {
                const progress = $(this)[0];
                $(progress).animate({width: $(progress).attr("aria-valuenow") + "%"});
            });
            $(".nav-child-click, #aboutMeBtn").each(function() {
                const navClick = $(this)[0];
                $(navClick).click(function(e) {
                    e.preventDefault();
                    const id = $(navClick).attr("href");
                    try {
                        const top = $(id).offset().top;
                        $('html,body').animate({scrollTop: top}, 'ease');
                    } catch (err) {
                    }
                    // $(window).animate({ top: $($(navClick).attr("href")).offset().top});
                });
            });

            $(window).resize(function() {
                $(".auto-height").css('min-height', $(window).height());
                $(".flex-center-vertically").css('min-height', $(window).height() - 300);
            });
        });

    </script>
</body>

</html>
