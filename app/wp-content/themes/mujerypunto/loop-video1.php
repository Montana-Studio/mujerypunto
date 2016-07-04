<div id="post-<?php the_ID(); ?>" <?php post_class('post-video-principal'); ?>>
    <div> 
        <div class="embeVideo" data-id="<?php the_excerpt(); ?>">

        </div>
        <div class="content-post">
            <div class="post-inside">
                <div class="video-info">
                    <div class="vistas-principal"><i class="fa fa-clock-o"></i> <?php the_time('j F Y'); ?></div>
                </div>
                <div class="social-share">
                    <ul>
                        <li><a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?>', '<?php the_title(); ?>', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php the_title(); ?> - vía: @mujerypunto', 520, 350)"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a></li>
                        <li class="whatsapp">
                            <?php $title = strtolower(str_replace(' ', '-', the_title('', '', false))) ?>
                            <a href="whatsapp://send?text=<?php echo $title; ?>-<?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share" data-href="http://69.64.43.207/~mujerypunto"><i class="fa fa-whatsapp"></i></a>
                        </li>
                    </ul>
                </div>
                <a href="<?php the_permalink(); ?>">
                    <h2 class="titulo-principal">
                        <?php 
                            if (strlen($post->post_title) > 55) {

                                echo substr(the_title($before = '', $after = '', FALSE), 0, 35) . '...';

                            } else {
                                the_title();
                        }?>
                    </h2>
                </a>
            </div>
        </div>
    </div>
</div>
