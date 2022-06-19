// alert('js file loaded')

const movie_form = document.querySelector('#movie_form')
const movie_title = document.querySelector('#movie-title')
const movie_cover = document.querySelector('#movie-cover')
const movie_type = document.querySelector('#movie-type')
const movie_duration = document.querySelector('#movie-duration')
const movie_release_date = document.querySelector('#movie-release_date')
const movie_rating = document.querySelector('#movie-rating')
const movie_language = document.querySelector('#movie-language')
const movie_playing_date = document.querySelector('#movie-playing_date')
const movie_ticket_price = document.querySelector('#movie-ticket_price')
const movie_story = document.querySelector('#movie-story')
const movie_triler = document.querySelector('#movie-triler')

// errors for movie form
const movie_title_errors = document.querySelector('#movie_title_errors')
const movie_cover_errors = document.querySelector('#movie_cover_errors')
const movie_type_errors = document.querySelector('#movie_type_errors')
const movie_duration_errors = document.querySelector('#movie_duration_errors')
const movie_release_date_errors = document.querySelector('#movie_release_date_errors')
const movie_rating_errors = document.querySelector('#movie_rating_errors')
const movie_language_errors = document.querySelector('#movie_language_errors')
const movie_playing_date_errors = document.querySelector('#movie_playing_date_errors')
const movie_ticket_price_errors = document.querySelector('#movie_ticket_price_errors')
const movie_story_errors = document.querySelector('#movie_story_errors')
const movie_triler_errors = document.querySelector('#movie_triler_errors')

// form validation

movie_form.addEventListener('submit', (e) => {
    let errors = 0
    if (movie_title.value == '') {
        movie_title_errors.textContent = 'Movie title is required'
        movie_title.style.borderColor = 'red'
        errors++
    }
    if (movie_cover.value == '') {
        movie_cover_errors.textContent = 'Movie cover is required'
        movie_cover.style.borderColor = 'red'
        errors++
    }
    if (movie_type.value == '') {
        movie_type_errors.textContent = 'Movie type is required'
        movie_type.style.borderColor = 'red'
        errors++
    }
    if (movie_duration.value == '') {
        movie_duration_errors.textContent = 'Movie duration is required'
        movie_duration.style.borderColor = 'red'
        errors++
    }
    if (movie_release_date.value == '') {
        movie_release_date_errors.textContent = 'Movie release date is required'
        movie_release_date.style.borderColor = 'red'
        errors++
    }
    if (movie_rating.value == '') {
        movie_rating_errors.textContent = 'Movie rating is required'
        movie_rating.style.borderColor = 'red'
        errors++
    }
    if (movie_language.value == '') {
        movie_language_errors.textContent = 'Movie language is required'
        movie_language.style.borderColor = 'red'
        errors++
    }
    if (movie_playing_date.value == '') {
        movie_playing_date_errors.textContent = 'Movie playing date is required'
        movie_playing_date.style.borderColor = 'red'
        errors++
    }
    if (movie_ticket_price.value == '') {
        movie_ticket_price_errors.textContent = 'Movie ticket price is required'
        movie_ticket_price.style.borderColor = 'red'
        errors++
    }
    if (movie_story.value == '') {
        movie_story_errors.textContent = 'Movie story is required'
        movie_story.style.borderColor = 'red'
        errors++
    }
    if (movie_triler.value == '') {
        movie_triler_errors.textContent = 'Movie triler is required'
        movie_triler.style.borderColor = 'red'
        errors++
    }
    if (errors > 0) {
        e.preventDefault()
    }
})



