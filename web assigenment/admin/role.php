<?php
include (". . /. . /config/config.php");
if(isset($_post['title']) && trim($_post['title'])!=''){

    $title =$_post['title'];
    $description = $_post['description'];

    $query = "insert into role(name,description)values('$title',' $description')";
    $checkresult = $conn=>query($query);
    if($checkresult){
        $_session['status']='pass';
        header("location:../role.php");
        die;
    }
    $_session['status']='fail';
        header("location:../role.php");
        die;
    }
    else{
        header("location:../role.php");
    }
    ?>
    //insert into tablename('columns','columns')values('','');
    //uptade tablename set column1=value,column2=value where id=1
    //delete * from tablename] where id=1