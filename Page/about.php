<?php
/**
 * THIS IS CONPANY PAGE
 */

get_header();
?>
<style>
    .newbg {
        background-size: cover;
        /* 宽度拉满，保持比例 */
        background-repeat: no-repeat;
        /* 不重复 */
        background-position: center center;
        /* 图片居中对齐 */
    }
    .p-b80 {
    padding-bottom: 80px;
}
.MuiSvgIcon-root {
  fill: currentColor;
  width: 1em;
  height: 1em;
  display: inline-block;
  font-size: 1.5rem;
  transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
  flex-shrink: 0;
  user-select: none;
}
@media (min-width: 1020px) {
  section.serviceSection {
    height: 467px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  section.serviceSection div.serviceDivContainer {
    height: 100%;
    width: 80%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  section.serviceSection div.serviceDivContainer div.serviceDivLeft {
    width: 50%;
    height: 100%;
    -webkit-clip-path: polygon(0 0, 52% 0, 100% 100%, 0 100%);
    clip-path: polygon(0 0, 52% 0, 100% 100%, 0 100%);
  }
  section.serviceSection div.serviceDivContainer div.serviceDivRight {
    width: 50%;
    padding: 80px 22px;
  }
  section.serviceSection
    div.serviceDivContainer
    div.serviceDivRight
    span.serviceSmallHeading {
    margin-bottom: 0;
    line-height: 1rem;
    font-size: 0.6875rem;
    letter-spacing: 0.1rem;
  }
  section.serviceSection
    div.serviceDivContainer
    div.serviceDivRight
    h3.serviceH3 {
    font-size: 1.3rem;
    letter-spacing: 0.1rem;
    border-bottom: 1px solid grey;
    padding-bottom: 15px;
    margin-bottom: 17px;
    line-height: normal;
  }

  section.serviceSection
    div.serviceDivContainer
    div.serviceDivRight
    p.servicePara {
    margin-bottom: 20px;
    line-height: 1.5rem;
    letter-spacing: 0.025rem;
    font-size: 1rem;
  }
  section.serviceSection
    div.serviceDivContainer
    div.serviceDivRight
    a.bookNowAnchor {
    display: inline-flex;
    align-items: center;
    border-bottom: 0.25rem solid #ff8a00;
    padding-bottom: 0.3125rem;
    font-size: 1.125rem;
    color: inherit;
    text-transform: none;
    letter-spacing: 0.025rem;
    overflow: visible;
    white-space: normal;
    text-overflow: ellipsis;
    transition: color 0.15s ease-in-out;
    text-decoration: none;
    transition: 0.3s;
    position: relative;
    transition: 1s;
    cursor: pointer;
  }

  section.serviceSection
    div.serviceDivContainer
    div.serviceDivRight
    a.bookNowAnchor
    .arrowBookNow {
    color: #ff8a00;
    font-weight: 700;
    transition: 0.2s;
  }
  section.serviceSection
    div.serviceDivContainer
    div.serviceDivRight
    a.bookNowAnchor:after {
    content: "";
    border: 2px solid #ff8a00;
    position: absolute;
    width: 0;
    bottom: -4px;
    transition: 1s;
    background: #ff8a00;
  }
  section.invert {
    background-color: #f4f4f4;
  }
  section.invert div.serviceDivContainer {
    flex-direction: row-reverse;
  }
  section.invert div.serviceDivContainer div.serviceDivLeft {
    width: 50%;
    height: 100%;
    -webkit-clip-path: polygon(52% 0, 100% 0, 100% 100%, 0 100%);
    clip-path: polygon(52% 0, 100% 0, 100% 100%, 0 100%);
  }
}

@media (min-width: 760px) and (max-width: 1020px) {
  section.serviceSection,
  section.serviceSection div.serviceDivContainer {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  section.serviceSection,
  section.serviceSection div.serviceDivContainer {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  section.serviceSection div.serviceDivContainer {
    height: 900px;
    flex-direction: column;
  }
  section.serviceSection div.serviceDivContainer div.serviceDivLeft {
    width: 100%;
    height: 100%;
  }
  section.serviceSection div.serviceDivContainer div.serviceDivRight {
    width: 80%;
    height: 100%;
    padding: 80px 50px;
  }
  section.serviceSection
    div.serviceDivContainer
    div.serviceDivRight
    span.serviceSmallHeading {
    margin-bottom: 0;
    line-height: 1rem;
    font-size: 0.6875rem;
    letter-spacing: 0.1rem;
  }
  section.serviceSection
    div.serviceDivContainer
    div.serviceDivRight
    h3.serviceH3 {
    font-size: 1.3rem;
    letter-spacing: 0.1rem;
    border-bottom: 1px solid grey;
    padding-bottom: 15px;
    margin-bottom: 17px;
    line-height: normal;
  }
  section.serviceSection
    div.serviceDivContainer
    div.serviceDivRight
    p.servicePara {
    margin-bottom: 20px;
    line-height: 1.5rem;
    letter-spacing: 0.025rem;
    font-size: 1.1rem;
  }
  section.serviceSection
    div.serviceDivContainer
    div.serviceDivRight
    a.bookNowAnchor {
    display: inline-flex;
    align-items: center;
    border-bottom: 0.25rem solid #ff8a00;
    padding-bottom: 0.3125rem;
    font-size: 1.125rem;
    color: inherit;
    text-transform: none;
    letter-spacing: 0.025rem;
    overflow: visible;
    white-space: normal;
    text-overflow: ellipsis;
    transition: color 0.15s ease-in-out;
    text-decoration: none;
    transition: 0.3s;
    position: relative;
    transition: 1s;
  }
  section.serviceSection
    div.serviceDivContainer
    div.serviceDivRight
    a.bookNowAnchor
    .arrowBookNow {
    color: #ff8a00;
    font-weight: 700;
    transition: 0.2s;
  }
  section.serviceSection
    div.serviceDivContainer
    div.serviceDivRight
    a.bookNowAnchor:after {
    content: "";
    border: 2px solid #ff8a00;
    position: absolute;
    width: 0;
    bottom: -4px;
    transition: 1s;
    background: #ff8a00;
  }
}

@media (max-width: 760px) {
  section.serviceSection,
  section.serviceSection div.serviceDivContainer {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  section.serviceSection,
  section.serviceSection div.serviceDivContainer {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  div.serviceDivContainer {
    height: 900px;
    flex-direction: column;
  }
  section.serviceSection div.serviceDivContainer div.serviceDivLeft {
    width: 100%;
    height: 100%;
  }
  section.serviceSection div.serviceDivContainer div.serviceDivRight {
    width: 90%;
    height: 100%;
    padding: 80px 10px;
  }
  section.serviceSection
    div.serviceDivContainer
    div.serviceDivRight
    span.serviceSmallHeading {
    margin-bottom: 0;
    line-height: 1rem;
    font-size: 0.6875rem;
    letter-spacing: 0.1rem;
  }
  section.serviceSection
    div.serviceDivContainer
    div.serviceDivRight
    h3.serviceH3 {
    font-size: 1.3rem;
    letter-spacing: 0.1rem;
    border-bottom: 1px solid grey;
    padding-bottom: 15px;
    margin-bottom: 17px;
    line-height: normal;
  }
  section.serviceSection
    div.serviceDivContainer
    div.serviceDivRight
    p.servicePara {
    margin-bottom: 20px;
    line-height: 1.5rem;
    letter-spacing: 0.025rem;
    font-size: 1.1rem;
  }
  section.serviceSection
    div.serviceDivContainer
    div.serviceDivRight
    a.bookNowAnchor {
    display: inline-flex;
    align-items: center;
    border-bottom: 0.25rem solid #ff8a00;
    padding-bottom: 0.3125rem;
    font-size: 1.125rem;
    color: inherit;
    text-transform: none;
    letter-spacing: 0.025rem;
    overflow: visible;
    white-space: normal;
    text-overflow: ellipsis;
    transition: color 0.15s ease-in-out;
    text-decoration: none;
    transition: 0.3s;
    position: relative;
    transition: 1s;
  }
  section.serviceSection
    div.serviceDivContainer
    div.serviceDivRight
    a.bookNowAnchor
    .arrowBookNow {
    color: #ff8a00;
    font-weight: 700;
    transition: 0.2s;
  }
  section.serviceSection
    div.serviceDivContainer
    div.serviceDivRight
    a.bookNowAnchor:after {
    content: "";
    border: 2px solid #ff8a00;
    position: absolute;
    width: 0;
    bottom: -4px;
    transition: 1s;
    background: #ff8a00;
  }
}

</style>

<div class="newbg uk-light uk-cover-container uk-section uk-section-xlarge" style="background-image: url('<?php echo fw_get_opt('about_page_bg');?>');">
    <div class="uk-position-cover" style="background-color: rgba(30, 26, 65, 0.76);"></div>
    <div class="uk-container uk-position-relative">
        <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
            <div class="uk-width-1-1@m uk-text-center">
                <h1>ABOUT US</h1>
            </div>
        </div>
    </div>
</div>

<div class="about-page p-b80">
    <section class="serviceSection ">
        <div class="serviceDivContainer">
            <div class="serviceDivLeft" style="background: url(/wp-content/uploads/2023/07/1-1-scaled.jpeg) 0% 0% / cover;">
            </div>
            <div class="serviceDivRight">
                <span class="serviceSmallHeading">Our Model</span>
                <h3 class="serviceH3">Who are we</h3>
                <p class="servicePara">ProArk was formed upon seeing the need for professional and most importantly, reliable courier service. The platform connects drivers with individuals and organizations that need courier services. <br><br>We bring to the industry over years of experience in individual and business courier service. 
                    <br><br><b>Our Model</b><br>“Passengers” generate the demand, “Drivers” supply the demand and “ProArk.ca” acts as the marketplace/facilitator to make this all happen seamlessly on a mobile platform.
                </p>
                <a class="bookNowAnchor">More <svg class="MuiSvgIcon-root arrowBookNow" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"></path></svg>
                </a>
            </div>
        </div>

        
    </section>
<section class="serviceSection invert">
            <div class="serviceDivContainer">
                <div class="serviceDivLeft" style="background: url(/wp-content/uploads/2023/07/2-1.jpeg) 0% 0% / cover;"></div>
                <div class="serviceDivRight">
                    <span class="serviceSmallHeading">Sustainability</span>
                    <h3 class="serviceH3">Our Mission</h3>
                    <p class="servicePara">Serving the needs of our customers and communities is paramount to our success. No matter how large or small the package is, it is given our utmost attention from the point of pick up to the point of delivery as the well-being of our people, business partners, and the public is of utmost importance.</p>
                    <a class="bookNowAnchor">More 
                        <svg class="MuiSvgIcon-root arrowBookNow" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <section class="serviceSection ">
            <div class="serviceDivContainer">
                <div class="serviceDivLeft" style="background: url(/wp-content/uploads/2023/07/3.jpeg) 0% 0% / cover;"></div>
                <div class="serviceDivRight">
                    <span class="serviceSmallHeading">Supporting the Communities</span>
                    <h3 class="serviceH3">Our Value</h3>
                    <p class="servicePara">At the heart of every community, we've always looked for ways to link business, individuals and communities together and listen to what matters to them. <br><br>We provide services to many Canadians, and the important role we play in our community also allows us to deliver much more than parcels and letters.</p>
                    <a class="bookNowAnchor">Learn More 
                        <svg class="MuiSvgIcon-root arrowBookNow" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

    </div>

<?php
get_footer();