<?php

return [
// SMTP
'smtp_port_required' => 'Requerido.',
'smtp_port_integer' => 'El puerto SMTP debe ser un número válido.',
'smtp_port_min' => 'El puerto SMTP debe ser mayor o igual a :min.',
'smtp_port_max' => 'El puerto SMTP debe ser menor o igual a :max.',
'smtp_hostname_required' => 'La dirección del servidor SMTP es requerida.',
'smtp_hostname_string' => 'El host SMTP debe ser una cadena válida.',
'smtp_hostname_max' => 'El nombre del host SMTP no puede tener más de :max caracteres.',
'smtp_email_required' => 'La dirección de correo del remitente es requerida.',
'smtp_email_invalid' => 'Proporcione una dirección de correo del remitente válida.',
'smtp_authtype_required' => 'Requerido.',
'smtp_auth_error' => "Error de autenticación",

'returned_error' => "Información devuelta:",

// Passwords
'pw_min_required' => 'Este campo es obligatorio.',
'pw_min_min' => 'La longitud mínima de la contraseña es de :min caracteres.',
'pw_min_max' => 'La longitud máxima de la contraseña es de :max caracteres.',
'pw_min_integer' => 'La longitud mínima de la contraseña debe ser un número entre 6 y 20.',
'pw_min_required' => 'Este campo es obligatorio.',
'pw_max_min' => 'La longitud mínima de la contraseña es de :min caracteres.',
'pw_max_max' => 'La longitud máxima de la contraseña es de :max caracteres.',
'pw_max_integer' => 'La longitud máxima de la contraseña debe ser un número entre 6 y 20.',
'pw_max_required' => 'Este campo es obligatorio.',

// Backup
'backup_errorlogs_purge_days_required' => 'Este campo es obligatorio.',
'backup_errorlogs_purge_days_min' => 'El mínimo de días es :min.',
'backup_errorlogs_purge_days_max' => 'El máximo de días es :max.',
'backup_errorlogs_purge_days_integer' => 'Los días deben ser un número entre 1 y 365.',
'backup_retention_max_required' => 'Este campo es obligatorio.',
'backup_retention_max_min' => 'El mínimo de días es :min.',
'backup_retention_max_max' => 'El máximo de días es :max.',
'backup_retention_max_integer' => 'Los días deben ser un número entre 1 y 365.',

// Language
'lang_backend_required' => 'El idioma del backend es obligatorio.',
'lang_frontend_required' => 'El idioma del frontend es obligatorio.',

// General errors
'unexpected_error' => 'Ocurrió un error inesperado.',
'permission_denied' => 'No tienes permiso para acceder a este recurso.',

// Database errors
'sqlerror_notice' => 'Hubo un problema al ejecutar una operación en la base de datos.',
'sqlerror_unique_field' => 'Probablemente intentaste insertar un valor que ya existe en un campo único.',
'sqlerror_column_not_exists_named' => 'La columna ":column" no existe:table_msg.',
'sqlerror_column_not_exists_generic' => 'Se hizo referencia a una columna que no existe en la base de datos.',
'sqlerror_column_verify_message' => 'Verifica si el campo fue creado correctamente o si el nombre está escrito correctamente en el código.',
'sqlerror_table_suffix' => ' en la tabla ":table"',
'sqlerror_technical_reference' => 'Referencia técnica: :ref',
'sqlerror_duplicate_fields' => 'Ya existe un registro con los valores ":valor" en los campos ":campos":tabela.',
'sqlerror_duplicate_field' => 'Ya existe un registro con el valor ":valor" en el campo ":campo":tabela.',
'sqlerror_no_duplicates_plural' => 'Estos campos ":campos" no permiten duplicados. Debes cambiar uno de los valores antes de intentar nuevamente.',
'sqlerror_no_duplicates_singular' => 'Este campo ":campo" no permite duplicados. Debes cambiar este valor antes de intentar nuevamente.',

// Accounts
'account_name_required' => "Este campo es obligatorio.",
"account_name_max" => "La longitud máxima es de :max caracteres.",
'account_username_required' => "Este campo es obligatorio.",
"account_username_min" => "La longitud mínima es de :min caracteres.",
"account_username_max" => "La longitud máxima es de :max caracteres.",
"account_email_required" => "Este campo es obligatorio.",
"account_profile_required" => "Este campo es obligatorio.",
"account_password_min" => "La longitud mínima de la contraseña es de :min caracteres.",
"account_password_max" => "La longitud máxima de la contraseña es de :max caracteres.",
"account_passwords_mismatch" => "Las contraseñas deben coincidir.",
"account_lowercase" => "letras minúsculas",
"account_uppercase" => "letras mayúsculas",
"account_numbers" => "números",
"account_symbols" => "símbolos",
"account_musthave" => "La contraseña debe contener:",
"account_notfound" => "No se pudo encontrar la información para continuar con el procesamiento. ¿Este registro fue eliminado?",

"nslookup_hostname_required" => "Requerido",
"nslookup_hostname_regex" => "Nombre de host o dirección IP inválido",
"nslookup_type_nullable" => "Tipo inválido",
"nslookup_type_in" => "Tipo inválido",
"nslookup_dns_required" => "Requerido",
"nslookup_dns_ip" => "Solo se permite dirección IP",
"nslookup_error" => "Error al intentar realizar nslookup. Verifica el host e intenta nuevamente.",

"traceroute_hostname_required" => "Requerido",
"traceroute_hostname_regex" => "Nombre de host o dirección IP inválido",
"traceroute_error" => "Error al intentar realizar traceroute. Verifica el host e intenta nuevamente.",

"whois_hostname_required" => "Requerido",
"whois_hostname_regex" => "Dominio, nombre de host o dirección IP inválido",
"whois_error" => "Error al intentar realizar whois. Verifica el host e intenta nuevamente.",

"ping_hostname_required" => "Requerido",
"ping_hostname_regex" => "Dominio, nombre de host o dirección IP inválido",
"ping_error" => "Error al intentar realizar ping. Verifica el host e intenta nuevamente.",

"profile_name_required" => "Este campo es obligatorio.",
"profile_name_max" => "La longitud máxima es de :max caracteres.",

"tag_name_required" => "Este campo es obligatorio.",
"tag_name_max" => "La longitud máxima es de :max caracteres.",

"schedule_name_required" => "Este campo es obligatorio.",
"schedule_name_max" => "La longitud máxima es de :max caracteres.",
"schedule_tags_required" => "Este campo es obligatorio.",
"schedule_tags_min" => "La longitud mínima es de :min caracteres.",
"schedule_tags_invalid" => "Etiquetas seleccionadas inválidas.",

"device_name_required" => "Este campo es obligatorio.",
"device_name_max" => "La longitud máxima es de :max caracteres.",
"device_ipaddr_required" => "Este campo es obligatorio.",
"device_ipaddr_unique" => "La dirección IP ya está en uso.",
"device_tags_required" => "Este campo es obligatorio.",
"device_tags_min" => "La longitud mínima es de :min caracteres.",
"device_tags_invalid" => "Etiquetas seleccionadas inválidas.",
"device_script_required" => "Este campo es obligatorio.",
"device_diff_notfound" => "Uno de los archivos no fue encontrado",
"device_diff_notallowed" => "El tipo de archivo no permite análisis de diferencias",

"licensing_100" => "SafeBox360 fue licenciado.",
"licensing_101" => "Datos inconsistentes [101]",
"licensing_104" => "Licencia inactiva [104]",
"licensing_105" => "No se pueden desempaquetar los datos [105]",
"licensing_106" => "Datos incompletos [106]",
"licensing_107" => "Licencia no encontrada [107]",
"licensing_108" => "Licencia bloqueada [108]",
"licensing_109" => "Licencia vinculada con otra instalación [109]"
];