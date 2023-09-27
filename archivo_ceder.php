<?php
#NOMBRES DIRECTORIOS DE ALMACENAMIENTO LOCAL Y REMOTO
$CONFACTRONICA["ENVIARSII"]="1";# 1=SI 0=NO
$CONFACTRONICA["ALMACENLOCAL"]="../home/784637905";# NOMBRE DE LA CARPETA LOCAL DE ALMACENAMIENTO
$CONFACTRONICA["ALMACENREMOTO"]="../home/784637905";# NOMBRE DE LA CARPETA REMOTA DE ALMACENAMIENTO
$CONFACTRONICA["ARCHIVOPLANO"]="datos_cesion_dte.txt";# NOMBRE DEL ARCHIVO PLANO QUE ESTA ENVIANDO
# 
# 
# 
#NOMBRE DEL ARCHIVO XML A CEDER (SOLO EL DTE FIRMADO SIN SOBRE)
$CONFACTRONICA["DTEFIRMADO"]="FOLIO13179TIPO46_DTEFIRMADO.xml";
# 
# 
# 
#NOMBRE DE LOS ARCHIVOS DE SALIDA
$CONFACTRONICA["TRACKID"]="AEC_76238969K_TIPO46_FOLIO13179_CESION_TRACKID_RUT.xml";
$CONFACTRONICA["DTECEDIDOPORFIRMAR"]="AEC_76238969K_TIPO46_FOLIO13179_DTECEDIDOPORFIRMAR.xml";
$CONFACTRONICA["DTECEDIDOFIRMADO"]="AEC_76238969K_TIPO46_FOLIO13179_DTECEDIDOFIRMADO.xml";
$CONFACTRONICA["CESIONPORFIRMAR"]="AEC_76238969K_TIPO46_FOLIO13179_CESIONPORFIRMAR.xml";
$CONFACTRONICA["CESIONFIRMADA"]="AEC_76238969K_TIPO46_FOLIO13179_CESIONFIRMADA.xml";
$CONFACTRONICA["DOCUMENTOAECPORFIRMAR"]="AEC_76238969K_TIPO46_FOLIO13179_DOCUMENTOAECPORFIRMAR.xml";
$CONFACTRONICA["DOCUMENTOAECFIRMADO"]="AEC_76238969K_TIPO46_FOLIO13179_DOCUMENTOAECFIRMADO.xml";
# 
# 
# 
#CONFIGURACIÓN DEL SERVIDOR DE FACTURACIÓN
$CONFACTRONICA["URLHOST"]="https://www.suservidor.cl/factronica_cederfactura/cesion_recibe_txt.php";
$CONFACTRONICA["URLFILE"]="cesion_recibe_txt.php";
$CONFACTRONICA["PORT"]="80";
$CONFACTRONICA["VERBOSE"]="1";
$CONFACTRONICA["RETURNTRANSFER"]="1";
$CONFACTRONICA["TIMEOUT"]="30";
$CONFACTRONICA["HEADER"]="0";
$CONFACTRONICA["HEADER_OUT"]="1";
# 
# 
# 
#DATOS DE CARATULA
$DocumentoAEC["ID"]="AEC_76238969K_TIPO46_FOLIO13179_ID_AEC";
$Caratula["RutCedente"]="78463790-5";
$Caratula["RutCesionario"]="96660790-4";
$Caratula["NmbContacto"]="FACTOTAL S.A.";
$Caratula["FonoContacto"]="226855900";
$Caratula["MailContacto"]="pnorambuena@ft.cl";
# 
# 
# 
#DATOS DEL CESION
$DocumentoCesion["ID"]="AEC_76238969K_TIPO46_FOLIO13179_ID_DOC";
$DocumentoCesion["SeqCesion"]="1";
# 
# 
# 
#DATOS DEL DTE
$IdDTE["TipoDTE"]="46";
$IdDTE["RUTEmisor"]="78463790-5";
$IdDTE["RUTReceptor"]="76238969-K";
$IdDTE["Folio"]="13179";
$IdDTE["FchEmis"]="2022-01-31";
$IdDTE["MntTotal"]="43970850";
# 
# 
# 
#DATOS DEL CEDENTE
$Cedente["RUT"]="78463790-5";
$Cedente["RazonSocial"]="EXPORTADORA COPRAMAR LTDA";
$Cedente["Direccion"]="LAS TOSCAS RUTA L-25 KM.7";
$Cedente["eMail"]="dte@copramar.cl";
$Cedente["RUTAutorizado"]="8894929-3";
$Cedente["Nombre"]="GONZALEZ MIRANDA CARMEN GLORIA";
$Cedente["DeclaracionJurada"]="Yo GONZALEZ MIRANDA CARMEN GLORIA, Rut 8894929-3,en representación de EXPORTADORA COPRAMAR LTDA, RUT 78463790-5 declaro bajo juramento que he puesto a disposición del cesionario FACTOTAL S.A, RUT 96660790-4, el (los) documento(s) donde constan los recibos de la recepción de las mercaderías entregadas o servicios prestados, entregados por parte del deudor de la factura  EXPORTADORA COPRAMAR LTDA,   Rut 78463790-5, de acuerdo a lo establecido en la Ley N° 19.983.";
# 
# 
# 
#DATOS DEL CESIONARIO
$Cesionario["RUT"]="96660790-4";
$Cesionario["RazonSocial"]="FACTOTAL S.A";
$Cesionario["Direccion"]="ANDRES BELLO 2233 PROVIDENCIA";
$Cesionario["eMail"]="pnorambuena@ft.cl";
# 
# 
# 
#DATOS DEL DOCUMENTO CEDIDO
$DocumentoCesion["MontoCesion"]="43970850";
$DocumentoCesion["UltimoVencimiento"]="2022-01-31";
$DocumentoCesion["eMailDeudor"]="dte@copramar.cl";
# 
# 
# 
#CONFIGURACION DE NOMBRES DE CARPETAS Y ARCHIVOS
$DocumentoDTECedido["ID"]="AEC_76238969K_TIPO46_FOLIO13179_DTEURI";
# 
# 
# 
#CARGAR CERTIFICADO DIGITAL

$certificado["Modulus"]="3pr2gEoi8LFOTEy12/ukLkvexoKehCkHFtf1509I6kv0qvIt/i2p6DUFTeDwHFOS
OOfuyYAEJ2bbYQIKy1SUtIqXDUqVUuXv/WNvOniYuNphjgBsbhR+mMXk4ISg9zgh
v/h38+c/b6edZSzqmSS+mzHYsXOgUytvl/VgZOW0A9U=";# MODULO DEL CERTIFICADO

$certificado["Exponent"]="AQAB";# EXPONENTE DEL CERTIFICADO

$certificado["X509Certificate"]="MIIGPTCCBSWgAwIBAgIKWc3d+wAAABTyeDANBgkqhkiG9w0BAQUFADCB0jELMAkG
A1UEBhMCQ0wxHTAbBgNVBAgTFFJlZ2lvbiBNZXRyb3BvbGl0YW5hMREwDwYDVQQH
EwhTYW50aWFnbzEUMBIGA1UEChMLRS1DRVJUQ0hJTEUxIDAeBgNVBAsTF0F1dG9y
aWRhZCBDZXJ0aWZpY2Fkb3JhMTAwLgYDVQQDEydFLUNFUlRDSElMRSBDQSBGSVJN
I58feqvx9hkoA60VqZ7wd70AJkQCw6MQKk4Td2KVUp4P85CPljjTo/GEnjAP4LQD
P4kAZwkYPOeCxl1Ird/BZcvYgh6Jz2H9FgOqlYlY0Y2YaXucDEap0Etaz93N+jNC
VkuyuW0EdsozoMopnofyOc4=";# X509 DEL CERTIFICADO

$certificado["PrivKey"]="-----BEGIN RSA PRIVATE KEY-----
MIICXAIBAAKBgQDemvaASiLwsU5MTLXb+6QuS97Ggp6EKQcW1/XnT0jqS/Sq8i3+
bfrUeLdp+Mqc4HUzOadXb5H+zshkcOkoalTIAGznqHAvusCjFkCdwJe2ZdT9JcrR
amcZXyTW7DoEW6HC5wJBAOW/F3berpKSbthzJNZGBdUZOYwlDK80sDDxB4TI0jL+
MWphHeiyKBw/IlE3uCcWQqkSexW6E0sfaVA6iBl/xjM=
-----END RSA PRIVATE KEY-----";# LLAVE PRIVADA DEL CERTIFICADO
?>
