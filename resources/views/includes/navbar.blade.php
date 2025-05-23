  <style>
    /* Estilos generales */
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    /* Navbar container */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #333;
      padding: 10px 20px;
    }

    /* Logo o título */
    .navbar .logo {
      color: white;
      font-size: 20px;
      font-weight: bold;
      text-decoration: none;
    }

    /* Links */
    .navbar ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    .navbar ul li {
      margin-left: 20px;
    }

    .navbar ul li a {
      color: white;
      text-decoration: none;
      padding: 8px 12px;
      transition: background 0.3s;
    }

    .navbar ul li a:hover {
      background-color: #575757;
      border-radius: 4px;
    }

    /* Responsive (opcional) */
    @media (max-width: 600px) {
      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }

      .navbar ul {
        flex-direction: column;
        width: 100%;
      }

      .navbar ul li {
        margin-left: 0;
        width: 100%;
      }

      .navbar ul li a {
        display: block;
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <a href="#" class="logo">MiSitio</a>
    <ul>
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Servicios</a></li>
      <li><a href="#">Acerca</a></li>
      <li><a href="#">Contacto</a></li>
    </ul>
  </nav>
