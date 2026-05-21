# 🧱 Dynamic Timestamp Block

> A custom Gutenberg block demonstrating React to PHP data flow and Dynamic Block architecture.

[![Watch My YouTube Video on this plugin](https://img.shields.io/badge/YouTube-Watch_How_I_Built_This-FF0000?style=for-the-badge&logo=youtube&logoColor=white)](https://www.youtube.com/watch?v=EiOeRLA40KU)

## Architectural Decisions

When engineering this block, I made the following architectural decisions to ensure performance, security, and data accuracy:

* **Dynamic Rendering (PHP over JS):** Instead of saving static HTML to the database via React's `save()` function, I utilized a dynamic `render.php` callback. This ensures functions like `date('Y')` run server-side in real-time, preventing stale dates from being hardcoded into the `post_content` string.
* **Managing the Context Boundary:** I bridged the React editor state with the PHP backend by registering a `displayMode` attribute in `block.json`. The React UI updates this state, and the PHP server seamlessly intercepts and renders it on the frontend.
* **Clean Editor UI:** To keep the main typing area clean, I utilized `@wordpress/components` to construct a `SelectControl` dropdown, teleporting the settings into the right-hand sidebar using the `InspectorControls` portal.
* **Security & WP.org Standards:** I explicitly removed global variables in the render template to prevent namespace collisions and pass strict WordPress.org Plugin Check (PCP) standards. All database output is sanitized using `esc_html()`.

## 🛠️ Tech Stack & APIs Used
* **React / ES6+** (Editor UI, State Management)
* **PHP 7.4+** (Server-side rendering, WordPress Core API)
* **WordPress @wordpress/scripts** (Webpack / Babel compilation)

## 🚀 Installation & Testing
1. Download the `.zip` file from the releases or clone this repository.
2. Run `npm install` and `npm run build` to compile the assets.
3. Upload to the `/wp-content/plugins/` directory of your local WordPress environment.
4. Activate the plugin through the WordPress admin dashboard.

---
### 👨‍💻 About the Developer
*This repository is part of my 2026 Advanced WordPress Engineering Portfolio.* 

**Moshtafizur Rahman**  
WordPress & WooCommerce Developer | Remote European Experience  
🌐 [View my full portfolio](https://gutenberg.yourname.dev) | 💼 [Upwork Profile](https://upwork.com/fl/moshtafizur) | 🔗 [LinkedIn](https://linkedin.com/in/moshtafizur)