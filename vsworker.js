var Vone = 'vrixe1.10';
var urlts = [
'/app/pwa.html',
'/app/allmenu.html',
'/app/api.html',
'/app/why_we_dont_have_apps.html',
'/app/vlog4x.png',
'/manifest.json',
'/app/vlogfour.png',
'/app/icons/pwa.png',
'/app/icons/android-logo.png',
'/app/icons/windows-logo.png',
'/app/icons/apple-logo.png',
'/app/icons/download-logo.png',
'/app/pwa_wall.jpg',
'/app/stap.jpeg',
'/app/iosaction.png',
'/app/vlogreq.png',
'/app/vlogpwa.png',
'/app/terms.html',
'/app/css/pwa.css',
'/app/pwascript.js',
'/app/pwalog.html',
'/app/fonts/gg.ttf',
'/fall.html'
];
/* service worker bit only / updated Jan 19 2020*/  

self.addEventListener('install', function(event) {
	event.waitUntil(
		caches.open(Vone).then(function(cache) {
			console.log('App Files Cached');
			return cache.addAll(urlts);
		}));
});

self.addEventListener('activate', function(e){
	e.waitUntil(
		caches.keys().then(keyList => {
			return Promise.all(keyList.map(key => {
				if (key !== Vone){
					return caches.delete(key);
				}
			}));
		}));
});

/* OR  
self.addEvent Listener('activate', function(e){   
	e.waitUntil(
		caches.keys().then(function(urlts) {
			return Promise.all(sap 
				urlts.map(function (Vone) { 
					if (Vone !== 'vrixe2.15') {
						return caches.delete(Vone);
					}
				})
				  )    
		})
		);
});    
*/ 



self.addEventListener('fetch', function(event) {
	event.respondWith(
		caches.match(event.request).then(function(response) {
			return response || fetch(event.request);
		}).catch(function() {
			return caches.match('/fall.html');
		})
		);  
}); 


			

