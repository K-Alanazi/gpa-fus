<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'project');

if($conn){
    echo 'success';
    echo "<br>";
}else{
    echo 'fail';
}
///////////////

$gpt= "mosab khaled";

$accept="accepted";
$reject="rejected";




////////////////////////////////////////////خاص accebet or reject check box////////////////////////////////////////////////////////////////

$sss=$_POST['name'];
$sss2=$_POST['name2'];
$sss3=$_POST['name3'];
$sss4=$_POST['name4'];
$sss5=$_POST['name5'];

////////////////////////////////////////////خاص accebet or reject check box////////////////////////////////////////////////////
////////////////
////////////
/////////
///////
////
//
///////////////////////////////الشعبة الدراسية//////////////////////////////////////////////////////////
$s633= "s633";
$s644= "s644";
$s655= "s655";
$s666= "s666";
$s677= "s677";
///////////////////////////////الشعبة الدراسية////////////////////////////////
////////////////
////////////
/////////
///////
////
//
////////////////////////////////////خانة نص الملاحظة///////////////
$note=$_POST['comment'];
$note2=$_POST['comment'];
$note2=$_POST['oppo2'];
$note3=$_POST['oppo3'];
$note4=$_POST['oppo4'];
$note5=$_POST['oppo5'];
////////////////////////////////////خانة نص الملاحظة////////
////////////////
////////////
/////////
///////
////
//
//////////////////////////////////////***************الصف الاول******************//////////////////////////////////////

        $sql = mysqli_query($conn ,"select title, name 
		from groups , c633  ");
        while($user = mysqli_fetch_assoc($sql)){$title =   $user['title']; $name =   $user['name'];} 	

    if (isset($_POST['send'])) {

        if($sss == "no")
        {        
            
            $query    = "INSERT into pstatus (comment, report )
                        VALUES ('$note' ,'$reject')";

$result   = mysqli_query($conn, $query);


$stite= $reject;

if ($result) {
    echo "successfully";
    } else {
    echo "missing";
    }
       

        }else{

            $query    = "INSERT into pstatus (comment, report )
            VALUES ('$note' ,'$accept')";

            $result   = mysqli_query($conn, $query);


            $stite= $accept;
            if ($result) {
            echo "successfully";
            } else {
            echo "missing";
            }
            
        }
    }
//////////////////////////////////////***************نهاية الصف الاول******************//////////////////////////////////////
////////////////
////////////
/////////
///////
////
//
//////////////////////////////////////////////row two/////////////////////////////////////////////


if (isset($_POST['send2'])) {

    if($sss2 == "no")
    {        
        
        $query    = "INSERT into stat (study_division , gp_topic , note , rebort)
VALUES ('$s644' ,'$gpt' , '$note2' ,'$reject')";

$result   = mysqli_query($conn, $query);

$stite2= $reject;

if ($result) {
    echo "successfully";
    } else {
    echo "missing";
    }
   

    }else{

        $query    = "INSERT into stat (study_division , gp_topic , note , rebort)
        VALUES ('$s644' ,'$gpt' , '$note2' ,'$accept')";

        $result   = mysqli_query($conn, $query);


        $stite2= $accept;
        if ($result) {
            echo "successfully";
            } else {
            echo "missing";
            }
        
    }
}
//////////////////////////////////////**************END ROWWS TWO*****************//////////////////////////////////////
////////////////
////////////
/////////
///////
////
//
//////////////////////////////////////////////row THREE /////////////////////////////////////////////


if (isset($_POST['send3'])) {

    if($sss3 == "no")
    {        
        
        $query    = "INSERT into stat (study_division , gp_topic , note , rebort)
VALUES ('$s655' ,'$gpt' , '$note3' ,'$reject')";

$result   = mysqli_query($conn, $query);


$stite3= $reject;
if ($result) {
    echo "successfully";
    } else {
    echo "missing";
    }
   

    }else{

        $query    = "INSERT into stat (study_division , gp_topic , note , rebort)
        VALUES ('$s655' ,'$gpt' , '$note3' ,'$accept')";

        $result   = mysqli_query($conn, $query);

        $stite3= $accept;

        if ($result) {
            echo "successfully";
            } else {
            echo "missing";
            }
        
    }
}
//////////////////////////////////////***************نهاية الصف الاول******************//////////////////////////////////////
////////////////
////////////
/////////
///////
////
//
//////////////////////////////////////////////row FOAR /////////////////////////////////////////////


if (isset($_POST['send4'])) {

    if($sss4 == "no")
    {        
        
        $query    = "INSERT into stat (study_division , gp_topic , note , rebort)
VALUES ('$s666' ,'$gpt' , '$note4' ,'$reject')";

$result   = mysqli_query($conn, $query);


$stite4= $reject;
if ($result) {
    echo "successfully";
    } else {
    echo "missing";
    }
   

    }else{

        $query    = "INSERT into stat (study_division , gp_topic , note , rebort)
        VALUES ('$s666' ,'$gpt' , '$note4' ,'$accept')";

        $result   = mysqli_query($conn, $query);

        $stite4= $accept;

        if ($result) {
            echo "successfully";
            } else {
            echo "missing";
            }
        
    }
}

//////////////////////////////////////***************END ROWS FOAR*****************//////////////////////////////////////
////////////////
////////////
/////////
///////
////
//
//////////////////////////////////////////////row FIFTHVE/////////////////////////////////////////////


if (isset($_POST['send5'])) {

    if($sss5 == "no")
    {        
        
        $query    = "INSERT into stat (study_division , gp_topic , note , rebort)
VALUES ('$s677' ,'$gpt' , '$note5' ,'$reject')";

$result   = mysqli_query($conn, $query);

$stite5= $reject;

if ($result) {
    echo "successfully";
    } else {
    echo "missing";
    }
   

    }else{

        $query    = "INSERT into stat (study_division , gp_topic , note , rebort)
        VALUES ('$s677' ,'$gpt' , '$note5' ,'$accept')";

        $result   = mysqli_query($conn, $query);

        $stite5= $accept;

        if ($result) {
            echo "successfully";
            } else {
            echo "missing";
            }
        
    }
}


//////////////////////////////////////***************END ROW FIFTHVE*****************//////////////////////////////////////
////////////////
////////////
/////////
///////
////
//
//////////////////////////////////////////////FINALIY DR.I_BBB /////////////////////////////////////////////



















    
?>









