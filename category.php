<?php
/**
 * The main template suleusair category
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package islonely
 */

get_header(); ?>

<style>
  .newbg {
    background-size: cover; /* 宽度拉满，保持比例 */
    background-repeat: no-repeat; /* 不重复 */
    background-position: center center; /* 图片居中对齐 */
  }
.news-grid-content a{
            display: block;
            position: relative;
            overflow: hidden;
            color: #333333;
    }
   .news-grid-content  a .meta {
    display: block;
    font-size: 16px;
    text-align: center;
    background-color: rgb(18 16 38);
    position: absolute;
    z-index: 1;
    top: 0;
    right: 0;
    padding: 8px 16px;
}
.news-grid-content  a .cover {
    display: block;
    position: relative;
    height: 0;
    width: 100%;
    padding-bottom: 100%;
}
 .news-grid-content a .cover img {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}
 .news-grid-content  a .intro {
    position: absolute;
    z-index: 2;
    bottom: 0;
    left: 0;
    background-image: linear-gradient(15deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0) 80%);
    width: 90%;
    padding: 16px;
    transition: background .4s, transform .4s;
    color: #ffffff;
    transform: translateY(48px);
}
.news-grid-content a .intro h3 {
    font-size: 16px;
    font-weight: normal;
    line-height: 1.5;
    transition: color .4s;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    word-break: normal;
    color: #ffffff;
}
.news-grid-content a .intro span {
    display: block;
    width: 32px;
    height: 32px;
    text-align: center;
    margin-left: auto;
    transition: background-color .4s;
    line-height: 32px;
    color: #F49628;
    overflow: hidden;
    border-radius: 50%;
    margin-top: 16px;
}
.news-grid-content a .intro h3:hover {
  color: #F49628;
}
.news-grid-content a:hover .intro h3 {
    color: #333333 !important;
}

 .news-grid-content a .intro span {
  display: block;
  width: 32px;
  height: 32px;
  text-align: center;
  margin-left: auto;
  transition: background-color .4s;
  line-height: 32px;
  color: #F49628;
  overflow: hidden;
  border-radius: 50%;
  margin-top: 16px;
}

.news-grid-content  a .intro span:hover {
  background-color: #f5f5f5;
}
.news-grid-content a:hover .intro {
    background-image: none;
    background-color: rgb(18 16 38) !important;
    color: #333333 !important;
    transform: translateY(0);
}

.news-grid-contenta:hover .intro h3 {
  white-space: normal;
}
</style>

<div class="newbg uk-light uk-cover-container uk-section uk-section-xlarge" style="background-image: url('<?php echo fw_get_opt('single_page_bg');?>');">
    <div class="uk-position-cover" style="background-color: rgba(30, 26, 65, 0.76);"></div>
    <div class="uk-container uk-position-relative">
        <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
           <div class="uk-section home-bg">
             <div class="uk-width-1-1@m uk-text-center uk-padding">
              <h1><?php single_cat_title(); ?></h1>
            </div>
    <div class="uk-container  uk-container-xlarge">
        
        <div class="uk-child-width-1-3@s uk-child-width-1-2 news-grid-content" uk-grid>
            <?php if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				 get_template_part( 'Module/post/category-item');

			endwhile;
		else :

			get_template_part( 'template/content', 'none' );

		endif;
		?>
		     </div>
    </div>
        </div>
    </div>
</div>
    </div>
</div>
<?php
// Load WordPress footer
get_footer(); ?>