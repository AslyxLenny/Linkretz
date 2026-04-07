<nav>
	<div class="table">
		<ul>
			<li class="acc">
				<a href="/viator/linkretz/index.php">Accueil</a>
			</li>
			<li class="com">
				<a href="/viator/linkretz/page/administration/admin/gestion_employe.php">Gestion des employés</a>
            <li class="tour">
                <a href="/viator/linkretz/page/administration/admin/gestion_tour_operateur.php">Gestion des tour-opérateurs</a>
            </li>
			<li class="mdp">
                <?php 
				$id = intval($_SESSION['id']);
				echo"<a href='/viator/linkretz/page/administration/admin/edit/edit_mdp.php?id=$id'>Modification du mot de passe</a>"
				?>
            </li>
			<li class="conx">
				<a href="/viator/linkretz/include/deconnexion.php">Déconnexion</a>
			</li>
		</ul>
	</div>
</nav>