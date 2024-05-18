const url = 'https://imdb8.p.rapidapi.com/auto-complete?q=game%20';
const options = {
    method: 'GET',
    headers: {
        'X-RapidAPI-Key': 'd40f0136f9msh92d690ee6a4fb28p1a44dbjsn54ae54d72430',
        'X-RapidAPI-Host': 'imdb8.p.rapidapi.com'
    }
};

async function fetchIMDBData() {
try {
    const response = await fetch(url, options);
    const result = await response.text();
    console.log(result);
    const resultsDiv = document.getElementById('results');
    result.d.forEach(item => {
        const movieDiv = document.createElement('div');
        movieDiv.innerHTML = `
            <h2>${item.l}</h2>
            <p><img src="${item.i.imageUrl}" alt="${item.l}" width="100"></p>
            <p>${item.s}</p>
        `;
        resultsDiv.appendChild(movieDiv);
    });
} catch (error) {
    console.error(error);
}
}
fetchIMDBData();