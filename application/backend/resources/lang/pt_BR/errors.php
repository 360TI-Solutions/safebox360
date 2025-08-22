<?php

return [
    // SMTP
'smtp_port_required' => 'Obrigatório.',
'smtp_port_integer' => 'A porta SMTP deve ser um número válido.',
'smtp_port_min' => 'A porta SMTP deve ser maior ou igual a :min.',
'smtp_port_max' => 'A porta SMTP deve ser menor ou igual a :max.',
'smtp_hostname_required' => 'O endereço do servidor SMTP é obrigatório.',
'smtp_hostname_string' => 'O host SMTP deve ser uma string válida.',
'smtp_hostname_max' => 'O nome do host SMTP não pode ter mais que :max caracteres.',
'smtp_email_required' => 'O endereço de e-mail do remetente é obrigatório.',
'smtp_email_invalid' => 'Informe um endereço de e-mail do remetente válido.',
'smtp_authtype_required' => 'Obrigatório.',
'smtp_auth_error' => 'Erro de autenticação',

'returned_error' => 'Informação retornada:',

// Senhas
'pw_min_required' => 'Este campo é obrigatório.',
'pw_min_min' => 'O comprimento mínimo da senha é de :min caracteres.',
'pw_min_max' => 'O comprimento máximo da senha é de :max caracteres.',
'pw_min_integer' => 'O comprimento mínimo da senha deve ser um número entre 6 e 20.',
'pw_max_min' => 'O comprimento mínimo da senha é de :min caracteres.',
'pw_max_max' => 'O comprimento máximo da senha é de :max caracteres.',
'pw_max_integer' => 'O comprimento máximo da senha deve ser um número entre 6 e 20.',
'pw_max_required' => 'Este campo é obrigatório.',

// Backup
'backup_errorlogs_purge_days_required' => 'Este campo é obrigatório.',
'backup_errorlogs_purge_days_min' => 'O número mínimo de dias é :min.',
'backup_errorlogs_purge_days_max' => 'O número máximo de dias é :max.',
'backup_errorlogs_purge_days_integer' => 'O número de dias deve estar entre 1 e 365.',
'backup_retention_max_required' => 'Este campo é obrigatório.',
'backup_retention_max_min' => 'O número mínimo de dias é :min.',
'backup_retention_max_max' => 'O número máximo de dias é :max.',
'backup_retention_max_integer' => 'O número de dias deve estar entre 1 e 365.',

// Idiomas
'lang_backend_required' => 'O idioma do backend é obrigatório.',
'lang_frontend_required' => 'O idioma do frontend é obrigatório.',

// Erros gerais
'unexpected_error' => 'Ocorreu um erro inesperado.',
'permission_denied' => 'Você não tem permissão para acessar este recurso.',

// Erros de banco de dados
'sqlerror_notice' => 'Houve um problema ao executar uma operação no banco de dados.',
'sqlerror_unique_field' => 'Provavelmente você tentou inserir um valor que já existe em um campo único.',
'sqlerror_column_not_exists_named' => 'A coluna ":column" não existe:table_msg.',
'sqlerror_column_not_exists_generic' => 'Foi feita referência a uma coluna que não existe no banco de dados.',
'sqlerror_column_verify_message' => 'Verifique se o campo foi criado corretamente ou se o nome está escrito corretamente no código.',
'sqlerror_table_suffix' => ' na tabela ":table"',
'sqlerror_technical_reference' => 'Referência técnica: :ref',
'sqlerror_duplicate_fields' => 'Já existe um registro com os valores ":valor" nos campos ":campos":tabela.',
'sqlerror_duplicate_field' => 'Já existe um registro com o valor ":valor" no campo ":campo":tabela.',
'sqlerror_no_duplicates_plural' => 'Os campos ":campos" não permitem duplicatas. Você precisa alterar um dos valores antes de tentar novamente.',
'sqlerror_no_duplicates_singular' => 'O campo ":campo" não permite duplicatas. Você precisa alterar esse valor antes de tentar novamente.',

// Contas
'account_name_required' => 'Este campo é obrigatório.',
'account_name_max' => 'O comprimento máximo é de :max caracteres.',
'account_username_required' => 'Este campo é obrigatório.',
'account_username_min' => 'O comprimento mínimo é de :min caracteres.',
'account_username_max' => 'O comprimento máximo é de :max caracteres.',
'account_email_required' => 'Este campo é obrigatório.',
'account_profile_required' => 'Este campo é obrigatório.',
'account_password_min' => 'O comprimento mínimo da senha é de :min caracteres.',
'account_password_max' => 'O comprimento máximo da senha é de :max caracteres.',
'account_passwords_mismatch' => 'As senhas devem coincidir.',
'account_lowercase' => 'letras minúsculas',
'account_uppercase' => 'letras maiúsculas',
'account_numbers' => 'números',
'account_symbols' => 'símbolos',
'account_musthave' => 'A senha deve conter:',
'account_notfound' => 'Não foi possível localizar os dados para continuar o processamento. Esse registro foi excluído?',

    "nslookup_hostname_required" => "Este campo é obrigatório.",
"nslookup_hostname_regex" => "Nome do host ou endereço IP inválido.",
"nslookup_type_nullable" => "Tipo inválido.",
"nslookup_type_in" => "Tipo inválido.",
"nslookup_dns_required" => "Este campo é obrigatório.",
"nslookup_dns_ip" => "Apenas endereços IP são permitidos.",
"nslookup_error" => "Erro ao tentar executar o nslookup. Verifique o host e tente novamente.",

"traceroute_hostname_required" => "Este campo é obrigatório.",
"traceroute_hostname_regex" => "Nome do host ou endereço IP inválido.",
"traceroute_error" => "Erro ao tentar executar o traceroute. Verifique o host e tente novamente.",

"whois_hostname_required" => "Este campo é obrigatório.",
"whois_hostname_regex" => "Domínio, nome do host ou endereço IP inválido.",
"whois_error" => "Erro ao tentar executar o whois. Verifique o host e tente novamente.",

"ping_hostname_required" => "Este campo é obrigatório.",
"ping_hostname_regex" => "Domínio, nome do host ou endereço IP inválido.",
"ping_error" => "Erro ao tentar executar o ping. Verifique o host e tente novamente.",

"profile_name_required" => "Este campo é obrigatório.",
"profile_name_max" => "O comprimento máximo é de :max caracteres.",

"tag_name_required" => "Este campo é obrigatório.",
"tag_name_max" => "O comprimento máximo é de :max caracteres.",

"schedule_name_required" => "Este campo é obrigatório.",
"schedule_name_max" => "O comprimento máximo é de :max caracteres.",
"schedule_tags_required" => "Este campo é obrigatório.",
"schedule_tags_min" => "O comprimento mínimo é de :min caracteres.",
"schedule_tags_invalid" => "Tags selecionadas inválidas.",

"device_name_required" => "Este campo é obrigatório.",
"device_name_max" => "O comprimento máximo é de :max caracteres.",
"device_ipaddr_required" => "Este campo é obrigatório.",
"device_ipaddr_unique" => "O endereço IP já está em uso.",
"device_tags_required" => "Este campo é obrigatório.",
"device_tags_min" => "O comprimento mínimo é de :min caracteres.",
"device_tags_invalid" => "Tags selecionadas inválidas.",
"device_script_required" => "Este campo é obrigatório.",
"device_diff_notfound" => "Um dos arquivos não foi encontrado.",
"device_diff_notallowed" => "O tipo de arquivo não permite análise de diferenças.",

"licensing_100" => "SafeBox360 foi licenciado.",
"licensing_101" => "Dados inconsistentes [101]",
"licensing_104" => "Licença inativa [104]",
"licensing_105" => "Não foi possível descompactar os dados [105]",
"licensing_106" => "Dados incompletos [106]",
"licensing_107" => "Licença não encontrada [107]",
"licensing_108" => "Licença bloqueada [108]",
"licensing_109" => "Licença vinculada a outra instalação [109]",

"file_not_found" => "Arquivo não encontrado"

];



