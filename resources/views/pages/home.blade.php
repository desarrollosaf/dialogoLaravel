<!DOCTYPE html><!--  This site was created in Webflow. https://webflow.com  --><!--  Last Published: Fri Sep 26 2025 15:13:17 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="68d32caf5b7816fce0255d00" data-wf-site="68d32cae5b7816fce0255ced" lang="en">
<head>
    <meta charset="utf-8">
    <title>Dialogo</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="{{asset("assets/home/css/normalize.css")}}" rel="stylesheet" type="text/css">
    <link  href="{{asset("assets/home/css/webflow.css")}}"  rel="stylesheet" type="text/css">
    <link href="{{asset("assets/home/css/dialogo-site.webflow.css")}}"  rel="stylesheet" type="text/css">
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link  href="{{asset("assets/home/images/Favicon.png")}}" rel="shortcut icon" type="image/x-icon">
    <link  href="{{asset("assets/home/images/webclip.png")}}" rel="apple-touch-icon">
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=68d32cae5b7816fce0255ced" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script href="{{asset("assets/home/js/webflow.js")}}" type="text/javascript"></script>
</head>
<body>
<header class="section-2"><img src="{{asset("assets/home/images/logo-dialogo-1.svg")}}" loading="lazy" alt=""></header>
<section class="section-4">
    <h1 class="heading">Bienvenido a Diálogo</h1>
    <p class="paragraph">Diálogo es el blog del Congreso del Estado de México que busca informar y difundir de manera cercana, clara y accesible el quehacer legislativo que impacta directamente la cotidianidad de la sociedad mexiquense.</p>
    <p class="paragraph-4">Mantente al día</p>
</section>
<section class="section-3">
    <div class="w-layout-blockcontainer container w-container">
        <h1 class="heading-3">Lo más reciente</h1>
        <div class="w-layout-blockcontainer container-2 w-container"></div>
        <p class="paragraph-2">El rock ya tiene su día en el calendario mexiquense</p>
        <p class="paragraph-3">19 de septiembre 2025</p>
        <p>Fue la diputada María del Carmen de la Rosa Mendoza (morena) quien subió a tribuna para proponer el Día del Rock Estatal, el cual justificó a través de una playlist poderosa, contundente y respaldada con argumentos culturales, históricos y sociales de cómo el rock ha sido una vía de expresión para la juventud, una manifestación de resistencia ante los modelos musicales impuestos por el marketing, así como un símbolo de libertad artística y reivindicación cultural en el Estado de México, en el país y en el mundo.</p>
        <a href="/rock_mexiquense" class="button w-button">Leer artículo</a>
    </div>
    <div class="w-layout-blockcontainer container-3 w-container">
        <div id="w-node-_0da84a1c-8983-00ee-95bc-36e639afa07e-e0255d00" class="w-layout-layout quick-stack wf-layout-layout">
            <div class="w-layout-cell cell-3"><img src="{{asset("assets/plastico/img/imagen-entrada-1.png")}}" loading="lazy" width="451" alt="" class="image">
                <h1 class="heading-6">Dicen adiós a bolsas de plástico en Edomex</h1>
                <a href="/plastico_edomex" class="button w-button">Leer artículo</a>
            </div>
            <div class="w-layout-cell cell-2"><img src="{{asset("assets/ciudadanodigno/img/billete-1-ok-1.png")}}" loading="lazy" width="451" alt="" class="image">
                <h1 class="heading-5">Impulsa LXII Legislatura derecho al ciudadano digno</h1>
                <a href="/derecho_al_ciudadano_digno" class="button w-button">Leer artículo</a>
            </div>
            <div class="w-layout-cell cell"><img src="{{asset("assets/maternidad/img/billete-1-ok-1.png")}}" loading="lazy" width="451" alt="" class="image">
                <h1 class="heading-4">Protege el Congreso Edomex una Maternidad libre</h1>
                <a href="/maternidad_libre" class="button w-button">Leer artículo</a>
            </div>
        </div>
    </div>
</section>
<section class="section-6">
    <div class="w-layout-blockcontainer container-5 w-container">
        <div class="w-layout-blockcontainer container-4 w-container">

            {{-- Dropdown de Años --}}
            <div data-hover="false" data-delay="0" class="dropdown w-dropdown">
                <div class="dropdown-toggle w-dropdown-toggle">
                    <div class="w-icon-dropdown-toggle"></div>
                    <div>Año: {{ $anioSeleccionado }}</div>
                </div>
                <nav class="w-dropdown-list">
                    @foreach(array_keys($articulos) as $anio)
                        <a href="javascript:void(0)"
                           class="dropdown-link w-dropdown-link anio-btn"
                           data-anio="{{ $anio }}">
                            {{ $anio }}
                        </a>
                    @endforeach
                </nav>
            </div>

            {{-- Botones de Trimestres --}}
            <div class="div-block">
                @for ($t = 1; $t <= 4; $t++)
                    <a href="javascript:void(0)"
                       class="button-2 w-button trimestre-btn {{ $trimestreSeleccionado == $t ? 'active' : '' }}"
                       data-anio="{{ $anioSeleccionado }}"
                       data-trimestre="{{ $t }}">
                        {{ $t }}{{ $t == 1 ? 'er' : 'to' }} Trimestre
                    </a>
                @endfor
            </div>
        </div>

        {{-- Artículos dinámicos --}}
        <div id="w-node-_8bf1be2a-57dc-911c-4db9-7b9e2886ec89-e0255d00" class="w-layout-layout quick-stack wf-layout-layout">
            {{-- Aquí se pintan con JS --}}
        </div>
    </div>
</section>
<footer class="section-5"><img src="{{asset("assets/home/images/congreso-dialogo.png")}}" loading="lazy" sizes="(max-width: 580px) 100vw, 580px" srcset="{{ asset('assets/home/images/congreso-dialogo-p-500.png') }} 500w, {{ asset('assets/home/images/congreso-dialogo.png') }} 580w"  alt="Congreso diálogo" alt="" class="image-3">
    <a href="#" class="link">Aviso de privacidad</a>
</footer>
</body>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=68d32cae5b7816fce0255ced" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{ asset('assets/home/js/webflow.js') }}" type="text/javascript"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const contenedor = document.getElementById("w-node-_8bf1be2a-57dc-911c-4db9-7b9e2886ec89-e0255d00");
        let anioActual = "{{ $anioSeleccionado }}";
        let trimestreActual = "{{ $trimestreSeleccionado }}";

        function getArticulos(anio, trimestre) {
            fetch(`/articulos/${anio}/${trimestre}`)
                .then(res => res.json())
                .then(data => {
                    contenedor.innerHTML = "";
                    if (data.length === 0) {
                        contenedor.innerHTML = "<p>No hay artículos.</p>";
                        return;
                    }

                    data.forEach(articulo => {
                        const img = articulo.img.startsWith("http")
                            ? articulo.img
                            : `/assets/${articulo.img}`;

                        contenedor.innerHTML += `
                        <div class="w-layout-cell">
                            <img src="${img}" loading="lazy" width="451" alt="${articulo.titulo}" class="image">
                            <h1 class="heading-6">${articulo.titulo}</h1>
                            <a href="${articulo.ruta}" class="button w-button">Leer artículo</a>
                        </div>
                    `;
                    });
                });
        }

        // Función para actualizar la clase "active"
        function actualizarTrimestreActivo() {
            document.querySelectorAll(".trimestre-btn").forEach(btn => {
                btn.classList.remove("active");
                if (btn.dataset.trimestre === trimestreActual) {
                    btn.classList.add("active");
                }
            });
        }

        // Botones de trimestre
        document.querySelectorAll(".trimestre-btn").forEach(btn => {
            btn.addEventListener("click", () => {
                trimestreActual = btn.dataset.trimestre;
                getArticulos(anioActual, trimestreActual);
                actualizarTrimestreActivo();
            });
        });

        // Dropdown de años
        document.querySelectorAll(".anio-btn").forEach(link => {
            link.addEventListener("click", e => {
                e.preventDefault();
                anioActual = link.dataset.anio;
                getArticulos(anioActual, trimestreActual);

                // Actualiza el texto mostrado en el toggle
                document.querySelector(".dropdown-toggle div:last-child").textContent = "Año: " + anioActual;

                // Simular click para cerrar el dropdown
                const dropdownToggle = link.closest(".w-dropdown").querySelector(".dropdown-toggle");
                dropdownToggle.click();
            });
        });

        // Inicializar estado activo al cargar
        actualizarTrimestreActivo();
    });
</script>
</html>
