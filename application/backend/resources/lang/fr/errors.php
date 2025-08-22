<?php

return [
     // SMTP
     'smtp_port_required' => 'Requis.',
     'smtp_port_integer' => 'Le port SMTP doit être un nombre valide.',
     'smtp_port_min' => 'Le port SMTP doit être supérieur ou égal à :min.',
     'smtp_port_max' => 'Le port SMTP doit être inférieur ou égal à :max.',
     'smtp_hostname_required' => "L'adresse du serveur SMTP est requise.",
     'smtp_hostname_string' => 'L’hôte SMTP doit être une chaîne valide.',
     'smtp_hostname_max' => "Le nom d'hôte SMTP ne peut pas dépasser :max caractères.",
     'smtp_email_required' => "L'adresse e-mail de l'expéditeur est requise.",
     'smtp_email_invalid' => "Veuillez fournir une adresse e-mail d'expéditeur valide.",
     'smtp_authtype_required' => 'Requis.',
     'smtp_auth_error' => "Erreur d'authentification",
 
     'returned_error' => "Informations retournées :",
 
     // Passwords
     'pw_min_required' => 'Ce champ est requis.',
     'pw_min_min' => 'La longueur minimale du mot de passe est de :min caractères.',
     'pw_min_max' => 'La longueur maximale du mot de passe est de :max caractères.',
     'pw_min_integer' => 'La longueur minimale du mot de passe doit être un nombre entre 6 et 20.',
     'pw_max_min' => 'La longueur minimale du mot de passe est de :min caractères.',
     'pw_max_max' => 'La longueur maximale du mot de passe est de :max caractères.',
     'pw_max_integer' => 'La longueur maximale du mot de passe doit être un nombre entre 6 et 20.',
     'pw_max_required' => 'Ce champ est requis.',
 
     // Backup
     'backup_errorlogs_purge_days_required' => 'Ce champ est requis.',
     'backup_errorlogs_purge_days_min' => 'Le nombre minimum de jours est :min.',
     'backup_errorlogs_purge_days_max' => 'Le nombre maximum de jours est :max.',
     'backup_errorlogs_purge_days_integer' => 'Le nombre de jours doit être compris entre 1 et 365.',
     'backup_retention_max_required' => 'Ce champ est requis.',
     'backup_retention_max_min' => 'Le nombre minimum de jours est :min.',
     'backup_retention_max_max' => 'Le nombre maximum de jours est :max.',
     'backup_retention_max_integer' => 'Le nombre de jours doit être compris entre 1 et 365.',
 
     // Language
     'lang_backend_required' => 'La langue du backend est requise.',
     'lang_frontend_required' => 'La langue du frontend est requise.',
 
     // General errors
     'unexpected_error' => 'Une erreur inattendue est survenue.',
     'permission_denied' => "Vous n'avez pas la permission d'accéder à cette ressource.",
 
     // Database errors
     'sqlerror_notice' => 'Un problème est survenu lors de l’exécution d’une opération sur la base de données.',
     'sqlerror_unique_field' => 'Vous avez probablement tenté d’insérer une valeur qui existe déjà dans un champ unique.',
     'sqlerror_column_not_exists_named' => 'La colonne ":column" n’existe pas:table_msg.',
     'sqlerror_column_not_exists_generic' => "Une colonne inexistante dans la base de données a été référencée.",
     'sqlerror_column_verify_message' => "Vérifiez si le champ a été correctement créé ou si le nom est correctement orthographié dans le code.",
     'sqlerror_table_suffix' => ' dans la table ":table"',
     'sqlerror_technical_reference' => 'Référence technique : :ref',
     'sqlerror_duplicate_fields' => 'Un enregistrement existe déjà avec les valeurs ":valor" dans les champs ":campos":tabela.',
     'sqlerror_duplicate_field' => 'Un enregistrement existe déjà avec la valeur ":valor" dans le champ ":campo":tabela.',
     'sqlerror_no_duplicates_plural' => 'Ces champs ":campos" ne permettent pas de doublons. Vous devez modifier l’une des valeurs avant de réessayer.',
     'sqlerror_no_duplicates_singular' => 'Ce champ ":campo" ne permet pas de doublons. Vous devez modifier cette valeur avant de réessayer.',
 
     // Accounts
     'account_name_required' => "Ce champ est requis.",
     "account_name_max" => "La longueur maximale est de :max caractères.",
     'account_username_required' => "Ce champ est requis.",
     "account_username_min" => "La longueur minimale est de :min caractères.",
     "account_username_max" => "La longueur maximale est de :max caractères.",
     "account_email_required" => "Ce champ est requis.",
     "account_profile_required" => "Ce champ est requis.",
     "account_password_min" => "La longueur minimale du mot de passe est de :min caractères.",
     "account_password_max" => "La longueur maximale du mot de passe est de :max caractères.",
     "account_passwords_mismatch" => "Les mots de passe doivent correspondre.",
     "account_lowercase" => "lettres minuscules",
     "account_uppercase" => "lettres majuscules",
     "account_numbers" => "nombres",
     "account_symbols" => "symboles",
     "account_musthave" => "Le mot de passe doit contenir :",
     "account_notfound" => "Impossible de trouver les données pour poursuivre le traitement. Cet enregistrement a-t-il été supprimé ?",

    "nslookup_hostname_required" => "Requis",
    "nslookup_hostname_regex" => "Nom d'hôte ou adresse IP invalide",
    "nslookup_type_nullable" => "Type invalide",
    "nslookup_type_in" => "Type invalide",
    "nslookup_dns_required" => "Requis",
    "nslookup_dns_ip" => "Seule une adresse IP est autorisée",
    "nslookup_error" => "Erreur lors de l'exécution de la commande nslookup. Veuillez vérifier l'hôte et réessayer.",

    "traceroute_hostname_required" => "Requis",
    "traceroute_hostname_regex" => "Nom d'hôte ou adresse IP invalide",
    "traceroute_error" => "Erreur lors de l'exécution de la commande traceroute. Veuillez vérifier l'hôte et réessayer.",

    "whois_hostname_required" => "Requis",
    "whois_hostname_regex" => "Domaine, nom d'hôte ou adresse IP invalide",
    "whois_error" => "Erreur lors de l'exécution de la commande whois. Veuillez vérifier l'hôte et réessayer.",

    "ping_hostname_required" => "Requis",
    "ping_hostname_regex" => "Domaine, nom d'hôte ou adresse IP invalide",
    "ping_error" => "Erreur lors de l'exécution de la commande ping. Veuillez vérifier l'hôte et réessayer.",

    "profile_name_required" => "Ce champ est requis.",
    "profile_name_max" => "La longueur maximale est de :max caractères.",

    "tag_name_required" => "Ce champ est requis.",
    "tag_name_max" => "La longueur maximale est de :max caractères.",

    "schedule_name_required" => "Ce champ est requis.",
    "schedule_name_max" => "La longueur maximale est de :max caractères.",
    "schedule_tags_required" => "Ce champ est requis.",
    "schedule_tags_min" => "La longueur minimale est de :min caractères.",
    "schedule_tags_invalid" => "Étiquettes sélectionnées invalides.",

    "device_name_required" => "Ce champ est requis.",
    "device_name_max" => "La longueur maximale est de :max caractères.",
    "device_ipaddr_required" => "Ce champ est requis.",
    "device_ipaddr_unique" => "L'adresse IP a déjà été utilisée.",
    "device_tags_required" => "Ce champ est requis.",
    "device_tags_min" => "La longueur minimale est de :min caractères.",
    "device_tags_invalid" => "Étiquettes sélectionnées invalides.",
    "device_script_required" => "Ce champ est requis.",

    "licensing_100" => "SafeBox360 a été licencié.",
    "licensing_101" => "Données incohérentes [101]",
    "licensing_104" => "Licence inactive [104]",
    "licensing_105" => "Impossible de décompresser les données [105]",
    "licensing_106" => "Données incomplètes [106]",
    "licensing_107" => "Licence non trouvée [107]",
    "licensing_108" => "Licence bloquée [108]",
    "licensing_109" => "Licence liée à une autre installation [109]"

];



