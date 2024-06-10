# OLW Project

## Descrição

OLW é um projeto desenvolvido em Laravel 11 com o uso de Docker através do Laravel Sail. Este projeto inclui uma API que sugere qual cerveja combina melhor com determinados tipos de comida. Além disso, o projeto utiliza Laravel Breeze para autenticação, MySQL como banco de dados, Redis para caching, Mailpit para envio de e-mails, MinIO para armazenamento de arquivos, Vue.js para a interface do usuário e Tailwind CSS para estilização.

## Tecnologias Utilizadas

- **Laravel 11**: Framework PHP para desenvolvimento web.
- **Docker & Laravel Sail**: Ambiente de desenvolvimento containerizado.
- **MySQL**: Banco de dados relacional.
- **Redis**: Cache em memória.
- **Mailpit**: Ferramenta para teste de envio de e-mails.
- **MinIO**: Armazenamento de objetos compatível com S3.
- **Vue.js**: Framework JavaScript para construção de interfaces de usuário.
- **Tailwind CSS**: Framework CSS utilitário para estilização.

## Requisitos

- Docker e Docker Compose instalados na máquina.

## Instalação

1. Clone o repositório do projeto:

   ```bash
   git clone https://github.com/seu-usuario/olw.git
   cd olw
   ```

2. Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente conforme necessário:

   ```bash
   cp .env.example .env
   ```

3. Suba os containers Docker com Laravel Sail:

   ```bash
   ./vendor/bin/sail up -d
   ```

4. Instale as dependências do projeto:

   ```bash
   ./vendor/bin/sail composer install
   ```

5. Execute as migrações do banco de dados:

   ```bash
   ./vendor/bin/sail artisan migrate
   ```

6. Instale as dependências do frontend:

   ```bash
   ./vendor/bin/sail npm install
   ```

7. Compile os assets do frontend:

   ```bash
   ./vendor/bin/sail npm run dev
   ```

## Uso

### Autenticação

O projeto utiliza Laravel Breeze para fornecer um sistema de autenticação simples e seguro. Após configurar o projeto, você pode acessar as rotas de registro e login fornecidas pelo Breeze.

### API de Combinação de Cerveja

A API principal do projeto sugere combinações de cervejas com diferentes tipos de comida. Você pode acessar a documentação da API para mais detalhes sobre os endpoints disponíveis e como utilizá-los.

### Desenvolvimento

Para iniciar o servidor de desenvolvimento, utilize o seguinte comando:

```bash
./vendor/bin/sail up
```

Isso iniciará todos os containers necessários, incluindo o servidor web, banco de dados, Redis, MinIO, e Mailpit.

## Estrutura do Projeto

- `app/`: Contém os controladores, modelos e outros arquivos principais do Laravel.
- `database/`: Arquivos de migração e seeds do banco de dados.
- `public/`: Diretório público do projeto.
- `resources/`: Views Blade, arquivos Vue.js e outros recursos front-end.
- `routes/`: Arquivos de definição de rotas.
- `storage/`: Arquivos de armazenamento local.
- `tests/`: Testes unitários e de integração.

## Contribuição

1. Faça um fork do projeto.
2. Crie uma branch para sua feature/bugfix (`git checkout -b feature/nova-feature`).
3. Faça commit das suas alterações (`git commit -am 'Adiciona nova feature'`).
4. Faça push para a branch (`git push origin feature/nova-feature`).
5. Crie um novo Pull Request.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

---

Para mais informações e documentação detalhada, consulte os repositórios e documentação oficial das tecnologias utilizadas.
