<?PHP
class ClassMenu {
  function Menu() {
    ?>
	<link rel="stylesheet" href="../Sistema/css/menu.css">
	<div id="header">
	<ul class="nav">
		<li><a href="">Inicio</a></li>
		<li><a href=""><strong>&rsaquo;</strong>Servicios</a>
			<ul>
				<li><a href="">Submenu1</a></li>
				<li><a href="">Submenu2</a></li>
				<li><a href="">Submenu3</a></li>
				<li><a href="">Submenu4</a>
					<ul>
						<li><a href="">Submenu1</a></li>
						<li><a href="">Submenu2</a></li>
						<li><a href="">Submenu3</a></li>
						<li><a href="">Submenu4</a>
							<ul>
								<li><a href="">Submenu1</a></li>
								<li><a href="">Submenu2</a></li>
								<li><a href="">Submenu3</a></li>
								<li><a href="">Submenu4</a></li>
							</ul>
						</li>
					</ul>
					</li>
			</ul>
		</li>
		<li><a href="">Acerca de</a>
			<ul>
				<li><a href="">Submenu1</a></li>
				<li><a href="">Submenu2</a></li>
				<li><a href="">Submenu3</a></li>
				<li><a href="">Submenu4</a></li>
			</ul>
		</li>
		<li><a href="">Contacto</a></li>
		</ul>
	</div>


<?PHP
  }
}
?>