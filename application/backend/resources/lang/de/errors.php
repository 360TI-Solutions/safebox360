<?php

return [
    // SMTP
    'smtp_port_required' => 'Erforderlich.',
    'smtp_port_integer' => 'Der SMTP-Port muss eine gültige Zahl sein.',
    'smtp_port_min' => 'Der SMTP-Port muss größer oder gleich :min sein.',
    'smtp_port_max' => 'Der SMTP-Port muss kleiner oder gleich :max sein.',
    'smtp_hostname_required' => 'Die Adresse des SMTP-Servers ist erforderlich.',
    'smtp_hostname_string' => 'Der SMTP-Host muss eine gültige Zeichenfolge sein.',
    'smtp_hostname_max' => 'Der SMTP-Hostname darf nicht länger als :max Zeichen sein.',
    'smtp_email_required' => 'Die Absender-E-Mail-Adresse ist erforderlich.',
    'smtp_email_invalid' => 'Bitte geben Sie eine gültige Absender-E-Mail-Adresse ein.',
    'smtp_authtype_required' => 'Erforderlich.',
    'smtp_auth_error' => 'Authentifizierungsfehler',

    'returned_error' => 'Zurückgegebene Information:',

    // Passwörter
    'pw_min_required' => 'Dieses Feld ist erforderlich.',
    'pw_min_min' => 'Die minimale Passwortlänge beträgt :min Zeichen.',
    'pw_min_max' => 'Die maximale Passwortlänge beträgt :max Zeichen.',
    'pw_min_integer' => 'Die minimale Passwortlänge muss eine Zahl zwischen 6 und 20 sein.',
    'pw_max_min' => 'Die minimale Passwortlänge beträgt :min Zeichen.',
    'pw_max_max' => 'Die maximale Passwortlänge beträgt :max Zeichen.',
    'pw_max_integer' => 'Die maximale Passwortlänge muss eine Zahl zwischen 6 und 20 sein.',
    'pw_max_required' => 'Dieses Feld ist erforderlich.',

    // Backup
    'backup_errorlogs_purge_days_required' => 'Dieses Feld ist erforderlich.',
    'backup_errorlogs_purge_days_min' => 'Die minimale Anzahl an Tagen beträgt :min.',
    'backup_errorlogs_purge_days_max' => 'Die maximale Anzahl an Tagen beträgt :max.',
    'backup_errorlogs_purge_days_integer' => 'Die Anzahl der Tage muss eine Zahl zwischen 1 und 365 sein.',
    'backup_retention_max_required' => 'Dieses Feld ist erforderlich.',
    'backup_retention_max_min' => 'Die minimale Anzahl an Tagen beträgt :min.',
    'backup_retention_max_max' => 'Die maximale Anzahl an Tagen beträgt :max.',
    'backup_retention_max_integer' => 'Die Anzahl der Tage muss eine Zahl zwischen 1 und 365 sein.',

    // Language
    'lang_backend_required' => 'Die Backend-Sprache ist erforderlich.',
    'lang_frontend_required' => 'Die Frontend-Sprache ist erforderlich.',

    // General errors
    'unexpected_error' => 'Ein unerwarteter Fehler ist aufgetreten.',
    'permission_denied' => 'Sie haben keine Berechtigung, auf diese Ressource zuzugreifen.',

    // Database errors
    'sqlerror_notice' => 'Beim Ausführen einer Datenbankoperation ist ein Problem aufgetreten.',
    'sqlerror_unique_field' => 'Sie haben wahrscheinlich versucht, einen bereits vorhandenen Wert in ein eindeutiges Feld einzufügen.',
    'sqlerror_column_not_exists_named' => 'Die Spalte ":column" existiert nicht:table_msg.',
    'sqlerror_column_not_exists_generic' => 'Es wurde auf eine Spalte verwiesen, die in der Datenbank nicht existiert.',
    'sqlerror_column_verify_message' => 'Überprüfen Sie, ob das Feld korrekt erstellt wurde oder ob der Name im Code korrekt geschrieben ist.',
    'sqlerror_table_suffix' => ' in der Tabelle ":table"',
    'sqlerror_technical_reference' => 'Technischer Hinweis: :ref',
    'sqlerror_duplicate_fields' => 'Ein Datensatz mit den Werten ":valor" in den Feldern ":campos" existiert bereits:tabela.',
    'sqlerror_duplicate_field' => 'Ein Datensatz mit dem Wert ":valor" im Feld ":campo" existiert bereits:tabela.',
    'sqlerror_no_duplicates_plural' => 'Diese Felder ":campos" erlauben keine Duplikate. Sie müssen einen der Werte ändern, bevor Sie es erneut versuchen.',
    'sqlerror_no_duplicates_singular' => 'Dieses Feld ":campo" erlaubt keine Duplikate. Sie müssen diesen Wert ändern, bevor Sie es erneut versuchen.',

    // Accounts
    'account_name_required' => 'Dieses Feld ist erforderlich.',
    'account_name_max' => 'Die maximale Länge beträgt :max Zeichen.',
    'account_username_required' => 'Dieses Feld ist erforderlich.',
    'account_username_min' => 'Die minimale Länge beträgt :min Zeichen.',
    'account_username_max' => 'Die maximale Länge beträgt :max Zeichen.',
    'account_email_required' => 'Dieses Feld ist erforderlich.',
    'account_profile_required' => 'Dieses Feld ist erforderlich.',
    'account_password_min' => 'Die minimale Passwortlänge beträgt :min Zeichen.',
    'account_password_max' => 'Die maximale Passwortlänge beträgt :max Zeichen.',
    'account_passwords_mismatch' => 'Passwörter müssen übereinstimmen.',
    'account_lowercase' => 'Kleinbuchstaben',
    'account_uppercase' => 'Großbuchstaben',
    'account_numbers' => 'Zahlen',
    'account_symbols' => 'Sonderzeichen',
    'account_musthave' => 'Das Passwort muss enthalten:',
    'account_notfound' => 'Daten konnten nicht gefunden werden. Wurde dieser Datensatz gelöscht?',

    // NSLookup
    'nslookup_hostname_required' => 'Erforderlich',
    'nslookup_hostname_regex' => 'Ungültiger Hostname oder ungültige IP-Adresse',
    'nslookup_type_nullable' => 'Ungültiger Typ',
    'nslookup_type_in' => 'Ungültiger Typ',
    'nslookup_dns_required' => 'Erforderlich',
    'nslookup_dns_ip' => 'Nur IP-Adresse erlaubt',
    'nslookup_error' => 'Fehler beim Versuch, nslookup auszuführen. Bitte überprüfen Sie den Host und versuchen Sie es erneut.',

    // Traceroute
    'traceroute_hostname_required' => 'Erforderlich',
    'traceroute_hostname_regex' => 'Ungültiger Hostname oder ungültige IP-Adresse',
    'traceroute_error' => 'Fehler beim Versuch, Traceroute auszuführen. Bitte überprüfen Sie den Host und versuchen Sie es erneut.',

    // Whois
    'whois_hostname_required' => 'Erforderlich',
    'whois_hostname_regex' => 'Ungültige Domain, Hostname oder IP-Adresse',
    'whois_error' => 'Fehler beim Versuch, Whois auszuführen. Bitte überprüfen Sie den Host und versuchen Sie es erneut.',

    // Ping
    'ping_hostname_required' => 'Erforderlich',
    'ping_hostname_regex' => 'Ungültige Domain, Hostname oder IP-Adresse',
    'ping_error' => 'Fehler beim Versuch, Ping auszuführen. Bitte überprüfen Sie den Host und versuchen Sie es erneut.',

    // Profile
    'profile_name_required' => 'Dieses Feld ist erforderlich.',
    'profile_name_max' => 'Die maximale Länge beträgt :max Zeichen.',

    // Tags
    'tag_name_required' => 'Dieses Feld ist erforderlich.',
    'tag_name_max' => 'Die maximale Länge beträgt :max Zeichen.',

    // Schedule
    'schedule_name_required' => 'Dieses Feld ist erforderlich.',
    'schedule_name_max' => 'Die maximale Länge beträgt :max Zeichen.',
    'schedule_tags_required' => 'Dieses Feld ist erforderlich.',
    'schedule_tags_min' => 'Die minimale Länge beträgt :min Zeichen.',
    'schedule_tags_invalid' => 'Ungültige Tags ausgewählt.',

    // Device
    'device_name_required' => 'Dieses Feld ist erforderlich.',
    'device_name_max' => 'Die maximale Länge beträgt :max Zeichen.',
    'device_ipaddr_required' => 'Dieses Feld ist erforderlich.',
    'device_ipaddr_unique' => 'Diese IP-Adresse wurde bereits verwendet.',
    'device_tags_required' => 'Dieses Feld ist erforderlich.',
    'device_tags_min' => 'Die minimale Länge beträgt :min Zeichen.',
    'device_tags_invalid' => 'Ungültige Tags ausgewählt.',
    'device_script_required' => 'Dieses Feld ist erforderlich.',
    'device_diff_notfound' => 'Eine der Dateien wurde nicht gefunden',
    'device_diff_notallowed' => 'Dieser Dateityp erlaubt keine Differenzanalyse',

    // Licensing
    'licensing_100' => 'SafeBox360 wurde lizenziert.',
    'licensing_101' => 'Inkonsistente Daten [101]',
    'licensing_104' => 'Lizenz inaktiv [104]',
    'licensing_105' => 'Daten konnten nicht entpackt werden [105]',
    'licensing_106' => 'Unvollständige Daten [106]',
    'licensing_107' => 'Lizenz nicht gefunden [107]',
    'licensing_108' => 'Lizenz gesperrt [108]',
    'licensing_109' => 'Lizenz mit einer anderen Installation verknüpft [109]'

];



