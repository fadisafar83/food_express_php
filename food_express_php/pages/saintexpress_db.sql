
-- //............... compte ............//
CREATE TABLE `express_compte` (
  id_compte INTEGER PRIMARY KEY NOT NULL auto_increment ,
  nom varchar(50) NOT NULL,
  prenom varchar(50) NOT NULL,
  email varchar(200) NOT NULL,
  mot_de_passe varchar(200) NOT NULL,
  mobile integer(50) NOT NULL,
  adresse varchar(200) NOT NULL,
  code_postal integer(5) NOT NULL,
  type varchar(25)  DEFAULT 'client' NOT NULL 
) ENGINE InnoDB;



-- //............... Table gestionaire_restaurant ............//

CREATE TABLE `express_gestionaire_restaurant` (
  id_gestionaire_restaurant INTEGER PRIMARY KEY NOT NULL auto_increment ,
  nom varchar(50) NOT NULL,
  prenom varchar(50) NOT NULL,
  email varchar(200) NOT NULL,
  mot_de_passe varchar(200) NOT NULL,
  mobile integer(50) NOT NULL,
  adresse_domicile varchar(200) NOT NULL,
  code_postal_domicile integer(5) NOT NULL,
) ENGINE InnoDB;



-- //............... Table restaurant ............//
CREATE TABLE `express_restaurant` (
  id_restaurant INTEGER PRIMARY KEY NOT NULL auto_increment ,
  type_restaurant varchar(50) NOT NULL,
  type_cuisine varchar(50) NOT NULL,
  nom  varchar(50) NOT NULL,
  adresse varchar(200) NOT NULL,
  code_postal integer(5) NOT NULL,
  horaires_semaine varchar(250) NOT NULL,
  horaires_samedi varchar(250) NOT NULL,
  horaires_dimanche varchar(250) NOT NULL,
  horaires_jours_feries varchar(250) NOT NULL,
  id_gestionaire_restaurant integer NOT NULL,
  telephone integer (20) NOT NULL,
  n_siret varchar(200) NOT NULL,
  FOREIGN KEY (id_gestionaire_restaurant) REFERENCES express_gestionaire_restaurant(id_gestionaire_restaurant) 
  ON DELETE CASCADE
  ) ENGINE InnoDB;


-- //............... Table menu ............//


  CREATE TABLE `express_menu` (
  id_menu INTEGER PRIMARY KEY NOT NULL auto_increment ,
  categorie  varchar(50) NOT NULL,
  nom_produit varchar(50) NOT NULL,
  prix_produit varchar(50) NOT NULL,
  id_restaurant integer NOT NULL,
  id_gestionaire_restaurant integer NOT NULL,
  FOREIGN KEY (id_restaurant) REFERENCES express_restaurant(id_restaurant), ON DELETE CASCADE
  FOREIGN KEY (id_gestionaire_restaurant) REFERENCES express_gestionaire_restaurant(id_gestionaire_restaurant)
  ON DELETE CASCADE
) ENGINE InnoDB;



-- //............... Table commande ............//


  CREATE TABLE `express_commande` (
  id_commande INTEGER PRIMARY KEY NOT NULL auto_increment ,
  nom_produit varchar(50) NOT NULL,
  prix_produit INTEGER(50) NOT NULL,
  numbre_unite INTEGER(10) NOT NULL,
  id_compte INTEGER NOT NULL,
  id_restaurant INTEGER NOT NULL,
  id_menu INTEGER NOT NULL,
  FOREIGN KEY (id_restaurant) REFERENCES express_restaurant(id_restaurant)
   ON DELETE CASCADE
) ENGINE InnoDB;

ALTER TABLE commande
ADD FOREIGN KEY (id_menu) REFERENCES express_menu(id_menu) ON DELETE CASCADE;

ALTER TABLE commande
ADD FOREIGN KEY (id_compte) REFERENCES express_compte(id_compte) ON DELETE CASCADE;



-- //............... Table commande_valide ............//


  CREATE TABLE `express_commande_valide` (
  id_commande_valide INTEGER PRIMARY KEY NOT NULL auto_increment ,
  prix_total INTEGER(10) NOT NULL,
  id_compte INTEGER NOT NULL,
  id_restaurant INTEGER NOT NULL,
  id_menu INTEGER NOT NULL,
  id_commande INTEGER NOT NULL,
  FOREIGN KEY (id_commande) REFERENCES express_commande(id_commande)
   ON DELETE CASCADE
) ENGINE InnoDB;

ALTER TABLE commande
ADD FOREIGN KEY (id_menu) REFERENCES express_menu(id_menu) ON DELETE CASCADE;

ALTER TABLE commande
ADD FOREIGN KEY (id_restaurant) REFERENCES express_restaurant(id_restaurant) ON DELETE CASCADE;

ALTER TABLE commande
ADD FOREIGN KEY (id_compte) REFERENCES express_compte(id_compte) ON DELETE CASCADE;






































