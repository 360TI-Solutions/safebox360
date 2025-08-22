<?php

return [
    // SMTP
    'smtp_port_required' => 'Required.',
    'smtp_port_integer' => 'The SMTP port must be a valid number.',
    'smtp_port_min' => 'The SMTP port must be greater than or equal to :min.',
    'smtp_port_max' => 'The SMTP port must be less than or equal to :max.',
    'smtp_hostname_required' => 'The SMTP server address is required.',
    'smtp_hostname_string' => 'The SMTP host must be a valid string.',
    'smtp_hostname_max' => 'The SMTP host name may not be greater than :max characters.',
    'smtp_email_required' => 'The sender email address is required.',
    'smtp_email_invalid' => 'Please provide a valid sender email address.',
    'smtp_authtype_required' => 'Required.',
    'smtp_auth_error' => "Authentication Error",

    'returned_error' => "Information returned:",

    // Passwords
    'pw_min_required' => 'This field is required.',
    'pw_min_min' => 'The minimum password length is :min characters.',
    'pw_min_max' => 'The maximum password length is :max characters.',
    'pw_min_integer' => 'The minimum password length must be a number between 6 and 20.',
    'pw_min_required' => 'This field is required.',
    'pw_max_min' => 'The minimum password length is :min characters.',
    'pw_max_max' => 'The maximum password length is :max characters.',
    'pw_max_integer' => 'The minimum password length must be a number between 6 and 20.',
    'pw_max_required' => 'This field is required.',

    // Backup
    'backup_errorlogs_purge_days_required' => 'This field is required.',
    'backup_errorlogs_purge_days_min' => 'The minimum days is :min.',
    'backup_errorlogs_purge_days_max' => 'The maximum days is :max.',
    'backup_errorlogs_purge_days_integer' => 'The days must be a number between 1 and 365.',
    'backup_retention_max_required' => 'This field is required.',
    'backup_retention_max_min' => 'The minimum days is :min.',
    'backup_retention_max_max' => 'The maximum days is :max.',
    'backup_retention_max_integer' => 'The days must be a number between 1 and 365.',

    // Language
    'lang_backend_required' => 'The backend language is required.',
    'lang_frontend_required' => 'The frontend language is required.',

    // General errors
    'unexpected_error' => 'An unexpected error occurred.',
    'permission_denied' => 'You do not have permission to access this resource.',

    // Database errors
    'sqlerror_notice' => 'There was a problem executing a database operation.',
    'sqlerror_unique_field' => 'You probably tried to insert a value that already exists in a unique field.',
    'sqlerror_column_not_exists_named' => 'The column ":column" does not exist:table_msg.',
    'sqlerror_column_not_exists_generic' => 'A column that does not exist in the database was referenced.',
    'sqlerror_column_verify_message' => 'Check if the field was created correctly or if the name is typed correctly in the code.',
    'sqlerror_table_suffix' => ' in the ":table" table',
    'sqlerror_technical_reference' => 'Technical reference: :ref',
    'sqlerror_duplicate_fields' => 'A record already exists with the values ":valor" in the fields ":campos":tabela.',
    'sqlerror_duplicate_field' => 'A record already exists with the value ":valor" in the field ":campo":tabela.',
    'sqlerror_no_duplicates_plural' => 'These fields ":campos" do not allow duplicates. You need to change one of the values before trying again.',
    'sqlerror_no_duplicates_singular' => 'This field ":campo" does not allow duplicates. You need to change this value before trying again.',

    // Accounts
    'account_name_required' => "This field is required.",
    "account_name_max" => "The maximum length is :max characters.",
    'account_username_required' => "This field is required.",
    "account_username_min" => "The minimum length is :min characters.",
    "account_username_max" => "The maximum length is :max characters.",
    "account_email_required" => "This field is required.",
    "account_profile_required" => "This field is required.",
    "account_password_min" => "The minimum password length is :min characters.",
    "account_password_max" => "The maximum password length is :max characters.",
    "account_passwords_mismatch" => "Passwords must match.",
    "account_lowercase" => "lowercase letters",
    "account_uppercase" => "uppercase letters",
    "account_numbers" => "numbers",
    "account_symbols" => "symbols",
    "account_musthave" => "The password must contain:",
    "account_notfound" => "Unable to find the data to proceed with processing. Was this record deleted?",

    "nslookup_hostname_required" => "Required",
    "nslookup_hostname_regex" => "Invalid hostname or IP address",
    "nslookup_type_nullable" => "Invalid type",
    "nslookup_type_in" => "Invalid type",
    "nslookup_dns_required" => "Required",
    "nslookup_dns_ip" => "Only IP address allowed",
    "nslookup_error" => "Error while attempting to perform nslookup. Please check the host and try again.",

    "traceroute_hostname_required" => "Required",
    "traceroute_hostname_regex" => "Invalid hostname or IP address",
    "traceroute_error" => "Error while attempting to perform traceroute. Please check the host and try again.",

    "whois_hostname_required" => "Required",
    "whois_hostname_regex" => "Invalid domain, hostname or IP address",
    "whois_error" => "Error while attempting to perform whois. Please check the host and try again.",

    "ping_hostname_required" => "Required",
    "ping_hostname_regex" => "Invalid domain, hostname or IP address",
    "ping_error" => "Error while attempting to perform ping. Please check the host and try again.",

    "profile_name_required" => "This field is required.",
    "profile_name_max" => "The maximum length is :max characters.",

    "tag_name_required" => "This field is required.",
    "tag_name_max" => "The maximum length is :max characters.",

    "schedule_name_required" => "This field is required.",
    "schedule_name_max" => "The maximum length is :max characters.",
    "schedule_tags_required" => "This field is required.",
    "schedule_tags_min" => "The minimum length is :min characters.",
    "schedule_tags_invalid" => "Invalid tags selected.",

    "device_name_required" => "This field is required.",
    "device_name_max" => "The maximum length is :max characters.",
    "device_ipaddr_required" => "This field is required.",
    "device_ipaddr_unique" => "The ipaddr has already been taken.",
    "device_tags_required" => "This field is required.",
    "device_tags_min" => "The minimum length is :min characters.",
    "device_tags_invalid" => "Invalid tags selected.",
    "device_script_required" => "This field is required.",
    "device_diff_notfound" => "One of the files was not found",
    "device_diff_notallowed" => "The file type does not allow diff analysis",

    "licensing_100" => "SafeBox360 was licensed.",
    "licensing_101" => "Inconsistent data [101]",
    "licensing_104" => "License inactive [104]",
    "licensing_105" => "Cannot unpackage data [105]",
    "licensing_106" => "Incomplete data [106]",
    "licensing_107" => "License not found [107]",
    "licensing_108" => "License blocked [108]",
    "licensing_109" => "License linked with another installation [109]"

];



