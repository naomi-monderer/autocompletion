document.addEventListener('DOMContentLoaded', (event) => {

   var val = document.querySelector('input')
    console.log(val);
    
    var ul1 = document.getElementById('suggestions');
    console.log(ul1);
    var ul2 = document.getElementById('all-result');
    console.log(ul2);
    // var content = document.getElementById('parent-div')
    var content = document.getElementsByClassName('parent')

    console.log(content)

    val.addEventListener('keyup', (event)=>
    {
        // console.log(val.value)\
    ul1.innerHTML = ""
    ul2.innerHTML = ""  
      
    var valData = new FormData();
    valData.append('searchBar', val.value)
    fetch("searchController.php",
        {
            method: 'POST',
            body: valData
        
        })
        .then(response => response.json())
       

        .then(response => {

            // si l'input de ma barre de recherche n'est pas vide 
            // lenght compte le nombre de caractère présent dans l'input
            if(val.value.length !== 0)
            {  
                // console.log(val.value.innerHTML)
                console.log(response)
                // console.table(response.startBy)

                // si je rentre une valeur dans mon input qui match avec la première lettre d'un nom d'artiste
                // je passe dans le if. car s'il y a des resultats c'est que mon tableau me renvoit des noms, il n'est pas vide.
                if(response.startBy.length !== 0)
                {   
                    //lorsque je parcours mon tableau a chaque fois qu'il y a un match, je créais un élément li dans ma ul
                    for(var i = 0; i < response.startBy.length; i++)
                    { 
                        
                        var li1 = document.createElement('li')
                        ul1.appendChild(li1);
                        
                        li1.innerHTML = response.startBy[i].nom_artiste
                        // console.log(li1.innerHTML)
                        var artisteName = li1.innerHTML
                        console.log(artisteName)
                    }
                    // je veux que si tu click sur entrée (submit de l'html) 
                    // ca envoie et affiche les résultats trouvés au moment de l'autocompletion dans la page recherche.php
                    // de quoi j'ai besoin?
                    // j'ai besoin de créer une adresse url qui get le ou les résultats du tableau. 
                    // j'ai peut-être besoin de créer un on click event ?
                    // if(val.value == startswith(artisteName, 0))
                    // {

                    // }
                }
                else
                {
                    var noResults =  document.createElement('p')
                    console.log(noResults);
                    // p = document.getElementsByTagName('p')
    
                    noResults.innerHTML = "result not found"
                    ul1.appendChild(noResults)
                    console.log(ul1);
    
                   
                    // console.log("result not found")
                }
                if(response.allSearches.length !== 0)
                {
                    for(var j = 0; j < response.allSearches.length; j++)
                    {
                        var li2 = document.createElement('li');
                        ul2.appendChild(li2);
                        li2.innerHTML = response.allSearches[j].nom_artiste
                        console.log(li2.innerHTML);
                    }
                }

            }
            else
            {
               
                var hiddenClass = document.getElementsByClassName
                // content[0].classList.add(hidden);


            }
           
           

        })
    })

})

// je dois rendre clickable mes resultats de recherche.
// lorsque je click sur submit j'arrive sur la page recherche.php. 
// qu'est ce qu'il doit y avoir sur cette page?
// je dois get  tout les artiste_nom des artistes qui commencent par la value et les envoyer sur recherche


// if (val.value == à la première lettre de artiste_nom et if click submit submit)
// {
//     
//
// }