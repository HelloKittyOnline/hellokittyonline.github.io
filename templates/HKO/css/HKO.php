

/* @group General */

html{
    overflow-y: scroll;
    font: normal 12px "Lucida Grande", Lucida, Verdana, sans-serif;
}
a{
    margin: 0px 0px;
}

body {
    color: #333333;
    margin: 0;
    background: #0f4d9a url(/templates/HKO/images/HKO/background.jpg) repeat-x;
}

p {
    margin: 0px 0px;
}

img {
    border-style: none;
}

#topwrap {
    display: block;
    width: 990px;
    height: 185px;
    margin: auto;
}

#headtopbannerflash {
    float: left;
    width: 950px;
    height: 185px;
}

#decoleft {
    float: left;
    width: 20px;
    height: 378px;
    background: #007adf url(/templates/HKO/images/HKO/header_image_left.jpg) no-repeat scroll;
}

#decoright {
    float: left;
    width: 20px;
    height: 378px;
    background: #007adf url(/templates/HKO/images/HKO/header_image_right.jpg) no-repeat scroll;
    margin-top: -185px;
}

/* @end */

/* @group Front Content */

#contentwrap {
    float: left;
    width: 950px;
}

span.article_separator {
    display: none;
}

div.readmore {
    position:relative;
    left: 400px;
    width: 48px;
    height: 13px;
    margin: 10px 0px 0px 0px;
    background-color: #0a94f9;
}

img.morelink {
    display: block;
    border-style: none;
    
}

a.readon {
    display: inline-block;  
    width: 48px;
    height: 13px;
    /*position: relative;
    border-style: none;*/

}

div.columnCenter div.head {
    height: 26px;
    background: url(/templates/HKO/images/HKO/content_header_bar.png) no-repeat;   
}

div.bottom {
    width: 501px;
    height: 16px;
    margin: 0 0 10px 0;
    border-style: none;
    background: url(/templates/HKO/images/HKO/content_bottom_bar.png) no-repeat;   
}

div.headimage{
    display: block;
    position: relative;
    height: 22px;
    top:  3px;
    margin: auto;
    background: url(/templates/HKO/images/HKO/title_latest_news.png) 50% no-repeat;
}

div.headdeco{
    display: block;
    position: relative;
}

div.contentpaneopen {
    text-align: left;
    width: 501px;   
}

div.contentheading {
    width: 495px;
    overflow: hidden;
    min-height: 24px;
    background: #f951a8 none no-repeat;
    border-top-style: solid;
    border-top-width: 1px;
    border-right: 3px solid #f97b00;
    border-left: 3px solid #f97b00;
}

div.contentpaneopen > div.article-content{
    clear: left;
    border-bottom: 3px solid #f97b00;
    border-right: 3px solid #f97b00;
    border-left: 3px solid #f97b00;
    padding: 10px 10px 0px;
    background-color: #fff;
}

div.contentpaneopen > div.article-content p img{
    margin: 5px;
}

div.title {
    float: left;
    padding: 4px 0 0 10px;
    width: 360px;
}

a.titlelink{
    color: #ffffff;
    text-decoration: none;
    text-transform: capitalize;
    font-size: 14px;
    font-weight: bold;
}

div.createby {
    position: relative;
    float: left;
    left: 0px;
    color: #FFFFFF;
    margin: 8px 0 0 10px;
    min-width: 80px;
    font: italic bold 10px "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
}

div.minMax {
    position: relative;
    float: left;
    left: 10px;
    width: 19px;
    height:  16px;
    background: url(/templates/HKO/images/HKO/btn_content_close.png) no-repeat;
}

div.minMax.max{
    background: url(/templates/HKO/images/HKO/btn_content_open.png) no-repeat;
}

div.columnCenter > div.moduletable {
    margin: 20px 0px;
    width: 501px;
}


/* @end */

/* @group Columns */

/* @group Navigation */

div#navigation {
    float: left;
    height:68px;
    width: 950px;
    position: relative;
    z-index: 98;
    background:url(/templates/HKO/images/HKO/header_nav_bar.png) no-repeat scroll;
}




/* @end */

div.columnLeft {
    float: left;
    width: 224px;
}

div.columnRight {
    float: left;
    width: 224px;
}

div.module.side{
    margin: 0px 0px 10px 0px;
}

div.foot, div.copyright{
    clear: left;
    width: 950px;
}

div.columnCenter {
    float: left;
    position: relative;
    width: 501px;
    padding: 0px 0px;
}



/* @end */

/* @group Modules */

div.columnLeft div.moduletable{
    margin: 10px 0px;
}

div.columnRight div.moduletable{
    margin: 10px 0px;
}

div.module{
    width: 100%;
    margin: 0 0 0 0;
}

/* top */
div.modulehead{
    display: block;
    background: url(/templates/HKO/images/HKO/content_header_bar.png) no-repeat 0 0px;
    height: 26px;
}

/* bottom */
div.modulebottom{
    display: block;
    
    background: url(/templates/HKO/images/HKO/content_bottom_bar.png) no-repeat 0 0px;
    height: 16px;
    margin: 0 0 10px 0;
}

/* Middle */

div.modulecenter{
    display: block;
    border-right: 3px solid #f97b00;
    border-left: 3px solid #f97b00;
    background-color: #fff;
    border-bottom: 3px solid #f97b00;
    border-top: 1px solid #000;
}
/*cotent*/
div.module div.hko-content{
    text-align: left;
    padding: 10px 5px 0px;
}

/*icon*/
div .module > div.icon{
    display: inline-block;
    position: relative;
    left: 180px;
    padding: 0px 0px 0px 0px;
}

div .modulehead > div.name{
    display: block;
    margin: auto;
}

div.module.welcomehko div.hko-content{
    padding: 10px;
}

div .module h3{
    margin: 0 0 10px 0;
    padding: 4px 0 0px 10px;
    background: #f951a8;
    text-align: left;
    text-transform: capitalize;
    color: #ffffff;
    font-weight: bold;
    font-size: 14px;
}

/* @end */

/* @group Modules Event */
div.module.event div.hko-content{
    padding: 0 0;
    margin: 0 0;
}




div.module div.newfeed h3{
    margin: 0 0 ;
    padding: 8px 0px 8px 10px;
}

div.module div.newfeed:first-child h3 a.titlelink{
    position: relative;
}

div.module div.newsfeed_item{
    padding: 10px;
    border-bottom: 3px solid #f97b00;
}

div.module.event > div > div > div{
    border-bottom-style: none;
}

/* @end */

/* @group Modules Slide */

/* @end */

/* @group Article */

div.columnCenter div.mainarticle {
    background-color: #fff;
    text-align: left;
}

div.columnCenter div.mainarticle
div.title {
    width: 325px;
    color: #fff;
    font-size: 14px;
    font-weight: bold;
}

div.columnCenter div.mainarticle
div.article-content{
    padding: 15px;
    text-align: left;
    border-right: 3px solid #f97b00;
    border-left: 3px solid #f97b00;
    border-bottom: 3px solid #f97b00;
}

div.columnCenter div.mainarticle
div.createby{
    margin: 15px 0 0 10px;
}


/* @end */

/* @group Front Section */

div.module.event h3{
    margin: 0;
}

div.contentpaneopen.event{
    width: 100%;
    border-top-style: none;
}

div.contentheading{
    
}

.event div.contentheading.front{
    border-style: none;
    border-top-style: solid;
    border-top-width: 1px;
}
.event div.modulehead{
    border-style: none;
    border-bottom-style: solid;
    border-bottom-width: 0;
}
.event div.modulecenter{
    border-top-style: none;
}
.event div.title.front a.contentpagetitle.event{
    color: #fff;
    text-decoration: none;
    text-transform: capitalize;
    font-size: 14px;
    font-weight: bold;
}

.event .article-content{
    padding: 10px 10px 0;
    border-bottom: 3px solid #f97b00;
}

.event .article-content.front .readmore img{
    margin: 0;
}

.event .article-content.front img{
    margin: 5px;
}

/* @end */

/* @group headericon */
div.headimage.gameinfo.system-requirements{
    background: url(/templates/HKO/images/HKO/systemRequirements_title.png) 50% no-repeat;
}

div.headimage.gameinfo{
    background: url(/templates/HKO/images/HKO/game_info_title.png) 50% no-repeat;
}

div.headdeco.gameinfo{
    display: none;
}

div.headimage.hko-news, div.headimage.news {
    background: url(/templates/HKO/images/HKO/title_latest_news.png) 50% no-repeat;
}

div.headdeco.hko-news,
div.headdeco.news{
    top: 4px;
}

div.headimage.support.contact-information{
    background: url(/templates/HKO/images/HKO/contact_us_title.png) 50% no-repeat;
}

div.headimage.gameinfo.what-is-hko{
    background: url(/templates/HKO/images/HKO/what_HKO_title.png) 50% no-repeat;
}

div.headimage.gameinfo.what-is-hko.about-hello-kitty-online{
    background: url(/templates/HKO/images/HKO/intro_HKO_title.png) 50% no-repeat;
}

div.headdeco.gameinfo.what-is-hko.about-hello-kitty-online{
    display: none;
}
div.headimage.frequently-asked-questions.support.faqs{
    background: url(/templates/HKO/images/HKO/game_FAQ_title.png) 50% no-repeat;
}

div.headdeco.frequently-asked-questions.support.faqs{
    display: none;
}


div.headimage.news.newsletter{
    background: url(/templates/HKO/images/HKO/newsletter_title.png) 50% no-repeat;
}

div.headdeco.news.newsletter{
    display: none;
}

div.headimage.news.change-logs{
    background: url(/templates/HKO/images/HKO/change_logs_title.png) 50% no-repeat;
}

div.headdeco.news.change-logs{
    display: none;
    }

div.headimage.media.trailers {
    background: url(/templates/HKO/images/HKO/trailer_title.png) 50% no-repeat;
}

div.headdeco.media.trailers{
    
}

div.headimage.media.clientandpatches {
    background: url(/templates/HKO/images/HKO/game_download_title.png) 50% no-repeat;
}

div.headimage.media.clientandpatches {
    background: url(/templates/HKO/images/HKO/game_download_title.png) 50% no-repeat;
}

div.headdeco.media.clientandpatches{
    display: none;
}

div.headimage.tutorials {
    background: url(/templates/HKO/images/HKO/tutorials_title.png) 50% no-repeat;
}

div.headdeco.tutorials {
    display: none;
}

div.headimage.community{
    background: url(/templates/HKO/images/HKO/community_title.png) 50% no-repeat;
}

div.headdeco.community{
    display: none;
}

div.headimage.community.eventblog{
    background: url(/templates/HKO/images/HKO/events_title.png) 50% no-repeat;
}

div.headdeco.community.eventblog{
    display: none;
}

div.headimage.community.eventarchive{
    background: url(/templates/HKO/images/HKO/events_arhive_title.png) 50% no-repeat;
}

div.headdeco.community.eventarchive{
    display: none;
}

div.headimage.community.gmblog{
    background: url(/templates/HKO/images/HKO/GM_blogs_title.png) 50% no-repeat;
}

div.headdeco.community.gmblog{
    display: none;
}

div.headimage.itemmall{
    width: 88px;
    height: 22px;
    background: url(/templates/HKO/images/HKO/item_mall_title.png) no-repeat;
}

div.headdeco.itemmall{

}

div.headimage.support.support-inquiries{
    background: url(/templates/HKO/images/HKO/support_inquiries_title.png) 50% no-repeat;
}

div.headdeco.support.support-inquiries{
    display: none;
}

div.headimage.screenshots{
    background: url(/templates/HKO/images/HKO/screenshots_title.png) 50% no-repeat;
}

div.headdeco.screenshots{
    display: none;
}

div.headimage.artworks{
    background: url(/templates/HKO/images/HKO/artwork_title.png) 50% no-repeat;
}

div.headdeco.artworks{
    display: none;
}

div.headimage.newsarchive{
    background: url(/templates/HKO/images/HKO/news_archive_title.png) 50% no-repeat;
}

div.headdeco.artworks{
    display: none;
}


div.icon.event{
    display: none;
}

div.name.event{
    position: relative;
    top: 4px;
    height: 22px;
    background: url(/templates/HKO/images/HKO/events_title.png) no-repeat 50%;
}

div .module > div.icon.welcomehko{
    display: none;
}

div .modulehead >  div.name.welcomehko{
    position: relative;
    top: 3px;
    height: 22px;
    background: url(/templates/HKO/images/HKO/welcome_title.png) 50% no-repeat;
}

div .module > div.icon.slide{
    display: none;
}

div .module > div.name.slide{
    display: none;
}

/* @end */

/* @group Gallery */

table.sboxgallery{
    display: table;
    width: 100%;
    padding: 15px;
    border-spacing: 0px;
    text-align: center;
    background-color: #ffe395;
    border-right: 3px solid #f97b00;
    border-left: 3px solid #f97b00;
    border-bottom: 3px solid #f97b00;
}

table.sboxgallery tr td{
    padding: 0 0;
    border-spacing: 0 0;
}

/* @end */

/* @group Archive List */

table.newsarchive {
    background-color: #fff;
    border-top: 1px solid #000;
    border-right: 3px solid #f97b00;
    border-left: 3px solid #f97b00;
    border-bottom: 3px solid #f97b00;
}

table.newsarchive table table{
    width: 100%;
    text-align: center;
}

table.newsarchive td.newsarchive{
    text-align: left;
    }

table.newsarchive td.newsarchive a{
    padding: 0 0 0 20px;
    color: #000;
    font-weight: bold;
    text-decoration: none;
}

table.newsarchive table {
    height: 40px;
}


table.newsarchive tr.newsarchive{
    text-align: left;
}

table.newsarchive tr.newsarchive td{
    padding: 5px 0 0 20px;
}

table.newsarchive tr.newsarchive a{
    font-size: 14px;
}

/* @end */

/* @group Mailing List */

table.mailinglist {
    text-align: center;
    
}

table.mailinglist .spacer{
    height: 85px;
}

input.inputBox_MailingList {
    margin:4px 0 0 10px;
    width: 150px;
    
}

input.imputImage_MailingList {
    margin:4px 0 0 110px;
    cursor: pointer;
    background-image: url(/images/buttons/btn_submit.png);
    border-style: none;
}



/* @end */

.pagination{
    list-style:none;
    height:20px;



}

.pagination li{
    display:inline;
}
table.newsarchive td.newsarchive .pagination li a{
    padding: 0 0;
}