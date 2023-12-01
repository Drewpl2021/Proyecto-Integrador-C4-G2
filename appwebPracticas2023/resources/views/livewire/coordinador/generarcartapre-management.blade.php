<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carta de Presentacion</title>
    <style>
        body {
            margin-top: 50px;
            /* Ajusta este valor según tus necesidades */
            margin-left: 50px;
            margin-right: 50px;
            margin-bottom: 50px;
            font-size: 14px;
            text-align: justify;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>

<body>

    <img src='images/logo.png' style="width: 200px;" alt="Descripción de la imagen"><br>
    <br><br>
    <p><i><u>FORMATO FP02; Carta de presentacion, firmada por el Coordinador de la Facultad de Ingeniria y
                Arquitectura</u></i></p><br>
    <p style="text-align: right;margin-bottom: 30px;">Puno, {{ strftime('%d de %B del %Y') }}.</p>
    <p style="margin-bottom: 10px;"><u> Oficio 001 -{{ date('Y') }}/FIA-UPeU</u></p>
    <p style="margin-bottom: 0;">Señor:</p>
    <p style="margin-top: 0; margin-bottom: 0;">{{ $solicitarcarta->sede->representante }}</p>
    <p style="margin-top: 0;">{{ $solicitarcarta->sede->cargo }}</p>
    <p>Presente.-</p>
    <p>De mi consideración:</p>
    <p style="text-indent: 50px;">Por medio del presente, es grato dirigirme a Usted a fin de saludarlo muy cordialmente
        a nombre de la
        Facultad de Ingeniería de la Universidad Peruana Unión, con RUC: 10239845792, con direccion en la Carretera
        Salida a Arequipa Km. 6
        Chullunquiani, Av. Héroes de la Guerra del Pacífico, Distrito Juliaca Provincia de San Román departamento de
        Puno y a la vez presentarle
        al (a la) Sr. (Srta.) <strong>{{ $solicitarcarta->user->name }}</strong>, alumno(a) del VI ciclo de la Escuela
        de Ingeniería de Sistemas de esta
        Universidad </p>

    <p style="text-indent: 50px;">El (La) Sr. (Srta.) {{ $solicitarcarta->user->name }}, desea realizar Prácticas Pre
        Profesionales, en este
        sentido recurro a Usted a fin de solicitarle un espacio en su representada y las facilidades necesarias para que
        realice dichas prácticas;
        dentro del marco legal establecido por la modalidad formativa laboral según lo sipuesto en la Ley sobre
        Modalidades Formativas Laborales, Ley
        N° 28518.</p>

    <p style="text-indent: 50px;">En el caso de ser aceptada la práctica, sírvase indicar en el documento pertinente el
        nombre del Jefe Inmediato
        y el horario de permanencia del practicante.</p>

    <p style="text-indent: 50px;">Así mismo hacemos de su conocimiento que nuestro(a) alumno(a) deberá asumir su labor
        según el horario de trabajo
        de la institución, cumpliendo 30 horas semanales, durante un perioso mínimo de 03 meses, las mismas que serán
        monitoreadas por docentes que cumplen
        la función de asesoria y supervisión, los cuales son asignados por nuestra institución.</p>

    <p style="text-indent: 50px;">Seguro de contar con su apoyo, aprovecho la oportunidad de expresarle las muestras de
        mi especial consideración
        y estima.</p>

    <p style="text-indent: 50px;margin-bottom: 40px;">Atentamente,</p><br><br>

    <img src='images/firma.png'
        style="width: 200px; margin-top: 15px; position: absolute; left: 50%;  transform: translate(-50%, -50%);"
        alt="Firma Coordinador">
    <p style="text-align: center; margin-bottom: 0;  margin-top: 0;">
        Ing................................................................................</p>
    </div>
    <p style="text-align: center; margin-bottom: 0; margin-top: 0;"><strong>Coordinador</strong></p>
    <p style="text-align: center; margin-top: 0;">FACULTAD DE INGENIRÍA Y ARQUITECTURA</p>


</body>

</html>
