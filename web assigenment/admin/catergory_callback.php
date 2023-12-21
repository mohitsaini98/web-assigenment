<?php
print_r($_POST)
if(issest($_POST['title']) && trim($_POST['title'])!=''){
    $title=$_POST['title']
    $title=$_POST['detail']


  echo  $query ="insewert into category (name,detail)values('title''detail')";
    $result =$conn->query($query);
    if($result){
        echo 'valid';
    }
}
?>