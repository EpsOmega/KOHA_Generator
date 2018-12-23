<?php
$data = $_POST["data"];
$fn = $_POST["fn"] . "-";
date_default_timezone_set("America/New_York");
$datetime= date("Y_m_d_h_i_s_a"); //$datetime .
mkdir("testing-" . $datetime);
chdir('testing-' . $datetime);
echo file_put_contents($fn  . $datetime . '_inline.css',$data['css'],FILE_TEXT);
echo file_put_contents($fn . $datetime . '_landing.html',$data['landing'],FILE_TEXT);
echo file_put_contents($fn . $datetime . '_header.html',$data['header'],FILE_TEXT);
echo file_put_contents($fn . $datetime . '_logo.html',$data['logo'],FILE_TEXT);
echo file_put_contents($fn . $datetime . '_footer.html',$data['footer'],FILE_TEXT);
echo file_put_contents($fn . $datetime . '_oal.js',$data['oal'],FILE_TEXT);
echo file_put_contents($fn . $datetime . '_opc.js',$data['opc'],FILE_TEXT);
echo file_put_contents($fn . $datetime . '_srr.js',$data['srr'],FILE_TEXT);
echo file_put_contents($fn . $datetime . '_bdr.js',$data['bdr'],FILE_TEXT);
?>