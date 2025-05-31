fetch('https://newsapi.org/v2/top-headlines?country=fr&apiKey=2170c0874d544f46b19c054effec739a')
    .then(response => response.json())
    .then(data => {
        let fluxContainer = document.getElementById('flux-container');
        fluxContainer.innerHTML = ''; // Nettoyer l'affichage précédent

        data.articles.forEach(article => {
            let fluxItem = document.createElement('div');
            fluxItem.innerHTML = `<h3><a href="${article.url}" target="_blank">${article.title}</a></h3>
                                  <p>${article.description}</p>`;
            fluxContainer.appendChild(fluxItem);
        });
    })
    .catch(error => console.error('Erreur lors du chargement des actualités :', error));
	headers: {
  "Upgrade": "HTTP/2"
}
