<?php
/*
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



<?php
class  YoutubeVideos{
    var $url_api_v3 = 'https://www.googleapis.com/youtube/v3/';
    var $videos = array();
 
    function getPlayListIdFromChannelId($key, $channelId){
    // recupera el identificador de la lista de uploads del canal. 
    $url_channel = "{$this->url_api_v3}channels?id={$channelId}&part=contentDetails&key={$key}";
    $json_channel = json_decode(file_get_contents($url_channel), true);
    $playlistId = $json_channel['items'][0]['contentDetails']['relatedPlaylists']['uploads'];
    return $playlistId;
    }
 
    function getChannelVideos($key, $channelId){
    // recupera el json con los datos de los videos
    $playlistId = $this->getPlayListIdFromChannelId($key, $channelId);
    $url_videos = "{$this->url_api_v3}playlistItems?part=snippet&maxResults=50&playlistId={$playlistId}&key={$key}";
    $json = json_decode(file_get_contents($url_videos), true);
 
    // procesamos la primera pagina
    $this->procesarPaginaJson($json);
             
    // procesamos el resto si las hay
    while(isset($json['nextPageToken'])){
        $nextPageToken = $json['nextPageToken'];
        $nextUrl = $url_videos . '&pageToken=' . $nextPageToken;
        $json = json_decode(file_get_contents($nextUrl), true);
        $this->procesarPaginaJson($json);
    }
 
    return $this->videos;
    }
 
    function procesarPaginaJson($json){
        // procesa cada pagina de videos y almacena los datos deseados en una estructura json
        foreach($json['items'] as $video){
            $video = array(
                $video['snippet']['resourceId']['videoId'],
                $video['snippet']['title'],
                $video['snippet']['description'],
                $video['snippet']['thumbnails']["high"],
                $video['snippet']['publishedAt'] 
            );
            array_push($this->videos, $video);
        }
    }
}
 
    //configuracion
    $key = 'AIzaSyDBMZsybp7GcJdmqdhgGDn-jRkGo9jyD-c';
    $channelId = 'UC5BJDXtQyzTZzkOXfTzPgrQ';
     
    $misVideos = new YoutubeVideos;
    $videos= $misVideos->getChannelVideos($key,$channelId );
     
    //echo '<pre>';
    $contador = 0;
    foreach ($videos as $video) {
      $contador++;
      if($contador==1){?>
      <div class="post-video-principal">
        <div> 
            <div class="embeVideo" data-id="<?php the_excerpt(); ?>">

            </div>
            <div class="content-post">
                <div class="post-inside">
                    <div class="video-info">
                        <div class="vistas-principal"><i class="fa fa-clock-o"></i> <?php echo substr($video[4], 0, 10) ?></div>
                    </div>
                    <div class="social-share">
                        <ul>
                            <li><a href="javascript:fbShare('<?php echo the_permalink(); ?>', '<?php echo $video[1]; ?>', '<?php echo $video[1]; ?>', '<?php echo the_permalink(); ?>', 520, 350)"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:twShare('<?php echo the_permalink(); ?>', '<?php echo $video[1]; ?> - vía: @mujerypunto', 520, 350)"><i class="fa fa-twitter"></i></a></li>
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
                                   echo $video[1];
                            }?>
                        </h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
  
<?php }
    }
?>
*/ ?>