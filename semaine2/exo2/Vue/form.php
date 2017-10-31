<?php
require_once('header.php');

?>

<body>
  <div class="shade">
		<div class="blackboard">
				<form class="form" method='post'>
						<p>
								<label>name</label>
								<input type="text" name="name" />
						</p>
						<p>
								<label>age</label>
								<input type="text" name='age' />
						</p>
						<p>
								<label>sexe</label>
								<input type="text" name="sexe" />
						</p>
						<p>
								<label>color</label>
								<input type="text" name=color />
						</p>

						<p class="wipeout">
								<input type="submit" value="Send" />
						</p>
				</form>
		</div>
</div>


<div class="showcat">


<?php

// affichage des chats
foreach ($cat as $donnees) {


echo ('nom:'."\n");
echo $donnees['name'].("\n");
echo ('age:'. "\n");
$donnees['age'].("\n") ;
echo ('ans et de couleur:'. "\n");
$donnees['color'];



}
require_once('footer.php');

?>
</div>
