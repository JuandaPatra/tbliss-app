<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tour & Travel Bootstrap Template</title>

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/css/plugins.css">

    <!-- Custom style -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsiveness.css" rel="stylesheet">
    <link id="jssDefault" rel="stylesheet" href="assets/css/skins/default.css">
    <style>
        /*-----------------------------------------
* Theme Name: Travel Stock
* Author: Themez Hub
* Version: 1.0
* Last Change: Aug 15 2018
  Author URI    : http://www.themezhub.com/
 --------------------------------*/
        @media only screen and (min-width : 768px) {
            .main-banner {
                padding: 15% 0 5%;
                min-height: 650px;
                height: 100vh;
            }

            .page-title.image-title {
                height: 450px;
            }

            /*-------- Dashboard ----------*/
            .dashboard-bg {
                height: 100vh;
                position: fixed;
                min-height: 650px;
                z-index: 11;
            }

            .navbar-nav>li.dash-link>a .avatar {
                position: absolute;
                display: inline-block;
                width: 30px;
                height: 30px;
                line-height: 36px;
                text-align: center;
                border-radius: 100%;
                background-color: #f5f6f7;
                color: #fff;
                text-transform: uppercase;
                left: -27px;
                top: 20px;
            }
        }

        @media only screen and (min-width : 993px) {
            section {
                padding: 6em 0 4em 0;
            }

            .navbar-default .navbar-brand img {
                max-width: 170px;
            }

            .half-box {
                padding: 140px 40px;
            }

            .half-box h2 {
                font-size: 50px;
            }
        }

        @media only screen and (min-width : 1024px) {
            h1 {
                font-size: 46px;
            }

            h2 {
                font-size: 36px;
            }

            h3 {
                font-size: 27px;
            }

            h4 {
                font-size: 20px;
            }

            h5 {
                font-size: 17;
            }

            h6 {
                font-size: 12;
            }

            nav.navbar.bootsnav ul.navbar-right li.dropdown ul.dropdown-menu.left-nav li a {
                text-align: left;
            }

            /*------------ Custom Font Style --------------*/
            .font-50 {
                font-size: 50px;
            }

            .font-60 {
                font-size: 60px;
            }

            .font-80 {
                font-size: 80px;
            }

            .font-100 {
                font-size: 100px;
            }

            .font-150 {
                font-size: 150px;
            }

            .font-200 {
                font-size: 200px;
            }

            .font-250 {
                font-size: 250px;
            }

            .font-300 {
                font-size: 300px;
            }

            .font-400 {
                font-size: 400px;
            }

            .font-450 {
                font-size: 450px;
            }

            .font-500 {
                font-size: 500px;
            }

            .font-bold {
                font-weight: bold;
            }

            .main-banner h2 {
                font-size: 50px;
                font-weight: 600;
                margin-bottom: 10px;
            }

            .main-banner p {
                font-size: 17px;
            }

        }

        @media only screen and (min-width : 1200px) {}

        @media only screen and (max-width: 1023px) and (min-width: 993px) {}

        @media screen and (max-width: 1199px) {}

        @media only screen and (max-width: 992px) and (min-width: 768px) {}

        @media screen and (max-width: 992px) {
            .navbar-default .navbar-brand img {
                max-width: 160px;
            }

            .main-banner .form-control {
                margin-bottom: 10px;
            }

            .fb-log-btn {
                margin-bottom: 10px;
            }

            .main-banner {
                padding-top: 120px;
            }

            .log-screen {
                background-image: none !important;
            }

            .soon-wrapper {
                background-image: none;
            }

            /*--------- Dashboard ----------*/
            .book_image {
                margin: 0 15px 0 0;
                width: 100%;
            }

            .dasboard-prop-listing .prop-info {
                width: 100%;
            }

        }

        @media screen and (max-width: 767px) {

            /*-- General Style--*/
            html body .mob-padd-0 {
                padding: 0;
            }

            html body .mob-mrg-0 {
                margin: 0;
            }

            html body .mob-extra-mrg {
                margin-left: -15px;
                margin-right: -15px;
            }

            .heading h2 {
                font-size: 28px;
            }

            /*----- Mobile Padding Settings ------*/
            .mob-padd-0 {
                padding-left: 0;
                padding-right: 0;
            }

            .mob-mrg-0 {
                margin-left: -15px;
                margin-right: -15px;
            }

            .mob-extra-mrg {
                margin-left: -15px;
                margin-right: -15px;
            }

            .banner {
                padding: 100px 0 80px 0;
            }

            .mbb-1 {
                border-bottom: 1px solid #dde6ef;
            }

            .destination-box.list-style,
            .hotel-box.list-style,
            .restaurent-box.list-style,
            .tour-box.list-style {
                height: auto;
            }

            .destination-box.list-style .inner-box,
            .hotel-box.list-style .inner-box,
            .restaurent-box.list-style .inner-box,
            .tour-box.list-style .inner-box {
                padding: 30px 20px 30px 20px;
            }

            .sl-box {
                margin-bottom: 10px;
            }

            .profile-header-nav .theme-btn {
                width: 100% !important;
                display: block;
                float: none !important;
                margin-bottom: 15px;
            }

            .profile-header-nav .fl-right {
                float: none;
            }

            .profile-header-nav .nav-tabs li a {
                border-right: none;
            }

            .log-wrapper {
                display: block !important;
            }

            .nice-select ul.list {
                max-height: 150px;
                overflow-y: scroll;
            }

        }

        @media screen and (max-width: 479px) {
            ul.amenities.third li {
                width: 50%;
            }

            ul.amenities.fourth li {
                width: 50%;
            }

        }
        @import url(https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,600,700);@import url(https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600,600i,700,700i);@import url(https://fonts.googleapis.com/css?family=Josefin+Slab:300,400,600,700);body,p{font-family:Montserrat,sans-serif;position:relative}a.btn.call-btn,p{text-transform:capitalize}.page-title,body,p{position:relative}.image-title p span,html body .font-italic{font-style:italic}body,html{width:100%;height:auto;margin:0;padding:0}body{background:#fff;font-weight:400;font-size:14px;color:#70778b;line-height:24px}.badge,.heading h1,.image-title h2,b,strong{font-weight:600}.heading p,p{line-height:1.8}body.modal-open{padding-right:0!important}p{-webkit-transition:.2s ease-in;-moz-transition:.2s ease-in;transition:.2s ease-in}.heading h1,.heading span{font-family:'Josefin Sans',sans-serif}h1,h2,h3,h4,h5,h6{margin-bottom:.25em;color:#334e6f}p a{color:#ff4e00}a{color:#334e6f}a,a:active,a:focus,a:hover{color:#334e6f;outline:0;text-decoration:none;-webkit-transition:all .3s ease-in-out;-moz-transition:all .3s ease-in-out;-o-transition:all .3s ease-in-out;-ms-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.btn,.btn-square{transition:all ease .4s}.centered{display:table;margin:0 auto}.text-center{text-align:center}.text-left{text-align:left}.text-right{text-align:right}.text-through{text-decoration:line-through;opacity:.7}.text-center img{margin:5px auto;float:none;display:table}.d-block,ol,ul{margin-bottom:10px}section{padding:4em 0 3em}.small-pad{padding:1em 0 1.5em}section.gray{background:#eff2f5}.light-gray{background:#F5F7F8}a.btn.call-btn{background:#fff;border-radius:4px;padding:.8em 2em;color:#ff4e00}.heading.light h1,.heading.light p,.image-title .page-title-wrap>*{color:#fff}.d-block{display:block}.no-shadow,.no-shadow:focus,.no-shadow:hover{box-shadow:none!important}.daterangepicker .drp-buttons .btn,.daterangepicker .drp-buttons .btn:active:focus,.daterangepicker .drp-buttons .btn:focus,.daterangepicker .drp-buttons .btn:hover{width:auto;padding:7px 12px;height:auto;border-radius:2px;font-size:12px}.list-slide-box{padding:0 10px}.guides-container:focus,.list-slide-box:focus{outline:0}.daterangepicker td.active,.daterangepicker td.active:hover{background-color:#ff4e00}ol,ul{margin-top:0;padding:0}.side-list ul{margin:0;padding:0}.side-list ul li{list-style:none;padding:10px 5px;display:inline-block;width:100%;border-bottom:1px dashed #eaeff5}.side-list ul li:last-child,.side-list.no-border ul li{border-bottom:none}.heading{padding:0 0 25px;margin-bottom:20px;text-align:center}.heading span{font-size:14px;text-transform:uppercase;margin-bottom:12px}.heading h1{margin-top:0;text-transform:capitalize}.heading p{font-size:15px}.progress{height:12px;margin-bottom:20px;overflow:hidden;background-color:#dfe6f1;border-radius:1px;-webkit-box-shadow:none;box-shadow:none}.page-title{background:center #f2f4f7;height:370px;text-align:center;display:flex;padding-top:50px;background-size:cover}.page-title.image-title:before{position:absolute;content:"";left:0;right:0;top:0;bottom:0;background:#243b5a;opacity:.6}.btn-m.btn-arrow:after,.btn.btn-arrow:after{content:"\e628";margin-left:10px;font-family:themify}.page-title-wrap{display:flex;flex-direction:column;justify-content:center;height:100%;transform:translate(-50%,-50%);position:absolute;left:50%;top:50%}.btn-square,.btn-square-large{display:inline-block;text-align:center}.image-title h2{font-size:40px}button:focus,button:hover,input:focus,input:hover{outline:0}.btn{border-radius:2px;-webkit-box-shadow:none;box-shadow:none;font-weight:400;position:relative;border:1px solid;background-image:none;padding:10px 15px}.btn.btn-arrow{padding:10px 40px 10px 15px}.btn-m.btn-arrow{padding:14px 55px 14px 30px}.btn.btn-arrow:after{top:9px;font-size:16px}.btn-m.btn-arrow:after{top:13px;font-size:16px}.btn-m{padding:14px 30px;font-size:16px}.radius-0{border-radius:0}.btn-l{padding:16px 35px;font-size:17px}.btn-xl{padding:20px 40px;font-size:18px}.btn-square{width:44px;height:42px;line-height:42px;font-size:16px;border-radius:2px;margin:5px}.btn-square-large{width:55px;height:55px;line-height:55px;font-size:18px;border-radius:2px;margin:7px}.light-gray-btn{background:#e8edf1;border:1px solid #e5eaef}.light-gray-btn:focus,.light-gray-btn:hover{color:#fff;background:#78909C;border:1px solid #78909C}.btn-general-white-bg{background:#fff;color:#ff4e00;border-color:#fff}.btn-general-theme-bg,.btn-general-white-bg:focus,.btn-general-white-bg:hover{background:#ff4e00;color:#fff;border-color:#ff4e00}.btn-general-theme-bg:focus,.btn-general-theme-bg:hover{background:#fff;color:#ff4e00;border-color:#fff}.btn-general-theme-trans-bg{background:rgba(255,58,114,.1);border-color:#ff4e00;color:#ff4e00}.btn-general-theme-trans-bg:focus,.btn-general-theme-trans-bg:hover{background:rgba(255,58,114,1);border-color:#ff4e00;color:#fff}.full-width{width:100%}.btn-width-200{width:200px;margin-left:auto;margin-right:auto}.form-control::-moz-placeholder{color:#8995a2;opacity:1}.form-control:-ms-input-placeholder{color:#8995a2}.form-control::-webkit-input-placeholder{color:#8995a2}.form-control{height:50px;border:1px solid #dde6ef;margin-bottom:10px;box-shadow:none;border-radius:0;background:#fbfdff;font-size:15px;color:#6b7c8a;font-weight:400}.sl-box{height:60px;max-height:60px}.bootstrap-select.form-control{padding:0;margin-bottom:10px;border:1px solid #dde6ef}.form-control:focus,.form-control:hover{border:1px solid #ff4e00;-webkit-box-shadow:0 1px 1px rgba(7,177,7,.075);box-shadow:0 1px 1px rgba(7,177,7,.075);outline:0}.form-control .btn.dropdown-toggle.btn-default:focus,.form-control .btn.dropdown-toggle.btn-default:hover{border:none;-webkit-box-shadow:none;box-shadow:none;outline:0}span.input-group-addon{color:#8995a2;border-color:#dde6ef;background:#fbfdff;border-left:0}nav.navbar.navbar-default.navbar-fixed.white.bootsnav.shadow.on.menu-center.no-full{box-shadow:0 5px 20px rgba(0,0,0,.05);-webkit-box-shadow:0 5px 20px rgba(0,0,0,.05);-moz-box-shadow:0 5px 20px rgba(0,0,0,.05)}.bootstrap-select button.btn.dropdown-toggle.bs-placeholder.btn-default{background:0 0;height:46px;border:1px solid transparent;color:#445461;text-shadow:none;border-radius:0;box-shadow:none}.btn.btn-primary,.btn.btn-primary:focus,.btn.btn-primary:hover{border:1px solid #ff4e00;border-radius:0;width:100%;height:46px;background:#ff4e00;text-transform:capitalize;font-size:16px}.avatar,.file-upload-button,.theme-btn{text-transform:uppercase}.btn-default.active.focus,.btn-default.active:focus,.btn-default.active:hover,.btn-default:active.focus,.btn-default:active:focus,.btn-default:active:hover,.open>.dropdown-toggle.btn-default.focus,.open>.dropdown-toggle.btn-default:focus,.open>.dropdown-toggle.btn-default:hover{border:1px solid #eaeff5;background:#fff;color:#677897}.bootstrap-select .dropdown-toggle:focus{outline:0!important;outline-offset:0!important}.bootstrap-select.btn-group .dropdown-menu li a{padding:8px 10px}.bootstrap-select.btn-group .dropdown-menu li a:hover{box-shadow:none;background:#ff4e00;color:#fff}.btn-group.open .dropdown-toggle{-webkit-box-shadow:none;box-shadow:none}.btn-default.active,.btn-default:active,.open>.dropdown-toggle.btn-default{color:#445461;background-color:transparent;border-color:transparent}button.btn.dropdown-toggle.btn-default{background:0 0;border:none;box-shadow:none}.dropdown-menu>.active>a,.dropdown-menu>.active>a:focus,.dropdown-menu>.active>a:hover{background-color:#ff4e00}.chosen-container-single .chosen-single{background:#fbfdff;border:1px solid #dde6ef;-webkit-box-shadow:none;box-shadow:none;color:#445461;height:50px;line-height:50px;margin-bottom:10px;border-radius:0}.chosen-container-single .chosen-single div{top:8px}.chosen-container-active.chosen-with-drop .chosen-single{background-color:#fff;border:1px solid #dde6ef;border-bottom-right-radius:0;border-bottom-left-radius:0;-webkit-box-shadow:none;box-shadow:none;-webkit-transition:border linear .2s,box-shadow linear .2s;-o-transition:border linear .2s,box-shadow linear .2s;transition:border linear .2s,box-shadow linear .2s}.chosen-container-single .chosen-search input[type=text]{border:1px solid #dde6ef;-webkit-box-shadow:none;box-shadow:none;margin:1px 0;padding:4px 20px 4px 4px;width:100%;border-radius:0}.chosen-container .chosen-results li.highlighted{background-color:#f4f5f7;background-image:none;color:#445661}.chosen-container-active.chosen-with-drop .chosen-single div b{background-position:-15px 7px}.chosen-container .chosen-drop{background:#fff;border:1px solid #dde6ef;border-bottom-right-radius:4px;border-bottom-left-radius:4px;-webkit-box-shadow:0 2px 10px 0 #d8dde6;box-shadow:0 2px 10px 0 #d8dde6;margin-top:-1px;position:absolute;top:100%;left:-9000px;z-index:1060}.wysihtml5-toolbar a.btn{background:#fbfdff;color:#35434e;margin-right:5px;border-color:#dde6ef}.bootstrap-wysihtml5-insert-link-modal [class*=" icon-"],.btn .icon-share,.btn-group [class^=icon-]{display:inline-block;width:14px;height:14px;line-height:14px;vertical-align:text-top;background-image:url(../img/glyphicons-halflings.png);background-repeat:no-repeat}.bootstrap-wysihtml5-insert-link-modal [class*=" icon-"],.btn-group [class^=icon-]{background-position:14px 14px}.btn-group .icon-indent-left{background-position:-384px -48px}.btn .icon-share{background-position:-120px -72px}.btn-group .icon-indent-right{background-position:-408px -48px}.btn-group .icon-th-list{background-position:-264px 0}.btn-group .icon-list{background-position:-360px -48px}.form-control.textarea{height:180px;border-radius:4px}.box,.box-body{border-radius:0}.box{position:relative;border-top:0;margin-bottom:40px;width:100%;background:#fff;padding:0;-webkit-transition:.5s;transition:.5s;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;box-shadow:0 5px 15px 0 rgba(41,128,185,.1);-webkit-box-shadow:0 5px 15px 0 rgba(41,128,185,.1)}.box-body>:last-child,.box-header{margin-bottom:0}.box-header{background:0 0;padding:.85rem 1.25rem;display:flex;align-items:center;border-bottom:1px solid #eaeff5}.box-body{padding:3em 2em;-ms-flex:1 1 auto;flex:1 1 auto}.box-hover-shadow:hover{-webkit-box-shadow:0 0 35px rgba(0,0,0,.07);box-shadow:0 0 35px rgba(0,0,0,.07)}.pagination{display:table;padding-left:0;border-radius:4px;margin:20px auto}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:0;margin:5px;color:#5a6f7c;text-decoration:none;background-color:#fff;border-radius:4px;width:37px;height:37px;text-align:center;line-height:37px;border:1px solid #eaeff5;-webkit-box-shadow:0 2px 10px 0 #d8dde6;box-shadow:0 2px 10px 0 #d8dde6}.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover,.pagination>li>a:focus,.pagination>li>a:hover{z-index:2;color:#fff;cursor:pointer;background-color:#ff4e00;border-color:#ff4e00}.pagination li:first-child a,.pagination li:last-child a{background:#35434e;border:1px solid #35434e;border-radius:4px;color:#fff}div.datedropper.my-style{border-radius:8px;width:180px}div.datedropper.my-style .picker{border-radius:8px;box-shadow:0 0 32px 0 rgba(0,0,0,.1)}div.datedropper.my-style .pick-l{border-bottom-left-radius:8px;border-bottom-right-radius:8px}div.datedropper.my-style .pick-lg-b .pick-sl:before,div.datedropper.my-style .pick-lg-h,div.datedropper.my-style .pick-m,div.datedropper.my-style .pick-submit,div.datedropper.my-style:before{background-color:#1cc100}div.datedropper.my-style .pick-l,div.datedropper.my-style .picker,div.datedropper.my-style.picker-tiny .pick-m,div.datedropper.my-style.picker-tiny:before{background-color:#FFF}div.datedropper.my-style .pick li span,div.datedropper.my-style .pick-btn,div.datedropper.my-style .pick-lg-b .pick-wke,div.datedropper.my-style .pick-y.pick-jump{color:#1cc100}div.datedropper.my-style .pick-arw,div.datedropper.my-style .pick-l,div.datedropper.my-style .picker{color:#3a465e}div.datedropper.my-style .pick-lg-b .pick-sl,div.datedropper.my-style .pick-lg-h,div.datedropper.my-style .pick-m,div.datedropper.my-style .pick-m .pick-arw,div.datedropper.my-style .pick-submit{color:#FFF}div.datedropper.my-style.picker-tiny .pick-m,div.datedropper.my-style.picker-tiny .pick-m .pick-arw{color:#3a465e}div.datedropper.my-style.picker-lkd .pick-submit{background-color:#FFF;color:#3a465e}.theme-bg,.theme-bg p{color:#fff}.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{background-color:#fff;opacity:1}.table{width:100%;max-width:100%;margin-bottom:1rem;background-color:transparent}.table thead th{vertical-align:bottom;border-bottom:1px solid transparent;border-top:0!important}.table-hover tbody tr:hover{background-color:#fbfcfd}table.table td a{font-weight:500;display:inline-block;text-decoration:none}table.table td img{max-width:60px}table.table td .label{padding:5px 15px}.theme-bg{background:#ff4e00}footer.dark-bg{background:#2a3646!important;border-top:none!important}.light-bg{background:#fff!important}.gray-bg{background:#f6f8fb!important}.theme-cl{color:#ff4e00!important}a.theme-cl:focus,a.theme-cl:hover{color:#ff4e00}.theme-overlap{background:url(../img/slider-2.jpg);background-position:center!important;background-size:cover!important;position:relative}.theme-overlap:before{background:#ff4e00;opacity:.8;content:"";display:block;left:0;right:0;top:0;bottom:0;height:100%;width:100%;position:absolute}.avatar,.custom-checkbox{position:relative}.btn-radius{border-radius:50px}.theme-btn{background:#ff4e00;border:1px solid #ff4e00;color:#fff}.btn.btn-default{border:1px solid #eaeff5;background:#fff;color:#677897;font-size:14px}.btn-danger,.btn-default,.btn-info,.btn-primary,.btn-success,.btn-warning{text-shadow:none;-webkit-box-shadow:none;box-shadow:none}.btn-default:focus,.btn-default:hover{color:#677897;background-color:#f4f5f7;border-color:#e4e4e4}.short-box button.btn.btn-default{border:1px solid #eaeff5;background:#fff;color:#677897;font-size:14px}.short-box .dropdown-toggle::after{display:inline-block;width:0;height:0;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}.short-box button.btn-default:focus,.short-box button.btn-default:hover{color:#677897;background-color:#f4f5f7;border-color:#e4e4e4}.theme-btn:focus,.theme-btn:hover{color:#fff;background:#ff4e00;border:1px solid #ff4e00}.btn.theme-btn-outlined,a.theme-btn-outlined{background:0 0;border:1px solid #ff4e00;color:#ff4e00}.btn.theme-btn-outlined:focus,.btn.theme-btn-outlined:hover,a.theme-btn-outlined:focus,a.theme-btn-outlined:hover{background:#ff4e00;border-color:#ff4e00;color:#fff}.btn.theme-btn-trans-radius,a.theme-btn-trans-radius{background:rgba(255,58,114,.1);color:#ff4e00;border-radius:50px;border:1px solid #ff4e00}.btn.theme-btn-trans-radius:focus,.btn.theme-btn-trans-radius:hover,a.theme-btn-trans-radius:focus,a.theme-btn-trans-radius:hover{background:rgba(255,58,114,1);color:#fff;border-radius:50px;border:1px solid #ff4e00}.btn.theme-btn-trans,a.theme-btn-trans{background:rgba(255,58,114,.1);color:#ff4e00;border-radius:2px;border:1px solid #ff4e00}.btn.theme-btn-trans:focus,.btn.theme-btn-trans:hover,a.theme-btn-trans:focus,a.theme-btn-trans:hover{background:rgba(255,58,114,1);color:#fff;border-radius:2px;border:1px solid #ff4e00}.btn.btn-light-outlined,a.btn-light-outlined{background:rgba(255,255,255,.1);border:1px solid #fff;color:#fff}.btn.btn-light-outlined:focus,.btn.btn-light-outlined:hover,a.btn-light-outlined:focus,a.btn-light-outlined:hover{background:rgba(255,255,255,1);border:1px solid #fff;color:#ff4e00}.btn.light-btn,a.light-btn{background:#fff;border:1px solid #fff;color:#ff4e00}.btn.light-btn:focus,.btn.light-btn:hover,a.light-btn:focus,a.light-btn:hover{background:#ff4e00;border:1px solid #ff4e00;color:#fff}.btn-success{color:#fff;background-color:#0fb76b;border-color:#0fb76b}.btn-success:focus,.btn-success:hover{background-color:#0db368;border-color:#0db368}.btn-warning{color:#fff;background-color:#ff9800;border-color:#ff9800}.btn-warning:focus,.btn-warning:hover{background-color:#f39203;border-color:#f39203}.btn-danger{color:#fff;background-color:#f21136;border-color:#f21136}.btn-danger:focus,.btn-danger:hover{background-color:#ec0d32;border-color:#ec0d32}.btn-info{color:#fff;background-color:#01b2ac;border-color:#01b2ac}.btn-info:focus,.btn-info:hover{background-color:#03a59f;border-color:#03a59f}.btn-purple{color:#fff;background-color:#c580ff;border-color:#c580ff}.btn-purple:focus,.btn-purple:hover{background-color:#b873f3;border-color:#b873f3}html body .padd-0{padding:0}html body .padd-5{padding:5px}html body .padd-10{padding:10px}html body .padd-15{padding:15px}html body .padd-20{padding:20px}html body .padd-l-0{padding-left:0}html body .padd-l-5{padding-left:5px}html body .padd-l-10{padding-left:10px}html body .padd-l-15{padding-left:15px}html body .padd-r-0{padding-right:0}html body .padd-r-5{padding-right:5px}html body .padd-r-10{padding-right:15px}html body .padd-top-0{padding-top:0}html body .padd-top-5{padding-top:5px}html body .padd-top-10{padding-top:10px}html body .padd-top-15{padding-top:15px}html body .padd-top-20{padding-top:20px}html body .padd-top-25{padding-top:25px}html body .padd-top-30{padding-top:30px}html body .padd-top-40{padding-top:40px}html body .padd-bot-0{padding-bottom:0}html body .padd-bot-5{padding-bottom:5px}html body .padd-bot-10{padding-bottom:10px}html body .padd-bot-15{padding-bottom:15px}html body .padd-bot-20{padding-bottom:20px}html body .padd-bot-25{padding-bottom:25px}html body .padd-bot-30{padding-bottom:30px}html body .padd-bot-40{padding-bottom:40px}html body .mrg-0{margin:0}html body .mrg-5{margin:5px}html body .mrg-10{margin:10px}html body .mrg-15{margin:15px}html body .mrg-20{margin:20px}html body .mrg-l-0{margin-left:0}html body .mrg-l-5{margin-left:5px}html body .mrg-l-10{margin-left:10px}html body .mrg-l-15{margin-left:15px}html body .mrg-r-0{margin-right:0}html body .mrg-r-5{margin-right:5px}html body .mrg-r-10{margin-right:10px}html body .mrg-r-15{margin-right:15px}html body .mrg-top-0{margin-top:0}html body .mrg-top-5{margin-top:5px}html body .mrg-top-10{margin-top:10px}html body .mrg-top-15{margin-top:15px}html body .mrg-top-20{margin-top:20px}html body .mrg-top-25{margin-top:25px}html body .mrg-top-30{margin-top:30px}html body .mrg-top-40{margin-top:40px}html body .mrg-bot-0{margin-bottom:0}html body .mrg-bot-5{margin-bottom:5px}html body .mrg-bot-10{margin-bottom:10px}html body .mrg-bot-15{margin-bottom:15px}html body .mrg-bot-20{margin-bottom:20px}html body .mrg-bot-25{margin-bottom:25px}html body .mrg-bot-30{margin-bottom:30px}html body .mrg-bot-40{margin-bottom:40px}html body .extra-mrg-5{margin:0 -5px}html body .extra-mrg-10{margin:0 -10px}html body .extra-mrg-15{margin:0 -15px}html body .extra-mrg-20{margin:0 -20px}html body .bg-white{background:#fff!important}html body .bg-dark{background:#11161c!important}html body .bg-light-dark{background:#151c26!important}html body .bg-info{background:#01b2ac!important}html body .bg-primary{background:#1194f7!important}html body .bg-danger{background:#f21136!important}html body .bg-warning{background:#ff9800!important}html body .bg-success{background:#0fb76b!important}html body .bg-purple{background:#c580ff!important}html body .bg-default{background:#283447!important}html body .bg-info-light{background:rgba(1,178,172,.1)!important;color:#01b2ac!important}html body .bg-primary-light{background:rgba(17,148,247,.1)!important;color:#1194f7!important}html body .bg-danger-light{background:rgba(255,17,54,.1)!important;color:#f21136!important}html body .bg-warning-light{background:rgba(255,152,0,.1)!important;color:#ff9800!important}html body .bg-success-light{background:rgba(15,183,107,.1)!important;color:#0fb76b!important}html body .bg-purple-light{background:rgba(197,128,255,.1)!important;color:#c580ff!important}html body .bg-default-light{background:rgba(40,52,71,.1)!important;color:#283447!important}html body .bg-trans-info{background:rgba(2,182,179,.12)!important}html body .bg-trans-primary{background:rgba(17,148,247,.12)!important}html body .bg-trans-danger{background:rgba(242,17,54,.12)!important}html body .bg-trans-warning{background:rgba(255,152,0,.12)!important}html body .bg-trans-success{background:rgba(15,183,107,.12)!important}html body .bg-trans-purple{background:rgba(197,128,255,.12)!important}html body .bg-trans-default{background:rgba(40,52,71,.12)!important}html body .bg-info-br{border:1px solid #01b2ac!important;background:rgba(2,182,179,.12)!important}html body .bg-primary-br{border:1px solid #1194f7!important;background:rgba(17,148,247,.12)!important}html body .bg-danger-br{border:1px solid #f21136!important;background:rgba(242,17,54,.12)!important}html body .bg-warning-br{border:1px solid #ff9800!important;background:rgba(255,152,0,.12)!important}html body .bg-success-br{border:1px solid #0fb76b!important;background:rgba(15,183,107,.12)!important}html body .bg-purple-br{border:1px solid #c580ff!important;background:rgba(197,128,255,.12)!important}html body .bg-default-br{border:1px solid #283447!important;background:rgba(40,52,71,.12)!important}html body .cl-info{color:#01b2ac!important}html body .cl-primary{color:#1194f7!important}html body .cl-danger{color:#f21136!important}html body .cl-warning{color:#ff9800!important}html body .cl-success{color:#0fb76b!important}html body .cl-purple{color:#c580ff!important}html body .cl-default{color:#283447!important}html body .cl-white{color:#fff!important}html body .br-light{border-color:#eaeff5!important}html body .br-info{border-color:#01b2ac!important}html body .br-primary{border-color:#1194f7!important}html body .br-danger{border-color:#f21136!important}html body .br-warning{border-color:#ff9800!important}html body .br-success{border-color:#0fb76b!important}html body .br-purple{border-color:#c580ff!important}html body .br-default{border-color:#283447!important}html body .bg-online{background:#68c70b!important}html body .bg-offline{background:#e02b0d!important}html body .bg-busy{background:#2196f3!important}html body .bg-working{background:#ff9800!important}html body .normal-height{height:46px}html body .height-10{height:10px}html body .height-20{height:20px}html body .height-30{height:30px}html body .height-40{height:40px}html body .height-50{height:50px}html body .height-60{height:60px}html body .height-70{height:70px}html body .height-80{height:80px}html body .height-90{height:90px}html body .height-100{height:100px}html body .height-110{height:110px}html body .height-120{height:120px}html body .height-130{height:130px}html body .height-140{height:140px}html body .height-150{height:150px}html body .height-160{height:160px}html body .height-170{height:170px}html body .height-180{height:180px}html body .height-190{height:190px}html body .height-200{height:200px}html body .height-210{height:210px}html body .height-220{height:220px}html body .height-230{height:230px}html body .height-240{height:240px}html body .height-250{height:250px}html body .height-260{height:260px}html body .height-270{height:270px}html body .height-280{height:280px}html body .height-290{height:290px}html body .height-300{height:300px}html body .height-350{height:350px}html body .height-400{height:400px}html body .height-450{height:450px}html body .full-width{width:100%}html body .width-30{width:30px}html body .width-40{width:40px}html body .width-50{width:50px}html body .width-60{width:60px}html body .width-70{width:70px}html body .width-80{width:80px}html body .width-90{width:90px}html body .width-100{width:100px}html body .width-110{width:110px}html body .width-120{width:20px}html body .width-130{width:130px}html body .width-140{width:140px}html body .width-150{width:150px}html body .width-160{width:160px}html body .width-170{width:170px}html body .width-180{width:180px}html body .width-190{width:190px}html body .width-200{width:200px}html body .width-210{width:210px}html body .width-220{width:220px}html body .width-230{width:230px}html body .width-240{width:240px}html body .width-250{width:250px}html body .width-260{width:260px}html body .width-270{width:270px}html body .width-280{width:280px}html body .width-290{width:290px}html body .width-300{width:300px}html body .line-height-10{line-height:10px}html body .line-height-12{line-height:12px}html body .line-height-14{line-height:14px}html body .line-height-16{line-height:16px}html body .line-height-18{line-height:18px}html body .line-height-20{line-height:20px}html body .line-height-22{line-height:22px}html body .line-height-24{line-height:24px}html body .line-height-26{line-height:26px}html body .line-height-28{line-height:28px}html body .line-height-30{line-height:30px}html body .line-height-32{line-height:32px}html body .line-height-34{line-height:34px}html body .line-height-36{line-height:36px}html body .line-height-38{line-height:38px}html body .line-height-40{line-height:40px}html body .line-height-42{line-height:42px}html body .line-height-44{line-height:44px}html body .line-height-46{line-height:46px}html body .line-height-48{line-height:48px}html body .line-height-50{line-height:50px}html body .line-height-60{line-height:60px}html body .line-height-70{line-height:70px}html body .line-height-80{line-height:80px}html body .line-height-90{line-height:90px}html body .line-height-100{line-height:100px}html body .line-height-110{line-height:110px}html body .line-height-120{line-height:120px}html body .line-height-130{line-height:130px}html body .line-height-140{line-height:140px}html body .line-height-150{line-height:150px}html body .line-height-160{line-height:160px}html body .line-height-170{line-height:170px}html body .line-height-180{line-height:180px}html body .line-height-190{line-height:190px}html body .line-height-200{line-height:200px}html body .line-height-210{line-height:210px}html body .line-height-220{line-height:220px}html body .line-height-230{line-height:230px}html body .line-height-240{line-height:240px}html body .line-height-250{line-height:250px}html body .line-height-260{line-height:260px}html body .line-height-270{line-height:270px}html body .line-height-280{line-height:280px}html body .line-height-290{line-height:290px}html body .line-height-300{line-height:300px}html body .line-height-350{line-height:350px}html body .line-height-400{line-height:400px}html body .line-height-450{line-height:450px}.avatar{display:inline-block;width:36px;height:36px;line-height:36px;text-align:center;border-radius:100%;background-color:#f5f6f7;color:#fff}.avatar-dxl{width:100px;height:100px;line-height:100px;font-size:2rem}.avatar-xl{width:65px;height:65px;line-height:65px;font-size:1.5rem}.avatar-lg{width:48px;height:48px;line-height:48px;font-size:1.125rem}.avatar-sm{width:29px;height:29px;line-height:29px;font-size:.75rem}.avatar img{width:100%;height:100%;vertical-align:top}.avatar-bordered{border:4px solid rgba(255,255,255,.27);-webkit-background-clip:padding-box;background-clip:padding-box}.facebook-cl{color:#3c66c4}.twitter-cl{color:#00aced}.google-plus-cl{color:#dc473a}.linkedin-cl{color:#1895c3}.instagram-cl{color:#bc44bd}.pinterest-cl{color:#bd081c}.facebook-bg{background:#3c66c4;color:#fff}.twitter-bg{background:#00aced;color:#fff}.googl-plus-bg{background:#dc473a;color:#fff}.linkedin-bg{background:#1895c3;color:#fff}.instagram-bg{background:#bc44bd;color:#fff}.pinterest-bg{background:#bd081c;color:#fff}html body .font-10{font-size:10px}html body .font-12{font-size:12px}html body .font-13{font-size:13px}html body .font-16{font-size:16px}html body .font-18{font-size:18px}html body .font-15{font-size:15px}html body .font-20{font-size:20px}html body .font-25{font-size:25px}html body .font-30{font-size:30px}html body .font-35{font-size:35px}html body .font-40{font-size:40px}html body .font-45{font-size:45px}html body .font-50{font-size:50px}html body .font-60{font-size:60px}html body .font-70{font-size:70px}html body .font-80{font-size:80px}html body .font-90{font-size:90px}html body .font-100{font-size:100px}html body .font-bold{font-weight:600}html body .font-normal{font-weight:400}html body .font-midium{font-weight:500}html body .font-light{font-weight:300}html body .label-info{background:#01b2ac}html body .label-primary{background:#1194f7}html body .label-danger{background:#f21136}html body .label-warning{background:#ff9800}html body .label-success{background:#0fb76b}html body .label-purple{background:#c580ff}html body .label-default{background:#283447}.custom-checkbox input[type=checkbox]{opacity:0;position:absolute;margin:5px 0 0 3px;z-index:9}.custom-checkbox label:before{width:18px;height:18px;content:'';margin-right:10px;display:inline-block;vertical-align:text-top;background:#fff;border:1px solid #dde2e8;border-radius:2px;box-sizing:border-box;z-index:2}.custom-checkbox input[type=checkbox]:checked+label:after{content:'';position:absolute;left:6px;top:2px;width:6px;height:11px;border:solid #000;border-width:0 3px 3px 0;transform:inherit;z-index:3;transform:rotateZ(45deg)}.custom-checkbox input[type=checkbox]:checked+label:before{border-color:#ff4e00;background:#ff4e00}.custom-checkbox input[type=checkbox]:checked+label:after{border-color:#fff}.custom-checkbox input[type=checkbox]:disabled+label:before{color:#b8b8b8;cursor:auto;box-shadow:none;background:#ddd}.custom-radio [type=radio]:checked,.custom-radio [type=radio]:not(:checked){position:absolute;left:-9999px}.custom-radio [type=radio]:checked+label,.custom-radio [type=radio]:not(:checked)+label{position:relative;padding-left:28px;cursor:pointer;line-height:20px;display:inline-block;width:25px;height:9px}.custom-radio [type=radio]:checked+label:before,.custom-radio [type=radio]:not(:checked)+label:before{content:'';position:absolute;left:0;top:0;width:18px;height:18px;border:1px solid #ddd;border-radius:100%;background:#fff}.custom-radio [type=radio]:checked+label:after,.custom-radio [type=radio]:not(:checked)+label:after{content:'';width:10px;height:10px;background:#ff4e00;position:absolute;top:4px;left:4px;border-radius:100%;-webkit-transition:all .2s ease;transition:all .2s ease}.blog-box,.log-btn{transition:all ease .4s}.custom-radio [type=radio]:not(:checked)+label:after{opacity:0;-webkit-transform:scale(0);transform:scale(0)}.custom-radio [type=radio]:checked+label:after{opacity:1;-webkit-transform:scale(1);transform:scale(1)}.custom-file-upload-hidden{display:none;visibility:hidden;position:absolute;left:-9999px}.custom-file-upload{display:block;width:auto;font-size:16px;border:1px solid #dde6ef;height:50px}.file-upload-input{width:120px;color:#fff;font-size:16px;padding:11px 17px;border:none;background-color:red background-color:red;outline:0}.file-upload-button{cursor:pointer;display:inline-block;color:#fff;font-size:16px;padding:11px 20px;border:none;margin-left:-1px;background-color:red;float:left}.custom-file-upload input[type=file]{-webkit-appearance:none;text-align:left;-webkit-rtl-ordering:left;width:100%}.custom-file-upload input[type=file]::-webkit-file-upload-button{-webkit-appearance:none;float:right;margin:0 0 0 10px;border:none;height:48px;border-left:1px solid #dde6ef;border-radius:0;background-image:-webkit-gradient(linear,left bottom,left top,from(#fbfdff),to(#fbfdff));background-image:-moz-linear-gradient(90deg,#fbfdff 0,#fbfdff 100%)}html body .bg-a{background:#f73d51}html body .bg-b{background:#8a7cd9}html body .bg-c{background:#ffb390}html body .bg-d{background:#37b475}html body .bg-e{background:#4b5e6c}html body .bg-f{background:#f5b83b}html body .bg-g{background:#5565d0}html body .bg-h{background:#18bad9}html body .bg-i{background:#433c63}html body .bg-j{background:#ad4f87}html body .bg-k{background:#ee7d4e}html body .bg-l{background:#ff465a}html body .bg-m{background:#f5b83b}html body .bg-o{background:#18bad9}html body .bg-p{background:#6877de}html body .bg-q{background:#14af69}html body .bg-r{background:#576977;color:#576977}html body .bg-s{background:#fd5c05}html body .bg-t{background:#8a7cd9}html body .bg-u{background:#ff465a}html body .bg-v{background:#8a7cd9}html body .bg-x{background:#18bad9}html body .bg-y{background:#f5b83b}html body .bg-z{background:#ff8645}.br-0{border:none!important}.b-1{border:1px solid #dde6ef!important}.b-2,.b-3{border:3px solid #dde6ef!important}.b-4{border:4px solid #dde6ef!important}.bl-1{border-left:1px solid #dde6ef!important}.bl-2{border-left:2px solid #dde6ef!important}.bl-3{border-left:3px solid #dde6ef!important}.bl-4{border-left:4px solid #dde6ef!important}.br-1{border-right:1px solid #dde6ef!important}.br-2{border-right:2px solid #dde6ef!important}.br-3{border-right:3px solid #dde6ef!important}.br-4{border-right:4px solid #dde6ef!important}.bt-1{border-top:1px solid #dde6ef!important}.bt-2{border-top:2px solid #dde6ef!important}.bt-3{border-top:3px solid #dde6ef!important}.bt-4{border-top:4px solid #dde6ef!important}.bb-1{border-bottom:1px solid #dde6ef!important}.bb-2{border-bottom:2px solid #dde6ef!important}.bb-3{border-bottom:3px solid #dde6ef!important}.bb-4{border-bottom:4px solid #dde6ef!important}.br-info{border-color:#01b2ac!important}.br-primary{border-color:#1194f7!important}.br-danger{border-color:#f21136!important}.br-warning{border-color:#ff9800!important}.br-success{border-color:#0fb76b!important}.br-purple{border-color:#c580ff!important}.br-default{border-color:#283447!important}.navbar-default{background-image:none;filter:none}nav.navbar.bootsnav ul.nav>li>a{color:#6b797c;font-weight:400;font-size:14px;font-family:Montserrat,sans-serif;background-color:transparent!important;text-transform:capitalize}nav.navbar.bootsnav ul.nav>li.active>a,nav.navbar.bootsnav ul.nav>li>a:hover{color:#ff4e00}@media (min-width:1024px){nav.navbar li.dropdown ul.dropdown-menu{border:none!important;border-radius:4px!important;-webkit-border-radius:4px!important;box-shadow:0 0 20px 0 rgba(62,28,131,.1)!important;-webkit-box-shadow:0 0 20px 0 rgba(62,28,131,.1)!important}}.dropdown-menu>li>a:focus,.dropdown-menu>li>a:hover{background-image:none;background-color:#fff}nav.navbar.bootsnav li.dropdown a:focus,nav.navbar.bootsnav li.dropdown a:hover,nav.navbar.bootsnav li.dropdown ul.dropdown-menu>li a:focus,nav.navbar.bootsnav li.dropdown ul.dropdown-menu>li a:hover{color:#ff4e00!important}nav.navbar.bootsnav ul.nav>li>a.btn-signup.red-btn{background:#ff4e00!important;padding:11px 20px;color:#fff!important;border-radius:2px;margin-top:13px}nav.navbar.bootsnav ul.nav>li>a.btn-signup.red-btn span{margin-right:7px}i.login-icon{margin-right:10px}.banner,.main-banner{background-size:cover!important;background-position:center!important;margin:0;position:relative}.banner{padding:14% 0;color:#fff}.main-banner{padding:12% 0;overflow:hidden}.main-banner .caption{position:relative}.main-banner h2{color:#fff;font-weight:400;display:block;margin-bottom:12px}.main-banner:before{content:"";display:block;top:0;bottom:0;left:0;right:0;position:absolute;background:#31415a;opacity:.6}.main-banner fieldset .form-control,.main-banner fieldset .seub-btn,.main-banner fieldset select.selectpicker{width:100%;padding:19px 15px;border:none;border-radius:0;height:auto;line-height:1.5;font-size:15px;max-height:60px}.main-banner fieldset .form-control:focus,.main-banner fieldset .seub-btn:focus,.main-banner fieldset select.selectpicker:focus{outline:0}.main-banner p{margin-bottom:40px}.main-banner form{display:flex;flex-direction:column;justify-content:center;height:100%}.nice-select ul.list{max-height:220px;overflow-y:scroll}.multi-option-booking .nav-tabs{border:none}.multi-option-booking .nav-tabs>li{margin-bottom:5px;padding-right:15px}.multi-option-booking .nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:none;border-radius:2px;padding:6px 20px;background:rgba(255,255,255,.14);color:#fff}.multi-option-booking .nav-tabs>li>a>i{margin-right:7px}.multi-option-booking .nav>li>a:focus,.multi-option-booking .nav>li>a:hover{text-decoration:none;background-color:#ff4e00;border:none;color:#fff}.multi-option-booking .nav-tabs>li.active>a,.multi-option-booking .nav-tabs>li.active>a:focus,.multi-option-booking .nav-tabs>li.active>a:hover{color:#fff;cursor:default;background-color:#ff4e00;border:none}.multi-option-booking .tab .nav-tabs li:last-child a:hover{border:none}.multi-option-booking .fl-wrap{text-align:left}.multi-option-booking .fl-wrap h1{font-weight:600;margin-bottom:23px;color:#fff}.wow-form{margin:30px 0 20px;position:relative}.wow-form input{padding:20px;border-radius:6px;background-color:#f6f8f9;font-size:16px;color:#87838e;border:0;outline:0;width:100%}.wow-form button{position:absolute;top:4px;bottom:4px;right:4px;padding:0 20px;outline:0;border-radius:6px;box-shadow:0 20px 50px rgba(0,0,0,.04);color:#fff;font-weight:700;letter-spacing:.5px;cursor:pointer}.bg:before,.half-bg:before{right:0;content:""}.log-btn,.log-form label{font-weight:500}.wow-form input::-moz-placeholder{color:#8995a2;opacity:1}.wow-form input:-ms-input-placeholder{color:#8995a2}.wow-form input::-webkit-input-placeholder{color:#8995a2}.slideshow-container{position:absolute;top:0;left:0;width:100%;height:110%;z-index:1}.slideshow-container .slick-slide,.slideshow-item{position:relative;float:left;width:100%;height:100%}.bg,.bg:before{position:absolute;top:0;left:0}.list-single-carousel-wrap{background:#24324F}.fw-carousel .slick-slide-item{width:auto;float:left;cursor:w-resize}.fw-carousel .slick-slide-item img{width:auto;height:100%!important}.bg:before{height:100%;width:100%;display:block;background:#12233e;opacity:.7}.list-single-carousel-wrap .slick-slide-item .box-item{height:100%;z-index:20}.list-single-carousel-wrap .slick-slide-item .box-item:before{display:none}.list-single-carousel-wrap .slick-slide-item{float:left;width:auto;height:100%;padding:0;display:-webkit-box;display:-ms-flexbox;display:-webkit-flex;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;-webkit-justify-content:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;-webkit-align-items:center;align-items:center;overflow:hidden}.bg{width:100%;height:100%;z-index:1;background-size:cover;background-attachment:scroll;background-position:center;background-repeat:repeat;background-origin:content-box}.fl-wrap,.half-bg,.log-option span{position:relative}.fl-wrap{float:left;width:100%;text-align:center;color:#fff}.hero-section-wrap{z-index:30}.log-box{max-width:700px;margin:0 auto;padding:40px;border-radius:6px;box-shadow:0 5px 25px 0 rgba(41,128,185,.15);-webkit-box-shadow:0 5px 25px 0 rgba(41,128,185,.15)}.log-box img{margin:20px auto}.log-form .form-control{background:0 0}.log-option{text-align:center;margin:30px 0 20px;border-top:1px solid #eaeff5}.log-option span{background:#fff;width:40px;height:40px;border:1px solid #eaeff5;display:inline-block;line-height:40px;border-radius:50%;top:-20px}.log-btn{border:2px solid #eaeff5;padding:14px 15px;border-radius:2px;width:100%;font-size:16px;display:inline-block;text-align:center}.log-btn i{margin-right:10px}.fb-log-btn{color:#4167b2;border-color:#4167b2}.fb-log-btn:focus,.fb-log-btn:hover{background:#4167b2;color:#fff}.gplus-log-btn{color:#eb5425;border-color:#eb5425}.gplus-log-btn:focus,.gplus-log-btn:hover{background:#eb5425;color:#fff}.nav.nav-tabs.nav-advance{background:#334e6f;border-radius:50px;padding:8px 4px;max-width:410px;margin:10px auto 50px}.nav-tabs.nav-advance>li>a i,.simple-tab-style .nav-tabs>li{margin-right:10px}.nav-tabs.nav-advance>li{width:50%;text-align:center;padding:0 4px}.nav-tabs.nav-advance>li>a{background:0 0;color:#fff;padding:12px 15px;font-weight:500;border-radius:50px}.nav-tabs.nav-advance>li.active>a,.nav-tabs.nav-advance>li>a:focus,.nav-tabs.nav-advance>li>a:hover{background:#fff!important;color:#ff4e00!important}.tab-content>.tab-pane{display:none!important}.tab-content>.active{display:block!important}.half-bg:before{background:#ff4e00;position:absolute;left:0;top:0;display:block;bottom:170px}.testimonial-carousel-box{padding:5px 15px}.testimonial-caption{background:#fff;padding:30px;border-radius:6px;box-shadow:0 0 18px 0 rgba(12,99,255,.1);-webkit-box-shadow:0 0 18px 0 rgba(12,99,255,.1)}.testimonial-caption i{font-size:30px;opacity:.3;margin-bottom:13px;display:inline-block}.testimonial-caption p{line-height:2}.testimonial-author{display:table;margin-top:20px;width:100%}.testimonial-author img{max-width:40px;float:left}.testimonial-author h4{margin-left:50px;font-size:17px}.testimonial-carousel-box:focus,.testimonial-carousel-box:hover{outline:0}.simple-tab-style .nav-tabs{border:none;margin-bottom:20px}.simple-tab-style .nav-tabs>li>a{background:#8494a8;padding:12px 25px;border-radius:4px;color:#fff;margin-bottom:5px;border:1px solid #8494a8;transition:all .3s ease 0s}.simple-tab-style .nav-tabs>li>a:hover{background:#8494a8;border:1px solid #8494a8}.simple-tab-style .nav-tabs>li>a>i{margin-right:7px}.simple-tab-style .nav-tabs>li.active>a,.simple-tab-style .nav-tabs>li.active>a:focus,.simple-tab-style .nav-tabs>li.active>a:hover{background:#ff4e00;color:#fff;border:1px solid #ff4e00}.simple-tab-style .tab-content h4{font-weight:600}#accordion .panel{border:none;box-shadow:none;border-radius:0;margin-bottom:6px}#accordion .panel-heading{padding:0}#accordion .panel-title a{display:block;padding:20px;background:#fff;font-size:15px;font-weight:700;color:#334e6f;text-transform:uppercase;border:1px solid #eceef3;position:relative;transition:all .3s ease 0s}#accordion .panel-title a.collapsed:before,#accordion .panel-title a:before{content:"\f107";font-family:FontAwesome;font-weight:600;font-size:14px;line-height:24px;position:absolute;top:15px;right:25px}#accordion .panel-title a.collapsed:before{content:"\f106"}#accordion .panel-title a.collapsed:hover,#accordion .panel-title a:before,#accordion .panel-title a:hover,#accordion .panel-title a:hover:before{color:#ff4e00}#accordion .panel-body{padding:15px 20px;font-size:14px;line-height:23px;border:1px solid #eceef3;border-top:none}#accordion .panel-body p{margin-bottom:20px}.price-table-box{padding:30px 25px;background:#fff;border-radius:8px;position:relative;text-align:center;margin-bottom:30px;border-top:3px solid #263238;box-shadow:0 0 20px 0 rgba(62,28,131,.1);-webkit-box-shadow:0 0 20px 0 rgba(62,28,131,.1);-moz-box-shadow:0 0 20px 0 rgba(62,28,131,.1)}.price-table-box i{font-size:35px;margin-bottom:10px;display:block;opacity:.8}.price-table-box.active i{color:#d60930;opacity:1}.price-table-box h4{text-transform:uppercase;font-size:18px}.price-features{padding:10px 0}.price-features ul{padding:0;margin:0}.price-features ul li{padding:11px 0;list-style:none;font-size:14px;border-bottom:1px dashed #dfe5ea}.price-box{padding:15px 0}.price-box h3>sub,.price-box h3>sup{font-size:16px;color:#848b9e}a.btn.btn-pricing{padding:14px 0;text-align:center;background:#1e293d;width:100%;color:#fff;border:4px double #34425d;font-size:16px;text-transform:uppercase;border-radius:4px}.active a.btn.btn-pricing{background:#ff4e00;border-color:#ff3a5f}.price-table-box.style-2 .btn>i{display:inline-block;float:right;font-size:15px;width:40px;height:40px;line-height:40px;background:rgba(255,255,255,.1);border-radius:50%;margin-bottom:0;color:#fff;opacity:1}.price-table-box.style-2 a.btn.btn-pricing{padding:5px;vertical-align:middle;line-height:2.5;border-radius:100px;margin-top:20px}.slick-next,.slick-prev{font-size:0;line-height:0;position:absolute;top:50%;display:block;width:20px;height:20px;margin-top:-10px;padding:0;cursor:pointer;color:transparent;border:none;outline:0;background:0 0}.slick-prev{left:-35px}.slick-next{right:-25px}.slick-next:before,.slick-prev:before{font-family:FontAwesome;font-size:12px;opacity:1;color:#ff4e00;width:30px;height:30px;border-radius:50%;line-height:26px;text-align:center;display:inline-block;background:#fff;border:1px solid #eaeff5;transition:all ease .4s;-webkit-box-shadow:0 2px 10px 0 #d8dde6;box-shadow:0 2px 10px 0 #d8dde6;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.slick-next:before{content:'\f061'}.slick-prev:before{content:'\f060'}.employer-widget{margin:0 10px 20px}.error-page{text-align:center}.error-page p{font-size:17px;text-transform:initial}.error-page i{width:100px;height:100px;display:table;margin:0 auto;background:#fff;line-height:100px;font-size:45px;color:#f21136;border-radius:50%;border:1px solid #ffcad3;box-shadow:0 0 10px 1px #ffb4c1;-webkit-box-shadow:0 0 10px 1px #ffb4c1;-moz-box-shadow:0 0 10px 1px #ffb4c1}.notice{padding:15px;background-color:#fff;margin-bottom:10px;border-radius:2px;border:1px solid #eaeff5;border-left:6px solid #838992;box-shadow:0 0 10px 1px rgba(71,85,95,.08);-webkit-box-shadow:0 0 10px 1px rgba(71,85,95,.08);-moz-box-shadow:0 0 10px 1px rgba(71,85,95,.08)}.notice-sm{padding:10px;font-size:80%}.notice-lg{padding:35px;font-size:large}.notice-success{border-left-color:#74ba28}.notice-success>strong{color:#74ba28}.notice-info{border-left-color:#1db4bd}.notice-info>strong{color:#1db4bd}.notice-warning{border-left-color:#fea911}.notice-warning>strong{color:#fea911}.notice-danger{border-left-color:#eb344f}.alert-success{color:#74ba28;background-color:#e6ffcb;border-color:#d4f9ac}.alert-info{color:#4dccd3;background-color:#d0fdff;border-color:#b2fbff}.alert-warning{color:#ffbc44;background-color:#fff6e5;border-color:#ffe2ae}.alert-danger{color:#ff526c;background-color:#ffe5e9;border-color:#ffa7b4}.close{opacity:.8}.blog-box{border:1px solid #eaeff5;box-shadow:0 0 10px 1px rgba(71,85,95,.08);-webkit-box-shadow:0 0 10px 1px rgba(71,85,95,.08);-moz-box-shadow:0 0 10px 1px rgba(71,85,95,.08);margin-bottom:30px;border-radius:6px;overflow:hidden}.blog-grid-box-img{height:250px;max-height:250px;overflow:hidden;display:flex;align-items:center}.blog-grid-box-content{padding:20px 15px}.blog-box:focus,.blog-box:hover{-webkit-box-shadow:0 10px 30px 0 rgba(58,87,135,.15);-moz-box-shadow:0 10px 30px 0 rgba(58,87,135,.15);box-shadow:0 10px 30px 0 rgba(58,87,135,.15)}.blog-avatar{display:table;margin:-58px auto 0}.blog-avatar.text-center img{max-width:70px;border-radius:50%;margin:0 auto 5px;border:4px solid rgba(255,255,255,1);box-shadow:0 2px 10px 0 #d8dde6;-webkit-box-shadow:0 2px 10px 0 #d8dde6;-moz-box-shadow:0 2px 10px 0 #d8dde6}.short-blog{padding:0;margin-bottom:2em;border:1px solid #d6e3ec}figure.img-holder{position:relative}.blog-post-date{position:absolute;bottom:15px;left:15px;padding:5px 30px;border-radius:2px;color:#fff;text-transform:capitalize}.features-content h3,.footer h4,.pagewidth h3{text-transform:uppercase}.blog-content{padding:40px 25px;font-size:15px;line-height:1.8;color:#636d75}.post-meta{font-size:18px;font-family:initial}.full-blog{border:1px solid #e0ecf5}.full-blog .blog-content{padding:40px 25px 20px}.blog-footer-social{padding:10px 0 0;border-top:1px solid #e0ecf5;margin-top:20px}ul.list-inline.social{padding:0;margin:0;float:none;display:inline-block}ul.list-inline.social li{list-style:none;display:inline-block;padding:0 10px}ul.list-inline.social li i{width:40px;height:40px;background:#fff;border-radius:50%;border:1px solid #e0ecf5;color:#71818e;line-height:38px;text-align:center;font-size:16px;transition:all ease-in-out .4s}ul.list-inline.social li i:focus,ul.list-inline.social li i:hover{background:#eff2f5}.comments{width:100%;display:block;overflow:hidden;border-radius:6px;margin-bottom:40px;border:1px solid #eaeff5;box-shadow:0 0 10px 1px rgba(71,85,95,.08);-webkit-box-shadow:0 0 10px 1px rgba(71,85,95,.08);-moz-box-shadow:0 0 10px 1px rgba(71,85,95,.08)}.comments-title{padding:1em 1em 1em 1.5em;border-bottom:1px solid #eaeff5}.single-comment,.single-comment .single-comment{padding-left:80px}.comments-title h4{margin:0}.single-comment{position:relative;margin-bottom:10px;padding-bottom:20px;margin-top:10px;padding-right:15px}.single-comment .img-holder{left:12px;border-radius:50%;overflow:hidden;width:50px;height:50px;position:absolute;top:0;box-shadow:0 2px 10px 0 #d8dde6;-webkit-box-shadow:0 2px 10px 0 #d8dde6;-moz-box-shadow:0 2px 10px 0 #d8dde6}.single-comment .text-holder{border:1px solid #eaeff5;padding:20px}.single-comment .text-holder .top{margin:0 0 8px;overflow:hidden}.rating.pull-right li{list-style:none;display:inline-block}.rating.pull-right li i{font-size:13px;margin-right:3px;color:#636d75}.rating.pull-right li i.active{color:#07b107}.comments-form textarea.form-control{height:150px}.comments-form form{margin:10px -15px}.side-list ul.side-blog-list li{display:-webkit-box;display:-ms-flexbox;display:flex;padding:10px 5px;align-items:center}.blog-list-img{display:inline-block;width:55px;max-width:55px;overflow:hidden;height:55px;border-radius:4px;position:relative;margin:0 10px 0 0;vertical-align:text-bottom}.blog-post-meta{font-size:90%}.side-list .blog-post-meta span{float:none}.nav-tabs{border:1px solid #e8ebef;border-left:none;border-right:none}.nav-tabs-custom .nav-tabs>li>a:hover{border-color:#e8ebef;background:#e8ebef;border-radius:0}.nav-tabs-custom{border-right:1px solid #e8ebef;border-left:1px solid #e8ebef;border-bottom:1px solid #e8ebef}.nav-tabs>li>a{border-radius:0}.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus,.nav-tabs>li.active>a:hover{color:#555;cursor:default;background-color:#e8ebef;border:none;border-bottom-color:transparent}.fontawesome-icon-list .col-md-3.col-sm-4{padding:10px}.bs-glyphicons li{width:24.5%;height:115px;padding:10px;margin:0 -1px -1px 0;font-size:12px;line-height:1.4;text-align:center;border:1px solid #e8edef;display:inline-block}.bs-glyphicons .glyphicon{margin-top:5px;margin-bottom:10px;font-size:24px}.bs-glyphicons .glyphicon-class{display:block;text-align:center;word-wrap:break-word}.icon-container{width:240px;padding:.7em 0;float:left;position:relative;text-align:left}.discount-flick,.features-content,.footer .f-social-box ul li a i,.guides-box,.icon-box-round,.list-like,.list-style .discount-flick,.pagewidth h3,.process-count,.process-icon,.profile-header-nav .nav-tabs li a i,.review-status,.social-share li,.tourtype-detail,.tr-list-detail,.work-process,span.featured-tour{text-align:center}.icon-section{margin:0 0 3em;clear:both;overflow:hidden}.pagewidth h3{font-weight:700;margin:1em 0}.footer{padding:50px 0 0;border-top:1px solid #f6f7f9}.footer h4{font-size:15px;color:#ff4e00;margin-bottom:30px}.footer ul{padding:0;margin:0}.footer ul li{padding:0;list-style:none}.footer ul li a{font-size:13px;line-height:1.5;color:#334e6f;opacity:.7;display:block;font-weight:500;margin-bottom:15px;transition:all ease .4s}.footer .f-social-box ul li a,.footer ul li a:focus,.footer ul li a:hover{opacity:1}.footer .f-social-box{margin-top:20px;margin-bottom:15px}.footer .f-app-box ul li,.footer .f-social-box ul li{display:inline-block}.footer .f-social-box ul li a i{width:42px;height:42px;line-height:42px;border-radius:50%;margin-right:10px;border:1px solid #ebebeb;transition:all ease .4s}.footer .f-social-box ul li a i:focus,.footer .f-social-box ul li a i:hover{background:#ff4e00;color:#fff!important;border-color:#ff4e00}.footer .f-app-box ul li a{font-size:18px;opacity:.6;margin-right:10px;padding:12px 22px;border-radius:4px;margin-bottom:5px;border:1px solid #ebebeb;transition:all ease .4s}.footer .f-app-box ul li a i{font-size:22px;margin-right:10px}footer .input-group{border:1px solid #ebebeb;border-radius:2px}footer.footer .input-group-btn .btn{color:#ff4e00}footer .btn.btn-default,footer .btn.btn-default:focus,footer .btn.btn-default:hover,footer input.form-control,footer input.form-control:focus,footer input.form-control:hover{height:50px;border:none;background:0 0}.footer.dark-bg .f-app-box ul li a,.footer.dark-bg .f-social-box ul li a i,footer.dark-bg .input-group{border:1px solid #3b495f}.copyright{padding:30px;margin-top:40px}.copyright p{font-size:94%}.footer.dark-bg h4{color:#fff}.footer.dark-bg ul li a{color:#72849e}.tr-list-detail h4,.tr-list-detail>*,footer.dark-bg .btn.btn-default,footer.dark-bg .btn.btn-default:focus,footer.dark-bg .btn.btn-default:hover,footer.dark-bg input.form-control,footer.dark-bg input.form-control:focus,footer.dark-bg input.form-control:hover{color:#fff}.footer.dark-bg .copyright{border-top:1px solid #212b3a}.before-footer{min-height:90px;display:flex;padding:0;position:relative;width:100%}.data-flex{display:flex;flex-direction:column;justify-content:center;height:90px;padding:0 15px;position:relative}.social-share{padding:0;margin:0;display:flex;height:100%;line-height:90px}.social-share li{display:inline-block;list-style:none;padding:0 20px;width:25%;border-right:1px solid #dde6ef}.social-share li:last-child{border:none}.social-share li a{font-size:17px}.page-title-banner{background-position:center;background-size:cover;position:relative}.page-title-banner:before{content:"";position:absolute;display:block;width:100%;height:100%;top:0;bottom:0;left:0;right:0;background:#222e4c;opacity:.6}.page-title-banner>*,.process-icon,.process-img,.work-process{position:relative}.tr-list-detail{display:block;padding:4em 0 1em}.process-icon,.process-img,.tr-list-thumb{display:inline-block}.tr-list-detail p{font-size:18px;font-family:'Josefin Slab',serif}.tr-list-thumb{max-width:120px;height:120px;padding:10px;border-radius:50%;background:rgba(255,255,255,.17)}.process-icon{float:none;width:100px;height:100px;-webkit-border-radius:50%;-moz-border-radius:50%;-ms-border-radius:50%;-o-border-radius:50%;border-radius:50%;line-height:98px;font-size:35px;color:#ff4e00;background:#f5f9fc;border-color:#f5f9fc}.process-img{width:110px;height:110px;margin:15px auto 0}.process-img img{z-index:1}.process-count{position:absolute;right:0;bottom:5px;line-height:30px;width:30px;height:30px;background:#ff4e00;font-size:14px;border-radius:50%;color:#fff}span.process-num{position:absolute;font-size:60px;font-weight:600;opacity:.1;left:-30px;top:-10px}.work-process h4{margin:10px 0}.work-process p{font-size:13px}.features-content{border:1px solid #d4d9e3;padding:20px 15px;border-radius:5px;margin-bottom:30px;box-shadow:0 0 10px 0 rgba(107,121,124,.2);-webkit-box-shadow:0 0 10px 0 rgba(107,121,124,.2)}.features-content h3{font-weight:400;color:#475052;font-size:18px;margin-bottom:0}.hotel-name,.hotel-review h6 span,.restaurent-name{text-transform:capitalize}.features-content p{font-weight:300;color:#6b797c;line-height:1.8;font-size:14px}.features-content span{font-size:45px;margin-bottom:25px;color:#0CAA41}.list-like,.list-like:focus,.list-like:hover{color:#fff}.search-form{background:#fff;border-radius:6px;padding:15px 15px 10px;box-shadow:0 5px 25px 0 rgba(41,128,185,.15);-webkit-box-shadow:0 5px 25px 0 rgba(41,128,185,.15);-ms-transform:translatey(-30px);-webkit-transform:translatey(-30px);transform:translatey(-30px)}.search-wide{min-width:50px;float:left;margin:5px}.search-wide.full{min-width:150px;float:left;margin:5px}.fl-right{float:right}.search-wide .form-control{height:40px;padding:2px 10px;line-height:35px;font-size:13px}.side-list ul li span.custom-checkbox{float:none}.modal-content img{margin-bottom:25px}article figure{position:relative;overflow:hidden;height:280px}article figure .list-overlay{position:relative;display:table;width:100%;height:100%}article figure .list-overlay:before{content:"";position:absolute;left:0;right:0;top:0;bottom:0;background:linear-gradient(to bottom,transparent 20%,#222e4c);display:block;height:100%;width:100%}.list-like,.list-like.left{position:absolute;display:inline-block}article figure .listing-box-img{position:absolute;width:100%;height:100%;-moz-transition:all .4s ease-in-out;-o-transition:all .4s ease-in-out;-webkit-transition:all .4s ease-in-out;-ms-transition:all .4s ease-in-out;transition:all .4s ease-in-out}article figure>a:hover .listing-box-img{transform:scale(1.2);-ms-transform:scale(1.2);-moz-transform:scale(1.2);-webkit-transform:scale(1.2);-o-transform:scale(1.2)}figure .read_more{position:absolute;top:50%;left:0;margin-top:-12px;-webkit-transform:translateY(60px);-moz-transform:translateY(60px);-ms-transform:translateY(60px);-o-transform:translateY(60px);transform:translateY(60px);text-align:center;opacity:0;visibility:hidden;width:100%;-webkit-transition:all .6s;transition:all .6s;z-index:2}figure:hover .read_more{opacity:1;visibility:visible;z-index:2;-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0)}figure .read_more span{background:#0fb76b;color:#fff;padding:10px 20px;border-radius:50px;box-shadow:0 0 0 4px rgba(255,255,255,.3)}.tour-box-image>a:before{z-index:1}.entry-category,.featured-tour,.inner-box,.meta-item{z-index:2}.list-like{right:20px;top:20px;z-index:2;background:#ff0052;-webkit-transition:all .5s ease;-moz-transition:all .5s ease;-ms-transition:all .5s ease;-o-transition:all .5s ease;transition:all .5s ease;width:30px;height:30px;line-height:35px;border-radius:50%}.tour-box .list-like:focus,.tour-box .list-like:hover{color:ffffff}.list-like.left{left:15px;bottom:15px}.tour-box,.tour-box-image,.tour-box-image>a{position:relative}.list-like.right-bot{right:15px;bottom:15px}.destination-box-image>a.list-like:before,.hotel-box-image>a.list-like:before,.restaurent-box-image>a.list-like:before,.tour-box-image>a.list-like:before{display:none}.tour-box{line-height:1.375;-webkit-box-shadow:0 0 20px 0 rgba(62,28,131,.1);box-shadow:0 0 20px 0 rgba(62,28,131,.1);font-size:16px;background:#fff;border-radius:4px;overflow:hidden;margin-bottom:30px}.destination-box,.hotel-box,.restaurent-box{-webkit-box-shadow:0 0 20px 0 rgba(62,28,131,.1);border-radius:4px;overflow:hidden}.tour-box-image .tour-box-img{height:280px;-o-object-fit:cover;object-fit:cover;position:relative;width:100%;-webkit-transition:all .5s ease;-moz-transition:all .5s ease;-ms-transition:all .5s ease;-o-transition:all .5s ease;transition:all .5s ease}.tour-box-image>a{display:table;overflow:hidden}.tour-box-image>a:before{content:"";position:absolute;left:0;right:0;top:0;bottom:0;background:#303b61;display:block;height:100%;width:100%;opacity:.4}.tour-box .entry-bookmark a{position:absolute;top:20px;left:20px;z-index:2;right:20px;font-size:20px;color:#fff;margin-bottom:8px;pointer-events:none}.tour-box .inner-box{padding:5px 20px;width:100%}.tour-box.style-1 .entry-meta{position:relative;width:100%;padding:14px 20px;border-bottom:1px solid #f4f4f4}.coauthors .vcard{margin-right:10px}.coauthors .vcard:last-child{margin-right:0}.meta-author img{border-radius:50%;vertical-align:-10px;display:inline-block;margin-right:4px;width:30px;height:30px}.box-inner-ellipsis>*,.domestic-price,.icon-box-round,.icon-box-text,.listing-features-box{vertical-align:middle}.box-inner-ellipsis{min-height:70px;display:table;width:100%}span.vcard.author a{font-weight:500;font-size:14px}.tour-box .entry-title{margin:0;font-size:17px;line-height:1.3;max-width:250px}.meta-comment i,.tour-price i,.tour-time i{margin-right:5px}.meta-item.meta-comment{margin-top:7px}.meta-rating>*{color:#FF9800}.meta-comment>*{font-size:15px}.tour-box-image .tour-time{position:absolute;right:20px;bottom:20px;color:#fff;font-size:16px;z-index:1}.location,.tour-box .inner-box p{font-size:13.5px}. .coauthors .vcard .fn{font-size:15px}.meta-item.meta-views:before{content:"\f005";font-family:FontAwesome;margin-right:5px}.tour-box.style-1 span.meta-item.meta-rating{bottom:20px;right:30px;color:#fff}.tour-box.list-style{height:280px;position:relative;margin-bottom:30px;line-height:1.375}.tour-box.list-style .tour-box-image{float:left;position:relative}.tour-box.list-style .tour-box-image img{-moz-transition:all .4s ease-in-out;-o-transition:all .4s ease-in-out;-webkit-transition:all .4s ease-in-out;-ms-transition:all .4s ease-in-out;transition:all .4s ease-in-out}.tour-box.list-style .tour-box-image a:hover img{transform:scale(1.2);-ms-transform:scale(1.2);-moz-transform:scale(1.2);-webkit-transform:scale(1.2);-o-transform:scale(1.2)}.tour-box.list-style .tour-box-image .tour-box-img{height:280px;-o-object-fit:cover;object-fit:cover;width:100%}.tour-place{position:absolute;bottom:20px;left:20px;z-index:1;font-size:16px}.tour-place a,.tour-place a:focus,.tour-place a:hover{color:#fff}.tour-box.list-style .inner-box{float:left;padding:30px 20px 30px 0}.tour-box.list-style .entry-meta{width:100%;margin-top:30px}.tour-box.list-style .entry-title{margin:0 0 10px;line-height:1.2;font-size:20px}.tour-box.style-2 .entry-content{font-size:13.5px;line-height:1.6}span.featured-tour{width:25px;height:25px;background:#10aa08;position:absolute;top:15px;right:15px;border-radius:50%;color:#fff;font-size:10px;border:2px solid #9fd402;line-height:21px}.hotel-inner.inner-box,.restaurent-inner.inner-box{border-top:1px solid #f4f4f4}.list-style .discount-flick{position:absolute;top:9px;right:20px;font-size:13px;line-height:20px;font-weight:700;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:22px 23px 5px 20px;-webkit-transform:translate(50%,-50%) rotate(45deg) translateZ(0);-moz-transform:translate(50%,-50%) rotate(45deg) translateZ(0);transform:translate(50%,-50%) rotate(45deg) translateZ(0);background:#ea1753;color:#fff;z-index:1}.destination-box-image>a:before{z-index:1}.featured-destination{z-index:2}.destination-box-image>a:hover .destination-box-img{transform:scale(1.2);-ms-transform:scale(1.2);-moz-transform:scale(1.2);-webkit-transform:scale(1.2);-o-transform:scale(1.2)}.destination-box{line-height:1.375;box-shadow:0 0 20px 0 rgba(62,28,131,.1);font-size:16px;background:#fff;position:relative;margin-bottom:30px}.destination-box-image{position:relative}.destination-box-image .destination-box-img{height:280px;-o-object-fit:cover;object-fit:cover;position:relative;width:100%;-webkit-transition:all .5s ease;-moz-transition:all .5s ease;-ms-transition:all .5s ease;-o-transition:all .5s ease;transition:all .5s ease}.destination-box-image>a{position:relative;display:table;overflow:hidden}.destination-box-image>a:before{content:"";position:absolute;left:0;right:0;top:0;bottom:0;background:linear-gradient(to bottom,transparent 20%,#222e4c);display:block;height:100%;width:100%}.destination-box .inner-box{padding:5px 20px;width:100%}.destination-box.style-1 .entry-meta{position:relative;width:100%;padding:14px 20px;border-bottom:1px solid #f4f4f4}.destination-place,.discount-flick,.featured{position:absolute;z-index:1}.destination-box .box-inner-ellipsis{min-height:50px;display:table;width:100%}.destination-box .entry-location{margin:0;font-size:17px;line-height:1.3;max-width:250px}.destination-box-image .destination-time{position:absolute;right:20px;bottom:20px;color:#fff;font-size:16px;z-index:1}.destination-price i,.destination-time i{margin-right:5px}.destination-box .inner-box p{font-size:13.5px}.destination-place{bottom:20px;left:20px;font-size:16px}.destination-place a:focus,.destination-place a:hover,.destination-place>*{color:#fff}.featured{top:0;right:0;width:38px;height:38px;background:url(../img/job-featured.png) no-repeat;background-size:cover}.discount-flick{top:10px;right:8px;font-size:13px;line-height:20px;font-weight:700;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:18px 22px 5px 20px;-webkit-transform:translate(50%,-50%) rotate(45deg) translateZ(0);-moz-transform:translate(50%,-50%) rotate(45deg) translateZ(0);transform:translate(50%,-50%) rotate(45deg) translateZ(0);background:#ea1753;color:#fff}.destination-box.list-style{height:250px;position:relative;margin-bottom:30px;line-height:1.375}.destination-box.list-style .destination-box-image{float:left;position:relative}.destination-box.list-style .destination-box-image img{-moz-transition:all .4s ease-in-out;-o-transition:all .4s ease-in-out;-webkit-transition:all .4s ease-in-out;-ms-transition:all .4s ease-in-out;transition:all .4s ease-in-out}.destination-box.list-style .destination-box-image a:hover img{transform:scale(1.2);-ms-transform:scale(1.2);-moz-transform:scale(1.2);-webkit-transform:scale(1.2);-o-transform:scale(1.2)}.destination-box.list-style .destination-box-image .destination-box-img{height:250px;-o-object-fit:cover;object-fit:cover;width:100%}.destination-box.list-style .vcard.author h4{font-size:16px;margin:0}.destination-box.list-style .inner-box{float:left;padding:30px 20px 30px 0}.destination-box.list-style .entry-meta{width:100%;margin-top:30px}.destination-box.list-style .entry-title{margin:0 0 10px;line-height:1.2;font-size:18px}.destination-box.style-2 .entry-content{font-size:13.5px;line-height:1.6}.destination-box .entry-bookmark a{position:absolute;top:20px;left:20px;z-index:2;right:20px;font-size:20px;color:#fff;margin-bottom:8px;pointer-events:none}.hotel-box,.hotel-box-image,.hotel-box-image>a{position:relative}.hotel-box-image>a:before{z-index:1}.featured-hotel{z-index:2}.hotel-box-image>a:hover .hotel-box-img{transform:scale(1.2);-ms-transform:scale(1.2);-moz-transform:scale(1.2);-webkit-transform:scale(1.2);-o-transform:scale(1.2)}.hotel-box{line-height:1.375;box-shadow:0 0 20px 0 rgba(62,28,131,.1);font-size:16px;background:#fff;margin-bottom:30px}.hotel-box-image .hotel-box-img{height:280px;-o-object-fit:cover;object-fit:cover;position:relative;width:100%;-webkit-transition:all .5s ease;-moz-transition:all .5s ease;-ms-transition:all .5s ease;-o-transition:all .5s ease;transition:all .5s ease}.hotel-box-image>a{display:table;overflow:hidden}.hotel-box-image>a:before{content:"";position:absolute;left:0;right:0;top:0;bottom:0;background:linear-gradient(to bottom,transparent 20%,#222e4c);display:block;height:100%;width:100%}.hotel-box .inner-box{padding:5px 20px;width:100%}.hotel-box.style-1 .entry-meta{position:relative;width:100%;padding:14px 20px;border-bottom:1px solid #f4f4f4}.hotel-box .box-inner-ellipsis{min-height:50px;display:table;width:100%}.hotel-box .entry-location{margin:0;font-size:17px;line-height:1.3;max-width:250px}.hotel-box-image .hotel-time{position:absolute;right:20px;bottom:20px;color:#fff;font-size:16px;z-index:1}.hotel-price i,.hotel-time i{margin-right:5px}.hotel-box .inner-box p{font-size:13.5px}.hotel-place{position:absolute;bottom:20px;left:20px;z-index:1;font-size:16px}.hotel-place a:hover,.hotel-place>*,.hotel-place>:focus{color:#fff}.hotel-detail-box{padding:10px 20px}.hotel-ellipsis p{font-size:14px}.hotel-review h6{margin:0;display:inline-block;color:#8995a2}.hotel-review h6 span{display:block;margin-bottom:3px}.hotel-name{font-size:18px}.hotel-box.list-style{height:250px;position:relative;margin-bottom:30px;line-height:1.375}.hotel-box.list-style .hotel-box-image{float:left;position:relative}.hotel-box.list-style .hotel-box-image img{-moz-transition:all .4s ease-in-out;-o-transition:all .4s ease-in-out;-webkit-transition:all .4s ease-in-out;-ms-transition:all .4s ease-in-out;transition:all .4s ease-in-out}.hotel-box.list-style .hotel-box-image a:hover img{transform:scale(1.2);-ms-transform:scale(1.2);-moz-transform:scale(1.2);-webkit-transform:scale(1.2);-o-transform:scale(1.2)}.hotel-box.list-style .hotel-box-image .hotel-box-img{height:250px;-o-object-fit:cover;object-fit:cover;width:100%}.hotel-box.list-style .inner-box{float:left;padding:30px 20px 30px 0}.hotel-box.list-style .entry-meta{width:100%;margin-top:30px}.hotel-box.list-style .entry-title{margin:0 0 10px;line-height:1.2;font-size:18px}.hotel-box.style-2 .entry-content{font-size:13.5px;line-height:1.6}.hotel-box .entry-bookmark a{position:absolute;top:20px;left:20px;z-index:2;right:20px;font-size:20px;color:#fff;margin-bottom:8px;pointer-events:none}.restaurent-box-image>a:before{z-index:1}.featured-restaurent{z-index:2}.restaurent-box-image>a:hover .restaurent-box-img{transform:scale(1.2);-ms-transform:scale(1.2);-moz-transform:scale(1.2);-webkit-transform:scale(1.2);-o-transform:scale(1.2)}.restaurent-box{line-height:1.375;box-shadow:0 0 20px 0 rgba(62,28,131,.1);font-size:16px;background:#fff;position:relative;margin-bottom:30px}.restaurent-box-image{position:relative}.restaurent-box-image .restaurent-box-img{height:280px;-o-object-fit:cover;object-fit:cover;position:relative;width:100%;-webkit-transition:all .5s ease;-moz-transition:all .5s ease;-ms-transition:all .5s ease;-o-transition:all .5s ease;transition:all .5s ease}.restaurent-box-image>a{position:relative;display:table;overflow:hidden}.restaurent-box-image>a:before{content:"";position:absolute;left:0;right:0;top:0;bottom:0;background:linear-gradient(to bottom,transparent 20%,#222e4c);display:block;height:100%;width:100%}.restaurent-box .inner-box{padding:5px 20px;width:100%}.restaurent-box.style-1 .entry-meta{position:relative;width:100%;padding:14px 20px;border-bottom:1px solid #f4f4f4}.entry-meta .meta-item{display:inline-block;vertical-align:middle;margin-right:10px;font-size:12px;line-height:18px}.restaurent-box .box-inner-ellipsis{min-height:50px;display:table;width:100%}.box-inner-ellipsis>*{display:table-cell}.restaurent-box .entry-location{margin:0;font-size:17px;line-height:1.3;max-width:250px}.meta-rating{margin-top:5px}.restaurent-box-image .restaurent-time{position:absolute;right:20px;bottom:20px;color:#fff;font-size:16px;z-index:1}.restaurent-price i,.restaurent-time i{margin-right:5px}.restaurent-box .inner-box p{font-size:13.5px}.restaurent-place{position:absolute;bottom:20px;left:20px;z-index:1;font-size:16px}.restaurent-place a:focus,.restaurent-place a:hover,.restaurent-place>*{color:#fff}.restaurent-detail-box{padding:10px 20px}.restaurent-ellipsis p{font-size:14px}.review-status{float:left;width:20px;height:20px;font-size:9px;line-height:21px;color:#fff;border-radius:50%;margin-top:4px;margin-right:6px}.restaurent-review h6{margin:0;display:inline-block;color:#8995a2}.restaurent-review h6 span{display:block;margin-bottom:3px;text-transform:capitalize}.restaurent-name{font-size:18px}#progressbar li,.fs-title,.ground-avatar,.guides-container .btn{text-transform:uppercase}.restaurent-box.list-style{height:250px;position:relative;margin-bottom:30px;line-height:1.375}.restaurent-box.list-style .restaurent-box-image{float:left;position:relative}.restaurent-box.list-style .restaurent-box-image img{-moz-transition:all .4s ease-in-out;-o-transition:all .4s ease-in-out;-webkit-transition:all .4s ease-in-out;-ms-transition:all .4s ease-in-out;transition:all .4s ease-in-out}.restaurent-box.list-style .restaurent-box-image a:hover img{transform:scale(1.2);-ms-transform:scale(1.2);-moz-transform:scale(1.2);-webkit-transform:scale(1.2);-o-transform:scale(1.2)}.restaurent-box.list-style .restaurent-box-image .restaurent-box-img{height:250px;-o-object-fit:cover;object-fit:cover;width:100%}.restaurent-box.list-style .inner-box{float:left;padding:30px 20px 30px 0}.restaurent-box.list-style .entry-meta{width:100%;margin-top:30px}.restaurent-box.list-style .entry-title{margin:0 0 10px;line-height:1.2;font-size:20px}.restaurent-box.style-2 .entry-content{font-size:13.5px;line-height:1.6}.restaurent-box .entry-bookmark a{position:absolute;top:20px;left:20px;z-index:2;right:20px;font-size:20px;color:#fff;margin-bottom:8px;pointer-events:none}.guides-container{background:#fff;border-radius:4px;overflow:hidden;margin-bottom:30px;-webkit-box-shadow:0 0 20px 0 rgba(62,28,131,.1);box-shadow:0 0 20px 0 rgba(62,28,131,.1)}.guides-img-box,.guides-img-box img{border-radius:50%}.guides-box{padding:40px 20px}.guides-img-box{width:100px;height:100px;margin:5px auto;background:#eff3f7;padding:8px}.guider-detail h4{font-size:17px}.guides-container .btn{border-radius:0;font-weight:500}.expert-thumb,.expert-thumb img{border-radius:50%}.experts-container{display:table;width:100%;margin-bottom:30px}.expert-thumb{display:table;float:left;width:80px;height:80px;background:#eff3f7;padding:5px}.experts-detail{display:table;margin-left:95px}.experts-detail h4{margin-bottom:1px;font-size:17px;margin-top:3px}span.user-status{padding:1px 15px;border-radius:2px;font-size:11px;display:table;color:#fff;margin-top:3px;letter-spacing:1px}.tourtype-container{margin-bottom:50px}.tourtype-detail i{font-size:35px;margin:20px auto}.tourtype-detail img{max-width:80px;margin:20px auto}.domestic-routes{background:#fff;border-radius:6px;overflow:hidden;margin-bottom:30px;box-shadow:0 0 14px 0 rgba(0,0,0,.08);padding:10px 15px}.domestic-routes-thumb{width:60px;float:left;display:table;height:60px;background:#eff3f7;padding:4px;border-radius:50%}.domestic-routes-detail{display:table;margin-left:15px;float:left}.domestic-offer{color:#fff;padding:3px 10px;margin-left:8px;font-size:12px;border-radius:2px}.domestic-price{display:table;float:right;margin-top:10px;font-size:50px}.domestic-price>*{font-size:20px}.profile-header-nav .tab .nav-tabs{border:none}.profile-header-nav .nav-tabs>li{float:left;margin-bottom:0}.profile-header-nav button.btn.theme-btn{margin-top:9px}.profile-header-nav .nav-tabs li a{padding:20px 32px;border:none;border-right:1px dashed #dee2ea;background:#fff;color:#334e6f;opacity:.7;border-radius:0;margin-right:0;font-weight:500;transition:all .3s ease-in 0s}.profile-header-nav .nav-tabs li a:hover{background:#fff;color:#ff4e00;opacity:1}.profile-header-nav .nav-tabs li a i{display:inline-block;margin-right:10px}.profile-header-nav .nav-tabs li:last-child a{border-right:none}.profile-header-nav .tab .nav-tabs li:last-child a:focus,.profile-header-nav .tab .nav-tabs li:last-child a:hover{border-right:none;background:0 0}.profile-header-nav .nav-tabs li.active a,.profile-header-nav .nav-tabs li.active a:focus,.profile-header-nav .nav-tabs li.active a:hover{color:#ff4e00;opacity:1;background:0 0;border-right:1px dashed #dee2ea}.profile-header-nav .tab .tab-content{padding:20px;line-height:22px;box-shadow:0 1px 0 grey}.profile-header-nav .tab .tab-content h3{margin-top:0}@media only screen and (max-width:767px){.profile-header-nav .nav-tabs li{width:100%;margin-bottom:10px}.profile-header-nav .nav-tabs li a{padding:15px}.profile-header-nav .nav-tabs li.active a,.profile-header-nav .nav-tabs li.active a:focus,.profile-header-nav .nav-tabs li.active a:hover{padding:15px;margin-top:0}}.tr-single-box{background:#fff;display:block;border-radius:2px;border:1px solid #f0f3f7;margin-bottom:30px}.tr-single-header{width:100%;border-bottom:1px solid #f3f4f7;padding:12px 25px}.tr-single-header h4{margin:0;font-size:15px}.tr-single-header h4>i{margin-right:7px}.tr-single-body{width:100%;padding:15px 25px 25px}.listing-features{position:relative;display:table;height:65px;width:100%;padding:0 7px;border-radius:6px;margin:7px 0 15px;border:1px solid #e8ecf1}.listing-features-box{display:table-cell}.listing-features-thumb{float:left;width:45px}.listing-features-thumb img{max-width:35px;margin:0 auto}.listing-features-detail{margin-left:55px;margin-top:9px}.listing-features-detail h4{font-weight:500;font-size:16px;margin:0}ul.amenities{display:table}.icon-box-icon-block,.icon-box-round,.icon-box-text,.list-thumb-box,ul.amenities li{display:inline-block}ul.amenities li{margin-bottom:15px;position:relative;padding-left:22px;font-size:14px}ul.amenities li:before{position:absolute;content:"\f058";font-family:FontAwesome;left:0;color:#00cd09;font-size:18px}ul.amenities.two li{width:50%}ul.amenities.third li{width:33.3333%}ul.amenities.fourth li{width:25%}.list-thumb-box{position:relative;min-height:250px;border-radius:6px;overflow:hidden}.list-thumb-box h5{position:absolute;right:15px;bottom:15px;color:#fff;font-size:18px}.list-thumb-box:before{content:"";position:absolute;right:0;left:0;top:0;bottom:0;background:#162444;opacity:.5}.icon-box-icon-block{width:100%;font-size:13px}.icon-box-round{width:32px;height:32px;line-height:32px;margin-right:7px;color:#778494;font-size:14px;border-radius:50%;background-color:#f0f3f7}.icon-box-text strong{display:block;line-height:1.4}.simple-features-list{margin:0;padding:0}.simple-features-list li{list-style:none;padding:0 0 10px 25px;position:relative}.simple-features-list li:before{position:absolute;content:"\e71b";font-family:themify;left:0;top:0}.extra-service{margin:10px 0 0;display:table;width:100%}.extra-service li{list-style:none;padding:7px 0}.extra-service.half li{width:50%;float:left;display:inline-block}.tr-single-header span.clickable,.tr-single-header span.clickables{margin-top:-20px;font-size:15px;cursor:pointer}.side-list-check{padding:0;margin:0}.side-list-check li{list-style:none;margin-bottom:10px}.search-rating{display:inline-block;color:#86909e}.search-rating i{margin-right:10px}.search-rating i.enable{color:#FF9800}.short-box{background:#fff;margin:0 0 30px;padding:10px;position:relative;border:1px solid #f0f3f7;overflow:initial;display:inline-block;width:100%}.short-box .dropdown-menu.pull-right{right:0;left:auto!important;top:90%!important}.short-box .dropdown-menu{position:absolute;top:100%;left:0;color:#677897;z-index:10;float:left;min-width:160px;padding:0;margin:1.125rem 0 0;font-size:14px;text-align:left;list-style:none;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:none;overflow:hidden;border-radius:6px;-webkit-box-shadow:0 0 15px 1px rgba(113,106,202,.2);box-shadow:0 0 15px 1px rgba(113,106,202,.2)}#review_summary,.coming-counter,.info-module,.pr-detail-container,.pr-info ul li,ul.coming-social li a,ul.countdown li{text-align:center}.info-features,.info-services{box-shadow:0 0 18px 0 rgba(12,99,255,.1)}.short-box .dropdown-menu>a{display:block;padding:14px 12px;clear:both;font-weight:300;line-height:1.42857143;color:#67757c;border-bottom:1px solid #f1f6f9}.short-box .dropdown-menu.show{display:block}.short-box h4{font-size:16px}.short-box .btn{padding:7px 12px}.pr-detail-container{padding:30px 0}.pr-thumb{width:120px;margin:0 auto;display:table;padding:7px;height:120px;border-radius:50%;border:1px dashed #ebedf1;position:relative}span.pr-status{width:12px;height:12px;border-radius:50%;position:absolute;right:0;bottom:30%;border:2px solid #80de80}.pr-th-detail h4{font-size:17px}.rating-system{display:inline-block;color:#86909e;font-size:12px}.rating-system i.enable{color:#FF9800}.pr-info{width:100%}.pr-info ul{display:table;width:100%;padding:0;margin:0;border-top:1px solid #f3f4f7}.pr-info ul li{font-weight:500;width:33.3333%;display:inline-block;border-right:1px solid #f3f4f7;padding:15px 0}.pr-info ul li:last-child{border-right:none}.pr-info ul li i{margin-bottom:5px;display:block}.guider-box-detail{display:table;width:100%}.guider-box-thumb{float:left;display:inline-block;width:110px;height:110px;padding:10px;border-radius:50%;background:#f6f8fb}.guider-box-detail-content{margin-top:10px;margin-left:135px}.guider-box-detail-content h4{font-size:18px}.guider-box-detail-content p{margin-bottom:10px}span.guider-status{padding:4px 15px;border-radius:2px;color:#fff;margin:0 5px}.pr-table{display:table;margin-top:20px}.pr-table ul{padding:0;margin:0}.review-lc.text-right a>i,.reviewer-rate p>i{margin-right:5px}.pr-table ul li{list-style:none;margin-bottom:12px;font-size:15px}.pr-table ul li>strong{width:120px;font-weight:600;display:inline-block}.pr-table ul li .t-type{color:#fff;padding:3px 10px;border-radius:2px;margin-right:5px;font-size:13px}.review-box{display:table;width:100%;margin-bottom:10px;padding-bottom:10px;position:relative}.review-thumb{display:inline-block;float:left;width:70px;height:70px;padding:5px;background:#f6f8fb;border-radius:50%}.review-user-info{display:table;margin-left:90px}.review-user-info h4{font-size:17px}.reviewer-rate{position:absolute;right:20px;top:10px}.info-features,.info-module,.info-services,.soon-wrapper,.tg-tourname{position:relative}.reviewer-rate p{font-weight:600}.reviewer-rate p>span{font-weight:500}.review-lc.text-right a{margin-left:20px;color:#8998a7;font-size:13px}.review-box-content{margin-bottom:20px;padding-bottom:20px;border-bottom:1px dashed #f3f4f7}.review-box-content p{font-size:13px}#review_summary{color:#334e6f;-webkit-border-radius:5px 5px 5px 0;padding:20px 10px;background:#f4f5f7;-moz-border-radius:5px 5px 5px 0;-ms-border-radius:5px 5px 5px 0;border-radius:5px 5px 5px 0}#review_summary strong{font-size:60px;display:block;line-height:1}#review_summary em{font-style:normal;font-weight:500;display:block}.info-services{margin-bottom:40px;padding:30px 25px;background:#fff;-webkit-box-shadow:0 0 18px 0 rgba(12,99,255,.1);-moz-box-shadow:0 0 18px 0 rgba(12,99,255,.1);border-radius:6px}.info-services img{max-width:55px;margin-bottom:5px}.info-services i{font-size:40px;margin-bottom:10px}.info-services .infobox_title{font-size:17px;margin-bottom:10px}.info-features{margin-bottom:40px;padding:40px 20px;border-radius:10px;-webkit-box-shadow:0 0 18px 0 rgba(12,99,255,.1)}.info-features i{font-size:40px;margin-bottom:10px}.info-features .info-ibox{font-size:25px;margin-bottom:10px;text-align:center;display:inline-block;line-height:50px;width:50px;height:50px;border-radius:4px}.info-features .infobox_title{font-size:16px;margin-bottom:10px}.info-module{margin-bottom:40px;padding:40px 15px;border-radius:10px;box-shadow:0 0 18px 0 rgba(12,99,255,.1);-webkit-box-shadow:0 0 18px 0 rgba(12,99,255,.1)}.info-module i{font-size:60px;display:inline-block;margin-bottom:15px}.info-module .infobox_title{font-size:16px;margin-bottom:10px}.log-screen{background-size:cover;background-position:center}.log-wrapper{margin:0;z-index:2;height:100vh;min-height:650px;display:-webkit-flex;display:-moz-flex;display:-ms-flexbox;display:flex;align-items:center;-webkit-align-items:center;justify-content:center;-webkit-justify-content:center;flex-direction:column;-webkit-flex-direction:column}.log-wrapper label{color:#fff}.log-wrapper .form-control{background:#fff;border:1px solid #fff;border-radius:2px}.btn.btn-dark{background:rgba(0,0,0,.03);border:1px solid rgba(255,255,255,.05);padding:12px 25px;font-size:16px;color:#fff;box-shadow:0 5px 12px 1px rgba(0,0,0,.2);-webkit-box-shadow:0 5px 12px 1px rgba(0,0,0,.2);border-radius:4px}.log-wrapper p{margin-top:16px;color:rgba(255,255,255,.7)}.log-wrapper p>a{color:rgba(255,255,255,1)}.log-wrapper .log-title{color:#fff;margin-bottom:20px}.tg-cartproductdetail{padding:0 0 20px;margin-bottom:30px;box-shadow:0 0 20px 0 rgba(62,28,131,.1);border-radius:6px;background:#fff}.table>thead>tr>th{border-bottom:0 solid #eef3f7}.table>tbody>tr>td,.table>tbody>tr>th,.table>tfoot>tr>td,.table>tfoot>tr>th,.table>thead>tr>td,.table>thead>tr>th{padding:15px 12px;line-height:1.42857143;vertical-align:top;border-top:1px solid #eef3f7}.tg-cartproductdetail table tr td,.tg-cartproductdetail table tr th,ul.countdown li{vertical-align:middle}.tg-cartproductdetail table tr td:first-child,.tg-cartproductdetail table tr th:first-child{width:60%}.tg-tourname{width:100%;float:left;display:flex;padding:0;justify-content:flex-start;align-items:center;align-content:center}.tg-tourname figure{float:left;margin:0 12px 0 0}.tg-tourname .tg-populartourcontent{padding:0;width:auto;float:none;overflow:hidden}.tg-tourname .tg-populartourtitle{padding:0 0 8px}.tg-populartourtitle h3{margin:0;font-size:16px;font-weight:600;line-height:20px}.tg-cartproductdetail .form-group{margin-bottom:0}.tg-cartproductdetail .form-control{height:42px;margin-bottom:0}.form-box{background:#fff;display:block;border-radius:2px;border:1px solid #f0f3f7;padding:20px;margin-bottom:30px}.form-box .c-icon{font-size:35px;float:left}.form-box .c-detail{margin-left:45px;display:table;position:relative;margin-top:-2px}.form-box .c-detail p{margin:0}ul.gallery-list{display:table;width:100%}ul.gallery-list li{width:33.333333%;display:inline-block;padding:0 5px;margin:0}.listing-list-img,ul.gallery-list li a img{border-radius:4px}.soon-wrapper{background:url(../img/coming-soon-2.png) center;background-size:cover;height:100vh;min-height:650px}.coming-soon .wow-form,.guide-container,ul.coming-social li a,ul.countdown li{background:#fff;border-radius:4px}.soon-wrapper .hero-img{position:absolute;left:0;top:0}.soon-wrapper .content{position:relative;z-index:10}ul.countdown{margin:0 0 20px;padding:0}ul.countdown li{list-style:none;width:100%;padding:40px 0 30px;display:table;color:#334e6f;box-shadow:0 0 20px 0 rgba(62,28,131,.05);-webkit-box-shadow:0 0 20px 0 rgba(62,28,131,.05);-moz-box-shadow:0 0 20px 0 rgba(62,28,131,.05)}ul.countdown li p{margin-bottom:0}ul.countdown li>span{font-size:45px;font-weight:600}.coming-soon .wow-form{box-shadow:0 0 20px 0 rgba(62,28,131,.05);-webkit-box-shadow:0 0 20px 0 rgba(62,28,131,.05);-moz-box-shadow:0 0 20px 0 rgba(62,28,131,.05)}.coming-soon .wow-form input{background-color:#fff;border-radius:4px}ul.coming-social li{display:inline-block;padding:0 12px 0 0}ul.coming-social li a{width:42px;height:42px;line-height:42px;display:inline-block}.soon-wrapper img{max-width:200px;margin-bottom:10px}.cl-yellow{color:#ffcc74}.success-wrap ul{padding:0;margin:0;text-align:left}.success-wrap ul li{padding:12px 0;font-size:16px;list-style:none}.success-wrap ul li:first-child{border-bottom:1px solid #f0f1f3}.ab-detail h2{font-weight:600;font-size:50px;margin-bottom:20px}.ab-detail p{font-size:16px;line-height:1.9;font-family:'Josefin Slab',serif}.guide-container{padding:25px;margin-bottom:30px;box-shadow:0 0 18px 0 rgba(12,99,255,.1);-webkit-box-shadow:0 0 18px 0 rgba(12,99,255,.1);-moz-box-shadow:0 0 18px 0 rgba(12,99,255,.1)}.guide-container-box{display:table;width:100%;padding:5px 0 15px;border-bottom:1px solid #f4f5f7}.fguide-thumb{background:#f4f5f7;height:140px;width:140px;padding:10px;border-radius:50%;float:left}.guide-container-links{padding:15px 0 0;display:table;width:100%}.guide-container-links a{width:46%;margin:2%;display:inline-block}.fguide-detail{display:table;margin-left:160px}.payment-card{border-radius:4px;padding:18px 15px 15px;border:1px solid #eaeff5;margin-bottom:20px}header.payment-card-header{display:inline-block;width:100%}.payment-card-title.flexbox{float:left}header.payment-card-header .pull-right img{max-width:100px}.payment-card .collapse{padding:20px 15px 10px}.payment-card-title.flexbox h4{margin:0;font-size:16px}.include-features{margin-top:15px}.features-tag{background-color:#eaedf3;border-radius:0 2px 2px 0;display:inline-block;font-size:11px;font-weight:600;line-height:1.2727272727;margin:2px 15px 5px 0;padding:3px 7px;position:relative}.features-tag:before{border-top:10px solid transparent;border-left:9px solid #eaedf3;border-bottom:10px solid transparent;height:0;position:absolute;top:0;right:-8px;width:0}.features-tag:after{background-color:#fff;border-radius:50%;height:4px;position:absolute;top:8px;right:-2px;width:4px}.features-tag:after,.features-tag:before{content:""}.payment-card .custom-checkbox input[type=checkbox]:checked+label:after{top:5px}.flex{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}.dashboard-navigation .tab .nav-tabs{border:none}.dashboard-navigation .nav-tabs>li{float:none;width:100%;margin-bottom:0}.dashboard-navigation button.btn.theme-btn{margin-top:9px}.dashboard-navigation .nav-tabs li a{padding:20px 40px;border:none;border-bottom:1px dashed #dee2ea;background:#fff;color:#334e6f;opacity:.7;border-radius:0;margin-right:0;font-weight:500;transition:all .3s ease-in 0s}.dashboard-navigation .nav-tabs li a:hover{background:#fff;color:#ff4e00;opacity:1}.dashboard-navigation .nav-tabs li a i{display:inline-block;text-align:center;margin-right:10px}.dashboard-navigation .nav-tabs li:last-child a{border-bottom:none}.dashboard-navigation .tab .nav-tabs li:last-child a:focus,.dashboard-navigation .tab .nav-tabs li:last-child a:hover{border-bottom:none;background:0 0}.dashboard-navigation .nav-tabs li.active a,.dashboard-navigation .nav-tabs li.active a:focus,.dashboard-navigation .nav-tabs li.active a:hover{color:#ff4e00;opacity:1;background:0 0;border-bottom:1px dashed #dee2ea}.dashboard-navigation .tab .tab-content{padding:20px;line-height:22px;box-shadow:0 1px 0 grey}.dashboard-navigation .tab .tab-content h3{margin-top:0}@media only screen and (max-width:767px){.dashboard-navigation .nav-tabs li{width:100%;margin-bottom:10px}.dashboard-navigation .nav-tabs li a{padding:15px}.dashboard-navigation .nav-tabs li.active a,.dashboard-navigation .nav-tabs li.active a:focus,.dashboard-navigation .nav-tabs li.active a:hover{padding:15px;margin-top:0}}.mapzoom-in,.mapzoom-out{position:fixed;z-index:100;top:50%;cursor:pointer;width:40px;height:40px;border-radius:100%;color:#fff;line-height:40px;margin-top:-20px;background:#313542;text-align:center;box-shadow:0 0 0 5px rgba(255,255,255,.4);-webkit-transform:translate3d(0,0,0)}#singleMap .mapzoom-in,#singleMap .mapzoom-out,.fw-map .mapzoom-in,.fw-map .mapzoom-out,.home-map .mapzoom-in,.home-map .mapzoom-out{position:absolute;right:20px}.mapzoom-in{margin-top:-80px}.mapzoom-in:before{content:"\f067"!important}.mapzoom-in:before,.mapzoom-out:before{font-family:FontAwesome;font-style:normal;font-weight:400;text-decoration:inherit;content:"\f068"}.dashboard{padding-top:70px!important}.dashboard .form-control{background:#eceff5;border:1px solid #eceff5}.dashboard-bg{background:#fff;box-shadow:0 2px 6px rgba(0,0,0,.05);-webkit-box-shadow:0 2px 6px rgba(0,0,0,.05);padding:0}#dashboard-menu li>a{padding:12px 15px;color:#5f6e82;transition:all ease .4s;border-bottom:1px dashed #e2e9f3}#dashboard-menu li>a i{margin-right:10px}#dashboard-menu li.active>a{color:#ff4e00}#dashboard-menu li>a:focus,#dashboard-menu li>a:hover{background:#fff;color:#ff4e00}#dashboard-menu li ul{background:#eef2f7}#dashboard-menu li ul li a{padding-left:25px;font-size:13px}.dashboard-title{margin:0;padding:5px 0;font-size:22px;font-weight:600}div#profile-div{overflow:hidden;max-width:302px}label{font-weight:500}.arrow{float:right;line-height:20px}.fa.arrow:before{content:"\f104"}.active>a>.fa.arrow:before{content:"\f107"}@media (min-width:768px){.sidebar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important}}.navbar-nav>li.dash-link>a{font-weight:600!important}.navbar-nav>li.dash-link>a img{margin-right:12px}.profile-wrapper{padding:40px 0;text-align:center}.profile-wrapper-thumb{max-width:120px;margin:0 auto;display:table;padding:8px;position:relative;background:#eef2f7;border-radius:50%}.profile-wrapper h4{font-size:17px;font-weight:500}span.dashboard-user-status{position:absolute;right:0;top:50%;width:15px;height:15px;border-radius:50%;border:2px solid rgba(255,255,255,.5)}.bk-thumb,.dasboard-prop-listing,.info-container_booking{position:relative;float:left}.dasboard-prop-listing{margin-bottom:30px;background-color:#fff;width:100%;display:flex;flex-direction:row;flex-wrap:wrap;border:1px solid #e8ebf0;overflow:hidden;max-width:100%;min-height:255px}.blog_listing_image{float:left;display:inline}.book_image{margin:0 15px 0 0;width:320px}.dasboard-prop-listing .prop-info{flex-wrap:wrap;display:block;width:50%;margin-bottom:20px}.listing_title_book{padding-left:20px;margin-bottom:10px;margin-top:13px;font-weight:600;font-size:18px}.user_dashboard_listed{padding-left:20px;margin-bottom:7px;line-height:1.6em;display:block;color:#7d8596;font-size:14px;font-weight:500}.dasboard-prop-listing .user_dashboard_listed{width:100%}.info-container_booking{background-color:#f4f6f9;width:100%}.booking-pending{background-color:#e0e5ec;margin-top:0;padding:13px 15px;font-size:14px;font-weight:600;border-radius:3px}.booking-detail,.booking-success{padding:13px 15px;font-size:14px;border-radius:2px;font-weight:600}.booking-cancel,.cancel_own_booking,.delete_booking,.delete_invoice{background:#f11e40;color:#fff!important;cursor:pointer;margin-top:0;padding:13px 15px;font-size:14px;font-weight:600;border-radius:2px}.booking-success{background:#3eb74d;color:#fff!important;margin-top:0}.booking-detail{background:#b9cce8;color:#546a7d!important;cursor:pointer;float:left;margin:15px 5px}.info-container_booking a,.info-container_booking span{float:left;display:inline-block;margin:15px 5px}.info-container_booking span:first-child{margin-left:15px}table.table-striped tbody tr:nth-of-type(odd){background-color:#fcfcfc}table.table tr td,table.table.table-lg tr th{border-color:#eaeff5;padding:15px;vertical-align:middle;font-size:13.5px}.bk-thumb{width:36px;height:36px;background:#fff;border-radius:50%;text-align:center;margin-right:10px}.bk-thumb .bk-status{position:absolute;right:-2px;top:4px}.bk-thumb .bk-status.approve>i{color:#00c94a}.bk-thumb .bk-status.pending>i{color:#ffaa26}.bk-thumb .bk-status.cancel>i{color:#f54242}table.table td img{margin-right:0;float:left}table.table .custom-checkbox{position:relative;top:-10px}table.table td>a>span{display:block;font-weight:600;font-size:12px}table.table td .tbl-action{width:30px;height:30px;background:#d7dfea;text-align:center;line-height:30px;border-radius:50%;color:#6b7482;margin:4px}.pay-integration,.widget{background:#fff;border-radius:4px}table.table td .tbl-action.bg-danger{color:#fff}table.table span.seprate{font-weight:500;margin:0 5px}table.table b,table.table strong{font-weight:600}.pay-integration{line-height:1.375;padding:30px 20px;-webkit-box-shadow:0 0 20px 0 rgba(62,28,131,.1);box-shadow:0 0 20px 0 rgba(62,28,131,.1);font-size:16px;overflow:hidden;position:relative;margin-bottom:30px}.pay-inte-thumb{display:table;margin:20px auto 40px}.pay-inte-thumb img{max-height:80px}.pay-integration h5{font-size:16px;font-weight:600}.pay-integration p{font-size:13px}.pay-integration .btn{margin-top:15px}.widget{margin-bottom:25px;padding:25px 0;box-shadow:0 0 20px 0 rgba(62,28,131,.1);-webkit-box-shadow:0 0 20px 0 rgba(62,28,131,.1)}.widget .widget-detail{width:100%;display:inline-block;border-left:1px solid #eceef3;padding-left:15px}.widget.simple-widget i.icon{font-size:40px;line-height:47px;text-align:center;display:block}.widget .widget-detail h3{margin:0;line-height:1;font-size:27px}.widget-line{margin:10px 10px 0;background:#e6e9ef}.widget-line .widget-horigental-line{height:3px;position:relative;display:block;border-radius:10px}.btn-circle-40,.ground-avatar{width:40px;height:40px;line-height:40px;text-align:center}.ground{display:-ms-flexbox;display:flex;-ms-flex-align:start;align-items:flex-start}.btn-bs-file input[type=file],.ground-avatar,.message-avatar img{display:inline-block}.ground-list{-ms-touch-action:auto;touch-action:auto;overflow:hidden!important;-ms-overflow-style:none}.ground-single-list{-webkit-box-align:center;align-items:center;padding:16px 10px;border-bottom:1px solid #eaeff5}.ground>*{margin:0 6px}.ground-single-list a{position:relative}.ground-avatar{position:relative;border-radius:100%;background-color:#f5f6f7;color:#677897}.ground-content{-ms-flex:1;flex:1}.btn-circle-40{border-radius:50%}.ground-content h6{margin-bottom:0}label.btn-bs-file.btn{width:100%;background:#fbfdff;border:1px solid #e8eef1}.inbox-message ul{padding:0;margin:0}.inbox-message ul li{list-style:none;position:relative;padding:15px 20px;border-bottom:1px solid #e8eef1}.inbox-message ul li:focus,.inbox-message ul li:hover{background:#eff6f9}.inbox-message .message-avatar{position:absolute;left:30px;top:50%;transform:translateY(-50%)}#msform,#progressbar li{position:relative}.message-avatar img{width:54px;height:54px;border-radius:50%}.inbox-message .message-body{margin-left:85px;font-size:15px;color:#62748F}.message-body-heading h5{font-weight:600;display:inline-block;color:#62748F;margin:0 0 7px;padding:0}.message-body h5 span{border-radius:50px;line-height:14px;font-size:12px;color:#fff;font-style:normal;padding:4px 10px;margin-left:5px;margin-top:-5px}.message-body h5 span.unread{background:#e61b55}.message-body h5 span.important{background:#dd2027}.message-body h5 span.pending{background:#2196f3}.message-body-heading span{float:right;color:#62748F;font-size:14px}.messages-inbox .message-body p{margin:0;padding:0;line-height:27px;font-size:15px}#msform fieldset{border:0;box-sizing:border-box}#msform fieldset:not(:first-of-type){display:none}#msform .action-button{width:100px;background:#27AE60;font-weight:700;color:#fff;border:0;border-radius:1px;cursor:pointer;padding:10px 5px;margin:10px 5px}#msform .action-button:focus,#msform .action-button:hover{box-shadow:0 0 0 2px #fff,0 0 0 3px #27AE60}.fs-title{font-size:15px;text-align:center;margin-bottom:10px}.fs-subtitle{font-weight:400;font-size:13px;text-align:center;margin-bottom:20px;margin-top:0}#progressbar{margin-bottom:30px;overflow:hidden;counter-reset:step;text-align:center}#progressbar li{list-style-type:none;font-size:11px;width:33.33%;float:left}#progressbar li:before{content:counter(step);counter-increment:step;width:20px;line-height:20px;display:block;font-size:10px;color:#566373;background:#e0e5ec;border-radius:3px;margin:0 auto 5px;font-weight:600}#progressbar li:after{content:'';width:100%;height:2px;background:#fff;position:absolute;left:-50%;top:9px;z-index:-1}#progressbar li:first-child:after{content:none}#progressbar li.active:after,#progressbar li.active:before{background:#27AE60;color:#fff}.custom-file{position:relative;display:inline-block;width:100%;height:50px;margin-bottom:0}.custom-file-input{min-width:14rem;max-width:100%;height:calc(2.25rem + 2px);margin:0;opacity:0}[role=button],a,area,button,input:not([type=range]),label,select,summary,textarea{-ms-touch-action:manipulation;touch-action:manipulation}.cf-input{position:relative;height:50px;margin-bottom:10px}.custom-file-control,.custom-file-control:before{position:absolute;height:50px;line-height:1.5;color:#495057}.custom-file-control{top:0;right:0;left:0;z-index:5;padding:1.375rem .75rem;pointer-events:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:#fff;border:1px solid #ced4da;border-radius:.25rem}.custom-file-control:before{top:-1px;right:-1px;bottom:-1px;z-index:6;display:block;padding:1.375rem 1.75rem;background-color:#e9ecef;border:1px solid #ced4da;border-radius:0 .25rem .25rem 0;content:"Browse"}.custom-file-control:after{content:"Choose Logo..."}input[type=filei],input[type=hiddeni],input[type=imagei]{-webkit-appearance:initial;background-color:initial;cursor:default;padding:initial;border:initial}ul.add-amenities{margin:0;padding:0;display:table}ul.add-amenities li{margin-bottom:5px;list-style:none;width:33.3333%;display:inline-block}p#invoice-info{text-align:right}ul#styleOptions{text-align:center}button.w3-button.w3-teal.w3-xlarge.w3-right{background:#fff;top:250px;border-radius:50%;font-size:16px;position:fixed;bottom:20%;right:0;z-index:+999;border:none;padding:0;width:35px;height:35px;line-height:35px}.w3-animate-right{position:relative;animation:animateright .4s}@keyframes animateright{from{right:-300px;opacity:0}to{right:0;opacity:1}}button.w3-bar-item.w3-button.w3-large{border:none;width:100%;padding:10px;font-size:16px;color:#fff;text-align:left}ul#styleOptions{margin:20px 0;padding:0}.title-logo{padding:20px 12px}.title-logo h4{font-size:17px;margin:5px 0}ul#styleOptions li{list-style:none;display:inline-block;margin:5px 3px}a.cl-box{width:30px;height:30px;border-radius:5px;display:block;margin:0 auto}.w3-sidebar .cl-red{background:#ee1c25}.w3-sidebar .cl-green{background:#10aa08}.w3-sidebar .cl-blue{background:#06f}.w3-sidebar .cl-default{background:#f4511e}.w3-sidebar .cl-pink{background:#ff3a72}.w3-sidebar .cl-purple{background:#6356fd}.w3-sidebar{width:270px;background-color:#fff;position:fixed!important;top:50%;z-index:+2000;overflow:auto;-webkit-box-shadow:0 2px 10px 0 #d8dde6;box-shadow:0 2px 10px 0 #d8dde6}.w3-bar-item .ti-close{float:right;text-align:right;display:table;background:rgba(255,255,255,.2);padding:10px;border-radius:50%;font-size:12px}.user-box{padding:50px 0}.profile-img{padding:5px;border:1px solid #e8edef;width:120px;border-radius:50%;display:table;margin:0 auto}.profile-img img{max-width:100px;margin:5px;border-radius:50%}.profile-text{text-align:center;color:#74839e}.profile-text h4{margin:10px 0}.profile-text a{width:35px;height:35px;margin:5px;display:inline-block;line-height:39px;border-radius:50px}.user-box ul.nav.nav-tabs{background:#fff;border:none;margin:15px 0}.user-box ul.nav.nav-tabs li{width:33.3333%}.user-box ul.nav.nav-tabs li a{border:none;border-radius:0;text-align:center;margin-right:0}.notify{position:relative;top:-22px;right:-9px}.notify .heartbit{position:absolute;top:-20px;right:-4px;height:25px;width:25px;z-index:10;border:5px solid #1cc100;border-radius:70px;-moz-animation:heartbit 1s ease-out;-moz-animation-iteration-count:infinite;-o-animation:heartbit 1s ease-out;-o-animation-iteration-count:infinite;-webkit-animation:heartbit 1s ease-out;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}.notify .point{width:6px;height:6px;border-radius:30px;background-color:#1cc100;position:absolute;right:6px;top:-10px}@-webkit-keyframes heartbit{0%{-webkit-transform:scale(0);opacity:0}25%{-webkit-transform:scale(.1);opacity:.1}50%{-webkit-transform:scale(.5);opacity:.3}75%{-webkit-transform:scale(.8);opacity:.5}to{-webkit-transform:scale(1);opacity:0}}
    </style>
</head>

<body>

    <!-- ======================= Start Navigation ===================== -->
    <nav class="navbar navbar-default navbar-mobile navbar-fixed light bootsnav">
        <div class="container">

            <!-- Start Logo Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index-2.html">
                    <img src="assets/img/logo.png" class="logo logo-display" alt="">
                    <img src="assets/img/logo.png" class="logo logo-scrolled" alt="">
                </a>

            </div>
            <!-- End Logo Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                        <ul class="dropdown-menu animated fadeOutUp">
                            <li><a href="index-2.html">Home 1</a></li>
                            <li><a href="home-2.html">Home 2</a></li>
                            <li><a href="home-3.html">Home 3</a></li>
                            <li><a href="home-4.html">Home 4</a></li>
                            <li><a href="home-5.html">Home 5</a></li>
                        </ul>
                    </li>

                    <li class="dropdown megamenu-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Brows</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Destinations</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="destination-grid.html">Destination Grid</a></li>
                                                <li><a href="destination-list.html">Destination List</a></li>
                                                <li><a href="destination-grid-sidebar.html">Destination Grid Sidebar</a></li>
                                                <li><a href="destination-list-sidebar.html">Destination List Sidebar</a></li>
                                                <li><a href="destination-detail.html">Destination Detail</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Tours</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="tour-grid.html">Tour Grid</a></li>
                                                <li><a href="tour-list.html">Tour List</a></li>
                                                <li><a href="tour-grid-sidebar.html">Tour Grid Sidebar</a></li>
                                                <li><a href="tour-list-sidebar.html">tour List Sidebar</a></li>
                                                <li><a href="tour-detail.html">Tour Detail</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Hotels</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="hotel-grid.html">Hotel Grid</a></li>
                                                <li><a href="hotel-list.html">Hotel List</a></li>
                                                <li><a href="hotel-grid-sidebar.html">Hotel Grid Sidebar</a></li>
                                                <li><a href="hotel-list-sidebar.html">Hotel List Sidebar</a></li>
                                                <li><a href="hotel-detail.html">Hotel Detail</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Restaurants</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="restaurant-grid.html">Restaurant Grid</a></li>
                                                <li><a href="restaurant-list.html">Restaurant List</a></li>
                                                <li><a href="restaurant-grid-sidebar.html">Restaurant Grid Sidebar</a></li>
                                                <li><a href="restaurant-list-sidebar.html">Restaurant List Sidebar</a></li>
                                                <li><a href="restaurant-detail.html">Restaurant Detail</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                </div><!-- end row -->
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="hire-guider.html">Find Guide</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Extra</a>
                        <ul class="dropdown-menu animated fadeOutUp">
                            <li><a href="cart.html">Add To Cart</a></li>
                            <li><a href="payment-methode.html">Paayment Methode</a></li>
                            <li><a href="success-page.html">Success Page</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li class="dropdown"><a href="#">View More</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="faqs.html">FAQs</a></li>
                                    <li><a href="login.html">LogIn</a></li>
                                    <li><a href="signup.html">SignUp</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="icons.html">icons</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="dashboard.html">Dashboard</a>
                    </li>

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown dash-link"><a href="#" class="dropdown-toggle"><img src="assets/img/user-3.jpg" class="img-responsive avatar" alt="" />Hi, Daniel</a>
                        <ul class="dropdown-menu left-nav">
                            <li><a href="dashboard.html">Dashboard</a></li>
                            <li><a href="http://themezhub.com/">My Profile</a></li>
                            <li><a href="login.html">Log Out</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- ======================= End Navigation ===================== -->


    <!-- ======================= Start Invoice ===================== -->
    <section class="dashboard gray-bg padd-0 mrg-top-50">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-2 col-md-2 col-sm-3 dashboard-bg">
                    <!-- /. NAV TOP  -->
                    <nav class="navbar navbar-side">
                        <!-- Start Logo Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dashboard-menu">
                                <i class="fa fa-bars"></i>
                            </button>

                        </div>
                        <div class="collapse sidebar-collapse" id="dashboard-menu">
                            <div class="profile-wrapper">
                                <div class="profile-wrapper-thumb">
                                    <img src="assets/img/user-3.jpg" class="img-responsive img-circle" alt="" />
                                    <span class="dashboard-user-status bg-success"></span>
                                </div>
                                <h4>Duke Daniel</h4>
                            </div>
                            <ul class="nav" id="main-menu">

                                <li>
                                    <a href="dashboard.html"><i class="fa fa-dashboard" aria-hidden="true"></i>Dashboard</a>
                                </li>

                                <li>
                                    <a href="messages.html"><i class="ti-email" aria-hidden="true"></i>Messages</a>
                                </li>

                                <li>
                                    <a href="javascript:void(0)"><i class="fa fa-clone" aria-hidden="true"></i>Manage Listing <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">

                                        <li>
                                            <a href="manage-hotels.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Manage Hotels</a>
                                        </li>
                                        <li>
                                            <a href="manage-tours.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Manage Tours</a>
                                        </li>
                                        <li>
                                            <a href="manage-destinations.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Manage Destinations</a>
                                        </li>
                                        <li>
                                            <a href="manage-restaurants.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Manage Restaurants</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:void(0)"><i class="ti-location-pin" aria-hidden="true"></i>Add Listings <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">

                                        <li>
                                            <a href="http://themezhub.com/"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Add Hotels</a>
                                        </li>
                                        <li>
                                            <a href="add-tours.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Add Tours</a>
                                        </li>
                                        <li>
                                            <a href="add-destinations.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Add Destinations</a>
                                        </li>
                                        <li>
                                            <a href="add-restaurants.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Add Restaurants</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="active">
                                    <a href="invoice.html"><i class="fa-print" aria-hidden="true"></i>Invoice</a>
                                </li>

                                <li>
                                    <a href="javascript:void(0)"><i class="ti-calendar" aria-hidden="true"></i>My Booking <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="booking-1.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Booking 1</a>
                                        </li>
                                        <li>
                                            <a href="booking-2.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Booking 2</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:void(0)"><i class="fa fa-cog" aria-hidden="true"></i>Settings <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="basic-settings.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Basic Settings</a>
                                        </li>
                                        <li>
                                            <a href="site-settings.html"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>Site Settings</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="my-profile.html"><i class="ti-user" aria-hidden="true"></i>My Profile</a>
                                </li>

                                <li>
                                    <a href="add-payment-methode.html"><i class="ti-credit-card" aria-hidden="true"></i>Add Payment Methode</a>
                                </li>

                                <li class="log-off">
                                    <a href="login.html"><i class="fa fa-power-off" aria-hidden="true"></i>Logout</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- /. NAV SIDE  -->
                </div>

                <div class="col-lg-10 col-md-10 col-sm-9 col-lg-push-2 col-md-push-2 col-sm-push-3">
                    <div class="row mrg-0 mrg-top-20">
                        <div class="tr-single-box">
                            <div class="tr-single-header">
                                <h3 class="dashboard-title">View Invoice</h3>
                            </div>
                            <div class="tr-single-body">

                                <div class="detail-wrapper padd-top-30 padd-bot-30">

                                    <div class="row text-center">
                                        <div class="col-md-12">
                                            <a href="javascript:window.print()" class="btn theme-btn">Print this invoice</a>
                                        </div>
                                    </div>

                                    <div class="row mrg-0">
                                        <div class="col-md-6">
                                            <div id="logo"><img src="assets/img/logo.png" class="img-responsive" alt=""></div>
                                        </div>

                                        <div class="col-md-6">
                                            <p id="invoice-info">
                                                <strong>Order:</strong> #7075872 <br>
                                                <strong>Issued:</strong> 17/10/2017 <br>
                                                Due 7 days from date of issue
                                            </p>
                                        </div>

                                    </div>

                                    <div class="row  mrg-0 detail-invoice">

                                        <div class="col-md-12">
                                            <h2>INVOICE</h2>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-lg-7 col-md-7 col-sm-7">

                                                    <h4>Supplier: </h4>
                                                    <h5>Glovia Ltd</h5>
                                                    <p>
                                                        info@glovia.com<br />

                                                        +91-587-936-5876<br />

                                                        780/77 , Lane Here, Chandigarh,
                                                        <br /> India
                                                    </p>

                                                </div>
                                                <div class="col-lg-5 col-md-5 col-sm-5">
                                                    <h4>Client Contact :</h4>
                                                    <h5>Saurav Singh</h5>
                                                    <p>
                                                        sauravmail87@gmail.com<br />

                                                        +91-587-936-5876<br />

                                                        780/77 , Gurudwara Chauk, Allahabad,
                                                        <br /> India
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="col-12 col-md-12">
                                            <strong>ITEM DESCRIPTION & DETAILS :</strong>
                                        </div>
                                        <hr>

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="invoice-table">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>S. No.</th>
                                                                <th>Project</th>
                                                                <th>Time</th>
                                                                <th>Team</th>
                                                                <th>Sub Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Front End Design</td>
                                                                <td>1 Month</td>
                                                                <td>5000 USD</td>
                                                                <td>5000 USD</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Software Development</td>
                                                                <td>2Month</td>
                                                                <td>5000 USD</td>
                                                                <td>10000 USD</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <hr>
                                                <div>
                                                    <h5>Total : 700 USD </h5>
                                                </div>
                                                <hr>
                                                <div>
                                                    <h5>Taxes : 220 USD ( 20 % on Total Bill ) </h5>
                                                </div>
                                                <hr>
                                                <div>
                                                    <h4>Bill Amount : 920 USD </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ======================= End  Invoice===================== -->

    <!-- ============== Before Footer ====================== -->
    <section class="before-footer bt-1 bb-1">
        <div class="container-fluid padd-0 full-width">

            <div class=" col-md-2 col-sm-2 br-1 mbb-1">
                <div class="data-flex">
                    <h4>Contact Us!</h4>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 br-1 mbb-1">
                <div class="data-flex text-center">
                    53 Boulevard Victor Hugo 44200 Nantes, France
                </div>
            </div>

            <div class="col-md-3 col-sm-3 br-1 mbb-1">
                <div class="data-flex text-center">
                    <span class="d-block mrg-bot-0">06 52 52 20 30</span>
                    <a href="#" class="theme-cl"><strong>hello@gmail.com</strong></a>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 padd-0">
                <div class="data-flex padd-0">
                    <ul class="social-share">
                        <li><a href="#"><i class="fa fa-facebook theme-cl"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus theme-cl"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter theme-cl"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin theme-cl"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- =================== Before Footer ====================== -->

    <!-- ================= footer start ========================= -->
    <footer class="footer dark-bg">
        <div class="container">

            <!-- Row Start -->
            <div class="row">

                <div class="col-md-8 col-sm-8">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <h4>Featured Destinations</h4>
                            <ul>
                                <li><a href="destination-grid.html">Destination Grid</a></li>
                                <li><a href="destination-list.html">Destination List</a></li>
                                <li><a href="destination-grid-sidebar.html">Destination Grid Sidebar</a></li>
                                <li><a href="destination-list-sidebar.html">Destination List Sidebar</a></li>
                                <li><a href="destination-detail.html">Destination Detail</a></li>
                                <li><a href="restaurant-grid.html">Restaurant Grid</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <h4>Featured Tours</h4>
                            <ul>
                                <li><a href="tour-grid.html">Tour Grid</a></li>
                                <li><a href="tour-list.html">Tour List</a></li>
                                <li><a href="tour-grid-sidebar.html">Tour Grid Sidebar</a></li>
                                <li><a href="tour-list-sidebar.html">tour List Sidebar</a></li>
                                <li><a href="tour-detail.html">Tour Detail</a></li>
                                <li><a href="http://themezhub.com/">Restaurant Grid</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <h4>Featured Hotels</h4>
                            <ul>
                                <li><a href="hotel-grid.html">Hotel Grid</a></li>
                                <li><a href="hotel-list.html">Hotel List</a></li>
                                <li><a href="hotel-grid-sidebar.html">Hotel Grid Sidebar</a></li>
                                <li><a href="hotel-list-sidebar.html">Hotel List Sidebar</a></li>
                                <li><a href="hotel-detail.html">Hotel Detail</a></li>
                                <li><a href="restaurant-detail.html">Restaurant Detail</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <h4>Subscribe Now</h4>
                    <!-- Newsletter -->
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter Email">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default"><i class="fa fa-location-arrow font-20"></i></button>
                        </span>
                    </div>

                    <!-- Social Box -->
                    <div class="f-social-box">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook facebook-cl"></i></a></li>
                            <li><a href="#"><i class="fa fa-google google-plus-cl"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter twitter-cl"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest pinterest-cl"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram instagram-cl"></i></a></li>
                        </ul>
                    </div>

                    <!-- App Links -->
                    <div class="f-app-box">
                        <ul>
                            <li><a href="#"><i class="fa fa-apple"></i>App Store</a></li>
                            <li><a href="#"><i class="fa fa-android"></i>Play Store</a></li>
                        </ul>
                    </div>

                </div>

            </div>

            <!-- Row Start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright text-center">
                        <p><a target="_balnk" href="https://www.templatespoint.net">Templates Point</a></p>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <!-- Switcher -->
    <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin theme-cl fa fa-cog" aria-hidden="true"></i></button>
    <div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
        <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large theme-bg">Close &times;</button>
        <ul id="styleOptions" title="switch styling">
            <li>
                <a href="javascript: void(0)" class="cl-box cl-default" data-theme="skins/default"></a>
            </li>
            <li>
                <a href="javascript: void(0)" class="cl-box cl-red" data-theme="skins/red"></a>
            </li>
            <li>
                <a href="javascript: void(0)" class="cl-box cl-green" data-theme="skins/green"></a>
            </li>
            <li>
                <a href="javascript: void(0)" class="cl-box cl-blue" data-theme="skins/blue"></a>
            </li>
            <li>
                <a href="javascript: void(0)" class="cl-box cl-pink" data-theme="skins/pink"></a>
            </li>
            <li>
                <a href="javascript: void(0)" class="cl-box cl-purple" data-theme="skins/purple"></a>
            </li>
        </ul>
    </div>
    <!-- /Switcher -->


    <!-- =================== START JAVASCRIPT ================== -->
    <script src="assets/plugins/js/jquery.min.js"></script>
    <script src="assets/plugins/js/bootstrap.min.js"></script>
    <script src="assets/plugins/js/viewportchecker.js"></script>
    <script src="assets/plugins/js/bootsnav.js"></script>
    <script src="assets/plugins/js/slick.min.js"></script>
    <script src="assets/plugins/js/jquery.nice-select.min.js"></script>
    <script src="assets/plugins/js/jquery.fancybox.min.js"></script>
    <script src="assets/plugins/js/jquery.downCount.js"></script>
    <script src="assets/plugins/js/freshslider.1.0.0.js"></script>
    <script src="assets/plugins/js/moment.min.js"></script>
    <script src="assets/plugins/js/daterangepicker.js"></script>
    <script src="assets/plugins/js/wysihtml5-0.3.0.js"></script>
    <script src="assets/plugins/js/bootstrap-wysihtml5.js"></script>

    <!-- Dashboard Js -->
    <script src="assets/plugins/js/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/js/jquery.metisMenu.js"></script>
    <script src="assets/plugins/js/jquery.easing.min.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/custom.js"></script>

    <script src="assets/js/jQuery.style.switcher.js"></script>
    <script>
        function openRightMenu() {
            document.getElementById("rightMenu").style.display = "block";
        }

        function closeRightMenu() {
            document.getElementById("rightMenu").style.display = "none";
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#styleOptions').styleSwitcher();
        });
    </script>

</body>

</html>