<?php
	require_once "admin/config.php";
	if (!no_permission(2)) {

		include "comun/vars.php";
		require_once "admin/games.php";
		require_once "admin/users.php";
		require_once "admin/config.php";
		require_once "admin/retos.php";
		
?>
<!DOCTYPE html>
<html lang="es">
	<?php
		include ROOT."comun/head.php";
	?>
	<body>
		<?php
			include ROOT."comun/nav.php";
		?>
		<div class="container">
			<div class="row">
				<!--<div class="col-sm-2 col-xs-12"></div>-->
				<div class="col-sm-8 col-xs-12">
					<div class="Adminevento">
						<button type="submit" onclick="location.href = 'http://localhost/intranet/admin.php?f=ver_juego';" class="btn btn-primary">Ver Juegos</button>
						<button type="submit" onclick="location.href = 'http://localhost/intranet/admin.php?f=ver_retos';" class="btn btn-primary">Ver Retos</button>
						<button type="submit" onclick="location.href = 'http://localhost/intranet/admin.php?f=creategame';" class="btn btn-primary">Añadir Juego</button>
						<button type="submit" onclick="location.href = 'http://localhost/intranet/admin.php?f=listusers';" class="btn btn-primary">Ver Usuarios</button>
						<button type="submit" onclick="location.href = 'http://localhost/intranet/admin.php?f=upload_image';" class="btn btn-primary">Subir Imagen</button>
						<br><br><br>
					</div>
				</div>
			</div>
		</div>
	</body>
	<?php
		include ROOT."comun/libs.php";
		if (isset($_GET['f']) && !no_permission(2)) {
			$getf=$_GET['f'];
			switch ($getf) {
				case 'ver_juego':
					listgames();
				break;
				case 'creategame':
					creategame();
				break;
				case 'newgame':
					newgame();
				break;
				case 'delgame':
					delgame();
				break;
				case 'savegame':
					savegame();
				break;
				case 'gamemngm':
					gamemngm();
				break;
				case 'usermngm':
					usermngm();
				break;
				case 'give_FOP':
					give_FOP();
				break;
				case 'listusers':
					listusers();
				break;
				case 'PointsXGameSave':
					PointsXGameSave();
				break;
				case 'edit_positions_users':
					edit_positions_users();
				break;
				case 'edit_positions_teams':
					edit_positions_teams();
				break;
				case 'upload_image':
					upload_image();
				break;
				case 'upload_image_game':
					upload_image_game();
				break;
				case 'ver_retos':
					listretos();
				break;
				case 'delreto':
					delreto();
				break;
				case 'savereto':
					savereto();
				break;
				case 'retomngm':
					retomngm();
				break;
				default:
					
				break;
			}
		}
	}
	?>
</html>