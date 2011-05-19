<?php

/**
 * Internationalization file for the Semantic Watchlist extension.
 *
 * @since 0.1
 *
 * @file SemanticWatchlist.i18n.php
 * @ingroup SemanticWatchlist
 *
 * @licence GNU GPL v3+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

$messages = array();

/** English
 * @author Jeroen De Dauw
 */
$messages['en'] = array(
	'semanticwatchlist-desc' => 'Allows specifying groups of semantic properties for one or more categories/namespaces which can then be watched for changes',

	'right-semanticwatch' => 'Use semantic watchlist',
	'right-semanticwatchgroups' => '[[Special:WatchlistConditions|Modify]] the semantic watchlist groups',

	'special-semanticwatchlist' => 'Semantic Watchlist',
	'special-watchlistconditions' => 'Semantic watchlist conditions',

	// Special:WatchlistConditions
	'swl-group-name' => 'Group name:',
	'swl-group-properties' => 'Properties covered by this group:',
	'swl-group-remove-property' => 'Remove property',
	'swl-group-page-selection' => 'Pages in',
	'swl-group-save' => 'Save',
	'swl-group-delete' => 'Delete',
	'swl-group-category' => 'category',
	'swl-group-namespace' => 'namespace',
	'swl-group-concept' => 'concept',
	'swl-group-confirmdelete' => 'Are you sure you want to delete the "$1" watchlist group?',

	// Special:SemanticWatchlist
	'swl-watchlist-position' => "Showing '''$1''' of the last changes starting with '''#$2'''.",
	'swl-watchlist-insertions' => 'Added:',
	'swl-watchlist-deletions' => 'Deleted:',
	'swl-watchlist-pagincontrol' => 'View ($1) ($2)',
	'swl-watchlist-firstn' => 'first $1',
	'swl-watchlist-firstn-title' => 'First $1 {{PLURAL:$1|result|results}}',

	// Email
	'swl-email-propschanged' => 'Properties have changed at $1',
	'swl-email-propschanged-long' => "One or more properties you watch at '''$1''' have been changed by user '''$2''' at $4 on $5. You can view these and other changes on [$3 your semantic watchlist].",
	'swl-email-changes' => 'Property changes on [$2 $1]:',

	// Preferences
	'prefs-swl' => 'Semantic watchlist',
	'prefs-swlgroup' => 'Groups to watch',
	'prefs-swlnotification' => 'Notification options',
	'swl-prefs-category-label' => "'''$1''': {{PLURAL:$2|property|properties}} $3 from category ''$4''",
	'swl-prefs-namespace-label' => "'''$1''': {{PLURAL:$2|property|properties}} $3 from namespace ''$4''",
	'swl-prefs-concept-label' => "'''$1''': {{PLURAL:$2|property|properties}} $3 from concept ''$4''",
	'swl-prefs-emailnofity' => 'E-mail me on changes to properties I am watching',
);

/** Message documentation (Message documentation)
 * @author Jeroen De Dauw
 */
$messages['qqq'] = array(
	'semanticwatchlist-desc' => '{{desc}}',
	'right-semanticwatch' => '{{doc-right|semanticwatch}}',
	'right-semanticwatchgroups' => '{{doc-right|semanticwatchgroups}}',
	'swl-email-propschanged-long' => '$1: wiki name, $2: user name, $3: url, $4: time, $5: date',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Purodha
 */
$messages['de'] = array(
	'semanticwatchlist-desc' => 'Ermöglicht das Festlegen von Gruppen semantischer Attribute für eine oder mehrere Kategorien/ Namensräume in Form semantischer Beobachtungslisten',
	'right-semanticwatch' => 'Semantische Beobachtungslisten verwenden',
	'right-semanticwatchgroups' => 'Semantische Beobachtungslisten [[Special:WatchlistConditions|anpassen]]',
	'special-semanticwatchlist' => 'Semantische Beobachtungsliste',
	'special-watchlistconditions' => 'Einstellungen zu semantischen Beobachtungslisten',
	'swl-group-name' => 'Gruppenname:',
	'swl-group-properties' => 'Attribute zu dieser Gruppe:',
	'swl-group-remove-property' => 'Attribut entfernen',
	'swl-group-page-selection' => 'Seiten in',
	'swl-group-save' => 'Speichern',
	'swl-group-delete' => 'Löschen',
	'swl-group-category' => 'Kategorie',
	'swl-group-namespace' => 'Namensraum',
	'swl-group-concept' => 'Konzept',
	'swl-group-confirmdelete' => 'Soll die Beobachtungsliste "$1" tatsächlich gelöscht werden?',
	'swl-watchlist-position' => "Anzeige der letzten '''$1''' Änderungen beginnend mit '''#$2'''.",
	'swl-watchlist-insertions' => 'Hinzugefügt:',
	'swl-watchlist-deletions' => 'Gelöscht:',
	'swl-watchlist-pagincontrol' => 'Zeige ($1) ($2)',
	'swl-watchlist-firstn' => 'erstes $1',
	'swl-watchlist-firstn-title' => '{{PLURAL:$1|Das erste Ergebnis|Die ersten $1 Ergebnisse}}',
	'swl-email-propschanged' => 'Attribute wurden auf $1 geändert',
	'swl-email-propschanged-long' => "Eines oder mehrere der auf '''$1''' beobachteten Attribute wurden von Benutzer '''$2''' am $4 um $5 Uhr geändert. Diese und andere Änderungen werden auf [$3 dieser semantischen Beobachtungsliste] angezeigt.",
	'swl-email-changes' => 'Attributänderungen auf [$2 $1]:',
	'prefs-swl' => 'Semantische Beobachtungsliste',
	'prefs-swlgroup' => 'Zu beobachtende Gruppen',
	'prefs-swlnotification' => 'Benachrichtigungsoptionen',
	'swl-prefs-category-label' => "'''$1''': {{PLURAL:$2|Attribut|Attribute}} $3 in Kategorie ''$4''",
	'swl-prefs-namespace-label' => "'''$1''': {{PLURAL:$2|Attribut|Attribute}} $3 im Namensraum ''$4''",
	'swl-prefs-concept-label' => "'''$1''': {{PLURAL:$2|Attribut|Attribute}} $3 im Konzept ''$4''",
	'swl-prefs-emailnofity' => 'Bei Änderungen an beobachteten Attributen E-Mails senden',
);

/** French (Français)
 * @author IAlex
 * @author Sherbrooke
 */
$messages['fr'] = array(
	'semanticwatchlist-desc' => 'Permet de définir des groupes de propriétés sémantiques pour une ou plusieurs catégories / espaces de noms qui peuvent ensuite être inscrits sur la liste de suivi sémantique',
	'right-semanticwatch' => 'Utiliser la liste de suivi sémantique',
	'right-semanticwatchgroups' => '[[Special:WatchlistConditions|Modifier]] les groupes de la liste de suivi sémantique',
	'special-semanticwatchlist' => 'Liste de suivi sémantique',
	'special-watchlistconditions' => 'Paramètres de la liste de suivi sémantique',
	'swl-group-name' => 'Nom du groupe:',
	'swl-group-properties' => 'Propriétés de ce groupe :',
	'swl-group-remove-property' => 'Retirez la propriété',
	'swl-group-page-selection' => 'Pages dans la',
	'swl-watchlist-insertions' => 'Ajouté :',
	'swl-watchlist-deletions' => 'Supprimé :',
	'swl-watchlist-pagincontrol' => 'Voir ($1) ($2)',
	'swl-watchlist-firstn' => '$1 premiers',
	'swl-watchlist-firstn-title' => '$1 {{PLURAL:$1|permier résultat|permiers résultats}}',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'semanticwatchlist-desc' => 'Permite especificar grupos de propiedades semánticas para unha ou varias categorías ou espazos de nomes que poden ser vixiados despois',
	'right-semanticwatch' => 'Empregar a lista de vixilancia semántica',
	'right-semanticwatchgroups' => '[[Special:WatchlistConditions|Modificar]] os grupos da lista de vixilancia semántica',
	'special-semanticwatchlist' => 'Lista de vixilancia semántica',
	'special-watchlistconditions' => 'Condicións da lista de vixilancia semántica',
	'swl-group-name' => 'Nome do grupo:',
	'swl-group-properties' => 'Propiedades cubertas por este grupo:',
	'swl-group-remove-property' => 'Eliminar a propiedade',
	'swl-group-page-selection' => 'Páxinas en',
	'swl-watchlist-position' => "Mostrando '''$1''' dos últimos cambios, comezando polo '''nº $2'''.",
	'swl-watchlist-insertions' => 'Engadido:',
	'swl-watchlist-deletions' => 'Borrado:',
	'swl-watchlist-pagincontrol' => 'Ver ($1) ($2)',
	'swl-watchlist-firstn' => '$1 primeiras',
	'swl-watchlist-firstn-title' => '{{PLURAL:$1|Primeiro resultado|Primeiros $1 resultados}}',
	'swl-email-propschanged' => 'As propiedades cambiaron ás $1',
	'swl-email-changes' => 'Cambio nas propiedades en [$2 $1]:',
	'prefs-swl' => 'Lista de vixilancia semántica',
	'prefs-swlgroup' => 'Grupos a vixiar',
	'prefs-swlnotification' => 'Opcións de notificación',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'semanticwatchlist-desc' => 'Permitte specificar gruppos de proprietates semantic pro un o plus categorias o spatios de nomines, le quales pote alora esser observate pro modificationes',
	'right-semanticwatch' => 'Usar observatorio semantic',
	'right-semanticwatchgroups' => '[[Special:WatchlistConditions|Modificar]] le gruppos del observatorio semantic',
	'special-semanticwatchlist' => 'Observatorio semantic',
	'special-watchlistconditions' => 'Conditiones del observatorio semantic',
	'swl-group-name' => 'Nomine del gruppo:',
	'swl-group-properties' => 'Proprietates coperite per iste gruppo:',
	'swl-group-remove-property' => 'Remover proprietate',
	'swl-group-page-selection' => 'Paginas in',
	'swl-watchlist-position' => "Presenta '''$1''' del ultime modificationes a partir del '''№ $2'''.",
	'swl-watchlist-insertions' => 'Addite:',
	'swl-watchlist-deletions' => 'Delite:',
	'swl-watchlist-pagincontrol' => 'Vider ($1) ($2)',
	'swl-watchlist-firstn' => 'prime $1',
	'swl-watchlist-firstn-title' => 'Le prime {{PLURAL:$1|resultato|$1 resultatos}}',
	'swl-email-propschanged' => 'Proprietates ha cambiate a $1',
	'swl-email-propschanged-long' => "Un o plus proprietates que tu observa a ''$1''' ha essite cambiate per le usator '''$2''' a $4. Tu pote vider iste e altere cambios in [$3 tu observatorio semantic].",
	'swl-email-changes' => 'Cambios de proprietate in [$2 $1]:',
	'prefs-swl' => 'Observatorio semantic',
	'prefs-swlgroup' => 'Gruppos a observar',
	'prefs-swlnotification' => 'Optiones de notification',
	'swl-prefs-category-label' => "'''$1''': {{PLURAL:$2|proprietate|proprietates}} $3 del categoria ''$4''",
	'swl-prefs-namespace-label' => "'''$1''': {{PLURAL:$2|proprietate|proprietates}} $3 del spatio de nomines ''$4''",
	'swl-prefs-concept-label' => "'''$1''': {{PLURAL:$2|proprietate|proprietates}} $3 del concepto ''$4''",
	'swl-prefs-emailnofity' => 'Inviar me e-mail in caso de modificationes in proprietates que io observa',
);

/** Indonesian (Bahasa Indonesia)
 * @author IvanLanin
 */
$messages['id'] = array(
	'semanticwatchlist-desc' => 'Memungkinkan penetapan kelompok properti semantik untuk satu atau lebih kategori/ruang nama yang kemudian dapat dipantau perubahannya',
	'right-semanticwatch' => 'Menggunakan daftar pantauan semantik',
	'right-semanticwatchgroups' => '[[Special:WatchlistConditions|Mengubah]] kelompok daftar pantauan semantik',
	'special-semanticwatchlist' => 'Daftar Pantau Semantik',
	'special-watchlistconditions' => 'Kriteria daftar pantau semantik',
	'swl-group-name' => 'Nama kelompok:',
	'swl-group-properties' => 'Properti yang dicakup oleh kelompok ini:',
	'swl-group-remove-property' => 'Hapus properti',
	'swl-group-page-selection' => 'Halaman dalam',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'semanticwatchlist-desc' => 'Määt et müjjelesch, Jroppe vun semantesche Eijeschaffte aanzjävve, för Saachjroppe un Appachtemangs, di dann op en Oppaßleß kumme un bewach wääde, för der Fall, dat se jeändert wääde.',
	'right-semanticwatch' => 'De semantesche Oppaßleß verwände',
	'right-semanticwatchgroups' => '[[Special:WatchlistConditions|Jroppe ändere]] för de semantesche Oppaßleßte',
	'special-semanticwatchlist' => 'Semantesch Oppaßleß',
	'special-watchlistconditions' => 'Enshtällonge för de semantesche Oppaßleßte',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'right-semanticwatch' => 'Semantesch Iwwerwaachungslëscht benotzen',
	'special-semanticwatchlist' => 'Semantesch Iwwerwaachungslëscht',
	'special-watchlistconditions' => 'Astellunge vun der semantescher Iwwerwaachnugslëscht',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'semanticwatchlist-desc' => 'Овозможува назначување на групи семантички својства за една или повеќе категории/именски простори што можат да се набљудуваат (дали се измениле)',
	'right-semanticwatch' => 'Користење на семантички список на набљудувања',
	'right-semanticwatchgroups' => '[[Special:WatchlistConditions|Менување]] на групи од семантички списоци на набљудувања',
	'special-semanticwatchlist' => 'Семантички список на набљудувања',
	'special-watchlistconditions' => 'Услови за семантичкиот список на набљудувања',
	'swl-group-name' => 'Име на групата:',
	'swl-group-properties' => 'Својства покриени со оваа група:',
	'swl-group-remove-property' => 'Отстрани својство',
	'swl-group-page-selection' => 'Страници во',
	'swl-watchlist-position' => "Приказ на '''$1''' од последните промени, почнувајќи од '''бр. $2'''.",
	'swl-watchlist-insertions' => 'Додадено:',
	'swl-watchlist-deletions' => 'Избришано:',
	'swl-watchlist-pagincontrol' => 'Видете ($1) ($2)',
	'swl-watchlist-firstn' => 'први $1',
	'swl-watchlist-firstn-title' => '{{PLURAL:$1|Прв $1 резултат|Први $1 резултати}}',
	'swl-email-propschanged' => 'Својствата на $1 се имаат изменето',
	'swl-email-propschanged-long' => "Едно или повеќе својства на '''$1''' што ги набљудувате се изменети од корисникот '''$2''' на $4. Можете да ги погледате овие и други промени на [$3 вашиот семантички список на набљудувања].",
	'swl-email-changes' => 'Измени во својства на [$2 $1]:',
	'prefs-swl' => 'Семантички список на набљудувања',
	'prefs-swlgroup' => 'Групи за набљудување',
	'prefs-swlnotification' => 'Можности за известување',
	'swl-prefs-emailnofity' => 'Испрати ми е-пошта кога ќе се изменат својствата што ги набљудувам',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'semanticwatchlist-desc' => 'Membolehkan penenetuan kumpulan-kumpulan sifat semantik untuk satu atau lebih kategori/ruang nama yang kemudiannya boleh dipantau untuk perubahan',
	'right-semanticwatch' => 'Gunakan senarai pantau semantik',
	'right-semanticwatchgroups' => '[[Special:WatchlistConditions|Ubah suai]] kumpulan senarai pantau semantik',
	'special-semanticwatchlist' => 'Senarai Pantau Semantik',
	'special-watchlistconditions' => 'Syarat-syarat senarai pantau semantik',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'semanticwatchlist-desc' => 'Maakt het mogelijk groepen van semantische eigenschappen aan te geven voor een of meer categorieën of naamruimten, zodat wijzigingen kunnen worden weergegeven',
	'right-semanticwatch' => 'Semantische volglijst gebruiken',
	'right-semanticwatchgroups' => 'De semantische volglijstgroepen [[Special:WatchlistConditions|aanpassen]]',
	'special-semanticwatchlist' => 'Schematische volglijst',
	'special-watchlistconditions' => 'Voorwaarden voor semantische volglijst',
	'swl-group-name' => 'Groepsnaam:',
	'swl-group-properties' => 'Eigenschappen die onder deze groep vallen:',
	'swl-group-remove-property' => 'Eigenschap verwijderen',
	'swl-group-page-selection' => "Pagina's in",
);

/** Portuguese (Português)
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'semanticwatchlist-desc' => 'Permite especificar, para uma ou mais categorias ou espaços nominais, grupos de propriedades semânticas que podem depois ser vigiadas',
	'right-semanticwatch' => 'Usar a lista de propriedades semânticas vigiadas',
	'right-semanticwatchgroups' => '[[Special:WatchlistConditions|Alterar]] os grupos de propriedades semânticas vigiadas',
	'special-semanticwatchlist' => 'Lista das Propriedades Semânticas Vigiadas',
	'special-watchlistconditions' => 'Condições da lista das propriedades semânticas vigiadas',
	'swl-group-name' => 'Nome de grupo:',
	'swl-group-properties' => 'Propriedades abrangidas por este grupo:',
	'swl-group-remove-property' => 'Remover propriedade',
	'swl-group-page-selection' => 'Páginas em',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'semanticwatchlist-desc' => 'Nagpapahintulot ng pagtutukoy ng mga pangkat ng mga pag-aaring semantiko para sa isa o mas marami pang mga kategorya/mga puwang na pampangalan na maaari namang bantayan para sa mga pagbabago',
	'right-semanticwatch' => 'Gamitin ang semantikong talaan ng binabantayan',
	'right-semanticwatchgroups' => '[[Special:WatchlistConditions|Baguhin]] ang semantikong mga pangkat ng talaan ng binabantayan',
	'special-semanticwatchlist' => 'Semantikong Talaan ng Binabantayan',
	'special-watchlistconditions' => 'Mga kalagayan ng semantikong talaan ng binabantayan',
);

