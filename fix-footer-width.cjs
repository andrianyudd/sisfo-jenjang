const fs = require('fs');

const targets = [
  'public/assets/css/styles.css',
  'public/assets/css/styles.min.css'
];

const footerCSS = `.footer{margin-top:auto;background:#f8f9fa;padding:24px 24px;text-align:center;max-width:800px;margin-left:auto;margin-right:auto;border-radius:12px;box-shadow:0 2px 8px rgba(0,0,0,0.03);width:100%;left:0;right:0;position:relative;box-sizing:border-box;display:flex;align-items:center;justify-content:center;}`;

targets.forEach(path => {
  let css = fs.readFileSync(path, 'utf8');
  // Hapus definisi .footer lama
  css = css.replace(/\.footer\s*\{[^}]*\}/g, '');
  // Tambahkan definisi baru di akhir file
  css = css.trim() + '\n' + footerCSS + '\n';
  fs.writeFileSync(path, css, 'utf8');
});

console.log('Footer otomatisasi: max-width dan center sudah diterapkan di styles.css & styles.min.css!'); 