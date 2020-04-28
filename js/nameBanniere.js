// fonction pour afficher mon nom
var i=0;
var mytext="Cv Developpeur Web";
var mytextelem=document.getElementById("subtitle");
var mycurrenttext="";
function myFunction () {
    if (i<mytext.length) {
        setTimeout(function(){
            mycurrenttext=mycurrenttext+mytext[i];
            mytextelem.textContent=mycurrenttext;
            i++;
            myFunction();
            },200);
    }
}
myFunction ();