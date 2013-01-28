<?php

	/**
	 * French Language file for phpPgAdmin. 
	 * @maintainer Pascal PEYRE [pascal.peyre@cir.fr]
	 *
	 * $Id: french.php,v 1.16 2005/08/11 23:01:44 soranzo Exp $
	 */

	// Language and character set
	$lang['applang'] = 'Fran�ais';
	$lang['appcharset'] = 'ISO-8859-1';
	$lang['applocale'] = 'fr_FR';
  	$lang['appdbencoding'] = 'LATIN1';
	$lang['applangdir'] = 'ltr';

	// Basic strings
	$lang['strintro'] = 'Bienvenue sur phpPgAdmin.';
	$lang['strppahome'] = 'Page d\'accueil phpPgAdmin';
	$lang['strpgsqlhome'] = 'Page d\'accueil PostgreSQL';
	$lang['strpgsqlhome_url'] = 'http://www.postgresql.org/';
	$lang['strlocaldocs'] = 'PostgreSQL Documentation (local)';
	$lang['strreportbug'] = 'Rapporter un Bug';
	$lang['strviewfaq'] = 'Voir la FAQ';
	$lang['strviewfaq_url'] = 'http://phppgadmin.sourceforge.net/?page=faq';
	
	// Basic strings
	$lang['strlogin'] = 'Login';
	$lang['strloginfailed'] = 'Echec de la connexion';
        $lang['strlogindisallowed']  =  'Login d�sactiv� pour s�curit�';
	$lang['strserver'] = 'Serveur';
	$lang['strlogout'] = 'D�connexion';
	$lang['strowner'] = 'Propri�taire';
	$lang['straction'] = 'Action';
	$lang['stractions'] = 'Actions';
	$lang['strname'] = 'Nom';
	$lang['strdefinition'] = 'D�finition';
	$lang['strproperties'] = 'Propri�t�s';
	$lang['strbrowse'] = 'Parcourir';
	$lang['strdrop'] = 'Supprimer';
	$lang['strdropped'] = 'Supprim�';
	$lang['strnull'] = 'Null';
	$lang['strnotnull'] = 'Not Null';
	$lang['strprev'] = 'Pr�c�dent';
	$lang['strnext'] = 'Suivant';
        $lang['strfirst'] = '<< D�but';
	$lang['strlast'] = 'Fin >>';
        $lang['strfailed']  =  'Echec';
	$lang['strcreate'] = 'Cr�er';
	$lang['strcreated'] = 'Cr��';
	$lang['strcomment'] = 'Commentaire';
	$lang['strlength'] = 'Longueur';
	$lang['strdefault'] = 'Defaut';
	$lang['stralter'] = 'Modifier';
	$lang['strok'] = 'OK';
	$lang['strcancel'] = 'Annuler';
	$lang['strsave'] = 'Sauvegarder';
	$lang['strreset'] = 'R�initialiser';
	$lang['strinsert'] = 'Ins�rer';
	$lang['strselect'] = 'Selectionner';
	$lang['strdelete'] = 'Effacer';
	$lang['strupdate'] = 'Modifier';
	$lang['strreferences'] = 'R�f�rences';
	$lang['stryes'] = 'Oui';
	$lang['strno'] = 'Non';
	$lang['strtrue'] = 'TRUE';
	$lang['strfalse'] = 'FALSE';
        $lang['stredit']  =  'Editer';
        $lang['strcolumn']  =  'Colonne';
	$lang['strcolumns'] = 'Colonnes';
	$lang['strrows'] = 'ligne(s)';
	$lang['strrowsaff'] = 'ligne(s) affect�e(s).';
        $lang['strobjects']  =  'objet(s)';
        $lang['strexample']  =  'exple.';
	$lang['strback'] = 'Retour';
	$lang['strqueryresults'] = 'R�sultats de la requ�te';
	$lang['strshow'] = 'Voir';
	$lang['strempty'] = 'Vider';
	$lang['strlanguage'] = 'Langage';
	$lang['strencoding'] = 'Codage';
	$lang['strvalue'] = 'Valeur';
	$lang['strunique'] = 'Unique';
	$lang['strprimary'] = 'Primaire';
	$lang['strexport'] = 'Exporter';
	$lang['strimport'] = 'Import';
        $lang['strsql']  =  'SQL';
	$lang['strgo'] = 'Go';
	$lang['stradmin'] = 'Admin';
	$lang['strvacuum'] = 'Vacuum';
	$lang['stranalyze'] = 'Analyze';
	$lang['strclusterindex'] = 'Cluster';
        $lang['strclustered']  =  'En Cluster ?';
	$lang['strreindex'] = 'Reindex';
	$lang['strrun'] = 'Lancer';
	$lang['stradd'] = 'Ajouter';
	$lang['strevent'] = 'Ev�nement';
	$lang['strwhere'] = 'Where';
	$lang['strinstead'] = 'Do Instead';
	$lang['strwhen'] = 'When';
	$lang['strformat'] = 'Format';
	$lang['strdata'] = 'Donn�e';
	$lang['strconfirm'] = 'Confirmer';
	$lang['strexpression'] = 'Expression';
	$lang['strellipsis'] = '...';
        $lang['strseparator']  =  ': ';
	$lang['strexpand'] = 'Etendre';
	$lang['strcollapse'] = 'R�duire';
	$lang['strexplain'] = 'Explain';
        $lang['strexplainanalyze']  =  'Explain Analyze';
	$lang['strfind'] = 'Rechercher';
	$lang['stroptions'] = 'Options';
	$lang['strrefresh'] = 'Raffraichir';
	$lang['strdownload'] = 'T�l�charger';
        $lang['strdownloadgzipped']  =  'T�l�charger avec compression gzip';
        $lang['strinfo']  =  'Info';
        $lang['stroids']  =  'OIDs';
        $lang['stradvanced']  =  'Avanc�';
        $lang['strvariables']  =  'Variables';
        $lang['strprocess']  =  'Processus';
        $lang['strprocesses']  =  'Processus';
        $lang['strsetting']  =  'Param�trage';
        $lang['streditsql']  =  'Editer SQL';
        $lang['strruntime']  =  'Temps d\'execution Total: %s ms';
        $lang['strpaginate']  =  'Paginer les r�sultats';
        $lang['struploadscript']  =  'ou importer un script SQL :';
        $lang['strstarttime']  =  'Heure de D�part';
        $lang['strfile']  =  'Fichier';
        $lang['strfileimported']  =  'Fichier import�.';

	// Error handling
	$lang['strbadconfig'] = 'Le fichier de configuration config.inc.php est obsol�te. Vous avez besoin de le reg�nerer � partir de config.inc.php-dist.';
	$lang['strnotloaded'] = 'Vous n\'avez pas compil� correctement le support de la base de donn�es dans votre installation de PHP.';
        $lang['strphpversionnotsupported']  =  'Cette version de PHP n\'est pas support�e. Merci de mettre � jour PHP � la  version  %s ou ult�rieure.';
        $lang['strpostgresqlversionnotsupported']  =  'Cette Version de PostgreSQL n\'est pas support�e. Merci de mettre � jour PHP � la version %s ou ult�rieure.';
	$lang['strbadschema'] = 'Sch�ma sp�cifi� invalide.';
	$lang['strbadencoding'] = 'Impossible de sp�cifier l\'encodage de la base de donn�es.';
	$lang['strsqlerror'] = 'Erreur SQL :';
	$lang['strinstatement'] = 'In statement:';
	$lang['strinvalidparam'] = 'Param�tres de script invalides.';
	$lang['strnodata'] = 'Pas de R�sultats.';
        $lang['strnoobjects']  =  'Aucun objet trouv�.';
	$lang['strrownotunique'] = 'Pas d\identifiant unique pour cette ligne.';
        $lang['strnoreportsdb']  =  'Vous n\'avez pas cr�er des rapports de la base de Donn�es. Lisez le fichier INSTALL pour voir les directives.';
        $lang['strnouploads']  =  'Importation de fichiers d�sactiv�.';
        $lang['strimporterror']  =  'Erreur d\'importation.';
        $lang['strimporterrorline']  =  'Erreur d\'importation � la ligne %s.';

	// Tables
	$lang['strtable'] = 'Table';
	$lang['strtables'] = 'Tables';
	$lang['strshowalltables'] = 'Voir toutes les tables';
	$lang['strnotables'] = 'Aucune table trouv�e.';
	$lang['strnotable'] = 'Aucune table trouv�e.';
	$lang['strcreatetable'] = 'Cr�er une table';
	$lang['strtablename'] = 'Nom de la table';
	$lang['strtableneedsname'] = 'Vous devez donner un nom pour votre table.';
	$lang['strtableneedsfield'] = 'Vous devez sp�cifier au moins un champ.';
	$lang['strtableneedscols'] = 'Vous devez indiquer un nombre valide de colonnes.';
	$lang['strtablecreated'] = 'Table cr�e.';
	$lang['strtablecreatedbad'] = 'Echec de la cr�ation de table.';
	$lang['strconfdroptable'] = 'Etes-vous sur de vouloir supprimer la table "%s"?';
	$lang['strtabledropped'] = 'Table supprim�e.';
	$lang['strtabledroppedbad'] = 'Echec de la suppresion de table.';
	$lang['strconfemptytable'] = 'Etes-vous s�r de vouloir vider la table "%s"?';
	$lang['strtableemptied'] = 'Table vide.';
	$lang['strtableemptiedbad'] = 'Echec du vidage de la table.';
	$lang['strinsertrow'] = 'Inserer enregistrement.';
	$lang['strrowinserted'] = 'Enregistrement ins�r�.';
	$lang['strrowinsertedbad'] = 'Echec d\'insertion d\'un enregistrement.';
	$lang['streditrow'] = 'Editer enregistrement.';
	$lang['strrowupdated'] = 'Enregistrement mis � jour.';
	$lang['strrowupdatedbad'] = 'Echec de mise � jour de l\'enregistrement.';
	$lang['strdeleterow'] = 'Effacer enregistrement';
	$lang['strconfdeleterow'] = 'Etes-vous s�r de vouloir supprimer cet enregistrement ?';
	$lang['strrowdeleted'] = 'Enregistrement Supprim�.';
	$lang['strrowdeletedbad'] = 'Echec de suppression de l\'enregistrement.';
        $lang['strinsertandrepeat']  =  'Inserer & Repeter';
        $lang['strnumcols']  =  'Nombre de colonnes';
        $lang['strcolneedsname']  =  'Vous devez sp�cifier un nom pour la colonne';
	$lang['strselectallfields'] = 'S�lectionner tous les champs';
        $lang['strselectneedscol']  =  'Vous devez s�lectionner au moins une colonne.';
        $lang['strselectunary']  =  'Op�rateurs unaires ne peuvent avoir de valeurs.';
	$lang['straltercolumn'] = 'Modifier colonne';
	$lang['strcolumnaltered'] = 'Colonne modifi�e.';
	$lang['strcolumnalteredbad'] = 'Echec de modification de la colonne.';
        $lang['strconfdropcolumn'] = 'Etes-vous s�r de vouloir supprimer la colonne "%s" de la table "%s"?';
	$lang['strcolumndropped'] = 'Colonne supprim�e.';
	$lang['strcolumndroppedbad'] = 'Echec de suppression de la colonne.';
	$lang['straddcolumn'] = 'Ajouter une colonne';
	$lang['strcolumnadded'] = 'Colonne ajout�e.';
	$lang['strcolumnaddedbad'] = 'Echec d\'ajout de colonne.';
	$lang['strcascade'] = 'CASCADE';
	$lang['strtablealtered'] = 'Table modifi�e.';
	$lang['strtablealteredbad'] = 'Echec � la modification de la table.';
        $lang['strdataonly']  =  'Donn�es seulement';
        $lang['strstructureonly']  =  'Structure seulement';
        $lang['strstructureanddata']  =  'Structure et donn�es';
        $lang['strtabbed']  =  'Tabul�';
        $lang['strauto']  =  'Auto';
        $lang['strconfvacuumtable']  =  'Etes-vous sur de vouloir faire un  vacuum "%s"?';
        $lang['strestimatedrowcount']  =  'Nombre d\'enregistrements estim�s';

	// Users
	$lang['struser'] = 'Utilisateur';
	$lang['strusers'] = 'Utilisateurs';
	$lang['strusername'] = 'Utilisateur';
	$lang['strpassword'] = 'Mot de passe';
	$lang['strsuper'] = 'Super Utilisateur ?';
	$lang['strcreatedb'] = 'Cr�er base de donn�es?';
	$lang['strexpires'] = 'Expiration';
        $lang['strsessiondefaults']  =  'Session par d�faut';
	$lang['strnousers'] = 'Aucun utilisateur trouv�.';
	$lang['struserupdated'] = 'Utilisateur mis � jour.';
	$lang['struserupdatedbad'] = 'Echec de mise � jour de l\'utilisateur.';
	$lang['strshowallusers'] = 'Voir tous les utilisateurs';
	$lang['strcreateuser'] = 'Cr�er un utilisateur';
        $lang['struserneedsname']  =  'Vous devez donner un nom pour votre utilisateur.';
	$lang['strusercreated'] = 'Utilisateur Cr��.';
	$lang['strusercreatedbad'] = 'Echec de cr�ation de l\'utilisateur.';
	$lang['strconfdropuser'] = 'Etes-vous s�r de vouloir supprimer l\'utilisateur "%s"?';
	$lang['struserdropped'] = 'Utilisateur supprim�.';
	$lang['struserdroppedbad'] = 'Echec de suppression de l\'utilisateur.';
	$lang['straccount'] = 'Comptes';
        $lang['strchangepassword'] = 'Modifier le mot de passe';
	$lang['strpasswordchanged'] = 'Mot de passe modifi�.';
	$lang['strpasswordchangedbad'] = 'Echec � la modification du mot de passe.';
	$lang['strpasswordshort'] = 'Le mot de passe est trop court.';
	$lang['strpasswordconfirm'] = 'Le mot de passe de confirmation est diff�rent.';
	
	// Groups
	$lang['strgroup'] = 'Groupe';
	$lang['strgroups'] = 'Groupes';
	$lang['strnogroup'] = 'Groupe non trouv�.';
	$lang['strnogroups'] = 'Aucun groupe trouv�.';
	$lang['strcreategroup'] = 'Cr�er un groupe';
	$lang['strshowallgroups'] = 'Voir tous les groupes';
	$lang['strgroupneedsname'] = 'Vous devez indiquer un nom pour votre groupe.';
	$lang['strgroupcreated'] = 'Groupe cr��.';
	$lang['strgroupcreatedbad'] = 'Echec de cr�ation du groupe.';	
	$lang['strconfdropgroup'] = 'Etes vous s�r de vouloir supprimer le groupe "%s"?';
	$lang['strgroupdropped'] = 'Groupe supprim�.';
	$lang['strgroupdroppedbad'] = 'Echec de suppression du groupe.';
	$lang['strmembers'] = 'Membres';
	$lang['straddmember'] = 'Ajouter un membre';
	$lang['strmemberadded'] = 'Membre ajout�.';
	$lang['strmemberaddedbad'] = 'Echec pendant l\'ajout de membre.';
	$lang['strdropmember'] = 'Supprimer un membre';
	$lang['strconfdropmember'] = 'Etes-vous sur de vouloir supprimer le membre "%s" pour le groupe "%s"?';
	$lang['strmemberdropped'] = 'Membre supprim�.';
	$lang['strmemberdroppedbad'] = 'Echec � la suppression de membre.';
	// Privilges
	$lang['strprivilege'] = 'Privil�ge';
	$lang['strprivileges'] = 'Privil�ges';
	$lang['strnoprivileges'] = 'Cet objet n\'a pas de privil�ges.';
	$lang['strgrant'] = 'Accorder(Grant)';
	$lang['strrevoke'] = 'R�voquer';
	$lang['strgranted'] = 'Privil�ges accord�s.';
	$lang['strgrantfailed'] = 'Echec de l\'octroi de privil�ges.';

	$lang['strgrantbad'] = 'Vous devez sp�cifier au moins un utilisateur ou groupe et au moins un privil�ge.';
	$lang['strgrantor'] = 'Grantor';
	$lang['strasterisk'] = '*';
	// Databases
	$lang['strdatabase'] = 'Base de Donn�es';
	$lang['strdatabases'] = 'Bases de Donn�es';
	$lang['strshowalldatabases'] = 'Voir toutes les bases de donn�es';
	$lang['strnodatabase'] = 'Aucune base de donn�es trouv�e.';
	$lang['strnodatabases'] = 'Aucune base de donn�es trouv�e.';
	$lang['strcreatedatabase'] = 'Cr�er une base de donn�es';
	$lang['strdatabasename'] = 'Nom de la base de donn�es';
	$lang['strdatabaseneedsname'] = 'Vous devez donner un nom pour votre base de donn�es.';
	$lang['strdatabasecreated'] = 'Base de Donn�es cr��e.';
	$lang['strdatabasecreatedbad'] = 'Echec de cr�ation de la base de donn�es.';	
	$lang['strconfdropdatabase'] = 'Etes-vous s�r de vouloir supprimer la base de donn�es "%s"?';
	$lang['strdatabasedropped'] = 'Base de donn�es supprim�e.';
	$lang['strdatabasedroppedbad'] = 'Echec de suppression de la base de donn�es.';
	$lang['strentersql'] = 'Veuillez saisir ci-dessous la requ�te SQL � ex�cuter :';
	$lang['strsqlexecuted'] = 'Reguete SQL ex�cut�e.';
        $lang['strvacuumgood']  =  'Vacuum ex�cut�.';
	$lang['strvacuumbad'] = 'Echec du Vacuum.';
	$lang['stranalyzegood'] = 'Analyse effectu�e.';
	$lang['stranalyzebad'] = 'Echec de l\'analyse.';
        $lang['strreindexgood']  =  'R�indexation ex�cut�e.';
        $lang['strreindexbad']  =  'Echec de la R�indexation.';
        $lang['strfull']  =  'Int�gral(Full)';
        $lang['strfreeze']  =  'Freeze';
        $lang['strforce']  =  'Forcer';
        $lang['strsignalsent']  =  'Signal envoy�.';
        $lang['strsignalsentbad']  =  'Echec � l\'Envoi du signal.';
        $lang['strallobjects']  =  'Tous les objets';

	// Views
	$lang['strview'] = 'Vue';
	$lang['strviews'] = 'Vues';
	$lang['strshowallviews'] = 'Voir toutes les vues';
	$lang['strnoview'] = 'Aucne vue trouv�e.';
	$lang['strnoviews'] = 'Aucune vue trouv�e.';
	$lang['strcreateview'] = 'Cr�er une vue';
	$lang['strviewname'] = 'Nom de la vue';
	$lang['strviewneedsname'] = 'Vous devez indiquer un nom pour votre vue.';
	$lang['strviewneedsdef'] = 'Vous devez indiquer une d�finition pour votre vue.';
        $lang['strviewneedsfields']  =  'Vous devez pr�ciser les colonnes que vous voulez s�lectionner dans votre vue.';
	$lang['strviewcreated'] = 'Vue cr��e.';
	$lang['strviewcreatedbad'] = 'Echec de cr�ation de la vue.';
	$lang['strconfdropview'] = 'Ete-vous s�r de vouloir supprimer la vue "%s"?';
	$lang['strviewdropped'] = 'Vue supprim�e.';
	$lang['strviewdroppedbad'] = 'Echec de suppression de la vue.';
	$lang['strviewupdated'] = 'Vue mise � jour.';
	$lang['strviewupdatedbad'] = 'Echec de mise � jour de la vue.';
        $lang['strviewlink']  =  'Cl�s Li�es';
        $lang['strviewconditions']  =  'Conditions Additionnelles';
        $lang['strcreateviewwiz']  =  'Cr�er une vue avec l\'assistant';

	// Sequences
	$lang['strsequence'] = 'S�quence';
	$lang['strsequences'] = 'S�quences';
	$lang['strshowallsequences'] = 'Voir toutes les s�quences';
	$lang['strnosequence'] = 'Aucune s�quence trouv�e.';
	$lang['strnosequences'] = 'Aucune s�quence trouv�e.';
	$lang['strcreatesequence'] = 'Cr�er une s�quence';
	$lang['strlastvalue'] = 'Derni�re valeur';
	$lang['strincrementby'] = 'Incr�menter par ';	
	$lang['strstartvalue'] = 'Valeur de d�part';
	$lang['strmaxvalue'] = 'Valeur maxilale';
	$lang['strminvalue'] = 'Valeur minimale';
	$lang['strcachevalue'] = 'Valeur de cache';
	$lang['strlogcount'] = 'Log Count';
	$lang['striscycled'] = 'Est Cycl�e?';
	$lang['striscalled'] = 'Est Appel�e?';
	$lang['strsequenceneedsname'] = 'Vous devez sp�cifier un nom pour votre s�quence.';
	$lang['strsequencecreated'] = 'S�quence cr�e.';
	$lang['strsequencecreatedbad'] = 'Echec de cr�ation de la s�quence.'; 
	$lang['strconfdropsequence'] = 'Etes vous sur de vouloir supprimer la s�quence "%s"?';
	$lang['strsequencedropped'] = 'S�quence supprim�e.';
	$lang['strsequencedroppedbad'] = 'Echec de suppression de la s�quence.';

	$lang['strsequencereset'] = 'Sequence initialis�e.';
	$lang['strsequenceresetbad'] = 'Echec de l\'initialisation de la s�quence.';
	// Indexes
	$lang['strindex']  =  'Index';
	$lang['strindexes'] = 'Index';
	$lang['strindexname'] = 'Nom de l\'index';
	$lang['strshowallindexes'] = 'Voir tous les index';
	$lang['strnoindex'] = 'Aucun index trouv�.';
	$lang['strnoindexes'] = 'Aucun index trouv�.';
	$lang['strcreateindex'] = 'Cr�er un index';
	$lang['strtabname'] = 'Nom de la table';
	$lang['strcolumnname'] = 'Nom de la colonne';
	$lang['strindexneedsname'] = 'Vous devez indiquer un nom pour votre index';
	$lang['strindexneedscols'] = 'Vous devez indiquer un nombre valide de colonnes.';
	$lang['strindexcreated'] = 'Index cr��';
	$lang['strindexcreatedbad'] = 'Echec de cr�ation de l\'index.';
	$lang['strconfdropindex'] = 'Etes-vous s�r de vouloir supprimer l\'index "%s"?';
	$lang['strindexdropped'] = 'Index supprim�.';
	$lang['strindexdroppedbad'] = 'Echec de suppression de l\'index.';
	$lang['strkeyname'] = 'Nom de la cl�';
	$lang['struniquekey'] = 'Cl� unique';
	$lang['strprimarykey'] = 'Cl� primaire';
 	$lang['strindextype'] = 'Type d\'index';
	$lang['strtablecolumnlist'] = 'Liste des colonnes';
	$lang['strindexcolumnlist'] = 'Liste des colonnes dans l\'index';
        $lang['strconfcluster']  =  'Etes vous sur de vouloir mettre en cluster "%s"?';
        $lang['strclusteredgood']  =  'Cluster effectu�.';
        $lang['strclusteredbad']  =  'Echec du Cluster.';

	// Rules
	$lang['strrules'] = 'R�gles';
	$lang['strrule'] = 'R�gle';
	$lang['strshowallrules'] = 'Voir toutes les r�gles';
	$lang['strnorule'] = 'Aucune r�gle trouv�e.';
	$lang['strnorules'] = 'Aucune r�gle trouv�e.';
	$lang['strcreaterule'] = 'Cr�er une r�gle';
	$lang['strrulename'] = 'Nom de la r�gle';
	$lang['strruleneedsname'] = 'Vous devez indiquer un nom pour votre r�gle.';
	$lang['strrulecreated'] = 'R�gle cr�e.';
	$lang['strrulecreatedbad'] = 'Echec de cr�ation de la r�gle.';
	$lang['strconfdroprule'] = 'Etes-vous s�r de vouloir supprimer la r�gle "%s" sur "%s"?';
	$lang['strruledropped'] = 'R�gle supprim�e.';
	$lang['strruledroppedbad'] = 'Echec de suppression de r�gle.';

	// Constraints
	$lang['strconstraints'] = 'Contraintes';
	$lang['strshowallconstraints'] = 'Voir toutes les contraintes';
	$lang['strnoconstraints'] = 'Aucune contrainte trouv�e.';
	$lang['strcreateconstraint'] = 'Cr�er une contrainte';
	$lang['strconstraintcreated'] = 'Cr�ation d\'une contrainte.';
	$lang['strconstraintcreatedbad'] = 'Echec de cr�ation de la contrainte.';
	$lang['strconfdropconstraint'] = 'Etes vous s�r de vouloir supprimer la contrainte "%s" sur "%s"?';
	$lang['strconstraintdropped'] = 'Contrainte supprim�e.';
	$lang['strconstraintdroppedbad'] = 'Echec de suppression de la contrainte.';
	$lang['straddcheck'] = 'Ajouter une Contrainte';
	$lang['strcheckneedsdefinition'] = 'La Contrainte a besoin d\'une d�finition.';
	$lang['strcheckadded'] = 'Contrainte ajout�e.';
        $lang['strcheckaddedbad']  =  'Echec pour l\'ajout d\une contrainte check.';
	$lang['straddpk'] = 'Ajouter une cl� primaire';
	$lang['strpkneedscols'] = 'La cl� primaire n�cessite au moins une colonne.';
	$lang['strpkadded'] = 'Primary key added.';
	$lang['strpkaddedbad'] = 'Echec lors de l\'ajout de la cl� primaire.';
	$lang['stradduniq'] = 'Ajouter une cl� Unique';
	$lang['struniqneedscols'] = 'Une Cl� Unique n�cessite au moins une colonne.';
	$lang['struniqadded'] = 'La Cl� unique a �t� rajout�e.';
	$lang['struniqaddedbad'] = 'Echec lors de la cr�ation de la cl� Unique.';
	$lang['straddfk'] = 'Ajouter une cl� Etrang�re';
	$lang['strfkneedscols'] = 'Une Cl� Etrang�re n�cessite au moins une colonne.';
	$lang['strfkneedstarget'] = 'Une cl� Etrang�re n�cessite une table Cible.';
	$lang['strfkadded'] = 'La Cl� Etrang�re a �t� rajout�e.';
	$lang['strfkaddedbad'] = 'Echec lors de la cr�ation de la cl� Etrang�re.';
	$lang['strfktarget'] = 'Table Cible';
	$lang['strfkcolumnlist'] = 'Liste des Colonnes de la cl�';
	$lang['strondelete'] = 'ON DELETE';
	$lang['stronupdate'] = 'ON UPDATE';

	// Functions
	$lang['strfunction'] = 'Fonction';
	$lang['strfunctions'] = 'Fonctions';
	$lang['strshowallfunctions'] = 'Voir toutes les fonctions';
	$lang['strnofunction'] = 'Aucune fonction trouv�e.';
	$lang['strnofunctions'] = 'Aucune Fonction trouv�e.';
	$lang['strcreateplfunction']  =  'Cr�er une fonction PL/SQL';
        $lang['strcreateinternalfunction']  =  'Cr�er une fonction interne';
        $lang['strcreatecfunction']  =  'Cr�er une fonction C';
	$lang['strfunctionname'] = 'Nom de la fonction';
	$lang['strreturns'] = 'Valeur de sortie';
	$lang['strarguments'] = 'Arguments';
	$lang['strproglanguage'] = 'Langage';
	$lang['strfunctionneedsname'] = 'Vous devez indiquer un nom pour votre fonction.';
	$lang['strfunctionneedsdef'] = 'Vous devez indiquer une d�finition pour votre fonction.';
	$lang['strfunctioncreated'] = 'Fonction cr��e.';
	$lang['strfunctioncreatedbad'] = 'Echec de cr�ation de la fonction.';
	$lang['strconfdropfunction'] = 'Etes-vous s�r de vouloir supprimer la fonction "%s"?';
	$lang['strfunctiondropped'] = 'Fonction supprim�e.';
	$lang['strfunctiondroppedbad'] = 'Echech de suppression de la fonction.';
	$lang['strfunctionupdated'] = 'Fonction mise � jour.';
	$lang['strfunctionupdatedbad'] = 'Echec de mise � jour de la fonction.';
        $lang['strobjectfile']  =  'Fichier Objet';
        $lang['strlinksymbol']  =  'Symbole Lien';

	// Triggers
	$lang['strtrigger'] = 'Trigger';
	$lang['strtriggers'] = 'Triggers';
	$lang['strshowalltriggers'] = 'Voir tous les triggers';
	$lang['strnotrigger'] = 'Aucun trigger trouv�.';
	$lang['strnotriggers'] = 'Aucun trigger trouv�.';
	$lang['strcreatetrigger'] = 'Cr�er un trigger';
	$lang['strtriggerneedsname'] = 'Vous devez indiquer un nom pour votre trigger.';
	$lang['strtriggerneedsfunc'] = 'Vous devez indiquer une fonction pour votre trigger.';
	$lang['strtriggercreated'] = 'Trigger cr��.';
	$lang['strtriggercreatedbad'] = 'Echec de cr�ation du trigger.';
	$lang['strconfdroptrigger'] = 'Etes-vous s�r de vouloir supprimer le trigger "%s" sur "%s"?';
	$lang['strtriggerdropped'] = 'Trigger supprim�.';
        $lang['strtriggerdroppedbad']  =  'Echec lors de la suppression du trigger.';
	$lang['strtriggeraltered'] = 'Trigger modifi�.';
	$lang['strtriggeralteredbad'] = 'Echec lors de la modification du Trigger.';

	// Types
	$lang['strtype'] = 'Type';
	$lang['strtypes'] = 'Types';
	$lang['strshowalltypes'] = 'Voir tous les types';
	$lang['strnotype'] = 'Aucun type trouv�.';
	$lang['strnotypes'] = 'Aucun type trouv�.';
	$lang['strcreatetype'] = 'Cr�er un type';
        $lang['strcreatecomptype']  =  'Cr�er un type compos�';
        $lang['strtypeneedsfield']  =  'Vous devez sp�cifier au moins un champ.';
        $lang['strtypeneedscols']  =  'Vous devez sp�cifier un nombre valide de champs.';	
	$lang['strtypename'] = 'Nom du type';
	$lang['strinputfn'] = 'Fonction d\'entr�e';
	$lang['stroutputfn'] = 'Fonction de sortie';
	$lang['strpassbyval'] = 'Pass�e par valeur?';
	$lang['stralignment'] = 'Alignement';
	$lang['strelement'] = 'El�ment';
	$lang['strdelimiter'] = 'D�limiteur';
	$lang['strstorage'] = 'Stockage';
        $lang['strfield']  =  'Champ';
        $lang['strnumfields']  =  'Nbre. de Champs';
	$lang['strtypeneedsname'] = 'Vous devez indiquer un nom pour votre type.';
	$lang['strtypeneedslen'] = 'Vous devez indiquer une longueur pour votre type.';
	$lang['strtypecreated'] = 'Type cr��';
	$lang['strtypecreatedbad'] = 'Echec de cr�ation du type.';
	$lang['strconfdroptype'] = 'Etes-vous s�r de vouloir supprim� le type "%s"?';
	$lang['strtypedropped'] = 'Type supprim�.';
	$lang['strtypedroppedbad'] = 'Echec de suppression du type.';
        $lang['strflavor']  =  'Flavor';
	$lang['strbasetype']  =  'Base';
	$lang['strcompositetype']  =  'Composite';
	$lang['strpseudotype']  =  'Pseudo';

	// Schemas
	$lang['strschema'] = 'Sch�ma';
	$lang['strschemas'] = 'Sch�mas';
	$lang['strshowallschemas'] = 'Voir Tous les sch�mas';
	$lang['strnoschema'] = 'Aucun sch�ma trouv�.';
	$lang['strnoschemas'] = 'Aucun sch�ma trouv�.';
	$lang['strcreateschema'] = 'Cr�er un sch�ma';
	$lang['strschemaname'] = 'Nom du sch�ma';
	$lang['strschemaneedsname'] = 'Vous devez indiquer un nom pour votre sch�ma.';
	$lang['strschemacreated'] = 'Sch�ma cr��';
	$lang['strschemacreatedbad'] = 'Echec de cr�ation du sch�ma.';
	$lang['strconfdropschema'] = 'Etes-vous s�r de vouloir supprimer le sch�ma "%s"?';
	$lang['strschemadropped'] = 'Sch�ma supprim�.';
	$lang['strschemadroppedbad'] = 'Echec de suppression du sch�ma.';
        $lang['strschemaaltered']  =  'Schema altered.';
        $lang['strschemaalteredbad']  =  'Schema alter failed.';
        $lang['strsearchpath']  =  'Chemin de Recherche du Schema';

	// Reports
	$lang['strreport'] = 'Rapport';
	$lang['strreports'] = 'Rapports';
	$lang['strshowallreports'] = 'Voir tous les rapports';
	$lang['strnoreports'] = 'Aucun rapport trouv�.';
	$lang['strcreatereport'] = 'Cr�er un rapport';
	$lang['strreportdropped'] = 'Rapport supprim�.';
	$lang['strreportdroppedbad'] = 'Echec de suppression du rapport.';
	$lang['strconfdropreport'] = 'Etes-vous sur de vouloir supprimer le rapport "%s"?';
	$lang['strreportneedsname'] = 'Vous devez indiquer un nom pour votre rapport.';
	$lang['strreportneedsdef'] = 'Vous devez fournir une requ�te SQL pour votre rapport.';
	$lang['strreportcreated'] = 'Rapport sauvegard�.';
	$lang['strreportcreatedbad'] = 'Echec de sauvegarde du rapport.';

        // Domains
	$lang['strdomain'] = 'Domaine';
	$lang['strdomains'] = 'Domaines';
	$lang['strshowalldomains'] = 'Voir tous les domaines';
	$lang['strnodomains'] = 'Pas de domaine trouv�.';
	$lang['strcreatedomain'] = 'Cr�er un domaine';
	$lang['strdomaindropped'] = 'Domaine supprim�.';
	$lang['strdomaindroppedbad'] = 'Echec de la suppression.';
	$lang['strconfdropdomain'] = 'Etes vous sur de vouloir supprimer le domaine "%s"?';
	$lang['strdomainneedsname'] = 'Vous devez donner un nom pour votre domaine.';
	$lang['strdomaincreated'] = 'Domaine cr��.';
	$lang['strdomaincreatedbad'] = 'Echec � la cr�ation du domaine.';	
	$lang['strdomainaltered'] = 'Domaine modifi�.';
	$lang['strdomainalteredbad'] = 'Echec � la modification du domaine.';	

	// Operators
	$lang['stroperator'] = 'Operateur';
	$lang['stroperators'] = 'Operateurs';
	$lang['strshowalloperators'] = 'Voir tous les op�rateurs';
	$lang['strnooperator'] = 'Pas d\'op�rateur trouv�.';
	$lang['strnooperators'] = 'Pas d\'op�rateur trouv�.';
	$lang['strcreateoperator'] = 'Cr�er un op�rateur';
	$lang['strleftarg'] = 'Type de l\'argument de gauche';
	$lang['strrightarg'] = 'Type de l\'argument de droite';
	$lang['strcommutator'] = 'Commutateur';
	$lang['strnegator'] = 'Negator';
	$lang['strrestrict'] = 'Restrict';
	$lang['strjoin'] = 'Join';
	$lang['strhashes'] = 'Hashes';
	$lang['strmerges'] = 'Merges';
	$lang['strleftsort'] = 'Left sort';
	$lang['strrightsort'] = 'Right sort';
	$lang['strlessthan'] = 'Plus petit que';
	$lang['strgreaterthan'] = 'Plus grand que';
        $lang['stroperatorneedsname']  =  'Vous devez donner un nom pour votre op�rateur.';
        $lang['stroperatorcreated']  =  'Operateur cr��';
        $lang['stroperatorcreatedbad']  =  'Echec lors de la cr�ation de l\'op�rateur.';
        $lang['strconfdropoperator']  =  'Etes vous sur de vouloir supprimer l\'op�rateur "%s"?';
        $lang['stroperatordropped']  =  'Op�rateur supprim�.';
        $lang['stroperatordroppedbad']  =  'Echec lors de la suppression de l\'op�rateur.';

	// Casts
	$lang['strcasts'] = 'Casts';
	$lang['strnocasts'] = 'No casts found.';
	$lang['strsourcetype'] = 'Source type';
	$lang['strtargettype'] = 'Target type';
	$lang['strimplicit'] = 'Implicit';
	$lang['strinassignment'] = 'In assignment';
	$lang['strbinarycompat'] = '(Binary compatible)';
	
	// Conversions
	$lang['strconversions'] = 'Conversions';
	$lang['strnoconversions'] = 'Pas de Conversion trouv�.';
	$lang['strsourceencoding'] = 'Source encoding';
	$lang['strtargetencoding'] = 'Target encoding';
	
	// Languages
	$lang['strlanguages'] = 'Langages';
	$lang['strnolanguages'] = 'Pas de langage trouv�.';
	$lang['strtrusted'] = 'Trusted';
	
	// Info
	$lang['strnoinfo'] = 'Pas d\'information disponible.';
	$lang['strreferringtables'] = 'Referring tables';
	$lang['strparenttables'] = 'Tables Parents';
	$lang['strchildtables'] = 'Tables Enfants';
	
	// Aggregates
	$lang['straggregates']  =  'Aggregats';
	$lang['strnoaggregates']  =  'Pas d\'aggregat trouv�.';
        $lang['stralltypes']  =  '(Tous les types)';

	// Operator Classes
        $lang['stropclasses']  =  'Classes d\'op�rateur';
     	$lang['strnoopclasses']  =  'Aucune classe d\'op�rateur trouv�e.';
	$lang['straccessmethod']  =  'M�thode d\'acc�s';

	// Stats and performance
	$lang['strrowperf']  =  'Performance de l\'Enregistrement';
	$lang['strioperf']  =  'Performance Entr�e/Sortie';
	$lang['stridxrowperf']  =  'Performance Index';
	$lang['stridxioperf']  =  'Performance Index Entr�es/Sortie';
	$lang['strpercent']  =  '%';
	$lang['strsequential']  =  'Sequentiel';
	$lang['strscan']  =  'Scan';
	$lang['strread']  =  'Lire';
	$lang['strfetch']  =  'Fetch';
	$lang['strheap']  =  'Heap';
        $lang['strtoast']  =  'TOAST';
	$lang['strtoastindex']  =  'TOAST Index';
	$lang['strcache']  =  'Cache';
	$lang['strdisk']  =  'Disque';
	$lang['strrows2']  =  'Enregistrements';

	// Tablespaces
	$lang['strtablespace']  =  'Tablespace';
	$lang['strtablespaces']  =  'Tablespaces';
	$lang['strshowalltablespaces']  =  'Voir tous les tablespaces';
	$lang['strnotablespaces']  =  'Pas de tablespaces trouv�.';
	$lang['strcreatetablespace']  =  'Cr�er un tablespace';
	$lang['strlocation']  =  'Location';
	$lang['strtablespaceneedsname']  =  'Vous devez donner un nom � votre tablespace.';
	$lang['strtablespaceneedsloc']  =  'Vous devez pr�ciser un r�pertoire dans lequel sera cr�� le tablespace.';
	$lang['strtablespacecreated']  =  'Tablespace cr��.';
	$lang['strtablespacecreatedbad']  =  'Echec � la cr�ation du Tablespace.';
	$lang['strconfdroptablespace']  =  'Etes vous sur de vouloir supprimer le tablespace "%s"?';
	$lang['strtablespacedropped']  =  'Tablespace supprim�.';
	$lang['strtablespacedroppedbad']  =  'Echec � la suppression du tablespace.';
	$lang['strtablespacealtered']  =  'Tablespace modifi�.';
	$lang['strtablespacealteredbad']  =  'Echec � la modification du Tablespace.';

	// Miscellaneous
	$lang['strtopbar']  =  '%s lanc� sur %s:%s -- Vous �tes connect� avec le profil  "%s", %s';
	$lang['strtimefmt']  =  'jS M, Y g:iA';
	$lang['strhelp']  =  'Aide';
$lang['strhelpicon']  =  '?';

?>
