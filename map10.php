<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>3D Global Branch Explorer — Highlighted</title>
  <script src="https://unpkg.com/globe.gl"></script>

  <style>
    * { box-sizing: border-box; }
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
      transition: background 0.4s, color 0.4s;
      overflow: hidden; 
    }

    body.light {
      background: radial-gradient(circle at center, #e8f3ff, #cfd8dc);
      color: #000;
    }

    body.dark {
      background: radial-gradient(circle at center, #000814, #000);
      color: #fff;
    }

    .container {
      display: flex;
      flex-direction: row-reverse;
      width: 100vw;
      height: 100vh;
      overflow: hidden;

    }

    #globeSection {
      flex: 2;
      min-width: 500px;
      position: relative;
      background: radial-gradient(circle at center, #00111f, #000);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #globeViz { 
      width: 100%; 
      height: 100%;
      transform: translate(-200px);

    }

    #infoPanel {
      flex: 0 0 380px;
      width: 380px;
      padding: 22px;
      background: rgb(255, 255, 255);
      backdrop-filter: blur(6px);
      border-right: 1px solid rgba(0,0,0,0.1);
      display: flex;
      flex-direction: column;
      gap: 12px;
      overflow-y: auto;
      transition: background 0.4s, color 0.4s;
    }
    body.dark #infoPanel {
      background: rgba(2,8,20,0.85);
      border-right: 1px solid rgba(77,163,255,0.12);
    }

    h2 { margin: 0 0 6px 0; color: #0077ff; font-size: 1.25rem; }

    label { font-weight: 600; font-size: 0.95rem; }

    #searchInput {
      width: 100%;
      padding: 10px 12px;
      border-radius: 8px;
      border: none;
      outline: none;
      font-size: 14px;
      background: rgba(255,255,255,0.9);
      color: #000;
    }

    body.dark #searchInput {
      background: rgba(255,255,255,0.06);
      color: #fff;
    }

    .continent, .branch-item {
      padding: 10px;
      border-radius: 8px;
      cursor: pointer;
      transition: transform .15s ease, background .15s ease;
      border: 1px solid rgba(0,0,0,0.05);
      background: rgba(255,255,255,0.8);
    }

    .continent:hover, .branch-item:hover {
      transform: translateY(-3px);
      background: rgba(77,163,255,0.15);
    }

    body.dark .continent, body.dark .branch-item {
      background: rgba(255,255,255,0.03);
      border: 1px solid rgba(255,255,255,0.05);
    }

    body.dark .continent:hover, body.dark .branch-item:hover {
      background: rgba(77,163,255,0.08);
    }

    .continent-name { font-weight: 700; font-size: 15px; }

    #branchList, #continentList {
      display: flex;
      flex-direction: column;
      gap: 8px;
    }

    #themeToggle {
      margin-bottom: 12px;
      padding: 10px;
      background: #0077ff;
      color: white;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
    }

    #themeToggle:hover { background: #005fcc; }

      /* ✅ Responsive Section */
  @media (max-width: 1024px) {
    .container {
      flex-direction: column;
    }

    #globeSection {
      flex: none;
      width: 100%;
      height: 55vh;
      min-width: unset;
    }

    #globeViz {
      transform: translate(0); /* center the globe on mobile/tablet */
    }

    #infoPanel {
      width: 100%;
      height: 45vh;
      border-right: none;
      border-top: 1px solid rgba(0,0,0,0.1);
      flex: none;
      overflow-y: auto;
    }

    body.dark #infoPanel {
      border-top: 1px solid rgba(77,163,255,0.12);
    }

    #themeToggle {
      align-self: flex-start;
    }
  }

  @media (max-width: 600px) {
    #globeSection { height: 50vh; }
    #infoPanel { height: 50vh; padding: 15px; }
    h2 { font-size: 1.1rem; }
    #searchInput { font-size: 13px; }
    .continent, .branch-item { font-size: 13px; }
  }
  </style>
</head>
<body class="light">

  <div class="container">
    <div id="globeSection"><div id="globeViz"></div></div>

    <div id="infoPanel">
      <button id="themeToggle">🌞 Light Mode</button>
      <h2>Global Continents & Branches</h2>
      <label for="searchInput">Search continents / branches</label>
      <input id="searchInput" placeholder="🔍 Type continent or country name..." />
      <div id="continentList"></div>
      <h2 style="margin-top:12px">Branches</h2>
      <div id="branchList"></div>
    </div>
  </div>

  <script>
    const branches = [
      { name: "New York Branch", lat: 40.7128, lon: -74.006, country: "USA", continent: "North America", flag: "https://flagcdn.com/w40/us.png" },
      { name: "Toronto Branch", lat: 43.65107, lon: -79.347015, country: "Canada", continent: "North America", flag: "https://flagcdn.com/w40/ca.png" },
      { name: "London Branch", lat: 51.5074, lon: -0.1278, country: "United Kingdom", continent: "Europe", flag: "https://flagcdn.com/w40/gb.png" },
      { name: "Paris Branch", lat: 48.8566, lon: 2.3522, country: "France", continent: "Europe", flag: "https://flagcdn.com/w40/fr.png" },
      { name: "Berlin Branch", lat: 52.52, lon: 13.405, country: "Germany", continent: "Europe", flag: "https://flagcdn.com/w40/de.png" },
      { name: "Tokyo Branch", lat: 35.6895, lon: 139.6917, country: "Japan", continent: "Asia", flag: "https://flagcdn.com/w40/jp.png" },
      { name: "Mumbai Branch", lat: 19.076, lon: 72.8777, country: "India", continent: "Asia", flag: "https://flagcdn.com/w40/in.png" },
      { name: "Singapore Branch", lat: 1.3521, lon: 103.8198, country: "Singapore", continent: "Asia", flag: "https://flagcdn.com/w40/sg.png" },
      { name: "Sydney Branch", lat: -33.8688, lon: 151.2093, country: "Australia", continent: "Australia", flag: "https://flagcdn.com/w40/au.png" },
      { name: "Cape Town Branch", lat: -33.9249, lon: 18.4241, country: "South Africa", continent: "Africa", flag: "https://flagcdn.com/w40/za.png" },
      { name: "São Paulo Branch", lat: -23.5505, lon: -46.6333, country: "Brazil", continent: "South America", flag: "https://flagcdn.com/w40/br.png" }
    ];

    const continents = [
      { id: 'Asia', name: 'Asia', flag: '🌏' },
      { id: 'Europe', name: 'Europe', flag: '🌏' },
      { id: 'North America', name: 'North America', flag: '🌏' },
      { id: 'South America', name: 'South America', flag: '🌏' },
      { id: 'Africa', name: 'Africa', flag: '🌏' },
      { id: 'Australia', name: 'Australia', flag: '🌏' }
    ];

    const globe = Globe()(document.getElementById('globeViz'))
      .globeImageUrl('//unpkg.com/three-globe/example/img/earth-day.jpg')
      .backgroundImageUrl('//unpkg.com/three-globe/example/img/night-sky.png')
      .pointLat('lat')
      .pointLng('lon')
      .pointColor(() => '#00aaff')
      .pointAltitude(0.035)
      .pointRadius(0.35)
      .pointLabel(d => `<img src="${d.flag}" style="width:20px;height:14px;vertical-align:middle;margin-right:6px;">${d.name.replace(' Branch', '')} — ${d.country}`)
      .labelsData(branches)
      .labelLat(d => d.lat)
      .labelLng(d => d.lon)
      .labelText(d => d.name.replace(' Branch', ''))
      .labelSize(1.3)
      .labelColor(() => "yellow")
      .labelResolution(2);

    globe.controls().autoRotate = true;
    globe.controls().autoRotateSpeed = 0.7;
    globe.pointOfView({ lat: 20, lng: 20, altitude: 2.2 }, 0);

    let highlighted = null;

    fetch('https://raw.githubusercontent.com/iamanas20/geojson-world-continent/main/continents.json')
      .then(res => res.json())
      .then(geojson => {
        globe.polygonsData(geojson.features)
          .polygonCapColor(feat =>
            feat.properties.CONTINENT === highlighted ? 'rgba(255,0,0,0.45)' : 'rgba(255,255,255,0.05)'
          )
          .polygonSideColor(() => 'rgba(255,255,255,0.2)')
          .polygonStrokeColor(() => '#111')
          .polygonLabel(feat => `<b>${feat.properties.CONTINENT}</b>`);
      });

    const continentListEl = document.getElementById('continentList');
    const branchListEl = document.getElementById('branchList');

    function onContinentClick(id) {
      highlighted = id;
      const rep = branches.find(b => b.continent === id);
      if (rep) globe.pointOfView({ lat: rep.lat, lng: rep.lon, altitude: 1.5 }, 1500);
      renderBranches(id);
    }

    function renderContinents(filter = '') {
      continentListEl.innerHTML = '';
      continents.filter(c => c.name.toLowerCase().includes(filter))
        .forEach(c => {
          const div = document.createElement('div');
          div.className = 'continent';
          div.innerHTML = `<div class="continent-name">${c.flag} ${c.name}</div>`;
          div.onclick = () => onContinentClick(c.id);
          continentListEl.appendChild(div);
        });
    }

    function renderBranches(filter = "", search = "") {
      branchListEl.innerHTML = '';
      branches
        .filter(b =>
          (filter === "" || b.continent === filter) &&
          (b.name.toLowerCase().includes(search) || b.country.toLowerCase().includes(search))
        )
        .forEach(b => {
          const el = document.createElement('div');
          el.className = 'branch-item';
          el.innerHTML = `<img src="${b.flag}" style="width:20px;height:14px;margin-right:6px;vertical-align:middle;"> <strong>${b.name}</strong><br>${b.country} • ${b.continent}`;
          el.onclick = () => globe.pointOfView({ lat: b.lat, lng: b.lon, altitude: 1.5 }, 1200);
          branchListEl.appendChild(el);
        });
    }

    renderContinents();
    renderBranches();

    document.getElementById('searchInput').addEventListener('input', (e) => {
      const q = e.target.value.toLowerCase();
      renderContinents(q);
      renderBranches("", q);
    });

    const viz = document.getElementById('globeViz');
    viz.addEventListener('mouseenter', () => globe.controls().autoRotate = false);
    viz.addEventListener('mouseleave', () => globe.controls().autoRotate = true);

    const themeToggle = document.getElementById('themeToggle');
    const body = document.body;

    themeToggle.addEventListener('click', () => {
      body.classList.toggle('dark');
      body.classList.toggle('light');
      themeToggle.textContent = body.classList.contains('dark')
        ? '🌙 Dark Mode'
        : '🌞 Light Mode';
    });
  </script>

</body>
</html>