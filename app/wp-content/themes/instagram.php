<?php

function actualiza($id,$url,$likes,$comments,$link,$mysqli){
  $result_url = $mysqli->query('UPDATE instagram_fotos_aleatorio SET url = "'.$url.'" ,likes = "'.$likes.'", comments="'.$comments.'", link="'.$link.'" WHERE id ='.$id.' ');
}

function actualiza_fotos($mysqli){
    $client_id = '7cb05e275c664adb80bae7a501fe295b';
    $json_user_url='https://api.instagram.com/v1/users/199672706/media/recent/?client_id='.$client_id;
    $json_user= file_get_contents($json_user_url);
    $links_user_url= json_decode($json_user);
    $count_media_recent= count($links_user_url->data);
    $i=0;
    do{
          $id=$i+1;
          $url=$links_user_url->data[$i]->images->low_resolution->url;
          $likes=$links_user_url->data[$i]->likes->count;
          $comments=$links_user_url->data[$i]->comments->count;
          $link=$links_user_url->data[$i]->link;
          actualiza($id,$url,$likes,$comments,$link,$mysqli);
          $i++;
    }while($i<$count_media_recent);
    return $insta_array;
}



  $mysqli = mysqli_connect('localhost','root','root','mujerypunto') or die("Error " . mysqli_error($link)); 
  $mysqli->set_charset('utf8_bin');
  //Actualizo en BD
  date_default_timezone_set('America/Santiago');
  if(date('H')>'8' && date('H')<'14'){
    $result = $mysqli->query("SELECT DISTINCT renueva FROM instagram_fotos_aleatorio");
    $row= mysqli_fetch_array($result, MYSQLI_BOTH); 
    if($row[0]=='0'){
      actualiza_fotos($mysqli);
      $result2 = $mysqli->query("UPDATE instagram_fotos_aleatorio SET renueva='1'");
    }
  }elseif(date('H')>='14' && date('H')<'18'){
    $result = $mysqli->query("SELECT DISTINCT renueva FROM instagram_fotos_aleatorio");
    $row= mysqli_fetch_array($result, MYSQLI_BOTH); 
    if($row[0]=='1'||$row[0]=='0'){
      actualiza_fotos($mysqli);
      $result2 = $mysqli->query("UPDATE instagram_fotos_aleatorio SET renueva='0'");
    }
  }
  $result = $mysqli->query("SELECT * FROM instagram_fotos_aleatorio ORDER by id LIMIT 9");
  $row= mysqli_fetch_array($result, MYSQLI_BOTH);
  do{
    $instagram_html ="<img src=".$row['url']."/>";
    $i++;
  }while($row=mysqli_fetch_array($result));

  echo $instagram_html;

?>  