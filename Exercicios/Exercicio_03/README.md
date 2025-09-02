## Objetivo:
Desenvolver um sistema simples de cadastro e consulta de produtos utilizando PHP e a classe PDO para interação com o banco de dados.

### Clonagem o Repositório
Abra seu terminal (git bash) e clone o repositório principal de exercícios.
```bash
git clone https://github.com/gabriellatcc/Exercises-in-php.git
```
Navegue até a pasta do Exercício
```bash
cd Exercises-in-php/Exercicios/Exercicio_03/
```

### Criação do banco para execução do projeto
````sql
CREATE DATABASE IF NOT EXISTS empresa;

USE empresa;

CREATE TABLE produtos (
    codigo VARCHAR(50) PRIMARY KEY,
    produto VARCHAR(255) NOT NULL,
    data_validade VARCHAR(10) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL
);
````

### Configuração da Conexão
* Abra o arquivo `config/Database.php`.
* Altere as credenciais (`$username` e `$password`) de acordo com a configuração do seu banco de dados local.

### Telas:
#### Menu Principal
<img width="1919" height="1079" alt="Screenshot 2025-09-01 213616" src="https://github.com/user-attachments/assets/1dbf9462-f040-4f17-8eb9-d90f125185cf" />

#### Cadastro de produtos
<img width="1918" height="1079" alt="Screenshot 2025-09-01 213620" src="https://github.com/user-attachments/assets/bcd775fb-160f-4b95-b268-dde63750228e" />

#### Consulta de produtos cadastrados

<img width="1911" height="1079" alt="Screenshot 2025-09-01 213611" src="https://github.com/user-attachments/assets/8d2d81fa-47b5-496d-b381-2255a48a87ef" />
 
