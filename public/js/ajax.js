$('#category').on('change', function(e){
    console.log(e);

    var cat_id = e.target.value;

    $.get('/ajax?cat_id='+cat_id, function(data){
        console.log(data);
        $('#book').empty();
        $.each(data, function(index, sub){
            $('#book').append('<option value="'+sub.id+'">'+sub.book_title+'</option>')
        });
    });
});
