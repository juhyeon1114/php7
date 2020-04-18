<?php

/**
 * Error Reporting
 */
//ini_set('display_errors', 'Off'); -> 에러를 콘솔에만 출력
//error_reporting(0); -> 에러를 웹상, 콘솔에 출력하지 않음
//set_error_handler(function () {}); -> 에러에 대한 처리

// echo $msg;

/**
 * File upload
 */
// switch ($_SERVER['REQUEST_METHOD']) {
//     case 'GET' : 
//         echo <<<'HTML'
// <form action="/" method="POST" enctype="multipart/form-data">
//     <input type="file" name="uploads">
//     <input type="submit">
// </form>
// HTML;
//         break;

//     case 'POST' : 
//         $file = $_FILES['uploads'];
//         $pathinfo = pathinfo($file['name']);
//         $accepts = [
//             'png', 'jpg', 'txt'
//         ];
//         if ( in_array(strtolower($pathinfo['extension']), $accepts) && is_uploaded_file($file['tmp_name']) ) {
//             move_uploaded_file($file['tmp_name'], dirname(__FILE__) . '/uploads/' . $file['name']);
//         }
//         break;

//     default : http_response_code(404);
// }

/**
 * File download
 */
// $path = filter_input(INPUT_GET, 'path', FILTER_SANITIZE_STRING);
// $path = './uploads/temp.txt'; // practice
// $filepath = realpath(__DIR__ . "\\uploads\\" . basename($path)); // basename을 제외한 부분은 제외 -> 보안 강화

// if (file_exists($filepath)) {
//     $pathinfo = pathinfo($filepath);
//     $accepts = [
//         'txt'
//     ];
//     if (in_array(strtolower($pathinfo['extension']), $accepts)) {
//         header('Content-type: application/octet-stream');
//         header('Content-Disposition: attachment; filename=' . basename($filepath));
//         header('Content-Transfer-Encoding: binary');
//         header('Content-Length: ' . filesize($filepath));

//         readfile($filepath);
//     }
// }

/**
 * Session
 * 
 * seesion.use_strict_mode
 * session.use_cookies
 * session.use_only_cookies
 * 
 * session.cookie_httpOnly -> javascript injection
 * 
 * session.cookie_secure -> https 를 쓴다면 사용하는 것이 좋음
 */

//  session_save_path(__DIR__ . '/sessions');
//  session_start();

// echo '<script>document.write(document.cookie)</script>';

/**
 * Cookie Lifetime
 */
//  session_save_path(__DIR__ . '/sessions');

//  ini_set('session.gc_maxlifetime', 3); // 3초
//  session_set_cookie_params(3); //3초
 
//  session_start();
//  session_gc(); // lifetime이 지난 session들을 삭제해줌 (100% 정확하진 않음)

/**
 * Timestamp based session (은행과 같은 critical한 서비스에서 사용됨)
 */
//  $_SESSION['timestamp'] = $_SERVER['REQUEST_TIME'];

//  $time = strtotime('+10 seconds');
//  $diff = $time - $_SESSION['timestamp'];
//  $sessionTimeOut = 10;

//  if ($diff >= $sessionTimeOut) {
//     echo 'Session TimeOut';
//     exit;
//  }

//  /**
//   * Renewal session
//   */
// session_regenerate_id();
// $_SESSION['timestamp'] = time();



/**
 * SQL injection
 * -> mysqli statement 를 사용하면 SQL Injection 공격을 방어할 수 있다.
 */

//  $conn = mysqli_connect(
//      'localhost',
//      'root',
//      '152311',
//      'myapp_test'
//  );

//  $_POST = [
//     'email' => 'money1994@naver.com',
//     'password' => 'secret'
//  ];

//  ['email' => $email, 'password' => $password] = $_POST;

//  $stmt = mysqli_prepare($conn, 'SELECT * FROM users WHERE email = ? LIMIT 1');
//  mysqli_stmt_bind_param($stmt, 's', $email);
//  mysqli_stmt_execute($stmt);

//  $result = mysqli_stmt_get_result
//  if (mysqli_num_rows($result)) {
//     echo 'hello';
//  }

/**
 * XSS (Cross Site Scripting)
 */
// switch ($_SERVER['REQUEST_METHOD']) {
//     case 'GET' : 
//     echo <<<'HTML'
// <form action="/" method="POST">
//     <textarea name="content" rows="25" cols="50"></textarea>
//     <input type="submit">
// </form>
// HTML;
//     break;

//     case 'POST' :
//         // echo $_POST['content']; 
//         // echo htmlentities($_POST['content']); //script태그를 일반 string으로 바꿔줌
//         // echo filter_input(INPUT_POST, 'content', FILTER_SANITIZE_FULL_SPECIAL_CHARS); //script태그를 일반 string으로 바꿔줌
//         // echo strip_tags($_POST['content']); //script 내부만 출력하고 script태그 자체는 지움
//         break;
//     default:
//         http_response_code(404);

// }

/**
 * CSRF (Cross Site Request Forgery, 위조 요청 공격)
 */

 switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
        $_SESSION['token'] = bin2hex(random_bytes(32));
        output_add_rewrite_var('csrf_token', $_SESSION['token']);
        echo <<<'HTML'
<form action="/" method="POST">
    <input type="hidden" name="uid" value="1">
    <!-- <input type="hidden" name="token" value=$_SESSION[token]> -->
    <input type="submit">
</form>
HTML;
        break;
    case 'POST':
        if (hash_equals($_SESSION['token'], $_POST['csrf_token'])) {
            $uid = $_POST['uid'];
            echo 'hello';
        }
        break;
    default:
        http_response_code(404);
 }
