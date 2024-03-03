
@import url("https://fonts.googleapis.com/css2?family=Inter&family=Manrope:wght@500;600&display=swap");

html {
    font-size: 16px;
    scroll-behavior: smooth;
}

body {
    padding: 0;
    margin: 0;
    font-size: 16px;
    color: #536479;
    line-height: 26px;
    overflow-x: hidden;
    font-family: "Inter", sans-serif;
    background: #ffffff;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-weight: 500;
    margin: 0;
    line-height: 1.2;
    color: #2a3f65;
    font-family: "Manrope", sans-serif;
}

h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a {
    color: #2a3f65;
}

h1 a:hover,
h2 a:hover,
h3 a:hover,
h4 a:hover,
h5 a:hover,
h6 a:hover {
    color: #5B53F1;
}

h1 {
    font-size: 36px;
}

h2 {
    font-size: 28px;
    margin-top: -9px;
}

h3 {
    font-size: 24px;
    margin-top: -8px;
}

h4 {
    font-size: 22px;
    margin-top: -5px;
}

h5 {
    font-size: 20px;
    margin-top: -4px;
}

h6 {
    font-size: 18px;
    margin-top: -6px;
}

p {
    margin-top: -9px;
}

p:last-child {
    margin-bottom: -7px !important;
}

@media (min-width: 576px) {
    h1 {
        font-size: 48px;
    }

    h2 {
        font-size: 40px;
        margin-top: -11px;
    }

    h3 {
        font-size: 30px;
        margin-top: -9px;
    }

    h4 {
        font-size: 22px;
        margin-top: -7px;
    }

    h5 {
        font-size: 20px;
        margin-top: -5px;
    }
}

@media (min-width: 768px) {
    h1 {
        font-size: 50px;
        line-height: 65px;
    }

    h2 {
        font-size: 42px;
    }

    h3 {
        font-size: 30px;
        margin-top: -9px;
    }

    h4 {
        font-size: 24px;
        margin-top: -8px;
    }

    h5 {
        font-size: 22px;
        margin-top: -7px;
    }
}

a {
    display: inline-block;
    -webkit-transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    transition: all ease 0.3s;
}

a:hover {
    text-decoration: none;
    color: inherit;
}

ul {
    margin: 0;
    padding: 0;
}

ul li {
    list-style: none;
}

label,
button,
select {
    cursor: pointer;
}

.bg_img {
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
}

.bg_contain {
    background-size: contain;
}

input,
textarea {
    width: 100%;
}

.sponsor-wrapper, .feature-item, .widget-body .widget-tags, .social-icons, .footer-wrapper {
    display: flex;
    flex-wrap: wrap;
}

.pt-80 {
    padding-top: 80px;
}

.pb-80 {
    padding-bottom: 80px;
}

.pt-100 {
    padding-top: 80px;
}

.pb-100 {
    padding-bottom: 80px;
}

.pt-50 {
    padding-top: 40px;
}

.pb-50 {
    padding-bottom: 40px;
}

@media (min-width: 992px) {
    .pt-100 {
        padding-top: 110px;
    }

    .pb-100 {
        padding-bottom: 110px;
    }

    .pt-50 {
        padding-top: 60px;
    }

    .pb-50 {
        padding-bottom: 60px;
    }
}

.overlayer {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    z-index: 99;
    display: none;
}

.overlayer.active {
    display: block;
    animation-name: fadeIn;
    -webkit-animation-name: fadeIn;
    -moz-animation-name: fadeIn;
    animation-duration: 0.3s;
    -webkit-animation-duration: 0.3s;
    -moz-animation-duration: 0.3s;
}

.rtl {
    direction: rtl;
}

.ltr {
    direction: ltr;
}

.section-title {
    margin-bottom: 30px;
}

.section-title .subtitle {
    margin-bottom: 15px;
}

.section-title .title {
    margin-bottom: 20px;
}

.section-title.text-center {
    max-width: 720px;
    margin-left: auto;
    margin-right: auto;
}

.section-title.text-center p {
    max-width: 660px;
    margin-left: auto;
    margin-right: auto;
}

@media (min-width: 768px) {
    .section-title {
        margin-bottom: 40px;
    }
}

@media (min-width: 992px) {
    .section-title {
        margin-bottom: 50px;
    }
}

.pagination {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: -5px;
    margin-top: 30px;
}

.pagination li {
    padding: 5px;
}

.pagination li a {
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    background: #f7fafd;
    color: #2a3f65;
    border: 1px solid #e8eaff;
}

.pagination li a:hover {
    border-color: #5B53F1;
}

.pagination li a.active {
    background: #5B53F1;
    border-color: #5B53F1;
    color: #fff;
}

.pagination li a.disabled {
    background: rgba(91, 83, 241, 0.1);
}

/*Footer*/
.footer-top {
    padding: 80px 0;
}

.bottom-menu-wrapper {
    margin: -5px;
    align-items: center;
}

.bottom-menu-wrapper .footer-logo {
    max-width: 170px;
    margin: 5px;
}

.bottom-menu-wrapper .footer-logo a {
    display: block;
}

.bottom-menu-wrapper .footer-logo a img {
    width: 100%;
}

.bottom-menu-wrapper .copyright {
    margin: 5px;
}

@media (max-width: 991px) {
    .bottom-menu-wrapper .copyright {
        width: 100%;
        order: 1;
        text-align: center;
    }
}

@media (max-width: 575px) {
    .bottom-menu-wrapper {
        text-align: center;
    }

    .bottom-menu-wrapper > * {
        width: 100%;
        justify-content: center;
    }

    .bottom-menu-wrapper .footer-logo {
        margin-bottom: 10px;
    }

    .bottom-menu-wrapper .bottom-menu {
        margin-bottom: 5px;
    }
}

.bottom-menu {
    display: flex;
    flex-wrap: wrap;
}

.bottom-menu li {
    padding: 0 5px;
}

.bottom-menu li a {
    padding: 0 5px;
    color: #2a3f65;
    font-family: "Manrope", sans-serif;
}

@media (max-width: 767px) {
    .bottom-menu li a {
        font-size: 14px;
    }
}

.footer-wrapper {
    margin: 0 -12px -35px;
    justify-content: space-between;
}

.footer-widget {
    margin-bottom: 35px;
    padding: 0 12px;
    width: 25%;
}

@media (max-width: 991px) {
    .footer-widget {
        width: 50%;
    }
}

@media (max-width: 575px) {
    .footer-widget {
        width: 220px;
        flex-grow: 1;
    }
}

.footer-widget .footer-title {
    text-transform: capitalize;
    margin-bottom: 15px;
    font-weight: 600;
}

.footer-widget ul li {
    position: relative;
}

.footer-widget ul li a {
    color: #2a3f65;
    padding: 5px 0;
    padding-left: 20px;
}

.footer-widget ul li a:hover {
    color: #5B53F1;
    padding-left: 23px;
}

.footer-widget ul li a:hover::before {
    -webkit-transform: translateX(5px);
    -ms-transform: translateX(5px);
    transform: translateX(5px);
}

.footer-widget ul li a::before {
    content: "";
    width: 7px;
    height: 7px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    background: #5B53F1;
    -webkit-transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    transition: all ease 0.3s;
    position: absolute;
    left: 0;
    top: 15px;
}

.parent-menu {
    position: relative;
    z-index: 999 !important;
}

.parent-menu > a {
    align-items: center;
}

.parent-menu > a::after {
    content: "\f107";
    font-weight: 700;
    font-family: "Font Awesome 5 Free";
    margin-left: 5px;
    -webkit-transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    transition: all ease 0.3s;
    display: inline-block;
}

@media (max-width: 991px) {
    .parent-menu > a::after {
        margin-left: auto;
    }
}

.parent-menu:hover > a::after, .parent-menu.open > a::after {
    -webkit-transform: rotate(-180deg);
    -ms-transform: rotate(-180deg);
    transform: rotate(-180deg);
}

@media (min-width: 992px) {
    .parent-menu.open .submenu {
        display: block !important;
    }

    .parent-menu .submenu {
        display: block !important;
    }
}

.nav-toggle {
    position: relative;
    cursor: pointer;
    width: 25px;
    height: 20px;
}

.nav-toggle span {
    position: absolute;
    display: inline-block;
    height: 3px;
    width: 100%;
    -webkit-transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    transition: all ease 0.3s;
    background: #2a3f65;
    left: 0;
}

.nav-toggle span:first-child {
    top: 0;
}

.nav-toggle span:nth-child(2) {
    top: 52%;
    transform: translateY(-65%);
}

.nav-toggle span:last-child {
    bottom: 0;
}

.nav-toggle.active span:first-child {
    -webkit-transform: rotate(45deg) translate(3px, 9px);
    -ms-transform: rotate(45deg) translate(3px, 9px);
    transform: rotate(45deg) translate(3px, 9px);
}

.nav-toggle.active span:nth-child(2) {
    opacity: 0;
}

.nav-toggle.active span:last-child {
    -webkit-transform: rotate(-45deg) translate(3px, -9px);
    -ms-transform: rotate(-45deg) translate(3px, -9px);
    transform: rotate(-45deg) translate(3px, -9px);
}

.navbar-top {
    position: relative;
    z-index: 999;
    padding-top: 5px;
    padding-bottom: 5px;
}

@media (max-width: 767px) {
    .navbar-top {
        padding-top: 10px;
        padding-bottom: 10px;
    }
}

.social-icons {
    justify-content: center;
    margin: -3px;
}

.social-icons li {
    padding: 3px;
}

.social-icons li a i {
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: #fff;
    -webkit-transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    transition: all ease 0.3s;
}

.social-icons li a i:hover {
    background: #5B53F1;
    color: #fff;
}

.social-icons li a i[class*=facebook]:hover {
    background: #3b5998;
}

.social-icons li a i[class*=whatsapp]:hover {
    background: #25d366;
}

.social-icons li a i[class*=twitter]:hover {
    background: #55acee;
}

.social-icons li a i[class*=linkedin]:hover {
    background: #007bb5;
}

.social-icons li a i[class*=instagram]:hover {
    background: #e4405f;
}

.social-icons li a i[class*=google]:hover {
    background: #dd4b39;
}

.social-icons li a i[class*=youtube]:hover {
    background: #cd201f;
}

.social-icons li a i[class*=camera]:hover {
    background: #e4405f;
}

.social-icons li a i[class*=pinterest]:hover {
    background: #007bb5;
}

.social-icons li a i[class*=tumblr]:hover {
    background: #34465d;
}

.social-icons li a i[class*=behance]:hover {
    background: #1769ff;
}

.social-icons li a i[class*=skype]:hover {
    background: #2fb7df;
}

.social-icons li a i[class*=vimeo]:hover {
    background: #1ab7ea;
}

.contact-bar {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}

@media (max-width: 767px) {
    .contact-bar {
        justify-content: center;
    }
}

.contact-bar li a {
    color: #fff;
}

.contact-bar li:not(:last-child) {
    border-right: 1px solid rgba(255, 255, 255, 0.1);
}

.contact-bar li:not(:last-child) a {
    padding: 0 10px;
    font-size: 14px;
}

.contact-bar li:nth-last-child(2) {
    border: none;
}

.navbar-bottom {
    position: sticky;
    top: 0;
    left: 0;
    z-index: 999;
    border-bottom: 1px solid transparent;
    background: #ffffff;
}

.navbar-bottom.active {
    width: 100%;
    position: fixed;
    box-shadow: 0 0 5px rgba(91, 83, 241, 0.2);
}

.navbar-wrapper {
    padding: 15px 0;
}

.navbar-wrapper .logo {
    max-width: 190px;
}

@media (max-width: 575px) {
    .navbar-wrapper .logo {
        max-width: 130px;
    }
}

.navbar-wrapper .logo a {
    display: block;
}

.navbar-wrapper .logo img {
    width: 100%;
}

.change-language {
    display: flex;
    align-items: center;
    font-size: 14px;
    display: flex;
    align-items: center;
}

.change-language span {
    color: #5B53F1;
    margin-right: 2px;
}

.change-language a {
    color: #fff;
}

.change-language a:not(:last-child)::after {
    content: "/";
    display: inline-block;
    margin: 0 5px;
    color: #fff;
}

.change-language .language-bar {
    height: 32px;
    padding-left: 5px;
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 4px;
    margin-left: 15px;
    outline: none;
    background: transparent;
    color: #fff;
}

.change-language .language-bar option {
    color: #2a3f65;
    background: #f7fafd;
}

.change-language .language-bar:focus {
    box-shadow: none;
}

@media screen and (max-width: 375px) {
    .change-language {
        font-size: 12px;
        font-family: "Manrope", sans-serif;
    }

    .change-language .language-bar {
        margin-left: 5px;
    }
}

.change-language.text--title .language-bar {
    color: #2a3f65;
    border-color: #e8eaff;
}

/*Nav Menu*/
.navbar-wrapper {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}

@media (min-width: 992px) {
    .nav-menu {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .nav-menu li a:not([class*=btn]) {
        color: #2a3f65;
        font-family: "Manrope", sans-serif;
        text-transform: capitalize;
        padding: 5px 15px;
        font-weight: 600;
    }

    .nav-menu li .cmn--btn {
        padding: 5px 10px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
    }

    .nav-menu li .sub-nav {
        min-width: 220px;
        position: absolute;
        left: 0;
        top: 100%;
        border-bottom: 3px solid #5B53F1;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        background: #fff;
        -webkit-transition: all ease 0.3s;
        -moz-transition: all ease 0.3s;
        transition: all ease 0.3s;
        box-shadow: 0 0 5px rgba(91, 83, 241, 0.3);
    }

    .nav-menu li .sub-nav li a {
        padding: 5px 15px;
        font-size: 14px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .nav-menu li .sub-nav li a:hover {
        padding-left: 20px;
        background: #5B53F1;
        color: #fff;
    }

    .nav-menu li .sub-nav li:not(:last-child) > a {
        border-bottom: 1px solid #e8eaff;
    }

    .nav-menu li .sub-nav .sub-nav {
        left: 100%;
        top: 0;
    }

    .nav-menu li:not(:hover) .sub-nav {
        -webkit-transform: translateY(10px);
        -ms-transform: translateY(10px);
        transform: translateY(10px);
        opacity: 0;
        visibility: hidden;
    }

    .nav-menu li:nth-last-of-type(1) .sub-nav, .nav-menu li:nth-last-of-type(2) .sub-nav, .nav-menu li:nth-last-of-type(3) .sub-nav {
        left: unset;
        right: 0;
    }

    .nav-menu li:nth-last-of-type(1) .sub-nav .sub-nav, .nav-menu li:nth-last-of-type(2) .sub-nav .sub-nav, .nav-menu li:nth-last-of-type(3) .sub-nav .sub-nav {
        right: 100%;
    }
}

/*Nav Mobile Menu*/
@media (max-width: 991px) {
    .nav-menu-area {
        position: fixed;
        left: 0;
        top: 0;
        bottom: 0;
        width: 100%;
        max-width: 320px;
        background: #2a3f65;
        padding: 30px 20px;
        overflow-y: auto;
        -webkit-transition: all ease 0.3s;
        -moz-transition: all ease 0.3s;
        transition: all ease 0.3s;
        transform-origin: left;
    }

    .nav-menu-area .menu-close {
        position: absolute;
        right: 30px;
        top: 20px;
        font-size: 20px;
    }

    .nav-menu-area:not(.active) {
        -webkit-transform: scaleX(0);
        -ms-transform: scaleX(0);
        transform: scaleX(0);
    }

    .nav-menu-area .nav-menu li a {
        color: #fff;
        display: flex;
        justify-content: space-between;
        padding: 5px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .nav-menu-area .nav-menu li a.cmn--btn {
        background: #fff;
        color: #5B53F1;
        display: inline-flex;
        padding: 5px 15px;
        margin-top: 15px;
    }

    .nav-menu-area .nav-menu .sub-nav {
        padding-left: 15px;
        display: none;
        font-size: 14px;
    }
}
/*Banner Section Starts Here*/
.banner__wrapper {
    display: flex;
    flex-wrap: wrap;
}

.banner__wrapper-content {
    align-self: center;
    width: 50%;
    padding: 40px 0;
    position: relative;
    z-index: 1;
}

.banner__wrapper-content .subtitle {
    margin-bottom: 5px;
}

.banner__wrapper-content .title {
    margin-bottom: 25px;
}

.banner__wrapper-content p {
    max-width: 600px;
}

@media (min-width: 576px) {
    .banner__wrapper-content p {
        font-size: 18px;
        line-height: 1.6;
    }
}

.banner__wrapper-thumb {
    position: relative;
    z-index: 1;
}

@media (min-width: 992px) {
    .banner__wrapper {
        min-height: 820px;
    }

    .banner__wrapper-thumb {
        inset: 0 18px 0 50%;
        position: absolute;
    }
}

@media (min-width: 992px) and (max-width: 1199px) {
    .banner__wrapper {
        min-height: 700px;
    }

    .banner__wrapper-thumb {
        inset: 0 0 0 50%;
    }
}

@media (min-width: 992px) {
    .banner__wrapper-thumb {
        background: #5B53F1;
        mask: url(./img/banner-shape.png) no-repeat left bottom/cover;
        -webkit-mask: url(./img/banner-shape.png) no-repeat left bottom/cover;
    }

    .banner__wrapper-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
}

@media (max-width: 991px) {
    .banner__wrapper-content {
        width: 100%;
        padding: 60px 0 30px;
    }

    .banner__wrapper-thumb {
        mask: url(./img/banner-shape.png) no-repeat center center/contain;
        -webkit-mask: url(./img/banner-shape.png) no-repeat center center/contain;
    }

    .banner__wrapper-thumb img {
        width: 100%;
    }
}

.banner-section {
    position: relative;
    overflow: hidden;
}

.banner-elem {
    position: absolute;
    display: block;
    overflow: hidden;
}

.banner-elem.elem1 {
    width: 20px;
    height: 20px;
    background: url(./img/banner-elements/1.png) no-repeat center center/contain;
    top: 30px;
    left: calc(50% - 75px);
    animation: rotate 4s alternate infinite;
}

.banner-elem.elem2 {
    width: 30px;
    height: 30px;
    background: url(./img/banner-elements/2.png) no-repeat center center/contain;
    top: 100px;
    left: calc(50% - 570px);
    animation: rotate 4s alternate-reverse infinite;
}

.banner-elem.elem3 {
    width: 30px;
    height: 30px;
    background: url(./img/banner-elements/3.png) no-repeat center center/contain;
    right: 100px;
    top: 30px;
    animation: rotate 4s alternate infinite;
}

.banner-elem.elem4 {
    width: 75px;
    height: 40px;
    background: url(./img/banner-elements/4.png) no-repeat center center/contain;
    top: 230px;
    left: 50%;
    animation: move1 4s alternate infinite;
}

.banner-elem.elem5 {
    width: 45px;
    height: 45px;
    background: url(./img/banner-elements/5.png) no-repeat center center/contain;
    top: 240px;
    right: calc(50% + 800px);
    animation: move2 4s alternate infinite;
}

.banner-elem.elem6 {
    width: 40px;
    height: 40px;
    background: url(./img/banner-elements/6.png) no-repeat center center/contain;
    bottom: 130px;
    right: 50%;
    animation: jump 3s alternate infinite;
}

.banner-elem.elem7 {
    width: 40px;
    height: 40px;
    background: url(./img/banner-elements/7.png) no-repeat center center/contain;
    bottom: 60px;
    right: calc(50% + 780px);
    animation: move2 5s alternate infinite;
}

.banner-elem.elem10 {
    width: 40px;
    height: 40px;
    background: url(./img/banner-elements/7.png) no-repeat center center/contain;
    top: 550px;
    left: 120px;
    animation: move2 5s alternate infinite;
}

.banner-elem.elem8 {
    width: 55px;
    height: 55px;
    background: url(./img/banner-elements/8.png) no-repeat center center/contain;
    right: 30px;
    bottom: 30px;
    animation: move2 4s alternate infinite;
}

.banner-elem.elem9 {
    width: 100px;
    height: 100px;
    background: url(./img/banner-elements/9.png) no-repeat center center/contain;
    bottom: 0;
    left: calc(50% - 330px);
    animation: slide 5s alternate infinite;
}

@keyframes rotate {
    0% {
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(720deg);
        -ms-transform: rotate(720deg);
        transform: rotate(720deg);
    }
}

@keyframes move1 {
    0% {
        -webkit-transform: translate(0px, 0px);
        -ms-transform: translate(0px, 0px);
        transform: translate(0px, 0px);
    }

    50% {
        -webkit-transform: translate(50px, 55px);
        -ms-transform: translate(50px, 55px);
        transform: translate(50px, 55px);
    }

    100% {
        -webkit-transform: translate(50px, -50px);
        -ms-transform: translate(50px, -50px);
        transform: translate(50px, -50px);
    }
}

@keyframes move2 {
    0% {
        -webkit-transform: translate(0px, 0px) rotate(0deg);
        -ms-transform: translate(0px, 0px) rotate(0deg);
        transform: translate(0px, 0px) rotate(0deg);
    }

    50% {
        -webkit-transform: translate(50px, 55px) rotate(360deg);
        -ms-transform: translate(50px, 55px) rotate(360deg);
        transform: translate(50px, 55px) rotate(360deg);
    }

    100% {
        -webkit-transform: translate(50px, -50px) rotate(-360deg);
        -ms-transform: translate(50px, -50px) rotate(-360deg);
        transform: translate(50px, -50px) rotate(-360deg);
    }
}

@keyframes jump {
    0% {
        -webkit-transform: translateY(0px);
        -ms-transform: translateY(0px);
        transform: translateY(0px);
    }

    40% {
        -webkit-transform: translateY(50px);
        -ms-transform: translateY(50px);
        transform: translateY(50px);
    }

    70% {
        -webkit-transform: translateY(-30px);
        -ms-transform: translateY(-30px);
        transform: translateY(-30px);
    }

    100% {
        -webkit-transform: translateY(80px);
        -ms-transform: translateY(80px);
        transform: translateY(80px);
    }
}

@keyframes slide {
    0% {
        -webkit-transform: translateX(0px);
        -ms-transform: translateX(0px);
        transform: translateX(0px);
    }

    40% {
        -webkit-transform: translateX(50px);
        -ms-transform: translateX(50px);
        transform: translateX(50px);
    }

    70% {
        -webkit-transform: translateX(-30px);
        -ms-transform: translateX(-30px);
        transform: translateX(-30px);
    }

    100% {
        -webkit-transform: translateX(80px);
        -ms-transform: translateX(80px);
        transform: translateX(80px);
    }
}
/*Hero Section*/
.hero-section {
    padding: 80px 0 90px;
    border-bottom: 1px solid #e8eaff;
    position: relative;
}

.hero-content {
    position: relative;
    text-align: center;
}

.hero-content .hero-title {
    margin-bottom: 10px;
}

.hero-content .breadcrumb {
    justify-content: center;
    padding: 0;
    margin: 0;
}

.hero-content .breadcrumb li {
    color: #5B53F1;
    font-weight: 600;
    font-family: "Manrope", sans-serif;
}

.hero-content .breadcrumb li a {
    color: #2a3f65;
    display: inline-flex;
    align-items: center;
}

.hero-content .breadcrumb li a::after {
    content: "";
    display: inline-block;
    height: 2px;
    width: 10px;
    background: #2a3f65;
    margin: 0 5px;
    -webkit-transform: translateY(2px);
    -ms-transform: translateY(2px);
    transform: translateY(2px);
}

/*Blog Sidebar*/
.widget {
    -webkit-border-radius: 7px;
    -moz-border-radius: 7px;
    border-radius: 7px;
}

.widget:not(:last-child) {
    margin-bottom: 25px;
}

.widget-header {
    padding: 12px 15px;
    background: #5B53F1;
    -webkit-border-radius: 7px 7px 0 0;
    -moz-border-radius: 7px 7px 0 0;
    border-radius: 7px 7px 0 0;
}

.widget-body {
    border: 1px solid #e8eaff;
    border-top: none;
    padding: 20px;
    -webkit-border-radius: 0 0 7px 7px;
    -moz-border-radius: 0 0 7px 7px;
    border-radius: 0 0 7px 7px;
}

.widget-body .archive-links li a {
    color: #2a3f65;
    display: flex;
    justify-content: space-between;
    padding: 8px 0;
}

.widget-body .archive-links li a::before {
    content: "\f101";
    margin-right: 5px;
    display: inline-block;
    font-family: "Font Awesome 5 Free";
    font-weight: 600;
    color: #5B53F1;
    -webkit-transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    transition: all ease 0.3s;
}

.widget-body .archive-links li a span:last-child {
    margin-left: auto;
}

.widget-body .archive-links li a:hover {
    padding-left: 2px;
}

.widget-body .archive-links li a:hover::before {
    -webkit-transform: translateX(3px);
    -ms-transform: translateX(3px);
    transform: translateX(3px);
}

.widget-body .archive-links li:not(:last-child) {
    border-bottom: 1px solid #e8eaff;
}

.widget-body .archive-links li:first-child a {
    padding-top: 0;
}

.widget-body .archive-links li:last-child a {
    padding-bottom: 0;
}

.widget-body .latest-posts li {
    padding: 0;
}

.widget-body .latest-posts li:not(:last-child) {
    padding-bottom: 10px;
    border-bottom: 1px solid #e8eaff;
}

.widget-body .latest-posts li:not(:first-child) {
    padding-top: 10px;
}

.widget-body .latest-posts li a {
    display: flex;
}

.widget-body .latest-posts li a .img {
    width: 70px;
}

.widget-body .latest-posts li a .img img {
    height: 70px;
    object-fit: cover;
    width: 100%;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}

.widget-body .latest-posts li a .cont {
    width: calc(100% - 70px);
    padding-left: 15px;
}

.widget-body .latest-posts li a .cont .subtitle {
    margin: 0;
    font-size: 18px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    overflow: hidden;
    text-overflow: ellipsis;
}

.widget-body .latest-posts li a .cont .date {
    font-size: 14px;
    color: #5B53F1;
}

.widget-body .widget-tags {
    margin: -3px;
}

.widget-body .widget-tags li {
    padding: 3px;
}

.widget-body .widget-tags li a {
    padding: 7px 15px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    background: #f7fafd;
    border: 1px solid #e8eaff;
    color: #2a3f65;
    font-size: 14px;
}

.widget-body .widget-tags li a:hover, .widget-body .widget-tags li a.active {
    background: #5B53F1;
    border-color: #5B53F1;
    color: #fff;
}

/*About*/
@media (max-width: 1399px) {
    .about-img img {
        max-width: 650px;
    }
}

@media (max-width: 1199px) {
    .about-img img {
        max-width: 540px;
    }
}

@media (max-width: 991px) {
    .about-img {
        max-width: 650px;
        margin: 0 auto;
    }

    .about-img img {
        max-width: 100%;
    }
}

.about-feature-wrapper {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -7px -35px;
}

.about-feature-wrapper .about-feature-item {
    padding: 0 7px 35px;
    display: flex;
    flex-wrap: wrap;
    width: 50%;
}

@media (min-width: 992px) and (max-width: 1199px) {
    .about-feature-wrapper .about-feature-item {
        width: 100%;
    }
}

@media (max-width: 767px) {
    .about-feature-wrapper .about-feature-item {
        width: 100%;
    }
}

.about-feature-wrapper .about-feature-item .icon {
    font-size: 30px;
    line-height: 1;
    color: #5B53F1;
    width: 30px;
}

.about-feature-wrapper .about-feature-item .cont {
    width: calc(100% - 30px);
    padding-left: 22px;
}

.about-feature-wrapper .about-feature-item .cont .subtitle {
    color: #5B53F1;
    margin-bottom: 15px;
}

/*Service*/
.service-item {
    text-align: center;
    box-shadow: 0 2px 5px rgba(91, 83, 241, 0.6);
    background: #fff;
    position: relative;
    z-index: 1;
    padding: 30px 15px;
    -webkit-border-radius: 7px;
    -moz-border-radius: 7px;
    border-radius: 7px;
    -webkit-transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    transition: all ease 0.3s;
}

.service-item .service-icon {
    font-size: 40px;
    line-height: 1;
    color: #5B53F1;
    width: 70px;
    height: 50px;
    text-align: center;
    margin: 0 auto 20px;
}

.service-item .title {
    margin-bottom: 20px;
}

.service-item:hover {
    -webkit-transform: scale(1.021);
    -ms-transform: scale(1.021);
    transform: scale(1.021);
}

/*How To*/
.how-thumb img {
    max-width: 753px;
}

@media (max-width: 1399px) {
    .how-thumb img {
        max-width: 720px;
    }
}

@media (max-width: 1199px) {
    .how-thumb img {
        max-width: 680px;
    }
}

@media (max-width: 991px) {
    .how-thumb img {
        max-width: 100%;
    }
}

.how-wrapper {
    counter-reset: how-counter;
}

.how__item {
    display: flex;
    flex-wrap: wrap;
    font-size: 14px;
    position: relative;
}

.how__item-thumb {
    font-size: 24px;
    color: #fff;
    width: 70px;
    height: 70px;
    line-height: 70px;
    text-align: center;
    background: #5B53F1;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}

.how__item-content {
    padding-left: 30px;
    width: calc(100% - 70px);
}

.how__item-content p {
    max-width: 440px;
}

.how__item-title {
    margin: 0;
    margin-bottom: 15px;
}

.how__item::after {
    position: absolute;
    counter-increment: how-counter;
    content: "0" counter(how-counter);
    font-size: 40px;
    font-weight: 700;
    color: #5B53F166;
    top: 100%;
    left: 0;
}

.how__item:nth-of-type(n + 10)::after {
    content: counter(how-counter);
}

.how__item:not(:last-child) {
    margin-bottom: 45px;
}

@media (min-width: 992px) {
    .how__item {
        flex-direction: row-reverse;
        text-align: right;
    }

    .how__item-content {
        padding-left: 0;
        padding-right: 30px;
    }

    .how__item-content p {
        margin-left: auto;
    }

    .how__item::after {
        left: unset;
        right: 0;
    }
}

/*Counter*/
.counter-item {
    position: relative;
    margin-left: 35px;
    padding: 35px 25px 35px 55px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    background: #f7fafd;
    height: 100%;
    display: flex;
    align-items: center;
    box-shadow: 0 0 5px rgba(42, 63, 101, 0.2);
    z-index: 1;
}

.counter-item .counter-icon {
    width: 70px;
    height: 70px;
    line-height: 70px;
    text-align: center;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    font-size: 24px;
    color: #5B53F1;
    background: #fff;
    box-shadow: 0 0 4px rgba(42, 63, 101, 0.3);
    position: absolute;
    left: -35px;
    top: calc(50% - 35px);
}

.counter-item .counter-content {
    width: 100%;
}

.counter-item .counter-content .counter-title {
    margin: 0;
    display: flex;
    align-items: center;
    color: #5B53F1;
    margin-bottom: 10px;
}

.counter-item .counter-content .counter-subtitle {
    font-size: 16px;
}

/*Feature*/
.sticky-section-title {
    position: sticky;
    top: 200px;
}

.feature-item {
    padding: 40px 30px;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    background: #fff;
    position: relative;
    z-index: 1;
    box-shadow: 0 0 5px #5B53F11a;
    border: 1px solid #e8eaff;
}

.feature-item .feature-icon img {
    width: 60px;
    height: 60px;
    object-fit: contain;
    object-position: left top;
}

.feature-item .feature-content {
    width: calc(100% - 60px);
    padding-left: 20px;
}

.feature-item .feature-content .feature-title {
    margin-bottom: 15px;
}

.feature-item:not(:last-child) {
    margin-bottom: 24px;
}

@media screen and (max-width: 450px) {
    .feature-item {
        padding: 30px 15px;
    }

    .feature-item .feature-icon img {
        width: 40px;
        height: 40px;
    }

    .feature-item .feature-content {
        width: calc(100% - 40px);
        padding-left: 15px;
        font-size: 14px;
        line-height: 1.6;
    }
}

/*FAQs*/
.accordion-item:not(:last-child) {
    margin-bottom: 14px;
}

.accordion-item .accordion-title {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    cursor: pointer;
    padding: 15px 15px 15px 20px;
    background: #f7fafd;
    border: 1px solid #e8eaff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}

.accordion-item .accordion-title .title {
    flex-grow: 1;
    margin: 0;
    font-weight: 600;
    max-width: calc(100% - 20px);
}

.accordion-item .accordion-title .icon {
    width: 14px;
    height: 14px;
    border-left: 1px solid #2a3f65;
    border-bottom: 1px solid #2a3f65;
    -webkit-transform: translateX(-5px) rotate(-45deg);
    -ms-transform: translateX(-5px) rotate(-45deg);
    transform: translateX(-5px) rotate(-45deg);
    -webkit-transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    transition: all ease 0.3s;
    display: block;
}

.accordion-item .accordion-content {
    padding: 25px 20px;
    display: none;
    border: 1px solid #e8eaff;
    border-top: none;
    -webkit-border-radius: 0 0 5px 5px;
    -moz-border-radius: 0 0 5px 5px;
    border-radius: 0 0 5px 5px;
}

.accordion-item.active .accordion-content {
    display: block;
}

.accordion-item.open .accordion-title {
    -webkit-border-radius: 5px 5px 0 0;
    -moz-border-radius: 5px 5px 0 0;
    border-radius: 5px 5px 0 0;
}

.accordion-item.open .accordion-title .icon {
    -webkit-transform: translateX(-5px) translateY(8px) rotate(135deg);
    -ms-transform: translateX(-5px) translateY(8px) rotate(135deg);
    transform: translateX(-5px) translateY(8px) rotate(135deg);
}

/*Testimonial*/
.testimonial-item {
    padding: 22px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    background: #f7fafd;
    border: 1px solid #e8eaff;
    font-size: 14px;
    line-height: 1.6;
}

.testimonial-item .testimonial-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.testimonial-item .testimonial-header .thumb {
    width: 80px;
    height: 80px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    overflow: hidden;
    border: 1px solid #e8eaff;
}

.testimonial-item .testimonial-header .thumb img {
    width: 100%;
}

.testimonial-item .testimonial-header .icon {
    font-size: 50px;
    color: #5B53F166;
}

.testimonial-item .rating {
    font-size: 16px;
    color: #e9ba17;
    margin-bottom: 15px;
}

/*Sponsor*/
.sponsor-wrapper .sponsor-item {
    width: 14.2857142857%;
}

.sponsor-item {
    padding: 20px;
    background: #f7fafd;
    border: 1px solid #e8eaff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}

.sponsor-item img {
    width: 100%;
    height: 70px;
    object-fit: contain;
}

.bg--section .counter-item,
.bg--section .sponsor-item,
.bg--section .testimonial-item,
.bg--section .accordion-item .accordion-title {
    background: #ffffff;
}

/*Account*/
.account-section {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

@media (min-width: 1200px) {
    .account-section {
        padding: 35px 0;
    }
}

.account-wrapper {
    width: 100%;
    max-width: calc(100% - 100px);
    box-shadow: 0 0 10px rgba(42, 63, 101, 0.3);
    min-height: calc(100vh - 100px);
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    display: flex;
    flex-wrap: wrap;
}

.cookie-consent {
    
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}
.cookie-section {
    
    position: fixed;
    bottom: 0;
    left: 0;
    z-index: 9999;
    width: 100%;
    padding: 55px 0;
    background: #2a3f65;
    color: #fff;
}
.account-wrapper .account-left {
    width: 570px;
    -webkit-border-radius: 5px 0 0 5px;
    -moz-border-radius: 5px 0 0 5px;
    border-radius: 5px 0 0 5px;
    background: #5B53F1;
    padding: 70px 40px;
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    justify-content: center;
    position: sticky;
}

.account-wrapper .logo {
    display: block;
    max-width: 200px;
    margin-left: auto;
    margin-right: auto;
 
}

.account-wrapper  .logo img {
    width: 100%;
}

.account-wrapper .account-right {
    width: calc(100% - 570px);
    padding: 40px 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.account-wrapper .account-right .section-title {
    max-width: 540px;
}

@media (max-width: 1199px) and (min-width: 992px) {
    .account-wrapper .account-left {
        width: 400px;
    }

    .account-wrapper .account-right {
        width: calc(100% - 400px);
    }
}

@media (max-width: 991px) {
    .account-wrapper {
        max-width: 100%;
        max-height: 100%;
        margin: 20px;
        min-height: calc(100vh - 40px);
    }

    .account-wrapper .account-right,
.account-wrapper .account-left {
        width: 100%;
    }

    .account-wrapper .account-left {
        padding: 20px;
        -webkit-border-radius: 5px 5px 0 0;
        -moz-border-radius: 5px 5px 0 0;
        border-radius: 5px 5px 0 0;
    }

    .account-wrapper .account-left .account-thumb {
        display: none;
    }

    .account-wrapper .account-left .logo {
        margin: 0 auto;
        max-width: 170px;
    }
}

@media (max-width: 575px) {
    .account-wrapper .account-right {
        padding: 45px 20px 30px;
    }
}

@media (min-width: 1200px) {
    .account-wrapper.login-wrapper .account-left {
        flex-grow: 1;
    }

    .account-wrapper.login-wrapper .account-left .account-thumb {
        max-width: 540px;
        margin-left: auto;
        margin-right: auto;
    }

    .account-wrapper.login-wrapper .account-right {
        max-width: 40%;
    }
}

.account-thumb {
    margin-top: auto;
    margin-bottom: auto;
}

.account-thumb img {
    width: 100%;
}

.form--check .form-check-input:checked {
    background-color: #5B53F1;
    border-color: #5B53F1;
}

.form--label {
    font-family: "Manrope", sans-serif;
    text-transform: capitalize;
    color: #2a3f65;
    margin-bottom: 10px;
    font-weight: 500;
}

.form--control {
    height: 50px;
    border: 1px solid #e8eaff;
    box-shadow: none !important;
    outline: none !important;
}

.form--control:focus {
    border-color: #5B53F1;
}

textarea.form--control {
    height: 130px;
}

select.form--control {
    -webkit-appearance: button;
    appearance: button;
}

/*Contact*/
.contact__item {
    display: flex;
    flex-wrap: wrap;
}

.contact__item-icon {
    width: 55px;
    height: 55px;
    line-height: 55px;
    font-size: 22px;
    background: #f7fafd;
    border: 1px solid rgba(91, 83, 241, 0.2);
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    text-align: center;
    color: #5B53F1;
    -webkit-transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    transition: all ease 0.3s;
}

.contact__item-cont {
    width: calc(100% - 55px);
    padding-left: 20px;
}

.contact__item-cont a {
    color: #5B53F1;
}

.contact__item-title {
    margin: 0;
}

.contact__item:not(:last-child) {
    margin-bottom: 20px;
}

.contact__item:hover .contact__item-icon {
    background: #5B53F1;
    color: #fff;
    border-color: #5B53F1;
}

/*Documentation*/
.nav--pills .nav-item .nav-link {
    padding: 7px 15px;
    color: #2a3f65;
    font-family: "Manrope", sans-serif;
}

.nav--pills .nav-item .nav-link.active {
    background: #5B53F1;
    color: #fff;
}

.sticky-nav {
    position: sticky;
    top: 78px;
    z-index: 99;
}

.documentation-item .documentation-header {
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #e8eaff;
}

.documentation-item p {
    margin: 0;
}

.documentation-item p a {
    color: #5B53F1;
}

.documentation-item p:not(:last-child) {
    margin-bottom: 20px;
}

.documentation-item:not(:first-child) {
    padding-top: 75px;
}

thead {
    font-family: "Manrope", sans-serif;
}

.checkout-section-wrapper {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 30px;
}

@media (max-width: 575px) {
    .checkout-section-wrapper {
        padding: 20px;
    }
}

.checkout-wrapper {
    max-width: 620px;
    margin: 0 auto;
    padding: 30px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #e8eaff;
    background: #f7fafd;
}

.checkout-wrapper .checkout-logo {
    max-width: 180px;
    margin: 0 auto 25px;
}

.checkout-wrapper .checkout-logo a {
    display: block;
}

.checkout-wrapper .checkout-logo a img {
    width: 100%;
}

.checkout-wrapper .checkout-body .or {
    text-align: center;
    margin: 15px 0;
    position: relative;
}

.checkout-wrapper .checkout-body .or::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 1px;
    background: #e8eaff;
    left: 0;
    top: 50%;
}

.checkout-wrapper .checkout-body .or span {
    background: #f7fafd;
    padding: 0 10px;
    z-index: 1;
    position: relative;
}

@media (max-width: 575px) {
    .checkout-wrapper {
        padding: 30px 20px 20px;
    }
}

.copy-btn {
    background: #f7fafd;
    border: none;
    outline: none;
    box-shadow: none !important;
    position: absolute;
    right: 20px;
    top: 20px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
}

pre {
    display: flex;
    flex-direction: column;
}

/*Preloader*/
.loader {
    position: fixed;
    inset: 0;
    background: #2a3f65;
    z-index: 999999;
}

.loader-item {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 7.33333em;
    height: 7.33333em;
    margin-left: -3.66667em;
    margin-top: -3.66667em;
}

.loader-block {
    position: absolute;
    top: 0;
    left: 0;
    display: inline-block;
    opacity: 0;
    width: 2em;
    height: 2em;
    background: #5B53F1;
    -webkit-animation: show 0.88s step-end infinite alternate, pulse 0.88s linear infinite alternate;
    animation: show 0.88s step-end infinite alternate, pulse 0.88s linear infinite alternate;
}

.loader-block:nth-child(1) {
    -moz-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -webkit-transform: translate(0, 0);
    transform: translate(0, 0);
    -webkit-animation-delay: 0.065s;
    animation-delay: 0.065s;
}

.loader-block:nth-child(2) {
    -moz-transform: translate(2.66667em, 0);
    -ms-transform: translate(2.66667em, 0);
    -webkit-transform: translate(2.66667em, 0);
    transform: translate(2.66667em, 0);
    -webkit-animation-delay: 0.13s;
    animation-delay: 0.13s;
}

.loader-block:nth-child(3) {
    -moz-transform: translate(5.33333em, 0);
    -ms-transform: translate(5.33333em, 0);
    -webkit-transform: translate(5.33333em, 0);
    transform: translate(5.33333em, 0);
    -webkit-animation-delay: 0.195s;
    animation-delay: 0.195s;
}

.loader-block:nth-child(4) {
    -moz-transform: translate(0, 2.66667em);
    -ms-transform: translate(0, 2.66667em);
    -webkit-transform: translate(0, 2.66667em);
    transform: translate(0, 2.66667em);
    -webkit-animation-delay: 0.325s;
    animation-delay: 0.325s;
}

.loader-block:nth-child(5) {
    -moz-transform: translate(2.66667em, 2.66667em);
    -ms-transform: translate(2.66667em, 2.66667em);
    -webkit-transform: translate(2.66667em, 2.66667em);
    transform: translate(2.66667em, 2.66667em);
    -webkit-animation-delay: 0.13s;
    animation-delay: 0.13s;
}

.loader-block:nth-child(6) {
    -moz-transform: translate(5.33333em, 2.66667em);
    -ms-transform: translate(5.33333em, 2.66667em);
    -webkit-transform: translate(5.33333em, 2.66667em);
    transform: translate(5.33333em, 2.66667em);
    -webkit-animation-delay: 0.455s;
    animation-delay: 0.455s;
}

.loader-block:nth-child(7) {
    -moz-transform: translate(0, 5.33333em);
    -ms-transform: translate(0, 5.33333em);
    -webkit-transform: translate(0, 5.33333em);
    transform: translate(0, 5.33333em);
    -webkit-animation-delay: 0.39s;
    animation-delay: 0.39s;
}

.loader-block:nth-child(8) {
    -moz-transform: translate(2.66667em, 5.33333em);
    -ms-transform: translate(2.66667em, 5.33333em);
    -webkit-transform: translate(2.66667em, 5.33333em);
    transform: translate(2.66667em, 5.33333em);
    -webkit-animation-delay: 0.26s;
    animation-delay: 0.26s;
}

.loader-block:nth-child(9) {
    -moz-transform: translate(5.33333em, 5.33333em);
    -ms-transform: translate(5.33333em, 5.33333em);
    -webkit-transform: translate(5.33333em, 5.33333em);
    transform: translate(5.33333em, 5.33333em);
}

@-webkit-keyframes pulse {
    from, 40% {
        background: #5B53F1;
    }

    to {
        background: #dadada;
    }
}

@-webkit-keyframes show {
    from, 40% {
        opacity: 0;
    }

    41%, to {
        opacity: 1;
    }
}

@keyframes pulse {
    from, 40% {
        background: #5B53F1;
    }

    to {
        background: #dadada;
    }
}

@keyframes show {
    from, 40% {
        opacity: 0;
    }

    41%, to {
        opacity: 1;
    }
}
/* Body styling */
html,
body {
    height: 100%;
}

/*Blog*/
.blog__item-img {
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    overflow: hidden;
    margin-right: 20px;
}

.blog__item-img a {
    display: block;
    height: 250px;
}

.blog__item-img a img {
    height: 100%;
    object-fit: cover;
    -webkit-transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    transition: all ease 0.3s;
}

.blog__item-img img {
    width: 100%;
}

.blog__item:hover a img {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
}

.blog__item-content {
    padding: 25px;
    border: 1px solid #e8eaff;
    border-top: none;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    background: #f7fafd;
    margin-left: 20px;
    margin-top: -30px;
    position: relative;
    z-index: 1;
}

@media screen and (max-width: 450px) {
    .blog__item-content {
        padding: 25px 18px;
    }
}

.blog__item-content-title a {
    font-size: 20px;
    font-weight: 600;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

.blog__item-content .meta-post {
    margin-bottom: 20px;
}

.blog__item-content .meta-post i {
    color: #5B53F1;
}

.blog__item-content .read-more {
    text-decoration: underline;
    text-transform: capitalize;
    color: #5B53F1;
    font-size: 18px;
    margin-top: 14px;
}

@media (min-width: 768px) {
    .blog__item-details .blog__item-img img {
        height: 450px;
    }
}

.bg--section .blog__item-content {
    background: #ffffff;
}

.blog__details {
    padding-top: 40px;
}

.blog__details p {
    margin: 0;
}

.blog__details p:not(:last-child) {
    margin-bottom: 20px;
}

.social-icons-dark {
    justify-content: flex-start;
}

.social-icons-dark li a i {
    width: 35px;
    height: 35px;
    line-height: 35px;
    background: #5B53F1;
    color: #fff;
}

.social-icons-dark li a i[class*=facebook] {
    background: #3b5998;
    border-color: #3b5998;
}

.social-icons-dark li a i[class*=whatsapp] {
    background: #25d366;
    border-color: #25d366;
}

.social-icons-dark li a i[class*=twitter] {
    background: #55acee;
    border-color: #55acee;
}

.social-icons-dark li a i[class*=linkedin] {
    background: #007bb5;
    border-color: #007bb5;
}

.social-icons-dark li a i[class*=instagram] {
    background: #e4405f;
    border-color: #e4405f;
}

.social-icons-dark li a i[class*=google] {
    background: #dd4b39;
    border-color: #dd4b39;
}

.social-icons-dark li a i[class*=youtube] {
    background: #cd201f;
    border-color: #cd201f;
}

.social-icons-dark li a i[class*=camera] {
    background: #e4405f;
    border-color: #e4405f;
}

.social-icons-dark li a i[class*=pinterest] {
    background: #007bb5;
    border-color: #007bb5;
}

.social-icons-dark li a i[class*=tumblr] {
    background: #34465d;
    border-color: #34465d;
}

.social-icons-dark li a i[class*=behance] {
    background: #1769ff;
    border-color: #1769ff;
}

.social-icons-dark li a i[class*=skype] {
    background: #2fb7df;
    border-color: #2fb7df;
}

.social-icons-dark li a i[class*=vimeo] {
    background: #1ab7ea;
    border-color: #1ab7ea;
}

.cmn--btn {
    font-family: "Manrope", sans-serif;
    position: relative;
    color: #fff;
    border-radius: 7px;
    width: auto;
    font-weight: 500;
    text-transform: capitalize;
    outline: none;
    border: none;
    padding: 10px 25px;
    overflow: hidden;
    background: #5B53F1;
    text-decoration: none;
    border: 2px solid rgba(91, 83, 241, 0.2);
    text-align: center;
}

.cmn--btn:hover, .cmn--btn.btn-outline {
    color: #5B53F1;
    background: transparent;
    border-color: #5B53F1;
}

.cmn--btn.btn-outline:hover {
    background: #5B53F1;
    color: #fff;
}

button.cmn--btn {
    padding-top: 0;
    padding-bottom: 0;
    height: 50px;
}

button.cmn--btn:hover {
    color: #fff;
    background: #5B53F1;
}

.btn.cmn--btn {
    outline: none;
    box-shadow: none;
}

.btn.cmn--btn:hover {
    color: #2a3f65;
    border-color: rgba(42, 63, 101, 0.1);
}

.bg--body {
    background-color: #ffffff !important;
}

.bg--section {
    background-color: #f7fafd !important;
}

.btn--base,
.badge--base,
.bg--base {
    background-color: #5B53F1 !important;
}

.btn--primary,
.badge--primary,
.bg--primary {
    background-color: #3a0ca3 !important;
}

.btn--secondary,
.badge--secondary,
.bg--secondary {
    background-color: #2f3e46 !important;
}

.btn--success,
.badge--success,
.bg--success {
    background-color: #0ead69 !important;
}

.btn--danger,
.badge--danger,
.bg--danger {
    background-color: #d90429 !important;
}

.btn--warning,
.badge--warning,
.bg--warning {
    background-color: #ee9b00 !important;
}

.btn--warning {
    color: #192a56 !important;
}

.btn--info,
.badge--info,
.bg--info {
    background-color: #00b4d8 !important;
}

.btn--dark,
.badge--dark,
.bg--dark {
    background-color: #192a56 !important;
}

.btn--white,
.badge--white,
.bg--white {
    background-color: #fff !important;
}

[class*=btn--] {
    color: #fff;
    font-weight: 500;
}

[class*=btn--]:hover {
    color: #fff;
}

.btn--warning,
.badge--warning,
.btn--white,
.badge--white {
    color: #2a3f65;
}

.btn--warning:hover,
.badge--warning:hover,
.btn--white:hover,
.badge--white:hover {
    color: #2a3f65;
}

.btn--black,
.badge--black,
.bg--black {
    background-color: #000 !important;
}

.btn--title,
.badge--title,
.bg--title {
    background-color: #2a3f65 !important;
}

.text--primary {
    color: #3a0ca3 !important;
}

.text--secondary {
    color: #2f3e46 !important;
}

.text--success {
    color: #0ead69 !important;
}

.text--danger {
    color: #d90429 !important;
}

.text--warning {
    color: #ee9b00 !important;
}

.text--info {
    color: #00b4d8 !important;
}

.text--dark {
    color: #192a56 !important;
}

.text--white {
    color: #fff !important;
}

.text--white p,
.text--white ul li,
.text--white ul li a,
.text--white span {
    color: #b4d4ff;
}

.text--black {
    color: #000 !important;
}

.text--body {
    color: #536479 !important;
}

.text--base {
    color: #5B53F1 !important;
}

.text--title {
    color: #2a3f65 !important;
}

.bg--transparent {
    background-color: transparent !important;
}

.bg--none {
    background: none !important;
}

.text--star {
    color: #e9ba17;
}

a {
    text-decoration: none;
}

.auth--page {
    max-width: 580px;
    margin: 0 auto;
    min-height: 0;
}
.register .auth--page{
    max-width: 880px;
}
.auth--page >.account-right {
    max-width: 100% !important;
    width: 100%;
}
.fixed--anime {
    position: fixed;
    inset: 0;
    overflow: hidden;
    z-index: -1;
}

