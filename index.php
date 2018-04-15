
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Profile</title>
		<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
		<script type="text/javascript">;
			var val;
			
			// Au demarrage on selecionne l'image par defaut pour utilisation ulterieure comme par exemple en cas d'annulation
			img_dft = $(window).ready(function() {
				return img_dft = $("#avatar").attr("src");
			});
		
			// Onmouseover sur une photo qui n'est pas celle par defaut
			// On la met en evidence avec un cadre rouge
			// Puis on l'affiche sur l'ecran
			function profile_in(id){
				if(val !== id){
					var img = $("#"+id).attr("src");
					$('#avatar').attr("src", img);
					$("#"+id).css("border", "3px solid red");
				}
			}
			
			// Onmouseout sur une photo
			// On ne la met plus en evidence en retirant son cadre rouge
			function profile_out(id){
				if(val !== id){
					$("#"+id).css("border", "none");
				}
			}
			
			// Onmouseout sur l'ensemble des photos quand l'utilisateur n'a pas choisie une photo
			// On affiche la photo par defaut
			// Il s'agit soit de la photo choisie enregistrée, soit de la dernière photo séléctionnée avant validation
			function profile_default(){
				$("#avatar").attr("src", img_dft);
			}
			
			// L'utilisateur a choisi une photo
			// On la met en evidence avec un cadre vert
			// On affiche le bouton "Choisir cet avatar" pour proposer à l'utilisateur de valider son choix
			// La photo choisie devient la nouvelle photo par défaut (voir profile_default() )
			function valider(id){
				$("#"+val).css("border", "none");
				choix = $("#"+id).attr("src");
				img_dft = choix;
				$("#choix").css("display", "block");
				$('#choix_avatar').val(choix);
				$("#"+id).css("border", "3px solid green");
				val = id;
			}
		</script>
	</head>
		
	<body>
		<h1>Choisissez votre photo de profile</h1>
		
	</body>
</hml>