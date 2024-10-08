# Bienvenido a mi Rincón de Código ✨
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=santiagomarmol_Portafolio&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=santiagomarmol_Portafolio)

¡Hola, soy Santiago! 👋 Soy un apasionado del desarrollo web De cartagena/Colombia. Mi viaje en el mundo de la programación está impulsado por la curiosidad y el deseo constante de aprender y crear.

## Sobre Mis Proyectos

Aquí, encontrarás una muestra de los proyectos en los que he estado trabajando:
### [Proyecto 1: Crud basico de Empleados]([Enlace al Proyecto 1](https://github.com/santiagomarmol/Portafolio/tree/main/CRUD%20Empleados))
Este proyecto presenta un Sistema de Gestión de Empleados con operaciones CRUD, desarrollado para crear, leer, actualizar y eliminar registros de una base de datos. La aplicación web utiliza PHP para el backend, MySQL como base de datos relacional y Bootstrap para el diseño responsivo y la interfaz de usuario.

¡Gracias por visitar mi rincón digital! Espero que encuentres inspiración en mis proyectos y que podamos aprender juntos en este viaje emocionante. ✨




# Guía de Instalación y Ejecución del Proyecto Smartlink Analytics

Este documento proporciona una guía paso a paso para instalar y ejecutar el proyecto de Smartlink Analytics.

## Requisitos

Antes de comenzar, asegúrate de tener instalados los siguientes programas en tu sistema:

- [Python](https://www.python.org/downloads/) (versión 3.x)

## Paso 1: Clonar el Repositorio

Clona el repositorio del proyecto desde GitHub (o cualquier otro control de versiones):

```bash
git clone https://github.com/SERINGTECSAS/SmartlinkAnalytics.git
```
## Paso 2: Crear un Entorno Virtual

Crea un entorno virtual para gestionar las dependencias del proyecto. Esto asegura que las librerías instaladas no interfieran con otros proyectos.
```bash
python -m venv venv
```
Activa el entorno virtual:
- En Windows:
```bash
venv\Scripts\activate
```
- En macOS y Linux:
 ```bash
source venv/bin/activate
``` 
## Paso 3: Instalar las Dependencias
Con el entorno virtual activado, instala las dependencias del proyecto utilizando pip:
 ```bash
pip install -r requirements.txt
```
Este comando instalará todas las librerías listadas en el archivo requirements.txt.

## Paso 5.1: Acceder a la Carpeta que Contiene la API Smartlink Analytics

Para ejecutar la API Smartlink Analytics, primero necesitas navegar al directorio que contiene el código de la API. Usa el siguiente comando para entrar en la carpeta:

```bash
cd Backend
```
Este comando te permitirá ingresar al directorio donde se encuentra la API.
## Paso 5.2: Ejecutar la API Smartlink Analytics
Para iniciar la API Smartlink Analytics, utiliza uvicorn, un servidor ASGI para aplicaciones Python. Ejecuta el siguiente comando en el directorio Backend:
 ```bash
uvicorn main:app
```
Deberías ver una salida similar a esta:
 ```bash
INFO:     Uvicorn running on http://127.0.0.1:8000 (Press CTRL+C to quit)
INFO:     Started reloader process [28720]
INFO:     Started server process [28722]
INFO:     Waiting for application startup.
INFO:     Application startup complete.
```
Este comando iniciará el servidor y permitirá que la API esté disponible en http://127.0.0.1:8000. Puedes presionar CTRL+C para detener el servidor cuando hayas terminado.

## Paso 6: Ejecutar el Frontend
Una vez que la API Smartlink Analytics esté en funcionamiento, puedes proceder a ejecutar el frontend. El frontend depende de la API para funcionar correctamente, por lo que es crucial que la API esté activa y escuchando en el puerto 8000 antes de iniciar el frontend.
Para ejecutar el frontend, que está desarrollado con Flask, sigue estos pasos:
1. Abre una nueva ventana de consola para evitar conflictos con el proceso de la API que ya está en ejecución.
2. Activa el entorno virtual para el frontend en esta nueva ventana de consola. Navega al directorio del frontend y activa el entorno virtual. Por ejemplo:
 - En Windows:
  ```bash
 cd Frontend
 venv\Scripts\activate
 ```
 - En macOS y Linux:
  ```bash
 cd Frontend
 source venv/bin/activate
 ```
3. Inicia la aplicación Flask en la misma ventana de consola donde activaste el entorno virtual:
 ```bash
 flask run
 ```
Deberías ver una salida similar a esta:
 ```bash
 * Running on http://127.0.0.1:5000/ (Press CTRL+C to quit)
 ```
Esto iniciará el servidor Flask y tu frontend estará disponible en http://127.0.0.1:5000.
Recuerda que la API debe estar activa antes de iniciar el frontend, ya que el frontend depende de la API para funcionar correctamente. 
Si todo está configurado correctamente, deberías poder interactuar con la aplicación a través del frontend mientras la API maneja las solicitudes en segundo plano.



# Smartlink Analytics Project Installation and Run Guide

This document provides a step-by-step guide to installing and running the Smartlink Analytics project.

## Requirements

Before you begin, make sure you have the following programs installed on your system:

- [Python](https://www.python.org/downloads/) (version 3.x).

## Step 1: Clone the Repository

Clone the project repository from GitHub (or any other version control):

````bash
git clone https://github.com/SERINGTECSAS/SmartlinkAnalytics.git
````
## Step 2: Create a Virtual Environment

Create a virtual environment to manage the project's dependencies. This ensures that installed libraries do not interfere with other projects.
````bash
python -m venv venv
````
Activates the virtual environment:
- On Windows:
````bash
venv\Scripts\activate
````
- On macOS and Linux:
 ````bash
source venv/bin/activate
```` 
## Step 3: Install Dependencies
With the virtual environment activated, install the project dependencies using pip:
 ````bash
pip install -r requirements.txt
````
This command will install all the libraries listed in the requirements.txt file.

## Step 5.1: Access the Folder Containing the Smartlink Analytics API

To run the Smartlink Analytics API, you first need to navigate to the directory containing the API code. Use the following command to enter the folder:

````bash
cd Backend
````
This command will allow you to enter the directory where the API is located.
## Step 5.2: Run the Smartlink Analytics API
To start the Smartlink Analytics API, use uvicorn, an ASGI server for Python applications. Run the following command in the Backend directory:
 ````bash
uvicorn main:app
````
You should see output similar to this:
 ````bash
INFO: Uvicorn running on http://127.0.0.1:8000 (Press CTRL+C to quit)
INFO: Started reloader process [28720] INFO: Started server process [28720]
INFO: Started server process [28722] INFO: INFO: Waiting for application start [28722]
INFO: Waiting for application startup.
INFO: Application startup complete.
````
This command will start the server and make the API available at http://127.0.0.1:8000. You can press CTRL+C to stop the server when you are done.

## Step 6: Run the Frontend
Once the Smartlink Analytics API is up and running, you can proceed to run the frontend. The frontend depends on the API to function properly, so it is crucial that the API is active and listening on port 8000 before starting the frontend.
To run the frontend, which is developed with Flask, follow these steps:
1. open a new console window to avoid conflicts with the API process that is already running.
2. Activate the virtual environment for the frontend in this new console window. Navigate to the frontend directory and activate the virtual environment. For example:
 - On Windows:
  ```bash
 cd Frontend
 venv\Scriptsactivate
 ````
 - On macOS and Linux:
 ````bash
 cd Frontend
 source venv/bin/activate
 ````
3. Start the Flask application in the same console window where you activated the virtual environment:
 ````bash
 flask run
 ````
You should see an output similar to this:
 ````bash
 * Running on http://127.0.0.1:5000/ (Press CTRL+C to quit)
 ````
This will start the Flask server and your frontend will be available at http://127.0.0.1:5000.
Remember that the API must be active before starting the frontend, as the frontend depends on the API to function properly. 
If everything is configured correctly, you should be able to interact with the application through the frontend while the API handles requests in the background.
