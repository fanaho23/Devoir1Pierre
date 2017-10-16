function InsererTypeIndividu()
{
        
        $.ajax 
        (
            {
                type:"get",
                url:"InsertionLeTypeIndividu",
                data:"libelle="+$('#txt1').val()+"&code="+$('#p1').text(),
                success:function(data)
                {
                    $('#divTypesIndividus').empty();
                    $('#divTypesIndividus').append(data);
                },
                error:function()
                {
                   // alert('Erreur pendant l insertion!');
                }
            }
                 
        );   
}

