<?
//---------------------------------------------------------------------------------------------------
//							
//	WebJeff - FileManager v1.6
//	
//	Jean-Fran�ois GAZET
//	http://www.webjeff.org
//	webmaster@webjeff.org	
//
//---------------------------------------------------------------------------------------------------

$mess=array(
"0" => "Derni�re version",
"1" => "Nom du fichier",
"2" => "Taille",
"3" => "Type",
"4" => "Modifi� le",
"5" => "Actions",
"6" => "Renommer",
"7" => "Suppr.",
"8" => "Dossier",
"9" => "Fichier MIDI",
"10" => "Document texte",
"11" => "Javascript",
"12" => "Image GIF",
"13" => "Image JPG",
"14" => "Page HTML",
"15" => "Page HTML",
"16" => "Fichier REAL",
"17" => "Fichier REAL",
"18" => "Script PERL",
"19" => "Fichier ZIP",
"20" => "Son WAV",
"21" => "Script PHP",
"22" => "Script PHP",
"23" => "Fichier",
"24" => "Dossier parent",
"25" => "Transf�rer un ou plusieurs fichiers (max ".ConfService::getConf('UPLOAD_MAX_NUMBER').") dans : ",
"26" => "Cr�er un nouveau r�pertoire dans : ",
"27" => "Transf�rer",
"28" => "Cr�er un nouveau fichier dans : ",
"29" => "Cr�er",
"30" => "Saisissez un nom de r�pertoire et cliquez sur 'Cr�er'",
"31" => "Vous n'avez pas s�lectionn� de fichier",
"32" => "Retour",
"33" => "Erreur de transfert !",
"34" => "Le Fichier",
"35" => "a �t� enregistr� dans le r�pertoire",
"36" => "Sa taille est de",
"37" => "Vous devez saisir un nom de fichier valide",
"38" => "Le dossier",
"39" => "a �t� cr�� dans le r�pertoire",
"40" => "Ce dossier existe d�j�",
"41" => "a �t� renomm� en",
"42" => "en",
"43" => "existe d�j�",
"44" => "a �t� effac�",
"45" => "r�pertoire",
"46" => "fichier",
"47" => "Voulez-vous supprimer d�finitivement le",
"48" => "Ok",
"49" => "Annuler",
"50" => "Fichier EXE",
"51" => "Editer",
"52" => "Edition du fichier",
"53" => "Enregistrer",
"54" => "Annuler",
"55" => "a �t� modifi�",
"56" => "Image BMP",
"57" => "Image PNG",
"58" => "Fichier CSS",
"59" => "Fichier MP3",
"60" => "Fichier RAR",
"61" => "Fichier GZ",
"62" => "Racine du site",
"63" => "D�connexion",
"64" => "Fichier Excel",
"65" => "Fichier Word",
"66" => "Copier",
"67" => "Fichier s�lectionn�",
"68" => "Coller dans",
"69" => "Ou choisissez un autre r�pertoire",
"70" => "D�placer",
"71" => "Ce fichier existe d�j�",
"72" => "La racine du r�pertoire est incorrecte. V�rifier la variable dans le fichier conf/conf.php",
"73" => "a �t� copi� dans le r�pertoire",
"74" => "a �t� d�plac� dans le r�pertoire",
"75" => "Le fichier users.txt n'est pas dans le r�pertoire prive",
"76" => "Ce fichier a �t� supprim�",
"77" => "Envoyer",
"78" => "Passe",
"79" => "Fichier PDF",
"80" => "Fichier MOV",
"81" => "Fichier AVI",
"82" => "Fichier MPG",
"83" => "Fichier MPEG",
"84" => "Aide",
"85" => "Actualiser",
"86" => "Fermer",
"87" => "Recherche",
"88" => "T�l�charger",
"89" => "Impossible d'ouvrir le fichier",
"90" => "Imprimer",
"91" => "Fichier FLASH",
"92" => "Langue",
"93" => "Pour s�lectionner la langue, votre navigateur doit accepter les cookies.",
"94" => "Login",
"95" => "Choisissez votre langue :",
"96" => "Choisissez le r�pertoire de destination dans l'arbre",
"97" => "Envoyer un Fichier",
"98" => "Cliquer n'importe o� pour fermer cette bo�te.",
"99" => "n'est pas accessible en �criture. Contactez votre administrateur.", 
"100"=> "Impossible de trouver le fichier ",
"101"=> "Les r�pertoires de destination et d'origine sont les m�mes!",
"102"=> "Erreur inconnue lors de la cr�ation du fichier :",
"103"=> "Impossible de trouver le r�pertoire ",
"104"=> "Aller � l'emplacement choisi", 
"105"=> "Envoyer par email une URL ouvrant directement cet emplacement.",
"106"=> "Envoyer",
"107"=> "Votre nom et/ou adresse email", 
"108"=> "Email du destinataire", 
"109"=> "URL � envoyer", 
"110"=> "Ajouter un commentaire dans le mail",
"111"=> "L'email suivant a �t� envoy� : ",
"112"=> "L'envoi de l'email a echou�.",
"113"=> "La s�lection est vide!", 
"114"=> "Une erreur inconnue s'est produite durant la copie!",
"115"=> "Le fichier a bien �t� sauv�.",
"116"=> "fichiers", 
"117"=> "Le r�pertoir",
"118"=> "T�l�charger plusieurs fichiers",
"119"=> "Cliquer sur chaque fichier pour le t�l�charger.",
"120"=> "Vous n'�tes pas autoris� � effacer toute l'arborescence!",
"121"=> "Fichier image ", 
"122"=> "Corbeille",
"123"=> "a �t� d�plac� dans la", 
"124"=> "Ecraser les fichiers existants?", 
"125"=> "Un fichier/r�pertoire a d�j� ce nom. Veuillez choisir un autre nom!", 
"126"=> "Miniatures", 
"127"=> "Taille", 
"128"=> "fichiers s�lectionn�s", 
"129"=> "Aper�u",
"130"=> "R�pertoires", 
"131"=> "Details", 
"132"=> "Aucun fichier s�lectionn�",
"133"=> "Nom",
"134"=> "Type",
"135"=> "Dimensions",
"136"=> "Voir en grand",
"137"=> "T�l�charger", 
"138"=> "Modif. le",
"139"=> "Editer", 
"140"=> "Ecouter le r�pertoire",
"141"=> "Ecoute du r�pertoire",
"142"=> "Utilisateur : ",
"143"=> "Utilisateur invit�.",
"144"=> "Veuilllez vous logger.",
"145"=> "MesFavoris",
"146"=> "Supprimer",
"147"=> "Favoris", 
"148"=> "Parent",
"149"=> "Rafraichir",
"150"=> "Affichage",
"151"=> "Changer l'affichage",
"152"=> "Favoris",
"153"=> "Ajouter le r�pertoire courant � MesFavoris",
"154"=> "Nv. R�p.",
"155"=> "Cr�er un nouveau r�pertoire",
"156"=> "Nv. Fich.",
"157"=> "Cr�er un nouveau fichier vide.",
"158"=> "Renommer le fichier s�lectionn�",
"159"=> "Copier la s�lection dans...",
"160"=> "D�placer la s�lection dans...",
"161"=> "Supprimer les fichiers s�lectionn�s",
"162"=> "Editer le fichier directement en ligne",
"163"=> "Connex.",
"164"=> "D�conn.",
"165"=> "Parametres",
"166"=> "A propos",
"167"=> "A propos d'AjaXplorer",
"168" => "Connexion",
"169" => "D�connexion",
"170" => "R�pertoire Courant :",
"parent_access_key" => "P",
"refresh_access_key" => "h",
"thumbs_access_key" => "V",
"list_access_key" => "L",
"bookmarks_access_key" => "a",
"upload_access_key" => "T",
"folder_access_key" => "R",
"file_access_key" => "F",
"rename_access_key" => "n",
"copy_access_key" => "C",
"move_access_key" => "D",
"delete_access_key" => "S",
"edit_access_key" => "E",
"view_access_key" => "u",
"download_access_key" => "g",
"settings_access_key" => "m",
"about_access_key" => "o",
"empty_recycle_access_key" => "i", 
"restore_access_key" => "r", 
"171" => "Parcourir votre ordinateur",
"172" => "Votre s�lection",
"173" => "Nom du nouveau r�pertoire",
"174" => "Nom du nouveau fichier",
"175" => "S�lectionnez le r�pertoire de destination",
"176" => "Les fichiers s�lectionn�s vont �tre plac�s dans la corbeille",
"177" => "Etes vous s�r de vouloir supprimer d�finitivement votre s�lection?",
"178" => "Pr�c�dent",
"179" => "Suivant",
"180" => "Entrez vos identifiant/mot de passe",
"181" => "Identifiant",
"182" => "Mot de Passe",
"183" => "Veuillez choisir un r�pertoire diff�rent du r�pertoire d'origine!",
"184" => "Chercher dans le r�pertoire courant et ses sous-r�pertoires",
"185" => "Arr�ter la recherche",
"186" => "Aper�u des images", 
"187" => "Edition en ligne - ",
"189" => "Changer Mes Pr�f�rences",
"190" => "Langue", 
"191" => "Affichage par d�faut", 
"192" => "Liste d�taill�e", 
"193" => "Miniatures", 
"194" => "Changer de Mot de Passe",
"195" => "Pr�f�rences Utilisateur",
"196" => "Votre langue diff�re du langage actuel.\\n Voulez vous recharger la page afin de changer de langue?", 
"197" => "Vos pr�f�rences ont �t� sauv�es avec succ�s. \\n\\n. Si vous avez chang� de mot de passe, il sera pris en compte apr�s la prochaine d�connexion.",
"198" => "Nouv.",
"199" => "Confirmer",
"200" => "Changer le r�pertoire racine...",
"201" => "Attention, certaines modifications n'ont pas �t� sauvegard�es!\\n Etes vous s�r de vouloir fermer?",
"202" => "Attention, copie r�cursive!",
"203" => "Le r�pertoire de destination est le m�me que le r�pertoire d'origine!",
/* GROUPED SENTENCE : 'the file "filename.ext" exceeds size limit (1Mb)\nIt will not be uploaded.*/
"204" => "Le fichier \"",
"205" => "\" d�passe la taille autoris�e (",
"206" => "Mb).\\nIl ne sera pas transf�r�.",
/* END SENTENCE */
"207" => "Vous n'avez pas la permission en �criture",
"208" => "Vous n'avez pas la permission en lecture", 
"209" => "Erreur interne. Contactez votre administrateur!",
"210" => "Echec lors du transfert.", 
"211" => "Le fichier d�passe la taille autoris�e", 
"212" => "Pas de fichier trouv� sur le serveur!", 
"213" => "Erreur lors de la copie du fichier temporaire.", 
"214" => "Parcourir", 
"215" => "Transf�rer", 
"216" => "Vider la queue", 
"217" => "Vider les fichiers transf�r�s", 
"218" => "Retirer de la queue", 
"219" => "Termin�",
"220" => "Vider", 
"221" => "Vider la Corbeille", 
"222" => "Restaurer", 
"223" => "Restaurer le fichier � son emplacement d'origine", 
"224" => "Aller �", 
"225" => "Renommer le favori", 
"226" => "Liste",
"227" => "Passer en vue Liste D�taill�e",
"228" => "Vignettes",
"229" => "Passer en vue Vignettes",
"230" => "Auto",
"231" => "Faire d�filer les images", 
"232" => "Stop", 
"233" => "Arr�ter le d�filement automatique", 
"234" => "Voir les images s�lectionn�es",
"235" => "PleinEcran",
"236" => "Restaurer"
);
?>