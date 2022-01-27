<?php
/* эти поля должны быть пустыми (антиспам-фильтр) */
if (($_POST['name'] != '') or ($_POST['mail'] != '') or ($_POST['tel'] != '') or ($_POST['url'] != '') or ($_POST['email'] != '') or ($_POST['phone'] != '')) {
    echo 'Сработал антиспам-фильтр, данные в обработчик не переданы.';
    die;
}
/* ссылка на страницу */
if (isset($_POST['pago'])) {
    $form_page_link = $_POST['pago'];
}
/* Проверка на заполненность */
if (($_POST['telefono'] == '') && ($_POST['posto'] == '') && ($_POST['telegram'] == '') && ($_POST['viber'] == '') && ($_POST['whatsapp'] == '') && ($_POST['skype'] == '')) {
    echo '<script type="text/javascript">';
    echo 'alert("Пустые все контактные данные. Обработчик в подобных ситуациях не запускается2.");';
    echo 'window.location.href="' . $form_page_link . '";';
    echo '</script>';
    die;
}

/* на какую почту отправляем письмо */
// $support_mail = 'founders@snb.partners';

/* вынимаем данные человека */
/* имя */
// if (isset($_POST['nomo'])) {
//     $user_name = $_POST['nomo'];
// }
// if (isset($_POST['firma'])) {
//     $user_nameFirm = $_POST['firma'];
// }
/* почта */
// if (isset($_POST['posto'])) {
//     $user_mail = $_POST['posto'];
// }
/* телефон или скайп */
// if (isset($_POST['telefono'])) {
//     $user_phone = $_POST['telefono'];
// }
/* сообщение человека */
// if (isset($_POST['messago'])) {
//     $user_mes = $_POST['messago'];
// }


/* вынимаем данные о форме */
/* Где расположена форма */
// if (isset($_POST['formo'])) {
//     $form_location = $_POST['formo'];
// }
/* ссылка на страницу */
// if (isset($_POST['pago'])) {
//     $form_page_link = $_POST['pago'];
// }
/* Данные о форме (УТП) */
// if (isset($_POST['ago'])) {
//     $form_data = $_POST['ago'];
// }


/* формируем тему письма */
// $mail_subject = 'Заявка с сайта ' . $_SERVER['HTTP_HOST'];
// if ($user_name != '') {
//     $mail_subject .= ' от ' . $user_name;
// };
// if ($user_mail != '') {
//     $mail_subject .= ', e-mail: ' . $user_mail;
// };
// if ($user_phone != '') {
//     $mail_subject .= ', тел: ' . $user_mail;
// };
//
///* формируем содержимое тела письма */
  // $mail_message = '<html>
  // <head>
  //     <title>' . $mail_subject . '</title>
  // </head>
  // <body>
  // <div>Заявка с сайта ' . $_SERVER['HTTP_HOST'] . '</div>';
  // if ($user_name != '') {
  //     $mail_message .= '<div>Имя: ' . $user_name . '</div>';
  // }
  // if ($user_nameFirm != '') {
  //     $mail_message .= '<div>Название организации: ' . $user_nameFirm . '</div>';
  // }
  // if ($user_mail != '') {
  //     $mail_message .= '<div>E-mail или телефон: ' . $user_mail . '</div>';
  // }
  // if ($user_phone != '') {
  //     $mail_message .= '<div>Телефон: ' . $user_phone . '</div>';
  // }
  // if ($user_mes != '') {
  //     $mail_message .= '<div>Вопрос: ' . $user_mes . '</div>';
  // }
  // if ($form_data != '') {
  //     $mail_message .= '<div>Данные о форме: ' . $form_data . '</div>';
  // }
  // if ($form_location != '') {
  //     $mail_message .= '<div>Где расположена форма: ' . $form_location . '</div>';
  // }
//if ($form_page_link != '') {
//    $mail_message .= '<div>Ссылка на страницу: <a href="' . $form_page_link . '">' . $form_page_link . '</a></div>';
//}

$mail_message .= '</body></html>';

$crm_message = '
<div>Заявка с сайта ' . $_SERVER['HTTP_HOST'] . '</div>';
if ($user_name != '') {
    $crm_message .= '<div>Имя: ' . $user_name . '</div>';
}
if ($user_nameFirm != '') {
    $crm_message .= '<div>Название организации: ' . $user_nameFirm . '</div>';
}
if ($user_mail != '') {
    $crm_message .= '<div>E-mail или телефон: ' . $user_mail . '</div>';
}
if ($user_phone != '') {
    $crm_message .= '<div>Телефон: ' . $user_phone . '</div>';
}
if ($user_mes != '') {
    $crm_message .= '<div>Вопрос: ' . $user_mes . '</div>';
}
if ($form_data != '') {
    $crm_message .= '<div>Данные о форме: ' . $form_data . '</div>';
}
if ($form_location != '') {
    $crm_message .= '<div>Где расположена форма: ' . $form_location . '</div>';
}
if ($form_page_link != '') {
    $crm_message .= '<div>Ссылка на страницу: <a href="' . $form_page_link . '">' . $form_page_link . '</a></div>';
}


/* формируем заголовок письма */
  // $mail_headers = "MIME-Version: 1.0\r\n";
  // $mail_headers .= "Content-type: text/html; charset=utf-8\r\n";
  // $mail_headers .= "From: Form notice <notice@" . $_SERVER['HTTP_HOST'] . ">" . "\r\n";
  // $crm_headers = "Content-type: text/html; charset=utf-8\r\n";
  // $crm_headers .= "From: Form notice <notice@" . $_SERVER['HTTP_HOST'] . ">" . "\r\n";

//

//if (mail($support_mail, $mail_subject, $mail_message, $mail_headers)) {
//    $send_status = 'true'
//}
/* отправляем в телеграмм */
//$botToken = "";
//$chat_id = "";
//$telegram_message .= 'Заявка с сайта ' . $_SERVER['HTTP_HOST'] . PHP_EOL;
//if ($user_name != '') {
//    $telegram_message .= 'Имя: ' . $user_name . PHP_EOL;
//}
//
//if ($user_nameFirm != '') {
//    $telegram_message .= 'Название организации: ' . $user_nameFirm . PHP_EOL;
//}
//if ($user_mail != '') {
//    $telegram_message .= 'E-mail: ' . $user_mail . PHP_EOL;
//}
//if ($user_phone != '') {
//    $telegram_message .= 'Телефон: ' . $user_phone . PHP_EOL;
//}
//
//if ($user_mes != '') {
//    $telegram_message .= 'Вопрос: ' . $user_mes . PHP_EOL;
//}
//if ($form_data != '') {
//    $telegram_message .= 'Данные о форме : ' . $form_data . PHP_EOL;
//}
//if ($form_location != '') {
//    $telegram_message .= 'Где расположена форма: ' . $form_location . PHP_EOL;
//}
//if ($form_page_link != '') {
//    $telegram_message .= 'Ссылка на страницу: ' . $form_page_link . PHP_EOL;
//}
////$telegram_message= mb_convert_encoding($telegram_message, 'CP1252');
//
//$bot_url = "https://api.telegram.org/bot$botToken/";
//$url = $bot_url . "sendMessage?chat_id=" . $chat_id . "&text=" . urlencode($telegram_message);
//file_get_contents($url);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Turnkey STO solution from the Leaders of Blockchain</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/slick-theme.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css"/>
    <meta property="og:title" content="Turnkey STO solution from the Leaders of Blockchain">
    <meta property="og:site_name" content="slovak.education">
    <meta property="og:url" content="slovak.education">
    <meta property="og:description" content="Turnkey STO solution from the Leaders of Blockchain">
    <meta property="og:image" content="../img/opengraph.jpg">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Turnkey STO solution from the Leaders of Blockchain">
    <meta name="twitter:description" content="Turnkey STO & Fundraising solution from the Leaders of Blockchain">
    <meta name="twitter:image" content="img/opengraph.jpg">
    <meta itemprop="image" content="img/opengraph.jpg">
    <meta name="description" content="Turnkey STO & Fundraising solution from the Leaders of Blockchain">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css"/>
</head>
<body class="bodyBlog">

<svg viewBox="0 0 800 600" class="burger">
    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top_bar"/>

    <path d="M300,320 L540,320" class="middle_bar"/>

    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom_bar"
            transform="translate(480, 320) scale(1, -1) translate(-480, -318)"/>
</svg>
<div class="unit unit_first blog thanks">
    <div class="wr">
        <div class="row center sb header">
            <div class="logo ">
                <a href="index.html">
                    <svg id="logo" xmlns="http://www.w3.org/2000/svg" width="159" height="56.804"
                            viewBox="0 0 159 56.804">
                        <g transform="translate(-64 -36)">
                            <path d="M902.549,1269.667a16.445,16.445,0,0,1-.093-2.593c.059-1.171.2-1.036,1.328-1.036l13.949-.018c4.059,0,3.719-.38,5.609,1.457.5.488,1.843,1.607,2.02,2.161C920.443,1269.892,908.989,1269.757,902.549,1269.667Zm.551-21.924c.914.311,4.216,3.826,5.256,4.822.444.425.888.854,1.348,1.3.854.826,3.317,2.939,3.563,3.721l-10.186-.046Zm-8.395-20.5c-.287,4.013.029,8.733-.022,12.85-.059,4.812-.333,35.84.043,38.07l50.887.023c-.115-.817-3.833-4.287-4.654-5.084-.53-.515-.965-.956-1.556-1.543-3.61-3.584-9.268-9.547-12.749-12.725-1.575-1.438-4.184-4.552-6.2-6.423l-20.969-20.643C898.485,1230.789,895.761,1227.494,894.705,1227.24Z"
                                    transform="translate(-830.532 -1185.379)" fill="#e78319" fill-rule="evenodd"/>
                            <path d="M1920.455,208.5c.575.242,16.834,16.868,19.446,19.35,1.236,1.174,5.181.549,7.159.527,4.8-.054,11.047-.4,15.708.075l.028,9.916c-1.522-.638-4.673-4.763-6.429-6.184-1.107-.9-4.086-.442-5.764-.443-2.119,0-4.334-.068-6.44.021.329.843,11.738,11.976,13.275,13.522l9.991,9.936c.616.617,1.063,1.043,1.66,1.66.361.373.53.53.894.887a3.545,3.545,0,0,1,.423.443c.357.471.176.212.266.476l.547-.146,0-38.552c-5.453-.264-11.748-.039-17.291-.043-2.878,0-5.776.024-8.65,0-1.618-.016-1.793-.674-2.627-1.49a10.09,10.09,0,0,1-1.974-2.214l30.345-.12a4.015,4.015,0,0,0,.246-2.076c-.016-1.616.185-5.109-.159-6.094l-.383-.108c-1.486-.29,1.061.095-.408-.07l-49.6,0c-.661.306-.521-.272-.258.731Z"
                                    transform="translate(-1850.339 -171.723)" fill="#fefefd" fill-rule="evenodd"/>
                            <path d="M17784.107,1083.615c-3.268,2.76-8.428,3.239-11.137.154-2.789-3.176-1.545-9.26,1.928-10.183a28.185,28.185,0,0,1,2.4,2.532C17778.859,1077.87,17783.906,1082.542,17784.107,1083.615Zm-6.439-13.2c-.953-1.657-3.043-3.135-3.279-5.614-.271-2.8,1.939-4.546,4.711-4.217C17784.547,1061.227,17783.02,1069.376,17777.668,1070.411Zm-7.7-3.681c.3.521.309.838.662,1.447,1.014,1.75,2.691,3.04,3.025,4.226-11.479,4.736-8.3,17.638,4.076,16.219a11.975,11.975,0,0,0,6.029-2.558,12.9,12.9,0,0,1,1.76-1.317,15.267,15.267,0,0,1,2.334,2.07c1.344,1.355.941,1.233,3.422,1.216l6.688.031c.992-.081.527.17.807-.331.994-1.78-3.686-1.187-5.971-2.541-1.07-.635-3.562-2.612-4.02-3.57a48.164,48.164,0,0,0,3.525-5.629c1.264-2.336,1.678-3.728,4.678-4.349a17,17,0,0,0,1.918-.367.735.735,0,0,0-.133-1.33l-9.264-.052c-2.045,0-3.283-.654-2.979,1.416,1.57.373,2.906.446,3.98,1.323.34,2.089-1.934,6.831-3.215,7.656-.613-.308-7.8-7.527-8.213-8.631,1.311-.958,3.3-1.475,4.99-3.445,2.559-2.99.939-5.419.879-6.485-.051-.035-.117-.085-.148-.112s-.107-.079-.146-.112l-.689-.694a5.88,5.88,0,0,0-3.1-1.733C17776.76,1057.96,17768.979,1059.244,17769.973,1066.73Z"
                                    transform="translate(-17605.555 -1017.834)" fill="#fbfbfb" fill-rule="evenodd"/>
                            <path d="M23811.016,1181.111c13.1-.006,8.979,15.481-1.66,12.445-2.211-.631-2.092-1.766-2.084-4.082.006-2.062.029-4.144,0-6.2-.02-1.406-.391-2.025.848-2.142C23808.893,1181.053,23810.191,1181.112,23811.016,1181.111Zm-3.676-12.573c13.68-1.656,10.063,7.914,8.318,9.412s-4.156,1.5-6.42,1.533c-1.211.017-1.793.313-1.973-.632C23807.129,1178.124,23807.217,1169.468,23807.34,1168.539Zm-9.568-.763c.391,1.018.943.231,3.063,1.105,1.418.585,1.4,1.3,1.4,3.1l.008,18.155c0,3.764-.9,3.523-4.439,3.871l-.094,1.383,14.193.043a19.427,19.427,0,0,0,8.207-1.311c5.809-2.6,6.273-8.435,2.184-11.5-3.137-2.349-6.2-1.989-7-2.673,3.041-1.008,8.617-2.159,7.684-7.964-.979-6.087-11.906-5.185-17.275-5.188l-7.93.084Z"
                                    transform="translate(-23602.043 -1125.242)" fill="#fbfbfb" fill-rule="evenodd"/>
                            <path d="M13167.516,1072.331c1.463,1.025.3,2.491,9.113,5.248,3.514,1.1,7.889,2.238,7.637,6.935-.234,4.387-5.685,5.4-9.7,3.974-3.687-1.31-5.392-4.228-6.753-8.027l-1.914.011.318,9.7,1.932.057.864-1.312c1.031.105,2.825,1.01,4.2,1.363,10.1,2.586,17.925-4.114,15.272-10.82-2.041-5.161-10.26-5.578-14.393-7.983-7.166-4.169.258-11.907,7.064-7.5,2.156,1.4,4.316,5.169,4.182,6.972l2.151.142-.173-9.4c-1.7-.068-1.927-.4-2.691,1.179a16.789,16.789,0,0,1-3.006-1.115,13.361,13.361,0,0,0-9.982.353,8.685,8.685,0,0,0-4.061,3.669C13166.288,1068.193,13166.872,1069.678,13167.516,1072.331Z"
                                    transform="translate(-13031.355 -1020.056)" fill="#fbfbfb" fill-rule="evenodd"/>
                            <path d="M26588.311,7684.357c1.822-.044,1.293,1.96,1.293,3.657,0,4.744-.932,2.17-1.4,3.65a10.2,10.2,0,0,0,3.594-.108c-.895-1.061-1.516.163-1.545-2.42-.014-1.3-.025-2.744.061-4.034a13.9,13.9,0,0,1,1.527,3.161l1,2.343c.018.035.217.4.246.441.248.347.053.138.355.383l.9-1.421c.523-1.18,1.736-4.183,2.414-4.694l.014,5.579-1.271.8,3.838,0-1.127-.877-.027-6.234,1.318-.692-2.955-.033c-.719,1.1-1.832,4.718-2.656,5.5-1.154-1.449-1.732-4.132-2.625-5.535C26588.982,7683.754,26588.3,7683.45,26588.311,7684.357Z"
                                    transform="translate(-26376.49 -7604.74)" fill="#f3f5f4" fill-rule="evenodd"/>
                            <path d="M21118.662,7685.945c1.383-.078,2.893-.021,2.779,1.7-.1,1.517-1.537,1.626-2.859,1.593Zm-1.564,6.593c-.461.366-.162.06-.555.318-.551.364-.281-.189-.455.428l3.717.019c-.449-1.216-1.312,1.047-1.225-3.517,2.951.05,2.365,4.764,6.2,3.416-.6-.606-1.416-.319-3.824-3.695.8-.4,1.609-.613,1.934-1.372a1.713,1.713,0,0,0-.713-2.251c-1.084-.651-4.639-.562-6.129-.369.576,1.26,1.174-.859,1.127,2.813A38.705,38.705,0,0,1,21117.1,7692.538Z"
                                    transform="translate(-20935.799 -7606.388)" fill="#f3f5f4" fill-rule="evenodd"/>
                            <path d="M16377.5,7695.2c1.287,1.582,1.551-.678,1.557,3.931.008,4.879-.881,2.442-1.451,3.879l3.678-.058c-.609-1.722-1.8,2.262-1.568-6.066,1.529.862,4.584,6.219,6.027,6.129.1-1.448.043-3.083.035-4.55-.018-3.845.8-1.986,1.389-3.27-.652-.065-1.316-.071-1.979-.072l-1.4.174c-.029-.05-.109.039-.158.069,1.418,1.03,1.725-.163,1.488,5.512-.662-.342-4.4-4.9-5.016-5.735Z"
                                    transform="translate(-16224.491 -7616.075)" fill="#f3f5f4" fill-rule="evenodd"/>
                            <path d="M19405.617,7663.178c4.088-2.223,5.414,5.338,2.4,6.648C19403.994,7671.574,19402.572,7664.834,19405.617,7663.178Zm.043-.66c-5.814,1.679-3.1,9.4,2.469,7.9C19413.484,7668.967,19411.293,7660.894,19405.66,7662.519Z"
                                    transform="translate(-19232.014 -7583.449)" fill="#f3f5f4" fill-rule="evenodd"/>
                            <path d="M14753.6,7670.986c-.583-5.416,5.183-5.733,5.58-1.337C14759.667,7675.1,14754.042,7675.131,14753.6,7670.986Zm1.768-4.687c-5.614,1.29-3.715,9.226,2.125,7.98C14762.83,7673.142,14761.279,7664.941,14755.363,7666.3Z"
                                    transform="translate(-14608.337 -7587.271)" fill="#f3f5f4" fill-rule="evenodd"/>
                            <path d="M18169.848,7672.922a4.358,4.358,0,0,0-.176,2.537c1.043.013.43-.243,1.473,0a5.106,5.106,0,0,0,2.027.242c2.971-.268,3.76-3.372.875-4.476-1.6-.613-1.738-.441-2.961-1.4-.016-1.41.5-2.235,2.236-1.673,1.182.382.963,1.433,1.842,2.083a4.091,4.091,0,0,0,.164-2.521c-1.687.236-.912-.051-2.418-.187a3.161,3.161,0,0,0-2.359.638c-3.113,2.716,3.057,4.2,3.5,4.612a1.379,1.379,0,0,1-.18,2.265C18171.488,7676.2,18170.635,7673.493,18169.848,7672.922Z"
                                    transform="translate(-18006.262 -7588.619)" fill="#f3f5f4" fill-rule="evenodd"/>
                            <path d="M24924.488,7696.385c1.586-1.328,1.859-.487,1.848-3.47-.008-1.828-.564-3.979,1.41-3.916.016-.786-.875-.542-1.7-.537a3.293,3.293,0,0,0-1.918.243c1.168.852,1.551-.5,1.551,3.321,0,1.848.2,3.3-1.449,3.762-1.414.392-3.02.02-3.2-1.561a35.263,35.263,0,0,1,.055-4.976c.512-.319.859-.188,1.09-.67l-3.664-.113c.488,1.145,1.125-.1,1.133,2.213C24919.654,7694,24918.664,7697.186,24924.488,7696.385Z"
                                    transform="translate(-24716.402 -7609.418)" fill="#ebeff1" fill-rule="evenodd"/>
                            <path d="M22592.467,7702.289c1.361-.3.541-1.8,3.146-1.6l.086,6.646-1.5.523a9.657,9.657,0,0,0,4.27.09c-.307-.531-.584-.341-1.312-.622l-.047-6.656c1.877-.062,1.711.05,2.43.945.7.873-.117.3.8.662l-.021-2.056-7.869-.016Z"
                                    transform="translate(-22403.719 -7621.137)" fill="#ebeff1" fill-rule="evenodd"/>
                            <path d="M13319.576,7671.768c-1.3.373-1.191,2.3-3.924,1.527-1.426-.4-2.236-1.941-2.136-3.759.093-1.7.968-2.966,2.353-3.2a2.213,2.213,0,0,1,2.041.658,2.725,2.725,0,0,1,.522.786l.692,1c.095-.175.229-.139.25-1.214a14.071,14.071,0,0,0-.112-1.533c-.909.086-.3.232-1.163.117s-2.137-.783-3.959.166a4.16,4.16,0,0,0-2.139,4.327C13312.564,7674.917,13319.043,7675.05,13319.576,7671.768Z"
                                    transform="translate(-13176.575 -7586.934)" fill="#f3f5f4" fill-rule="evenodd"/>
                            <path d="M24050.367,7692.6l1.186.6a36.273,36.273,0,0,1,.066,4.052c.027,3.546-.113,1.76-1.346,2.876l4.023.108c-.289-.59-.684-.455-1.266-.727l-.016-6c.23-.723.063-.268.541-.615.7-.508.15.506.648-.509C24053.1,7692.38,24051.055,7692.208,24050.367,7692.6Z"
                                    transform="translate(-23853.156 -7613.315)" fill="#f7f7f7" fill-rule="evenodd"/>
                        </g>
                    </svg>
                </a>
            </div>

            <nav id="navigation" class="nav row">
                <a href="../blog.html">Blog</a>
                <a href="../index.html#section3">Members</a>
                <a href="../index.html#section4">Contact us</a>
            </nav>
            <nav class="nav navMobile row">
                <a href="../blog.html">Blog</a>
                <a href="../index.html#section3">Members</a>
                <a href="../index.html#section4">Contact us</a>
            </nav>
        </div>

    </div>
    <div class="wr">
        <div class="textFirst column">

            <h1 class="textanimated">Your message has been sent. </h1>
            <span class="textanimated">We will contact with you as soon as possible!</span>
            <a class=" loadPopupBtn btn" href="../index.html">Go to site</a>

        </div>

    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>

<script src="../js/blog.js"></script>


</body>

</html>
