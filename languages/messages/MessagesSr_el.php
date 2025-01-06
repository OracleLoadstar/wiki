<?php
/** Serbian (Latin script) (srpski (latinica))
 *
 * @file
 * @ingroup Languages
 *
 * @author Aca
 * @author FriedrickMILBarbarossa
 * @author Geitost
 * @author Kaganer
 * @author Liangent
 * @author Meno25
 * @author Michaello
 * @author Milicevic01
 * @author Rancher
 * @author Red Baron
 * @author Reedy
 * @author Slaven Kosanovic
 * @author Srđan
 * @author TheStefan12345
 * @author Жељко Тодоровић
 * @author Михајло Анђелковић
 * @author לערי ריינהארט
 */

$fallback = 'sr-latn, sr';

$namespaceNames = [
	NS_MEDIA            => 'Medij',
	NS_SPECIAL          => 'Posebno',
	NS_TALK             => 'Razgovor',
	NS_USER             => 'Korisnik',
	NS_USER_TALK        => 'Razgovor_s_korisnikom',
	NS_PROJECT_TALK     => 'Razgovor_o_$1',
	NS_FILE             => 'Datoteka',
	NS_FILE_TALK        => 'Razgovor_o_datoteci',
	NS_MEDIAWIKI        => 'Medijaviki',
	NS_MEDIAWIKI_TALK   => 'Razgovor_o_Medijavikiju',
	NS_TEMPLATE         => 'Šablon',
	NS_TEMPLATE_TALK    => 'Razgovor_o_šablonu',
	NS_HELP             => 'Pomoć',
	NS_HELP_TALK        => 'Razgovor_o_pomoći',
	NS_CATEGORY         => 'Kategorija',
	NS_CATEGORY_TALK    => 'Razgovor_o_kategoriji',
];

$namespaceAliases = [
	'Medija'                   => NS_MEDIA,
	'Specijalno'               => NS_SPECIAL,
	'Saradnik'                 => NS_USER,
	'Suradnik'                 => NS_USER,
	'Razgovor_sa_korisnikom'   => NS_USER_TALK,
	'Razgovor_sa_saradnikom'   => NS_USER_TALK,
	'Razgovor_s_saradnikom'    => NS_USER_TALK,
	'Razgovor_sa_suradnikom'   => NS_USER_TALK,
	'Razgovor_s_suradnikom'    => NS_USER_TALK,
	'Fotografija'              => NS_FILE,
	'Slika'                    => NS_FILE,
	'Razgovor_o_fotografiji'   => NS_FILE_TALK,
	'Razgovor_o_slici'         => NS_FILE_TALK,
	'MedijaViki'               => NS_MEDIAWIKI,
	'MedijaWiki'               => NS_MEDIAWIKI,
	'Razgovor_o_MedijaVikiju'  => NS_MEDIAWIKI_TALK,
	'Razgovor_o_MedijaViki-ju' => NS_MEDIAWIKI_TALK,
	'Razgovor_o_MediaWiki-ju'  => NS_MEDIAWIKI_TALK,
	'Razgovor_o_MediaWikiju'   => NS_MEDIAWIKI_TALK,
	'Razgovor_o_MedijaWiki-ju' => NS_MEDIAWIKI_TALK,
	'Razgovor_o_MedijaWikiju'  => NS_MEDIAWIKI_TALK,
	'Razgovor_o_Medijaviki-ju' => NS_MEDIAWIKI_TALK,
	'Predložak'                => NS_TEMPLATE,
	'Razgovor_o_predlošku'     => NS_TEMPLATE_TALK,
];

$datePreferenceMigrationMap = [
	'default',
	'hh:mm d. month y.',
	'hh:mm d month y',
	'hh:mm dd.mm.yyyy',
	'hh:mm d.m.yyyy',
	'hh:mm d. mon y.',
	'hh:mm d mon y',
	'h:mm d. month y.',
	'h:mm d month y',
	'h:mm dd.mm.yyyy',
	'h:mm d.m.yyyy',
	'h:mm d. mon y.',
	'h:mm d mon y',
];

/** @phpcs-require-sorted-array */
$specialPageAliases = [
	'Activeusers'               => [ 'Aktivni_korisnici', 'AktivniKorisnici' ],
	'Allmessages'               => [ 'Sve_poruke', 'SvePoruke' ],
	'AllMyUploads'              => [ 'Sva_moja_otpremanja', 'SvaMojaOtpremanja', 'SveMojeDatoteke' ],
	'Allpages'                  => [ 'Sve_stranice', 'SveStranice' ],
	'Ancientpages'              => [ 'Najstarije_stranice', 'NajstarijeStranice', 'NajstarijiČlanci' ],
	'ApiHelp'                   => [ 'Pomoć_oko_API-ja', 'API_pomoć' ],
	'ApiSandbox'                => [ 'Pesak_API-ja', 'Pijesak_API-ja', 'API_pesak', 'API_pijesak' ],
	'AutoblockList'             => [ 'Spisak_autoblokada', 'SpisakAutoblokova', 'Autoblokade', 'Autoblokovi' ],
	'Badtitle'                  => [ 'Neispravan_naslov', 'Loš_naslov', 'LošNaslov' ],
	'Blankpage'                 => [ 'Prazna_stranica', 'PraznaStranica' ],
	'Block'                     => [ 'Blokiraj', 'BlokirajIP', 'BlokirajKorisnika' ],
	'BlockList'                 => [ 'Spisak_blokada', 'SpisakBlokada', 'SpisakBlokiranih', 'PopisBlokiranih' ],
	'Booksources'               => [ 'Štampani_izvori', 'ŠtampaniIzvori', 'KnjiževniIzvori' ],
	'BotPasswords'              => [ 'Lozinke_botova', 'LozinkeBotova' ],
	'BrokenRedirects'           => [ 'Pokvarena_preusmerenja', 'Pokvarena_preusmjerenja', 'Neispravna_preusmerenja', 'Neispravna_preusmjerenja', 'PokvarenaPreusmerenja', 'PokvarenaPreusmjerenja' ],
	'Categories'                => [ 'Kategorije' ],
	'ChangeContentModel'        => [ 'Promeni_sadržinski_model', 'Promijeni_sadržinski_model', 'PromeniModelSadržaja', 'PromijeniModelSadržaja', 'IzmeniModelSadržaja', 'IzmijeniModelSadržaja' ],
	'ChangeCredentials'         => [ 'Promeni_akreditive', 'Promijeni_akreditive', 'PromeniAkreditive', 'PromijeniAkreditive' ],
	'ChangeEmail'               => [ 'Promeni_imejl', 'Promijeni_imejl', 'PromeniImejl', 'PromijeniImejl', 'PromeniImejlAdresu', 'PromijeniImejlAdresu' ],
	'ChangePassword'            => [ 'Promeni_lozinku', 'Promijeni_lozinku', 'PromeniLozinku', 'PromijeniLozinku' ],
	'ComparePages'              => [ 'Uporedi_stranice', 'UporediStranice' ],
	'Confirmemail'              => [ 'Potvrdi_imejl', 'PotvrdiImejl', 'PotvrdiE-poštu', 'Potvrda_e-pošte' ],
	'Contributions'             => [ 'Doprinosi', 'Prilozi' ],
	'CreateAccount'             => [ 'Otvori_nalog', 'OtvoriNalog' ],
	'Deadendpages'              => [ 'Ćorsokaci', 'StraniceKojeNeVodeNikuda', 'SlepeStranice' ],
	'DeletedContributions'      => [ 'Izbrisani_doprinosi', 'ObrisaniDoprinosi' ],
	'Diff'                      => [ 'Razlike' ],
	'DoubleRedirects'           => [ 'Dvostruka_preusmerenja', 'Dvostruka_preusmjerenja', 'DvostrukaPreusmerenja', 'DvostrukaPreusmjerenja' ],
	'EditPage'                  => [ 'Uredi_stranicu', 'UrediStranicu', 'Uredi' ],
	'EditTags'                  => [ 'Uredi_oznake', 'UrediOznake' ],
	'EditWatchlist'             => [ 'Uredi_spisak_nadgledanja', 'UrediSpisakNadgledanja' ],
	'Emailuser'                 => [ 'Pošalji_imejl_korisniku', 'PošaljiImejlKorisniku' ],
	'ExpandTemplates'           => [ 'Proširi_šablone', 'ProširiŠablone' ],
	'Export'                    => [ 'Izvezi' ],
	'Fewestrevisions'           => [ 'Najmanje_izmena', 'Najmanje_izmjena', 'NajmanjeIzmena', 'NajmanjeIzmjena', 'ČlanciSaNajmanjeRevizija' ],
	'FileDuplicateSearch'       => [ 'Pretraga_duplikata_datoteka', 'PretragaDuplikataDatoteka' ],
	'Filepath'                  => [ 'Putanja_do_datoteke', 'Putanja_datoteke', 'PutanjaDatoteke' ],
	'GoToInterwiki'             => [ 'Poseti_međuviki', 'Posjeti_međuviki', 'PosetiMeđuviki', 'PosjetiMeđuviki' ],
	'Import'                    => [ 'Uvezi' ],
	'Invalidateemail'           => [ 'Otkaži_potvrdu_imejla', 'PoništiImejl' ],
	'JavaScriptTest'            => [ 'Testiranje_JavaScript-a', 'Testiranje_JavaScripta', 'TestiranjeJavaskripta' ],
	'LinkAccounts'              => [ 'Poveži_naloge', 'PovežiNaloge' ],
	'LinkSearch'                => [ 'Pretraga_veza', 'PretragaVeza' ],
	'Listadmins'                => [ 'Spisak_administratora', 'SpisakAdministratora', 'PopisAdministratora' ],
	'Listbots'                  => [ 'Spisak_botova', 'SpisakBotova', 'PopisBotova' ],
	'ListDuplicatedFiles'       => [ 'Spisak_dupliranih_datoteka', 'SpisakDuplikata' ],
	'Listfiles'                 => [ 'Spisak_datoteka', 'SpisakDatoteka', 'SpisakSlika' ],
	'Listgrants'                => [ 'Spisak_dozvola', 'SpisakDozvola' ],
	'Listgrouprights'           => [ 'Spisak_prava_korisničkih_grupa', 'Spisak_korisničkih_prava', 'SpisakKorisničkihPrava' ],
	'Listredirects'             => [ 'Spisak_preusmerenja', 'Spisak_preusmjerenja', 'SpisakPreusmerenja', 'SpisakPreusmjerenja' ],
	'Listusers'                 => [ 'Spisak_korisnika', 'SpisakKorisnika', 'Korisnički_spisak', 'KorisničkiSpisak' ],
	'Lockdb'                    => [ 'Zaključaj_bazu_podataka', 'ZaključajBazuPodataka', 'Zaključaj_bazu', 'ZaključajBazu' ],
	'Log'                       => [ 'Dnevnik', 'Izveštaj', 'Izvještaj', 'Izveštaji', 'Izvještaji' ],
	'Lonelypages'               => [ 'Siročići' ],
	'Longpages'                 => [ 'Duge_stranice', 'DugačkeStranice', 'DugačkeStrane' ],
	'MediaStatistics'           => [ 'Statistika_datoteka', 'StatistikeMedija' ],
	'MergeHistory'              => [ 'Objedini_istoriju', 'Spoji_istoriju', 'SpojiIstoriju' ],
	'MIMEsearch'                => [ 'Pretraga_po_MIME-u', 'MIME_pretraga' ],
	'Mostcategories'            => [ 'Najviše_kategorija', 'NajvišeKategorija', 'ČlanciSaNajvišeKategorija' ],
	'Mostimages'                => [ 'Najpovezanije_datoteke', 'NajpovezanijeDatoteke', 'NajpovezanijeSlike' ],
	'Mostinterwikis'            => [ 'Najviše_međuvikija', 'NajvišeMeđuvikija' ],
	'Mostlinked'                => [ 'Najpovezanije_stranice', 'NajpovezanijeStranice', 'NajpovezanijeStrane' ],
	'Mostlinkedcategories'      => [ 'Najpovezanije_kategorije', 'NajpovezanijeKategorije' ],
	'Mostlinkedtemplates'       => [ 'Najpovezaniji_šabloni', 'NajpovezanijiŠabloni' ],
	'Mostrevisions'             => [ 'Najviše_izmena', 'Najviše_izmjena', 'NajvišeIzmena', 'NajvišeIzmjena', 'NajvišeRevizija', 'ČlanciSaNajvišeRevizija' ],
	'Movepage'                  => [ 'Premesti_stranicu', 'Premjesti_stranicu', 'PremestiStranicu', 'PremjestiStranicu', 'Premesti', 'Premjesti', 'Preusmeri', 'Preusmjeri' ],
	'Mycontributions'           => [ 'Moji_doprinosi', 'MojiDoprinosi', 'Moji_prilozi' ],
	'MyLanguage'                => [ 'Moj_jezik', 'MojJezik' ],
	'Mypage'                    => [ 'Moja_stranica', 'MojaStranica' ],
	'Mytalk'                    => [ 'Moj_razgovor', 'MojRazgovor' ],
	'Myuploads'                 => [ 'Moja_otpremanja', 'MojaOtpremanja', 'Moja_slanja' ],
	'Newimages'                 => [ 'Nove_datoteke', 'NoveDatoteke', 'NoviFajlovi', 'NoveSlike' ],
	'Newpages'                  => [ 'Nove_stranice', 'NoveStranice', 'NoveStrane' ],
	'NewSection'                => [ 'Novi_odeljak', 'Novi_odjeljak', 'NoviOdeljak', 'NoviOdjeljak' ],
	'PageData'                  => [ 'Podaci_stranice', 'PodaciStranice' ],
	'PageHistory'               => [ 'Istorija_stranice', 'IstorijaStranice', 'Istorija' ],
	'PageLanguage'              => [ 'Jezik_stranice', 'JezikStranice' ],
	'PagesWithProp'             => [ 'Stranice_sa_svojstvom', 'StraniceSaSvojstvom' ],
	'PasswordPolicies'          => [ 'Pravila_o_lozinkama', 'PravilaZaLozinke' ],
	'PasswordReset'             => [ 'Resetovanje_lozinke', 'ResetovanjeLozinke' ],
	'PermanentLink'             => [ 'Trajna_veza', 'TrajnaVeza', 'Privremena_veza' ],
	'Preferences'               => [ 'Podešavanja', 'Postavke' ],
	'Prefixindex'               => [ 'Stranice_s_prefiksom', 'StraniceSaPrefiksom' ],
	'Protectedpages'            => [ 'Zaštićene_stranice', 'ZaštićeneStranice' ],
	'Protectedtitles'           => [ 'Zaštićeni_naslovi', 'ZaštićeniNaslovi' ],
	'Purge'                     => [ 'Osveži', 'Osvježi' ],
	'RandomInCategory'          => [ 'Nasumična_stranica_u_kategoriji', 'Slučajna_stranica_u_kategoriji', 'Slučajna_strana_u_kategoriji' ],
	'Randompage'                => [ 'Nasumična_stranica', 'SlučajnaStranica', 'SlučajnaStrana' ],
	'Randomredirect'            => [ 'Nasumično_preusmerenje', 'Nasumično_preusmjerenje', 'SlučajnoPreusmerenje', 'SlučajnoPreusmjerenje' ],
	'Randomrootpage'            => [ 'Nasumična_korenska_stranica', 'Nasumična_korijenska_stranica', 'SlučajnaOsnovnaStranica', 'SlučajnaOsnovnaStrana' ],
	'Recentchanges'             => [ 'Skorašnje_izmene', 'Skorašnje_izmjene', 'SkorašnjeIzmene', 'SkorašnjeIzmjene' ],
	'Recentchangeslinked'       => [ 'Povezane_izmene', 'Povezane_izmjene', 'SrodneIzmene', 'SrodneIzmjene' ],
	'Redirect'                  => [ 'Preusmerenje', 'Preusmjerenje' ],
	'RemoveCredentials'         => [ 'Ukloni_akreditive', 'UkloniAkreditive' ],
	'Renameuser'                => [ 'PreimenujKorisnika', 'Preimenuj_korisnika' ],
	'ResetTokens'               => [ 'Resetuj_tokene', 'ResetujŽetone' ],
	'Revisiondelete'            => [ 'Brisanje_izmene', 'Brisanje_izmjene', 'BrisanjeIzmene', 'BrisanjeIzmjene', 'UklanjanjeIzmene', 'UklanjanjeIzmjene' ],
	'RunJobs'                   => [ 'Izvrši_poslove', 'IzvršiPoslove' ],
	'Search'                    => [ 'Pretraži' ],
	'Shortpages'                => [ 'Kratke_stranice', 'KratkeStranice', 'KratkiČlanci' ],
	'Specialpages'              => [ 'Posebne_stranice', 'PosebneStranice', 'PosebneStrane', 'Specijalne_stranice', 'SpecijalneStrane' ],
	'Statistics'                => [ 'Statistika', 'Statistike' ],
	'Tags'                      => [ 'Oznake' ],
	'TrackingCategories'        => [ 'Kategorije_za_praćenje', 'KategorijeZaPraćenje' ],
	'Unblock'                   => [ 'Deblokiraj' ],
	'Uncategorizedcategories'   => [ 'Nekategorisane_kategorije', 'NekategorisaneKategorije', 'KategorijeBezKategorija' ],
	'Uncategorizedimages'       => [ 'Nekategorisane_datoteke', 'NekategorisaneDatoteke', 'SlikeBezKategorija' ],
	'Uncategorizedpages'        => [ 'Nekategorisane_stranice', 'NekategorisaneStranice', 'Članci_bez_kategorija', 'ČlanciBezKategorija' ],
	'Uncategorizedtemplates'    => [ 'Nekategorisani_šabloni', 'NekategorisaniŠabloni', 'ŠabloniBezKategorija' ],
	'Undelete'                  => [ 'Vrati' ],
	'UnlinkAccounts'            => [ 'Odveži_naloge', 'OdvežiNaloge', 'UkloniPovezivanjeNaloga' ],
	'Unlockdb'                  => [ 'Otključaj_bazu_podataka', 'OtključajBazuPodataka', 'Otključaj_bazu', 'OtključajBazu' ],
	'Unusedcategories'          => [ 'Neupotrebljene_kategorije', 'NeiskorišćeneKategorije' ],
	'Unusedimages'              => [ 'Neupotrebljene_datoteke', 'NeiskorišćeneDatoteke', 'NeiskorišćeneSlike' ],
	'Unusedtemplates'           => [ 'Neupotrebljeni_šabloni', 'NeiskorišćeniŠabloni' ],
	'Unwatchedpages'            => [ 'Nenadgledane_stranice', 'NenadgledaneStranice' ],
	'Upload'                    => [ 'Otpremi', 'Pošalji' ],
	'UploadStash'               => [ 'Skladište' ],
	'Userlogin'                 => [ 'Korisnička_prijava', 'KorisničkaPrijava' ],
	'Userlogout'                => [ 'Korisnička_odjava', 'KorisničkaOdjava' ],
	'Userrights'                => [ 'Korisnička_prava', 'KorisničkaPrava' ],
	'Version'                   => [ 'Verzija', 'Izdanje' ],
	'Wantedcategories'          => [ 'Tražene_kategorije', 'TraženeKategorije' ],
	'Wantedfiles'               => [ 'Tražene_datoteke', 'TraženeDatoteke', 'TraženeSlike' ],
	'Wantedpages'               => [ 'Tražene_stranice', 'TraženeStranice', 'TraženeStrane' ],
	'Wantedtemplates'           => [ 'Traženi_šabloni', 'TraženiŠabloni' ],
	'Watchlist'                 => [ 'Spisak_nadgledanja', 'SpisakNadgledanja' ],
	'Whatlinkshere'             => [ 'Šta_vodi_ovamo', 'Šta_vodi_dovde', 'ŠtaVodiOvde', 'ŠtaVodiOvdje', 'Šta_je_povezano_ovde', 'Šta_je_povezano_ovdje' ],
	'Withoutinterwiki'          => [ 'Bez_međuvikija', 'BezMeđuvikija' ],
];

$datePreferences = [
	'default',
	'hh:mm d. month y.',
	'hh:mm d month y',
	'hh:mm dd.mm.yyyy',
	'hh:mm d.m.yyyy',
	'hh:mm d. mon y.',
	'hh:mm d mon y',
	'h:mm d. month y.',
	'h:mm d month y',
	'h:mm dd.mm.yyyy',
	'h:mm d.m.yyyy',
	'h:mm d. mon y.',
	'h:mm d mon y',
];

$defaultDateFormat = 'hh:mm d. month y.';

$dateFormats = [
	/*
	'Није битно',
	'06:12, 5. јануар 2001.',
	'06:12, 5 јануар 2001',
	'06:12, 05.01.2001.',
	'06:12, 5.1.2001.',
	'06:12, 5. јан 2001.',
	'06:12, 5 јан 2001',
	'6:12, 5. јануар 2001.',
	'6:12, 5 јануар 2001',
	'6:12, 05.01.2001.',
	'6:12, 5.1.2001.',
	'6:12, 5. јан 2001.',
	'6:12, 5 јан 2001',
	 */

	'hh:mm d. month y. time'    => 'H:i',
	'hh:mm d month y time'      => 'H:i',
	'hh:mm dd.mm.yyyy time'     => 'H:i',
	'hh:mm d.m.yyyy time'       => 'H:i',
	'hh:mm d. mon y. time'      => 'H:i',
	'hh:mm d mon y time'        => 'H:i',
	'h:mm d. month y. time'     => 'G:i',
	'h:mm d month y time'       => 'G:i',
	'h:mm dd.mm.yyyy time'      => 'G:i',
	'h:mm d.m.yyyy time'        => 'G:i',
	'h:mm d. mon y. time'       => 'G:i',
	'h:mm d mon y time'         => 'G:i',

	'hh:mm d. month y. date'    => 'j. F Y.',
	'hh:mm d month y date'      => 'j F Y',
	'hh:mm dd.mm.yyyy date'     => 'd.m.Y',
	'hh:mm d.m.yyyy date'       => 'j.n.Y',
	'hh:mm d. mon y. date'      => 'j. M Y.',
	'hh:mm d mon y date'        => 'j M Y',
	'h:mm d. month y. date'     => 'j. F Y.',
	'h:mm d month y date'       => 'j F Y',
	'h:mm dd.mm.yyyy date'      => 'd.m.Y',
	'h:mm d.m.yyyy date'        => 'j.n.Y',
	'h:mm d. mon y. date'       => 'j. M Y.',
	'h:mm d mon y date'         => 'j M Y',

	'hh:mm d. month y. both'    => 'H:i, j. F Y.',
	'hh:mm d month y both'      => 'H:i, j F Y',
	'hh:mm dd.mm.yyyy both'     => 'H:i, d.m.Y',
	'hh:mm d.m.yyyy both'       => 'H:i, j.n.Y',
	'hh:mm d. mon y. both'      => 'H:i, j. M Y.',
	'hh:mm d mon y both'        => 'H:i, j M Y',
	'h:mm d. month y. both'     => 'G:i, j. F Y.',
	'h:mm d month y both'       => 'G:i, j F Y',
	'h:mm dd.mm.yyyy both'      => 'G:i, d.m.Y',
	'h:mm d.m.yyyy both'        => 'G:i, j.n.Y',
	'h:mm d. mon y. both'       => 'G:i, j. M Y.',
	'h:mm d mon y both'         => 'G:i, j M Y',
];

/* NOT USED IN STABLE VERSION */
/** @phpcs-require-sorted-array */
$magicWords = [
	'anchorencode'              => [ '0', 'KODIRANJESIDRA', 'KODIRANJEVEZE', 'KODIRANJE_VEZE', 'ANCHORENCODE' ],
	'articlepath'               => [ '0', 'PUTANJADOČLANKA', 'PUTANJAČLANKA', 'PUTANJA_ČLANKA', 'ARTICLEPATH' ],
	'basepagename'              => [ '1', 'NAZIVOSNOVNESTRANICE', 'IMEOSNOVE', 'IME_OSNOVE', 'BASEPAGENAME' ],
	'basepagenamee'             => [ '1', 'NAZIVOSNOVNESTRANICEK', 'IMENAOSNOVA', 'IMENA_OSNOVA', 'BASEPAGENAMEE' ],
	'contentlanguage'           => [ '1', 'JEZIKSADRŽINE', 'JEZIKSADRŽAJA', 'JEZIK_SADRŽAJA', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'currentday'                => [ '1', 'TRENUTNIDAN', 'TEKUĆIDAN', 'TEKUĆI_DAN', 'CURRENTDAY' ],
	'currentday2'               => [ '1', 'TRENUTNIDAN2', 'TEKUĆIDAN2', 'TEKUĆI_DAN_2', 'CURRENTDAY2' ],
	'currentdayname'            => [ '1', 'NAZIVTRENUTNOGDANA', 'TRENUTNIDANIME', 'IMETEKUĆEGDANA', 'IME_TEKUĆEG_DANA', 'CURRENTDAYNAME' ],
	'currentdow'                => [ '1', 'TRENUTNIDUN', 'TRENUTNIDOV', 'TEKUĆIDUN', 'CURRENTDOW' ],
	'currenthour'               => [ '1', 'TRENUTNISAT', 'TRENUTNIČAS', 'TEKUĆISAT', 'TEKUĆIČAS', 'TEKUĆI_SAT', 'TEKUĆI_ČAS', 'CURRENTHOUR' ],
	'currentmonth'              => [ '1', 'TRENUTNIMESEC', 'TRENUTNIMJESEC', 'TRENUTNI_MESEC', 'TRENUTNI_MJESEC', 'TEKUĆIMESEC', 'TEKUĆIMJESEC', 'TEKUĆI_MESEC', 'TEKUĆI_MJESEC', 'CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'             => [ '1', 'TRENUTNIMESEC1', 'TRENUTNIMJESEC1', 'TRENUTNI_MESEC1', 'TRENUTNI_MJESEC1', 'TEKUĆIMESEC1', 'TEKUĆIMJESEC1', 'TEKUĆI_MESEC1', 'TEKUĆI_MJESEC1', 'CURRENTMONTH1' ],
	'currentmonthabbrev'        => [ '1', 'TRENUTNIMESECSKR', 'TRENUTNIMJESECSKR', 'TEKUĆIMESECSKR', 'TEKUĆIMJESECSKR', 'TEKUĆI_MESEC_SKR', 'TEKUĆI_MJESEC_SKR', 'CURRENTMONTHABBREV' ],
	'currentmonthname'          => [ '1', 'NAZIVTRENUTNOGMESECA', 'NAZIVTRENUTNOGMJESECA', 'TRENUTNIMESECIME', 'TRENUTNIMJESECIME', 'IMETEKUĆEGMESECA', 'IMETEKUĆEGMJESECA', 'IME_TEKUĆEG_MESECA', 'IME_TEKUĆEG_MJESECA', 'CURRENTMONTHNAME' ],
	'currentmonthnamegen'       => [ '1', 'TRENUTNIMESECGEN', 'TRENUTNIMJESECGEN', 'TEKUĆIMESECGEN', 'TEKUĆIMJESECGEN', 'TEKUĆI_MESEC_GEN', 'TEKUĆI_MJESEC_GEN', 'CURRENTMONTHNAMEGEN' ],
	'currenttime'               => [ '1', 'TRENUTNOVREME', 'TRENUTNOVRIJEME', 'TEKUĆEVREME', 'TEKUĆEVRIJEME', 'TEKUĆE_VREME', 'TEKUĆE_VRIJEME', 'CURRENTTIME' ],
	'currenttimestamp'          => [ '1', 'TRENUTNAVREMENSKAOZNAKA', 'TRENUTNIVREMENSKIPEČAT', 'TEKUĆIOTISAKVREMENA', 'TEKUĆI_OTISAK_VREMENA', 'CURRENTTIMESTAMP' ],
	'currentversion'            => [ '1', 'TRENUTNAVERZIJA', 'TRENUTNOIZDANJE', 'TEKUĆAVERZIJA', 'TEKUĆEIZDANJE', 'TEKUĆE_IZDANJE', 'CURRENTVERSION' ],
	'currentweek'               => [ '1', 'TRENUTNASEDMICA', 'TRENUTNANEDELJA', 'TRENUTNANEDJELJA', 'TRENUTNA_NEDELJA', 'TRENUTNA_NEDJELJA', 'TEKUĆANEDELJA', 'TEKUĆANEDJELJA', 'TEKUĆA_NEDELJA', 'TEKUĆA_NEDJELJA', 'CURRENTWEEK' ],
	'currentyear'               => [ '1', 'TRENUTNAGODINA', 'TEKUĆAGODINA', 'TEKUĆA_GODINA', 'CURRENTYEAR' ],
	'defaultsort'               => [ '1', 'PODRAZUMEVANOSORTIRANJE:', 'PODRAZUMIJEVANOSORTIRANJE:', 'PODRAZUMEVANIKLJUČZASORTIRANJE:', 'PODRAZUMIJEVANIKLJUČZASORTIRANJE:', 'PODRAZUMEVANOSORTIRANJEKATEGORIJE:', 'PODRAZUMIJEVANOSORTIRANJEKATEGORIJE:', 'PODRAZMEVANOSORTIRANJEKATEGORIJE:', 'PODRAZMIJEVANOSORTIRANJEKATEGORIJE:', 'DEFAULTSORT:', 'SORTIRANJE:' ],
	'defaultsort_noerror'       => [ '0', 'bezgreške', 'bez_greške', 'noerror' ],
	'defaultsort_noreplace'     => [ '0', 'bezzamene', 'bezzamjene', 'bez_zamene', 'bez_zamjene', 'noreplace' ],
	'directionmark'             => [ '1', 'OZNAKAZASMER', 'OZNAKAZASMJER', 'SMEROZNAKE', 'SMJEROZNAKE', 'SMER   _OZNAKE', 'SMJER   _OZNAKE', 'SMER_OZNAKE', 'SMJER_OZNAKE', 'DIRECTIONMARK', 'DIRMARK' ],
	'displaytitle'              => [ '1', 'NASLOVZAPRIKAZ', 'NAZIVZAPRIKAZ', 'NAZIVPRIKAZA', 'NAZIV_PRIKAZA', 'DISPLAYTITLE' ],
	'filepath'                  => [ '0', 'PUTANJADODATOTEKE', 'PUTANJADATOTEKE', 'PUTANJA_DATOTEKE', 'FILEPATH:' ],
	'forcetoc'                  => [ '0', '__FORSIRAJSADRŽAJ__', '__FORSIRANISADRŽAJ__', '__FORSIRANI_SADRŽAJ__', '__PRIMORANISADRŽAJ__', '__PRIMORANI_SADRŽAJ__', '__FORCETOC__' ],
	'formatdate'                => [ '0', 'formatdatuma', 'format_datuma', 'formatdate', 'dateformat' ],
	'fullpagename'              => [ '1', 'CEONAZIVSTRANICE', 'CIONAZIVSTRANICE', 'CELINAZIVSTRANICE', 'CIJELINAZIVSTRANICE', 'PUNOIMESTRANICE', 'PUNOIMESTRANE', 'PUNO_IME_STRANICE', 'PUNO_IME_STRANE', 'FULLPAGENAME' ],
	'fullpagenamee'             => [ '1', 'CEONAZIVSTRANICEK', 'CIONAZIVSTRANICEK', 'CELINAZIVSTRANICEK', 'CIJELINAZIVSTRANICEK', 'PUNAIMENASTRANICA', 'PUNAIMENASTRANA', 'PUNA_IMENA_STRANICA', 'PUNA_IMENA_STRANA', 'FULLPAGENAMEE' ],
	'fullurl'                   => [ '0', 'CELAADRESA:', 'CIJELAADRESA:', 'CEOURL:', 'CIOURL:', 'CELIURL:', 'CIJELIURL:', 'PUNURL:', 'CELAADRESA', 'CIJELAADRESA', 'CELA_ADRESA', 'CIJELA_ADRESA', 'FULLURL:' ],
	'fullurle'                  => [ '0', 'CELAADRESAK:', 'CIJELAADRESAK:', 'CEOURLK:', 'CIOURLK:', 'CELIURLK:', 'CIJELIURLK:', 'PUNURLE:', 'CELEADRESE', 'CIJELEADRESE', 'CELE_ADRESE', 'CIJELE_ADRESE', 'FULLURLE:' ],
	'gender'                    => [ '0', 'ROD:', 'LICE:', 'GENDER:' ],
	'grammar'                   => [ '0', 'GRAMATIKA:', 'GRAMMAR:' ],
	'hiddencat'                 => [ '1', '__SAKRIVENAKAT__', '__SAKRIVENAKATEGORIJA__', '__SKRIVENAKAT__', '__SKRIVENAKATEGORIJA__', '__HIDDENCAT__' ],
	'img_baseline'              => [ '1', 'osnova', 'baseline' ],
	'img_border'                => [ '1', 'ivica', 'oivičeno', 'border' ],
	'img_bottom'                => [ '1', 'dno', 'bottom' ],
	'img_center'                => [ '1', 'centar', 'c', 'center', 'centre' ],
	'img_framed'                => [ '1', 'okvir', 'ram', 'framed', 'enframed', 'frame' ],
	'img_frameless'             => [ '1', 'bezokvira', 'bez_okvira', 'bezrama', 'bez_rama', 'frameless' ],
	'img_left'                  => [ '1', 'levo', 'lijevo', 'l', 'left' ],
	'img_link'                  => [ '1', 'veza=$1', 'link=$1' ],
	'img_manualthumb'           => [ '1', 'mini=$1', 'umanjeno=$1', 'thumbnail=$1', 'thumb=$1' ],
	'img_middle'                => [ '1', 'sredina', 'middle' ],
	'img_none'                  => [ '1', 'bez', 'n', 'none' ],
	'img_page'                  => [ '1', 'stranica=$1', 'strana=$1', 'stranica_$1', 'strana_$1', 'page=$1', 'page $1' ],
	'img_right'                 => [ '1', 'desno', 'd', 'right' ],
	'img_sub'                   => [ '1', 'pod', 'sub' ],
	'img_super'                 => [ '1', 'super', 'sup' ],
	'img_text_bottom'           => [ '1', 'sredinateksta', 'sredina_teksta', 'text-bottom' ],
	'img_text_top'              => [ '1', 'vrhteksta', 'vrh_teksta', 'text-top' ],
	'img_thumbnail'             => [ '1', 'mini', 'umanjeno', 'thumbnail', 'thumb' ],
	'img_top'                   => [ '1', 'vrh', 'top' ],
	'img_upright'               => [ '1', 'uspravno', 'uspravno=$1', 'uspravno_$1', 'upright', 'upright=$1', 'upright $1' ],
	'img_width'                 => [ '1', '$1p', '$1piksel', '$1px' ],
	'index'                     => [ '1', '__INDEKSIRAJ__', '__INDEKSIRANJE__', '__INDEKS__', '__INDEX__' ],
	'language'                  => [ '0', '#JEZIK', '#LANGUAGE' ],
	'lcfirst'                   => [ '0', 'LCPRVI:', 'LCFIRST:' ],
	'localday'                  => [ '1', 'LOKALNIDAN', 'LOKALNI_DAN', 'LOCALDAY' ],
	'localday2'                 => [ '1', 'LOKALNIDAN2', 'LOKALNI_DAN2', 'LOCALDAY2' ],
	'localdayname'              => [ '1', 'NAZIVLOKALNOGDANA', 'IMELOKALNOGDANA', 'IME_LOKALNOG_DANA', 'LOCALDAYNAME' ],
	'localdow'                  => [ '1', 'LOKALNIDUN', 'LOCALDOW' ],
	'localhour'                 => [ '1', 'LOKALNISAT', 'LOKALNIČAS', 'LOKALNI_SAT', 'LOKALNI_ČAS', 'LOCALHOUR' ],
	'localmonth'                => [ '1', 'LOKALNIMESEC', 'LOKALNIMJESEC', 'LOKALNI_MESEC', 'LOKALNI_MJESEC', 'LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'               => [ '1', 'LOKALNIMESEC2', 'LOKALNIMJESEC2', 'LOKALNI_MESEC2', 'LOKALNI_MJESEC2', 'LOCALMONTH1' ],
	'localmonthabbrev'          => [ '1', 'LOKALNIMESECSKR', 'LOKALNIMJESECSKR', 'LOKALNI_MESEC_SKR', 'LOKALNI_MJESEC_SKR', 'LOCALMONTHABBREV' ],
	'localmonthname'            => [ '1', 'NAZIVLOKALNOGMESECA', 'NAZIVLOKALNOGMJESECA', 'IMELOKALNOGMESECA', 'IMELOKALNOGMJESECA', 'IME_LOKALNOG_MESECA', 'IME_LOKALNOG_MJESECA', 'LOCALMONTHNAME' ],
	'localmonthnamegen'         => [ '1', 'LOKALNIMESECGEN', 'LOKALNIMJESECGEN', 'LOKALNI_MESEC_GEN', 'LOKALNI_MJESEC_GEN', 'LOCALMONTHNAMEGEN' ],
	'localtime'                 => [ '1', 'LOKALNOVREME', 'LOKALNOVRIJEME', 'LOKALNO_VREME', 'LOKALNO_VRIJEME', 'LOCALTIME' ],
	'localtimestamp'            => [ '1', 'LOKALNAVREMENSKAOZNAKA', 'LOKALNIVREMENSKIPEČAT', 'OTISAKVREMENA', 'OTISAK_VREMENA', 'LOCALTIMESTAMP' ],
	'localurl'                  => [ '0', 'LOKALNAADRESA:', 'LOKALNIURL:', 'LOKALNA_ADRESA:', 'LOCALURL:' ],
	'localurle'                 => [ '0', 'LOKALNAADRESAK:', 'LOKALNIURLK:', 'LOKALNEADRESE:', 'LOKALNE_ADRESE:', 'LOCALURLE:' ],
	'localweek'                 => [ '1', 'LOKALNASEDMICA', 'LOKALNANEDELJA', 'LOKALNANEDJELJA', 'LOKALNA_NEDELJA', 'LOKALNA_NEDJELJA', 'LOCALWEEK' ],
	'localyear'                 => [ '1', 'LOKALNAGODINA', 'LOKALNA_GODINA', 'LOCALYEAR' ],
	'msg'                       => [ '0', 'POR:', 'MSG:' ],
	'msgnw'                     => [ '0', 'NVPOR:', 'MSGNW:' ],
	'namespace'                 => [ '1', 'IMENSKIPROSTOR', 'IMENSKI_PROSTOR', 'NAMESPACE' ],
	'namespacee'                => [ '1', 'IMENSKIPROSTORK', 'IMENSKIPROSTORI', 'IMENSKI_PROSTORI', 'NAMESPACEE' ],
	'namespacenumber'           => [ '1', 'BROJIMENSKOGPROSTORA', 'NAMESPACENUMBER' ],
	'newsectionlink'            => [ '1', '__LINKZANOVIODELJAK__', '__LINKZANOVIODJELJAK__', '__VEZAZANOVIODELJAK__', '__VEZAZANOVIODJELJAK__', '__NOVAVEZAODELJKA__', '__NOVAVEZAODJELJKA__', '__NOVA_VEZA_ODELJKA__', '__NOVA_VEZA_ODJELJKA__', '__NEWSECTIONLINK__' ],
	'nocontentconvert'          => [ '0', '__BEZKS__', '__BEZCC__', '__NOCONTENTCONVERT__', '__NOCC__' ],
	'noeditsection'             => [ '0', '__BEZIZMENA__', '__BEZ_IZMENA__', '__BEZIZMJENA__', '__BEZ_IZMJENA__', '__NOEDITSECTION__' ],
	'nogallery'                 => [ '0', '__BEZGALERIJE__', '__BEZ_GALERIJE__', '__NOGALLERY__' ],
	'noindex'                   => [ '1', '__NEINDEKSIRAJ__', '__BEZINDEKSIRANJA__', '__BEZINDEKSA__', '__BEZ_INDEKSA__', '__NOINDEX__' ],
	'nonewsectionlink'          => [ '1', '__BEZLINKAZANOVIODELJAK__', '__BEZLINKAZANOVIODJELJAK__', '__BEZVEZEZANOVIODELJAK__', '__BEZVEZEZANOVIODJELJAK__', '__BEZNOVEVEZEODELJKA__', '__BEZNOVEVEZEODJELJKA__', '__BEZ_NOVE_VEZE_ODELJKA__', '__BEZ_NOVE_VEZE_ODJELJKA__', '__NONEWSECTIONLINK__' ],
	'notitleconvert'            => [ '0', '__BEZKN__', '__NOTITLECONVERT__', '__NOTC__' ],
	'notoc'                     => [ '0', '__BEZSADRŽAJA__', '__BEZ_SADRŽAJA__', '__NOTOC__' ],
	'ns'                        => [ '0', 'IP:', 'NS:' ],
	'numberingroup'             => [ '1', 'BROJUGRUPI', 'BROJ_U_GRUPI', 'NUMBERINGROUP', 'NUMINGROUP' ],
	'numberofactiveusers'       => [ '1', 'BROJAKTIVNIHKORISNIKA', 'BROJ_AKTIVNIH_KORISNIKA', 'NUMBEROFACTIVEUSERS' ],
	'numberofadmins'            => [ '1', 'BROJADMINA', 'BROJADMINISTRATORA', 'BROJ_ADMINA', 'NUMBEROFADMINS' ],
	'numberofarticles'          => [ '1', 'BROJČLANAKA', 'BROJ_ČLANAKA', 'NUMBEROFARTICLES' ],
	'numberofedits'             => [ '1', 'BROJIZMENA', 'BROJIZMJENA', 'BROJ_IZMENA', 'BROJ_IZMJENA', 'NUMBEROFEDITS' ],
	'numberoffiles'             => [ '1', 'BROJDATOTEKA', 'BROJ_DATOTEKA', 'BROJFAJLOVA', 'BROJ_FAJLOVA', 'NUMBEROFFILES' ],
	'numberofpages'             => [ '1', 'BROJSTRANICA', 'BROJ_STRANICA', 'NUMBEROFPAGES' ],
	'numberofusers'             => [ '1', 'BROJKORISNIKA', 'BROJ_KORISNIKA', 'NUMBEROFUSERS' ],
	'padleft'                   => [ '0', 'POPUNILEVO', 'POPUNILIJEVO', 'POPUNALEVO', 'POPUNALIJEVO', 'PORAVNAJLEVO', 'PORAVNAJLIJEVO', 'PORAVNAJ_LEVO', 'PORAVNAJ_LIJEVO', 'PORAVNAJULEVO', 'PORAVNAJ_ULEVO', 'PORAVNAJULIJEVO', 'PORAVNAJ_ULIJEVO', 'PADLEFT' ],
	'padright'                  => [ '0', 'POPUNIDESNO', 'POPUNADESNO', 'PORAVNAJDESNO', 'PORAVNAJ_DESNO', 'PORAVNAJUDESNO', 'PORAVNAJ_UDESNO', 'PADRIGHT' ],
	'pageid'                    => [ '0', 'IDSTRANICE', 'BROJSTRANICE', 'PAGEID' ],
	'pagename'                  => [ '1', 'NAZIVSTRANICE', 'IMESTRANICE', 'IME_STRANICE', 'STRANICA', 'PAGENAME' ],
	'pagenamee'                 => [ '1', 'NAZIVSTRANICEK', 'IMENASTRANICA', 'IMENA_STRANICA', 'STRANICE', 'PAGENAMEE' ],
	'pagesincategory'           => [ '1', 'STRANICAUKATEGORIJI', 'STRANAUKATEGORIJI', 'STRANICA_U_KATEGORIJI', 'STRANA_U_KATEGORIJI', 'PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesincategory_all'       => [ '0', 'sve', 'all' ],
	'pagesincategory_files'     => [ '0', 'datoteke', 'files' ],
	'pagesinnamespace'          => [ '1', 'STRANICAUIMENSKOMPROSTORU', 'STRANAUIMENSKOMPROSTORU', 'STRANICA_U_IMENSKOM_PROSTORU', 'STRANA_U_IMENSKOM_PROSTORU', 'PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'pagesize'                  => [ '1', 'VELIČINASTRANICE', 'VELIČINASTRANE', 'VELIČINA_STRANICE', 'VELIČINA_STRANE', 'PAGESIZE' ],
	'plural'                    => [ '0', 'MNOŽINA:', 'PLURAL:' ],
	'protectionlevel'           => [ '1', 'STEPENZAŠTITE', 'NIVOZAŠTITE', 'NIVO_ZAŠTITE', 'PROTECTIONLEVEL' ],
	'raw'                       => [ '0', 'ČIST:', 'RAW:' ],
	'redirect'                  => [ '0', '#Preusmeri', '#preusmeri', '#PREUSMERI', '#Preusmjeri', '#preusmjeri', '#PREUSMJERI', '#redirect', '#REDIRECT' ],
	'revisionday'               => [ '1', 'DANIZMENE', 'DANIZMJENE', 'DAN_IZMENE', 'DAN_IZMJENE', 'REVISIONDAY' ],
	'revisionday2'              => [ '1', 'DANIZMENE2', 'DANIZMJENE2', 'DAN_IZMENE2', 'DAN_IZMJENE2', 'REVISIONDAY2' ],
	'revisionid'                => [ '1', 'IDIZMENE', 'IDIZMJENE', 'IDREVIZIJE', 'ID_REVIZIJE', 'IB_IZMENE', 'IB_IZMJENE', 'REVISIONID' ],
	'revisionmonth'             => [ '1', 'MESECIZMENE', 'MJESECIZMJENE', 'MESEC_IZMENE', 'MJESEC_IZMJENE', 'REVISIONMONTH' ],
	'revisionmonth1'            => [ '1', 'MESECIZMENE1', 'MJESECIZMJENE1', 'MESEC_IZMENE1', 'MJESEC_IZMJENE1', 'REVISIONMONTH1' ],
	'revisiontimestamp'         => [ '1', 'VREMENSKAOZNAKAIZMENE', 'VREMENSKAOZNAKAIZMJENE', 'VREMENSKIPEČATIZMENE', 'VREMENSKIPEČATIZMJENE', 'VREMEIZMENE', 'VRIJEMEIZMJENE', 'VREME_IZMENE', 'VRIJEME_IZMJENE', 'REVISIONTIMESTAMP' ],
	'revisionuser'              => [ '1', 'KORISNIKIZMENE', 'KORISNIKIZMJENE', 'KORISNIK_IZMENE', 'KORISNIK_IZMJENE', 'REVISIONUSER' ],
	'revisionyear'              => [ '1', 'GODINAIZMENE', 'GODINAIZMJENE', 'GODINA_IZMENE', 'GODINA_IZMJENE', 'REVISIONYEAR' ],
	'safesubst'                 => [ '0', 'BEZBEDNAZAMENA', 'BEZBJEDNAZAMJENA', 'BEZBEDNA_ZAMENA', 'BEZBJEDNA_ZAMJENA', 'SAFESUBST:' ],
	'scriptpath'                => [ '0', 'SKRIPTNAPUTANJA', 'SKRIPTA', 'SKRIPT', 'SCRIPTPATH' ],
	'servername'                => [ '0', 'NAZIVSERVERA', 'IMESERVERA', 'IME_SERVERA', 'SERVERNAME' ],
	'sitename'                  => [ '1', 'NAZIVSAJTA', 'IMESAJTA', 'SITENAME' ],
	'special'                   => [ '0', 'posebno', 'special' ],
	'staticredirect'            => [ '1', '__STATIČNOPREUSMERENJE__', '__STATIČNOPREUSMJERENJE__', '__STATIČKOPREUSMERENJE__', '__STATIČKOPREUSMJERENJE__', 'STATIČKO_PREUSMERENJE', 'STATIČKO_PREUSMJERENJE', '__STATICREDIRECT__' ],
	'stylepath'                 => [ '0', 'STILSKAPUTANJA', 'PUTANJASTILA', 'PUTANJA_STILA', 'STYLEPATH' ],
	'subjectpagename'           => [ '1', 'NAZIVČLANKA', 'IMEČLANKA', 'IME_ČLANKA', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'          => [ '1', 'NAZIVČLANKAK', 'IMENAČLANAKA', 'IMENA_ČLANAKA', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'subjectspace'              => [ '1', 'PROSTORČLANAKA', 'IMENSKIPROSTORČLANKA', 'IMENSKI_PROSTOR_ČLANKA', 'SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'             => [ '1', 'PROSTORČLANAKAK', 'IMENSKIPROSTORČLANAKA', 'IMENSKI_PROSTOR_ČLANAKA', 'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'subpagename'               => [ '1', 'NAZIVPODSTRANICE', 'IMEPODSTRANICE', 'IMEPODSTRANE', 'IME_PODSTRANICE', 'IME_PODSTRANE', 'SUBPAGENAME' ],
	'subpagenamee'              => [ '1', 'NAZIVPODSTRANICEK', 'IMENAPODSTRANICA', 'IMENAPODSTRANA', 'IMENA_PODSTRANICA', 'IMENA_PODSTRANA', 'SUBPAGENAMEE' ],
	'subst'                     => [ '0', 'ZAMENI:', 'ZAMIJENI:', 'ZAMENA:', 'ZAMJENA:', 'SUBST', 'SUBST:' ],
	'tag'                       => [ '0', 'oznaka', 'tag' ],
	'talkpagename'              => [ '1', 'NAZIVSTRANICEZARAZGOVOR', 'IMERAZGOVORA', 'IME_RAZGOVORA', 'TALKPAGENAME' ],
	'talkpagenamee'             => [ '1', 'NAZIVSTRANICEZARAZGOVORK', 'IMENARAZGOVORA', 'IMENA_RAZGOVORA', 'TALKPAGENAMEE' ],
	'talkspace'                 => [ '1', 'PROSTORRAZGOVORA', 'RAZGOVOR', 'TALKSPACE' ],
	'talkspacee'                => [ '1', 'PROSTORRAZGOVORAK', 'RAZGOVORK', 'RAZGOVORI', 'TALKSPACEE' ],
	'toc'                       => [ '0', '__SADRŽAJ__', '__TOC__' ],
	'ucfirst'                   => [ '0', 'UCPRVI:', 'UCFIRST:' ],
	'urlencode'                 => [ '0', 'KODIRANJEADRESE', 'KODIRANJEURLA', 'KODIRANJEURL-A', 'KODIRANJE_ADRESE', 'URLENCODE:' ],
	'url_path'                  => [ '0', 'PUTANJA', 'PATH' ],
	'url_query'                 => [ '0', 'UPIT', 'REDOSLED', 'REDOSLIJED', 'REDOSLJED', 'QUERY' ],
	'url_wiki'                  => [ '0', 'VIKI', 'WIKI' ],
];

$separatorTransformTable = [ ',' => '.', '.' => ',' ];
