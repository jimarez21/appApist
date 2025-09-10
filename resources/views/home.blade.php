<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
</head>
<body class="bg-black text-amber-50">

    <div class="presentacion flex flex-row basis-full px-12">
        <div class="cetificacion bg-azul-apist basis-3/5 px-12">
            <h1 class="text-8x1 md:text-3xl font-monaco font-bold text-center text-black tracking-tighter py-8">CERTIFICACIÓN</h1>
            <img src="https://ec1191.my.canva.site/_assets/media/96de5a81462e99c985893cde78bb4d53.jpg" alt="Product screenshot" class="aspect-4/3 pb-8"/>
        </div>
        <div class="educacion basis-2/5 grid grid-cols-7 gap-2 pt-8">
            <img src="/storage/logo_sep.jpg" alt="" class="text-center col-span-5 col-start-2 pt-12">
            <h2 class="font-sans text-4xl font-medium text-azul-apist col-span-7 text-center">EC1191: USO DE LAS NORMAS ORTOGRÁFICAS EN TEXTOS IMPRESOS/DIGITALES NIVEL INTERMEDIO.</h2>
        </div>
    </div>

    <div class="directorio py-12 px-24 grid grid-cols-3 gap-6">

        <h2 class="text-4xl font-monaco font-bold text-center col-span-3">DIRECTORIO</h2>

        <div class="red.reconocer">
            <div class="contenido box-border border-4 border-azul-apist p-8 aspect-square text-center grid grid-rows-5 grid-cols-7 rounded-lg bg-white">
                <img src="/storage/logo_conocer.jpeg" alt="" class="col-span-5 col-start-2 bg-white">
                <a href="https://conocer.gob.mx/" class="rounded-md bg-azul-apist px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-azul-apist-hover focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 col-span-3 col-start-3 row-start-5 h-1/2 place-self-center">CONOCER</a>
            </div>
        </div>
        <div class="apist">
            <div class="contenido box-border border-4 border-azul-apist p-8 aspect-square text-center grid grid-rows-5 grid-cols-7 rounded-lg bg-white">
                <img src="/storage/logo_apist.jpeg" alt="" class="col-span-5 col-start-2 bg-white">
                <a href="https://apist.mx/" class="rounded-md bg-azul-apist px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-azul-apist-hover focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 col-span-5 col-start-2 row-start-5 h-auto place-self-center">INSTITUTO DE CAPACITACIÓN TECNOLÓGICA APIS</a>
            </div>
        </div>
        <div class="icem">
            <div class="contenido box-border border-4 border-azul-apist p-8 aspect-square text-center grid grid-rows-5 grid-cols-7 rounded-lg bg-white">
                <img src="/storage/logo_icem.jpeg" alt="" class="col-span-5 col-start-2 bg-white">
                <a href="https://icemexico.com/" class="rounded-md bg-azul-apist px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-azul-apist-hover focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 col-span-3 col-start-3 row-start-5 h-auto place-self-center">ICEMéxico</a>
            </div>
        </div>

    </div>
    
    <div class="bienvenida px-14">
        <div class="bienvenida-box flex flex-row basis-full gap-12">
            <div class=" basis-1/3">
                <img src="https://ec1191.my.canva.site/_assets/media/fcf76a3a73a9aa0cd3771c89cf787aa7.jpg" alt="">
            </div>
            <div class="basis-2/3 text-2xl leading-11 px-6">
                <h2 class="font-monaco text-center text-3xl leading-10 font-bold py-8">BIENVENIDA/O AL MANUAL DE PARTICIPANTE</h2>
                <p class="text-justify">Este manual ha sido diseñado como parte de la capacitación en el estandar EC1191 "Uso de las normas ortograficas en textos impresos/digitales (nivel intermedio)", avalado por el CONOCER. Su objetivo principal es fortalecer tus habilidades en la aplacación correcta de las reglas ortografíacas, permitiendote producir textos claros, precisos y profesionales en cualquier ámbito labpral o académico.</p>
                <p class="text-justify">La orotografía no es solo una cuestión de corrección, sino también de credibilidad y comunicación efectiva. Un texto bien escrito refleja atención al detalle y respeto por el lector. A través de este manual,trabajarás en los aspectos más desafiantes de la ortografía del español, desde e uso adecuado de letras y tildes hasta la escritura de las palabras homófonas y la aplicación de mayúculas.</p>
            </div>
        </div>
        <div class="bienvenida box flex flex-row basis-full px-14 gap-12">
            <div class="contenido basis-2/3 text-2xl leading-10">
                <h2 class="font-monaco text-center text-3xl font-bold py-8 text-azul-apist-hover">"ESTRUCTURA DEL MANUAL".</h2>
                <p>El contenido se ha organizado en seis módulos prácticos, cada uno enfocado en un tema clave:</p>
                <ul class="list-inside list-decimal px-10">
                    <li>Identificación de errores ortográficos: Aprenderás a reconocer y corregir fallos comunes en textos escritos.</li>
                    <li>Nomras de uso de letras: Dominarás las reglas de las letras conflictivas ( B/V, G/J, C/S/Z).</li>
                    <li>Reglas de acentucaión: Repasarás las normas de tildación en palabras agudas, graves y esdrújulas.</li>
                    <li>Escritura de palabras juntas o separadas: Diferenciarás casos como "sino" vs "si no" y/o "aparte" vs "a parte".</li>
                    <li>Escritura de homófonos: Aclararás dudas con palabras que sean igual pero se escriben difernte(ej. "haya" vs "halla").</li>
                    <li>Uso de mayúsculas: Aplícarás correctamente las mayúsculas en nombres propios, títulos y después de puntos.</li>
                </ul>
            </div>
            <div class="basis-1/3">
                <img src="https://ec1191.my.canva.site/_assets/media/ba72ac6bf8875cb8a052283c7a38ba5f.jpg" alt="">
            </div>
        </div>
    </div>
    
    <div>
        <h2>¿COMO APROVECHAR ESTE MANUAL?</h2>
        <div class="container">
            <div class="cuadro">
                <p>SIGUE EL ORDEN DE LOS MÓDULOS, YA QUE CADA UNO CONSTRUYE SOBRE LO APRENDIDO ANTERIORMENTE.</p>
            </div>
            <div class="cuadro">
                <p>REALIZA TODOS LOS EJERCICIOS, PUES LA PRÁCTICA ES CLAVE PARA INTERNALIZAR LAS REGLAS.</p>
            </div>
            <div class="cuadro">
                <p>TOMA NOTAS EN LOS ESPACIOS DESIGNADOS Y CONSULTA LAS RESPUESTAS AL FINAL PARA AUTEVALUARTE.</p>
            </div>
        </div>
    </div>
    
    <div class="menu">
        <div class="contenedor">
            <p>MÓDULO 1: IDENTIFICACIÓN DE ERRORES ORTOGRÁFICOS</p>
        </div>
        <div class="contenedor">
            <p>MÓDULO 2: NORMAS DE USO DE LETRAS</p>
        </div>
        <div class="contenedor">
            <p>MÓDULO 3: REGLAS DE ACENTUCACIÓN</p>
        </div>
        <div class="contenedor">
            <p>MÓDULO 4: ESCRITURAS CORRECTA DE PALABRAS JUNTAS O SEPARADAS</p>
        </div>
        <div class="contenedor">
            <p>MÓDULO 5: ESCRITURAS DE HOMÓFONOS</p>
        </div>
        <div class="contenedor">
            <p>MÓDULO 6: USO DE MAYÚSCULAS</p>
        </div>
    </div>
</body>
<footer>
    <img src="" alt="">
    <div class="pie-pagina">
        <p>¿SUGERENCIAS?</p>
        <p>¿PREUNTAS?</p>
        <div class="menu-sesion">
            <input type="button" value="CREAR USUARIO">
            <input type="button" value="INGRESAR">
        </div>
    </div>
</footer>
</html>