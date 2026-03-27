# 💀 CustomDeaths

Un plugin ligero y esencial para **PocketMine-MP (API 2.0.0)** diseñado para eliminar los mensajes de muerte predeterminados del juego y reemplazarlos por mensajes **100% personalizables**. Permite a los administradores definir textos únicos con colores y formatos para cada tipo de muerte, mejorando la inmersión y el estilo del servidor.

Ideal para servidores **Survival, PvP, Factions o RolePlay** que buscan una identidad visual única en el chat global.

---

### ⚡ Funcionalidades Clave

*   **📝 Mensajes Personalizados por Causa:**
    Configura textos específicos para diferentes situaciones de muerte:
    *   **Asesinato por Jugador/Mob:** Incluye el nombre de la víctima y del asesino (`{player}` y `{killer}`).
    *   **Caída al vacío:** Mensaje especial para daños por caída.
    *   **Ahogamiento:** Texto único para muertes bajo el agua.
    *   **Suicidio/Comando:** Mensaje distintivo cuando un jugador se elimina a sí mismo.
    *   **Muerte Genérica:** Un mensaje por defecto para cualquier otra causa no especificada.
*   **🎨 Soporte de Colores y Formato:**
    Utiliza códigos de formato de PocketMine (ej. `§c`, `§l`, `§8`) para crear mensajes llamativos, con negritas, colores personalizados y separadores visuales.
*   **⚙️ Configuración Sencilla:**
    Todo se gestiona desde un único archivo `config.yml`. No requiere comandos complejos; solo edita el texto, guarda y recarga.
*   **🚀 Ligero y Eficiente:**
    Escrito optimizado para no afectar el rendimiento del servidor, escuchando únicamente el evento de muerte del jugador.

---

### ⚙️ Configuración Rápida

El plugin utiliza un solo archivo para gestionar toda la lógica de los mensajes:

*   **`config.yml`:**
    Aquí encontrarás la sección `death-messages` donde puedes editar:
    *   `entity-attack`: Cuando un jugador mata a otro (soporta variable `{killer}`).
    *   `fall`: Muerte por caída.
    *   `drowning`: Muerte por ahogamiento.
    *   `kill-command`: Muerte por suicidio o comando `/kill`.
    *   `default`: Mensaje para cualquier otra causa.

> **Ejemplo de configuración:**
> ```yaml
> entity-attack: "§l§cCustomDeath §8| §r§c{player} §ffue asesinado por§c {killer}"
> ```

---

### 📜 Variables Disponibles

Al editar los mensajes, puedes usar las siguientes variables dinámicas que el plugin reemplazará automáticamente:

*   `{player}`: El nombre del jugador que ha muerto.
*   `{killer}`: El nombre del jugador o entidad que causó la muerte (solo disponible en `entity-attack`).

---

### 📦 Requisitos e Instalación

*   **Servidor:** PocketMine-MP
*   **API Compatible:** `2.0.0`
*   **Dependencias:** Ninguna. Funciona de forma independiente.

> **Instalación:**
> 1. Descarga el archivo `.phar`.
> 2. Colócalo en la carpeta `plugins/`.
> 3. Reinicia el servidor para generar el `config.yml`.
> 4. Edita `config.yml` a tu gusto y reinicia nuevamente (o usa `/reload` si tu servidor lo permite, aunque se recomienda reinicio completo).

---

> **👨‍💻 Autor:** iTzDarkoPvP / zCqtxz  
> **📅 Versión:** 1.0.0  
> **✨ Nota:** ¡Perfecto para darle un toque profesional a tu chat de muertes!
