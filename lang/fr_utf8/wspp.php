<?PHP // $Id$
      // wspp.php -
      // translation file for Ok Tech WebServices (wspp) version 1.6

$string['webservices'] = 'OK Tech Webservices ( aka wspp)';

$string['ws_disable']='Désactiver le Web Service';
$string['config_ws_disable']='Refuser toutes les demandes de connexion';
$string['ws_logoperations']='Loger les demandes';
$string['config_ws_logoperations']='Insérer une entrée dans le fichier log de Moodle à chaque opération';
$string['ws_logdetailedoperations']='Loger le détail des demandes';
$string['config_ws_logdetailedoperations']='Insérer une entrée dans le log de Moodle à chaque sous-opération ; par exemple' .
        ' en cas d\'inscription massive, chaque inscription sera loguée';
$string['ws_logerrors']='Loger les erreurs';
$string['config_ws_logerrors']='Insérer une entrée dans le log de Moodle à chaque erreur';

$string['ws_sessiontimeout']='Durée de vie d\'une session';
$string['config_ws_sessiontimeout']='Intervalle de temps en secondes au bout duquel une demande de connexion (opération login) expirera';

$string['ws_debug']='Activer le mode debug';
$string['config_ws_debug']='Dump many intermediate values in moodledata/debug.out file';


$string['ws_accessdisabled']='web service access disabled on this site.';

$string['ws_nomoodle16']='Moodle versions prior to 1.7 are not supported.';

$string['ws_invaliduser']='Invalid username and / or password.';

$string['ws_ipadressmismatch']='ip address has changed for this open session ! $a';
$string['ws_errorregistersession']='unable to register the session';

$string['ws_invalidclient']='Invalid Client connection.';

$string['ws_sqlstrftimedatetime']='%%d/%%m/%%Y %%H:%%i:%%s';

$string['ws_nomatch']='no match found for $a->critere = $a->valeur';
$string['ws_nothingfound']='aucun résultat.';
$string['ws_emptyparameter']='ce paramètre $a ne peut être vide.';
$string['ws_userunknown']='utilisateur $a inconnu.';
$string['ws_courseunknown']='cours $a inconnu.';
$string['ws_groupunknown']='groupe $a inconnu.';
$string['ws_groupingunknown']='groupement $a inconnu.';
$string['ws_roleunknown']='rôle $a inconnu.';
$string['ws_noseegrades']='pas autorisé à voir les notes de $a';
$string['ws_nogradesfound']='pas de notes pour $a->user dans $a->course';
$string['ws_operationnotallowed']='vous n\'avez pas les permissions de faire cela.';
$string['ws_nocourseforuser']='aucun cours trouvé pour $a';
$string['ws_coursewithoutidnumber']='le cours $a n\'a pas de idnumber  (signalez le à votre administrateur)';
$string['ws_nocoursewithidnumberforuser']='aucun cours avec un numéro idnumber trouvé pour $a (signalez le à votre administrateur)';
$string['ws_roleidnotfound']='ce rôle $a n\'existe pas.';
$string['ws_nothingtodo']='rien à faire.';
$string['ws_notsupportedgradebook']='le carnet de notes antérieur à Moodle 1.8 n\'est pas supporté.';



$string['ws_missingvalue']='valeur requise $a manquante';
$string['ws_useridnumberexists']='un utilisateur existe déja avec cet idnumber $a';
$string['ws_courseidnumberexists']='un cours existe déja avec cet idnumber $a';
$string['ws_invalidaction']='action invalide $a';
$string['ws_user_notenroled']='L\'utilisateur $a->user n\'est pas inscrit au cours $a->course.';

$string['nothingtodo']='rien à faire';

$string['nocourses']='pas de cours';
$string['nousers']='pas d\'utilisateurs';
$string['nocategories']='pas de catégories';
$string['noroles']='pas de rôles';
$string['noresources']='pas de ressources';

$string['nosections']='pas de sections';
$string['nogradesfor']='pas de notes pour $a';
$string['nogradesin']='pas de notes dans $a';
$string['nogroupsin']='pas de groupes dans $a';
$string['nogroups']='pas de groupes';
$string['nogrouping']='pas de groupements';


$string['noteachers']='pas d\'enseignants';
$string['noevents']='pas d\'évenements';
$string['nochanges']='aucun changement';
$string['noactivities']='pas d\'activités enregistrées';
$string['nodatabases']='pas d\'activités base de données';
$string['noforums']='pas d\'activités forum';
$string['nowikis']='pas d\'activités wiki';
$string['noassignments']='pas d\'activités devoirs';
$string['nowikipages']='pas de pages wiki';
$string['nolabels']='pas d\'étiquettes';


$string['ws_groupalreadyaffected']='le groupe $a->group appartient déja au cours $a->course.';
$string['ws_groupingalreadyaffected']='le groupement $a->group appartient déja au cours $a->course.';



?>
