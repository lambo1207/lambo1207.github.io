<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://static-zmp3.zadn.vn/skins/zmp3-v5.2/images/icon_zing_mp3_60.png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./login_submit.php">
    <link rel="stylesheet" href="./song_show.php">
    <title>DreamTeam</title>
</head>

<body>

    <div class="main">
        <div class="sidebar hide-on-mobile">
            <div class="sidebar-logo">
                <a href="#">
                    <img src="./assets/img/home/logo-dark.svg" alt="" class="logo-img hide-on-t-m">
                    <img src="./assets/img/icon_zing_mp3_60.f6b51045.svg" alt="" class="logo-img-t-m">
                </a>
            </div>

            <div class="navbar">
                <div class="nav-item active" id="onclickCaNhan">
                    <i class="nav-item-icon fas fa-music"></i>
                    <a class="nav-item-text hide-on-t-m nav-item-profile">Cá Nhân</a>
                </div>

                <div class="nav-item ">
                    <i class="nav-item-icon fas fa-map-marked-alt"></i>
                    <a class="nav-item-text hide-on-t-m">Khám Phá</a>
                </div>

                <div class="nav-item">
                    <i class="nav-item-icon fas fa-globe"></i>
                    <a class="nav-item-text hide-on-t-m">#zingchart</a>
                </div>

                <div class="nav-item radio">
                    <i class="nav-item-icon fas fa-podcast "></i>
                    <a class="nav-item-text hide-on-t-m">Radio</a>
                    <figure class="image tag is-48x48">
                        <img src="https://zjs.zadn.vn/zmp3-desktop/dev/147506/static/media/live-tag.e25dd240.svg"
                            alt="">
                    </figure>
                </div>

                <div class="nav-item">
                    <i class="nav-item-icon ri-album-line"></i>
                    <a class="nav-item-text hide-on-t-m ">Theo Dõi</a>
                </div>

                <div class="line"></div>

                <div class="nav-item">
                    <i class="nav-item-icon fas fa-headphones"></i>
                    <a class="nav-item-text hide-on-t-m">Nhạc Mới</a>
                </div>

                <div class="nav-item">
                    <i class="nav-item-icon fas fa-th-large"></i>
                    <a class="nav-item-text hide-on-t-m">Thể Loại</a>
                </div>

                <div class="nav-item">
                    <i class="nav-item-icon far fa-star"></i>
                    <a class="nav-item-text hide-on-t-m">Top 100</a>
                </div>

                <div class="nav-item">
                    <i class="nav-item-icon ri-youtube-line"></i>
                    <a class="nav-item-text hide-on-t-m">MV</a>
                </div>
            </div>

            <div class="line hide-on-t-m"></div>

            <div class="new-playlist hide-on-t-m  is-flex">
                <p>
                    <span class="new-playlist-icon">+</span>
                    <span>Tạo playlist mới</span>
                </p>
            </div>
        </div>

        <div class="player">
            <header class="header">
                <div class="header-left">
                    <div class="header-btn hide-on-mobile">
                        <i class="ri-arrow-left-line header-icon-prev"></i>
                        <i class="ri-arrow-right-line header-icon-next"></i>
                    </div>
                    <div class="header-search is-flex">
                        <i class="ri-search-line icon-search"></i>
                        <input type="text" class="search-input" placeholder="Nhập tên bài hát, nghệ sĩ hoặc MV...">
                    </div>
                </div>
                <div class="header-user is-flex">
                    <i class="ri-t-shirt-fill hide-on-mobile"></i>
                    <button class="js-upload">
                        <i class="ri-upload-line hide-on-t-m"></i>
                    </button>
                    <i class="ri-settings-5-line hide-on-mobile"></i>
                    <button class="js-imglogin">
                        <img src="https://avatar.talk.zdn.vn/default.jpg" alt="" class="icon-user">
                    </button>
                </div>
            </header>
            
            <!--UserCaNhan------->
            <div class="user-canhan" id="user-profile-canhan">
                <div class="user-profile-canhan">
                    <video loop autoplay src="./assets/img/home/text.mp4" class="user-img"></video>
                    <h2 class="user-name">DreamTeam</h2>
                    <div class="user-profile-right hide-on-mobile is-flex">
                        <a href="" class="user-buy-vip">MUA VIP NGAY</a>
                        <a href="" class="user-import-vip">NHẬP CODE VIP</a>
                        <a href="" class="user-more"><i class="ri-more-fill"></i></a>
                    </div>
                </div>
                <div class="playlist">
                    <div class="playlist-header is-flex">
                        <h3 class="playlist-heading is-flex">
                            <span>Bài Hát</span>
                            <i class="ri-arrow-right-s-line"></i>
                        </h3>
                        <div class="playlist-header-right is-flex">
                            <button class="btn-upload hide-on-mobile is-flex">
                                <i class="ri-upload-line"></i>
                                <span>TẢI LÊN</span>
                            </button>
                            <button class="btn-play-all is-flex">
                                <i class="ri-play-fill"></i>
                                <span>PHÁT TẤT CẢ</span>
                            </button>
                        </div>
                    </div>

                    <div class="playlist-body">
                        <div class="playlist-body-left hide-on-800">
                            <div class="cd-playlist">
                                <img src="./assets/img/home/icon-playing.gif" alt="" class="cd-gif">
                                <img src="./assets/img/home/music.jpg" alt="" class="cd-player">
                            </div>
                        </div>

                        <!-- <div class="songs-list">
                            <div class="song is-flex">
                                <div class="song-left is-flex">
                                    <div class="thumb">
                                        <i class="ri-play-fill icon-song-play"></i>
                                        <img src="./assets/img/home/icon-playing.gif" alt="" class="gif-playing">
                                    </div>
                                    <div class="song-body">
                                        <h3 class="song-name">Tên Bài hát</h3>
                                        <p class="song-singer">Tên ca sĩ</p>
                                    </div>
                                </div>
                                <div class="time-total">
                                    <span>00:00</span>
                                </div>
                                <div class="song-option">
                                    <i class="ri-heart-3-fill icon-heart"></i>
                                    <i class="ri-more-fill"></i>
                                </div>
                            </div>

                            <div class="song is-flex">
                                <div class="song-left is-flex">
                                    <div class="thumb">
                                        <i class="ri-play-fill icon-song-play"></i>
                                        <img src="./assets/img/home/icon-playing.gif" alt="" class="gif-playing">
                                    </div>
                                    <div class="song-body">
                                        <h3 class="song-name">Tên Bài hát</h3>
                                        <p class="song-singer">Tên ca sĩ</p>
                                    </div>
                                </div>
                                <div class="time-total">
                                    <span>00:00</span>
                                </div>
                                <div class="song-option">
                                    <i class="ri-heart-3-fill icon-heart"></i>
                                    <i class="ri-more-fill"></i>
                                </div>
                            </div>

                        </div> -->
                    </div>
                </div>

            </div>
            <!------------End UserCaNhan -------->
 
        </div>

        <div class="control">
            <div class="control-left">
                <div class="cd">
                    <img src="https://www.apkmirror.com/wp-content/uploads/2019/01/5c3048e69f9a4.png" alt="" class="cd-img">
                    <div class="nodes-list">
                        <span class="cd-node node-1">♫</span>
                        <span class="cd-node node-2">♪</span>
                        <span class="cd-node node-3">♭</span>
                        <span class="cd-node node-4">♫</span>
                        <span class="cd-node node-5">♪</span>
                        <span class="cd-node node-6">♭</span>

                    </div>
                </div>
                <div class="cd-info">
                    <!-- <marquee width="100%" direction="left" behavior="scroll" scrolldelay="160"> -->
                    <p class="cd-name"></p>
                    <!-- </marquee> -->
                    <p class="cd-singer"></p>
                </div>
            </div>
            <div class="control-center">
                <div class="btn-control-list">
                    <div class="btn btn-hover btn-random hide-on-mobile ">
                        <i class="fas fa-random"></i>
                    </div>
                    <div class="btn btn-hover btn-prev hide-on-mobile ">
                        <i class="fas fa-step-backward"></i>
                    </div>
                    <div class="btn btn-play">
                        <i class="far fa-play-circle icon-play"></i>
                        <i class="far fa-pause-circle icon-pause"></i>
                    </div>
                    <div class="btn btn-hover btn-next">
                        <i class="fas fa-step-forward"></i>
                    </div>
                    <div class="btn btn-hover btn-repeat hide-on-mobile ">
                        <i class="fas fa-redo"></i>
                    </div>
                </div>
                <div class="progress-bar">
                    <span class="time-left hide-on-mobile">00:00</span>
                    <div class="progress-line">
                        <input id="progress" class="progress" type="range" value="0" step="0.1" min="0" max="100">
                        <div class="line-first"></div>
                        <div class="line-current"></div>
                        <div class="circle"></div>
                    </div>
                    <span class="time-right hide-on-mobile">00:00</span>
                </div>
                <audio id="audio" src=""></audio>
            </div>

            <div class="control-right hide-on-mobile is-flex">
                <i class="fab fa-youtube"></i>
                <i class="fas fa-microphone-alt"></i>
                <div class="volume is-flex">
                    <div class="volume-icon">
                        <i class="fas fa-volume-mute icon-volume-mute"></i>
                        <i class="fas fa-volume-up icon-volume-up active"></i>
                    </div>
                    <div class="progress-volume-bar">
                        <input id="progress-volume" class="progress-volume" type="range" value="100" step="1" min="0"
                            max="100">
                        <div class="line-volume"></div>
                        <div class="line-volume-current"></div>
                        <div class="circle-volume"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="control-on-mobile">
            <div class="player-on-mobile">
                <div class="control-top">
                    <div class="dashboard-on-mobile">
                        <i class="ri-arrow-down-s-line mobile-icon-hide"></i>
                        <header>
                            <h4>Now playing:</h4>
                            <h2 class="heading-on-mobile">String 57th & 9th</h2>
                        </header>
                    </div>

                    <div class="cd-on-mobile">
                        <div class="cd-thumb-on-mobile" style="background-image: url('./assets/img/masew.jpg')">
                        </div>
                    </div>
                </div>

                <div class="control-bottom">
                    <div class="progress-bar">
                        <span class="time-left">00:00</span>
                        <div class="progress-line">
                            <input id="progress" class="progress" type="range" value="0" step="0.1" min="0" max="100">
                            <div class="line-first"></div>
                            <div class="line-current"></div>
                            <div class="circle"></div>
                        </div>
                        <span class="time-right">00:00</span>
                    </div>

                    <div class="btn-control-list">
                        <div class="btn btn-hover btn-random">
                            <i class="fas fa-random"></i>
                        </div>
                        <div class="btn btn-hover btn-prev">
                            <i class="fas fa-step-backward"></i>
                        </div>
                        <div class="btn btn-play">
                            <i class="far fa-play-circle icon-play"></i>
                            <i class="far fa-pause-circle icon-pause"></i>
                        </div>
                        <div class="btn btn-hover btn-next">
                            <i class="fas fa-step-forward"></i>
                        </div>
                        <div class="btn btn-hover btn-repeat">
                            <i class="fas fa-redo"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <audio id="audio-fake" src=""></audio>
    </div>

    <div class="modal-register">
        <div class="loginmain">
            <div class="logincontent">
                <h2 class="loginheading center">Đăng ký tài khoản Zing Mp3</h2>
                <p class="loginheading-sub center">Cùng nhau tận hưởng âm nhạc
                    <i class="fa fa-heartbeat"></i>
                </p>
                <form action="register_submit.php" method="POST" class="input">
                    <div class="loginrow">
                        <p>Nhập tên</p>
                        <input type="text" name="username" required placeholder="VD: Dream Team">
                    </div>
                    <div class="loginrow">
                        <p>Email</p>
                        <input type="email" name="email" required placeholder="VD: onedream@gmail.com">
                    </div>
                    <div class="loginrow">
                        <p>Mật khẩu</p>
                        <input type="password" name="password" required placeholder="Nhập mật khẩu">
                    </div>
                    <div class="loginrow">
                        <p>Nhập lại mật khẩu</p>
                        <input type="password" name="repassword" required placeholder="Nhập lại mật khẩu">
                    </div>
                    <div class="loginrow">
                        <input type="submit" name="signin" value="Đăng ký" class="loginbton">
                    </div>
                    <div class="loginrow">
                        <button class="loginbtnton js-dangnhap" name="btnDangNhap">Đăng nhập</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <div class="modal-login">
        <div class="loginmain js-loginMain">
            <div class="logincontent">
                <h2 class="loginheading center">Đăng nhập vào Zing Mp3</h2>
                <p class="loginheading-sub center">Cùng nhau tận hưởng âm nhạc
                    <i class="fa fa-heartbeat"></i>
                </p>
                <form action="login_submit.php" method="POST" class="input">
                    <div class="loginrow ">
                        <p>Tên đăng nhập</p>
                        <input type="text" name="username" required placeholder="VD: Dream Team">
                    </div>
                    <div class="loginrow padding-top-20">
                        <p>Mật khẩu</p>
                        <input type="password" name="password" required placeholder="Nhập mật khẩu">
                    </div>
                    <div class="loginrow padding-top-20">
                        <input type="submit" name="submit" value="Đăng nhập" class="loginbton">
                        <a href="#">Quên mật khẩu</a>
                    </div>
                    <div class="loginrow">
                        <button class="loginbtnton js-dangky" name="btnDangKy">Đăng ký</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        
    </script>

    <script src="./assets/Js/login_register.js"></script>
    <script src="./assets/Js/main.js"></script>
</body>

</html>