<div id="tdi_56" class="tdc-row stretch_row_1200 td-stretch-content">
                            <div class="vc_row tdi_57  wpb_row td-pb-row">
                                <div class="vc_column tdi_59  wpb_column vc_column_container tdc-column td-pb-span12">

                                    <div class="wpb_wrapper">
                                        <div class="td_block_wrap td_block_title tdi_60 td-pb-border-top home-title-heading td_block_template_8 td-fix-index" data-td-block-uid="tdi_60">

                                            <div class="td-block-title-wrap">
                                                <h4 class="td-block-title"><a href="blog.php?id=64">ច្បាប់និងធុរកិច្ច</a></h4>
                                            </div>
                                        </div>
                                        <div class="vc_row_inner tdi_62  vc_row vc_inner wpb_row td-pb-row">
                                            <?php if (!empty($blog1)): ?>
                                                <?php
                                                $count = 0;
                                                foreach ($blog1 as $row):
                                                    $content = $row['CONTENT'];
                                                    if ($content instanceof OCILob) {
                                                        $content = $content->load();
                                                    }
                                                    $count++;
                                                ?>
                                                    <?php if ($count == 1): ?>
                                                        <!-- First Blog (Single Blog in the First Column) -->
                                                        <div class="vc_column_inner tdi_64  wpb_column vc_column_container tdc-inner-column td-pb-span5">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="td_block_wrap td_flex_block_1 tdi_65 td-pb-border-top td_block_template_8 td_flex_block" data-td-block-uid="tdi_65">
                                                                        <div class="td-block-title-wrap"></div>
                                                                        <div id="tdi_65" class="td_block_inner td-mc1-wrap">
                                                                            <div class="td_module_flex td_module_flex_1 td_module_wrap td-animation-stack td-cpt-post">
                                                                                <div class="td-module-container td-category-pos-image">
                                                                                    <div class="td-image-container">
                                                                                        <a href="blog.php?id=<?php echo $row["MAIN_CATEGORY_ID"]; ?>" class="td-post-category"><?php echo $row['CATEGORY_NAME'];?> </a>
                                                                                        <div class="td-module-thumb"><a href="article.php?id=<?php echo $row['ID']; ?>" rel="bookmark" class="td-image-wrap " title="វិចារណកថាថ្ងៃសុក្រ៖ ប្រៀបធៀបប្រព័ន្ធនយោបាយរវាងសហរដ្ឋអាមេរិក និង ចក្រភពអង់គ្លេស"><span class="entry-thumb td-thumb-css td-animation-stack-type1-1" data-type="css_image" data-img-url="<?php echo BASE_URL . 'storage/uploads/article/' . htmlspecialchars($row['IMAGE_URL']); ?>"></span></a></div>
                                                                                    </div>
                                                                                    <div class="td-module-meta-info">
                                                                                        <h3 class="entry-title td-module-title"><a href="article.php?id=<?php echo $row['ID']; ?>" rel="bookmark" title="វិចារណកថាថ្ងៃសុក្រ៖ ប្រៀបធៀបប្រព័ន្ធនយោបាយរវាងសហរដ្ឋអាមេរិក និង ចក្រភពអង់គ្លេស"><?php echo $row['TITLE'] ?></a></h3>
                                                                                        <div class="td-excerpt"><?php echo $content ?></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php else: ?>
                                                        <!-- Second Blog (Other Blogs in the Second Column) -->
                                                        <div class="vc_column_inner tdi_67  wpb_column vc_column_container tdc-inner-column td-pb-span7">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="td_block_wrap td_flex_block_1 tdi_68 td-pb-border-top blog-list-image-right td_block_template_8 td_flex_block" data-td-block-uid="tdi_68">
                                                                        <div class="td-block-title-wrap"></div>
                                                                        <div id="tdi_68" class="td_block_inner td-mc1-wrap">
                                                                            <div class="td_module_flex td_module_flex_1 td_module_wrap td-animation-stack td-cpt-post">
                                                                                <div class="td-module-container td-category-pos-">
                                                                                    <div class="td-image-container">
                                                                                        <div class="td-module-thumb"><a href="article.php?id=<?php echo $row['ID']; ?>" rel="bookmark" class="td-image-wrap " title="<?php echo $row['TITLE']; ?>"><span class="entry-thumb td-thumb-css td-animation-stack-type1-1" data-type="css_image" data-img-url="<?php echo BASE_URL . 'storage/uploads/article/' . htmlspecialchars($row['IMAGE_URL']); ?>"></span></a></div>
                                                                                    </div>
                                                                                    <div class="td-module-meta-info">
                                                                                        <h3 class="entry-title td-module-title"><a href="article.php?id=<?php echo $row['ID']; ?>" rel="bookmark" title="<?php echo $row['TITLE']; ?>"><?php echo $row['TITLE'] ?></a></h3>
                                                                                        <div class="td-excerpt"><?php echo $content ?></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <p>No articles found.</p>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>