/* ================================
   Stylmee Theme — Beige × Pink
   Paste at TOP of your style.css
   ================================ */

:root{
  /* Base palette */
  --bg:            #F9F3EF; 
  --card:          #FFFFFF;
  --text:          #1C1A19;
  --muted:         #6B6B6B;

  /* Accents */
  --primary:       #F3A6B5; 
  --primary-600:   #E07F94; 
  --rose:          #FFE8ED; 
  --danger:        #E5484D;

  /* Lines/Surfaces */
  --border:        #EADFD8;

  /* Subtle shadows */
  --shadow-sm:     0 2px 10px rgba(16, 24, 40, .06);
  --shadow-md:     0 6px 22px rgba(16, 24, 40, .08);
}
/* ----------------------------------------
   Elegant Brand Styling for "StyleMe"
   ---------------------------------------- */


@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@400;500&display=swap');

/* 2. شعار StyleMe */
.brand {
  font-family: 'Playfair Display', serif;
  font-size: 32px;
  font-weight: 700;
  color: #4B3B2B; 
  letter-spacing: 0.5px;
  text-decoration: none;
  position: relative;
  transition: all 0.3s ease;
  display: inline-block;
}

/* الجزء "Me" */
.brand .dot {
  color: #E9A5B0; 
  transition: color 0.3s ease;
}

/*hover*/
.brand:hover {
  color: #E2B45E;
  transform: translateY(-1px);
}

.brand:hover .dot {
  color: #E2B45E; 
}


.site-header {
  background: #FAF6F2; 
  border-bottom: 1px solid #EADBC8;
  box-shadow: 0 2px 6px rgba(0,0,0,0.03);
}

.nav {
  display: flex;
  align-items: center;
  gap: 16px;
  padding: 12px 0;
}


.nav-links a {
  font-family: 'Poppins', sans-serif;
  color: #4B3B2B;
  font-weight: 500;
  text-decoration: none;
  padding: 6px 10px;
  border-radius: 10px;
  transition: background 0.25s, color 0.25s;
}




body {
  background-color: #FFFDFB; 
  color: #4B3B2B;
  font-family: 'Poppins', sans-serif;
}


/* Global */
html,body{ height:100% }
body{
  margin:0;
  font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
  background: var(--bg);
  color: var(--text);
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
img{ max-width:100%; height:auto; display:block }
a{ color:inherit; text-decoration:none }

.container{ width:min(1200px, 92%); margin-inline:auto }

/* Header / Nav */
.site-header{
  position:sticky; top:0; z-index:50;
  background: rgba(255,255,255,.88);
  backdrop-filter: saturate(180%) blur(10px);
  border-bottom: 1px solid var(--border);
  box-shadow: var(--shadow-sm);
}
.nav{ display:flex; align-items:center; gap:16px; padding:12px 0 }
.brand{ font-weight:800; letter-spacing:.4px }
.brand .dot{ color: var(--primary) }
.nav-links{ display:flex; gap:12px; align-items:center; margin-inline-start:auto }
.nav-links .active{ font-weight:700 }
.badge{
  background: var(--primary);
  color:#000;
  padding:2px 8px; border-radius:999px;
  font-size:12px; font-weight:700
}
.search{
  display:flex; gap:8px; align-items:center;
  border:1px solid var(--border);
  border-radius:20px; padding:6px 10px; background:#fff;
  box-shadow: var(--shadow-sm);
}
.search input{ border:none; outline:none; min-width:180px; background:transparent }

/* Buttons */
.btn{
  background: var(--primary); color:#111;
  border:none; padding:10px 14px; border-radius:12px;
  cursor:pointer; font-weight:700;
  transition: transform .08s ease, background .15s ease, box-shadow .15s ease;
  box-shadow: var(--shadow-sm);
}
.btn:hover{ background: var(--primary-600) }
.btn:active{ transform: translateY(1px) }
.btn.secondary{ background:#111; color:#fff }
.btn.danger{ background: var(--danger); color:#fff }
.btn.ghost{
  background: transparent; color: var(--text);
  border:1px solid var(--border)
}

/* Hero */
.hero{
  display:grid; grid-template-columns:1.2fr .8fr;
  gap:24px; align-items:center; padding:32px 0
}
.pill{
  display:inline-flex; align-items:center; gap:8px;
  padding:6px 12px; border-radius:999px;
  background: var(--rose); color:#7c2d12; font-weight:700
}
.hero h1{ font-size:40px; margin:12px 0 8px }
.hero p{ color: var(--muted); margin:0 0 16px }
.cta{ display:flex; gap:10px; align-items:center }
.hero-card{
  background: linear-gradient(135deg,#fff, var(--rose));
  padding:16px; border-radius:16px; border:1px solid var(--border);
  box-shadow: var(--shadow-md);
}
.hero-img{
  aspect-ratio:3/4; border-radius:16px;
  background: linear-gradient(160deg,#f3f4f6, #fde1ea);
  border:1px solid var(--border)
}

/* Features */
.features{ display:grid; grid-template-columns:repeat(3,1fr); gap:12px; margin:10px 0 24px }
.feature{
  background:#fff; border:1px solid var(--border); border-radius:12px;
  padding:14px; text-align:center; box-shadow: var(--shadow-sm);
}

/* Sections */
.section-head{ display:flex; align-items:baseline; justify-content:space-between; margin:18px 0 16px }
.section-head h2{ margin:0 }
.muted{ color: var(--muted) }

/* Filters */
.filters{ display:flex; flex-wrap:wrap; gap:8px; align-items:center; margin:10px 0 18px }
.chip{
  border:1px solid var(--border); padding:8px 12px; border-radius:999px;
  background:#fff; cursor:pointer; transition: background .15s ease, color .15s ease, box-shadow .15s ease;
  box-shadow: var(--shadow-sm);
}
.chip:hover{ box-shadow: var(--shadow-md) }
.chip.active{ background:#111; color:#fff; box-shadow: none }

/* Product grid */
.grid{ display:grid; grid-template-columns:repeat(4, 1fr); gap:14px }
.card{
  background: var(--card); border:1px solid var(--border); border-radius:16px;
  overflow:hidden; display:flex; flex-direction:column; box-shadow: var(--shadow-sm);
  transition: transform .12s ease, box-shadow .12s ease;
}
.card:hover{ transform: translateY(-2px); box-shadow: var(--shadow-md) }
.card .thumb{ aspect-ratio:1/1; background:#f7f2ef; display:flex; align-items:center; justify-content:center }
.card .thumb span{
  background:#fff; padding:6px 10px; border-radius:999px; border:1px solid var(--border); font-size:12px
}
.card .body{ padding:12px }
.title{ font-weight:800; margin:0 0 6px }
.desc{ color: var(--muted); margin:0 0 10px }
.price{ font-weight:800 }
.row{ display:flex; align-items:center; justify-content:space-between; gap:8px }

/* Cart / Checkout */
.layout-2col{ display:grid; grid-template-columns:1.2fr .8fr; gap:16px }
.cart-list{ display:grid; gap:10px }
.cart-item{
  display:grid; grid-template-columns:72px 1fr auto; gap:10px;
  background:#fff; border:1px solid var(--border); border-radius:12px; padding:10px; box-shadow: var(--shadow-sm)
}
.qty{ display:inline-flex; align-items:center; gap:6px; border:1px solid var(--border); border-radius:10px; padding:4px }
.qty button{ border:none; background:#f3f4f6; width:28px; height:28px; border-radius:8px; cursor:pointer }
.summary{
  background:#fff; border:1px solid var(--border); border-radius:12px; padding:12px;
  position:sticky; top:84px; box-shadow: var(--shadow-sm)
}

/* Forms */
form .field{ display:grid; gap:6px; margin:10px 0 }
input, select, textarea{
  width:100%; padding:10px 12px; border:1px solid var(--border);
  border-radius:12px; background:#fff
}
label{ font-weight:700 }
.mt{ margin-top:12px }
.mt0{ margin-top:0 }
.gap{ gap:10px }
.row.gap{ display:flex; align-items:center }
.row.gap.sm{ gap:8px }
.narrow{ max-width:560px }

/* Footer & toast */
.site-footer{ margin-top:40px; padding:18px 0; border-top:1px solid var(--border); color: var(--muted) }
.toast{
  position:fixed; left:16px; bottom:16px; background:#111827; color:#fff;
  padding:10px 14px; border-radius:10px; opacity:0; transform:translateY(8px); transition:.25s
}
.toast.show{ opacity:1; transform:translateY(0) }

/* Responsive */
@media (max-width: 1024px){
  .grid{ grid-template-columns:repeat(3,1fr) }
  .hero{ grid-template-columns:1fr }
  .layout-2col{ grid-template-columns:1fr }
}
@media (max-width: 640px){
  .grid{ grid-template-columns:repeat(2,1fr) }
  .search input{ min-width:120px }
  .nav-links{ display:none }
  .features{ grid-template-columns:1fr }
}
.hero-img {
  aspect-ratio: 16/9;
  border-radius: 16px;
  background: url('../imgs/HERO.jpg') center/cover no-repeat;
  border: 1px solid var(--border);
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}
