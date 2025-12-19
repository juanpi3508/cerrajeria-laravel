**Proyecto:** Sistema de Gestión – Cerrajería

**Estudiante:** Juan Morales
**Fecha:** 19/12/2025


## Mis Decisiones de Diseño

### 1. Tabla

**Nombre de la tabla:** trabajos

### Campos

| Campo            | Tipo        | ¿Obligatorio? |
|------------------|------------|---------------|
| id               | bigint     | Sí            |
| cliente_nombre   | varchar    | Sí            |
| telefono         | varchar    | Sí            |
| direccion        | varchar    | Sí            |
| tipo_servicio    | varchar    | Sí            |
| estado           | varchar    | Sí            |
| created_at       | timestamp  | Sí            |
| updated_at       | timestamp  | Sí            |

---

## Justificación de Diseño

El sistema fue diseñado para registrar los servicios realizados por una cerrajería, permitiendo almacenar información del cliente, tipo de servicio solicitado y el estado del trabajo.

La fecha del registro se guarda automáticamente mediante el sistema, permitiendo su corrección en caso de error.

Los trabajos no se eliminan físicamente de la base de datos. En su lugar, se implementó un borrado lógico mediante el estado **inhabilitado**, con el objetivo de conservar el historial para fines de control, auditoría o reclamos.

---

## Estados del Trabajo

Los trabajos pueden tener los siguientes estados:

- pendiente  
- en_camino  
- completado  
- cobrado  
- inhabilitado  

---

## Tipo de Servicio

El tipo de servicio se selecciona desde una lista predefinida para evitar errores de ingreso manual.  
Algunos ejemplos:

- apertura_puerta  
- cambio_cerradura  
- duplicado_llaves  
- reparacion_cerradura  
- emergencia_24h  

---

## Tecnologías Utilizadas

- Laravel  
- PHP  
- PostgreSQL  
- Bootstrap  
- Git y GitHub  

---

<img width="1920" height="635" alt="imagen" src="https://github.com/user-attachments/assets/767ab882-3141-4c58-bf1f-d043d65c38cf" />

<img width="1914" height="776" alt="imagen" src="https://github.com/user-attachments/assets/8b90747c-bc2d-480e-a9ec-aa53880c67b4" />

<img width="1920" height="877" alt="imagen" src="https://github.com/user-attachments/assets/d34e1138-f560-40f9-8a5b-c632f491a6a8" />

<img width="1920" height="926" alt="imagen" src="https://github.com/user-attachments/assets/766707f7-034c-41b4-8849-8b0efa3c75b3" />


