const apiKey = '44312b00c261eb2dc776121e4b09bb0b';
const url = `https://api.themoviedb.org/3/movie/popular?api_key=${apiKey}`;

fetch(url)
  .then(response => response.json())
  .then(data => {
    const movies = data.results;
    let moviesHTML = '';

    movies.forEach(movie => {
      const movieHTML = `
        <div class="movie">
          <img src="https://image.tmdb.org/t/p/w500${movie.poster_path}" alt="${movie.title}">
          <h2>${movie.title}</h2>
          <p>Rating: ${movie.vote_average}</p>
        </div>
      `;
      moviesHTML += movieHTML;
    });

    document.getElementById('movies').innerHTML = moviesHTML;
  })
  .catch(error => {
    console.error('Error fetching data:', error);
    document.getElementById('movies').innerHTML = '<p>Veri alınırken bir hata oluştu. Lütfen daha sonra tekrar deneyin.</p>';
  });