<?php
/*function nick_theme_preprocess(&$vars, $hook){
  if($hook == 'page'){
    $node       = entity_metadata_wrapper('node',$vars['node']);
    $pokemon    = array();
    $pokemon['title']      = $node->title->value();
    $pokemon['image']      = $node->field_pkmn_image->value()['filename'];
    $pokemon['gen']        = $node->field_generation->value();
    $pokemon['num']        = $node->field_number->value();
    $pokemon['primary']    = $node->field_primary_type->value();
    $pokemon['secondary']  = $node->field_secondary_type->value();
    $pokemon['object']     = $node->field_object->value();
    $pokemon['ability']    = $node->field_ability->value();
    $pokemon['nature']     = $node->field_nature->value();

    $ivs                   = $node->field_ivs->value();
    $pokemon['ips']        = $ivs->field_ps[LANGUAGE_NONE][0]['value'];
    $pokemon['iattack']    = $ivs->field_attack[LANGUAGE_NONE][0]['value'];
    $pokemon['idefense']   = $ivs->field_defense[LANGUAGE_NONE][0]['value'];
    $pokemon['ispattack']  = $ivs->field_special_attack[LANGUAGE_NONE][0]['value'];
    $pokemon['ispdefense'] = $ivs->field_special_defense[LANGUAGE_NONE][0]['value'];
    $pokemon['ispeed']     = $ivs->field_speed[LANGUAGE_NONE][0]['value'];

    $evs                   = $node->field_evs->value();
    $pokemon['eps']        = $evs->field_ps[LANGUAGE_NONE][0]['value'];
    $pokemon['eattack']    = $evs->field_attack[LANGUAGE_NONE][0]['value'];
    $pokemon['edefense']   = $evs->field_defense[LANGUAGE_NONE][0]['value'];
    $pokemon['espattack']  = $evs->field_special_attack[LANGUAGE_NONE][0]['value'];
    $pokemon['espdefense'] = $evs->field_special_defense[LANGUAGE_NONE][0]['value'];
    $pokemon['espeed']     = $evs->field_speed[LANGUAGE_NONE][0]['value'];

    $moves                 = $node->field_moves->value();
    $pokemon['move_1']     = $moves->field_move_1[LANGUAGE_NONE][0]['value'];
    $pokemon['move_2']     = $moves->field_move_2[LANGUAGE_NONE][0]['value'];
    $pokemon['move_3']     = $moves->field_move_3[LANGUAGE_NONE][0]['value'];
    $pokemon['move_4']     = $moves->field_move_4[LANGUAGE_NONE][0]['value'];

    $render = array(
      '#pokemon' => $pokemon,
      '#theme'   => 'pokemon',
    );

    $vars['pokemon'] = $render;
  }
}*/