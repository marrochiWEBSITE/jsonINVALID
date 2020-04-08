searchMovie = () => {
    $.ajax({
        url: 'http://www.omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey' : '3438f231',
            's' : $('#search-input').val()
        },
        success: function(bebasnamanya){
            $('#movie-list').html(``)
               if(bebasnamanya.Response == "True"){
                    let movies = bebasnamanya.Search;

                    $.each(movies, function(i, data){
                        $('#movie-list').append(`
                       <div class="col-md-4">
                       <div class="card" >
                       <img src="${data.Poster}" class="card-img-top" alt="...">
                       <div class="card-body">
                           <h5 class="card-title ">${data.Title}</h5>
                           <h6 class="card-title ">${data.Year}</h6>
                           <a type="#" class="card-link see-detail" data-toggle="modal" data-target="#exampleModal" data-id="${data.imdbID}">
                           See all...
                         </a>
                       </div>
                       </div>
                       </div>

                      
                        `)
                    });
                    $('#search-input').val('');
               }else{
                   $('#movie-list').html(``)
                   $('#movie-list').html(`<h1>${bebasnamanya.Error}</h1>`)
               }
        }
    });
}


$('#search-button').click(function(){
            searchMovie()
   
});

$('#search-input').on('keyup',function(bebasE){
    if(bebasE.which === 13 ){
        searchMovie()
    }
})

$('#movie-list').on('click', '.see-detail', function(){
    $.ajax({
        url: 'http://www.omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey' : '3438f231',
            'i' : $(this).data('id')
        },
        success: function(bebasnamanyaE){
        if(bebasnamanyaE.Response === 'True'){

            $('div.modal-body').html(`<div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                        <img src="${bebasnamanyaE.Poster}" alt="" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <ul class="list-group">
                        <li class="list-group-item">${bebasnamanyaE.Title}</li>
                        <li class="list-group-item">${bebasnamanyaE.Year}</li>
                        <li class="list-group-item">${bebasnamanyaE.Released}</li>
                        <li class="list-group-item">${bebasnamanyaE.Runtime}</li>
                        <li class="list-group-item">${bebasnamanyaE.Genre}</li>
                        <li class="list-group-item">${bebasnamanyaE.Language}</li>
                      </ul>
                </div>
            </div>
        </div>`);
        }
        }
    });
});