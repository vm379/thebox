<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ URL::asset('css/style.min.css') }}" />
</head>


<!-- body tag classList: "scrolloff" for off scroll -->

<body class="body">
    <div class="website">
        <div class="container">

            <!-- header-fixed -->
            <header class="header-fixed">
                <div class="container">
                    <div class="header-main">
                        <div class="container">
                            <a href="/" class="logo-link">
                                <img src="{{asset('img/logo/header-logo.png')}}" alt="thebox" class="logo">
                            </a>

                            <div class="menu">
                                <nav class="main-nav">

                                    <!-- main-menu-list -->
                                    <!-- classList: "active" for make item active -->
                                    <ul class="main-menu">
                                        <li class="item {{request()->is('/')?'active':''}}">
                                            <a href="/" class="link">Home</a>
                                        </li>

                                        <li class="item {{request()->is('about')?'active':''}}">
                                            <a href="/about" class="link">About Us</a>
                                        </li>

                                        <li class="item {{request()->is('projects*')?'active':''}}">
                                            <a href="/projects" class="link">Projects</a>
                                        </li>

                                        <li class="item {{request()->is('services*')?'active':''}}">
                                            <a href="/services" class="link">Services</a>
                                        </li>

                                        <li class="item {{request()->is('contacts')?'active':''}}">
                                            <a href="/contacts" class="link">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>

                                <button class="mobile-menu-btn">Menu</button>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end header-fixed -->

            <main class="main">

                {{ $slot }}

            </main>

            <!-- footer -->
            <footer class="footer">
                <div class="container">
                    <div class="col-1">
                        <div class="footer-col-1">
                            <ul class="footer-blocks">
                                <li class="block">
                                    <div class="footer-block">
                                        <div class="title">
                                            <span class="t">Contacts:</span>
                                        </div>

                                        <div class="block">
                                            <ul class="footer-contacts">
                                                <li class="contact">
                                                    <div class="footer-contact">
                                                        <div class="title">
                                                            <span class="footer-contact--title">SKYPE:</span>
                                                        </div>

                                                        <div class="text">
                                                            <span class="footer-contact--text">
                                                                <span class="address">thebox</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="contact">
                                                    <div class="footer-contact">
                                                        <div class="title">
                                                            <span class="footer-contact--title">PHONE:</span>
                                                        </div>

                                                        <div class="contact">
                                                            <span class="footer-contact--text">
                                                                <span class="phone">+84 1102 2703</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="contact">
                                                    <div class="footer-contact">
                                                        <div class="title">
                                                            <span class="footer-contact--title">EMAIL:</span>
                                                        </div>

                                                        <div class="contact">
                                                            <span class="footer-contact--text">
                                                                <span class="email">hello@thebox.com</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="block">
                                    <div class="footer-block">
                                        <div class="title">
                                            <span class="t">SOCIAL:</span>
                                        </div>

                                        <div class="block">
                                            <ul class="footer-social">
                                                <li class="item">
                                                    <a href="/" class="link">
                                                        <img src="{{asset('/img/footer/i/footer-social/fb.png')}}" alt="fb" class="i">
                                                    </a>
                                                </li>

                                                <li class="item">
                                                    <a href="/" class="link">
                                                        <img src="{{asset('/img/footer/i/footer-social/in.png')}}" alt="in" class="i">
                                                    </a>
                                                </li>

                                                <li class="item">
                                                    <a href="/" class="link">
                                                        <img src="{{asset('/img/footer/i/footer-social/tw.png')}}" alt="tw" class="i">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="footer-col-2">
                            <div class="footer-block">
                                <div class="title">
                                    <span class="t">NEWSLETTER:</span>
                                </div>

                                <div class="block">

                                    <!-- footer subscribe form -->
                                    <div class="footer-subscribe">
                                        <div class="footer-subscribe--preview-text">
                                            <div>Enter your Email and subscribe on our company news.</div>
                                        </div>

                                        <form class="footer-subscribe-form" action="">
                                            <div class="fields">
                                                <div class="footer-subscribe-form-field">
                                                    <div class="row-1">
                                                        <div class="footer-subscribe-form--error">
                                                            <span class="t">error</span>
                                                        </div>
                                                    </div>

                                                    <div class="row-2">
                                                        <input class="footer-subscribe-form-input" placeholder="Email" type="text">
                                                    </div>

                                                    <div class="row-3">
                                                        <div class="footer-subscribe-form--error-message">
                                                            <span class="t">error message</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sbmt">
                                                <button class="footer-subscribe-form-submit">Subscribe</button>
                                            </div>
                                        </form>

                                        <!-- preloader -->
                                        <!-- classList: d a -->
                                        <!-- d: display: block -->
                                        <!-- a: opacity: 1 -->
                                        <div class="preloader">
                                            <div class="preloader-block">
                                                <ul class="form-preloader-modes">
                                                    <li class="mode send-mode on">
                                                        <div class="form-preloader-mode">
                                                            <div class="form-preloader--send">
                                                                <div class="loadingio-spinner-spinner-go6ip63iaz">
                                                                    <div class="ldio-m9d4numlatn">
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="mode success-mode">
                                                        <div class="form-preloader-mode">
                                                            <div class="message">
                                                                <div class="form-preloader--message">
                                                                    <span class="t">Your request has sent successfully</span>
                                                                </div>
                                                            </div>

                                                            <div class="close">
                                                                <div class="form-preloader--close">
                                                                    <button class="btn">close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="mode error-mode">
                                                        <div class="form-preloader-mode">
                                                            <div class="message">
                                                                <div class="form-preloader--message">
                                                                    <span class="t">server error</span>
                                                                </div>
                                                            </div>

                                                            <div class="link">
                                                                <div class="form-preloader--error-link">
                                                                    <div class="row-1">
                                                                        <span class="t">Follow link for more information</span>
                                                                    </div>

                                                                    <div class="row-2">
                                                                        <a href="./contacts" class="error-link">contacts</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="close">
                                                                <div class="form-preloader--close">
                                                                    <button class="btn">close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end preloader -->

                                    </div>
                                    <!-- end footer subscribe form -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <div class="copyright">
                <div class="container">
                    <div class="col-1">
                        <div class="company-copyright">
                            <span class="t">TheBox Company @ 2023. All Rights Reserved</span>
                        </div>
                    </div>

                    <div class="col-2">

                        <div class="copyright-author">
                            <div class="container">
                                <div class="copyright-author--title">
                                    <span>Author:</span>
                                    <span>UX/UI Designer</span>
                                    <span>Lowe Nguyen</span>
                                </div>

                                <ul class="copyright-author--contacts">
                                    <li class="item">
                                        <div class="copyright-author--contact">
                                            <div class="title">Figma:</div>
                                            <div class="link">
                                                <a href="https://www.figma.com/@loweinhello" rel="" target="_blank" class="">https://www.figma.com/@loweinhello</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="item">
                                        <div class="copyright-author--contact">
                                            <div class="title">Email:</div>
                                            <div class="link">
                                                <a href="mailto:lowenguyen.mar@gmail.com" rel="" target="_blank">lowenguyen.mar@gmail.com</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="item">
                                        <div class="copyright-author--contact">
                                            <div class="title">Fiverr:</div>
                                            <div class="link">
                                                <a href="https://www.fiverr.com/lowenguyen" rel="" target="_blank" class="">https://www.fiverr.com/lowenguyen</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end footer -->

        </div>
    </div>

    <!-- classList: d a | open mobile menu-->
    <!-- d: display: block; -->
    <!-- a: opacity: 1 -->
    <div class="main-menu-mobile">
        <div class="container">

            <!-- classList: open -->
            <div class="mobile-nav-panel">
                <div class="top">
                    <button class="close">Close</button>
                </div>

                <nav class="nav">

                    <!-- mobile main-menu-list -->
                    <!-- classList: "active" for make item active -->
                    <ul class="mobile-main-nav">
                        <li class="item {{request()->is('/')?'active':''}}">
                            <a href="/" class="link">Home</a>
                        </li>

                        <li class="item {{request()->is('about*')?'active':''}}">
                            <a href="/about" class="link">About Us</a>
                        </li>

                        <li class="item {{request()->is('projects*')?'active':''}}">
                            <a href="/projects" class="link">Projects</a>
                        </li>

                        <li class="item {{request()->is('services*')?'active':''}}">
                            <a href="/services" class="link">Services</a>
                        </li>

                        <li class="item {{request()->is('contacts*')?'active':''}}">
                            <a href="/contacts" class="link">Contacts</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- classList: d a | open callback modal-->
    <!-- d: display: block; -->
    <!-- a: opacity: 1 -->
    <div class="callback-modal">
        <div class="container">
            <div class="callback-modal-form">
                <div class="container">
                    <div class="callback-modal--titles">
                        <div class="col-1"><span class="title">CALLBACK REQUEST</span></div>
                        <div class="col-2"><button class="btn">CLOSE</button></div>
                    </div>

                    <form action="" id="" class="callback-modal--form">
                        <div class="callback-form-field name">
                            <div class="row-1">
                                <div class="col-1">
                                    <label class="label" for="name">Name:</label>
                                </div>

                                <div class="col-2 error">error</div>
                            </div>

                            <div class="row-2">
                                <input class="input" type="text" placeholder="Your Name">
                            </div>

                            <div class="row-3 error-message">message error</div>
                        </div>

                        <div class="callback-form-field phone">
                            <div class="row-1">
                                <div class="col-1">
                                    <label class="label" for="name">Phone:</label>
                                </div>

                                <div class="col-2 error">error</div>
                            </div>

                            <div class="row-2">
                                <input class="input" name="" type="text" placeholder="Your Phone">
                            </div>

                            <div class="row-3 error-message">message error</div>
                        </div>

                        <div class="submit">
                            <button class="btn">Submit</button>
                        </div>
                    </form>

                    <!-- preloader -->
                    <!-- classList: d a -->
                    <!-- d: display: block -->
                    <!-- a: opacity: 1 -->
                    <div class="preloader">
                        <div class="preloader-block">
                            <ul class="form-preloader-modes">
                                <li class="mode send-mode on">
                                    <div class="form-preloader-mode">
                                        <div class="form-preloader--send">
                                            <div class="loadingio-spinner-spinner-go6ip63iaz">
                                                <div class="ldio-m9d4numlatn">
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="mode success-mode">
                                    <div class="form-preloader-mode">
                                        <div class="message">
                                            <div class="form-preloader--message">
                                                <span class="t">Your request has sent successfully</span>
                                            </div>
                                        </div>

                                        <div class="close">
                                            <div class="form-preloader--close">
                                                <button class="btn">close</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="mode error-mode">
                                    <div class="form-preloader-mode">
                                        <div class="message">
                                            <div class="form-preloader--message">
                                                <span class="t">server error</span>
                                            </div>
                                        </div>

                                        <div class="link">
                                            <div class="form-preloader--error-link">
                                                <div class="row-1">
                                                    <span class="t">Follow link for more information</span>
                                                </div>

                                                <div class="row-2">
                                                    <a href="./contacts" class="error-link">contacts</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="close">
                                            <div class="form-preloader--close">
                                                <button class="btn">close</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end preloader -->
                </div>
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('js/script.js') }}"></script>
</body>

</html>