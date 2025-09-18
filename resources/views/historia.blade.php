<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        :root { --bg:#0f172a; --card:#111827; --text:#e5e7eb; --muted:#9ca3af; --primary:#22d3ee; --accent:#a78bfa; }
        *{ box-sizing:border-box }
        html,body{ height:100% }
        body{
            margin:0; font-family:'Inter',system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,'Helvetica Neue',Arial,'Noto Sans',sans-serif;
            color:var(--text); background: radial-gradient(1200px 600px at 10% 0%, rgba(167,139,250,.12), transparent),
                     radial-gradient(1000px 500px at 90% 10%, rgba(34,211,238,.12), transparent), var(--bg);
        }
        .container{ max-width:980px; margin:0 auto; padding:32px 20px 56px }
        .card{ background: linear-gradient(180deg, rgba(255,255,255,.04), rgba(255,255,255,.02)); border:1px solid rgba(255,255,255,.08); border-radius:16px; backdrop-filter: blur(6px); box-shadow: 0 10px 30px rgba(0,0,0,.35); overflow:hidden }
        header{ padding:28px 28px 16px; display:flex; align-items:center; justify-content:space-between; gap:16px }
        .title{ font-size:28px; font-weight:800; letter-spacing:.3px }
        .subtitle{ color:var(--muted); font-weight:500; font-size:14px }
        nav{ display:flex; flex-wrap:wrap; gap:8px }
        nav a{ text-decoration:none; color:var(--text); font-weight:600; padding:8px 12px; border-radius:10px; border:1px solid rgba(255,255,255,.08) }
        nav a:hover{ background: rgba(167,139,250,.12); border-color: rgba(167,139,250,.35) }
        .timeline{ padding:0 28px 28px; display:grid; gap:16px }
        .item{ padding:16px 18px; border-radius:12px; background: rgba(255,255,255,.02); border:1px solid rgba(255,255,255,.06) }
        .item h3{ margin:0 0 4px; font-size:16px; color:#c7d2fe }
        .tag{ font-size:12px; color:#67e8f9; border:1px solid rgba(34,211,238,.35); background: rgba(34,211,238,.12); padding:4px 8px; border-radius:999px }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <header>
                <div>
                    <div class="title">Historia</div>
                    <div class="subtitle">Commits #3 – #6</div>
                </div>
                <nav>
                    <a href="/biografia">Biografía</a>
                    <a href="/historia">Historia</a>
                </nav>
            </header>

            <div class="timeline">
                <div class="item" id="ninez">
                    <span class="tag">Commit #3</span>
                    <h3>Niñez</h3>
                    <p>Desde niño me gustaba jugar videojuegos, la primera consola que alguna vez toque fue una PSP (la original), ya que mi hermana la tenía. De niño me atrasé en la escuela, no perdí ningún año, pero entré a primero de primaria y no sabía leer.</p>
                </div>

                <div class="item" id="adolescencia">
                    <span class="tag">Commit #4</span>
                    <h3>Adolescencia</h3>
                    <p>En mi adolescencia jugué muchísimo videojuegos, pase de consola a computadora y me envicié, especialmente al Counter Strike Global Offensive, me gustaba mucho el juego y me encantaba jugar con mis amigos. Creo que durante mi adolescencia no llegué a hacer nada significativo de programación, hasta mi semestre sabático antes de entrar a la universidad.</p>
                </div>

            </div>
        </div>
    </div>
</body>
</html>


