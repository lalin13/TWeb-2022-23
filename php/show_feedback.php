<?php
include("./config.php");
/*Mostro il commento */

$commentQuery = "SELECT name,valutazione, commento FROM valutazioni";
$commentsResult = mysqli_query($conn, $commentQuery) or die("database error:". mysqli_error($conn));
$commentHTML = '';
while($comment = mysqli_fetch_assoc($commentsResult)){
	/*Imposto il contenuto del commento e l'autore */
	$commentHTML .= '
		<div class="single_feedback">
			<div class="comment-body"><b>Commento:  </b>' .$comment["commento"].'</div>
			<div class="valutation-body"><b>Valutazione:  </b>'.$comment["valutazione"].'</div>
			<div class="comment_heading"><b> Username:  </b>'.$comment["name"].' </div>
		</div> ';
}
if(empty($commentHTML)){
	$commentHTML .= '
		<div class="no_comment"> Non sono ancora stati pubblicati commenti 
		</div> ';
}
echo $commentHTML;/*Stampo il commento */
?>