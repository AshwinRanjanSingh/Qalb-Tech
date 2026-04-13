<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Google Map Global Branch Explorer</title>

  <style>
    * { box-sizing: border-box; }
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
      transition: background 0.4s, color 0.4s;
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
      width: 100vw;
      height: 100vh;
      overflow: hidden;
    }

    /* MAP SECTION */
    #globeSection {
      flex: 2;
      min-width: 300px;
      position: relative;
      background: #000;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #googleMap {
      width: 100%;
      height: 100%;
    }

    /* RIGHT PANEL */
    #infoPanel {
      flex: 0 0 380px;
      max-width: 380px;
      width: 100%;
      padding: 18px;
      background: rgb(255, 255, 255);
      overflow-y: auto;
      transition: 0.4s;
    }

    body.dark #infoPanel {
      background: rgba(2,8,20,0.85);
      border-left: 1px solid rgba(255,255,255,0.1);
    }

    h2 { margin: 8px 0; color: #0077ff; font-size: 1.2rem; }
    label { font-weight: 600; font-size: 0.95rem; }

    #searchInput {
      width: 100%;
      padding: 10px 12px;
      border-radius: 8px;
      border: none;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .continent, .branch-item {
      padding: 10px;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.2s;
      background: rgba(255,255,255,0.85);
      margin-bottom: 6px;
    }

    body.dark .continent, body.dark .branch-item {
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.06);
    }

    .continent:hover, .branch-item:hover {
      background: rgba(77,163,255,0.15);
      transform: translateY(-2px);
    }

    #themeToggle {
      width: 100%;
      padding: 10px;
      margin-bottom: 12px;
      background: #0077ff;
      color: white;
      font-weight: bold;
      border-radius: 8px;
      border: none;
    }

    /* TABLETS */
    @media (max-width: 1024px) {
      #infoPanel {
        flex: 0 0 320px;
        max-width: 320px;
      }
    }

    /* MOBILE LANDSCAPE */
    @media (max-width: 850px) {
      .container {
        flex-direction: column;
        height: 100vh;
      }

      #infoPanel {
        width: 100%;
        max-width: 100%;
        height: 45vh;
      }

      #globeSection {
        height: 55vh;
        min-height: 260px;
      }
    }

    /* MOBILE PORTRAIT (VIVO / SAMSUNG / iPHONE) */
    @media (max-width: 600px) {
      body { overflow: hidden; }

      .container {
        flex-direction: column;
        height: 100dvh; /* modern phones */
      }

      #globeSection {
        height: 50dvh;
        min-height: 300px;
      }

      #infoPanel {
        height: 50dvh;
        padding: 14px;
      }

      h2 { font-size: 1.1rem; }
      #searchInput { font-size: 13px; }
    }

    /* SMALL PHONES */
    @media (max-width: 400px) {
      #globeSection { height: 45dvh; }
      #infoPanel { height: 55dvh; }
      .continent, .branch-item { font-size: 14px; }
    }
  </style>
</head>

<body class="light">

  <div class="container">
    
    <div id="globeSection">
      <div id="googleMap"></div>
    </div>

    <div id="infoPanel">
      <button id="themeToggle">🌞 Light Mode</button>

      <h2>Global Continents & Branches</h2>
      <label>Search continents / branches</label>
      <input id="searchInput" placeholder="🔍 Type continent or country name..." />

      <div id="continentList"></div>

      <h2 style="margin-top:12px">Branches</h2>
      <div id="branchList"></div>
    </div>

  </div>

  <!-- MAP SCRIPT -->
  <script>
    let map;

    const branches = [
      { name: "New York Branch", lat: 40.7128, lon: -74.006, country: "USA", continent: "North America" },
      { name: "Toronto Branch", lat: 43.65107, lon: -79.347015, country: "Canada", continent: "North America" },
      { name: "London Branch", lat: 51.5074, lon: -0.1278, country: "UK", continent: "Europe" },
      { name: "Paris Branch", lat: 48.8566, lon: 2.3522, country: "France", continent: "Europe" },
      { name: "Berlin Branch", lat: 52.52, lon: 13.405, country: "Germany", continent: "Europe" },
      { name: "Tokyo Branch", lat: 35.6895, lon: 139.6917, country: "Japan", continent: "Asia" },
      { name: "Mumbai Branch", lat: 19.076, lon: 72.8777, country: "India", continent: "Asia" },
      { name: "Singapore Branch", lat: 1.3521, lon: 103.8198, country: "Singapore", continent: "Asia" },
      { name: "Sydney Branch", lat: -33.8688, lon: 151.2093, country: "Australia", continent: "Australia" },
      { name: "Cape Town Branch", lat: -33.9249, lon: 18.4241, country: "South Africa", continent: "Africa" },
      { name: "São Paulo Branch", lat: -23.5505, lon: -46.6333, country: "Brazil", continent: "South America" }
    ];

    const continents = [
      { id: 'Asia', name: 'Asia' },
      { id: 'Europe', name: 'Europe' },
      { id: 'North America', name: 'North America' },
      { id: 'South America', name: 'South America' },
      { id: 'Africa', name: 'Africa' },
      { id: 'Australia', name: 'Australia' }
    ];

    function initMap() {
      map = new google.maps.Map(document.getElementById("googleMap"), {
        center: { lat: 20, lng: 10 },
        zoom: 2,
      });

      branches.forEach(b => {
        new google.maps.Marker({
          position: { lat: b.lat, lng: b.lon },
          map,
          title: b.name
        });
      });
    }

    const continentListEl = document.getElementById("continentList");
    const branchListEl = document.getElementById("branchList");
    const searchInput = document.getElementById("searchInput");

    function renderContinents(filter = "") {
      continentListEl.innerHTML = "";
      continents
        .filter(c => c.name.toLowerCase().includes(filter))
        .forEach(c => {
          const div = document.createElement("div");
          div.className = "continent";
          div.innerHTML = `<strong>${c.name}</strong>`;
          div.onclick = () => {
            const target = branches.find(b => b.continent === c.id);
            if (target) {
              map.setCenter({ lat: target.lat, lng: target.lon });
              map.setZoom(4);
            }
            renderBranches(c.id);
          };
          continentListEl.appendChild(div);
        });
    }

    function renderBranches(filter = "", search = "") {
      branchListEl.innerHTML = "";
      branches
        .filter(b =>
          (filter === "" || b.continent === filter) &&
          (b.name.toLowerCase().includes(search) || b.country.toLowerCase().includes(search))
        )
        .forEach(b => {
          const div = document.createElement("div");
          div.className = "branch-item";
          div.innerHTML = `<strong>${b.name}</strong><br>${b.country} • ${b.continent}`;
          div.onclick = () => {
            map.setCenter({ lat: b.lat, lng: b.lon });
            map.setZoom(6);
          };
          branchListEl.appendChild(div);
        });
    }

    renderContinents();
    renderBranches();

    searchInput.addEventListener("input", e => {
      const q = e.target.value.toLowerCase();
      renderContinents(q);
      renderBranches("", q);
    });

    const themeToggle = document.getElementById("themeToggle");
    const body = document.body;

    themeToggle.addEventListener("click", () => {
      body.classList.toggle("dark");
      body.classList.toggle("light");
      themeToggle.textContent =
        body.classList.contains("dark") ? "🌙 Dark Mode" : "🌞 Light Mode";
    });
  </script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAceuRXSka9XtFw-uIMkss3jbvulQWf0b8&callback=initMap"></script>

</body>
</html>
