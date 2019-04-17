var FormMaker = function(id){
    this.id = id;

    this.print = function(html){
        var formLocale =  document.getElementById(this.id);
        formLocale.innerHTML = formLocale.innerHTML+html;
    }
}
