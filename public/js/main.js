const data = null;

const xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener('readystatechange', function () {
	if (this.readyState === this.DONE) {
		console.log(this.responseText);
	}
});

xhr.open('GET', 'https://api-basketball.p.rapidapi.com/standings/groups?season=2019-2020&league=12');
xhr.setRequestHeader('X-RapidAPI-Key', '0a68cd657amsh10d5aaa26bfcf36p1f5bc3jsn3faeed31935a');
xhr.setRequestHeader('X-RapidAPI-Host', 'api-basketball.p.rapidapi.com');

xhr.send(data);