# uhs


 En esta seccion se trabajara con el historial de usuario
 # UHs (User Histories) - ARTMEX

## UH01: Registro de Usuarios
**Descripción:**  
Permitir a los usuarios registrarse en la aplicación proporcionando un correo electrónico, contraseña y otros datos básicos.

**Tareas:**
- Crear el formulario de registro con campos de nombre, correo electrónico, contraseña y confirmación de contraseña.
- Implementar validación en el lado del cliente para asegurarse de que los campos estén completos y que las contraseñas coincidan.
- Validar en el servidor que el correo electrónico no esté en uso.
- Enviar un correo electrónico de confirmación con un enlace de activación de cuenta.
- Almacenar los datos del usuario en la base de datos MySQL utilizando PHP.

---

## UH02: Inicio de Sesión
**Descripción:**  
Implementar un sistema de autenticación que permita a los usuarios iniciar sesión en la aplicación utilizando su correo electrónico y contraseña.

**Tareas:**
- Crear el formulario de inicio de sesión con campos para correo electrónico y contraseña.
- Verificar las credenciales del usuario contra la base de datos MySQL.
- Implementar gestión de sesiones para mantener la sesión del usuario activa.
- Añadir funcionalidad para recuperar contraseñas, enviando un enlace de restablecimiento por correo electrónico.
- Proteger las rutas y páginas sensibles mediante verificación de sesión.

---

## UH03: Exploración de Artesanos en el Mapa
**Descripción:**  
Permitir a los usuarios visualizar un mapa interactivo que muestra la ubicación de talleres de artesanos en México.

**Tareas:**
- Integrar una API de mapas (como Google Maps) utilizando JavaScript.
- Mostrar marcadores en el mapa correspondientes a la ubicación de los talleres de artesanos.
- Implementar filtros para que los usuarios puedan buscar talleres por tipo de artesanía o región.
- Mostrar información básica del taller al hacer clic en un marcador, con un enlace a más detalles.

---

## UH04: Búsqueda de Artesanos y Productos
**Descripción:**  
Facilitar la búsqueda de artesanos y productos específicos a través de un sistema de búsqueda eficiente.

**Tareas:**
- Crear un formulario de búsqueda con opciones para buscar por nombre del artesano, tipo de artesanía, o ubicación.
- Implementar la funcionalidad de búsqueda en el servidor, optimizando las consultas SQL en MySQL.
- Mostrar los resultados de búsqueda en una lista con información relevante y enlaces a más detalles.
- Optimizar la interfaz para que los resultados se muestren rápidamente y sean fácilmente navegables.

---

## UH05: Gestión de Perfiles de Artesanos
**Descripción:**  
Permitir a los artesanos crear y gestionar sus perfiles, así como agregar, editar y eliminar productos.

**Tareas:**
- Crear un formulario de gestión de perfil donde los artesanos puedan añadir información como nombre del taller, ubicación, descripción, y horarios.
- Implementar funcionalidad para subir y gestionar imágenes de productos.
- Crear un panel de administración donde los artesanos puedan añadir, editar, y eliminar productos.
- Almacenar toda la información en la base de datos MySQL y asegurar la integridad de los datos.

---

## UH06: Sistema de Valoraciones y Comentarios
**Descripción:**  
Permitir a los usuarios dejar valoraciones y comentarios en los perfiles de los artesanos.

**Tareas:**
- Crear una sección en el perfil del artesano donde los usuarios puedan dejar una calificación (1-5 estrellas) y un comentario.
- Implementar funcionalidad en el servidor para almacenar y moderar comentarios.
- Mostrar las valoraciones y comentarios en el perfil del artesano en tiempo real.
- Añadir controles para que los administradores puedan eliminar comentarios inapropiados.

---

## UH07: Notificaciones de Nuevos Productos
**Descripción:**  
Permitir que los usuarios reciban notificaciones cuando los artesanos que siguen añadan nuevos productos.

**Tareas:**
- Implementar una funcionalidad de "seguir artesano" que permita a los usuarios suscribirse a actualizaciones.
- Crear un sistema de notificaciones que se dispare cuando un artesano añade un nuevo producto.
- Enviar notificaciones a través de la aplicación y por correo electrónico, según las preferencias del usuario.
- Permitir que los usuarios configuren y gestionen sus preferencias de notificación.

---

## UH08: Cambio de Idioma en la Aplicación
**Descripción:**  
Ofrecer la opción de cambiar el idioma de la aplicación entre español e inglés.

**Tareas:**
- Implementar una funcionalidad que permita cambiar el idioma desde cualquier parte de la aplicación.
- Configurar la aplicación para soportar textos dinámicos en múltiples idiomas utilizando PHP.
- Asegurar que todo el contenido se actualice instantáneamente cuando el usuario cambie el idioma.
- Almacenar la preferencia de idioma del usuario para aplicarla automáticamente en futuras sesiones.
## Estructura de Archivos

>ARTMEX<br>
>| - documentacion <br>
>| - FRONTEND<br>



## Equipo de Desarrollo

|Integrante|Contacto|Rol|Observaciones|
|------------|--------|---|---|
|GIOVANY RAUL PAZOS CRUZ|[@giova012](https://github.com/giova0412)|Líder del  Documentacion  y frontend|✅ Revisado y aprobado.|
|Edwin campos hernandez |[@edwincamp](https://github.com/Edwincamp)|Desarrollador de backend y BD|😔 No ha revisado|
