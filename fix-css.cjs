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

// 5. Hapus baris yang hanya berisi '{' atau '}' atau whitespace
css = css.replace(/^\s*\{\s*$/gm, '');
css = css.replace(/^\s*\}\s*$/gm, '');

// 6. Hapus baris kosong berlebih
css = css.replace(/^(?:[ \t]*\r?\n)+/gm, '\n');

// 7. Hapus penutup blok '}' yang tidak terpakai (lebih banyak '}' daripada '{')
let open = 0;
css = css.split('\n').filter(line => {
    if (line.includes('{')) open++;
    if (line.includes('}')) {
        if (open > 0) { open--; return true; }
        else return false;
    }
    return true;
}).join('\n');

fs.writeFileSync(path, css, 'utf8');

console.log('Perbaikan otomatis: penutup blok yang tidak terpakai dihapus!'); 