<!-- Slide show -->
<div class="vc_column tdi_43  wpb_column vc_column_container tdc-column td-pb-span9">
    <div class="wpb_wrapper">
        <div class="td_block_wrap td_block_slide tdi_44 td-pb-border-top slide-style-2 td_block_template_8" data-td-block-uid="tdi_44">
            <div class="td-block-title-wrap"></div>
            <div id="tdi_44" class="td_block_inner">
                <div id="tdi_45" class="td-theme-slider iosSlider-col-1 td_mod_wrap" style="position: relative; top: 0px; left: 0px; overflow: hidden; z-index: 1; perspective: 1000px; backface-visibility: hidden; width: 703.2px; height: 190px;">
                    <div class="td-slider " style="position: relative; cursor: -webkit-grab; perspective: 0px; backface-visibility: hidden; transform: matrix(1, 0, 0, 1, -5626, 0); width: 3516px;">
                        <?php
                        $slides = $homeController->slideShow();
                        if (!empty($slides)): foreach ($slides as $slide):
                                $publishedDate = !empty($slide['PUBLISHED_DATE']) ? date("F j, Y", strtotime($slide['PUBLISHED_DATE'])) : "Unknown Date";
                        ?>
                                <div id="tdi_45_item_0" class="td_module_slide td-animation-stack td-image-gradient td-cpt-post" style="width: 703.2px; overflow: hidden; position: absolute; transform: matrix(1, 0, 0, 1, 3516, 0); backface-visibility: hidden;">
                                    <div class="td-module-thumb">
                                        <a href="article.php?id=<?php echo $slide['ID']; ?>" rel="bookmark" class="td-image-wrap " title="<?php echo htmlspecialchars($slide['TITLE']); ?>">
                                            <span class="entry-thumb td-thumb-css td-animation-stack-type1-2" data-type="css_image" data-img-url="<?php echo BASE_URL . 'storage/uploads/article/' . htmlspecialchars($slide['IMAGE_URL']); ?>" style="background-image: url('<?php echo BASE_URL . 'storage/uploads/article/' . htmlspecialchars($slide['IMAGE_URL']); ?>');">
                                            </span>
                                        </a>
                                    </div>
                                    <div class="td-slide-meta">
                                        <span class="slide-meta-cat">
                                            <a href="blog.php?id=<?php echo $slide['MAIN_CATEGORY_ID']; ?>"><?php echo $slide['CATEGORY_NAME'] ?></a>
                                        </span>
                                        <h3 class="entry-title td-module-title">
                                            <a href="article.php?id=<?php echo $slide['ID']; ?>" rel="bookmark" title="<?php echo htmlspecialchars($slide['TITLE']); ?>"><?php echo $slide['TITLE'] ?></a>
                                        </h3>
                                        <div class="td-module-meta-info">
                                            <span class="td-post-author-name">
                                                <a href="https://www.theseedcambodia.com/article/author/admin/">The Seed Admin</a> <span>-</span> </span><span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2025-03-24T15:29:03+07:00"><?php echo $publishedDate; ?></time>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No articles found.</p>
                        <?php endif; ?>

                    </div>
                    <i class="td-slide-nav tdc-font-tdmp bi bi-arrow-left prevButton" style="cursor: pointer;"></i>
                    <i class="td-slide-nav tdc-font-tdmp bi bi-arrow-right nextButton" style="cursor: pointer;"></i>
                </div>
            </div>
        </div> <!-- ./block1 -->
    </div>
</div>