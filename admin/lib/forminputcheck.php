
<?php
function forminput_check($data)
{
  $error = FALSE;
  
  //nullcheck start
  if($data['s_id'] == null){
      $error['s_id']  = TRUE;
  }
  
  if($data['type'] == null){
      $error['type']  = TRUE;
  }
  
  if($data['s_password'] == null){
      $error['s_password']  = TRUE;
  }

  
  if($data['s_company'] == null && $data['s_name'] == null){
      $error['scorsn'] = TRUE;
  }
  //null check end
  
//入力チェック  
  if(!preg_match("/^[0-9]+$/", $data['s_id'])){
      $error['ins']['s_id'] = TRUE;
  }
  
  if(!preg_match("/^[a-zA-Z0-9]+$/", $data['s_password'])){
      $error['ins']['s_password'] = TRUE;
  }
  
  if($data['type'] == 1 || $data['type'] == 3){
      
      if($data['s_url'] == null){
          $error['s_url'] = TRUE;
      }
      
      if(!preg_match("/^[a-zA-Z0-9]+$/", $data['s_url'])){
          $error['ins']['s_url'] = TRUE;
      }
      
      if($data['site_design'] == null){
          $error['site_design'] = TRUE;
      }
  }
  
  return $error;
}