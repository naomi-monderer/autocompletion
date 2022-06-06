document.addEventListener('DOMContentLoaded', (event) => {

   var val = document.querySelector('input')
    console.log(val);
    
    var ul1 = document.getElementById('suggestions');
    console.log(ul1);
    var ul2 = document.getElementById('all-result');
    console.log(ul2);
   
    var content = document.querySelector('.parent');

    var hr = document.getElementById('separator');
    hr.hidden = true;  

    console.log(content)
    content.style.display = "none"
    val.addEventListener('keyup', (event)=>
    {
        // if(val.value.length > 0){
        //     val.style.bore =
        // }
        // console.log(val.value)\
    ul1.innerHTML = ""
    ul2.innerHTML = ""  
    hr.hidden = true; 
      
    var valData = new FormData();
    valData.append('searchBar', val.value)
    fetch("searchController.php",
        {
            method: 'POST',
            body: valData
        
        })
        .then((response) => {
            console.log(response)
          return response.json()
        })

      

        .then((response) => {
            
            // si l'input de ma barre de recherche n'est pas vide 
            // lenght compte le nombre de caractère présent dans l'input
            if(val.value.length !== 0)
            {   hr.hidden = false; 
                content.style.display = "initial"
                val.style.borderRadius = "20px 0px 0px 1px"
                console.log(response.startBy)
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
                val.style.borderRadius = "20px 0 0 20px"
                content.style.display = "none"
                // content[0].classList.add(hidden);


            }
           
           

        })
    })

})
