function objetoAjax(){
	var xmlhttp=false;
	try	{
xmlhttp =new ActiveXObject("Msxml2.XMLHTTP");

}catch(e){
	try	{
xmlhttp =new ActiveXObject
("Microsoft.XMLHTTP");

}catch(ee){
	xmlhttp=false;
}
}
if(!xmlhttp && typeof XMLHttpRequest!='undefined')
{
	xmlhttp=new XMLHttpRequest();
}
return xmlhttp;
}


function cargar(ruta,destino){
	divResultado=document.getElementById('contenido');
	ajax = objetoAjax();
	console.log('entro a la funcion:' + ajax);
	ajax.open("GET",ruta);
	console.log('entro a la funcion' + ruta);
	ajax.onreadystatechange=function(){
		console.log('entro a la funcion');
	document.body.style.cursor="wait";
	if (ajax.readyState==1) {
		divResultado.innerHTML="Esperando...";
	}
	if (ajax.readyState==4) {
		divResultado.innerHTML=ajax.responseText;
		document.body.style.cursor="Auto";
	}

}
ajax.setRequestHeader("Content-type","text/html");
ajax.send();
}