$(document).ready ->
        $("#buscador").keyup ->
                texto = $("#buscador").val().toUpperCase()
                modelo.amigos []
                for i in modelo.backup()
                        if btn_m or btn_f
                                if i.name.toUpperCase().indexOf(texto) isnt -1 and btn_m and i.gender isnt "female" 
                                        modelo.amigos.push i
                                else if i.name.toUpperCase().indexOf(texto) isnt -1 and btn_f and i.gender isnt "male"  
                                        modelo.amigos.push i
                        else
                                if i.name.toUpperCase().indexOf(texto) isnt -1
                                        modelo.amigos.push i
            
                
