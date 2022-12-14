<?php

//F:\ArchivosGlobales\wamp\www\Proyectos\ManoNegra\AppWebApiLunar\app\ajax\uf.php;
echo "Metodo HTTP: ".$_SERVER['REQUEST_METHOD'];
//RECIBE
//switch($_SERVER)

?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <!--
This HTML was auto-generated from MATLAB code.
To make changes, update the MATLAB code and republish this document.
      --><title>Example</title><meta name="generator" content="MATLAB 9.8"><link rel="schema.DC" href="http://purl.org/dc/elements/1.1/"><meta name="DC.date" content="2020-05-25"><meta name="DC.source" content="Example.m"><style type="text/css">
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td{margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}:focus{outine:0}ins{text-decoration:none}del{text-decoration:line-through}table{border-collapse:collapse;border-spacing:0}

html { min-height:100%; margin-bottom:1px; }
html body { height:100%; margin:0px; font-family:Arial, Helvetica, sans-serif; font-size:10px; color:#000; line-height:140%; background:#fff none; overflow-y:scroll; }
html body td { vertical-align:top; text-align:left; }

h1 { padding:0px; margin:0px 0px 25px; font-family:Arial, Helvetica, sans-serif; font-size:1.5em; color:#d55000; line-height:100%; font-weight:normal; }
h2 { padding:0px; margin:0px 0px 8px; font-family:Arial, Helvetica, sans-serif; font-size:1.2em; color:#000; font-weight:bold; line-height:140%; border-bottom:1px solid #d6d4d4; display:block; }
h3 { padding:0px; margin:0px 0px 5px; font-family:Arial, Helvetica, sans-serif; font-size:1.1em; color:#000; font-weight:bold; line-height:140%; }

a { color:#005fce; text-decoration:none; }
a:hover { color:#005fce; text-decoration:underline; }
a:visited { color:#004aa0; text-decoration:none; }

p { padding:0px; margin:0px 0px 20px; }
img { padding:0px; margin:0px 0px 20px; border:none; }
p img, pre img, tt img, li img, h1 img, h2 img { margin-bottom:0px; }

ul { padding:0px; margin:0px 0px 20px 23px; list-style:square; }
ul li { padding:0px; margin:0px 0px 7px 0px; }
ul li ul { padding:5px 0px 0px; margin:0px 0px 7px 23px; }
ul li ol li { list-style:decimal; }
ol { padding:0px; margin:0px 0px 20px 0px; list-style:decimal; }
ol li { padding:0px; margin:0px 0px 7px 23px; list-style-type:decimal; }
ol li ol { padding:5px 0px 0px; margin:0px 0px 7px 0px; }
ol li ol li { list-style-type:lower-alpha; }
ol li ul { padding-top:7px; }
ol li ul li { list-style:square; }

.content { font-size:1.2em; line-height:140%; padding: 20px; }

pre, code { font-size:12px; }
tt { font-size: 1.2em; }
pre { margin:0px 0px 20px; }
pre.codeinput { padding:10px; border:1px solid #d3d3d3; background:#f7f7f7; }
pre.codeoutput { padding:10px 11px; margin:0px 0px 20px; color:#4c4c4c; }
pre.error { color:red; }

@media print { pre.codeinput, pre.codeoutput { word-wrap:break-word; width:100%; } }

span.keyword { color:#0000FF }
span.comment { color:#228B22 }
span.string { color:#A020F0 }
span.untermstring { color:#B20000 }
span.syscmd { color:#B28C00 }
span.typesection { color:#A0522D }

.footer { width:auto; padding:10px 0px; margin:25px 0px 0px; border-top:1px dotted #878787; font-size:0.8em; line-height:140%; font-style:italic; color:#878787; text-align:left; float:none; }
.footer p { margin:0px; }
.footer a { color:#878787; }
.footer a:hover { color:#878787; text-decoration:underline; }
.footer a:visited { color:#878787; }

table th { padding:7px 5px; text-align:left; vertical-align:middle; border: 1px solid #d6d4d4; font-weight:bold; }
table td { padding:7px 5px; text-align:left; vertical-align:top; border:1px solid #d6d4d4; }





  </style></head><body><div class="content"><pre class="codeinput"><span class="comment">% Extraccion de los Indicadores disponibles a solicitar desde la API,</span>
<span class="comment">% como su rango de tiempo disponible.</span>
doc(Indicadores)
<span class="comment">% Inicializando la clase sin ninguna propiedad, de manera</span>
<span class="comment">% predeterminada el cliente tiene un tiempo de espera maximo de 60</span>
<span class="comment">% segundos</span>
rest_client = Indicadores();

<span class="comment">% Alternativamente se puede definir de la siguiente manera</span>
rest_client = Indicadores(45); <span class="comment">% 45 segundos de espera maxima.</span>

<span class="comment">% Desplegar las propiedades de la clase</span>
rest_client.options
<span class="comment">% Solicitar los indicadores disponibles para la api</span>
rest_client.metadata()
<span class="comment">% Snapshot con todos los indicadores disponibles con los datos m&aacute;s recientes</span>
rest_client.get_data()
<span class="comment">% valor de la UF en los &uacute;ltimos 30 d&iacute;as.</span>
rest_client.get_data(<span class="string">'indicador'</span>, <span class="string">'uf'</span>)
<span class="comment">% valores del Indice de valor promedio para el d&iacute;a 24 de Octubre de 1991</span>
rest_client.get_data(<span class="string">'indicador'</span>, <span class="string">'ivp'</span>, <span class="string">'fecha'</span>, <span class="string">'24-10-1991'</span>)
<span class="comment">% ver un resumen de la solicitud anterior</span>
summary(ans)
  clear;clc;
  <span class="comment">% Inicializando la clase</span>
  rest_client = Indicadores();

  <span class="comment">% Solicitando los datos para cada dia a la API</span>
  euro = rest_client.get_data(<span class="string">'indicador'</span>, <span class="string">'euro'</span>, <span class="string">'fecha'</span>, <span class="string">'2019'</span>);
  dolar = rest_client.get_data(<span class="string">'indicador'</span>, <span class="string">'dolar'</span>, <span class="string">'fecha'</span>, <span class="string">'2019'</span>);

  <span class="comment">% Graficando su comportamiento</span>
  plot(euro.valor)
  hold <span class="string">on</span>
  plot(dolar.valor)
  legend(<span class="string">'Euro'</span>, <span class="string">'Dolar'</span>)
  title(<span class="string">'Valor del Euro y del Dolar en pesos Chilenos'</span>)

  sprintf(<span class="string">'Ambos precios poseen una correlacion de %.2f'</span>, corr(euro.valor, dolar.valor))
</pre><pre class="codeoutput">
ans = 

  weboptions with properties:

      CharacterEncoding: 'auto'
              UserAgent: 'MATLAB 9.8.0.1380330 (R2020a) Update 2'
                Timeout: 45
               Username: ''
               Password: ''
                KeyName: ''
               KeyValue: ''
            ContentType: 'json'
          ContentReader: []
              MediaType: 'application/json'
          RequestMethod: 'get'
            ArrayFormat: 'json'
           HeaderFields: {2&times;2 cell}
    CertificateFilename: 'default'


ans =

  12&times;2 table

                    Nombre                                   Rango              
    _______________________________________    _________________________________

    "Unidad de fomento (UF)"                   " Valores desde 1977 hasta hoy. "
    "Libra de Cobre"                           " Valores desde 2012 hasta hoy. "
    "Tasa de desempleo"                        " Valores desde 2009 hasta hoy. "
    "Euro"                                     " Valores desde 1999 hasta hoy. "
    "Imacec"                                   " Valores desde 1997 hasta hoy. "
    "D&oacute;lar observado"                          " Valores desde 1984 hasta hoy. "
    "Tasa Pol&iacute;tica Monetaria (TPM)"            " Valores desde 2001 hasta hoy. "
    "Indice de valor promedio (IVP)"           " Valores desde 1990 hasta hoy. "
    "Indice de Precios al Consumidor (IPC)"    " Valores desde 1928 hasta hoy. "
    "D&oacute;lar acuerdo"                            " Valores desde 1988 hasta hoy. "
    "Unidad Tributaria Mensual (UTM)"          " Valores desde 1990 hasta hoy. "
    "Bitcoin"                                  " Valores desde 2009 hasta hoy. "


ans =

  1&times;12 table

     uf       ivp     dolar     dolar_intercambio    euro     ipc     utm     imacec    tpm    libra_cobre    tasa_desempleo    bitcoin
    _____    _____    ______    _________________    _____    ___    _____    ______    ___    ___________    ______________    _______

    28717    29859    805.75         758.87          878.2     0     50372     -3.5     0.5       2.43             8.23         9167.3 


ans =

  31&times;2 table

      fecha       valor
    __________    _____

    2020-04-25    28676
    2020-04-26    28679
    2020-04-27    28682
    2020-04-28    28685
    2020-04-29    28688
    2020-04-30    28691
    2020-05-01    28694
    2020-05-02    28696
    2020-05-03    28699
    2020-05-04    28702
    2020-05-05    28705
    2020-05-06    28708
    2020-05-07    28711
    2020-05-08    28714
    2020-05-09    28717
    2020-05-10    28717
    2020-05-11    28717
    2020-05-12    28717
    2020-05-13    28717
    2020-05-14    28717
    2020-05-15    28717
    2020-05-16    28717
    2020-05-17    28717
    2020-05-18    28717
    2020-05-19    28717
    2020-05-20    28717
    2020-05-21    28717
    2020-05-22    28717
    2020-05-23    28717
    2020-05-24    28717
    2020-05-25    28717


ans =

  1&times;2 table

      fecha       valor 
    __________    ______

    1991-10-24    7928.4


Description:  Consulta del indicador Indice de valor promedio (IVP) con unidad de medida Pesos.
 API version 1.6.0 autor mindicador.cl, solicitud hecha 25-May-2020 13:05:34

Variables:

    fecha: 1&times;1 datetime

        Values:

            Min       1991-10-24
            Median    1991-10-24
            Max       1991-10-24

    valor: 1&times;1 double

        Values:

            Min        7928.4 
            Median     7928.4 
            Max        7928.4 


ans =

    'Ambos precios poseen una correlacion de 0.98'

</pre><img vspace="5" hspace="5" src="Example_01.png" alt=""> <p class="footer"><br><a href="https://www.mathworks.com/products/matlab/">Published with MATLAB&reg; R2020a</a><br></p></div><!--
##### SOURCE BEGIN #####
% Extraccion de los Indicadores disponibles a solicitar desde la API,
% como su rango de tiempo disponible.
doc(Indicadores)
% Inicializando la clase sin ninguna propiedad, de manera
% predeterminada el cliente tiene un tiempo de espera maximo de 60
% segundos
rest_client = Indicadores();
% Alternativamente se puede definir de la siguiente manera
rest_client = Indicadores(45); % 45 segundos de espera maxima.
% Desplegar las propiedades de la clase
rest_client.options
% Solicitar los indicadores disponibles para la api
rest_client.metadata()
% Snapshot con todos los indicadores disponibles con los datos m??s recientes
rest_client.get_data() 
% valor de la UF en los ??ltimos 30 d??as.
rest_client.get_data('indicador', 'uf') 
% valores del Indice de valor promedio para el d??a 24 de Octubre de 1991
rest_client.get_data('indicador', 'ivp', 'fecha', '24-10-1991')
% ver un resumen de la solicitud anterior
summary(ans)
  clear;clc;
  % Inicializando la clase
  rest_client = Indicadores();
  % Solicitando los datos para cada dia a la API
  euro = rest_client.get_data('indicador', 'euro', 'fecha', '2019');
  dolar = rest_client.get_data('indicador', 'dolar', 'fecha', '2019');
  % Graficando su comportamiento
  plot(euro.valor)
  hold on
  plot(dolar.valor)
  legend('Euro', 'Dolar')
  title('Valor del Euro y del Dolar en pesos Chilenos')
  sprintf('Ambos precios poseen una correlacion de %.2f', corr(euro.valor, dolar.valor))
##### SOURCE END #####
--></body></html>
Footer
?? 2022 GitHub, Inc.
Footer navigation

    Terms
    Privacy
    Security
    Status
    Docs
    Contact GitHub
    Pricing
    API
    Training
    Blog
    About

