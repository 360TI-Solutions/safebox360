<?php

return [
    // SMTP
    'smtp_port_required' => 'Obrigatório.',
    'smtp_port_integer' => 'A porta SMTP deve ser um número válido.',
    'smtp_port_min' => 'A porta SMTP deve ser maior ou igual a :min.',
    'smtp_port_max' => 'A porta SMTP deve ser menor ou igual a :max.',
    'smtp_hostname_required' => 'O endereço do servidor SMTP é obrigatório.',
    'smtp_hostname_string' => 'O host SMTP deve ser uma cadeia de caracteres válida.',
    'smtp_hostname_max' => 'O nome do host SMTP não pode ter mais de :max caracteres.',
    'smtp_email_required' => 'O endereço de e-mail do remetente é obrigatório.',
    'smtp_email_invalid' => 'Por favor, introduza um endereço de e-mail de remetente válido.',
    'smtp_authtype_required' => 'Obrigatório.',
    'smtp_auth_error' => 'Erro de autenticação',

    'returned_error' => 'Informação devolvida:',

    // Senhas
    'pw_min_required' => 'Este campo é obrigatório.',
    'pw_min_min' => 'O comprimento mínimo da palavra-passe é de :min caracteres.',
    'pw_min_max' => 'O comprimento máximo da palavra-passe é de :max caracteres.',
    'pw_min_integer' => 'O comprimento mínimo da palavra-passe deve ser um número entre 6 e 20.',
    'pw_max_min' => 'O comprimento mínimo da palavra-passe é de :min caracteres.',
    'pw_max_max' => 'O comprimento máximo da palavra-passe é de :max caracteres.',
    'pw_max_integer' => 'O comprimento máximo da palavra-passe deve ser um número entre 6 e 20.',
    'pw_max_required' => 'Este campo é obrigatório.',

    // Cópias de segurança
    'backup_errorlogs_purge_days_required' => 'Este campo é obrigatório.',
    'backup_errorlogs_purge_days_min' => 'O número mínimo de dias é :min.',
    'backup_errorlogs_purge_days_max' => 'O número máximo de dias é :max.',
    'backup_errorlogs_purge_days_integer' => 'O número de dias deve ser um número entre 1 e 365.',
    'backup_retention_max_required' => 'Este campo é obrigatório.',
    'backup_retention_max_min' => 'O número mínimo de dias é :min.',
    'backup_retention_max_max' => 'O número máximo de dias é :max.',
    'backup_retention_max_integer' => 'O número de dias deve ser um número entre 1 e 365.',

    // Idioma
    'lang_backend_required' => 'O idioma do backoffice é obrigatório.',
    'lang_frontend_required' => 'O idioma do frontend é obrigatório.',

    // Erros gerais
    'unexpected_error' => 'Ocorreu um erro inesperado.',
    'permission_denied' => 'Não tem permissão para aceder a este recurso.',

    // Erros de base de dados
    'sqlerror_notice' => 'Ocorreu um problema ao executar uma operação na base de dados.',
    'sqlerror_unique_field' => 'Provavelmente tentou inserir um valor que já existe num campo único.',
    'sqlerror_column_not_exists_named' => 'A coluna ":column" não existe:table_msg.',
    'sqlerror_column_not_exists_generic' => 'Foi feita referência a uma coluna que não existe na base de dados.',
    'sqlerror_column_verify_message' => 'Verifique se o campo foi criado corretamente ou se o nome está corretamente escrito no código.',
    'sqlerror_table_suffix' => ' na tabela ":table"',
    'sqlerror_technical_reference' => 'Referência técnica: :ref',
    'sqlerror_duplicate_fields' => 'Já existe um registo com os valores ":valor" nos campos ":campos":tabela.',
    'sqlerror_duplicate_field' => 'Já existe um registo com o valor ":valor" no campo ":campo":tabela.',
    'sqlerror_no_duplicates_plural' => 'Os campos ":campos" não permitem duplicados. Deve alterar um dos valores antes de tentar novamente.',
    'sqlerror_no_duplicates_singular' => 'O campo ":campo" não permite duplicados. Deve alterar este valor antes de tentar novamente.',

    // Contas
    'account_name_required' => 'Este campo é obrigatório.',
    'account_name_max' => 'O comprimento máximo é de :max caracteres.',
    'account_username_required' => 'Este campo é obrigatório.',
    'account_username_min' => 'O comprimento mínimo é de :min caracteres.',
    'account_username_max' => 'O comprimento máximo é de :max caracteres.',
    'account_email_required' => 'Este campo é obrigatório.',
    'account_profile_required' => 'Este campo é obrigatório.',
    'account_password_min' => 'O comprimento mínimo da palavra-passe é de :min caracteres.',
    'account_password_max' => 'O comprimento máximo da palavra-passe é de :max caracteres.',
    'account_passwords_mismatch' => 'As palavras-passe devem coincidir.',
    'account_lowercase' => 'letras minúsculas',
    'account_uppercase' => 'letras maiúsculas',
    'account_numbers' => 'números',
    'account_symbols' => 'símbolos',
    'account_musthave' => 'A palavra-passe deve conter:',
    'account_notfound' => 'Não foi possível encontrar os dados para continuar o processamento. Este registo pode ter sido apagado.',

    // NSLOOKUP
    "nslookup_hostname_required" => "Obrigatório",
    "nslookup_hostname_regex" => "Nome do host ou endereço IP inválido",
    "nslookup_type_nullable" => "Tipo inválido",
    "nslookup_type_in" => "Tipo inválido",
    "nslookup_dns_required" => "Obrigatório",
    "nslookup_dns_ip" => "Apenas endereços IP são permitidos",
    "nslookup_error" => "Erro ao tentar realizar o nslookup. Por favor, verifique o host e tente novamente.",

    // TRACEROUTE
    "traceroute_hostname_required" => "Obrigatório",
    "traceroute_hostname_regex" => "Nome do host ou endereço IP inválido",
    "traceroute_error" => "Erro ao tentar realizar o traceroute. Por favor, verifique o host e tente novamente.",

    // WHOIS
    "whois_hostname_required" => "Obrigatório",
    "whois_hostname_regex" => "Domínio, nome do host ou endereço IP inválido",
    "whois_error" => "Erro ao tentar realizar o whois. Por favor, verifique o host e tente novamente.",

    // PING
    "ping_hostname_required" => "Obrigatório",
    "ping_hostname_regex" => "Domínio, nome do host ou endereço IP inválido",
    "ping_error" => "Erro ao tentar realizar o ping. Por favor, verifique o host e tente novamente.",

    // PERFIL
    "profile_name_required" => "Este campo é obrigatório.",
    "profile_name_max" => "O comprimento máximo é de :max caracteres.",

    // TAG
    "tag_name_required" => "Este campo é obrigatório.",
    "tag_name_max" => "O comprimento máximo é de :max caracteres.",

    // AGENDAMENTO
    "schedule_name_required" => "Este campo é obrigatório.",
    "schedule_name_max" => "O comprimento máximo é de :max caracteres.",
    "schedule_tags_required" => "Este campo é obrigatório.",
    "schedule_tags_min" => "O comprimento mínimo é de :min caracteres.",
    "schedule_tags_invalid" => "Etiquetas selecionadas inválidas.",

    // DISPOSITIVO
    "device_name_required" => "Este campo é obrigatório.",
    "device_name_max" => "O comprimento máximo é de :max caracteres.",
    "device_ipaddr_required" => "Este campo é obrigatório.",
    "device_ipaddr_unique" => "Este endereço IP já foi registado.",
    "device_tags_required" => "Este campo é obrigatório.",
    "device_tags_min" => "O comprimento mínimo é de :min caracteres.",
    "device_tags_invalid" => "Etiquetas selecionadas inválidas.",
    "device_script_required" => "Este campo é obrigatório.",
    "device_diff_notfound" => "Um dos ficheiros não foi encontrado.",
    "device_diff_notallowed" => "O tipo de ficheiro não permite análise de diferenças.",

    // LICENCIAMENTO
    "licensing_100" => "O SafeBox360 foi licenciado.",
    "licensing_101" => "Dados inconsistentes [101]",
    "licensing_104" => "Licença inativa [104]",
    "licensing_105" => "Não é possível descompactar os dados [105]",
    "licensing_106" => "Dados incompletos [106]",
    "licensing_107" => "Licença não encontrada [107]",
    "licensing_108" => "Licença bloqueada [108]",
    "licensing_109" => "Licença associada a outra instalação [109]"

];



