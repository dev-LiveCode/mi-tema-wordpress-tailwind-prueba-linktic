
# 📚 custonTheme - Tailwind - Prueba LinkTIC 

### Versión: 1.0  
**Desarrollado por:** Victor  

Tema personalizado para WordPress desarrollado con Tailwind CSS. Incluye un Custom Post Type “Libros”, taxonomía personalizada “Géneros”, modo oscuro y plantillas customizadas.

---

## 📁 Estructura del Tema
```
custonTheme/
├── assets/
│   ├── css/
│   ├── img/
│   └── js/
├── dist/
│   └── css/
├── templates-parts/
│   ├── contact-modal/
│   ├── define-section/
│   ├── last-section/
│   ├── list-services-section/
│   ├── services-section/
│   └── value-proposition-section.php
├── archive-libros.php
├── footer.php
├── functions.php
├── header.php
├── index.php
├── package-lock.json
├── package.json
├── page.php
├── README.md
├── single-libros.php
├── style.css
├── tailwind.config.css
└── screenshot.png
```

---

## 🚀 Instalación del Tema
1. Clona o descarga el tema en `/wp-content/themes/customTheme`
2. Asegúrate de tener Tailwind compilado (si usaste Vite/PostCSS).
3. Activa el tema desde el panel de administración de WordPress.

---

## 🚀 Instalación del entorno de desarrollo
1. En una terminal en el directorio del tema correr el comando `npm install`
2. En una terminal en el directorio del tema correr el comando `npm install -D tailwindcss@3 postcss autoprefixer` (Opcional sí en el archivo `package.json` existen las dependencias)
3. En una terminal en el directorio del tema correr el comando `npx tailwindcss init` (Opcional sí existe el archivo `tailwind.config.js`)

## Requerimientos
1. Tener instalado un gestor de paquetes en su entorno (npm, pnpm)
2. Tener Nodejs instalado en su entorno


---

## 📦 Dependencias
- WordPress 6.x
- Tailwind CSS 3.x
- PHP 6.7.2

---

## 📝 Registro del Custom Post Type "Libros"
```php
register_post_type('libros', [
  'labels' => [...],
  'public' => true,
  'menu_icon' => 'dashicons-book',
  'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
]);
```

---

## 🗂️ Registro de Taxonomía "Géneros"
```php
register_taxonomy('generos', 'libros', [
  'hierarchical' => true,
  'labels' => [...],
  'show_ui' => true,
  'show_admin_column' => true,
]);
```

---

## ✍️ Metabox “Autor del Libro”
```php
add_meta_box('autor_libro', 'Autor del Libro', 'callback_func', 'libros');
```

> También incluye código para `save_post` y guardar el valor del metabox.

---

## 📄 Plantilla `single-libros.php`
Plantilla para mostrar individualmente cada libro con:
- Título
- Imagen destacada
- Contenido
- Autor (campo personalizado)
- Lista de géneros

---

## 🌙 Modo Oscuro
Implementado con clases `dark:` de Tailwind y un script JS que guarda la preferencia en `localStorage`.

```js
if (localStorage.getItem('theme') === 'dark') {
  document.documentElement.classList.add('dark');
} else {
  document.documentElement.classList.remove('dark');
}

function toggleTheme() {
  const html = document.documentElement;
  if (html.classList.contains('dark')) {
    html.classList.remove('dark');
    localStorage.setItem('theme', 'light');
  } else {
    html.classList.add('dark');
    localStorage.setItem('theme', 'dark');
  }
};
```

---

## 🎨 Personalización y Estilos
- Estilos en `/assets/css`
- Scripts en `/assets/js`
- Compilar con `npm run dev` o `npm run build`

---

## 📝 Notas Adicionales
- El tema no utiliza `home.php` o `index.php`.
- `page.php` controlan el contenido base.

---

## 📸 Capturas de Pantalla
- Panel de administración (CPT y taxonomía)
- Vista de un libro en frontend
- Modo oscuro

![Captura del tema](./screenshot.png)

![Captura del tema](./screenshot-darktheme.png)

