const fs = require('fs');
const path = 'public/assets/css/styles.min.css';

let css = fs.readFileSync(path, 'utf8');

// Tambahkan 'appearance: button;' setelah setiap '-webkit-appearance: button;'
css = css.replace(/-webkit-appearance: button;/g, '-webkit-appearance: button;appearance: button;');

fs.writeFileSync(path, css, 'utf8');

console.log('Perbaikan otomatis styles.min.css selesai!'); 