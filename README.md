# API de Cálculo de IMC Corporal

Esta es una API simple creada en PHP y MySQL que permite calcular el Índice de Masa Corporal (IMC) de los usuarios. Esta API proporciona métodos para realizar las siguientes operaciones:

- **POST**: Insertar un nuevo registro de usuario y calcular automáticamente su IMC.
- **PUT**: Actualizar la información de un usuario existente y recalcular su IMC.
- **DELETE**: Eliminar un usuario y su registro de IMC.

## Requisitos

Antes de utilizar esta API, asegúrate de tener los siguientes requisitos instalados:

- PHP (>= 7.0)
- MySQL Server (>= 5.5)
- [Composer](https://getcomposer.org/) (Para la gestión de dependencias de PHP)

## Instalación

1. Clona este repositorio en tu servidor web local o en tu entorno de alojamiento.

2. Crea una base de datos MySQL y configura las credenciales en el archivo `config.php`.

3. Ejecuta el siguiente comando para instalar las dependencias de PHP utilizando Composer:

   ```bash
   composer install
