# 🚗 LOJA DE CARROS - GUIA RÁPIDO E BÁSICO

## 📝 Sobre Este Site

**Este é um site de loja de carros feito em Laravel.** Ele funciona como um catálogo onde você pode ver os carros disponíveis. Ele também tem um painel de administrador para você conseguir adicionar, editar e remover os carros que aparecem na lista.

---

## 🛠️ 1. Preparação (SETUP)

Você precisa rodar estes comandos no seu terminal, um de cada vez.

1.  **Baixar as peças do projeto:**
    ```bash
    composer install
    ```

2.  **Preparar o arquivo de configurações:**
    * Crie a chave de segurança:
        ```bash
        php artisan key:generate
        ```
    * **PARE!** Abra o arquivo **.env** e ajuste a parte do banco de dados (seu **usuário**, **senha** e confira o **nome** do banco).
    * **Ligue o MySQL** no seu XAMPP/WAMP!

3.  **Criar as tabelas e os primeiros carros:**
    ```bash
    php artisan migrate --seed
    ```

---

## ▶️ 2. Para Ligar o Site

Rode este comando para colocar o site no ar:

```bash
php artisan serve
