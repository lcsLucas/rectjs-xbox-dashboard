<?php
include "header.php";
?>

<div class="dashboard">

    <div id="navegation">

        <div class="navegation-container">
            <div class="container-fluid">
                <ul class="nav nav-principal">
                    <li class="nav-item">
                        <a class="nav-link" href="#tabPins" data-toggle="collapse" aria-expanded="true" aria-controls="tabPins">
                            Pins
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#tabHome" data-toggle="collapse" aria-expanded="false" aria-controls="tabHome">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabStore" data-toggle="collapse" aria-expanded="false" aria-controls="tabStore">
                            Store
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="tabPins" class="collapse" data-parent="#navegation">

        </div>

        <div id="tabHome" class="collapse show" data-parent="#navegation">

            <div class="scroll scroll-home">

                <div class="container-fluid h-100">

                    <div class="d-flex h-100">
                        <div class="section-content h-100 section-destaque">
                            <div class="row h-70 mb-px-10">
                                <div class="col-12 col-lg-9 h-100">
                                    <div class="content destaque w-100 h-100">
                                        <a href="">
                                            <div class="wrapper-img">
                                                <img class="img-fluid d-block" alt="" src="<?= $baseurl ?>img/jogos/forza-motorsport-7.jpg">
                                                <h3 class="img-descricao">
                                                    Forza Motorsport 7
                                                </h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 d-flex flex-column h-100">
                                    <div class="content feature mb-px-10 h-50">
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="fa-fw">
                                                <path fill="currentColor" d="M638.59 368.22l-33.37-211.59c-8.86-50.26-48.4-90.77-100.66-103.13h-.07a803.19 803.19 0 0 0-369 0C83.17 65.86 43.64 106.36 34.78 156.63L1.41 368.22C-8.9 426.73 38.8 480 101.51 480c49.67 0 93.77-30.07 109.48-74.64l7.52-21.36h203l7.49 21.36C444.72 449.93 488.82 480 538.49 480c62.71 0 110.41-53.27 100.1-111.78zM280 236a12 12 0 0 1-12 12h-52v52a12 12 0 0 1-12 12h-24a12 12 0 0 1-12-12v-52h-52a12 12 0 0 1-12-12v-24a12 12 0 0 1 12-12h52v-52a12 12 0 0 1 12-12h24a12 12 0 0 1 12 12v52h52a12 12 0 0 1 12 12zm152 76a40 40 0 1 1 40-40 40 40 0 0 1-40 40zm64-96a40 40 0 1 1 40-40 40 40 0 0 1-40 40z" class=""></path>
                                            </svg>
                                            <h4>
                                                My games & apps
                                            </h4>
                                        </a>
                                    </div>
                                    <div class="content feature h-50">
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="fa-fw">
                                                <path fill="currentColor" d="M552 64H448V24c0-13.3-10.7-24-24-24H152c-13.3 0-24 10.7-24 24v40H24C10.7 64 0 74.7 0 88v56c0 35.7 22.5 72.4 61.9 100.7 31.5 22.7 69.8 37.1 110 41.7C203.3 338.5 240 360 240 360v72h-48c-35.3 0-64 20.7-64 56v12c0 6.6 5.4 12 12 12h296c6.6 0 12-5.4 12-12v-12c0-35.3-28.7-56-64-56h-48v-72s36.7-21.5 68.1-73.6c40.3-4.6 78.6-19 110-41.7 39.3-28.3 61.9-65 61.9-100.7V88c0-13.3-10.7-24-24-24zM99.3 192.8C74.9 175.2 64 155.6 64 144v-16h64.2c1 32.6 5.8 61.2 12.8 86.2-15.1-5.2-29.2-12.4-41.7-21.4zM512 144c0 16.1-17.7 36.1-35.3 48.8-12.5 9-26.7 16.2-41.8 21.4 7-25 11.8-53.6 12.8-86.2H512v16z" class=""></path>
                                            </svg>
                                            <h4>
                                                Achievements
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row h-30">

                                <div class="col-3">
                                    <div class="content game">
                                        <a href="">
                                            <div class="wrapper-img">
                                                <img alt="" class="d-block img-fluid" src="<?= $baseurl ?>img/jogos/madden-20.jpg">
                                                <h5 class="img-descricao">
                                                    Madden 20
                                                </h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="content feature">
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="fa-fw">
                                                <path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zM88 256H56c0-105.9 86.1-192 192-192v32c-88.2 0-160 71.8-160 160zm160 96c-53 0-96-43-96-96s43-96 96-96 96 43 96 96-43 96-96 96zm0-128c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32z" class=""></path>
                                            </svg>
                                            <h4>
                                                Insert disc
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="content feature">
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="fa-fw">
                                                <path fill="currentColor" d="M512.1 191l-8.2 14.3c-3 5.3-9.4 7.5-15.1 5.4-11.8-4.4-22.6-10.7-32.1-18.6-4.6-3.8-5.8-10.5-2.8-15.7l8.2-14.3c-6.9-8-12.3-17.3-15.9-27.4h-16.5c-6 0-11.2-4.3-12.2-10.3-2-12-2.1-24.6 0-37.1 1-6 6.2-10.4 12.2-10.4h16.5c3.6-10.1 9-19.4 15.9-27.4l-8.2-14.3c-3-5.2-1.9-11.9 2.8-15.7 9.5-7.9 20.4-14.2 32.1-18.6 5.7-2.1 12.1.1 15.1 5.4l8.2 14.3c10.5-1.9 21.2-1.9 31.7 0L552 6.3c3-5.3 9.4-7.5 15.1-5.4 11.8 4.4 22.6 10.7 32.1 18.6 4.6 3.8 5.8 10.5 2.8 15.7l-8.2 14.3c6.9 8 12.3 17.3 15.9 27.4h16.5c6 0 11.2 4.3 12.2 10.3 2 12 2.1 24.6 0 37.1-1 6-6.2 10.4-12.2 10.4h-16.5c-3.6 10.1-9 19.4-15.9 27.4l8.2 14.3c3 5.2 1.9 11.9-2.8 15.7-9.5 7.9-20.4 14.2-32.1 18.6-5.7 2.1-12.1-.1-15.1-5.4l-8.2-14.3c-10.4 1.9-21.2 1.9-31.7 0zm-10.5-58.8c38.5 29.6 82.4-14.3 52.8-52.8-38.5-29.7-82.4 14.3-52.8 52.8zM386.3 286.1l33.7 16.8c10.1 5.8 14.5 18.1 10.5 29.1-8.9 24.2-26.4 46.4-42.6 65.8-7.4 8.9-20.2 11.1-30.3 5.3l-29.1-16.8c-16 13.7-34.6 24.6-54.9 31.7v33.6c0 11.6-8.3 21.6-19.7 23.6-24.6 4.2-50.4 4.4-75.9 0-11.5-2-20-11.9-20-23.6V418c-20.3-7.2-38.9-18-54.9-31.7L74 403c-10 5.8-22.9 3.6-30.3-5.3-16.2-19.4-33.3-41.6-42.2-65.7-4-10.9.4-23.2 10.5-29.1l33.3-16.8c-3.9-20.9-3.9-42.4 0-63.4L12 205.8c-10.1-5.8-14.6-18.1-10.5-29 8.9-24.2 26-46.4 42.2-65.8 7.4-8.9 20.2-11.1 30.3-5.3l29.1 16.8c16-13.7 34.6-24.6 54.9-31.7V57.1c0-11.5 8.2-21.5 19.6-23.5 24.6-4.2 50.5-4.4 76-.1 11.5 2 20 11.9 20 23.6v33.6c20.3 7.2 38.9 18 54.9 31.7l29.1-16.8c10-5.8 22.9-3.6 30.3 5.3 16.2 19.4 33.2 41.6 42.1 65.8 4 10.9.1 23.2-10 29.1l-33.7 16.8c3.9 21 3.9 42.5 0 63.5zm-117.6 21.1c59.2-77-28.7-164.9-105.7-105.7-59.2 77 28.7 164.9 105.7 105.7zm243.4 182.7l-8.2 14.3c-3 5.3-9.4 7.5-15.1 5.4-11.8-4.4-22.6-10.7-32.1-18.6-4.6-3.8-5.8-10.5-2.8-15.7l8.2-14.3c-6.9-8-12.3-17.3-15.9-27.4h-16.5c-6 0-11.2-4.3-12.2-10.3-2-12-2.1-24.6 0-37.1 1-6 6.2-10.4 12.2-10.4h16.5c3.6-10.1 9-19.4 15.9-27.4l-8.2-14.3c-3-5.2-1.9-11.9 2.8-15.7 9.5-7.9 20.4-14.2 32.1-18.6 5.7-2.1 12.1.1 15.1 5.4l8.2 14.3c10.5-1.9 21.2-1.9 31.7 0l8.2-14.3c3-5.3 9.4-7.5 15.1-5.4 11.8 4.4 22.6 10.7 32.1 18.6 4.6 3.8 5.8 10.5 2.8 15.7l-8.2 14.3c6.9 8 12.3 17.3 15.9 27.4h16.5c6 0 11.2 4.3 12.2 10.3 2 12 2.1 24.6 0 37.1-1 6-6.2 10.4-12.2 10.4h-16.5c-3.6 10.1-9 19.4-15.9 27.4l8.2 14.3c3 5.2 1.9 11.9-2.8 15.7-9.5 7.9-20.4 14.2-32.1 18.6-5.7 2.1-12.1-.1-15.1-5.4l-8.2-14.3c-10.4 1.9-21.2 1.9-31.7 0zM501.6 431c38.5 29.6 82.4-14.3 52.8-52.8-38.5-29.6-82.4 14.3-52.8 52.8z" class=""></path>
                                            </svg>
                                            <h4>
                                                Settings
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="content game">
                                        <a href="">
                                            <div class="wrapper-img">
                                                <img alt="" class="d-block img-fluid" src="<?= $baseurl ?>img/jogos/fifa-20.jpg">
                                                <h5 class="img-descricao">
                                                    Fifa 20
                                                </h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="section-content h-100 section-column">
                            <h2 class="section-header">
                                What's new on xbox
                            </h2>

                            <div class="row h-100">

                                <div class="col-12 mb-px-10">
                                    <div class="content game">
                                        <a href="">
                                            <div class="wrapper-img">
                                                <img alt="" class="d-block img-fluid" src="<?= $baseurl ?>img/jogos/ryse-son-of-rome.jpg">
                                                <h5 class="img-descricao">
                                                    Ryse: Son of Rome
                                                </h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 mb-px-10">
                                    <div class="content game">
                                        <a href="">
                                            <div class="wrapper-img">
                                                <img alt="" class="d-block img-fluid" src="<?= $baseurl ?>img/jogos/call-of-duty-warzone.jpg">
                                                <h5 class="img-descricao">
                                                    Call of Duty: Modern Warfare & Warzone
                                                </h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="content game">
                                        <a href="">
                                            <div class="wrapper-img">
                                                <img alt="" class="d-block img-fluid" src="<?= $baseurl ?>img/jogos/blade-runner.jpg">
                                                <h5 class="img-descricao">
                                                    Blade Runner - O Caçador de Androides
                                                </h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div id="tabStore" class="collapse" data-parent="#navegation">

        </div>

    </div>

</div>

<?php
include "footer.php";
