<?php
$formtype =$_POST['contactform'];
if($formtype=='1'){
	$subject = "Packages Inquiry : ".$_POST['first_name'];
}

$data='<table style="width:100%; border: 1px solid black; border-collapse: collapse;">';
foreach($_POST as $key=>$value){
    $_key=ucwords(str_replace('_',' ',$key));
    $data.='<tr><td style="border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px; font-weight: 500;">'.$_key.'<td><td style=" border: 1px solid black; border-collapse: collapse; padding: 15px; text-align: left; font-size:15px">'.$value.'</td></tr>';
}
$data.='</table>';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$mailSent=mail("info@devbuyer.com",$subject,$data,$headers);
if($mailSent){
    header('Location:https://devbuyer.com/thankyou.php');
    echo json_encode(['status'=>'1','data'=>'Mail Sent']);
} else {
    header('Location:https://devbuyer.com/thankyou.php');
    echo json_encode(['status'=>'0','data'=>'Some error occured']);
}
?>
