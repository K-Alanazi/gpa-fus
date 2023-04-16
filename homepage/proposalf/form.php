<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'project');

if($conn){
    echo 'success';
    echo "<br>";
}else{
    echo 'fail';
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////

$sss=$_POST['options'];/////البوتنس الاول الخاص بالشعب
$cls=$_POST['agreement'];/////البوتنس الخاص بالموضوع



    if (isset($_POST['send'])) {

        if($sss == "s633")
        {    if($cls == "propsel")///////////عند الاختيار من البوتن الاول = الاول
            {
                          /* echo "You have selected :" . "<br>" . $_POST['options'] . "<br>" . $cls=$_POST['agreement'];  */ //  عند الاختيار من البوتن الثاني = الخيار الاول
              $s633 = "SELECT * FROM c633 where id = 1 ";
              $sql633 = mysqli_query($conn ,$s633);
              while($user = mysqli_fetch_assoc($sql633)){$title =   $user['title']; $desc =   $user['abstract']; $file = $user['file']; } 	
            }elseif($cls == "frist_view")
            {
              $s633 = "SELECT * FROM c633 where id = 2 ";
              $sql633 = mysqli_query($conn ,$s633);
              while($user = mysqli_fetch_assoc($sql633)){$title =   $user['title']; $desc =    $user['abstract']; $file = $user['file']; } 	
            }elseif($cls == "secend_view")
            {
              $s633 = "SELECT * FROM c633 where id = 3 ";
              $sql633 = mysqli_query($conn ,$s633);
              while($user = mysqli_fetch_assoc($sql633)){$title =   $user['title']; $desc =   $user['abstract']; $file = $user['file']; } 	
            }elseif($cls == "final_view")
            {
              $s633 = "SELECT * FROM c633 where id = 4 ";
              $sql633 = mysqli_query($conn ,$s633);
              while($user = mysqli_fetch_assoc($sql633)){$title =   $user['title']; $desc =   $user['abstract']; $file = $user['file']; } 	
            }

        }elseif($sss == "s644")/////////عند الاختيار من البوتن الاول =الثاني
        {    if($cls == "propsel")///////////عند الاختيار من البوتن الاول = الاول
          {
            $s644 = "SELECT * FROM c644 where id = 1 ";
            $sql644 = mysqli_query($conn ,$s644);
            while($user = mysqli_fetch_assoc($sql644)){$title =   $user['title']; $desc =   $user['abstract']; $file = $user['file']; } 	
          }elseif($cls == "frist_view")
          {
            $s644 = "SELECT * FROM c644 where id = 2 ";
            $sql644 = mysqli_query($conn ,$s644);
            while($user = mysqli_fetch_assoc($sql644)){$title =   $user['title']; $desc =   $user['abstract']; $file = $user['file']; } 	          }elseif($cls == "secend_view")
          {
            $s644 = "SELECT * FROM c644 where id = 3 ";
            $sql644 = mysqli_query($conn ,$s644);
            while($user = mysqli_fetch_assoc($sql644)){$title =   $user['title']; $desc =   $user['abstract']; $file = $user['file']; } 	          }elseif($cls == "final_view")
          {
            $s644 = "SELECT * FROM c644 where id = 4 ";
            $sql644 = mysqli_query($conn ,$s644);
            while($user = mysqli_fetch_assoc($sql644)){$title =   $user['title']; $desc =   $user['abstract']; $file = $user['file']; } 	          }
        }elseif($sss == "s655")///////////عند الاختيار من البوتن الاول = الثالث
        {    if($cls == "propsel")///////////عند الاختيار من البوتن الاول = الاول
          {
            $s655 = "SELECT * FROM c655 where id = 1 ";
            $sql655 = mysqli_query($conn ,$s655);
            while($user = mysqli_fetch_assoc($sql655)){$title =   $user['title']; $desc =   $user['abstract']; $file = $user['file']; } 	
          }elseif($cls == "frist_view")
          {
            $s655 = "SELECT * FROM 655 where id = 2 ";
            $sql655 = mysqli_query($conn ,$s655);
            while($user = mysqli_fetch_assoc($sql655)){$title =   $user['title']; $desc =   $user['abstract']; $file = $user['file']; } 	
          }elseif($cls == "secend_view")
          {
            $s655 = "SELECT * FROM c655 where id = 3 ";
            $sql655 = mysqli_query($conn ,$s655);
            
            while($user = mysqli_fetch_assoc($sql655)){$title =   $user['title']; $desc =   $user['abstract']; $file = $user['file']; } 	
          }elseif($cls == "final_view")
          {
            $s655 = "SELECT * FROM c655 where id = 4 ";
            $sql655 = mysqli_query($conn ,$s655);
            
            while($user = mysqli_fetch_assoc($sql655)){$title =   $user['title']; $desc =   $user['abstract']; $file = $user['file']; } 	
          }
        }elseif($sss == "s666")///////////عند الاختيار من البوتن الاول = الرابع
        {    if($cls == "propsel")///////////عند الاختيار من البوتن الاول = الاول
          {
            $s666 = "SELECT * FROM c666 where id = 1 ";
            $sql666 = mysqli_query($conn ,$s666);
            
            while($user = mysqli_fetch_assoc($sql666)){$title =   $user['title']; $desc =   $user['abstract']; $file = $user['file']; } 	
          }elseif($cls == "frist_view")
          {
            $s666 = "SELECT * FROM c666 where id = 2 ";
            $sql666 = mysqli_query($conn ,$s666);
            
            while($user = mysqli_fetch_assoc($sql666)){$title =   $user['title']; $desc =   $user['abstract']; $file = $user['file']; } 	
          }elseif($cls == "secend_view")
          {
            $s666 = "SELECT * FROM c666 where id = 3 ";
            $sql666 = mysqli_query($conn ,$s666);
            
            while($user = mysqli_fetch_assoc($sql666)){$title =   $user['title']; $desc =   $user['abstract']; $file = $user['file']; } 	
          }elseif($cls == "final_view")
          {
            $s666 = "SELECT * FROM c666 where id = 4 ";
            $sql666 = mysqli_query($conn ,$s666);
            
            while($user = mysqli_fetch_assoc($sql666)){$title =   $user['title']; $desc =   $user['abstract']; $file = $user['file']; } 	
          }
        }elseif($sss == "s677")//////////عند الاختيار من البوتن الاول = الخامس
        {    if($cls == "propsel")///////////عند الاختيار من البوتن الاول = الاول
          {
            $s677 = "SELECT * FROM c677 where id = 1 ";
            $sql677 = mysqli_query($conn ,$s677);
            
            while($user = mysqli_fetch_assoc($sql677)){$title =   $user['title']; $desc =   $user['abstract']; $file = $user['file']; } 	
          }elseif($cls == "frist_view")
          {
            $s677 = "SELECT * FROM c677 where id = 2 ";
            $sql677 = mysqli_query($conn ,$s677);
            
            while($user = mysqli_fetch_assoc($sql677)){$title =   $user['title']; $desc =   $user['abstract']; $file = $user['file']; } 	
          }elseif($cls == "secend_view")
          {
            $s677 = "SELECT * FROM c677 where id = 3 ";
            $sql677 = mysqli_query($conn ,$s677);
            
            while($user = mysqli_fetch_assoc($sql677)){$title =   $user['title']; $desc =   $user['abstract']; $file = $user['file']; } 	
          }elseif($cls == "final_view")
          {
            $s677 = "SELECT * FROM c677 where id = 4 ";
            $sql677 = mysqli_query($conn ,$s677);
            
            while($user = mysqli_fetch_assoc($sql677)){$title =   $user['title']; $desc =   $user['abstract']; $file = $user['file']; } 	
          }
        }
    }
?>









