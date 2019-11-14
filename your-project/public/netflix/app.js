let allText;

function readTextFile(file)
{
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
               allText = rawFile.responseText;
                
            }
        }
    }
    rawFile.send(null);
}

readTextFile("liste.txt");


let tabListes = allText.split(')');

formulaire = document.createElement('FORM');
formulaire.setAttribute('class', 'text-center mt-3')
titre = document.createElement('LABEL');
titre.setAttribute('class', 'text-white mr-1') 
titre.innerHTML = "Liste catégorie Netflix :";
menu = document.createElement('SELECT');
menu.setAttribute('class', 'btn btn-dark')
menu.setAttribute('id', 'onchange')
menu.setAttribute("onchange", "window.document.location.href=this.options[this.selectedIndex].value;");
formulaire.appendChild(titre);
formulaire.appendChild(menu);
document.body.appendChild(formulaire);


tabListes.forEach(function(element) {
  
    options = document.createElement('OPTION');
    options.appendChild(document.createTextNode(element.replace(/[0-9]/gi, ' ')));// texte visible sans les chiffres
    options.value = "https://www.netflix.com/browse/genre/"+element.match(/\d+/g); //regex pour ne garder que les chiffres et avoir un lien valide
    menu.appendChild(options);//on accroche chaque option

}); 

function redirection(goto){
    const confirmation = confirm("Vous allez être redirigé sur Netflix dans la catégorie choisie êtes-vous sûrs de votre choix ? ");
    if (confirmation && goto != '') {
    window.location = goto;

    }
}

const select = document.getElementById('onchange');

select.onchange = function(){
const goto = this.value;
redirection(goto);
    
};

// Mon github https://github.com/albanSimplon