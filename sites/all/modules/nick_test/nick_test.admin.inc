<?php

/**
 * Nick test administration.
 */

function nick_test_form($form, $form_state){
  $hey = '<div><h1>Hey</h1></div>';
  print $hey;
  return $form;
}