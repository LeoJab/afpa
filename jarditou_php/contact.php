<section class="row justify-content-center mt-3 m-0">
            <article class="col-11 col-lg-8 shadow py-2">
                <fieldset id="formulaire">
                    <form action="form_contact.php" method="post">
                        <div class="form-group">
                            <p class="text-muted">* Ces zones sont obligatoires</p>
                            <fieldset class="coordonnees">
                            <legend class="h3">Vos Coordonnées</legend>
                                    <label for="nom">Votre nom*</label> <input type="text" name="nom" id="nom" class="form-control" required>
                                    <p id="er_nom" class="error"></p>
                                    <label for="prenom">Votre pénom*</label> <input type="text" name="prenom" id="prenom" class="form-control" required>
                                    <p id="er_prenom" class="error"></p>

                                    <fieldset class="form-group">    
                                        <p>Sexe*</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sexe" value="Féminin" id="sexe1" required>
                                            <label class="form-check-label" for="sexe1">Féminin</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sexe" value="Masculin" id="sexe2" required>
                                            <label class="form-check-label" for="sexe2">Masculin</label>
                                        </div>
                                    </fieldset>

                                    <label for="date">Date de naissance*</label> <input type="date" name="ddn" id="date" class="form-control" required>
                                    <p id="er_ddn" class="error"></p>
                                    <label for="cp">Code postal*</label> <input type="text" name="cp" id="cp" class="form-control" required><br>
                                    <p id="er_cp" class="error"></p>
                                    <label for="adresse">Adresse</label> <input type="text" name="adresse" id="adresse" class="form-control"><br>
                                    <label for="ville">Ville</label> <input type="text" name="ville" id="ville" class="form-control">
                                    <p id="er_ville" class="error"></p>
                                    <label for="email">Email*</label> <input type="email" name="email" id="email" placeholder="dave.loper@afpa.fr" class="form-control" required>
                                    <p id="er_email" class="error"></p>
                            </fieldset>
                            <br>
                            <fieldset class="demande">
                                <div class="form-group">
                                    <legend class="demande">Votre demande</legend>
                                    <label for="choix">Sujet* :</label>
                                    <select class="form-control" id="choix" name="choix">
                                        <option id="choix_base" value="Veuillez_séléctionner_un_sujet" hidden selected>Veuillez séléctionner un sujet</option>
                                        <option id="choix1" name="choix" value="Mes_commandes">Mes commandes</option>
                                        <option id="choix2" name="choix" value="Question_sur_un_produit">Question sur un produit</option>
                                        <option id="choix3" name="choix" value="Réclamation">Réclamation</option>
                                        <option id="choix4" name="choix" value="Autres">Autres</option>
                                    </select>
                                </div>
                                <p id="er_sujet" class="error"></p>
                                <div class="form-group">
                                    <label for="question">Vos question*</label>
                                    <textarea class="form-control" name="question" id="question" rows="3" required></textarea>
                                </div>
                                <p id="er_question" class="error"></p>
                            </fieldset>
                            <br><label for="confirmation_formulaire"><input type="checkbox" name="confirmation_formulaire" id="confirmation_formulaire" required> J'accepte le traitement informatique de ce formulaire*</label>
                            <p id="er_confirm" class="error"></p>
                            <br><button class="btn btn-dark" type="submit" id="submit">Envoyer</button>
                            <button class="btn btn-dark" type="reset">Annuler</button>
                        </div>
                    </form>    
                </fieldset>
            </article>
        </section>