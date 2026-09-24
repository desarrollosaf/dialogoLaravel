<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <meta property="og:title" content="Dialogo | Leyes con enfoque humano, sello de la LXII Legislatura">
    <meta property="og:image" content="{{asset('assets/leyesHumano/Cover.png')}}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <link  href="{{asset("assets/home/images/Favicon.png")}}" rel="shortcut icon" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{asset('assets/leyesHumano/support.js')}}"></script>
</head>
<body>
{{--<x-dc>--}}
    <helmet>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Anton&amp;family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
        <style>
            html, body { margin: 0; padding: 0; width: 100%; min-height: 100%; }
            html {
                background-color: #F0DDBB;
                background-image: url('{{asset('assets/leyesHumano/uploads/backgroud_segundo-informe.webp')}}');
                background-size: 1920px auto;
                background-position: center top;
                background-repeat: repeat;
                background-attachment: fixed;
            }
            @media (max-width: 1024px) {
                html { background-size: 1024px auto; }
            }
            @media (max-width: 700px) {
                html {
                    background-size: 700px auto;
                    background-attachment: scroll;
                    background-repeat: repeat;
                }
            }
            a { color: #83754B; }
            a:hover { color: #6B5F3C; }
            @media (max-width: 760px) {
                p { text-align: left !important; }
                [data-grid] { grid-template-columns: repeat(2, minmax(0, 1fr)) !important; }
            }
        </style>
    </helmet>
    <article lang="es" style="background:transparent;font-family:'Jost',sans-serif;color:#221F1A;overflow-x:hidden">

        <nav style="width:100%;height:74px;background:#000000;display:flex;align-items:center;justify-content:center">
            <a href="https://dialogo.congresoedomex.gob.mx/" target="_blank" rel="noopener" style="display:flex;align-items:center;justify-content:center;padding:8px 16px" aria-label="Ir a Diálogo, Congreso del Estado de México">
                <img src="{{asset('assets/leyesHumano/uploads/logo-dialogo-1.svg')}}" alt="Logo de Diálogo, Congreso del Estado de México" style="display:block;height:34px;width:auto">
            </a>
        </nav>

        <div style="width:100%;height:56px;background:#83754B"></div>

        <header style="max-width:1100px;margin:0 auto;padding:54px 24px 30px">
            <h1 style="font-family:'Anton',sans-serif;font-weight:400;color:#83754B;text-align:center;font-size:clamp(34px,5vw,64px);line-height:1.08;letter-spacing:0.2px;margin:0 0 26px;text-wrap:pretty">Leyes con enfoque humano, sello de la LXII Legislatura</h1>
            <p style="font-family:'Jost',sans-serif;font-weight:600;font-size:clamp(16px,1.5vw,21px);line-height:1.6;color:#6E6A5B;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0">En su segundo año de ejercicio constitucional, la LXII Legislatura del Estado de México logró la aprobación de nuevas leyes, reformas y acuerdos desde una perspectiva de justicia social, lo cual ha permitido atender deudas con sectores históricamente marginados y dotar de condiciones a las instituciones para que cumplan sus responsabilidades en función del bienestar colectivo.</p>
        </header>

        <div style="width:100%;background:#83754B;padding:30px 0">
            <div style="max-width:1100px;margin:0 auto;padding:0 24px">
                <p style="font-family:'Jost',sans-serif;font-weight:600;font-size:clamp(16px,1.5vw,21px);line-height:1.6;color:#FFFFFF;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0">Es así que el enfoque humano ha caracterizado el trabajo parlamentario y, con ese filtro que pone a las personas en el centro de la agenda, se logró el reconocimiento, ampliación y defensa de los derechos de mujeres, menores, indígenas, personas de la diversidad sexogenérica, migrantes y personas adultas mayores.</p>
            </div>
        </div>

        <section data-reveal="1" style="max-width:1100px;margin:0 auto;padding:0 24px;opacity:0;transform:translateY(18px);transition:opacity .7s ease,transform .7s ease">
            <div data-grid="mosaico" style="display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:0;margin-top:34px">
                <div style="aspect-ratio:1/1.15;background:#CCB26E;overflow:hidden"><img src="{{asset('assets/leyesHumano/uploads/ilustraciones_blog/01-mujeres.webp')}}" alt="Mujer de cabello azul con el brazo en la cintura" style="width:100%;height:100%;object-fit:cover;object-position:88% 30%;display:block"></div>
                <div style="aspect-ratio:1/1.15;background:#9A9A9A;overflow:hidden"><img src="{{asset('assets/leyesHumano/uploads/ilustraciones_blog/02-nino-comiendo.webp')}}" alt="Niño comiendo una ensalada con un vaso de agua" style="width:100%;height:100%;object-fit:cover;object-position:50% 35%;display:block"></div>
                <div style="aspect-ratio:1/1.15;background:#CCB26E;overflow:hidden"><img src="{{asset('assets/leyesHumano/uploads/ilustraciones_blog/04-mujer-indigena.webp')}}" alt="Mujer indígena con rebozo y vestido rosa" style="width:100%;height:100%;object-fit:cover;object-position:50% 8%;display:block"></div>
                <div style="aspect-ratio:1/1.15;background:#9A9A9A;overflow:hidden"><img src="{{asset('assets/leyesHumano/uploads/ilustraciones_blog/05-persona-diversidad.webp')}}" alt="Persona de cabello arcoíris con audífonos rojos" style="width:100%;height:100%;object-fit:cover;object-position:35% 18%;display:block"></div>
                <div style="aspect-ratio:1/1.15;background:#9A9A9A;overflow:hidden"><img src="{{asset('assets/leyesHumano/uploads/ilustraciones_blog/07-adultos-mayores.webp')}}" alt="Persona adulta mayor empujando la silla de ruedas de un hombre mayor" style="width:100%;height:100%;object-fit:cover;object-position:50% 45%;display:block"></div>
                <div style="aspect-ratio:1/1.15;background:#CCB26E;overflow:hidden"><img src="{{asset('assets/leyesHumano/uploads/ilustraciones_blog/08-cuidadora-muletas.webp')}}" alt="Cuidadora acompañando a una niña que camina con muletas" style="width:100%;height:100%;object-fit:cover;object-position:50% 40%;display:block"></div>
                <div style="aspect-ratio:1/1.15;background:#9A9A9A;overflow:hidden"><img src="{{asset('assets/leyesHumano/uploads/ilustraciones_blog/09-deportista-pista.webp')}}" alt="Deportista de espaldas en una pista de atletismo" style="width:100%;height:100%;object-fit:cover;object-position:50% 40%;display:block"></div>
                <div style="aspect-ratio:1/1.15;background:#9A9A9A;overflow:hidden"><img src="{{asset('assets/leyesHumano/uploads/ilustraciones_blog/10-mujer-justicia.webp')}}" alt="Mujer sentada abrazando sus rodillas, en escala de grises" style="width:100%;height:100%;object-fit:cover;object-position:50% 35%;display:block"></div>
            </div>
            <div style="display:flex;flex-wrap:wrap;gap:12px;justify-content:space-between;padding:16px 4px 14px">
                <p style="font-family:'Jost',sans-serif;font-size:14px;font-weight:500;color:#3A362C;margin:0"><span style="font-family:'Anton',sans-serif;color:#83754B;letter-spacing:.3px">Por:</span> Guillermo David Garduño García</p>
                <p style="font-family:'Jost',sans-serif;font-size:14px;font-weight:500;color:#3A362C;margin:0"><span style="font-family:'Anton',sans-serif;color:#83754B;letter-spacing:.3px">Diseño:</span> Erwin Ritschl Galeazzi</p>
            </div>
            <div style="height:3px;background:#83754B;width:100%"></div>
        </section>

        <section data-reveal="1" style="opacity:0;transform:translateY(18px);transition:opacity .7s ease,transform .7s ease">
            <h2 style="font-family:'Anton',sans-serif;font-weight:400;color:#83754B;text-align:center;font-size:clamp(28px,4vw,52px);line-height:1.1;margin:44px auto 16px;max-width:1100px;padding:0 24px;text-wrap:pretty">El segundo año legislativo en números</h2>
            <div style="width:100%;background:#83754B;padding:10px 0;margin-bottom:34px">
                <p style="font-family:'Jost',sans-serif;font-weight:700;font-size:clamp(17px,1.8vw,24px);color:#FFFFFF;text-align:center;margin:0;padding:0 24px">(5 de septiembre de 2025 al 4 de septiembre del 2026):</p>
            </div>
            <div style="max-width:1100px;margin:0 auto;padding:0 24px 40px">
                <div data-grid="cifras" style="border:3px solid #CCB26E;padding:10px;display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:10px">

                    <div style="background:#F5EBDC;padding:26px 16px 22px;display:flex;flex-direction:column;align-items:center;justify-content:flex-start;gap:10px;min-height:210px">
                        <svg viewBox="0 0 48 48" width="52" height="52" fill="none" stroke="#3A362C" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M24 8v8M14 40h20M8 40h32M12 26h24M16 26c0-4 3.5-7 8-7s8 3 8 7M12 40l4-14M36 40l-4-14"></path></svg>
                        <div style="font-family:'Jost',sans-serif;font-weight:600;font-size:46px;line-height:1;color:#3A362C" data-count="46">46</div>
                        <div style="font-family:'Jost',sans-serif;font-weight:500;font-size:17px;line-height:1.25;color:#3A362C;text-align:center">sesiones plenarias</div>
                    </div>

                    <div style="background:#8B7D66;padding:26px 16px 22px;display:flex;flex-direction:column;align-items:center;justify-content:flex-start;gap:10px;min-height:210px">
                        <svg viewBox="0 0 48 48" width="52" height="52" fill="none" stroke="#FFFFFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="16" cy="13" r="3"></circle><circle cx="24" cy="13" r="3"></circle><circle cx="32" cy="13" r="3"></circle><path d="M10 20h28v6H10zM12 26v10M36 26v10M8 36h32"></path></svg>
                        <div style="font-family:'Jost',sans-serif;font-weight:600;font-size:46px;line-height:1;color:#FFFFFF" data-count="11">11</div>
                        <div style="font-family:'Jost',sans-serif;font-weight:500;font-size:17px;line-height:1.25;color:#FFFFFF;text-align:center">sesiones de la Diputación Permanente</div>
                    </div>

                    <div style="background:#F5EBDC;padding:26px 16px 22px;display:flex;flex-direction:column;align-items:center;justify-content:flex-start;gap:10px;min-height:210px">
                        <svg viewBox="0 0 48 48" width="52" height="52" fill="none" stroke="#3A362C" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 10h20v28H14zM19 10V7h10v3"></path><path d="M18 20l2 2 4-4M18 29l2 2 4-4"></path><path d="M32 16l6 6-8 8-6-6z"></path></svg>
                        <div style="font-family:'Jost',sans-serif;font-weight:600;font-size:46px;line-height:1;color:#3A362C" data-count="180">180</div>
                        <div style="font-family:'Jost',sans-serif;font-weight:500;font-size:17px;line-height:1.25;color:#3A362C;text-align:center">reuniones de comisiones</div>
                    </div>

                    <div style="background:#8B7D66;padding:26px 16px 22px;display:flex;flex-direction:column;align-items:center;justify-content:flex-start;gap:10px;min-height:210px">
                        <svg viewBox="0 0 48 48" width="52" height="52" fill="none" stroke="#FFFFFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 8h10l8 8v24H22z"></path><path d="M32 8v8h8"></path><circle cx="15" cy="17" r="8"></circle><path d="M11.5 17l2.5 2.5L19 14"></path></svg>
                        <div style="font-family:'Jost',sans-serif;font-weight:600;font-size:46px;line-height:1;color:#FFFFFF" data-count="386">386</div>
                        <div style="font-family:'Jost',sans-serif;font-weight:500;font-size:17px;line-height:1.25;color:#FFFFFF;text-align:center">iniciativas aprobadas</div>
                    </div>

                    <div style="background:#8B7D66;padding:26px 16px 22px;display:flex;flex-direction:column;align-items:center;justify-content:flex-start;gap:10px;min-height:210px">
                        <svg viewBox="0 0 48 48" width="52" height="52" fill="none" stroke="#FFFFFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 40V22l8-14c2.5 0 4 2 3.5 4.5L28 18h9c2.2 0 3.8 2 3.3 4.2l-2.6 12C37.3 36.3 35.5 38 33.4 38H18z"></path><path d="M8 22h10v18H8z"></path></svg>
                        <div style="font-family:'Jost',sans-serif;font-weight:600;font-size:46px;line-height:1;color:#FFFFFF" data-count="47">47</div>
                        <div style="font-family:'Jost',sans-serif;font-weight:500;font-size:17px;line-height:1.25;color:#FFFFFF;text-align:center">puntos de acuerdo avalados</div>
                    </div>

                    <div style="background:#F5EBDC;padding:26px 16px 22px;display:flex;flex-direction:column;align-items:center;justify-content:flex-start;gap:10px;min-height:210px">
                        <svg viewBox="0 0 48 48" width="52" height="52" fill="none" stroke="#3A362C" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 8h24v32H12z"></path><path d="M20 8v14l4-3 4 3V8"></path><path d="M12 34h24"></path></svg>
                        <div style="font-family:'Jost',sans-serif;font-weight:600;font-size:46px;line-height:1;color:#3A362C" data-count="8">8</div>
                        <div style="font-family:'Jost',sans-serif;font-weight:500;font-size:17px;line-height:1.25;color:#3A362C;text-align:center">reformas constitucionales</div>
                    </div>

                    <div style="background:#8B7D66;padding:26px 16px 22px;display:flex;flex-direction:column;align-items:center;justify-content:flex-start;gap:10px;min-height:210px">
                        <svg viewBox="0 0 48 48" width="52" height="52" fill="none" stroke="#FFFFFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 24l10-10 8 8-10 10z"></path><path d="M22 12l6-6 8 8-6 6"></path><path d="M8 40h20"></path><path d="M26 26l8 8"></path></svg>
                        <div style="font-family:'Jost',sans-serif;font-weight:600;font-size:46px;line-height:1;color:#FFFFFF" data-count="9">9</div>
                        <div style="font-family:'Jost',sans-serif;font-weight:500;font-size:17px;line-height:1.25;color:#FFFFFF;text-align:center">nuevas leyes</div>
                    </div>

                    <div style="background:#F5EBDC;padding:22px 16px 20px;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:4px;min-height:210px">
                        <div style="font-family:'Jost',sans-serif;font-weight:600;font-size:44px;line-height:1;color:#3A362C" data-count="35">35</div>
                        <div style="font-family:'Jost',sans-serif;font-weight:500;font-size:17px;line-height:1.25;color:#3A362C;text-align:center">reformas a leyes secundarias y</div>
                        <div style="font-family:'Jost',sans-serif;font-weight:600;font-size:44px;line-height:1;color:#3A362C;margin-top:4px" data-count="7">7</div>
                        <div style="font-family:'Jost',sans-serif;font-weight:500;font-size:17px;line-height:1.25;color:#3A362C;text-align:center">códigos estatales</div>
                    </div>

                </div>
            </div>
        </section>

        <h2 style="font-family:'Anton',sans-serif;font-weight:400;color:#83754B;text-align:center;font-size:clamp(30px,4.4vw,56px);line-height:1.1;margin:10px auto 0;max-width:1100px;padding:0 24px 20px">Atención a grupos prioritarios</h2>

        <section data-reveal="1" style="opacity:0;transform:translateY(18px);transition:opacity .7s ease,transform .7s ease">
            <div style="width:100%;background:#83754B;padding:14px 0">
                <h2 style="font-family:'Anton',sans-serif;font-weight:400;color:#FFFFFF;text-align:center;font-size:clamp(26px,3.2vw,44px);line-height:1.15;margin:0;padding:0 24px">Mujeres</h2>
            </div>
            <div style="width:100%;background:#DDD2E3;overflow:hidden">
                <img data-reveal-img="1" src="{{asset('assets/leyesHumano/uploads/ilustraciones_blog/01-mujeres.webp')}}" alt="Cuatro mujeres de pie, con flores rosas flotando a su alrededor" style="display:block;width:100%;max-width:1100px;margin:0 auto;height:auto;opacity:0;transform:scale(1.08) translateY(24px);transition:opacity 1.1s ease,transform 1.4s cubic-bezier(.2,.7,.2,1)">
            </div>
            <div style="max-width:1100px;margin:0 auto;padding:26px 24px 10px">
                <p style="font-family:'Jost',sans-serif;font-weight:500;font-size:clamp(15px,1.15vw,18px);line-height:1.62;color:#221F1A;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0 0 18px">Para prevenir, combatir y erradicar las conductas que impiden una igualdad sustantiva y vulneran derechos fundamentales de las mujeres, la LXII Legislatura mexiquense ha fortalecido la respuesta judicial ante la violencia de género mediante la creación del Juzgado LIBRE (Libertad, Igualdad, Bienestar, Redes y Emancipación), además de definir y penalizar, así como aumentar los supuestos y sanciones por modalidades de violencia de carácter sexual, digital y familiar.</p>
                <p style="font-family:'Jost',sans-serif;font-weight:500;font-size:clamp(15px,1.15vw,18px);line-height:1.62;color:#221F1A;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0 0 18px">El Congreso mexiquense aprobó la inclusión de las niñas, adolescentes y mujeres que se encuentran en situación de ofendidos o víctimas de violencia en los programas sociales; incorporó la corresponsabilidad familiar en la convivencia matrimonial o de concubinato y reconoció el trabajo doméstico y de cuidados como aportaciones reclamables en juicios por alimentos, guarda y custodia, compensaciones y liquidación de regímenes patrimoniales.</p>
                <p style="font-family:'Jost',sans-serif;font-weight:500;font-size:clamp(15px,1.15vw,18px);line-height:1.62;color:#221F1A;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0">Además de retirar las exenciones de responsabilidad a quienes encubran a personas investigadas o vinculadas a proceso por feminicidio, se protegió, a través de programas, acciones y servicios de asistencia social, a niñas, niños y adolescentes que estén en condición de orfandad por este delito o sean dependientes de víctimas por desaparición.</p>
            </div>
        </section>

        <section data-reveal="1" style="opacity:0;transform:translateY(18px);transition:opacity .7s ease,transform .7s ease;margin-top:34px">
            <div style="width:100%;background:#83754B;padding:14px 0">
                <h2 style="font-family:'Anton',sans-serif;font-weight:400;color:#FFFFFF;text-align:center;font-size:clamp(26px,3.2vw,44px);line-height:1.15;margin:0;padding:0 24px">Niñez y juventudes</h2>
            </div>
            <div style="max-width:1100px;margin:0 auto;padding:30px 24px 10px">
                <div style="display: flex; flex-direction: row-reverse; flex-wrap: wrap; gap: 26px; align-items: center; margin-bottom: 22px">
                    <div style="flex:1 1 300px;min-width:250px;max-width:420px;background:#C9D3DE"><img src="{{asset('assets/leyesHumano/uploads/ilustraciones_blog/02-nino-comiendo.webp')}}" alt="Niño comiendo una ensalada con un vaso de agua sobre la mesa" style="display:block;width:100%;height:auto;max-height:300px;object-fit:cover"></div>
                    <p style="flex:1 1 300px;min-width:260px;font-family:'Jost',sans-serif;font-weight:500;font-size:clamp(15px,1.15vw,18px);line-height:1.62;color:#221F1A;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0">La niñez y adolescencia es otro de los grupos prioritarios en la agenda del Congreso mexiquense, por lo que se ha actualizado el marco jurídico para prevenir el abuso sexual, mediante sanciones de hasta 16 años de prisión para quien use tecnologías de la información y la comunicación con este fin o para solicitar material audiovisual con contenido explícito, además de establecer un protocolo por parte de los prestadores de servicios para detectar y prevenir delitos de explotación sexual infantil en servicios de hospedaje o alojamiento.</p>
                </div>
                <p style="font-family:'Jost',sans-serif;font-weight:500;font-size:clamp(15px,1.15vw,18px);line-height:1.62;color:#221F1A;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0 0 18px">También, para evitar la impunidad, se aprobó que la acción para exigir la reparación del daño derivado de actos de violencia sexual cometidos en contra de menores sea imprescriptible y se establecieron penas de hasta 15 años de prisión para quien obligue, procure, induzca, coaccione, solicite, gestione, oferte, ofrezca, consienta o facilite a una persona menor de edad establecer matrimonio, concubinato o cohabitación forzada.</p>
                <p style="font-family:'Jost',sans-serif;font-weight:500;font-size:clamp(15px,1.15vw,18px);line-height:1.62;color:#221F1A;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0 0 26px">Además de favorecer la conciliación entre la vida laboral, familiar y personal, la LXII Legislatura también acordó la protección de este sector en casos de emergencias o desastres, reconocer su derecho a una alimentación nutritiva, suficiente y de calidad y favorecer la incorporación de jóvenes recién egresados al sector productivo mediante una bolsa de trabajo con mecanismos específicos para este grupo.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 26px; align-items: center">
                    <div style="flex:1 1 300px;min-width:250px;max-width:420px;background:#E8D8D8"><img src="{{asset('assets/leyesHumano/uploads/ilustraciones_blog/03-futbolista-celular.webp')}}" alt="Salón de clases donde una persona mira un partido de futbol en el teléfono celular" style="display:block;width:100%;height:auto;max-height:300px;object-fit:cover"></div>
                    <p style="flex:1 1 300px;min-width:260px;font-family:'Jost',sans-serif;font-weight:500;font-size:clamp(15px,1.15vw,18px);line-height:1.62;color:#221F1A;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0">En materia educativa, resalta la regulación del uso de teléfonos celulares en la educación básica, así como la promoción, en el nivel medio superior y superior, del uso responsable, ético y gradual de la Inteligencia Artificial (IA), así como la expedición de la Ley de Fomento para la Lectura y el Libro del Estado de México para promover esta actividad, especialmente en zonas rurales y en poblaciones en situación de vulnerabilidad; generar publicaciones accesibles; contribuir a erradicar el analfabetismo; así como apoyar a personas escritoras y la edición de sus obras.</p>
                </div>
            </div>
        </section>

        <section data-reveal="1" style="opacity:0;transform:translateY(18px);transition:opacity .7s ease,transform .7s ease;margin-top:34px">
            <div style="width:100%;background:#83754B;padding:14px 0">
                <h2 style="font-family:'Anton',sans-serif;font-weight:400;color:#FFFFFF;text-align:center;font-size:clamp(26px,3.2vw,44px);line-height:1.15;margin:0;padding:0 24px">Indígenas</h2>
            </div>
            <div style="max-width:1100px;margin:0 auto;padding:30px 24px 10px;display:flex;flex-wrap:wrap;gap:30px;align-items:center">
                <div style="flex:0 1 240px;min-width:190px;max-width:260px;display:flex;justify-content:center"><img src="{{asset('assets/leyesHumano/uploads/ilustraciones_blog/04-mujer-indigena.webp')}}" alt="Mujer indígena de cuerpo completo con rebozo gris y vestido rosa" style="display:block;max-width:100%;width:auto;height:auto;max-height:560px"></div>
                <div style="flex:2 1 400px;min-width:280px">
                    <p style="font-family:'Jost',sans-serif;font-weight:500;font-size:clamp(15px,1.15vw,18px);line-height:1.62;color:#221F1A;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0 0 18px">El Congreso local aprobó reformas constitucionales para reconocer a los pueblos y comunidades indígenas y afromexicanas como sujetos de derecho público con personalidad jurídica y patrimonio propio, así como su libre determinación en el marco de la unidad nacional, además de emitir un exhorto para ampliar el Catálogo Nacional de Pueblos y Comunidades Indígenas y Afromexicana, así como verificar el cumplimiento de la obligación de los municipios de contar con una dirección de asuntos indígenas, o equivalente.</p>
                    <p style="font-family:'Jost',sans-serif;font-weight:500;font-size:clamp(15px,1.15vw,18px);line-height:1.62;color:#221F1A;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0 0 18px">También exhortó al Instituto Nacional de los Pueblos Indígenas (INPI) a realizar las acciones necesarias para registrar a los pueblos de Calixtlahuaca, Tecaxic y Tlacotepec, pertenecientes a Toluca, en el Catálogo Nacional de Pueblos y Comunidades Indígenas y Afromexicanas, así como a las y los presidentes municipales de 48 de los 125 municipios (hasta febrero de 2025) a informar sobre el cumplimiento de la obligación de contar con una dirección de asuntos indígenas, o equivalente.</p>
                    <p style="font-family:'Jost',sans-serif;font-weight:500;font-size:clamp(15px,1.15vw,18px);line-height:1.62;color:#221F1A;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0">El Pleno del Congreso mexiquense también exhortó a Claudia Regina Jiménez Valdez, encargada del despacho de la Vocalía Ejecutiva del Consejo Estatal para el Desarrollo Integral de los Pueblos Indígenas del Estado de México (Cedipiem), y a Adelfo Regino Montes, director general del INPI, a realizar las acciones necesarias con el propósito de homologar el Listado de Localidades Indígenas del Estado de México con el Catálogo Nacional de Localidades Indígenas.</p>
                </div>
            </div>
        </section>

        <section data-reveal="1" style="opacity:0;transform:translateY(18px);transition:opacity .7s ease,transform .7s ease;margin-top:34px">
            <div style="width:100%;background:#83754B;padding:14px 0">
                <h2 style="font-family:'Anton',sans-serif;font-weight:400;color:#FFFFFF;text-align:center;font-size:clamp(26px,3.2vw,44px);line-height:1.15;margin:0;padding:0 24px">Diversidad sexogenérica</h2>
            </div>
            <div style="max-width:1100px;margin:0 auto;padding:30px 24px 10px">
                <div style="display:flex;flex-direction:row-reverse;flex-wrap:wrap;gap:26px;align-items:flex-start;margin-bottom:22px">
                    <div style="flex:1 1 300px;min-width:250px;max-width:400px;display:flex;justify-content:center"><img src="{{asset('assets/leyesHumano/uploads/ilustraciones_blog/05-persona-diversidad.webp')}}" alt="Persona de cabello arcoíris con audífonos rojos, recostada en el suelo" style="display:block;max-width:100%;width:auto;height:auto;max-height:260px"></div>
                    <p style="flex:1 1 300px;min-width:260px;font-family:'Jost',sans-serif;font-weight:500;font-size:clamp(15px,1.15vw,18px);line-height:1.62;color:#221F1A;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0">Desde la instalación de la Comisión para la Defensa de Derechos de las Poblaciones LGBTTTIQ+ (Lesbianas, Gays, Bisexuales, Transgénero, Travesti, Transexuales, Intersexual, Queer y más), el 23 de octubre de 2024, el Congreso mexiquense ha avanzado en el reconocimiento de los derechos de la comunidad de la diversidad sexogenérica en materia de identidad y una vida libre de violencia, además de visibilizar el activismo a favor de esta comunidad.<br><br>Durante el segundo año legislativo, la LXII Legislatura mexiquense tipificó el transfeminicidio como delito con sanciones de hasta 93 años y cuatro meses de prisión y avaló incluir la opción de identidad ‘no binaria’ en la expedición de acta por rectificación para el reconocimiento de identidad de género.<br></p>
                </div>

            </div>
        </section>

        <section data-reveal="1" style="opacity:0;transform:translateY(18px);transition:opacity .7s ease,transform .7s ease;margin-top:34px">
            <div style="width:100%;background:#83754B;padding:14px 0">
                <h2 style="font-family:'Anton',sans-serif;font-weight:400;color:#FFFFFF;text-align:center;font-size:clamp(26px,3.2vw,44px);line-height:1.15;margin:0;padding:0 24px">Migrantes</h2>
            </div>
            <div style="max-width:1100px;margin:0 auto;padding:30px 24px 10px;display:flex;flex-wrap:wrap;gap:30px;align-items:center">
                <div style="flex:0 1 200px;min-width:170px;max-width:220px;display:flex;justify-content:center;margin-left:auto;margin-right:auto"><img src="{{asset('assets/leyesHumano/uploads/ilustraciones_blog/06-ninos-migrantes.webp')}}" alt="Dos niños de espaldas caminando, uno con un oso de peluche" style="display:block;max-width:100%;width:auto;height:auto;max-height:230px"></div>
                <p style="flex:2 1 380px;min-width:280px;font-family:'Jost',sans-serif;font-weight:500;font-size:clamp(15px,1.15vw,18px);line-height:1.62;color:#221F1A;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0">En atención a los principios de justicia y equidad, y con el propósito de reconocer los derechos y la dignidad de las personas migrantes, así como su valiosa contribución al desarrollo y la cohesión social, se aprobó que este sector de la población pueda acceder a los programas sociales implementados en la entidad.</p>
            </div>
        </section>

        <section data-reveal="1" style="opacity:0;transform:translateY(18px);transition:opacity .7s ease,transform .7s ease;margin-top:34px">
            <div style="width:100%;background:#83754B;padding:14px 0">
                <h2 style="font-family:'Anton',sans-serif;font-weight:400;color:#FFFFFF;text-align:center;font-size:clamp(26px,3.2vw,44px);line-height:1.15;margin:0;padding:0 24px">Personas adultas mayores</h2>
            </div>
            <div style="max-width:1100px;margin:0 auto;padding:30px 24px 10px;display:flex;flex-direction:row-reverse;flex-wrap:wrap;gap:26px;align-items:center">
                <div style="flex:1 1 280px;min-width:240px;max-width:380px;display:flex;justify-content:center"><img src="{{asset('assets/leyesHumano/uploads/ilustraciones_blog/07-adultos-mayores.webp')}}" alt="Mujer mayor empujando la silla de ruedas de un hombre mayor" style="display:block;max-width:100%;width:auto;height:auto;max-height:250px"></div>
                <p style="flex:1 1 300px;min-width:260px;font-family:'Jost',sans-serif;font-weight:500;font-size:clamp(15px,1.15vw,18px);line-height:1.62;color:#221F1A;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0">Para garantizar los derechos de las 2.3 millones de personas adultas mayores en la entidad, el Congreso mexiquense avaló que este sector poblacional reciba atención preferente, digna y expedita en todos los trámites, servicios y procedimientos que presten las dependencias y entidades de la administración pública estatal, los ayuntamientos y sus organismos auxiliares.</p>
            </div>
        </section>

        <section data-reveal="1" style="opacity:0;transform:translateY(18px);transition:opacity .7s ease,transform .7s ease;margin-top:34px">
            <div style="width:100%;background:#83754B;padding:14px 0">
                <h2 style="font-family:'Anton',sans-serif;font-weight:400;color:#FFFFFF;text-align:center;font-size:clamp(26px,3.2vw,44px);line-height:1.15;margin:0;padding:0 24px">Nueva ley de Salud con perspectiva humana</h2>
            </div>
            <div style="max-width:1100px;margin:0 auto;padding:30px 24px 10px;display:flex;flex-wrap:wrap;gap:26px;align-items:flex-start">
                <div style="flex:1 1 280px;min-width:240px;max-width:340px;display:flex;justify-content:center"><img src="{{asset('assets/leyesHumano/uploads/ilustraciones_blog/08-cuidadora-muletas.webp')}}" alt="Cuidadora ayudando a una niña que camina con muletas y la pierna vendada" style="display:block;max-width:100%;width:auto;height:auto;max-height:340px"></div>
                <div style="flex:2 1 380px;min-width:280px">
                    <p style="font-family:'Jost',sans-serif;font-weight:500;font-size:clamp(15px,1.15vw,18px);line-height:1.62;color:#221F1A;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0 0 18px">Para garantizar el derecho a la salud desde un enfoque integral e interseccional, el Congreso mexiquense aprobó una nueva ley de salud fundamentada en principios como la gratuidad en el sector público, humanismo, interés superior de la niñez, perspectiva de género, progresividad, universalidad y justicia social.</p>
                    <p style="font-family:'Jost',sans-serif;font-weight:500;font-size:clamp(15px,1.15vw,18px);line-height:1.62;color:#221F1A;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0">Este ordenamiento identifica como grupos de atención prioritaria a las personas adultas mayores; mujeres y personas gestantes; niñas, niños y adolescentes; personas con discapacidad; personas en situación de calle; integrantes de la comunidad LGBTTTIQ+ (lésbica, gay, bisexual, transgénero, travesti, transexual, intersexual, queer y más); personas migrantes; pueblos y comunidades indígenas y afromexicanas, así como víctimas de delitos o violaciones a derechos humanos.</p>
                </div>
            </div>
        </section>

        <section data-reveal="1" style="opacity:0;transform:translateY(18px);transition:opacity .7s ease,transform .7s ease;margin-top:34px">
            <div style="width:100%;background:#83754B;padding:14px 0">
                <h2 style="font-family:'Anton',sans-serif;font-weight:400;color:#FFFFFF;text-align:center;font-size:clamp(26px,3.2vw,44px);line-height:1.15;margin:0;padding:0 24px">Deporte</h2>
            </div>
            <div style="max-width:1100px;margin:0 auto;padding:30px 24px 10px">
                <div style="display: flex; flex-direction: row-reverse; flex-wrap: wrap; gap: 26px; align-items: center; margin-bottom: 22px">
                    <div style="flex:1 1 280px;min-width:240px;max-width:360px;display:flex;justify-content:center"><img src="{{asset('assets/leyesHumano/uploads/ilustraciones_blog/09-deportista-pista.webp')}}" alt="Deportista de espaldas en una pista de atletismo frente a un edificio histórico" style="display: block; max-width: 100%; width: 182px; height: 281px; max-height: 360px"></div>
                    <div style="flex:1 1 300px;min-width:260px">
                        <p style="font-family:'Jost',sans-serif;font-weight:500;font-size:clamp(15px,1.15vw,18px);line-height:1.62;color:#221F1A;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0 0 18px">El Congreso mexiquense incorporó a la Constitución local el derecho de toda persona a la cultura y activación física, así como a la práctica del deporte, además de establecer en la legislación secundaria el derecho de las juventudes a realizar actividades recreativas y a contar con espacios adecuados que favorezcan un uso positivo y productivo de su tiempo libre.</p>
                        <p style="font-family:'Jost',sans-serif;font-weight:500;font-size:clamp(15px,1.15vw,18px);line-height:1.62;color:#221F1A;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0">Asimismo, con el objetivo de fomentar la salud, la integración social, la paz y el desarrollo de valores cívicos a través de la actividad física y el deporte, la LXII Legislatura mexiquense aprobó declarar el día 6 de cada mes como Día del Deporte en el Estado de México y el 6 de abril de cada año como Día Estatal de las y los Deportistas Mexiquenses.</p>
                    </div>
                </div>
                <p style="font-family:'Jost',sans-serif;font-weight:500;font-size:clamp(15px,1.15vw,18px);line-height:1.62;color:#221F1A;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0">Por otro lado, en virtud de que el deporte y el juego constituyen herramientas eficaces para la transformación social, al promover y consolidar los derechos humanos y una vida más saludable, se estableció que el Estado y los municipios fomenten, a través de las actividades físicas, recreativas y deportivas, actitudes solidarias, la cultura de paz, el respeto a la legalidad y la no violencia en todas sus manifestaciones.</p>
            </div>
        </section>

        <section data-reveal="1" style="opacity:0;transform:translateY(18px);transition:opacity .7s ease,transform .7s ease;margin-top:34px">
            <div style="width:100%;background:#83754B;padding:14px 0">
                <h2 style="font-family:'Anton',sans-serif;font-weight:400;color:#FFFFFF;text-align:center;font-size:clamp(26px,3.2vw,44px);line-height:1.15;margin:0;padding:0 24px">Justicia con enfoque social</h2>
            </div>
            <div style="max-width:1100px;margin:0 auto;padding:30px 24px 0;display:flex;flex-wrap:wrap;gap:26px;align-items:center">
                <div style="flex:1 1 260px;min-width:220px;max-width:320px;display:flex;justify-content:center"><img data-zoom-in="1" src="{{asset('assets/leyesHumano/uploads/ilustraciones_blog/10-mujer-justicia.webp')}}" alt="Mujer sentada abrazando sus rodillas, ilustración en escala de grises" style="display:block;max-width:100%;width:auto;height:auto;max-height:320px"></div>
                <div style="flex:2 1 380px;min-width:280px">
                    <p style="font-family:'Jost',sans-serif;font-weight:500;font-size:clamp(15px,1.15vw,18px);line-height:1.62;color:#221F1A;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0 0 18px">El Congreso mexiquense aprobó ampliar los supuestos para otorgar amnistía a mujeres acusadas o sentenciadas que no fueron juzgadas con perspectiva de género o de derechos humanos, así como a las personas en la misma condición jurídica por delitos cometidos bajo una situación de vulnerabilidad manifiesta, desventaja, asimetría o con alguna categoría sospechosa.</p>
                    <p style="font-family:'Jost',sans-serif;font-weight:500;font-size:clamp(15px,1.15vw,18px);line-height:1.62;color:#221F1A;text-align:justify;hyphens:auto;-webkit-hyphens:auto;text-wrap:pretty;margin:0">Además de crear la Comisión Legislativa de Seguimiento a los Casos de Amnistía de manera plural y con la categoría de permanente, que acordó la posibilidad de promover o solicitar el trámite para que una persona recupere su libertad y se reforzó la asesoría, orientación y defensa jurídica a las personas solicitantes por parte del Instituto de la Defensoría Pública y la Comisión de Derechos Humanos, ambas de la entidad.<br><br>Adicionalmente, se aprobó la eliminación de la prisión vitalicia del Código Penal estatal, al considerar que esta figura implica la privación perpetua de la libertad sin posibilidad de revisión ni reducción de la pena, suprime toda expectativa de reinserción social y convierte la sanción en una medida estrictamente retributiva.</p>
                </div>
            </div>
            <div style="max-width:1100px;margin:0 auto;padding:22px 24px 70px">

            </div>
        </section>

        <div style="width:100%;height:56px;background:#83754B"></div>

        <footer style="width:100%;background:#FFFFFF;display:flex;align-items:center;min-height:110px">
            <div style="width:100%;max-width:1100px;margin:0 auto;padding:20px 24px;display:flex;align-items:center">
                <img src="{{asset('assets/leyesHumano/uploads/congreso-dialogo.png')}}" alt="Logotipos del Congreso del Estado de México y Diálogo" style="display: block; height: 51px; width: auto; max-width: 100%">
            </div>
        </footer>
    </article>
{{--</x-dc>--}}
<script type="text/x-dc" data-dc-script data-props="{&quot;animarEntrada&quot;:{&quot;editor&quot;:&quot;boolean&quot;,&quot;default&quot;:true,&quot;tsType&quot;:&quot;boolean&quot;,&quot;section&quot;:&quot;Comportamiento&quot;},&quot;contarNumeros&quot;:{&quot;editor&quot;:&quot;boolean&quot;,&quot;default&quot;:true,&quot;tsType&quot;:&quot;boolean&quot;,&quot;section&quot;:&quot;Comportamiento&quot;},&quot;texturaPapel&quot;:{&quot;editor&quot;:&quot;boolean&quot;,&quot;default&quot;:true,&quot;tsType&quot;:&quot;boolean&quot;,&quot;section&quot;:&quot;Apariencia&quot;}}">
class Component extends DCLogic {
  componentDidMount() {
    const root = this.rootEl || document;
    const anim = this.props.animarEntrada ?? true;
    const count = this.props.contarNumeros ?? true;
    const textura = this.props.texturaPapel ?? true;

    if (!textura) document.body.style.backgroundImage = 'none';

    const reveals = Array.from(document.querySelectorAll('[data-reveal]'));
    const show = (el) => { el.style.opacity = '1'; el.style.transform = 'none'; };
    if (!anim || typeof IntersectionObserver === 'undefined') {
      reveals.forEach(show);
    } else {
      const io = new IntersectionObserver((entries) => {
        entries.forEach((e) => { if (e.isIntersecting) { show(e.target); io.unobserve(e.target); } });
      }, { rootMargin: '0px 0px -8% 0px', threshold: 0.05 });
      reveals.forEach((el) => io.observe(el));
      setTimeout(() => reveals.forEach(show), 4000);
    }

    const variants = [
      { from: 'scale(1.08) translateY(24px)', dur: '1.4s', ease: 'cubic-bezier(.2,.7,.2,1)' },
      { from: 'translateX(-40px)', dur: '1s', ease: 'cubic-bezier(.16,.84,.28,1)' },
      { from: 'scale(0.86)', dur: '1.1s', ease: 'cubic-bezier(.2,1.05,.3,1)' },
      { from: 'translateX(40px)', dur: '1s', ease: 'cubic-bezier(.16,.84,.28,1)' },
      { from: 'translateY(48px)', dur: '1.1s', ease: 'cubic-bezier(.16,.84,.28,1)' },
      { from: 'rotate(-3deg) scale(1.04)', dur: '1.2s', ease: 'cubic-bezier(.2,.8,.2,1)' },
      { from: 'scale(1.14)', dur: '1.5s', ease: 'cubic-bezier(.25,.75,.2,1)' },
      { from: 'translateY(-34px)', dur: '1s', ease: 'cubic-bezier(.2,.8,.2,1)' },
      { from: 'rotate(2.5deg) translateY(28px)', dur: '1.25s', ease: 'cubic-bezier(.2,.85,.25,1)' },
      { from: 'skewY(2deg) translateX(-28px)', dur: '1.1s', ease: 'cubic-bezier(.16,.84,.28,1)' },
      { from: 'scale(0.92) translateY(30px)', dur: '1.2s', ease: 'cubic-bezier(.2,.9,.25,1)' },
      { from: 'translateX(-56px) scale(1.05)', dur: '1.3s', ease: 'cubic-bezier(.2,.8,.2,1)' }
    ];
    const imgs = Array.from(document.querySelectorAll('article img:not(nav img):not(footer img)'));
    imgs.forEach((el, i) => {
      const v = el.hasAttribute('data-reveal-img')
        ? { from: 'scale(1.03)', dur: '1.8s', ease: 'ease-out' }
        : el.hasAttribute('data-zoom-in')
          ? { from: 'scale(0.72)', dur: '1.5s', ease: 'cubic-bezier(.16,.84,.28,1)' }
          : variants[i % variants.length];
      el.style.willChange = 'opacity, transform';
      el.style.transition = 'opacity ' + v.dur + ' ease, transform ' + v.dur + ' ' + v.ease;
      el.style.opacity = '0';
      el.style.transform = v.from;
    });
    const showImg = (el) => { el.style.opacity = '1'; el.style.transform = 'none'; };
    if (!anim || typeof IntersectionObserver === 'undefined') {
      imgs.forEach(showImg);
    } else {
      const ioImg = new IntersectionObserver((entries) => {
        entries.forEach((e) => { if (e.isIntersecting) { showImg(e.target); ioImg.unobserve(e.target); } });
      }, { threshold: 0.15 });
      imgs.forEach((el) => ioImg.observe(el));
      setTimeout(() => imgs.forEach(showImg), 4000);
    }

    const nums = Array.from(document.querySelectorAll('[data-count]'));
    if (count && typeof IntersectionObserver !== 'undefined') {
      const run = (el) => {
        const target = parseInt(el.getAttribute('data-count'), 10);
        const dur = 1100, t0 = performance.now();
        const step = (t) => {
          const p = Math.min(1, (t - t0) / dur);
          el.textContent = Math.round(target * (1 - Math.pow(1 - p, 3))).toString();
          if (p < 1) requestAnimationFrame(step);
        };
        el.textContent = '0';
        requestAnimationFrame(step);
      };
      const io2 = new IntersectionObserver((entries) => {
        entries.forEach((e) => { if (e.isIntersecting) { run(e.target); io2.unobserve(e.target); } });
      }, { threshold: 0.4 });
      nums.forEach((el) => io2.observe(el));
    }
  }
  renderVals() { return {}; }
}
</script>
</body>
</html>
