<?php
include('auth2.php');
 ?>
 <!Doctype HTML>
 <html>
 <head>
   <title> Select Pieces </title>
   <script src="http://www.cs.unc.edu/Courses/comp426-f16/jquery-3.1.0.js"></script>
   <script src="CharSelection.js"></script>
   <link rel = "stylesheet" href = "index.css">
 </head>

 <body>
<h1 id='ice' style = "text-align: center;">ICE INSIGNIA</h1>
   <table class = Player1TeamList>
     <tr><td><?php echo $_SESSION['userName1'];?></td></tr>
     <tr>

       <th>Characters</th>
     </tr>
   <form>
     <tr>
     <td><div class = char>
       <img src="Sprites\tank.gif" style="height: 100%; width: 100%" title="Warrior" alt='Warrior'>
     </div></td>
     <td><select id ="fighter1">
       <option value=0>0</option>
       <option value=1>1</option>
       <option value=2>2</option>
     </select></div></td></tr>

     <tr>
     <td><div class = char><img src="Sprites\swordsman.gif" style="height: 100%; width: 100%" title='Swordsman' alt='Swordsman'></div></td>
     <td><select id ="swordsman1">
       <option value=0>0</option>
       <option value=1>1</option>
       <option value=2>2</option>
     </select></td></tr>


     <tr>
     <td><div class = char><img src="Sprites\druid.gif" style="height: 100%; width: 100%" alt='Druid' title="Druid"></div></td>
     <td><select id ="druid1">
       <option value=0>0</option>
       <option value=1>1</option>
       <option value=2>2</option>
     </select></td></tr>

     <tr>
     <td><div class = char><img src="Sprites\priest.gif" style="height: 100%; width: 100%" alt='Priest' title="Priest"></div></td>
     <td><select id ="priest1">
       <option value=0>0</option>
       <option value=1>1</option>
       <option value=2>2</option>
     </select></td></tr>



     <tr>
     <td><div class = char><img src="Sprites\mage.gif" style="height: 100%; width: 100%" alt='Mage' title="Mage"></div></td>
     <td><select id ="mage1">
       <option value=0>0</option>
       <option value=1>1</option>
       <option value=2>2</option>
     </select></td><td><button id="submitButton">Submit</button></td></tr>
   </form>

   <table class = Player2TeamList>
     <tr><td></td><td><?php echo $_SESSION['userName2'];?></td></tr>
     <tr>
       <th></th>
       <th>Characters</th>
     </tr>
   <form>
     <tr>
     <td><select id ="fighter2">
       <option value=0>0</option>
       <option value=1>1</option>
       <option value=2>2</option>
     </select></div></td>
     <td><div class = char><img src="Sprites\tank.gif" style="height: 100%; width: 100%" alt='Warrior' title="Warrior"></div></td></tr>

     <tr>
     <td><select id ="swordsman2">
       <option value=0>0</option>
       <option value=1>1</option>
       <option value=2>2</option>
     </select></td>
     <td><div class = char><img src="Sprites\swordsman.gif" style="height: 100%; width: 100%" alt='Swordsman' title="Swordsman"></div></td></tr>


     <tr>
     <td><select id ="druid2">
       <option value=0>0</option>
       <option value=1>1</option>
       <option value=2>2</option>
     </select></td>
     <td><div class = char><img src="Sprites\druid.gif" style="height: 100%; width: 100%" alt="Druid" title="Druid"></div></td></tr>

     <tr>
     <td><select id ="priest2">
       <option value=0>0</option>
       <option value=1>1</option>
       <option value=2>2</option>
     </select></td>
     <td><div class = char><img src="Sprites\priest.gif" style="height: 100%; width: 100%" alt="Priest" title="Priest"></div></td></tr>


     <tr>
     <td><select id ="mage2">
       <option value=0>0</option>
       <option value=1>1</option>
       <option value=2>2</option>
     </select></td>
     <td><div class = char><img src="Sprites\mage.gif" style="height: 100%; width: 100%" alt="Mage" title="Mage"></div></td>

   </tr>
   </form>

   <button class="p2hov" href="destroy.php">Logout</button>




 </body>
 </html>
