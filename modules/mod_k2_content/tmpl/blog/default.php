<?php

/**
 * @author     Said
 */

// no direct access
defined('_JEXEC') or die;

?>
<style>
    .container {
        width: 1520px;
        max-width: 1520px;
    }

    img {
        width: auto;
        height: 300px;
    }

    .blog-item {
        margin: 15px;
    }

    .cont {
        height: 300px;
        background-repeat: no-repeat;
        background-size: contain;
        display: flex;
        align-items: end;
        -webkit-filter: grayscale(100%);
    }

    .cont:hover {
        -webkit-filter: none;
    }

    .solid {
        background: linear-gradient(220deg, transparent 25px, rgba(21, 31, 53, 0.8) 1%);
        height: 150px;
        width: 100%;
        padding: 15px;
        color: white;
        -webkit-filter: none;
    }

    a {
        color: inherit;
    }

</style>

<div id="k2ModuleBox<?php echo $module->id; ?>" class="k2ItemsBlock<?php if ($params->get('moduleclass_sfx')) echo ' ' . $params->get('moduleclass_sfx'); ?>">
    <?php if ($params->get('itemPreText')) : ?>
        <p class="modulePretext"><?php echo $params->get('itemPreText'); ?></p>
    <?php endif; ?>
    <div style="text-align: center;">
        <h1>BLOG</h1>
    </div>

    <?php if (isset($items) && count($items)) : ?>
        <div style="display: flex; flex-wrap: wrap; justify-content: space-evenly;">
            <?php foreach ($items as $key => $item) :  ?>

                <?php if ($item->link) : ?>
                    <a href="<?php echo $item->link; ?>">
                        <div class="blog-item">
                            <?php if ($params->get('itemImage') && !empty($item->image)) : ?>
                                <?php
                                list($width, $height) = getimagesize("http://127.0.0.1{$item->image}");
                                $factor = 300 / $height;
                                ?>
                                <div class="cont" style="width: <?php echo $width * $factor ?>px; background-image: url('<?php echo "http://127.0.0.1{$item->image}" ?>'); ">
                                    <div class="solid">
                                        <?php if ($params->get('itemTitle')) : ?>
                                            <h3>
                                                <a class="moduleItemTitle" href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a>
                                            </h3>
                                        <?php endif; ?>
                                        <?php if ($params->get('itemAuthor')) : ?>
                                            <div class="moduleItemAuthor" style="margin-bottom: 10px;">
                                                <?php if (isset($item->authorLink)) : ?>Por
                                                <a rel="author" title="<?php echo K2HelperUtilities::cleanHtml($item->author); ?>" href="<?php echo $item->authorLink; ?>">
                                                    <?php echo $item->author; ?>
                                                </a>
                                            <?php else : ?>
                                                <?php echo $item->author; ?>
                                            <?php endif; ?>
                                            <?php if ($params->get('itemDateCreated')) : ?>
                                                <div style="">
                                                    <span class="moduleItemDateCreated">
                                                        <?php echo JHTML::_('date', $item->created, JText::_('K2_DATE_FORMAT_LC2')); ?>
                                                    </span>
                                                </div>
                                            <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </a>
                <?php endif; ?>

            <?php endforeach; ?>
            <li class="clearList"></li>
        </div>
    <?php endif; ?>

    <div class="boton" style="width: 200px; height: 50px; background-color: yellow; margin: 0 auto; color: black; display:flex; justify-content: center; align-items: center; font-size: 18pt;">
        CARGAR MÁS
    </div>


</div>