<?php get_header(); ?>
    <div id="blog-page" class="left-230">
        <!-- Blog page -->
        <section class="blog" id="blog">
            <div class="container-fluid container-wide">
                <main class="main-blog" role="main">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb clearfix" itemscope itemtype="https://schema.org/BreadcrumbList">
                            شما اینجا هستید:
                            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <a itemtype="https://schema.org/Thing" itemprop="item" href="<?php echo esc_url(home_url()); ?>" rel="bookmark">
                                    <span itemprop="name"> صفحه اصلی</span>
                                </a>
                                <meta itemprop="position" content="1"/>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <span itemprop="name">" <?php the_category( ',' ); ?>"</span>
                                <meta itemprop="position" content="2"/>
                            </li>
                            <li class="small-menu pull-left">
                                <ul class=" list-inline">
                                    <li>
                                        <a href="<?php echo esc_url(home_url()); ?>" data-toggle="tooltip" data-placement="top" title="بازگشت به صفحه اصلی" rel="bookmark">
                                            <i class="fa fa-home"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a onclick="window.history.back()" href="#" data-toggle="tooltip" data-placement="bottom" title="بازگشت به صفحه قبل" rel="bookmark">
                                            <i class="fa fa-step-backward"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li><!-- //.small-menu -->
                        </ol><!-- //.breadcrumb -->
                    </nav>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sidebar_search">
                                    <form action="<?php echo esc_url(home_url('/')); ?>" id="searchform" method="get">
                                        <input type="text" id="search" name="s" value="<?php the_search_query(); ?>" placeholder="بیابید..."/>
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!--container-->

					<?php if (have_posts()) : ?>
                    <div class="posts">
                        <div class="row">
							<?php while (have_posts()) : the_post(); ?>
                                <!-- post left thumb -->
                                <div class="col-sm-4">
                                    <div class="postshow clearfix content-box">
                                        <div class="col-sm-12">
                                            <div class="post-thumbnail">
                                                <a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>">
													<?php if (has_post_thumbnail()) {the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive']);}
													else {echo '<img src="' . get_stylesheet_directory_uri() . '/assets/images/not-found.gif" class="img-responsive" />';}?>
                                                </a>
                                                <div class="share-post">
                                                    <div class="socail-links">
                                                        <ul class="list-unstyled list-inline">
                                                            <li>
                                                                <a target="_blank" data-toggle="tooltip" data-placement="bottom" title="share on facebook" href="https://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php echo get_post_meta($post->ID, 'h1', true); ?>" rel="nofollow noopener noreferrer"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li>
                                                                <a target="_blank" data-toggle="tooltip" data-placement="top" title="share on twitter" href="https://twitter.com/intent/tweet?status=<?php echo get_post_meta($post->ID, 'h1', true); ?>+<?php the_permalink(); ?>" rel="nofollow noopener noreferrer"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li>
                                                                <a target="_blank" data-toggle="tooltip" data-placement="bottom" title="share on whatsapp" href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>" rel="nofollow noopener noreferrer"><i class="fa fa-whatsapp"></i></a>
                                                            </li>
                                                            <li>
                                                                <a target="_blank" data-toggle="tooltip" data-placement="top" title="share on linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php echo get_post_meta($post->ID, 'h1', true); ?>&source=علی رشیدنهال" rel="nofollow noopener noreferrer"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                            <li>
                                                                <a target="_blank" data-toggle="tooltip" data-placement="bottom" title="share on telegram" href="https://telegram.me/share/url?url=<?php the_permalink(); ?>&text=<?php echo get_post_meta($post->ID, 'h1', true); ?>" rel="nofollow noopener noreferrer"><i class="fa fa-telegram"></i></a>
                                                            </li>
                                                            <li>
                                                                <a target="_blank" data-toggle="tooltip" data-placement="top" title="share on pinterest" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php the_post_thumbnail_url(); ?>" rel="nofollow noopener noreferrer"><i class="fa fa-pinterest-p"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- //.social-links -->
                                                </div><!-- //.share-post -->
                                            </div><!-- //.post-thumbnail -->
                                        </div><!-- //.col -->

                                        <div class="col-sm-12">
                                            <div class="post-content">
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank"><?php the_title('<h3 class="text-center">', '</h3>'); ?></a>
                                                <p class="text-justify"><?php echo get_post_meta($post->ID, 'description', true);?></p>
                                                <div class="preview">
                                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-block" target="_blank" rel="bookmark">مشاهده مطلب</a>
                                                </div>

                                            </div><!-- //.post-content-->
                                        </div><!-- //.col -->
                                    </div><!-- //.postshow -->
                                </div><!-- // .col-sm-6 -->
							<?php endwhile;endif; ?>
                        </div><!-- //.clearfix row -->
                        <div class="text-center"><?php echo as_pagination(); ?></div>
                    </div><!-- //.posts -->
                </main><!-- //.main-page -->
            </div>
        </section>
    </div>
<?php get_footer(); ?>