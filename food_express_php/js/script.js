
// ................... programme connexion (page accueil)...................
const Users = {
    "nom":[],
    "prenom": [],
    "email":[],
    "motDePasse":[],
    "phone":[],
    "adresse":[],
    "codePostal":[]
}

$(document).ready(function(){

$("#inscrire").click(function(){


    let nom = $("#inputNom").val()
    let prenom = $("#inputPrenom").val()
    let email = $("#inputEmail4").val()
    let motDePasse = $("#inputPassword4").val()
    let phone = $("#inputPhone").val()
    let adresse = $("#inputAdresse").val()
    let codePostal = $("#inputGroupSelect01").val()

    if(nom && prenom && email && motDePasse && phone && adresse && codePostal !== ""){

        Users.nom.push(nom)
        Users.prenom.push(prenom)
        Users.email.push(email)
        Users.motDePasse.push(motDePasse)
        Users.phone.push(phone)
        Users.adresse.push(adresse)
        Users.codePostal.push(codePostal)

        alert ("Vous êtes inscrit! veuillez vous connecter.")

    }else{
        alert ("Veuillez remplir les champs.")
    }


})


$("#connecter").click(function(){

    let newemail= document.getElementById("exampleInputEmail1").value
    let newpassword= document.getElementById("exampleInputPassword1").value

    for (let i = 0; i < Users.email.length && i < Users.motDePasse.length ; i++ ) {

        if (newemail== Users.email[i] && newpassword==Users.motDePasse[i]){

                 alert("Vous êtes connecté! appuyez sur ok pour accéder au site")
                window.open("pages/commander.html");

            }else{

            alert("Veuillez ressaisir vos données!")
        }        
        
    }

})

})


// ................... programme message (page contactez-nous)...................

$(document).ready(function(){
    $("#send-message").click(function(){
    let firstName = $("#recipient-Firstname").val()
    let nickName = $("#recipient-Nickname").val()
    let mail = $("#recipient-email").val()
    let message = $("#message-text").val()

        if(firstName && nickName && mail && message !== "") {
    
              alert("Nous avons réçu votre message.")
              location.reload();
                    
                }else{
    
                alert("Veuillez ressaisir vos données!")
            }        
    })


    $("#fermer").click(function(){
    
              location.reload(); 
    })
})
       
$(document).ready(function(){
    $("#valid-modif").click(function(){
    let nickName_1 = $("#recipient-Nickname_1").val()
    let firstName_1 = $("#recipient-Firstname_1").val()
    let mail_1= $("#recipient-email_1").val()
    let password_1 = $("#recipient-password_1").val()
    let mobile_1 = $("#recipient-mobile_1").val()
    let adresse_1 = $("#inputAdresse_1").val()
    let codePostal_1 = $("#inputGroupSelect01_1").val()

        if(nickName_1 && firstName_1 && mail_1 && password_1 && mobile_1 && adresse_1 && codePostal_1 !== "") {


            Users.nom.push(nickName_1)
            Users.prenom.push(firstName_1)
            Users.email.push(mail_1)
            Users.motDePasse.push(password_1)
            Users.phone.push(mobile_1)
            Users.adresse.push(adresse_1)
            Users.codePostal.push(codePostal_1)
    
              alert("Nous avons modifié vos informations.")
              console.log(Users)
              location.reload();
                    
                }else{
    
                alert("Veuillez ressaisir vos données!")
            }        
    })


    $("#annuler").click(function(){
    
              location.reload(); 
    })
})



// ................... programme panier...................

const total = {
    "ceasar":[],
    "saumon": [],
  
  }
  
        $(document).ready(function(){
  
            $("#commanderceasar").click(function(){
                let ceasar = $("#saladeceasar_input").val()
                 ceasar= ceasar * 13
                if (ceasar!=="") {
                    total.ceasar.push(ceasar)
                    
                }
            })
  
            $("#commandersaumon").click(function(){
                let saumon = $("#saumonfume_input").val()
                saumon = saumon * 13.20
                if (saumon!=="") {
                    total.saumon.push(saumon)
                    
                }
            })
  
           
            $("#valider_salade_input").one ("click",function(){
                $("#sous-total-ceasar").append("Total-ceasar:  ");
                $("#sous-total-ceasar").append(total.ceasar[total.ceasar.length - 1]);
                $("#sous-total-ceasar").append(" €");
                $("#sous-total-saumon").append("Total-saumon:  ");
                $("#sous-total-saumon").append(total.saumon[total.saumon.length - 1]);
                $("#sous-total-saumon").append(" €");

                let sous_total_salade = total.ceasar[total.ceasar.length - 1]+ total.saumon[total.saumon.length - 1]
                $("#sous-total-salade").append("Total-salade:  ");
                $("#sous-total-salade").append(sous_total_salade);
                $("#sous-total-salade").append(" €");
               
                console.log (sous_total_salade)
        
    })


    $('#annuler_salade_input').on('click',function(e) {
        e.preventDefault();
    
        $(".delete").remove();

        location.reload();
        
    });

})


// ................... programme panier (pizza campione)...................


//   let pizzacampione = [];

//   $(document).ready(function(){
  
//     $("#commanderpizzacampion").click(function(){
//         pizzacampione = [$("#pizzacampione_input").val()]
//         pizzacampione= [pizzacampione * 11.5]
//         if (pizzacampione!=="") {
            
//             console.log(pizzacampione)
           
//         }
//     })
    
//     $("#valider_campione_input").one ("click",function(){
//         $("#sous-total-campione").append(pizzacampione[pizzacampione.length - 1]);
//        console.log(pizzacampione[pizzacampione.length - 1])
           
// })

// $('#annuler_campione_input').on('click',function(e) {
// e.preventDefault();

// $(".delete_campione").remove("#sous-total-campione");
// console.log(pizzacampione[pizzacampione.length - 1])

// location.reload();

// });

// })


let campione = [];

$(document).ready(function(){

  $("#commanderpizzacampion").click(function(){
      let pizzacampione = $("#pizzacampione_input").val()
      pizzacampione= pizzacampione * 11.5
      if (pizzacampione!=="") {
          campione.push(pizzacampione)
          console.log(pizzacampione)
          console.log(campione) 
      }
  })
  
  $("#valider_campione_input").on('click',function(e){
    e.preventDefault();
      
      $("#sous-total-campione").append("Total-campione:    ");
      $("#sous-total-campione").append(campione[campione.length - 1]);
      $("#sous-total-campione").append(" €");
      console.log (campione)
         
})


$('#annuler_campione_input').on('click',function(e) {
e.preventDefault();

$(".delete_campione").remove("#sous-total-campione");

// location.reload();


});


})


// ................... programme panier (pizza tono)...................
           


  
 


   



