<?php

/**
 * Session?
 * -> 서버 단에 저장되는 데이터 (파일, 메모리 ...)
 */

 /**
  * Set session save path
  * -> session 은 기본적으로 파일로 저장되므로 파일이 저장될 위치를 정해줄 수 있다.
  */
  session_save_path('./sessions');

  /**
   * Start session
   */
  session_start();

  /**
   * Set Session value with Key
   */
  $_SESSION['mySession'] = 'Hello, world';
//   echo $_SESSION['mySession'];

  /**
   * Get Session id
   */
  session_id();

  /**
   * Get Session name
   */
  session_name();

  /**
   * Run GC(Garbage Collector)
   */
  session_gc();

  /**
   * Set/Get Session Cookie Info
   */
  //get
  var_dump(session_get_cookie_params());
  //set
  session_set_cookie_params(1440);

  /**
   * Remove a Session value
   */
  unset($_SESSION['mySession']);

  /**
   * Reset Session
   */
  session_unset();

  /**
   * Remove Session file
   */
  session_destroy(); // 권장하지 않음

/**
 * Get Session status
 */
session_status();

  /**
   * Close Session
   */
  session_commit();

  /**
   * Regenerate Session id
   * -> 재로그인 또는 세션 시간을 연장할때 사용
   */
  session_regenerate_id();