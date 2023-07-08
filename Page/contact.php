<?php
/**
 * THIS IS CONTACT PAGE
 */

get_header();
?>

    <!-- Font Awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .newbg {
        background-size: cover;
        /* 宽度拉满，保持比例 */
        background-repeat: no-repeat;
        /* 不重复 */
        background-position: center center;
        /* 图片居中对齐 */
    }


.section-head.left.wt-small-separator-outer h2 {
    margin-bottom: 35px;
}
.m-b30 {
    margin-bottom: 30px;
}
h2 {
    font-size: 45px;
    font-weight: 600;
}
h1, h2, h3, h4, h5, h6 {
    font-family: "Oswald", sans-serif;
    line-height: 1.2;
    color: #0b2f44;
}
.p-b80 {
    padding-bottom: 80px;
}
.overlay-wraper {
  position: relative;
}

.wt-bnr-inr {
  height: 510px;
  background-size: cover;
  background-position: center center;
  display: table;
  width: 100%;
  position: relative;
}
.wt-bnr-inr:after {
  content: "";
  top: 0px;
  left: 0px;
  right: 0px;
  bottom: 0px;
  position: absolute;
  background: linear-gradient(
    to bottom,
    #1e8fd0 0%,
    rgba(30, 143, 208, 0) 100%
  );
}
.overlay-wraper .overlay-main {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
}
.opacity-08 {
  opacity: 0.8;
}
.overlay-wraper > .container {
  position: relative;
  z-index: 1;
}
.wt-bnr-inr .container {
  display: table;
  height: 100%;
}
.site-bg-sky {
  background-color: #1e8fd0;
}
.wt-bnr-inr-entry {
  display: table-cell;
  vertical-align: bottom;
  text-align: left;
  padding-bottom: 10px;
}
.wt-bnr-inr-entry .banner-title-outer {
  position: relative;
}
.wt-bnr-inr-entry .banner-title-outer .banner-title-name {
  display: inline-block;
  margin-bottom: 50px;
}

.wt-bnr-inr-entry .banner-title-outer .wt-title {
  font-size: 66px;
  margin-bottom: 0px;
  position: relative;
}
.wt-bnr-inr-entry .banner-title-outer .banner-title-name .wt-title {
  color: #fff;
}
.wt-breadcrumb {
  margin: 0;
  display: inline-block;
  list-style: none;
  position: relative;
}
.wt-breadcrumb:before {
  content: "";
  right: -15px;
  background-color: #f2faff;
  position: absolute;
  bottom: -11px;
  width: 6000px;
  height: 60px;
}
.wt-breadcrumb li {
  padding-right: 30px;
  position: relative;
  display: inline-block;
  font-size: 18px;
  font-family: "Rubik", sans-serif;
  font-weight: 600;
  color: #ff8a00;
  text-transform: uppercase;
}
.wt-breadcrumb li a {
  color: #0b2f44;
}
.wt-breadcrumb li:first-child::after {
  content: "//";
  position: absolute;
  right: 8px;
  top: 3px;
  color: #0b2f44;
  font-size: 12px;
  font-weight: 600;
}
.wt-breadcrumb li:last-child {
  color: #ff8a00;
  padding-right: 0px;
}

/* media quire for all bander  */

@media (max-width: 767px) {
  .wt-bnr-inr {
    height: 380px;
  }
  .wt-bnr-inr-entry .banner-title-outer .wt-title {
    font-size: 40px;
  }
}

.google-map {
  width: 100%;
  height: 460px;
}
.google-map iframe {
  width: 100%;
  border: 0px;
  filter: grayscale(100%);
}

.section-head.left.wt-small-separator-outer {
  text-align: left;
}
.section-head.left.wt-small-separator-outer h2 {
  margin-bottom: 35px;
}
.contact-one .contact-one-inner {
  margin: 0px;
}
.site-bg-sky-blue-light {
  background-color: #d6e9fa;
}
.contact-form-outer {
  padding: 40px 25px;
}

.form-control {
  height: 50px;
  font-size: 13px;
  line-height: 20px;
  padding: 10px 12px;
  border-radius: 0px;
}
.cons-contact-form .form-control {
  padding: 10px 20px;
  background-color: #fff;
  border: 0px;
}
.cons-contact-form textarea.form-control {
  padding-top: 15px;
  height: 80px;
  margin-bottom: 40px;
  resize: none;
}
.site-button {
  outline: none;
  color: #fff;
  padding: 15px 30px;
  letter-spacing: 1px;
  position: relative;
  overflow: hidden;
  cursor: pointer;
  display: inline-table;
  background-color: #ff8a00;
  border: none;
  font-size: 15px;
  font-weight: 700;
  transition: 0.5s all ease;
}
.btn-half {
  cursor: pointer;
  background-color: #ff8a00;
  z-index: 0;
  display: inline-block;
  position: relative;
  overflow: visible;
}
.btn-half span {
  color: #fff;
  display: block;
  padding-left: 0%;
  padding-right: 35px;
  font-size: 18px;
  line-height: 24px;
  font-family: "Rubik", sans-serif;
  font-weight: 400;
  transform: scaleX(0.9);
  transform-origin: center left;
  transition: color 0.3s ease;
  position: relative;
  z-index: 1;
}
.btn-half em {
  position: absolute;
  height: 1px;
  background-color: #fff;
  width: 26px;
  right: 30px;
  top: 50%;
  transition: all 0.3s ease;
}
.btn-half:after {
  position: absolute;
  right: -6px;
  top: -6px;
  bottom: -6px;
  content: "";
  width: 20px;
  border: 2px solid #ff8a00;
  transition: 0.5s all ease;
}
.contact-one .contact-info {
  padding: 40px;
  position: relative;
  z-index: 1;
}
.bg-no-repeat {
  background-repeat: no-repeat;
}
.bg-bottom-left {
  background-position: bottom left;
}
.site-bg-dark {
  background-color: #0b2f44;
}
.section-head-small {
  font-size: 22px;
  border-left: 4px solid #ff8a00;
  padding-left: 20px;
}
.section-head-small.white .wt-title {
  color: #fff;
}
.contact-one .contact-info-section .c-info-column {
  padding: 20px 20px 20px 70px;
  color: #fff;
  position: relative;
  min-height: 75px;
}
.contact-one .contact-info-section .c-info-column .c-info-icon {
  position: absolute;
  font-size: 32px;
  line-height: 32px;
  left: 0px;
  top: 20px;
  color: #fff;
  width: 50px;
  height: 50px;
  text-align: center;
  z-index: 1;
}
.fa-map-marker:before {
  content: "\f041";
}
.contact-one .contact-info-section .c-info-column .c-info-icon:after {
  content: "";
  position: absolute;
  border: 1px solid #ff8a00;
  right: -5px;
  bottom: -5px;
  height: 50px;
  width: 50px;
  z-index: -2;
}
.contact-one .contact-info-section .c-info-column .c-info-icon span {
  width: 50px;
  height: 50px;
  position: absolute;
  z-index: -1;
  background-color: #0b2f44;
  top: 0px;
  left: 0px;
}
.contact-one .contact-info-section .c-info-column span {
  font-weight: 600;
  font-size: 18px;
  display: block;
  margin-bottom: 10px;
}
.contact-one .contact-info-section .c-info-column p {
  margin-bottom: 0px;
}
.contact-one .contact-info-section .c-info-column p {
  font-size: 14px;
}

.contact-one .contact-info-section .c-info-column .c-info-icon.custome-size {
  font-size: 44px;
}
.contact-one .contact-info-section .c-info-column .c-info-icon span {
  width: 50px;
  height: 50px;
  position: absolute;
  z-index: -1;
  background-color: #0b2f44;
  top: 0px;
  left: 0px;
}
.contact-one .contact-info-section .c-info-column p a {
  color: #fff;
}
.site-button:hover {
  color: #000;
}
.btn-half:hover:after {
  width: 40px;
}
.btn-half:hover em {
  width: 40px;
}

.form-control {
    display: block;
    width: 100%;
}
.bold{
    font-weight: bold;
}
</style>

<div class="newbg uk-light uk-cover-container uk-section uk-section-xlarge" style="background-image: url('<?php echo fw_get_opt('about_page_bg');?>');">
    <div class="uk-position-cover" style="background-color: rgba(30, 26, 65, 0.76);"></div>
    <div class="uk-container uk-position-relative">
        <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
            <div class="uk-width-1-1@m uk-text-center">
                <h1>CONTACT US</h1>
            </div>
        </div>
    </div>
</div>

<div class="uk-section p-t120 p-b120">   
                <div class="section-content">
                    <div class="uk-container">
                        <div class="gmap-outline mb-5">
                            <div class="google-map">
                                <div style="width: 100%">
                                    <iframe height="460" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.8534521658976!2d-118.2533646842856!3d34.073270780600225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c6fd9829c6f3%3A0x6ecd11bcf4b0c23a!2s1363%20Sunset%20Blvd%2C%20Los%20Angeles%2C%20CA%2090026%2C%20USA!5e0!3m2!1sen!2sin!4v1620815366832!5m2!1sen!2sin"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="contact-one uk-section">
                            <!-- TITLE START-->
                            <div class="section-head left wt-small-separator-outer">
                                <h2 class="wt-title m-b30 bold">Send Us a Message</h2>
                            </div>
                            <!-- TITLE END--> 
                            <!-- CONTACT FORM-->
                            <div class="contact-one-inner  site-bg-sky-blue-light">
                            <div class="row  uk-grid-large" uk-grid>

                                <div class="uk-width-2-3@s">
                                    <div class="contact-form-outer">
                                        <form class="cons-contact-form  uk-grid-small" uk-grid>
                                
                                            <div class="row" uk-grid>

                                                <div class="uk-width-1-2@s">
                                                    <div class="form-group mb-3">
                                                        <input name="username" type="text" required="" class="form-control uk-input" placeholder="Name">
                                                    </div>
                                                </div>
                                                
                                                <div class="uk-width-1-2@s uk-width-1-1">
                                                    <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control uk-input" required="" placeholder="Email">
                                                    </div>
                                                </div>
                                                
                                                <div class="uk-width-1-2@s uk-width-1-1">
                                                    <div class="form-group mb-3">
                                                        <input name="phone" type="text" class="form-control uk-input" required="" placeholder="Phone">
                                                    </div>
                                                </div>
                                                
                                                <div class="uk-width-1-2@s uk-width-1-1">
                                                    <div class="form-group mb-3">
                                                        <input name="subject" type="text" class="form-control uk-input" required="" placeholder="Subject">
                                                    </div>
                                                </div>
                                                
                                                <div class="uk-width-1-1">
                                                    <div class="form-group mb-3">
                                                    <textarea name="message" class="form-control uk-input" rows="3" placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="uk-width-1-1">
                                                    <button type="submit" class="btn-half site-button"><span>Submit Now</span><em></em></button>
                                                </div>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div> 

                                <div class="uk-width-1-3@s">
                                    <div class="contact-info  site-bg-dark bg-no-repeat bg-bottom-left" style="background-image: url(images/background/contact-bg.png);">
                                        <!-- TITLE START-->
                                        <div class="section-head-small white mb-4">
                                            <h3 class="wt-title">Let's get in touch</h3>
                                        </div>
                                        <!-- TITLE END-->  
                                        
                                        <div class="contact-info-section">  
                                                
                                                <div class="c-info-column">
                                                    <div class="c-info-icon fa fa-map-marker"><span></span></div>
                                                    <p>1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                                </div>  

                                                <div class="c-info-column">
                                                    <div class="c-info-icon fa fa-mobile-phone custome-size"><span></span></div>
                                                    
                                                    <p><a href="tel:+216-761-8331">+2 900 234 4241</a></p>
                                                    <p><a href="tel:+216-761-8331">+2 900 234 3219</a></p>
                                                </div>

                                                <div class="c-info-column">
                                                    <div class="c-info-icon fa fa-envelope-o"><span></span></div>
                                                    <p>infohelp@gmail.com</p>
                                                    <p>support12@gmail.com</p>
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

<?php
get_footer();
