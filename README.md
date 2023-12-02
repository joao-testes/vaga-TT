# Teste para vaga

Uma simples página que mostra as informações retornadas de uma api externa.

### 📋 Pré-requisitos

```
php >=8.2
docker
```

### 🔧 Instalação

Clonar o projeto:

```
git clone https://github.com/joao-testes/vaga-TT
```

Entre na pasta do projeto e instale as dependencias:

```
cd vaga-TT
composer install
```

Crie o arquivo .env:

```
cp .env.example .env
```

Inicio o docker e instale os pacotes do npm:

```
vendor/bin/sail up -d
vendor/bin/sail artisan key:generate
```

Por fim vá para a [aplicação](http://localhost:7080/) 

## 🛠️ Construído com

* [Laravel](https://laravel.com/) - O framework web usado
* [Tailwind](https://tailwindcss.com/) - Biblioteca para css
