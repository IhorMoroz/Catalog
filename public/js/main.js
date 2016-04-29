$(document).ready(function(){
   $('.delAction').on('click', function(e){
       var res = confirm('Вы действительно хотите удалить этот товар?');
       if(!res) e.preventDefault();
   });
});
