<div id="tdi_49" class="tdc-row stretch_row_1200 td-stretch-content">

<div class="vc_row tdi_50  wpb_row td-pb-row">

    <div class="vc_column tdi_52  wpb_column vc_column_container tdc-column td-pb-span12">

        <div class="wpb_wrapper">
            <!-- <div class="td_block_wrap td_block_title tdi_60 td-pb-border-top home-title-heading td_block_template_8 td-fix-index" data-td-block-uid="tdi_60">

                                            <div class="td-block-title-wrap">
                                                <h4 class="td-block-title"><a href="https://www.theseedcambodia.com/នយោបាយការបរទេស/">ព័ត៌មានថ្មីៗ</a></h4>
                                            </div>
                                        </div> -->
            <div class="td_block_wrap td_flex_block_1 tdi_53 td-pb-border-top td_block_template_8 td_flex_block" data-td-block-uid="tdi_53">

                <div class="td-block-title-wrap"></div>
                <div id="tdi_53" class="td_block_inner td-mc1-wrap">
                    <?php
                    $articles = $homeController->listArticle();

                    if (!empty($articles)):
                        foreach ($articles as $row):
                    ?>
                            <div class="td_module_flex td_module_flex_1 td_module_wrap td-animation-stack td-cpt-post">
                                <div class="td-module-container td-category-pos-image">
                                    <div class="td-image-container">
                                        <a href="blog.php?id=<?php echo $row['MAIN_CATEGORY_ID'];  ?>" class="td-post-category"><?php echo $row['CATEGORY_NAME']; ?> </a>
                                        <div class="td-module-thumb"><a href="article.php?id=<?php echo $row['ID']; ?>" rel="bookmark" class="td-image-wrap " title="<?php echo $row['TITLE']; ?>"><span class="entry-thumb td-thumb-css td-animation-stack-type1-2" data-type="css_image" data-img-url="<?php echo BASE_URL . 'storage/uploads/article/' . htmlspecialchars($row['IMAGE_URL']); ?>" style="background-image: url('<?php echo BASE_URL . 'storage/uploads/article/' . htmlspecialchars($row['IMAGE_URL']); ?>');"></span></a></div>
                                    </div>
                                    <div class="td-module-meta-info">
                                        <h3 class="entry-title td-module-title"><a href="article.php?id=<?php echo $row['ID']; ?>" rel="bookmark" title="<?php echo $row['TITLE']; ?>"><?php echo $row['TITLE']; ?></a></h3>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No articles found.</p>
                    <?php endif; ?>



                </div>
            </div>
            <div class="tdm_block td_block_wrap tdm_block_button tdi_54 tdm-content-horiz-center td-pb-border-top td_block_template_8" data-td-block-uid="tdi_54">

                <div class="tds-button td-fix-index"><a href="https://www.theseedcambodia.com/ចូលរួមធ្វើវិភាគទាន/" title="ចូលរួមធ្វើវិភាគទាន" class="tds-button1 tdm-btn tdm-btn-sm tdi_55 "><i class="bi bi-chat-heart tdm-btn-icon tdc-font-fa tdc-font-fa-comments-o"></i><span class="tdm-btn-text">ចូលរួមធ្វើវិភាគទាន</span></a></div>
            </div>
        </div>
    </div>
</div>
</div>