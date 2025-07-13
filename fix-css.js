const fs = require('fs');
const path = 'public/assets/css/styles.css';

let css = fs.readFileSync(path, 'utf8');

// 1. Tambahkan property standar 'appearance' setelah '-webkit-appearance' dan '-moz-appearance'
css = css.replace(/-webkit-appearance:[^;]*;/g, match => `${match}\nappearance: none;`);
css = css.replace(/-moz-appearance:[^;]*;/g, match => `${match}\nappearance: none;`);

// 2. Ganti 'color-adjust' dengan 'print-color-adjust'
css = css.replace(/color-adjust:/g, 'print-color-adjust:');

// 3. Hapus ruleset kosong (misal: .class { })
css = css.replace(/[^\S\r\n]*[^{\r\n]+\{\s*\}/g, '');

// 4. Hapus baris '.table-danger {' dan '@charset "UTF-8";'
css = css.replace(/^\.table-danger \{\s*$/m, '');
css = css.replace(/^@charset "UTF-8";\s*$/m, '');

fs.writeFileSync(path, css, 'utf8');

console.log('Perbaikan otomatis style.css selesai!'); 