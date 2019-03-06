<?php

// Taaldefinities gebruikt in install.php

$lang_install = array(

'Install message'				=>	'Het bestand \'config.php\' bestaat niet of is beschadigd. Dit wil zeggen dat FluxBB niet (correct) is geïnstalleerd.',
'Choose install language'		=>	'Kies een taal',
'Choose install language info'	=>	'Dit past alleen de taal van de installatie-procedure aan, die van het forum zelf kan later worden gewijzigd.',
'Install language'				=>	'Installeer taal',
'Change language'				=>	'Verander taal',
'Next'							=>	'Volgende',
'Already installed'				=>	'FluxBB is al geïnstalleerd en kan daarom niet nogmaals worden geïnstalleerd. Klik <a href="index.php">hier</a> om verder te gaan.',
'You are running error'			=>	'Je gebruikt %1$s versie %2$s. FluxBB %3$s vereist minstens %1$s %4$s om goed te functioneren. Je moet je %1$s installatie updaten voordat je verder kan gaan.',
'My FluxBB Forum'				=>	'Mijn FluxBB Forum',
'Description'					=>	'Niemand kan je vertellen wat FluxBB is, je moet het zelf ontdekken.',
'Username 1'					=>	'Gebruikersnamen moeten minstens een lengte hebben van 2 tekens.',
'Username 2'					=>	'Gebruikersnamen mogen niet meer dan 25 tekens hebben.',
'Username 3'					=>	'De gebruikersnaam \'Gast\' is gereserveerd.',
'Username 4'					=>	'Een gebruikersnaam mag niet in de vorm van een IP-adres zijn.',
'Username 5'					=>	'Gebruikersnamen mogen \', " en [ of ] niet gebruiken.',
'Username 6'					=>	'Gebruikersnamen mogen geen BBcode bevatten die in dit forum worden gebruikt.',
'Short password'				=>	'Je wachtwoord moet minstens 4 tekens bevatten.',
'Passwords not match'			=>	'De wachtwoorden komen niet overeen.',
'Wrong email'					=>	'Het beheerder e-mailadres dat je hebt opgegeven komt niet overeen.',
'No board title'				=>	'Je moet een titel opgeven.',
'Error default language'		=>	'De gekozen taal lijkt niet te bestaan.',
'Error default style'			=>	'De gekozen template lijkt niet te bestaan.',
'No DB extensions'				=>	'Deze versie van PHP ondersteunt geen enkele van de database typen die FluxBB ondersteunt. PHP moet ondersteuning bieden voor MySQL, PostgreSQL of SQLite om FluxBB te installeren.',
'Administrator username'		=>	'Beheerder gebruikersnaam',
'Administrator password 1'		=>	'Beheerder wachtwoord 1',
'Administrator password 2'		=>	'Beheerder wachtwoord 2',
'Administrator email'			=>	'Beheerder e-mailadres',
'Board title'					=>	'Forum titel',
'Base URL'						=>	'Installatie URL',
'Required field'				=>	'dit is een verplicht veld.',
'FluxBB Installation'			=>	'FluxBB installatie',
'Welcome'						=>	'Welkom bij de installatie van FluxBB, vul onderstaande installatiegegevens in om FluxBB te installeren, indien je vragen hebt of tegen problemen aanloopt, raden wij je aan de documentatie te lezen of naar de FluxBB forums te gaan.',
'Install'						=>	'Installeer FluxBB %s',
'Errors'						=>	'De volgende problemen moeten worden hersteld:',
'Database setup'				=>	'Database setup',
'Info 1'						=>	'Vul onderstaande velden in om FluxBB toegang te geven tot een database. Deze gegevens moeten correct zijn, anders kan FluxBB niet worden geïnstalleerd.',
'Select database'				=>	'Selecteer je database typen',
'Info 2'						=>	'FluxBB ondersteunt momenteel MySQL, PostgreSQL en SQLite. Als jou database type niet staat in dit drop-down menu, wil dat zeggen dat het PHP-systeem van je server niet in staat is om FluxBB te draaien. Meer informatie per versie van iedere database kan je vinden in het FAQ.',
'Dual MySQL'					=>	'Het PHP systeem op deze server is in staat om op 2 verschillende manieren met MySQL te communiceren: standard en improved. Indien je de optie hebt, raden we je aan om improved te kiezen, als dit niet werkt, gebruik je standard.',
'InnoDB'						=>	'Jouw MySQL server biedt ondersteuning voor <a href="http://dev.mysql.com/doc/refman/5.0/en/innodb.html">InnoDB</a>. Dit is een goede keuze indien je een groot forum wil gaan beheren. Als je onzeker bent, is het raadzaam niet te kiezen voor InnoDB.',
'Database type'					=>	'Database type',
'Required'						=>	'(Verplicht)',
'Database hostname'				=>	'Geef je database server hostnaam',
'Info 3'						=>	'Het adres van je database server (voorbeeld: localhost, db.mijnhost.be of 192.168.0.15). Je kan een ander poort nummer opgeven als je database niet werkt op de standaard poort (voorbeeld: localhost:3580). Voor ondersteuning voor SQLite, type je gewoon iets in of laat je \'localhost\' staan.',
'Database server hostname'		=>  'Database server hostnaam',
'Database enter name'			=>	'Geef de naam van je database',
'Info 4'						=>	'Dit is de naam van de database waar FluxBB op zal worden geïnstalleerd. De database moet al bestaan. Voor SQLite geef je hier het pad naar het database bestand op. Om beveiligingsredenen is het aangeraden de SQLite database ergens te plaatsen waar niemand bij kan. Als het SQLite database bestand niet bestaat, zal FluxBB proberen dit automatisch aan te maken.',
'Database name'					=>	'Database naam',
'Database enter informations'	=>	'Geef de database gebruikersnaam en het wachtwoord',
'Database username'				=>	'Database gebruikersnaam',
'Info 5'						=>	'Geef de gebruikersnaam en het wachtwoord op waarmee verbinding kan worden gemaakt met de opgegeven database. Negeer dit indien u SQLite gebruikt.',
'Database password'				=>	'Database wachtwoord',
'Database enter prefix'			=>	'Geef een prefix',
'Info 6'						=>	'Als je dat wil, kan je hier een voorvoegsel opgeven. Op deze manier kan je meerdere installaties van FluxBB draaien binnen dezelfde database (voorbeeld: abc_).',
'Table prefix'					=>	'Tabel voorvoegsel',
'Administration setup'			=>	'Administratie instellingen',
'Info 7'						=>	'Geef de gevraagde informatie op om een Beheerder aan te maken voor je FluxBB installatie.',
'Admin enter username'			=>	'Geef een gebruikersnaam',
'Info 8'						=>	'De gebruikersnaam van de forum beheerder. Je kan later meer beheerders en moderators aanstellen. Gebruikersnamen mogen 2 tot 25 tekens bevatten.',
'Admin enter password'			=>	'Geef een geldig wachtwoord',
'Info 9'						=>	'Wachtwoorden moeten minstens 4 tekens lang zijn en zijn hoofdletter gevoelig.',
'Password'						=>	'Wachtwoord',
'Confirm password'				=>	'Bevestig wachtwoord',
'Admin enter email'				=>	'Geef een e-mailadres op',
'Info 10'						=>	'Het e-mailadres van de beheerder van dit forum.',
'Board setup'					=>	'Forum instellingen',
'Info 11'						=>	'Vul de gevraagde gegevens in om je FluxBB installatie in te stellen.',
'Enter board title'				=>	'Geef een forumnaam',
'Info 12'						=>	'De titel van dit forum (zichtbaar op iedere pagina).',
'Enter board description'		=>	'Geef een beschrijving/ondertitel',
'Info 13'						=>	'Een korte beschrijving/ondertitel van het forum (zichtbaar op iedere pagina). Dit veld ondersteunt HTML.',
'Board description'				=>	'Forum beschrijving/ondertitel',
'Enter base URL'				=>	'Geef het hoofddomein van je FluxBB installatie',
'Info 14'						=>	'De URL (zonder slash) van je FluxBB forum (voorbeeld: https://forum.domeinnaam.nl of https://domeinnaam.nl/forum). Dit <strong>moet</strong> correct zijn, anders kunnen Beheerders en Moderators geen forums beheren.',
'Choose the default language'	=>	'Kies de standaard taal',
'Info 15'						=>	'De standaard taal van het forum. Gasten en gebruikers kunnen eventueel de taal van het forum wijzigen in hun profiel.',
'Default language'				=>	'Standaard taal',
'Choose the default style'		=>	'Kies een standaard template',
'Info 16'						=>	'De template (lay-out) van het forum. Gasten en gebruikers kunnen dit eventueel wijzigen in hun profiel.',
'Default style'					=>	'Standaard template',
'Start install'					=>	'Installeren',
'DB type not valid'				=>	'\'%s\' is geen correct datbase-type',
'Table prefix error'			=>	'Het tabel voorvoegsel \'%s\' bevat ongeldige tekens of is te lang. Het voorvoegsel mag de letters a tot z, alle getallen en _ bevatten. Het mag ook niet beginnen met een getal en heeft een maximum lengte van 40 tekens. Geef een ander voorvoegsel op.',
'Prefix reserved'				=>	'Het tabel voorvoegsel \'sqlite_\' is gereserveerd voor SQLite. Kies een ander voorvoegsel.',
'Existing table error'			=>	'Een tabel met de naam \'%susers\' is al in gebruik in database \'%s\'. Dit kan betekenen dan FluxBB al is geïnstalleerd of andere software gebruikt deze naam al. Om dit probleem op te lossen kan je het voorvoegsel aanpassen.',
'InnoDB off'					=>	'InnoDB is niet beschikbaar. Kies een andere database soort die geen ondersteuning voor InnoDB biedt.',
'Administrators'				=>	'Beheerders',
'Administrator'					=>	'Beheerder',
'Moderators'					=>	'Moderators',
'Moderator'						=>	'Moderator',
'Guests'						=>	'Gasten',
'Guest'							=>	'Gast',
'Members'						=>	'Gebruikers',
'Announcement'					=>	'Geef een aankondiging op.',
'Rules'							=>	'Geef regels op',
'Maintenance message'			=>	'Dit forum is momenteel niet beschikbaar vanwege onderhoud, kom over enkele minuten nog eens terug.',
'Test post'						=>	'Test post',
'Message'						=>	'Als je hier naar kijkt (en ik denk dat je dat nu wel doet) is de installatie voor 100% voltooid en kan je aan de slag! Log in en ga naar Beheer om je forum te configureren',
'Test category'					=>	'Test categorie',
'Test forum'					=>	'Test forum',
'This is just a test forum'		=>	'Dit is een test forum',
'Alert cache'					=>	'<strong>De cache map kan niet worden beschreven!</strong> Om FluxBB te laten werken moet de map <em>%s</em> beschrijfbaar zijn. Gebruik chmod om de permissies te wijzigen. Bij twijfel, chmod naar 0777.',
'Alert avatar'					=>	'<strong>De avatar map kan niet worden beschreven!</strong> Als je wilt dat gebruikers hun eigen avatars kunnen uploaden, moet je er voor zorgen dat de map <em>%s</em> beschrijfbaar is door PHP. Je kan er later voor kiezen om avatars in een andere map op te slaan (zie Beheer/Opties). Gebruik chmod om de permissies te wijzigen. Bij twijfel, chmod naar 0777.',
'Alert upload'					=>	'<strong>Bestanden kunnen niet worden geüpload bij deze server!</strong> Als je wilt dat gebruikers hun eigen avatars kunnen uploaden, moet je er voor zorgen dat dat de instellingen in file_uploads correct zijn in PHP. Zodra het mogelijk is om avatars te uploaden, kan je dit weer uitschakelen bij Beheer/Opties/Avatars.',
'FluxBB has been installed'		=>	'FluxBB is geïnstalleerd, om de installatie af te ronden moet u de onderstaande stappen volgen.',
'Final instructions'			=>	'Een laatste stap',
'Info 17'						=>	'Om de installatie af te ronden moet je op onderstaande knop klikken om config.php te downloaden. Vervolgens moet je dit bestand uploaden naar de root map van je FluxBB installatie.',
'Info 18'						=>	'Zodra je config.php hebt geüpload is FluxBB volledig geïnstalleerd! Daarna kan je naar de <a href="index.php">forum index</a> gaan.',
'Download config.php file'		=>	'Download config.php',
'FluxBB fully installed'		=>	'FluxBB is met succes geïnstalleerd! Je kan nu naar de <a href="index.php">forum index</a> gaan.',

);
