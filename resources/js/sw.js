const  cacheName = 'SMO'

console.log("service worker rodou");

self.addEventListener('install', function(event) {
    console.log("install event detected");
    event.waitUntil(
        caches.open(cacheName).then(function(cache){
            cache.addAll([
                './',
                './FormDTI.blade.php',
                './FormOcorrencias.blade.php',
                './FormPredial.blade.php',
                './HomeDTI.blade.php',
                './HomePredial.blade.php',
                './HomeUsuario.blade.php',
                './tabeladti.blade.php',
                './TabelaODTI.blade.php',
                './TabelaOPredial.blade.php',
                './tabelapredial.blade.php',
                './welcome.blade.php',
                './main.js',
                './manifest.json',
                './sw.js',
                './web.php'
            ])
        })
    )
    return self.skipWaiting()
});

self.addEventListener('activate', e =>{
    self.clients.claim()
})

self.addEventListener('fetch', async e =>{
    const req = e.request
    const url = new URL(req.url)
})
