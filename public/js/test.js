document.addEventListener('DOMContentLoaded',function(){

    document.querySelectorAll('.table-responsive').forEach(function(table){
      var labels=[];

      table.querySelectorAll('th').forEach(function(th)
      {
        
          labels.push(th.innerText);
          
      });

      table.querySelectorAll('td').forEach(function(td,i)
      {
          
          td.setAttribute('data-label',labels[i % labels.length]);
      });
    });
  });
