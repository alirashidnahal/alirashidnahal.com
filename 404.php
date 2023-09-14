<?php get_header(); ?>
    <main class="main">
        <nav aria-label="breadcrumb">
            <ol class="content breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                شما اینجا هستید:
                <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a itemtype="https://schema.org/Thing" itemprop="item" href="<?php echo esc_url(home_url()); ?>" rel="bookmark">
                        <span itemprop="name"> صفحه اصلی</span>
                    </a>
                    <meta itemprop="position" content="1"/>
                </li>
                <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span itemprop="name">شما گم شدید...!</span>
                    <meta itemprop="position" content="2"/>
                </li>
            </ol>
        </nav>

        <section class="error-page ">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/error.gif" class="img-fluid">
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex justify-content-center">
                            <div class="error-template my-5">
                                <div class="err-details text-center">
                                    <h1>
                                        <span class="err-4">4</span>
                                        <span class="err-0">0</span>
                                        <span class="err-4">4</span>
                                    </h1>

                                    <h3> صفحه موردنظر یافت نشد! </h3>

                                    <p class="lead">
                                        متأسفم؛ خطایی رخ داده است، صفحه درخواستی یافت نشد!
                                    </p>

                                    <ul class="list-inline">
                                        <li>
                                            <a class="btn classy-btn" href="<?php echo esc_url(home_url('/')); ?>">
                                                <i class="fa fa-home"></i> برگشت به خانه
                                            </a>
                                        </li>

                                        <li>
                                            <a class="btn classy-btn" href="<?php echo esc_url(home_url('/')); ?>">
                                                <i class="fa fa-pencil"></i> مشاهده مطالب وبلاگ
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <hr class="py-2">
                                <h3 class="text-right">با جستجو خودتان را نجات دهید:</h3>
                                <div class="sidebar_search">
                                    <form action="<?php echo esc_url(home_url('/')); ?>" id="searchform" method="get">
                                        <input type="text" id="search" name="s" value="<?php the_search_query(); ?>" placeholder="به دنبال راه فرار باشید..."/>
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>