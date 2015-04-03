<?php
  
  /*
  |--------------------------------------------------------------------------
  | Application Helper
  |--------------------------------------------------------------------------
  |
  | Here are a bounch of functions to mainly use in all Views, but you can
  | also use it in your controllers
  |
  */
  namespace ApplicationHelper;
  
  function exist_messages($messages)
  {
    $exist_messages = "";
    foreach ($messages as $type => $message) {
      if ($message) {
        $exist_messages = $type;
        $message_type = $type;
        break;
      }
    }
    return $exist_messages;
  }

  function getAlertType()
  {
    if (Session::get('success')) {
      return 'success';
    }
    if ( Session::get('error')) {
      return 'error';
    }

    return false;
  }

  function getAlertCSSClass($type)
  {
    $alertTypes = array('error'   => 'danger',
                        'success' => 'success');
    return $alertTypes[$type];
  }

  function getAlertIcon($type)
  {
    $alertIcons = array('error'  => 'fa-times',
                        'success' => 'fa-thumbs-up', );
    return $alertIcons[$type];
  }

  function getAlertTitle($type)
  {
    $alertTitles = array('error'  => 'Error',
                         'success' => 'Operación Exitosa', );
    return $alertTitles[$type];
  }