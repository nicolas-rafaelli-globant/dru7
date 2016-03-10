<html>
 <body>
  <table class="roundy" style="float:left; margin-left:30%; text-align:center; width:33%; max-width:420px; min-width:360px; background: #FF00FF; border: 2px solid #A1871F; padding:2px;">
   <tbody>
    <tr>
     <td colspan="4">
      <table width="100%" class="roundy" style="background:#FF00FF; padding:2px; border-spacing:3px;">
       <tbody>
        <tr>
         <td colspan="3" width="75%" class="roundy" style="background:#FFF;">
          <table width="100%" style="background:none;">
           <tbody>
            <tr>
             <td width="50%"> 
              <big><big><b><?php print $pokemon_data['title'] ?></b></big></big><br>
			       </td>
			       <th width="25%" class="roundy" style="background:#FFF;"> 
			        <big><big><span style="color:#000;">#<?php print $pokemon_data['number'] ?></span></big></big>
			       </th>
            </tr>
            <tr>
			       <td colspan="4">
			        <table width="100%" class="roundy" style="background:#FFF;">
			         <tbody>
			   	      <tr>
			   	       <td colspan="6"> 
			   	        <img alt="<?php print $pokemon_data['title'] ?>" src="<?php print $pokemon_data['image'] ?>"><br><small><?php print $pokemon_data['title'] ?><br>Gen: <?php print $pokemon_data['gen'] ?></small>
				         </td>
			          </tr>
			         </tbody>
			        </table>
			       </td>
			      </tr>
           </tbody>
          </table>
         </td>
        </tr>
        <tr>
         <td class="roundy" colspan="4" style="background:#FF00FF; padding:2px;"> 
          <b><span style="color:#000;">Type</span></b>
          <table class="roundy" width="100%" style="background: #FFF; padding-top: 3px;">
           <tbody>
            <tr>
             <td>
              <table style="margin:auto; background:none;">
               <tbody>
                <tr>
                 <?php
                  $color_p = '';
                  switch ($pokemon_data['primary']) {
                   case 'Electric':
                    $color_p = 'F8D030';
                    break;
                   case 'Grass':
                    $color_p = '78C850';
                    break;
                   case 'Poison':
                    $color_p = 'A040A0';
                    break;
                   case 'Fire':
                    $color_p = 'F08030';
                    break;
                   case 'Fly':
                    $color_p = 'A890F0';
                    break;
                   case 'Water':
                    $color_p = '6890F0';
                    break;
                   case 'Ground':
                    $color_p = 'E0C068';
                    break;
                   case 'Bug':
                    $color_p = 'A8B820';
                    break;
                   case 'Steel':
                    $color_p = 'B8B8D0';
                    break;
                   case 'Rock':
                    $color_p = 'B8A038';
                    break;
                   case 'Dragon':
                    $color_p = '7038F8';
                    break;
                   case 'Fairy':
                    $color_p = 'EE99AC';
                    break;
                   case 'Psychic':
                    $color_p = 'F85888';
                    break;
                   case 'Dark':
                    $color_p = '705848';
                    break;
                   case 'Ice':
                    $color_p = '98D8D8';
                    break;
                   case 'Normal':
                    $color_p = 'A8A878';
                    break;
                   case 'Fight':
                    $color_p = 'C03028';
                    break;
                   case 'Ghost':
                    $color_p = '705898';
                    break;
                  }
                 ?>
                 <td width="45px" style="font-size: 85%; line-height:12px; background: #<?php print $color_p; ?>; border-radius: 2px; -moz-border-radius: 2px; -webkit-border-radius: 2px; -khtml-border-radius: 2px; -icab-border-radius: 2px; -o-border-radius: 2px;">
                  <span style="color:#FFF;"><b><?php print $pokemon_data['primary']; ?></b></span>
                 </td>
                 <?php
                  $color_s = '';
                  switch ($pokemon_data['secondary']) {
                   case 'Electric':
                    $color_s = 'F8D030';
                    break;
                   case 'Grass':
                    $color_s = '78C850';
                    break;
                   case 'Poison':
                    $color_s = 'A040A0';
                    break;
                   case 'Fire':
                    $color_s = 'F08030';
                    break;
                   case 'Fly':
                    $color_s = 'A890F0';
                    break;
                   case 'Water':
                    $color_s = '6890F0';
                    break;
                   case 'Ground':
                    $color_s = 'E0C068';
                    break;
                   case 'Bug':
                    $color_s = 'A8B820';
                    break;
                   case 'Steel':
                    $color_s = 'B8B8D0';
                    break;
                   case 'Rock':
                    $color_s = 'B8A038';
                    break;
                   case 'Dragon':
                    $color_s = '7038F8';
                    break;
                   case 'Fairy':
                    $color_s = 'EE99AC';
                    break;
                   case 'Psychic':
                    $color_s = 'F85888';
                    break;
                   case 'Dark':
                    $color_s = '705848';
                    break;
                   case 'Ice':
                    $color_s = '98D8D8';
                    break;
                   case 'Normal':
                    $color_s = 'A8A878';
                    break;
                   case 'Fight':
                    $color_s = 'C03028';
                    break;
                   case 'Ghost':
                    $color_s = '705898';
                    break;
                  }
                 ?>
                 <td width="45px" style="<?php if($pokemon_data['secondary']=='None'): ?><?php print "display: none" ?><?php endif; ?>; font-size: 85%; line-height:12px; background: #<?php print $color_s; ?>; border-radius: 2px; -moz-border-radius: 2px; -webkit-border-radius: 2px; -khtml-border-radius: 2px; -icab-border-radius: 2px; -o-border-radius: 2px;">
                  <span style="color:#FFF;"><b><?php print $pokemon_data['secondary']; ?></b></span>
                 </td>
                </tr>
               </tbody>
              </table>
             </td>
            </tr>
           </tbody>
          </table>
         </td>
        </tr>
        <tr>
         <td class="roundy" colspan="4" style="background:#FF00FF;">
          <b><span style="color:#000;">Ability</span></b>
          <table class="roundy" width="100%" style="background:#FFF;">
           <tbody>
            <tr>
             <td colspan="">
              <span style="color:#000;"><?php print $pokemon_data['ability']; ?></span>
             </td>
            </tr>
           </tbody>
          </table>
         </td>
        </tr>
        <tr>
         <td class="roundy" colspan="4" style="background:#FF00FF;">
          <b>Pokédex Number</b>
          <table width="100%" style="border-collapse:collapse;">
           <tbody>
            <tr>
             <td>
              <table class="roundy" width="100%" style="background:#FFF;">
               <tbody>
                <tr>
                 <td style=""> 
                  #<?php print $pokemon_data['number']; ?><br>
                  <small><span style="color:#000;">Nacional</span></small>
                 </td>
                </tr>
               </tbody>
              </table>
             </td>
            </tr>
           </tbody>
          </table>
         </td>
        </tr>
        <tr>
         <td class="roundy" colspan="4" style="background:#FF00FF;">
          <b><span style="color:#000;">IVs</span></b>
          <table class="roundy" width="100%" style="background:#FFF;">
           <tbody>
            <tr>
             <td class="roundy" width="16%" style="background:#FF5959;">
              <?php if(isset($pokemon_data['ivs']['field_ps'])): ?>
                <?php print $pokemon_data['ivs']['field_ps']; ?>
              <?php endif; ?>
              <br><small>HP</small>
             </td>
             <td class="roundy" width="17%" style="background:#F5AC78;">
              <?php if(isset($pokemon_data['ivs']['field_attack'])): ?>
                <?php print $pokemon_data['ivs']['field_attack']; ?>
              <?php endif; ?>
              <br><small>Atk</small>
             </td>
             <td class="roundy" width="16%" style="background:#FAE078;">
              <?php if(isset($pokemon_data['ivs']['field_defense'])): ?>
                <?php print $pokemon_data['ivs']['field_defense']; ?>
              <?php endif; ?>
              <br><small>Def</small>
             </td>
             <td class="roundy" width="17%" style="background:#9DB7F5;">
              <?php if(isset($pokemon_data['ivs']['field_special_attack'])): ?>
                <?php print $pokemon_data['ivs']['field_special_attack']; ?>
              <?php endif; ?>
              <br><small>Sp.Atk</small>
             </td>
             <td class="roundy" width="17%" style="background:#A7DB8D;">
              <?php if(isset($pokemon_data['ivs']['field_special_defense'])): ?>
                <?php print $pokemon_data['ivs']['field_special_defense']; ?>
              <?php endif; ?>
              <br><small>Sp.Def</small>
             </td>
             <td class="roundy" width="17%" style="background:#FA92B2;">
              <?php if(isset($pokemon_data['ivs']['field_ps'])): ?>
                <?php print $pokemon_data['ivs']['field_speed']; ?><br><small>Speed</small>
              <?php endif; ?>
             </td>
            </tr>
           </tbody>
          </table>
         </td>
        </tr>
        <tr>
         <td class="roundy" colspan="4" style="background:#FF00FF;">
          <b><span style="color:#000;">EVs</span></b>
          <table class="roundy" width="100%" style="background:#FFF;">
           <tbody>
            <tr>
             <td class="roundy" width="16%" style="background:#FF5959;">
              <?php if(isset($pokemon_data['evs']['field_ps'])): ?>
                <?php print $pokemon_data['evs']['field_ps']; ?>
              <?php endif; ?>
              <br><small>HP</small>
             </td>
             <td class="roundy" width="17%" style="background:#F5AC78;">
              <?php if(isset($pokemon_data['evs']['field_attack'])): ?>
                <?php print $pokemon_data['evs']['field_attack']; ?>
              <?php endif; ?>
              <br><small>Atk</small>
             </td>
             <td class="roundy" width="16%" style="background:#FAE078;">
              <?php if(isset($pokemon_data['evs']['field_defense'])): ?>
                <?php print $pokemon_data['evs']['field_defense']; ?>
              <?php endif; ?>
              <br><small>Def</small>
             </td>
             <td class="roundy" width="17%" style="background:#9DB7F5;">
              <?php if(isset($pokemon_data['evs']['field_special_attack'])): ?>
                <?php print $pokemon_data['evs']['field_special_attack']; ?>
              <?php endif; ?>
              <br><small>Sp.Atk</small>
             </td>
             <td class="roundy" width="17%" style="background:#A7DB8D;">
              <?php if(isset($pokemon_data['evs']['field_special_defense'])): ?>
                <?php print $pokemon_data['evs']['field_special_defense']; ?>
              <?php endif; ?>
              <br><small>Sp.Def</small>
             </td>
             <td class="roundy" width="17%" style="background:#FA92B2;">
              <?php if(isset($pokemon_data['evs']['field_speed'])): ?>
                <?php print $pokemon_data['evs']['field_speed']; ?>
              <?php endif; ?>
              <br><small>Speed</small>
             </td>
            </tr>
           </tbody>
          </table>
         </td>
        </tr>
        <tr>
         <td class="roundy" colspan="4" style="background:#FF00FF;">
          <b><span style="color:#000;">Moves</span></b>
          <table class="roundy" width="100%" style="background:#FFF;">
           <tbody>
            <tr>
             <td class="roundy" width="25%" style="background:#FAE078;">
              <?php if(isset($pokemon_data['moves']['field_move_1'])): ?>
                <?php print $pokemon_data['moves']['field_move_1']; ?>
              <?php endif; ?>
              <br><small>1</small>
             </td>
             <td class="roundy" width="24%" style="background:#9DB7F5;">
              <?php if(isset($pokemon_data['moves']['field_move_1'])): ?>
                <?php print $pokemon_data['moves']['field_move_2']; ?>
              <?php endif; ?>
              <br><small>2</small>
             </td>
             <td class="roundy" width="25%" style="background:#A7DB8D;">
              <?php if(isset($pokemon_data['moves']['field_move_3'])): ?>
                <?php print $pokemon_data['moves']['field_move_3']; ?>
              <?php endif; ?>
              <br><small>3</small>
             </td>
             <td class="roundy" width="24%" style="background:#FA92B2;">
              <?php if(isset($pokemon_data['moves']['field_move_4'])): ?>
                <?php print $pokemon_data['moves']['field_move_4']; ?>
              <?php endif; ?>
              <br><small>4</small>
             </td>
            </tr>
           </tbody>
          </table>
         </td>
        </tr>
       </tbody>
      </table>
     </td>
    </tr>
   </tbody>
  </table>
 </body>
</html>