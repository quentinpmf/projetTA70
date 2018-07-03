<div class="container">
    <div class="row align-items-center justify-content-center d-flex">
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#home">Accueil</a></li>
                <li><a href="#actus">Actualités</a></li>
                <li><a href="#cours">Cours</a></li>
                <li><a href="#planning">Planning</a></li>
                <li><a href="#coachs">Coachs</a></li>
                <li><a href="#plans">Plans</a></li>

                <?php
                if($_SESSION)
                {
                    switch($_SESSION['UserRole'])
                    {
                        case 1: //adhérent
                            ?>
                            <li class="menu-has-children"><a href="" style="color:#66b266">Mon espace adhérent</a>
                                <ul>
                                    <li class="menu-active"><a href="../projetTA70/php/adherent/mes_informations.php">Mes informations</a></li>
                                    <li><a href="../projetTA70/php/adherent/muscles_2d.php">Muscles 2D</a></li>
                                    <li><a href="../projetTA70/php/adherent/cours.php">Mes cours</a></li>
                                    <li><a href="../projetTA70/php/adherent/factures.php">Mes factures</a></li>
                                    <li><a href="../projetTA70/php/adherent/abonnement.php">Mon abonnement</a></li>
                                </ul>
                            </li>
                            <?php

                            break;
                        case 2: //coach
                            ?>
                            <li class="menu-has-children"><a href="" style="color:#66b266">Mon espace coach</a>
                                <ul>
                                    <li><a href="../generic.html">Generic</a></li>
                                    <li><a href="../elements.html">Elements</a></li>
                                </ul>
                            </li>
                            <?php
                            break;
                        case 3: //comptable
                            ?>
                            <li class="menu-has-children"><a href="" style="color:#66b266">Mon espace comptable</a>
                                <ul>
                                    <li class="menu-active"><a href="../projetTA70/php/comptable/factures_en_attente.php">Factures en attente</a></li>
                                    <li class="menu-active"><a href="../projetTA70/php/comptable/factures_validees.php">Factures validées</a></li>
                                </ul>
                            </li>
                            <?php
                            break;
                        case 4: //webmaster - admin
                            ?>
                            <li class="menu-has-children"><a href="" style="color:#66b266">Mon espace administrateur</a>
                                <ul>
                                    <li class="menu-active"><a href="../projetTA70/php/admin/factures.php">Factures</a></li>
                                    <li class="menu-active"><a href="../projetTA70/php/admin/actualites_accueil.php">Actualités</a></li>
                                    <li class="menu-active"><a href="../projetTA70/php/admin/stats.php">Statistiques</a></li>
                                    <li class="menu-active"><a href="../projetTA70/php/admin/autorisation_parentale.php">Autorisations parentales</a></li>
                                    <li class="menu-active"><a href="../projetTA70/php/admin/planning.php">Planning</a></li>
                                </ul>

                            </li>
                            <?php
                            break;
                        case 5: //pdg
                            ?>
                            <li class="menu-has-children"><a href="" style="color:#66b266">Mon espace PDG</a>
                                <ul>
                                    <li><a href="../generic.html">Generic</a></li>
                                    <li><a href="../elements.html">Elements</a></li>
                                </ul>
                            </li>
                            <?php
                            break;
                    }
                }
                ?>

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</div>