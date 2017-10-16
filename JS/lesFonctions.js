function AfficherRayonsBySecteur()
{
        
        $.ajax 
        (
            {
                type:"get",
                url:"index.php/Ctrl_Supermarche/GetRayonsBySecteur",
                data:"codeSecteur="+$('#txt1').val(),
                success:function(data)
                {
                    $('#divSecteur').empty();
                    $('#divSecteur').append(data);
                },
                error:function()
                {
                    alert('Erreur pendant la séléction du Secteur!');
                }
            }
                 
        );   
}
function AfficherEmployesByRayons()
{
    $.ajax 
        (
            {
                type:"get",
                url:"index.php/Ctrl_Supermarche/GetEmployeByRayon",
                data:"codeRayon="+$('#txt2').val(),
                success:function(data)
                {
                    $('#divRayon').empty();
                    $('#divRayon').append(data);
                },
                error:function()
                {
                    alert('Erreur pendant la séléction du Rayon!');
                }
            }
                 
        );   
    
}


