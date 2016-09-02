<?php
//Loop Video 1 (incluye los tres siguientes posts)
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
    $contador = 0;
    foreach ($videos as $video) { 
      $contador++;
      $url = 'https://www.youtube.com/watch?v='.$video[0];
      if($contador==1){
      $dia = substr($video[4], 8,2);
      $anio = substr($video[4], 0,4);
      $mes = substr($video[4], 5,2);
      $fecha = $dia."-".$mes."-".$anio;
      $titulo = trim($video[1]);
      ?>
      <div id="<?php echo $video[0]; ?>" class="post-video-principal" >
        <div> 
            <div class="embeVideo" data-id="<?php echo $video[0]; ?>"></div>
            <div class="content-post">
                <div class="post-inside">
                    <div class="video-info">
                        <div class="vistas-principal"><i class="fa fa-clock-o"></i> <?php echo $fecha; ?></div>
                    </div>
                    <div class="social-share">
                        <ul>
                            <li><a href="javascript:fbShare('<?php echo $url; ?>', '<?php echo $titulo; ?>', '<?php echo $titulo; ?>', '<?php echo $url; ?>', 520, 350)" onClick="ga('send', 'event', 'facebook', 'share');"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:twShare('<?php echo $url; ?>', '<?php echo $titulo; ?> - vía: @mujerypunto', 520, 350)" onClick="ga('send', 'event', 'twitter', 'share');"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://plus.google.com/share?url=<?php echo $url; ?>" onclick="window.open('https://plus.google.com/share?url=<?php $url; ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus" onClick="ga('send', 'event', 'google+', 'share');"></i></a></li>
                            <li class="whatsapp">
                                <?php $title = strtolower(str_replace(' ', '-', trim($titulo))) ?>
                                <a href="whatsapp://send?text=<?php echo $title; ?>-<?php urlencode($url); ?>" data-action="share/whatsapp/share" data-href="http://69.64.43.207/~mujerypunto" onClick="ga('send', 'event', 'whatsapp', 'share');"><i class="fa fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
					<h2 class="titulo-principal">

						<?php echo $titulo; ?>
					</h2>
                </div>
            </div>
             
        </div>
    </div>
  
 <?php }else{ 
            if($contador<5){

                  $dia = substr($video[4], 8,2);
                  $anio = substr($video[4], 0,4);
                  $mes = substr($video[4], 5,2);
                  $fecha = $dia."-".$mes."-".$anio;
                  $titulo = trim($video[1]);
              ?>
                <div class="post-list">
                    <div id="<?php echo $video[0]; ?>" class="post-video video-galeria type-video-galeria status-publish hentry" onclick="loadVideo('<?php echo $video[0]; ?>')">
                        <div class="content-img"> 
                            <img src="<?php echo $video[3]['url']; ?>">
                        </div>
                        <div class="content-post">
                            <div class="post-inside">
                                <div class="video-info">
                                    <div class="video_url">
                                        <p value="http://img.youtube.com/vi/<?php echo $video[0]; ?>/0.jpg"></p>
                                    </div>
                                    <div class="vistas"><i class="fa fa-clock-o"></i> <?php echo $fecha; ?></div>
                                    
									<h2 class="title-post">
										<?php echo $video[1]; ?>
									</h2>
                                    
                                    <div class="social-share">
                                        <ul>
                                            <li><a href="javascript:fbShare('<?php echo $url; ?>', '<?php echo $titulo; ?>', '<?php echo $titulo; ?>', '<?php echo $url; ?>', 520, 350)" onClick="ga('send', 'event', 'facebook', 'share');"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:twShare('<?php echo $url; ?>', '<?php echo $titulo; ?> - vía: @mujerypunto', 520, 350)" onClick="ga('send', 'event', 'twitter', 'share');"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" href="https://plus.google.com/share?url=<?php echo $url; ?>" onclick="ga('send', 'event', 'google+', 'share');window.open('https://plus.google.com/share?url=<?php $url; ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="whatsapp">
                                                <?php $title = strtolower(str_replace(' ', '-', trim($titulo))) ?>
                                                <a href="whatsapp://send?text=<?php echo $title; ?>-<?php urlencode($url); ?>" data-action="share/whatsapp/share" data-href="http://69.64.43.207/~mujerypunto" onClick="ga('send', 'event', 'whatsapp', 'share');"><i class="fa fa-whatsapp"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    
<?php    }
    }
    }
?>