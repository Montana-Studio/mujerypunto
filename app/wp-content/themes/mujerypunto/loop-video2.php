<?php
class  YoutubeVideos{
    $url_api_v3 = 'https://www.googleapis.com/youtube/v3/';
    $videos = array();
 
    function getPlayListIdFromChannelId($key, $channelId){
    // recupera el identificador de la lista de uploads del canal. 
    $url_channel = "{$this->url_api_v3}channels?id={$channelId}&part=contentDetails&key={$key}";
        if(false !== @file_get_contents($url_channel)){
           $json_channel = json_decode(file_get_contents($url_channel), true);
            $playlistId = $json_channel['items'][0]['contentDetails']['relatedPlaylists']['uploads'];
            return $playlistId; 
        }else{
                    echo "error";
        }
    }
 
    function getChannelVideos($key, $channelId){
    // recupera el json con los datos de los videos
    $playlistId = $this->getPlayListIdFromChannelId($key, $channelId);
    $url_videos = "{$this->url_api_v3}playlistItems?part=snippet&maxResults=1&playlistId={$playlistId}&key={$key}";
        if(false !== @file_get_contents($url_videos)){
            $json = json_decode(file_get_contents($url_videos), true);
     
            // procesamos la primera pagina
            $this->procesarPaginaJson($json);
                     
            // procesamos el resto si las hay
            while(isset($json['nextPageToken'])){
                $nextPageToken = $json['nextPageToken'];
                $nextUrl = $url_videos . '&pageToken=' . $nextPageToken;
                if(false !== @file_get_contents($url_videos)){
                    $json = json_decode(file_get_contents($nextUrl), true);
                    $this->procesarPaginaJson($json);
                }else{
                    echo "error";
                }
                
            }
            return $this->videos;
        }else{
                    echo "error";
        }
    
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
      if($contador==2){?>
        <div class="post-video" onclick="loadVideo('<?php echo $video[0]; ?>')">

            <div class="content-img"> 
                <img  src="http://img.youtube.com/vi/<?php echo $video[0]; ?>/0.jpg">
            </div>
            <div class="content-post">
                <div class="post-inside">
                    <div class="video-info">
                        <div class="video_url"> 
                            <p value="http://img.youtube.com/vi/<?php echo $video[0]; ?>/0.jpg" ></p>

                        </div>
                        <div class="vistas"><i class="fa fa-clock-o"></i> <?php echo substr($video[4], 0, 10); ?></div>
                    </div>
                    <div class="social-share">
                        <ul>
                            <li><a href="javascript:fbShare('https://www.youtube.com/watch?v=<?php echo $video[0]; ?>', '<?php the_title(); ?>', '<?php echo $video[1]; ?>', 'https://www.youtube.com/watch?v=<?php echo $video[0]; ?>', 520, 350)"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:twShare('https://www.youtube.com/watch?v=<?php echo $video[0]; ?>', '<?php echo $video[1]; ?> - vía: @mujerypunto', 520, 350)"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://plus.google.com/share?url=https://www.youtube.com/watch?v=<?php echo $video[0]; ?>" onclick="window.open('https://plus.google.com/share?url=https://www.youtube.com/watch?v=<?php echo $video[0]; ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a></li>
                            <li class="whatsapp">
                            <a href="whatsapp://send?text=<?php echo $title; ?>-https://www.youtube.com/watch?v=<?php echo $video[0]; ?>" data-action="share/whatsapp/share" data-href="http://69.64.43.207/~mujerypunto"><i class="fa fa-whatsapp"></i></a> <a href="whatsapp://send?text=<?php echo $video[1]; ?> – https://www.youtube.com/watch?v=<?php echo $video[0]; ?>" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
                    <h2 class="title-post">
                        <?php echo $video[1]; ?>
                    </h2>
                </div>
            </div>
        </div>

<?php }
      
    }
?>
