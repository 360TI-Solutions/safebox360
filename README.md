# SafeBox360 – Client (On-Premises)

O **SafeBox360 Client** é o componente instalado no ambiente do cliente, responsável por realizar **backups locais de configurações de equipamentos de rede** e se comunicar com o **SafeBox360 Server** para licenciamento e sincronização de dados.

---

## 📌 Visão Geral

O Client é distribuído como **imagem de virtualização “play”** para execução imediata em ambientes on-premises.  
Ele funciona inicialmente no **modo trial** até que seja ativado com uma licença válida, previamente cadastrada no Server.

---

## 🏗 Funcionalidades Principais

- **Backup Local**:
  - Execução de scripts de backup específicos para cada fabricante/modelo.
  - Armazenamento das configurações localmente.
- **Sincronização Automática**:
  - Recebe lista atualizada de **Fabricantes** e **Scripts de Backup** diretamente do Server.
- **Licenciamento Dinâmico**:
  - Ativação via **ID de instalação** fornecido pela 360 TI Solutions.
  - Comunicação periódica com o Server para validar status da licença.
- **Modo Trial**:
  - Todos os recursos habilitados.
  - Limitação: cadastro e backup de **até 2 elementos de rede**.

---

## 🔄 Comunicação com o Server

- **Ping Hello**:
  - Enviado automaticamente a cada **10 minutos**.
  - Recebe o status atualizado da licença (`pending`, `active`, `inactive`, `blocked`).
  - Atualizações de fabricantes e scripts também ocorrem nesse processo.
- **Atualização de Scripts e Fabricantes**:
  - Recebe via **Webservices REST** do Server.
  - Integra automaticamente ao banco de dados local.

---

## 📂 Estrutura do Repositório

/app -> Código-fonte principal (Laravel)
/routes -> Rotas de API
/database -> Migrations e seeds
/config -> Configurações do Client


---

## 🚀 Tecnologias Utilizadas

- **Backend**: PHP 8.x / Laravel
- **Banco de Dados**: PostgreSQL
- **Interface**: React.js / Bootstrap
- **Comunicação**: Webservices REST (HTTPS)
- **Virtualização**: Imagem “play” para execução on-premises
- **Segurança**: JWT / Certificado SSL

---

## 🛠 Requisitos de Execução

- Ambiente compatível com execução de imagens “play” (ex.: VMware, VirtualBox ou Proxmox).
- Rede com acesso HTTPS ao **SafeBox360 Server**.
- Recursos mínimos recomendados:
  - CPU: 2 vCPUs
  - RAM: 4 GB
  - Armazenamento: 20 GB

---

## 📜 Licença

Este componente é de uso restrito da **360 TI Solutions** e não está disponível para uso ou distribuição sem autorização prévia.

---
