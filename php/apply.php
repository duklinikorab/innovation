<?php
// Kodi qe kontrollon se a eshte bere 'set' forma pasi qe shtypet butoni per te derguar te dhenat
if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    $options = $_POST['options'];
    
    // Subjekti nenkupton, se si deshiron te te vijne subject-i ne email kur te dergohen te dhenat nga klienti
    $subject = "Apliko Tani, Innovation Academy";
    // ne variablen $txt - permbajtja e saj tregon body-n e nje emaile, pra te dhenat vijne ne forme te tabeles 
    $txt = '<html><body>';
    
    $txt .= '<p style="color:#333;font-size:18px;">You have received an email from ' . '<strong style="color:#5BC2C5;">' . $name . '</strong>  <strong style="color:#5BC2C5;">' . $surname . '</strong>, <strong>' . $mailFrom  . '</strong></p>';
    $txt .= '<div>';
    $txt .= '<table width="50%" border="1" cellpadding="5px" style="margin:50px;text-align:left;font-size:17px;color:#333;border-collapse:collapse;">';
    $txt .= '<tr>';
    $txt .= '<th style="background-color:#5ac1c5;">' . 'Emri:' . '</th>';
    $txt .= '<td style="background-color:#68E4CD;">' . $name . '</td>';
    $txt .= '</tr>';
    $txt .= '<tr>';
    $txt .= '<th style="background-color:#5ac1c5;">' . 'Mbiemri:' . '</th>';
    $txt .= '<td style="background-color:#68E4CD;">' . $surname . '</td>';
    $txt .= '</tr>';
    $txt .= '<tr>';
    $txt .= '<th style="background-color:#5ac1c5;">' . 'Mosha:' . '</th>';
    $txt .= '<td style="background-color:#68E4CD;">' . $age . '</td>';
    $txt .= '</tr>';
    $txt .= '<tr>';
    $txt .= '<th style="background-color:#5ac1c5;">' . 'Lenda:' . '</th>';
    $txt .= '<td style="background-color:#68E4CD;">' . $options . '</td>';
    $txt .= '</tr>';
    $txt .= '<tr>';
    $txt .= '<th style="background-color:#5ac1c5;">' . 'Email:' . '</th>';
    $txt .= '<td style="background-color:#68E4CD;">' . $mailFrom . '</td>';
    $txt .= '</tr>';
    $txt .= '<tr>';
    $txt .= '<th style="background-color:#5ac1c5;">' . 'Nr Kontaktues:' . '</th>';
    $txt .= '<td style="background-color:#68E4CD;">' . $contact . '</td>';
    $txt .= '</tr>';
    $txt .= '<tr>';
    $txt .= '<th style="background-color:#5ac1c5;">' . 'Mesazhi:' . '</th>';
    $txt .= '<td style="background-color:#68E4CD;">' . $message . '</td>';
    $txt .= '</tr>';
    $txt .= '</table>';
    $txt .= '<h1 style="font-size:30px;color:#000;">INNOVɅTION <span style="color:#5ac1c5;">ɅCɅDEMY</span> </h1>';
    $txt .= "</div>";

    $txt .= '</body></html>';

    // $mailTo tregon se ne cilen email duhet te dergohen informatat e derguara nga klienti
    $mailTo = 'drfejzullahu@gmail.com';

    // Per te derguar nje HTML mail, tipi i permbajtjes duhet vendosur ne menyre te domosdoshme
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    // Mesazhi qe tregon se ke pranuar nje email nga useri qe ti ka dergu informatat 
    $headers[] = "From: " . $mailFrom;

    //  dergimi i email-it me funksionin e meposhtem
    mail($mailTo, $subject, $txt, implode("\r\n", $headers));
}



?>
