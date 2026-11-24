<!DOCTYPE html>
<html lang="es-MX">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Violencia ácida contra mujeres: heridas que marcan vidas, justicia que no debe esperar</title>
<meta name="description" content="La LXII Legislatura del Congreso mexiquense aprobó reformas que permiten imponer penas de hasta 36 años de prisión a quienes cometan violencia ácida o química, y garantizan atención y reparación integral a las víctimas.">
<meta property="og:title" content="Violencia ácida contra mujeres: heridas que marcan vidas, justicia que no debe esperar">
<meta property="og:description" content="Reformas de la LXII Legislatura del Estado de México contra la violencia ácida o química.">
<meta property="og:image" content="{{asset('assets/violencia/img/hero-ataque.webp')}}">
<meta property="og:type" content="article">
<link rel="preload" href="{{asset('assets/violencia/fonts/RegestoGrotesk-Medium.ttf')}}" as="font" type="font/ttf" crossorigin>
<link rel="preload" href="{{asset('assets/violencia/fonts/RegestoGrotesk-Bold.ttf')}}" as="font" type="font/ttf" crossorigin>
<style>
  /* Regesto Grotesk: titulares y cuerpo */
  @font-face{font-family:"Regesto Grotesk";src:url("assets/violencia/fonts/RegestoGrotesk-Regular.ttf") format("truetype");font-weight:400;font-style:normal;font-display:swap}
  @font-face{font-family:"Regesto Grotesk";src:url("assets/violencia/fonts/RegestoGrotesk-Medium.ttf") format("truetype");font-weight:500;font-style:normal;font-display:swap}
  @font-face{font-family:"Regesto Grotesk";src:url("assets/violencia/fonts/RegestoGrotesk-Bold.ttf") format("truetype");font-weight:600 700;font-style:normal;font-display:swap}
  :root{
    --vino:#96574B;          /* bandas y titulares */
    --vino-oscuro:#7C4339;
    --rosa:#E2A3AD;          /* fondo */
    --rosa-claro:#F1CBCF;
    --tinta:#454545;         /* texto de cuerpo */
    --gris:#6E6466;          /* texto de introducción */
    --blanco:#FFFFFF;
    --ancho:960px;
    --nav-h:74px;
    --titular:"Regesto Grotesk", "Helvetica Neue", Arial, sans-serif;
    --texto:"Regesto Grotesk", "Helvetica Neue", Arial, sans-serif;
  }
  *{box-sizing:border-box;margin:0;padding:0}
  html{scroll-behavior:smooth;scroll-padding-top:calc(var(--nav-h) + 16px)}
  @media (prefers-reduced-motion:reduce){html{scroll-behavior:auto}}
  body{
    font-family:var(--texto);font-weight:500;color:var(--tinta);
    background:var(--rosa) url("assets/violencia/img/textura.webp") repeat; 
    font-size:1.0625rem;line-height:1.6;
    -webkit-font-smoothing:antialiased;
  }
  img{max-width:100%;display:block}
  a{color:inherit}
  .skip{position:absolute;left:-9999px;top:8px;background:var(--blanco);padding:8px 14px;z-index:100}
  .skip:focus{left:8px}

  /* ---------- Navegación ---------- */
  .nav{
    position:sticky;top:0;z-index:50;height:var(--nav-h);
    background:#000;color:var(--blanco);
    box-shadow:0 2px 10px rgba(0,0,0,.25);
  }
  .nav__inner{max-width:1200px;height:100%;margin:0 auto;padding:0 20px;display:flex;align-items:center;gap:24px}
  .nav__inner{justify-content:center}
  .nav__logo{display:flex;align-items:center}
  .nav__logo img{display:block;height:34px;width:auto}
  .nav__logo:focus-visible{outline:2px solid var(--blanco);outline-offset:6px}
  .progress{position:absolute;left:0;bottom:-3px;height:3px;width:0;background:var(--rosa-claro)}

  /* ---------- Estructura ---------- */
  .wrap{max-width:var(--ancho);margin:0 auto;padding:0 24px}
  section{padding:56px 0}
  .banda{background:var(--vino);color:var(--blanco)}
  .banda--titulo{padding:18px 0;text-align:center}
  .banda--titulo h2{font-family:var(--titular);font-weight:700;font-size:clamp(1.6rem,3.6vw,2.4rem);line-height:1.15;letter-spacing:.01em}
  .banda--destacado{padding:28px 0}
  .banda--destacado p{font-weight:700;font-size:clamp(1.15rem,2.2vw,1.45rem);line-height:1.4}

  h1,.h-seccion,.h-sub{font-family:var(--titular);font-weight:700;color:var(--vino);text-align:center;line-height:1.15}
  h1{font-size:clamp(2.1rem,5.2vw,3.5rem);margin-bottom:20px}
  .h-seccion{font-size:clamp(1.5rem,3.2vw,2.2rem);margin:48px auto 20px;max-width:760px}
  .h-sub{font-size:clamp(1.25rem,2.4vw,1.6rem);margin:36px auto 14px;max-width:760px}
  .pregunta{font-family:var(--titular);font-weight:700;color:var(--vino);text-align:center;font-size:clamp(1.35rem,2.8vw,1.9rem);line-height:1.2;margin-bottom:28px}
  .intro{color:var(--gris);font-weight:600;font-size:clamp(1.1rem,2vw,1.35rem);line-height:1.5;text-align:justify;hyphens:auto}

  .prosa p{margin-bottom:1.1em;text-align:justify;hyphens:auto}
  .prosa p:last-child{margin-bottom:0}

  figure{margin:36px 0}
  figure img{width:100%;height:auto;border-radius:4px;box-shadow:0 10px 30px rgba(80,30,25,.18)}
  /* Parallax: la figura recorta y la imagen (ampliada) se desplaza con el scroll */
  .parallax figure{position:relative;overflow:hidden;aspect-ratio:var(--ar,auto);border-radius:4px;box-shadow:0 10px 30px rgba(80,30,25,.18)}
  .parallax figure img{position:absolute;left:0;top:50%;width:100%;height:auto;border-radius:0;box-shadow:none;
    transform:translate3d(0,calc(-50% + var(--py,0px)),0);will-change:transform}
  .creditos{display:flex;justify-content:space-between;flex-wrap:wrap;gap:8px;margin-top:14px;font-size:.85rem;font-weight:600;color:var(--tinta)}
  .creditos b{font-family:var(--titular);font-weight:700;color:var(--vino);margin-right:6px;letter-spacing:.02em}

  /* ---------- Hero ---------- */
  .hero{padding-top:64px}

  /* ---------- Casos ---------- */
  .caso{margin-top:16px}
  .caso__intro{display:grid;grid-template-columns:minmax(0,1.1fr) minmax(0,1fr);gap:32px;align-items:center;margin-bottom:24px}
  .caso__intro img{width:100%;height:auto}
  .caso__meta{display:inline-block;background:#000;color:var(--blanco);font-weight:700;font-size:.8rem;letter-spacing:.06em;text-transform:uppercase;padding:4px 10px;border-radius:999px;margin-bottom:10px}
  @media (max-width:720px){.caso__intro{grid-template-columns:1fr}}
  .separador{height:2px;background:linear-gradient(90deg,transparent,var(--vino),transparent);opacity:.35;margin:56px 0 8px}

  /* ---------- Definición ---------- */
  .cita{
    background:rgba(255,255,255,.35);border-left:6px solid var(--vino);
    padding:22px 26px;border-radius:0 6px 6px 0;font-weight:600;text-align:justify;hyphens:auto
  }

  /* ---------- Listas ---------- */
  .lista{list-style:none;display:grid;gap:12px}
  .lista li{position:relative;padding-left:30px}
  .lista li::before{content:"";position:absolute;left:4px;top:.55em;width:12px;height:12px;border-radius:3px;background:var(--vino)}

  .reparacion{display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1fr);gap:36px;align-items:center}
  .reparacion figure{margin:0}
  @media (max-width:720px){.reparacion{grid-template-columns:1fr}}

  /* ---------- Penas ---------- */
  .penas{display:grid;gap:18px;margin-top:28px}
  .pena{
    background:rgba(255,255,255,.4);border-radius:10px;padding:22px 26px;
    display:grid;grid-template-columns:150px 1fr;gap:24px;align-items:center;
    box-shadow:0 4px 16px rgba(80,30,25,.08)
  }
  .pena__años{font-family:var(--titular);font-weight:700;color:var(--vino);text-align:center;line-height:1}
  .pena__años strong{display:block;font-weight:700;font-size:2.6rem}
  .pena__años span{display:block;font-size:.95rem;margin-top:6px;letter-spacing:.03em}
  .pena h3{font-family:var(--titular);font-weight:700;color:var(--vino);font-size:1.3rem;line-height:1.2;margin-bottom:6px}
  .pena p{text-align:justify;hyphens:auto}
  .pena--agravante{background:#96574B;color:var(--blanco);grid-template-columns:150px 1fr}
  .pena--agravante .pena__años,.pena--agravante h3{color:var(--blanco)}
  @media (max-width:640px){.pena,.pena--agravante{grid-template-columns:1fr;gap:12px}.pena__años{text-align:left}}

  /* ---------- Cierre ---------- */
  .cierre{padding:48px 0;text-align:center}
  .cierre p{font-family:var(--titular);font-weight:700;font-size:clamp(1.35rem,2.8vw,1.9rem);line-height:1.3;max-width:860px;margin:0 auto}
  footer{background:var(--blanco);color:var(--tinta);font-size:.85rem;padding:40px 0}
  .footer__inner{margin:0;display:flex;align-items:center;justify-content:space-between;gap:24px;flex-wrap:wrap}
  .footer__logo img{display:block;height:51px;width:auto}

  @media (max-width:640px){
    .intro,.prosa p,.cita,.pena p{text-align:left}
  }

  .arriba{
    position:fixed;right:20px;bottom:20px;z-index:40;width:48px;height:48px;border-radius:50%;
    background:#000;color:var(--blanco);border:none;cursor:pointer;font-size:1.3rem;
    box-shadow:0 6px 16px rgba(60,20,15,.3);opacity:0;pointer-events:none;transition:opacity .25s
  }
  .arriba.is-visible{opacity:1;pointer-events:auto}
  :focus-visible{outline:3px solid var(--blanco);outline-offset:2px}
  main :focus-visible{outline-color:var(--vino)}
</style>
</head>
<body>
<a class="skip" href="#contenido">Saltar al contenido</a>

<header class="nav">
  <div class="nav__inner">
    <a class="nav__logo" href="https://dialogo.congresoedomex.gob.mx/">
      <img src="{{asset('assets/palacioLegis/assets/logo-dialogo.svg')}}" alt="Diálogo" width="139" height="34">
    </a>
  </div>
  <div class="progress" aria-hidden="true"></div>
</header>

<main id="contenido">

  <!-- ===================== INICIO ===================== -->
  <section id="inicio" class="hero" data-nav>
    <div class="wrap">
      <h1>Violencia ácida contra mujeres: heridas que marcan vidas, justicia que no debe esperar</h1>
      <p class="pregunta">¿Qué grado de malevolencia debe tener una persona para intentar borrar la identidad de otra con ácido o sustancias químicas?</p>
      <p class="intro">Hay agresiones que continúan incluso cuando el dolor físico desaparece, pues dejan cicatrices permanentes en la piel, en la memoria y en la vida de quienes las sobreviven.</p>
    </div>
  </section>

  <div class="banda banda--destacado">
    <div class="wrap"><p>La violencia ácida o química es una de las formas más crueles de violencia contra las mujeres, pues busca marcar sus cuerpos de por vida al dejar cicatrices físicas y psicológicas.</p></div>
  </div>

  <section style="padding-top:36px">
    <div class="wrap">
      <div class="prosa">
        <p>Frente a esta forma extrema de violencia contra las mujeres, niñas y adolescentes, la LXII Legislatura del Congreso mexiquense aprobó reformas que permitirán imponer penas de hasta 36 años de prisión a quienes cometan violencia ácida o química.</p>
        <p>Aunado a ello, también se busca brindar a las víctimas atención médica especializada, cirugías reconstructivas, rehabilitación física y psicológica, así como la reparación integral del daño.</p>
      </div>
      <figure>
        <img src="{{asset('assets/violencia/img/hero-ataque.webp')}}" width="1297" height="816" alt="Ilustración: una mujer se cubre el rostro mientras una mano le arroja líquido desde una botella.">
      </figure>
      <div class="creditos">
        <span><b>Por:</b>Jenny Sadot García Jaramillo</span>
        <span><b>Diseño:</b>Erwin Ritschl Galeazzi</span>
      </div>
    </div>
  </section>

  <!-- ===================== CONTEXTO ===================== -->
  <div id="contexto" class="banda banda--destacado" data-nav>
    <div class="wrap"><p>Estas reformas están asentadas en la Ley de Acceso de las Mujeres a una Vida Libre de Violencia del Estado de México y en el Código Penal del Estado de México resultado de las iniciativas propuestas por las diputadas Zaira Cedillo Silva y Nelly Brígida Rivera Sánchez del Grupo Parlamentario de morena; Araceli Casasola Salazar y Omar Ortega Álvarez del Grupo Parlamentario del PRD; así como de las propuestas realizadas por la fundación Carmen Sánchez MX y mujeres sobrevivientes de violencia química en México.</p></div>
  </div>

  <section>
    <div class="wrap">
      <div class="prosa">
        <p>El Estado de México se encuentra entre las entidades con mayor incidencia por violencia química. La mayoría de las víctimas de estos ataques son mujeres jóvenes y comúnmente los agresores son hombres con quienes las agredidas tuvieron una relación sentimental o afectiva.</p>
        <p>La violencia ácida o química es una de las formas más extremas de agresión contra las mujeres, en la que se utilizan sustancias corrosivas u otros agentes químicos para provocar quemaduras, desfiguraciones, discapacidad, daños físicos y emocionales que pueden acompañar a las víctimas durante toda su vida.</p>
        <p>Estas agresiones pueden dejar secuelas físicas irreversibles, afectar profundamente la salud emocional de las sobrevivientes, provocar rechazo y aislamiento social, además de representar una importante carga económica para ellas y sus familias.</p>
        <p>En la entidad, algunas sobrevivientes de ataques ácidos o químicos han convertido sus historias en una exigencia de justicia y en un llamado para que ninguna otra mujer tenga que enfrentar sola las consecuencias de estas agresiones.</p>
      </div>
      <figure>
        <img src="{{asset('assets/violencia/img/sobrevivientes.webp')}}" width="1200" height="799" loading="lazy" alt="Ilustración: mosaico de ocho retratos de mujeres sobrevivientes de violencia química, con cicatrices en rostro y cuello.">
      </figure>
    </div>
  </section>

  <!-- ===================== CASOS ===================== -->
  <div id="casos" class="banda banda--titulo" data-nav>
    <div class="wrap"><h2>Casos simbólicos</h2></div>
  </div>

  <section>
    <div class="wrap">
      <article class="caso" aria-labelledby="caso-carmen">
        <h3 class="h-seccion" id="caso-carmen" style="margin-top:0">Carmen Sánchez, nueve años para alcanzar una sentencia histórica</h3>
        <div class="caso__intro">
          <img src="{{asset('assets/violencia/img/carmen-sanchez.webp')}}" width="994" height="862" loading="lazy" alt="Ilustración: retrato de Carmen Sánchez, con cicatrices en rostro y pecho.">
          <div class="prosa">
            <span class="caso__meta">20 de febrero de 2014 · Ixtapaluca</span>
            <p>El 20 de febrero de 2014, Carmen Sánchez tenía 29 años cuando fue atacada por su entonces pareja sentimental con ácido en el municipio de Ixtapaluca. La agresión ocurrió en el domicilio de la madre de Carmen, cuando llegó su expareja con la intención de llevarse a la hija que tienen en común. Hecho por el cual comienzan a discutir y el agresor decide arrojarle una sustancia corrosiva en el rostro y distintas partes del cuerpo, provocando en Carmen lesiones de gravedad.</p>
          </div>
        </div>
        <div class="prosa">
          <p>El ataque no fue un hecho aislado ya que Carmen había denunciado previamente a su agresor por violencia familiar, violencia sexual y otros delitos. Incluso, un año antes de la agresión con ácido, ya había sido apuñalada por él.</p>
          <p>Después de nueve largos años de exigir justicia, en mayo de 2023, un tribunal del Estado de México sentenció a su agresor, Efrén García Ramírez, a 46 años y ocho meses de prisión por el delito de feminicidio en grado de tentativa.</p>
          <p>Esta pena representó una resolución histórica ante la lucha de las personas que buscan justicia por ataques con ácido u otras sustancias corrosivas y considerada la primera sentencia de este tipo en México y América Latina que califica como un castigo ejemplar para las personas agresoras.</p>
          <p>A partir de su experiencia, Carmen se convirtió en activista y fundó una organización dedicada a acompañar a mujeres sobrevivientes de ataques con sustancias corrosivas, así como en hacer visible esta forma de violencia para impulsar cambios legales.</p>
        </div>
      </article>

      <div class="separador" aria-hidden="true"></div>

      <article class="caso" aria-labelledby="caso-martha">
        <h3 class="h-seccion" id="caso-martha">Martha Ávila: una agresión que también buscaba lastimar a su hija</h3>
        <figure>
          <img src="{{asset('assets/violencia/img/martha-avila.webp')}}" width="1264" height="842" loading="lazy" alt="Ilustración: Martha Ávila, mujer de cabello cano, se abraza a sí misma con los ojos cerrados.">
        </figure>
        <div class="prosa">
          <span class="caso__meta">8 de marzo de 2017</span>
          <p>El 8 de marzo (Día Internacional de la Mujer) de 2017, Martha Ávila, de 59 años, fue atacada con ácido por el ex esposo de su hija. Si bien el agresor buscaba venganza contra su exesposa por el divorcio que había ocurrido años atrás, al no encontrarla, decidió arrojar la sustancia corrosiva sobre Martha, ocasionándole quemaduras de segundo y tercer grado en el 40 por ciento de su cuerpo, incluidas la espalda y piernas.</p>
          <p>Martha sobrevivió, pero tuvo que enfrentar varias cirugías y tratamientos reconstructivos; así como un largo proceso judicial. Inicialmente, la agresión fue investigada como lesiones, pero durante el procedimiento legal se consiguió reclasificar el delito como tentativa de feminicidio.</p>
          <p>Su agresor recibió una sentencia de 24 años de prisión, que posteriormente se redujo a ocho años tras declararse culpable.</p>
          <p>Su caso muestra que la violencia química también alcanza a familiares de las mujeres a quienes se pretende agredir, y que la clasificación jurídica de estos delitos es fundamental para garantizar justicia y evitar que la gravedad de las lesiones quede minimizada.</p>
        </div>
      </article>
    </div>
  </section>

  <!-- ===================== REFORMAS ===================== -->
  <div id="reformas" class="banda banda--titulo" data-nav>
    <div class="wrap"><h2>¿Qué aprobaron las, le y los diputados de la LXII Legislatura?</h2></div>
  </div>

  <section>
    <div class="wrap">
      <h3 class="h-seccion" style="margin-top:0">En el Proyecto de Decreto se establece las siguientes disposiciones:</h3>
      <div class="prosa">
        <p>La Violencia Física es cualquier acto que inflige daño no accidental usando la fuerza física o algún tipo de arma u objeto que pueda provocar o no lesiones ya sean internas, externas o ambas.</p>
      </div>

      <h3 class="h-sub">En tanto, se define a la violencia ácida o química, como:</h3>
      <blockquote class="cita">Toda acción que utilice ácidos, sustancias corrosivas, cáusticas, irritantes, tóxicas o inflamables, compuestos químicos, líquidos a altas temperaturas, álcalis, gases, explosivos, reactivos o cualquier otra sustancia análoga para causar daño físico, desfiguración, discapacidad, dolor o sufrimiento, o que exponga a una mujer a dicho riesgo, o ponga en peligro su vida.</blockquote>

      <figure>
        <img src="{{asset('assets/violencia/img/violencia-quimica.webp')}}" width="1264" height="841" loading="lazy" alt="Ilustración: en una calle, una mano rocía una sustancia con un envase hacia una mujer que se protege con las manos.">
      </figure>

      <h3 class="h-seccion">Medidas de protección administrativa</h3>
      <div class="prosa">
        <p>Las autoridades jurisdiccionales deberán garantizar las obligaciones alimentarias de la víctima, por lo que se deberá elaborar un inventario de los bienes de la persona agresora y en su caso, el embargo precautorio, el cual, deberá inscribirse con carácter temporal en el Instituto de la Función Registral.</p>
        <p>Las autoridades Estatales y Municipales en el ámbito de sus respectivas competencias deberán prestar atención a las mujeres, adolescentes y niñas víctimas de violencia, y en el caso de las víctimas de violencia ácida o química se les deberá garantizar atención médica especializada y cirugía reconstructiva, cirugía estética funcional, rehabilitación y los suministros necesarios, de manera gratuita, oportuna y continua.</p>
      </div>

      <h3 class="h-seccion">Acciones inmediatas para tratar a una víctima por violencia ácida o química</h3>
      <div class="prosa">
        <p>Se deberá canalizar y ordenar el traslado inmediato de las víctimas de violencia ácida o química a unidades médicas de alta especialidad. En este sentido, el Estado les deberá asegurar el acceso gratuito, integral y continuo a los servicios de salud, así como cuantas medidas sean necesarias para salvaguardar la integridad, la seguridad y la vida de una víctima en situación de violencia.</p>
      </div>

      <h3 class="h-seccion">Obligaciones del personal de salud que atienda a personas con lesiones producidas por agentes químicos o corrosivos</h3>
      <ul class="lista">
        <li>Prestar atención médica inmediata y prioritaria.</li>
        <li>Conservar la evidencia clínica y biológica pertinente para las autoridades.</li>
        <li>Notificar de manera inmediata al Ministerio Público, así como proporcionarle la información y los elementos pertinentes que resulten necesarios para el ejercicio de sus atribuciones, en términos de la legislación aplicable y respetando los derechos de la víctima.</li>
      </ul>
      <div class="prosa" style="margin-top:18px">
        <p>Si el personal médico omite dicha notificación, será sancionado conforme al Código Penal del Estado de México, independientemente de las sanciones que le correspondan conforme a la legislación administrativa.</p>
      </div>

      <figure>
        <img src="{{asset('assets/violencia/img/atencion-inmediata.webp')}}" width="1368" height="768" loading="lazy" alt="Ilustración: una policía auxilia a una mujer herida en una unidad médica mientras otra persona presenta un documento.">
      </figure>

      <h3 class="h-seccion" id="derechos" data-nav>Ahora bien, las víctimas de violencia ácida o química tienen derecho a:</h3>
      <ul class="lista">
        <li>Recibir atención médica especializada y cirugía reconstructiva, cirugía estética funcional, rehabilitación y los suministros necesarios, de manera gratuita, oportuna y continua.</li>
        <li>Recibir reparación integral de los daños, que comprenda medidas de restitución, rehabilitación, compensación, satisfacción y garantías de no repetición.</li>
      </ul>
    </div>
  </section>

  <!-- ===================== CÓDIGO PENAL ===================== -->
  <div class="banda banda--titulo">
    <div class="wrap"><h2>En cuanto a las reformas al Código Penal del Estado de México, en materia de violencia ácida o química, se encuentran las siguientes disposiciones:</h2></div>
  </div>

  <section>
    <div class="wrap">
      <h3 class="h-seccion" style="margin-top:0">Que la reparación integral del daño a estas víctimas deberá incluir lo siguiente:</h3>
      <div class="reparacion">
        <figure>
          <img src="{{asset('assets/violencia/img/reparacion-integral.webp')}}" width="928" height="1140" loading="lazy" alt="Ilustración: una terapeuta acompaña a una paciente con vendajes durante su rehabilitación física.">
        </figure>
        <ul class="lista">
          <li>Cirugías reconstructivas;</li>
          <li>Rehabilitación física y psicológica;</li>
          <li>Prótesis;</li>
          <li>Tratamientos médicos especializados y de largo plazo;</li>
          <li>Compensación por lucro cesante;</li>
          <li>y cualquier otra medida necesaria para la recuperación integral de la víctima.</li>
        </ul>
      </div>

      <h3 class="h-seccion" id="penas" data-nav>Responsabilidades penales para las personas agresoras</h3>
    </div>

    <div class="banda banda--titulo" style="margin-top:8px">
      <div class="wrap"><h2>Los delitos cometidos por violencia ácida o química serán perseguidos de oficio.</h2></div>
    </div>

    <div class="wrap">
      <p style="margin-top:28px;font-weight:700">Además:</p>
      <div class="penas">
        <article class="pena">
          <div class="pena__años"><strong>5 a 10</strong><span>años de prisión</span></div>
          <div>
            <h3>De cinco a 10 años de prisión y de 100 a 200 días multa</h3>
            <p>A quienes produzcan lesiones dolosamente en otra persona mediante el uso de ácidos, sustancias corrosivas, cáusticas, irritantes, tóxicas o inflamables, compuestos químicos, líquidos a altas temperaturas, álcalis, gases, explosivos, reactivos o cualquier otra sustancia análoga.</p>
          </div>
        </article>
        <article class="pena">
          <div class="pena__años"><strong>8 a 15</strong><span>años de prisión</span></div>
          <div>
            <h3>De ocho a 15 años de prisión y de 200 a 500 días multa</h3>
            <p>Cuando las lesiones se produzcan dolosamente hacia una mujer, niña o adolescente mediante el uso de ácidos, sustancias corrosivas, cáusticas, irritantes, tóxicas o inflamables, compuestos químicos, líquidos a altas temperaturas, álcalis, gases, explosivos, reactivos o cualquier otra sustancia análoga.</p>
          </div>
        </article>
        <article class="pena">
          <div class="pena__años"><strong>12 a 20</strong><span>años de prisión</span></div>
          <div>
            <h3>De 12 a 20 años de prisión y de 300 a 700 días multa</h3>
            <p>Si el ataque causa desfiguración permanente en cara, cabeza, cuello, mamas o genitales, o pérdida o disminución definitiva de función de órgano o sentido.</p>
          </div>
        </article>
        <article class="pena pena--agravante">
          <div class="pena__años"><strong>+ ½</strong><span>de la pena</span></div>
          <div>
            <h3>Las tres penas anteriores se incrementarán hasta en una mitad, si:</h3>
            <p>El delito es cometido por una persona servidora pública en ejercicio de sus funciones, o bien, que haya existido entre la persona agresora y la víctima una relación de parentesco o convivencia sentimental, afectiva, laboral, docente, de subordinación, de confianza o que tenga responsabilidad de cuidado sobre la persona agredida.</p>
          </div>
        </article>
      </div>

      <figure>
        <img src="{{asset('assets/violencia/img/secuelas.webp')}}" width="1200" height="896" loading="lazy" alt="Ilustración: retrato de una persona sobreviviente con cicatrices de quemaduras en el rostro y los hombros.">
      </figure>
    </div>
  </section>

  <div class="banda cierre">
    <div class="wrap"><p>Con estas acciones, la LXII Legislatura mexiquense avanza hacia una mayor protección de las mujeres, niñas y adolescentes en la entidad y se reconoce que ninguna agresión que atente contra su integridad, dignidad y proyecto de vida debe quedar impune.</p></div>
  </div>
</main>

<footer>
  <div class="wrap footer__inner">
    <div class="footer__logo">
      <img src="{{asset('assets/violencia/img/logo-congreso-dialogo.png')}}" alt="Congreso del Estado de México · Diálogo" width="247" height="51">
    </div>  </div>
</footer>

<button class="arriba" type="button" aria-label="Volver arriba">↑</button>

<script>
(function(){
  var bar=document.querySelector('.progress'), up=document.querySelector('.arriba');

  function onScroll(){
    var y=window.scrollY, h=document.documentElement.scrollHeight-window.innerHeight;
    bar.style.width=(h>0?(y/h*100):0)+'%';
    up.classList.toggle('is-visible',y>800);
  }
  window.addEventListener('scroll',onScroll,{passive:true});
  window.addEventListener('resize',onScroll);
  onScroll();

  // Parallax de imágenes (se desactiva si la persona pidió reducir el movimiento)
  if(!window.matchMedia('(prefers-reduced-motion: reduce)').matches){
    document.documentElement.classList.add('parallax');
    // VISIBLE: parte del alto de la imagen que muestra el marco. Menos = efecto más intenso.
    var VISIBLE=0.75, ticking=false;
    var figs=Array.prototype.slice.call(document.querySelectorAll('main figure')).filter(function(f){
      var img=f.querySelector('img'), w=+img.getAttribute('width'), h=+img.getAttribute('height');
      if(!w||!h) return false;
      f.style.setProperty('--ar',(w/(h*VISIBLE)).toFixed(4));
      f._img=img; f._ratio=h/w;
      return true;
    });
    function parallax(){
      ticking=false;
      var vh=window.innerHeight;
      figs.forEach(function(f){
        var r=f.getBoundingClientRect();
        if(r.bottom<0||r.top>vh) return;
        var p=(r.top+r.height/2-vh/2)/(vh/2+r.height/2); // -1 arriba … 1 abajo
        p=Math.max(-1,Math.min(1,p));
        var holgura=(r.width*f._ratio-r.height)/2;      // lo que sobra arriba y abajo
        f._img.style.setProperty('--py',(p*holgura).toFixed(1)+'px');
      });
    }
    function pedir(){ if(!ticking){ticking=true;requestAnimationFrame(parallax);} }
    window.addEventListener('scroll',pedir,{passive:true});
    window.addEventListener('resize',pedir);
    parallax();
  }

  up.addEventListener('click',function(){window.scrollTo({top:0});});
})();
</script>
</body>
</html>
