var links = [
	'https://wordpress.org',
	'https://de.wordpress.org',
	'https://wordpress.com',
	'https://mozilla.org',
	'https://apache.org',
	'https://gnu.org',
]

var randomlink = function() {
	var randIdx = Math.random() * links.length;
	randIdx = parseInt(randIdx, 10);
	var link = links[randIdx];
	return link;
};
if (document.getElementById( "randomlink" )) {
	document.getElementById( "randomlink" ).onclick = function() {
		document.getElementById("randomlink").href= randomlink();
	}
}
