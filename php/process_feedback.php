
<?php
include("./config.php");
$errors = [];
/* Quando viene attivato il tasto per aggiungere un commento*/
if (!empty($_POST['name']) && !empty($_POST['rating']) && !empty($_POST['comment'])) { createFeedback($_POST); }

/* Aggiungo un commento*/
function createFeedback($request_values){
	global $conn, $errors, $name, $rating, $comment;
	$name = $request_values['name'];
    $rating = $request_values['rating'];
	$comment = html_entity_decode($request_values['comment']);
    	
    
	
	/*Se non è stato inserito il contenuto del commento */
	
	if (count($errors) == 0) {/*Se non ci sono errori nell'inserimento dei dati*/
	    $query = "INSERT INTO valutazioni (name,valutazione, commento) VALUES('$name','$rating', '$comment')";
		mysqli_query($conn, $query);                                                                                        
		$message = '<label class="text-success">Il tuo commento è stato postato</label>';
		$status = array(
		'error'  => 0,
		'message' => $message
		);
	}
	else{
		$message = '<label class="text-danger">Errore nella pubblicazione del feedback </label>';
	$status = array(
		'error'  => 1,
		'message' => $message
	);
	}
	echo json_encode($status);
}


?>