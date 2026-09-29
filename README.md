# 🛒 Product Registration System (`product-register.php`) 📦

[🇺🇸 English Version](#-english-version) | [🇧🇷 Versão em Português](#-versão-em-português)

---

## 🇺🇸 English Version

### 📌 Description
A PHP project that implements a product registration form with validation, database persistence, and user feedback messages.

### 🎯 Key Features
- **🖥️ HTML Form:** Collects **Product Name** and **Price**.  
- **⚙️ Validation Rules:**  
  - Fields cannot be empty.  
  - Price must be numeric.  
  - Price must be positive (> 0).  
- **💾 Database Integration:**  
  - Uses **MySQL** connection (`mysqli`).  
  - Inserts data into the `produtos` table with **Prepared Statements** (protection against SQL Injection).  
- **✅ Success Feedback:** Displays a success message when the product is registered.  
- **🚫 Error Handling:** Shows clear error messages for invalid input or database issues.  
- **⏱️ Auto-hide Messages:** Feedback messages disappear after 5 seconds using JavaScript.  

### 📚 Concepts Applied
- **Form Handling (POST):** Data captured via `$_SERVER['REQUEST_METHOD']`.  
- **Validation & Error Handling:** Conditional logic with `if/else`.  
- **Database Security:** Prepared statements with `bind_param`.  
- **Frontend Feedback:** Inline messages styled with colors and auto-hide script.  

---

## 🇧🇷 Versão em Português

### 📌 Descrição
Projeto em PHP que implementa um formulário de cadastro de produtos com validação, persistência em banco de dados e mensagens de retorno ao usuário.

### 🎯 Funcionalidades
- **🖥️ Formulário HTML:** Coleta **Nome do Produto** e **Preço**.  
- **⚙️ Regras de Validação:**  
  - Campos não podem estar vazios.  
  - O preço deve ser numérico.  
  - O preço deve ser positivo (> 0).  
- **💾 Integração com Banco de Dados:**  
  - Conexão com **MySQL** via `mysqli`.  
  - Inserção na tabela `produtos` usando **Prepared Statements** (segurança contra SQL Injection).  
- **✅ Retorno de Sucesso:** Exibe mensagem de confirmação quando o produto é cadastrado.  
- **🚫 Tratamento de Erros:** Mensagens claras para entradas inválidas ou falhas no BD.  
- **⏱️ Ocultação Automática:** Mensagens desaparecem após 5 segundos com JavaScript.  

### 📚 Conceitos Aplicados
- **Manipulação de Formulários (POST):** Captura de dados com `$_SERVER['REQUEST_METHOD']`.  
- **Validação & Tratamento de Erros:** Estruturas condicionais `if/else`.  
- **Segurança no Banco:** Uso de prepared statements com `bind_param`.  
- **Feedback no Frontend:** Mensagens inline estilizadas e ocultação automática.  

---
