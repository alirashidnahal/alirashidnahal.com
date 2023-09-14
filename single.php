<?php get_header(); ?>
    <div id="blog-page" class="left-230">
        <!-- Blog page -->
        <section class="blog" id="blog">
            <div class="container-fluid container-wide">

                <main class="main-blog" role="main">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb clearfix" itemscope itemtype="https://schema.org/BreadcrumbList">
                            شما اینجا هستید:
                            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemtype="https://schema.org/Thing" itemprop="item" href="<?php echo esc_url(home_url()); ?>" rel="bookmark"><span itemprop="name"> صفحه اصلی</span></a><meta itemprop="position" content="1" /></li>
                            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><?php $categories = get_the_category();
								if (!empty($categories)) {echo '<a itemtype="https://schema.org/Thing" itemprop="item" href="' . esc_url(get_category_link($categories[0]->term_id)) . '"><span itemprop="name">' . esc_html($categories[0]->name) . '</span></a>';}
								?><meta itemprop="position" content="2" /></li>
                            <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemtype="https://schema.org/Thing" itemprop="item" href="<?php the_permalink() ?>"><span itemprop="name"><?php the_title(); ?></span></a><meta itemprop="position" content="3" /></li>
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
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="posts">
                        <!-- post -->
                        <div class="post-page single-post clearfix">
                            <div class="post-thumbnail">
								<?php if (has_post_thumbnail()) {
									the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive text-center']);
								} ?>
                            </div><!-- //.post-thumbnail -->
                            <div class="post-content">
                                <div class="meta">
                                    <ul class="list-inline clearfix">
                                        <li class="comments-count">
                                            <i class="fa fa-comment"></i>
											<?php echo get_comments_number(); ?> دیدگاه
                                        </li>
                                        <li class="author">
                                            <i class="fa fa-user"></i>
                                            نویسنده: <?php the_author_link() ?>
                                        </li>
                                        <li class="category">
                                            <i class="fa fa-tags"></i>
                                            دسته بندی: <?php the_category(', ') ?>
                                        </li>
                                        <li class="date">
                                            <i class="fa fa-calendar"></i>
		                                    <?php the_time('d F Y') ?>
                                        </li>
                                        <li class="postviews">
                                            <i class="fa fa-eye"></i>
                                            تعداد مشاهده : <?php echo setAndViewPostViews(get_the_ID());  ?>
                                        </li>

                                        <!-- share-links -->
                                        <li class="pull-left">
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
                                        </li><!-- //.share-links -->
                                    </ul><!-- //.meta -->
                                </div>

                                <header>
                                    <h1><a href="<?php the_permalink() ?>"><?php echo get_post_meta($post->ID, 'h1', true); ?></a></h1><!-- // post-title -->
                                </header>
                                <article id="post-<?php the_ID(); ?>">
                                    <div class="content"><?php echo the_content(); ?></div>
                                </article>

                            </div><!-- //.post-content-->
                        </div><!-- //.post -->

                        <div class="next-previous-post">
                            <div class="row">
                                <div class="col-6 pull-right">
                                    <p>مطلب قبلی</p>
                                    <h4><?php previous_post_link(); ?></h4>
                                </div>
                                <div class="col-6 pull-left">
                                    <p class="text-left">مطلب بعدی</p>
                                    <h4><?php next_post_link(); ?></h4>
                                </div>
                            </div>
                        </div>

						<?php endwhile; endif;  ?>

                        <section class="comments text-right">
							<?php comments_template(); ?>
                        </section>
                    </div><!-- //.posts -->
                </main><!-- //.main-page -->
            </div><!-- //.container -->
        </section><!-- //.blog -->
    </div><!-- //#blog-page -->
<?php get_footer(); ?>