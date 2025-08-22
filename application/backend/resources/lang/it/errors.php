<?php

return [
    // SMTP
    'smtp_port_required' => 'Obbligatorio.',
    'smtp_port_integer' => 'La porta SMTP deve essere un numero valido.',
    'smtp_port_min' => 'La porta SMTP deve essere maggiore o uguale a :min.',
    'smtp_port_max' => 'La porta SMTP deve essere minore o uguale a :max.',
    'smtp_hostname_required' => "L'indirizzo del server SMTP è obbligatorio.",
    'smtp_hostname_string' => "L'host SMTP deve essere una stringa valida.",
    'smtp_hostname_max' => "Il nome host SMTP non può superare i :max caratteri.",
    'smtp_email_required' => "L'indirizzo email del mittente è obbligatorio.",
    'smtp_email_invalid' => "Fornire un indirizzo email del mittente valido.",
    'smtp_authtype_required' => 'Obbligatorio.',
    'smtp_auth_error' => "Errore di autenticazione",

    'returned_error' => "Informazioni restituite:",

    // Passwords
    'pw_min_required' => 'Questo campo è obbligatorio.',
    'pw_min_min' => 'La lunghezza minima della password è di :min caratteri.',
    'pw_min_max' => 'La lunghezza massima della password è di :max caratteri.',
    'pw_min_integer' => 'La lunghezza minima della password deve essere un numero tra 6 e 20.',
    'pw_max_min' => 'La lunghezza minima della password è di :min caratteri.',
    'pw_max_max' => 'La lunghezza massima della password è di :max caratteri.',
    'pw_max_integer' => 'La lunghezza massima della password deve essere un numero tra 6 e 20.',
    'pw_max_required' => 'Questo campo è obbligatorio.',

    // Backup
    'backup_errorlogs_purge_days_required' => 'Questo campo è obbligatorio.',
    'backup_errorlogs_purge_days_min' => 'Il numero minimo di giorni è :min.',
    'backup_errorlogs_purge_days_max' => 'Il numero massimo di giorni è :max.',
    'backup_errorlogs_purge_days_integer' => 'I giorni devono essere un numero tra 1 e 365.',
    'backup_retention_max_required' => 'Questo campo è obbligatorio.',
    'backup_retention_max_min' => 'Il numero minimo di giorni è :min.',
    'backup_retention_max_max' => 'Il numero massimo di giorni è :max.',
    'backup_retention_max_integer' => 'I giorni devono essere un numero tra 1 e 365.',

    // Language
    'lang_backend_required' => 'La lingua del backend è obbligatoria.',
    'lang_frontend_required' => 'La lingua del frontend è obbligatoria.',

    // General errors
    'unexpected_error' => 'Si è verificato un errore imprevisto.',
    'permission_denied' => 'Non hai il permesso per accedere a questa risorsa.',

    // Database errors
    'sqlerror_notice' => 'Si è verificato un problema durante l\'esecuzione di un\'operazione sul database.',
    'sqlerror_unique_field' => 'Probabilmente hai provato a inserire un valore già esistente in un campo univoco.',
    'sqlerror_column_not_exists_named' => 'La colonna ":column" non esiste:table_msg.',
    'sqlerror_column_not_exists_generic' => 'È stata fatta riferimento a una colonna inesistente nel database.',
    'sqlerror_column_verify_message' => 'Verifica se il campo è stato creato correttamente o se il nome è stato digitato correttamente nel codice.',
    'sqlerror_table_suffix' => ' nella tabella ":table"',
    'sqlerror_technical_reference' => 'Riferimento tecnico: :ref',
    'sqlerror_duplicate_fields' => 'Esiste già un record con i valori ":valor" nei campi ":campos":tabela.',
    'sqlerror_duplicate_field' => 'Esiste già un record con il valore ":valor" nel campo ":campo":tabela.',
    'sqlerror_no_duplicates_plural' => 'I campi ":campos" non consentono duplicati. Devi modificare uno dei valori prima di riprovare.',
    'sqlerror_no_duplicates_singular' => 'Il campo ":campo" non consente duplicati. Devi modificare questo valore prima di riprovare.',

    // Accounts
    'account_name_required' => "Questo campo è obbligatorio.",
    "account_name_max" => "La lunghezza massima è di :max caratteri.",
    'account_username_required' => "Questo campo è obbligatorio.",
    "account_username_min" => "La lunghezza minima è di :min caratteri.",
    "account_username_max" => "La lunghezza massima è di :max caratteri.",
    "account_email_required" => "Questo campo è obbligatorio.",
    "account_profile_required" => "Questo campo è obbligatorio.",
    "account_password_min" => "La lunghezza minima della password è di :min caratteri.",
    "account_password_max" => "La lunghezza massima della password è di :max caratteri.",
    "account_passwords_mismatch" => "Le password devono coincidere.",
    "account_lowercase" => "lettere minuscole",
    "account_uppercase" => "lettere maiuscole",
    "account_numbers" => "numeri",
    "account_symbols" => "simboli",
    "account_musthave" => "La password deve contenere:",
    "account_notfound" => "Impossibile trovare i dati per procedere con l'elaborazione. Questo record è stato eliminato?",

    "nslookup_hostname_required" => "Obbligatorio",
    "nslookup_hostname_regex" => "Nome host o indirizzo IP non valido",
    "nslookup_type_nullable" => "Tipo non valido",
    "nslookup_type_in" => "Tipo non valido",
    "nslookup_dns_required" => "Obbligatorio",
    "nslookup_dns_ip" => "È consentito solo l'indirizzo IP",
    "nslookup_error" => "Errore durante il tentativo di eseguire nslookup. Controlla l'host e riprova.",

    "traceroute_hostname_required" => "Obbligatorio",
    "traceroute_hostname_regex" => "Nome host o indirizzo IP non valido",
    "traceroute_error" => "Errore durante il tentativo di eseguire traceroute. Controlla l'host e riprova.",

    "whois_hostname_required" => "Obbligatorio",
    "whois_hostname_regex" => "Dominio, nome host o indirizzo IP non valido",
    "whois_error" => "Errore durante il tentativo di eseguire whois. Controlla l'host e riprova.",

    "ping_hostname_required" => "Obbligatorio",
    "ping_hostname_regex" => "Dominio, nome host o indirizzo IP non valido",
    "ping_error" => "Errore durante il tentativo di eseguire ping. Controlla l'host e riprova.",

    "profile_name_required" => "Questo campo è obbligatorio.",
    "profile_name_max" => "La lunghezza massima è di :max caratteri.",

    "tag_name_required" => "Questo campo è obbligatorio.",
    "tag_name_max" => "La lunghezza massima è di :max caratteri.",

    "schedule_name_required" => "Questo campo è obbligatorio.",
    "schedule_name_max" => "La lunghezza massima è di :max caratteri.",
    "schedule_tags_required" => "Questo campo è obbligatorio.",
    "schedule_tags_min" => "La lunghezza minima è di :min caratteri.",
    "schedule_tags_invalid" => "Tag selezionati non validi.",

    "device_name_required" => "Questo campo è obbligatorio.",
    "device_name_max" => "La lunghezza massima è di :max caratteri.",
    "device_ipaddr_required" => "Questo campo è obbligatorio.",
    "device_ipaddr_unique" => "L'indirizzo IP è già stato utilizzato.",
    "device_tags_required" => "Questo campo è obbligatorio.",
    "device_tags_min" => "La lunghezza minima è di :min caratteri.",
    "device_tags_invalid" => "Tag selezionati non validi.",
    "device_script_required" => "Questo campo è obbligatorio.",
    "device_diff_notfound" => "Uno dei file non è stato trovato",
    "device_diff_notallowed" => "Il tipo di file non consente l'analisi delle differenze",

    "licensing_100" => "SafeBox360 è stato licenziato.",
    "licensing_101" => "Dati incoerenti [101]",
    "licensing_104" => "Licenza inattiva [104]",
    "licensing_105" => "Impossibile decomprimere i dati [105]",
    "licensing_106" => "Dati incompleti [106]",
    "licensing_107" => "Licenza non trovata [107]",
    "licensing_108" => "Licenza bloccata [108]",
    "licensing_109" => "Licenza collegata a un'altra installazione [109]"

];



