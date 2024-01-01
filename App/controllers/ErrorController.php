<?php

namespace App\Controllers;

class ErrorController
{

  /**
   * 404 not found error
   *
   * @return void
   */
  public static function notfound($message = 'Resource not found')
  {

    http_response_code(404);

    loadView('error', ['status' => 404, 'message' => $message]);
  }

  /**
   * 403 unauthorized error
   *
   * @return void
   */
  public static function unauthorize($message = 'You are not authorized to view this page')
  {

    http_response_code(403);

    loadView('error', ['status' => 403, 'message' => $message]);
  }
}

?>
