$(document).ready(function(){
    // $('#titre').on('mouseenter', Animations);
    // function Animations()
    // {
    //     $('#titre').animate({width : '-=10%'},1000)
    //     $('#titre').animate({fontSize : '30px'})
    //     $('#titre').fadeOut(3000)
    //     $('#titre').fadeIn(5000)
    //     $('#titre').animate({width :'+=10%'},1000);
    //     $('#titre').css('color','orange');
    // }
    // $('#Menu').hide();
    // $('#animerMenu').on({
    //     'mouseenter' : function()
    //     {
    //         $('#afficher_menu').css({
    //             'color' : 'yellow',
    //             'background' : 'rgb(79, 183, 197)'
    //         });
    //         $('#afficher_menu').text('Cliquer pour voir le menu');
    //         $('#animerMenu').click(function(){
    //             $('#Menu').show(1000);  
    //         });
             
    //     },
    //     'mouseleave' : function()
    //     {
    //         $('#Menu').delay(7000);
    //         $('#Menu').hide(6000);
    //         $('#afficher_menu').css({
    //             'color' : '',
    //             'background' : ''
    //         });
    //         $('#afficher_menu').text('Passer le curseur ici pour le Menu');     
    //     }
    // });
    
});
var  button_soumission = document.getElementById('button_soumission');

var nom = document.getElementById('nom');
var nom_valid = document.getElementById('nom_valid');

var prenom = document.getElementById('prenom');
var prenom_valid = document.getElementById('prenom_valid');

var dateNaissance = document.getElementById('dateNaissance');
var dateNaissance_valid = document.getElementById('dateNaissance_valid');

var surnom = document.getElementById('surnom');
var surnom_valid = document.getElementById('surnom_valid');

var ville = document.getElementById('ville');
var ville_valid = document.getElementById('ville_valid');

var adresse = document.getElementById('adresse');
var adresse_valid = document.getElementById('adresse_valid');

var metier = document.getElementById('metier');
var metier_valid = document.getElementById('metier_valid');

var nationalite = document.getElementById('nationalite');
var nationalite_valid = document.getElementById('nationalite_valid');

var genre = document.getElementById('genre');
var genre_valid = document.getElementById('genre_valid');

var photo = document.getElementById('photo');
var photo_valid = document.getElementById('photo_valid');

// var password = document.getElementById('password');
// var password_valid = document.getElementById('password_valid');

// var password_confirm = document.getElementById('password_confirm');
// var password_confirm_valid = document.getElementById('password_confirm_valid');

var regex_prenom_valid = /^[A-Z][a-zéèàê]+[^0-9]/;
var regex_nom_valid = /^[A-Z][a-zéèàê]+[^0-9]/;
var regex_surnom_valid = /^[A-Z][a-zéèàê]+[0-9]/;
var regex_ville_valid = /^[A-Z][a-zéèàê]+[^0-9]/;
var regex_adresse_valid = /^[A-Z][a-zéèàê]+[0-9]/;
var regex_metier_valid = /^[A-Z][a-zéèàê]+[^0-9]/;
var regex_nationalite_valid =/^[A-Z][a-zéèàê]+[^0-9]/;

button_soumission.addEventListener('click',f_valid);
function f_valid(e)
{
    // nom
    if(nom.validity.valueMissing)
    {
        e.preventDefault();
        nom_valid.innerHTML= '<b>Le nom doit être renseigné<b>';
        nom_valid.style.color = 'red';
    }
    else if(regex_nom_valid.test(nom.value) == false)
    {
        nom_valid.innerHTML = '<b>Format inccorecte</b>';
        nom_valid.style.color = 'orange';
       
    }

    // prénom
    if(prenom.validity.valueMissing)
    {
        e.preventDefault();
        prenom_valid.innerHTML= '<b>Le prénom doit être renseigné</b>';
        prenom_valid.style.color = 'red';
        
    }
    else if(regex_prenom_valid.test(prenom.value) == false)
    {
        prenom_valid.innerHTML = '<b>Format inccorecte</b>';
        prenom_valid.style.color = 'orange';
    }

    // dateNaissance
    if(dateNaissance.validity.valueMissing)
    {
        e.preventDefault();
        dateNaissance_valid.innerHTML= '<b>Ce champ est requis</b>';
        dateNaissance_valid.style.color = 'red';     
    }
    
    // surnom
    if(surnom.validity.valueMissing)
    {
        e.preventDefault();
        surnom_valid.innerHTML= '<b>Ce champ est requis</b>';
        surnom_valid.style.color = 'red'; 
    }
    else if(regex_surnom_valid.test(surnom.value) == false)
    {
        surnom_valid.innerHTML = '<b>Format inccorecte</b>';
        surnom_valid.style.color = 'orange';
    }

    // ville
    if(ville.validity.valueMissing)
    {
        e.preventDefault();
        ville_valid.innerHTML= '<b>Ce champ est requis</b>';
        ville_valid.style.color = 'red'; 
    }
    else if(regex_ville_valid.test(ville.value) == false)
    {
        ville_valid.innerHTML = '<b>Format inccorecte</b>';
        ville_valid.style.color = 'orange';
    }

    // adresse
    if(adresse.validity.valueMissing)
    {
        e.preventDefault();
        adresse_valid.innerHTML= '<b>L\'adresse doit être renseignée</b>';
        adresse_valid.style.color = 'red'; 
    }
    else if(regex_adresse_valid.test(adresse.value) == false)
    {
        adresse_valid.innerHTML = '<b>Format inccorecte</b>';
        adresse_valid.style.color = 'orange';
    }

    // metier
    if(regex_metier_valid.test(metier.value) == false)
    {
        metier_valid.innerHTML = '<b>Format inccorecte</b>';
        metier_valid.style.color = 'orange';
    }

    // genre
    if(genre.validity.valueMissing)
    {
        e.preventDefault();
        genre_valid.innerHTML= '<b>Ce champ est requis</b>';
        genre_valid.style.color = 'red'; 
    }

    // nationalite
    if(nationalite.validity.valueMissing)
    {
        e.preventDefault();
        nationalite_valid.innerHTML= '<b>Ce champ est requis</b>';
        nationalite_valid.style.color = 'red'; 
    }
    else if(regex_nationalite_valid.test(nationalite.value) == false)
    {
        nationalite_valid.innerHTML = '<b>Format inccorecte</b>';
        nationalite_valid.style.color = 'orange';
    }


    // photo
    if(photo.validity.valueMissing)
    {
        e.preventDefault();
        photo_valid.innerHTML= '<b>Ce champ est requis</b>';
        photo_valid.style.color = 'red'; 
    }
    else if(regex_nationalite_valid.test(photo.value) == false)
    {
        photo_valid.innerHTML = '<b>Format inccorecte</b>';
        photo_valid.style.color = 'orange';
    }
    else
    {

    }
}