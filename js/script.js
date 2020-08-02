// $a = 1;
// $b = Return($a)
// document.write($b + "<br>");
// url = document.getElementById('mylink');
// document.write(url + "<br>");

// for (var i = 0; i < document.links.length; i++) {
// 	document.write(document.links[i].href + "<br>");
// }
// dw(1);

// document.location.href='http://google.com'

onerror = errorHanlder;
document.writ("Hello world");


function errorHanlder(message, url, line){

	out = "К сожалению, обнаружена ошикба\n\n";
	out += "Ошибка: " + message + "\n";
	out += "URL: " + url + "\n";
	out += "Строка: " + line + "\n\n";
	out += "Нажмите кнопку ОК для продолжения работы\n";
	alert(out);
	return true;

}


function dw(a){
	document.write(a);
}

