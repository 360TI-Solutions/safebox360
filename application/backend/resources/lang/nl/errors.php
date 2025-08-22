<?php

return [
    // SMTP
    'smtp_port_required' => 'Verplicht.',
    'smtp_port_integer' => 'De SMTP-poort moet een geldig nummer zijn.',
    'smtp_port_min' => 'De SMTP-poort moet groter zijn dan of gelijk aan :min.',
    'smtp_port_max' => 'De SMTP-poort moet kleiner zijn dan of gelijk aan :max.',
    'smtp_hostname_required' => 'Het SMTP-serveradres is verplicht.',
    'smtp_hostname_string' => 'De SMTP-host moet een geldige tekst zijn.',
    'smtp_hostname_max' => 'De naam van de SMTP-host mag niet langer zijn dan :max tekens.',
    'smtp_email_required' => 'Het afzender-e-mailadres is verplicht.',
    'smtp_email_invalid' => 'Geef een geldig afzender-e-mailadres op.',
    'smtp_authtype_required' => 'Verplicht.',
    'smtp_auth_error' => 'Authenticatiefout',

    'returned_error' => 'Informatie geretourneerd:',

    // Wachtwoorden
    'pw_min_required' => 'Dit veld is verplicht.',
    'pw_min_min' => 'De minimale wachtwoordlengte is :min tekens.',
    'pw_min_max' => 'De maximale wachtwoordlengte is :max tekens.',
    'pw_min_integer' => 'De minimale wachtwoordlengte moet een getal zijn tussen 6 en 20.',
    'pw_max_min' => 'De minimale wachtwoordlengte is :min tekens.',
    'pw_max_max' => 'De maximale wachtwoordlengte is :max tekens.',
    'pw_max_integer' => 'De maximale wachtwoordlengte moet een getal zijn tussen 6 en 20.',
    'pw_max_required' => 'Dit veld is verplicht.',

    // Back-up
    'backup_errorlogs_purge_days_required' => 'Dit veld is verplicht.',
    'backup_errorlogs_purge_days_min' => 'Het minimumaantal dagen is :min.',
    'backup_errorlogs_purge_days_max' => 'Het maximumaantal dagen is :max.',
    'backup_errorlogs_purge_days_integer' => 'Het aantal dagen moet een getal zijn tussen 1 en 365.',
    'backup_retention_max_required' => 'Dit veld is verplicht.',
    'backup_retention_max_min' => 'Het minimumaantal dagen is :min.',
    'backup_retention_max_max' => 'Het maximumaantal dagen is :max.',
    'backup_retention_max_integer' => 'Het aantal dagen moet een getal zijn tussen 1 en 365.',

    // Taal
    'lang_backend_required' => 'De back-end taal is verplicht.',
    'lang_frontend_required' => 'De front-end taal is verplicht.',

    // Algemene fouten
    'unexpected_error' => 'Er is een onverwachte fout opgetreden.',
    'permission_denied' => 'U heeft geen toestemming om deze bron te openen.',

    // Databasefouten
    'sqlerror_notice' => 'Er is een probleem opgetreden bij het uitvoeren van een databasebewerking.',
    'sqlerror_unique_field' => 'U heeft waarschijnlijk geprobeerd een waarde in te voeren die al bestaat in een uniek veld.',
    'sqlerror_column_not_exists_named' => 'De kolom ":column" bestaat niet:table_msg.',
    'sqlerror_column_not_exists_generic' => 'Er is verwezen naar een kolom die niet in de database bestaat.',
    'sqlerror_column_verify_message' => 'Controleer of het veld correct is aangemaakt of of de naam correct is gespeld in de code.',
    'sqlerror_table_suffix' => ' in de ":table" tabel',
    'sqlerror_technical_reference' => 'Technische referentie: :ref',
    'sqlerror_duplicate_fields' => 'Er bestaat al een record met de waarden ":valor" in de velden ":campos":tabela.',
    'sqlerror_duplicate_field' => 'Er bestaat al een record met de waarde ":valor" in het veld ":campo":tabela.',
    'sqlerror_no_duplicates_plural' => 'Deze velden ":campos" staan geen duplicaten toe. U moet een van de waarden wijzigen voordat u opnieuw probeert.',
    'sqlerror_no_duplicates_singular' => 'Dit veld ":campo" staat geen duplicaten toe. U moet deze waarde wijzigen voordat u opnieuw probeert.',

    // Accounts
    'account_name_required' => 'Dit veld is verplicht.',
    'account_name_max' => 'De maximale lengte is :max tekens.',
    'account_username_required' => 'Dit veld is verplicht.',
    'account_username_min' => 'De minimale lengte is :min tekens.',
    'account_username_max' => 'De maximale lengte is :max tekens.',
    'account_email_required' => 'Dit veld is verplicht.',
    'account_profile_required' => 'Dit veld is verplicht.',
    'account_password_min' => 'De minimale wachtwoordlengte is :min tekens.',
    'account_password_max' => 'De maximale wachtwoordlengte is :max tekens.',
    'account_passwords_mismatch' => 'Wachtwoorden moeten overeenkomen.',
    'account_lowercase' => 'kleine letters',
    'account_uppercase' => 'hoofdletters',
    'account_numbers' => 'cijfers',
    'account_symbols' => 'symbolen',
    'account_musthave' => 'Het wachtwoord moet bevatten:',
    'account_notfound' => 'Kan de gegevens niet vinden om door te gaan met de verwerking. Is dit record verwijderd?',

    // NSLOOKUP
    "nslookup_hostname_required" => "Verplicht.",
    "nslookup_hostname_regex" => "Ongeldig hostnaam of IP-adres.",
    "nslookup_type_nullable" => "Ongeldig type.",
    "nslookup_type_in" => "Ongeldig type.",
    "nslookup_dns_required" => "Verplicht.",
    "nslookup_dns_ip" => "Alleen IP-adressen zijn toegestaan.",
    "nslookup_error" => "Fout bij het uitvoeren van nslookup. Controleer de host en probeer het opnieuw.",

    // TRACEROUTE
    "traceroute_hostname_required" => "Verplicht.",
    "traceroute_hostname_regex" => "Ongeldig hostnaam of IP-adres.",
    "traceroute_error" => "Fout bij het uitvoeren van traceroute. Controleer de host en probeer het opnieuw.",

    // WHOIS
    "whois_hostname_required" => "Verplicht.",
    "whois_hostname_regex" => "Ongeldige domeinnaam, hostnaam of IP-adres.",
    "whois_error" => "Fout bij het uitvoeren van whois. Controleer de host en probeer het opnieuw.",

    // PING
    "ping_hostname_required" => "Verplicht.",
    "ping_hostname_regex" => "Ongeldige domeinnaam, hostnaam of IP-adres.",
    "ping_error" => "Fout bij het uitvoeren van ping. Controleer de host en probeer het opnieuw.",

    // PROFILE
    "profile_name_required" => "Dit veld is verplicht.",
    "profile_name_max" => "De maximale lengte is :max tekens.",

    // TAG
    "tag_name_required" => "Dit veld is verplicht.",
    "tag_name_max" => "De maximale lengte is :max tekens.",

    // SCHEDULE
    "schedule_name_required" => "Dit veld is verplicht.",
    "schedule_name_max" => "De maximale lengte is :max tekens.",
    "schedule_tags_required" => "Dit veld is verplicht.",
    "schedule_tags_min" => "De minimale lengte is :min tekens.",
    "schedule_tags_invalid" => "Ongeldige tags geselecteerd.",

    // DEVICE
    "device_name_required" => "Dit veld is verplicht.",
    "device_name_max" => "De maximale lengte is :max tekens.",
    "device_ipaddr_required" => "Dit veld is verplicht.",
    "device_ipaddr_unique" => "Het IP-adres is al in gebruik.",
    "device_tags_required" => "Dit veld is verplicht.",
    "device_tags_min" => "De minimale lengte is :min tekens.",
    "device_tags_invalid" => "Ongeldige tags geselecteerd.",
    "device_script_required" => "Dit veld is verplicht.",
    "device_diff_notfound" => "Een van de bestanden is niet gevonden.",
    "device_diff_notallowed" => "Het bestandstype ondersteunt geen diff-analyse.",

    // LICENSING
    "licensing_100" => "SafeBox360 is gelicentieerd.",
    "licensing_101" => "Inconsistente gegevens [101]",
    "licensing_104" => "Licentie inactief [104]",
    "licensing_105" => "Kan gegevens niet uitpakken [105]",
    "licensing_106" => "Onvolledige gegevens [106]",
    "licensing_107" => "Licentie niet gevonden [107]",
    "licensing_108" => "Licentie geblokkeerd [108]",
    "licensing_109" => "Licentie gekoppeld aan een andere installatie [109]"

];



