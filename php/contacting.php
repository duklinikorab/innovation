<?php
// Kodi qe kontrollon se a eshte bere 'set' forma pasi qe shtypet butoni per te derguar te dhenat
if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    
    // Subjekti nenkupton, se si deshiron te te vij subject-i ne email kur te dergohen te dhenat nga klienti
    $subject = "Kontakti, Innovation Academy";

    // ne variablen $txt - permbajtja e saj tregon body-n e nje emaile, pra te dhenat vijne ne forme te tabeles
    $txt = '<html><body>';

    $txt .= '<p style="color:#333;font-size:18px;">You have received an email from ' . '<strong style="color:#5BC2C5;">' . $name . '</strong>, ' . '<strong>' . $mailFrom  . '</strong></p>';
    $txt .= '<div>';
    $txt .= '<table width="50%" border="1" cellpadding="5px" style="margin:50px;text-align:left;font-size:17px;color:#333;border-collapse:collapse;">';
    $txt .= '<tr style="background-color:#5ac1c5;">';
    $txt .= '<th>' . 'Emri:' . '</th>';
    $txt .= '<td style="background-color:#68E4CD;">' . $name . '</td>';
    $txt .= '</tr>';
    $txt .= '<tr style="background-color:#5ac1c5;">';
    $txt .= '<th>' . 'Email:' . '</th>';
    $txt .= '<td style="background-color:#68E4CD;">' . $mailFrom . '</td>';
    $txt .= '</tr>';
    $txt .= '<tr style="background-color:#5ac1c5;">';
    $txt .= '<th>' . 'Mesazhi:' . '</th>';
    $txt .= '<td style="background-color:#68E4CD;">' . $message . '</td>';
    $txt .= '</tr>';
    $txt .= '</table>';
    $txt .= "</div>";
    $txt .= '<h1 style="font-size:30px;color:#000;">INNOVɅTION <span style="color:#5ac1c5;">ɅCɅDEMY</span> </h1>';

    $txt .= '</body></html>';

     // $mailTo tregon se ne cilen email duhet te dergohen informatat e derguara nga klienti
    $mailTo = "drfejzullahu@gmail.com";

    // Per te derguar nje HTML mail, tipi i permbajtjes duhet vendosur ne menyre te domosdoshme
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    // Mesazhi qe tregon se ke pranuar nje email nga useri qe ti ka dergu informatat 
    $headers[] = "From: " . $mailFrom;

    // dergimi i email-it me funksionin e meposhtem
    mail($mailTo, $subject, $txt, implode("\r\n", $headers));
}
?>
